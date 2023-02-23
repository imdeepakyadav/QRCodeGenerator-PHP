<!DOCTYPE html>
<html>
<head>
  <title>QR Code Generator</title>
  <style>
    body {
      font-family: Arial, sans-serif;
    }
    form {
      max-width: 600px;
      margin: 0 auto;
      text-align: center;
    }
    label {
      font-size: 1.2em;
      display: block;
      margin-bottom: 0.5em;
    }
    input[type="text"] {
      padding: 0.5em;
      font-size: 1.2em;
      border-radius: 5px;
      border: 1px solid #ccc;
      margin-bottom: 1em;
      width: 100%;
      max-width: 500px;
    }
    button {
      background-color: #4CAF50;
      border: none;
      color: white;
      padding: 0.5em 1em;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 1.2em;
      border-radius: 5px;
      cursor: pointer;
    }
    img {
      display: block;
      margin: 1em auto;
      max-width: 100%;
    }
  </style>
</head>
<body>
  <form method="post" action="qrcode.php">
    <label for="data">Enter data to encode:</label>
    <input type="text" id="data" name="data" required>
    <button type="submit">Generate QR Code</button>
  </form>
</body>
</html>
