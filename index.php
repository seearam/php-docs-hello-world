<!DOCTYPE html>
<html>
<head>
  <title>Scratch Card Game</title>
  <style>
    body {
      text-align: center;
      font-family: Arial;
      margin-top: 50px;
    }
    #scratchCanvas {
      background: #ccc;
      cursor: crosshair;
    }
    #message {
      display: none;
      font-size: 24px;
      color: green;
      margin-top: 20px;
    }
  </style>
</head>
<body>

  <h2>🎁 Scratch to Win!</h2>
  <canvas id="scratchCanvas" width="300" height="100"></canvas>
  <div id="message">🎉 You won ₹100!</div>

  <script>
    const canvas = document.getElementById("scratchCanvas");
    const ctx = canvas.getContext("2d");

    const message = document.getElementById("message");

    // Draw gray overlay
    ctx.fillStyle = "#888";
    ctx.fillRect(0, 0, canvas.width, canvas.height);

    ctx.globalCompositeOperation = "destination-out"; // Erase effect

    let isDrawing = false;

    canvas.addEventListener("mousedown", () => isDrawing = true);
    canvas.addEventListener("mouseup", () => isDrawing = false);
    canvas.addEventListener("mouseleave", () => isDrawing = false);

    canvas.addEventListener("mousemove", (e) => {
      if (!isDrawing) return;

      const rect = canvas.getBoundingClientRect();
      const x = e.clientX - rect.left;
      const y = e.clientY - rect.top;

      ctx.beginPath();
      ctx.arc(x, y, 15, 0, Math.PI * 2);
      ctx.fill();

      checkScratchCompletion();
    });

    function checkScratchCompletion() {
      const imageData = ctx.getImageData(0, 0, canvas.width, canvas.height);
      let pixels = imageData.data;
      let cleared = 0;

      for (let i = 0; i < pixels.length; i += 4) {
        if (pixels[i + 3] === 0) cleared++; // alpha channel
      }

      let percent = (cleared / (canvas.width * canvas.height)) * 100;

      if (percent > 50) {
        message.style.display = "block";
      }
    }
  </script>

</body>
</html>

