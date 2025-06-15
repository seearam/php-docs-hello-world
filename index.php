<?php
$kurals = json_decode(file_get_contents('kurals.json'), true);
?>
<!DOCTYPE html>
<html>
<head>
    <title>திருக்குறள் - Accordion View</title>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-4 bg-light">
    <div class="container">
        <h2 class="text-center mb-4">📜 திருக்குறள் - Accordion View</h2>
        <div class="accordion" id="kuralAccordion">
            <?php foreach ($kurals as $index => $kural): ?>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="heading<?= $index ?>">
                        <button class="accordion-button <?= $index !== 0 ? 'collapsed' : '' ?>" type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#collapse<?= $index ?>"
                                aria-expanded="<?= $index === 0 ? 'true' : 'false' ?>"
                                aria-controls="collapse<?= $index ?>">
                            குறள் <?= $kural['number'] ?>: <?= htmlspecialchars($kural['line1']) ?>
                        </button>
                    </h2>
                    <div id="collapse<?= $index ?>" class="accordion-collapse collapse <?= $index === 0 ? 'show' : '' ?>"
                         aria-labelledby="heading<?= $index ?>" data-bs-parent="#kuralAccordion">
                        <div class="accordion-body">
                            <p><strong>குறள்:</strong><br><?= htmlspecialchars($kural['line1']) ?><br><?= htmlspecialchars($kural['line2']) ?></p>
                            <p><strong>பொருள்:</strong><br><?= htmlspecialchars($kural['meaning']) ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
