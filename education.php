<?php
$title = 'Education'; $page = 'education';
require __DIR__ . '/includes/header.php';

// ===== EDIT YOUR EDUCATION HERE. Format: ["Level", "School", "Years", "Details"], =====
$education = [
    ["Elementary", "IRAGA ELEMENTARY SCHOOL", "", ""],
    ["High School",  "SOLANA FRESH WATER FISHERY SCHOOL", "", ""],
    ["Senior High ",  "SOLANA FRESH WATER FISHERY SCHOOL", "", ""],
];
// ======================================================================================
?>
<section>
  <h2>Education</h2>
  <ol class="timeline">
    <?php foreach ($education as [$level, $school, $years, $details]): ?>
      <li>
        <span class="year"><?= $e($level) ?><?= $years ? ' · ' . $e($years) : '' ?></span>
        <h3><?= $e($school) ?></h3>
        <?php if ($details): ?><p><?= $e($details) ?></p><?php endif; ?>
      </li>
    <?php endforeach; ?>
  </ol>
</section>
<?php require __DIR__ . '/includes/footer.php'; ?>
