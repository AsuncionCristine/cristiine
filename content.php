<?php
// ===== EDIT YOUR NAME AND SOCIAL LINKS HERE =====
$name = 'Cristine Asuncion';

// Format: ["Label", "Link"],   (put your real profile links)
$links = [
    ["Facebook",  "https://www.facebook.com/"],
    ["Instagram", "https://www.instagram.com/"],
];
// ================================================

// Safe text output used by every page (call it as $e(...))
$e = function ($s) { return htmlspecialchars((string)$s, ENT_QUOTES, 'UTF-8'); };

// Small icons (same style everywhere)
function icon($n) {
    $p = [
        'home'      => '<path d="M3 11l9-8 9 8"/><path d="M5 10v10h14V10"/>',
        'about'     => '<path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/>',
        'education' => '<path d="M22 10L12 5 2 10l10 5 10-5z"/><path d="M6 12v5c3 3 9 3 12 0v-5"/>',
        'skills'    => '<path d="M12 2l3 6 7 1-5 5 1 7-6-3-6 3 1-7-5-5 7-1z"/>',
        'contact'   => '<path d="M4 4h16v16H4z"/><path d="M4 6l8 7 8-7"/>',
        'send'      => '<path d="M22 2L11 13"/><path d="M22 2l-7 20-4-9-9-4z"/>',
        'quote'     => '<path d="M10 11H6a2 2 0 0 1-2-2V7a2 2 0 0 1 2-2h2a2 2 0 0 1 2 2v7c0 2-1 4-4 5"/><path d="M20 11h-4a2 2 0 0 1-2-2V7a2 2 0 0 1 2-2h2a2 2 0 0 1 2 2v7c0 2-1 4-4 5"/>',
        'facebook'  => '<path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/>',
        'instagram' => '<rect x="2" y="2" width="20" height="20" rx="5"/><circle cx="12" cy="12" r="4"/><circle cx="17.5" cy="6.5" r="1"/>',
        'telegram'  => '<path d="M22 2L11 13"/><path d="M22 2l-7 20-4-9-9-4z"/>',
    ];
    $d = $p[$n] ?? '<circle cx="12" cy="12" r="9"/>';
    return '<svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">' . $d . '</svg>';
}
