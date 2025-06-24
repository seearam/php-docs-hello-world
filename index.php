<!DOCTYPE html>
<html>
<head>
    <title>திருக்குறள்</title>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-4 bg-light">
    <div class="container">
        <h2 class="text-center mb-4">📜 திருக்குறள்</h2>
        <div class="accordion" id="kuralAccordion">
       
                <div class="accordion-item">
                    <h2 class="accordion-header" >
                        <button type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#collapse<?= $index ?>"
                                aria-expanded=""
                                aria-controls="collapse<?= $index ?>">
                            குறள்
                        </button>
                    </h2>
                    <div data-bs-parent="#kuralAccordion">
                        <div class="accordion-body">
                            <p><strong>குறள்:</strong><br><br></p>
                            <p><strong>பொருள்:</strong><br></p>
                        </div>
                    </div>
                </div>
   
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
