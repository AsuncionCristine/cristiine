<?php
// Small icons used on the buttons. icon('facebook') returns the SVG.
function icon(string $name): string {
    static $paths = [
        'home'      => '<path d="M3 11l9-8 9 8"/><path d="M5 10v10h14V10"/><path d="M10 20v-6h4v6"/>',
        'about'     => '<circle cx="12" cy="8" r="4"/><path d="M4 21c0-4.4 3.6-7 8-7s8 2.6 8 7"/>',
        'skills'    => '<path d="M12 3l2.7 5.6 6.1.9-4.4 4.3 1 6.1L12 17l-5.4 2.9 1-6.1L3.2 9.5l6.1-.9z"/>',
        'projects'  => '<rect x="3" y="7" width="18" height="13" rx="2"/><path d="M9 7V4h6v3"/><path d="M3 13h18"/>',
        'education' => '<path d="M2 9l10-5 10 5-10 5z"/><path d="M6 11.5V16c0 1.5 2.7 3 6 3s6-1.5 6-3v-4.5"/><path d="M22 9v6"/>',
        'contact'   => '<rect x="3" y="5" width="18" height="14" rx="2"/><path d="M3 7l9 6 9-6"/>',
        'send'      => '<path d="M22 2L11 13"/><path d="M22 2l-7 20-4-9-9-4z"/>',
        'instagram' => '<rect x="3" y="3" width="18" height="18" rx="5"/><circle cx="12" cy="12" r="4"/><circle cx="17.4" cy="6.6" r="1" fill="currentColor" stroke="none"/>',
        'facebook'  => '<g fill="currentColor" stroke="none"><path d="M13.5 21v-8h2.7l.5-3.2h-3.2V7.9c0-.9.4-1.7 1.8-1.7h1.5V3.4S15.5 3.2 14.2 3.2c-2.6 0-4.3 1.6-4.3 4.4v2.2H7.1V13h2.8v8z"/></g>',
        'telegram'  => '<g fill="currentColor" stroke="none"><path d="M21.6 3.4 2.9 10.6c-.9.4-.9 1.1-.2 1.3l4.8 1.5 1.9 5.8c.2.6.4.8.9.8.4 0 .6-.2.8-.4l2.3-2.2 4.7 3.5c.9.5 1.5.2 1.7-.8L22.9 4.7c.3-1.2-.5-1.7-1.3-1.3zM9 13.2l9.3-5.9c.4-.3.8-.1.5.2l-7.6 6.9-.3 3.2z"/></g>',
        'photo'     => '<rect x="3" y="4" width="18" height="16" rx="2"/><circle cx="9" cy="10" r="2"/><path d="M21 16l-5-5-9 9"/>',
        'quote'     => '<g fill="currentColor" stroke="none"><path d="M4 18v-6c0-4 2-6.5 5.5-7l.5 2c-2 .5-3 1.8-3 3.500H10v7.5zM14 18v-6c0-4 2-6.5 5.5-7l.5 2c-2 .5-3 1.8-3 3.500H20v7.5z"/></g>',
        'link'      => '<path d="M10 14a4 4 0 0 0 5.7 0l3-3a4 4 0 0 0-5.7-5.7l-1 1"/><path d="M14 10a4 4 0 0 0-5.7 0l-3 3a4 4 0 0 0 5.7 5.7l1-1"/>',
    ];
    $inner = $paths[$name] ?? $paths['link'];
    return '<svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" '
         . 'stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false">' . $inner . '</svg>';
}
