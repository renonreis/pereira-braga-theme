@props([
    'mergedAttributes' => null
])

@php
    $content = trim((string) $slot);
    if (preg_match('/^<([a-zA-Z0-9\-]+)(\s+[^>]*)?>/', $content, $matches)) {
        $tag = $matches[1];
        $existingAttrsString = $matches[2] ?? '';
        
        $existingClass = '';
        if (preg_match('/class=(["\'])(.*?)\1/', $existingAttrsString, $classMatches)) {
            $existingClass = $classMatches[2];
            $existingAttrsString = preg_replace('/class=["\'].*?["\']/', '', $existingAttrsString);
        }
        
        $newClass = $mergedAttributes ? $mergedAttributes->get('class') : '';
        $combinedClass = trim($newClass . ' ' . $existingClass);
        
        $attributesToInject = $mergedAttributes ? $mergedAttributes->except('class')->toHtml() : '';
        $injectedAttrs = ' class="' . $combinedClass . '" ' . $attributesToInject . ' ' . $existingAttrsString;
        
        $content = preg_replace('/^<[a-zA-Z0-9\-]+(\s+[^>]*)?>/', '<' . $tag . rtrim($injectedAttrs) . '>', $content, 1);
    }
@endphp
{!! $content !!}
