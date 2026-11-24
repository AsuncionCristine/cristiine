<?php
$title = 'Skills'; $page = 'skills';
require __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/footer.php';
require __DIR__ . '/design.php';   // site design

// ===== EDIT YOUR SKILLS HERE. Format: ["Skill name", level from 0 to 100], =====
$skills = [
    ["Communication",   50],
    ["Programming",     20],
    ["Time Management", 40],
];
// ===============================================================================
?>
<section>
  <h2>Skills</h2>
  <?php foreach ($skills as [$skill, $level]): ?>
    <div class="skill">
      <div class="skill-head"><span><?= $e($skill) ?></span><span><?= (int)$level ?>%</span></div>
      <div class="bar" role="progressbar" aria-valuenow="<?= (int)$level ?>" aria-valuemin="0" aria-valuemax="100" aria-label="<?= $e($skill) ?>">
        <div style="width: <?= (int)$level ?>%"></div>
      </div>
    </div>
  <?php endforeach; ?>
</section>
<?php require __DIR__ . '/includes/footer.php'; ?>
