<?php
require_once __DIR__ . '/icons.php';

// ===== EDIT THESE (shown on every page) =====
$name = 'Cristine Asuncion';

// Social links (used on Home and Contact). Add or remove lines as you like.
$links = [
    ['Facebook',  'https://www.facebook.com/cristine.asuncion.20'],
    ['Instagram', 'https://www.instagram.com/crstn.asnc/'],
];
// ============================================

$e = fn($s) => htmlspecialchars((string)$s, ENT_QUOTES, 'UTF-8');
$pages = [
    'home'      => ['index.php',     'Home'],
    'about'     => ['about.php',     'About'],
    'skills'    => ['skills.php',    'Skills'],
    'education' => ['education.php', 'Education'],
    'contact'   => ['contact.php',   'Contact'],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= $e($title) ?> – <?= $e($name) ?></title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,600;9..144,700&family=Manrope:wght@400;500;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/style.css">
</head>
<body>
<header class="top">
  <a class="brand" href="index.php"><?= $e($name) ?></a>
  <nav aria-label="Main">
    <?php foreach ($pages as $key => [$file, $label]): ?>
      <a href="<?= $file ?>"<?= $key === $page ? ' class="active" aria-current="page"' : '' ?>><?= icon($key) ?><?= $label ?></a>
    <?php endforeach; ?>
  </nav>
</header>
<main>