function easeOutExpo(t) {
  return t >= 1 ? 1 : 1 - 2 ** (-10 * t);
}

function runCounter(el) {
  const from = Number.parseInt(el.dataset.counterFrom ?? '0', 10);
  const to = Number.parseInt(el.dataset.counterTo ?? '0', 10);
  const duration = Number.parseInt(el.dataset.counterDuration ?? '2000', 10);
  const prefix = el.dataset.counterPrefix ?? '';
  const suffix = el.dataset.counterSuffix ?? '';
  const start = performance.now();

  function frame(now) {
    const t = Math.min((now - start) / duration, 1);
    const eased = easeOutExpo(t);
    const current = from + (to - from) * eased;
    el.textContent = `${prefix}${Math.round(current)}${suffix}`;
    if (t < 1) {
      requestAnimationFrame(frame);
    } else {
      el.textContent = `${prefix}${to}${suffix}`;
    }
  }

  requestAnimationFrame(frame);
}

function initCounters() {
  const elements = document.querySelectorAll('[data-counter]');
  if (!elements.length) return;

  const io = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (!entry.isIntersecting) return;
        const el = entry.target;
        if (el.dataset.counterDone) return;
        el.dataset.counterDone = '1';
        runCounter(el);
        io.unobserve(el);
      });
    },
    { rootMargin: '0px 0px -10% 0px', threshold: 0.15 },
  );

  elements.forEach((el) => io.observe(el));
}

function initTeamCarousels() {
  if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) return;

  document.querySelectorAll('[data-team-carousel]').forEach((root) => {
    const track = root.querySelector('[data-team-carousel-track]');
    if (!track) return;

    const loopSeconds = Math.max(
      1,
      Number.parseFloat(root.dataset.teamMarqueeSeconds ?? '50', 10) || 50,
    );

    let position = 0;
    let loopWidth = 0;
    let lastFrame = performance.now();
    let hoverPaused = false;
    let pointerDown = false;
    let lastPointerX = 0;

    function measure() {
      const w = track.scrollWidth / 2;
      if (w > 0 && Number.isFinite(w)) loopWidth = w;
    }

    function normalize() {
      if (loopWidth <= 0) return;
      while (position <= -loopWidth) position += loopWidth;
      while (position > 0) position -= loopWidth;
    }

    function applyTransform() {
      track.style.transform = `translate3d(${position}px,0,0)`;
    }

    function tick(now) {
      measure();
      const dt = Math.min((now - lastFrame) / 1000, 0.1);
      lastFrame = now;

      if (loopWidth > 0 && !pointerDown && !hoverPaused) {
        const speed = loopWidth / loopSeconds;
        position -= speed * dt;
        normalize();
      }

      applyTransform();
      requestAnimationFrame(tick);
    }

    root.addEventListener('pointerenter', () => {
      hoverPaused = true;
    });
    root.addEventListener('pointerleave', () => {
      if (!pointerDown) hoverPaused = false;
    });

    track.addEventListener('pointerdown', (e) => {
      if (e.button !== 0) return;
      pointerDown = true;
      lastPointerX = e.clientX;
      track.classList.add('team-carousel-grabbing');
      track.setPointerCapture(e.pointerId);
    });

    track.addEventListener('pointermove', (e) => {
      if (!pointerDown) return;
      const dx = e.clientX - lastPointerX;
      lastPointerX = e.clientX;
      position += dx;
      normalize();
      applyTransform();
    });

    function endPointer(e) {
      if (!pointerDown) return;
      pointerDown = false;
      track.classList.remove('team-carousel-grabbing');
      try {
        track.releasePointerCapture(e.pointerId);
      } catch {
        /* not capturing */
      }
      if (!root.matches(':hover')) hoverPaused = false;
    }

    track.addEventListener('pointerup', endPointer);
    track.addEventListener('pointercancel', endPointer);

    const ro = new ResizeObserver(() => {
      measure();
      normalize();
      applyTransform();
    });
    ro.observe(track);

    requestAnimationFrame(tick);
  });
}

function initMobileNav() {
  const header = document.querySelector('[data-site-header]');
  const toggle = document.querySelector('[data-menu-toggle]');
  const nav = document.getElementById('primary-navigation');
  if (!header || !toggle || !nav) return;

  const closeBtn = nav.querySelector('[data-menu-close]');
  const backdrop = header.querySelector('[data-drawer-backdrop]');
  const mq = window.matchMedia('(min-width: 768px)');
  let wasDesktop = mq.matches;
  let resizeRaf = 0;

  function setOpen(open) {
    header.setAttribute('data-mobile-nav', open ? 'open' : 'closed');
    toggle.setAttribute('aria-expanded', open ? 'true' : 'false');
    document.documentElement.classList.toggle('overflow-hidden', open);
  }

  function close() {
    setOpen(false);
  }

  /**
   * matchMedia('change') pode correr depois do reflow — o browser já animou.
   * `transition: none` inline + reflow garante salto instantâneo ao mudar viewport.
   */
  function withDrawerTransitionSuppressed(run) {
    nav.style.setProperty('transition', 'none');
    backdrop?.style.setProperty('transition', 'none');
    header.setAttribute('data-nav-drawer-hydrated', 'false');
    run();
    void nav.offsetHeight;
    nav.style.removeProperty('transition');
    backdrop?.style.removeProperty('transition');
    requestAnimationFrame(() => {
      requestAnimationFrame(() => {
        header.setAttribute('data-nav-drawer-hydrated', 'true');
      });
    });
  }

  function onBreakpointCross() {
    const isDesktop = mq.matches;
    if (isDesktop === wasDesktop) return;
    withDrawerTransitionSuppressed(() => {
      close();
    });
    wasDesktop = isDesktop;
  }

  toggle.addEventListener('click', () => {
    if (header.getAttribute('data-mobile-nav') === 'open') return;
    setOpen(true);
  });

  closeBtn?.addEventListener('click', () => {
    close();
  });

  mq.addEventListener('change', onBreakpointCross);

  window.addEventListener(
    'resize',
    () => {
      if (resizeRaf) cancelAnimationFrame(resizeRaf);
      resizeRaf = requestAnimationFrame(() => {
        resizeRaf = 0;
        onBreakpointCross();
      });
    },
    { passive: true },
  );

  withDrawerTransitionSuppressed(() => {
    close();
  });
}

function initSiteHeaderScroll() {
  const header = document.querySelector('[data-site-header]');
  if (!header) return;

  const threshold = 8;
  let ticking = false;

  function update() {
    ticking = false;
    const scrolled = window.scrollY > threshold;
    header.setAttribute('data-header-scrolled', scrolled ? 'true' : 'false');
  }

  function onScroll() {
    if (!ticking) {
      ticking = true;
      requestAnimationFrame(update);
    }
  }

  window.addEventListener('scroll', onScroll, { passive: true });
  update();
}

function init() {
  initCounters();
  initTeamCarousels();
  initSiteHeaderScroll();
  initMobileNav();
}

if (document.readyState === 'loading') {
  document.addEventListener('DOMContentLoaded', init);
} else {
  init();
}
