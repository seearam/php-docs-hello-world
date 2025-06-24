<!DOCTYPE html>
<html lang="ta">
<head>
    <meta charset="UTF-8">
    <title>திருக்குறள் Accordion</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <h2 class="text-center mb-4">திருக்குறள் Accordion App</h2>
    <div class="accordion" id="kuralAccordion">

        <?php
        $json = file_get_contents("kurals.json");
        $data = json_decode($json, true);

        foreach ($data["kural"] as $index => $kural) {
            $id = "kural" . $kural["Number"];
            echo "
            <div class='accordion-item'>
                <h2 class='accordion-header' id='heading$index'>
                    <button class='accordion-button ".($index !== 0 ? "collapsed" : "")."' type='button' data-bs-toggle='collapse' data-bs-target='#$id' aria-expanded='".($index === 0 ? "true" : "false")."' aria-controls='$id'>
                        குறள் {$kural["Number"]}: {$kural["Line1"]}
                    </button>
                </h2>
                <div id='$id' class='accordion-collapse collapse ".($index === 0 ? "show" : "")."' aria-labelledby='heading$index' data-bs-parent='#kuralAccordion'>
                    <div class='accordion-body'>
                        <p><strong>Line 1:</strong> {$kural["Line1"]}</p>
                        <p><strong>Line 2:</strong> {$kural["Line2"]}</p>
                        <p><strong>Translation:</strong> {$kural["Translation"]}</p>
                        <p><strong>Transliteration:</strong><br>1. {$kural["transliteration1"]}<br>2. {$kural["transliteration2"]}</p>
                        <p><strong>Explanation:</strong> {$kural["explanation"]}</p>
                        <p><strong>மு.வ.:</strong> {$kural["mv"]}</p>
                        <p><strong>சா.பா:</strong> {$kural["sp"]}</p>
                        <p><strong>ம.க:</strong> {$kural["mk"]}</p>
