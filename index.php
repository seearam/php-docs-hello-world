<?php
$kurals = [
    [
        "number" => 1,
        "line1" => "அகர முதல எழுத்தெல்லாம் ஆதி",
        "line2" => "பகவன் முதற்றே உலகு",
        "meaning" => "All letters begin with 'A'; all living beings begin with the Supreme Being."
    ],
    [
        "number" => 2,
        "line1" => "கற்றதனால் ஆய பயனென்கொல் வாலறிவன்",
        "line2" => "நற்றாள் தொழாஅர் எனின்",
        "meaning" => "What is the use of learning if one does not worship the feet of the wise?"
    ],
    // Add more kurals here...
];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Thirukkural Accordion</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-4">
    <h2 class="text-center mb-4">📜 திருக்குறள் Accordion</h2>

    <div class="accordion" id="kuralAccordion">
        <?php foreach ($kurals as $index => $kural): ?>
            <div class="accordion-item">
                <h2 class="accordion-header" id="heading<?= $index ?>">
                    <button class="accordion-button <?= $index !== 0 ? 'collapsed' : '' ?>" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?= $index ?>" aria-expanded="<?= $index === 0 ? 'true' : 'false' ?>" aria-controls="collapse<?= $index ?>">
                        குறள் <?= $kural['number'] ?>: <?= $kural['line1'] ?>
                    </button>
                </h2>
                <div id="collapse<?= $index ?>" class="accordion-collapse collapse <?= $index === 0 ? 'show' : '' ?>" aria-labelledby="heading<?= $index ?>" data-bs-parent="#kuralAccordion">
                    <div class="accordion-body">
                        <p><strong>குறள்:</strong> <?= $kural['line1'] ?><br><?= $kural['line2'] ?></p>
                        <p><strong>பொருள்:</strong> <?= $kural['meaning'] ?></p>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
