
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Qr Code Generator</title>
</head>

<body>

    <section>
        <div class="row">
            <input type="color" class="light" value="#ffffff">
            <input type="color" class="dark" value="#000000">
            <select class="sizes">
                <option value="100">100x100</option>
                <option value="200">200x200</option>
                <option value="300">300x300</option>
                <option value="400">400x400</option>
                <option value="500">500x500</option>
            </select>
        </div>
        <input type="text" class="qr-text" placeholder="Enter Text or URL">
        <div id="qr-code"></div>
        <div class="action-container">
            <a href="#" class="download btn" download="QRCode">Download</a>
        </div>
    </section>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js"></script>
    <script src="script.js"></script>
</body>

</html>
