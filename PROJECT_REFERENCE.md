# 📚 Pereira Braga Theme - Project Reference & AI Instructions

This document serves as a guide on how this project works and what conventions must be followed when building new features. Please refer to this file whenever you are asked to introduce new behaviors, blocks, or views.

## 🏗 Stack Overview

- **Framework**: [Roots Sage 10+](https://roots.io/sage/) (WordPress Starter Theme)
- **Engine**: [Roots Acorn 6+](https://roots.io/acorn/) (Brings Laravel components, like Blade, to WordPress)
- **Templating**: Laravel Blade (`resources/views/`)
- **Styling**: [Tailwind CSS v4](https://tailwindcss.com/)
- **Bundler**: [Vite](https://vitejs.dev/) & Laravel Vite Plugin
- **Custom Blocks**: [ACF Composer](https://github.com/Log1x/acf-composer) (by Log1x)
- **PHP Version**: 8.3+

## 📂 Directory Structure

- `app/`: Theme logic, Acorn service providers, setup, and custom block definitions.
  - `app/Blocks/`: Custom Gutenberg blocks powered by ACF Composer.
  - `app/setup.php` & `app/filters.php`: Core WordPress theme hooks and setup routines.
- `resources/`: Front-end assets and templates.
  - `resources/views/`: Blade templates (e.g., layouts, pages).
  - `resources/views/components/`: Reusable Blade UI components (e.g., buttons, paragraphs).
  - `resources/css/` & `resources/js/`: Entrypoints for Tailwind v4 and scripts.
- `public/`: (Generated via Vite) Production-ready hashed assets.

## 🧑‍💻 Feature Implementation Guide

### 1. Custom Blocks (Gutenberg + ACF)

We use `log1x/acf-composer` to quickly build Gutenberg blocks that use Advanced Custom Fields behind the scenes.

- **Where to put them**: Create a class inside `app/Blocks/` (e.g., `HeroBlock.php`).
- **How it works**:
  - Extend `Log1x\AcfComposer\Block`.
  - Define block properties like `$name`, `$description`, `$icon`.
  - The `with()` method gathers data for the Blade view.
  - The `fields()` method uses the `Builder` pattern to define ACF fields (e.g., text, repeater, image) in code rather than in the WordPress database.
  - The `$template` property can establish InnerBlocks scaffolding using core blocks or custom app components.
- **Views for Blocks**: The corresponding blade template will reside in `resources/views/blocks/` (e.g., `example-block.blade.php`).

### 2. Blade Components

We use Laravel Blade to separate our views into logical, reusable components.

- **Where to put them**: `resources/views/components/`.
- **How to use them**: Use `x-` tags in your template files. Ex: `<x-paragraph>Hello World</x-paragraph>`.
- **Props**: Always define `@props([])` at the top of the component file so variables are explicit, and cleanly merge attributes using `{{ $attributes->merge(['class' => 'base-classes']) }}`.

### 3. Styling & Scripting (Vite + Tailwind v4)

- **Configuration**: We use `vite.config.js` tightly coupled with `@roots/vite-plugin` and Laravel Vite.
- **Styles**: We use **Tailwind v4**, so avoid using `@apply` heavily. Prefer utility classes in your Blade templates. Tailwind v4 configuration relies less on `tailwind.config.js` and heavily utilizes CSS variables dynamically in `app.css`.

## 🚀 Common Commands

- **Development**:

  ```bash
  npm run dev
  ```

  Runs Vite dev server with Hot Module Replacement (HMR).

- **Production Build**:

  ```bash
  npm run build
  ```

  Compiles and minifies assets to `public/build/`.

- **Generators** (Available via WP-CLI with Acorn):
  ```bash
  wp acorn make:block ExampleBlock
  wp acorn make:component ExampleComponent
  ```

---

_Note to AI Context: Retain strict adherence to Roots Sage semantics. Use Blade directives correctly, utilize ACF Composer Builder for fields instead of manual arrays where possible, and honor Tailwind v4 syntax._
