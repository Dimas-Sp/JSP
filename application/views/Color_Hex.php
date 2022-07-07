<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JS-Project | COLOR FLIPPER</title>

    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
</head>
<body>
    <nav>
        <div class="nav-center">
            <h4>Color Flipper</h4>
            <ul class="nav-links">
                <li>
                    <a href="<?= base_url('ColorFlipper/simple') ?>">SIMPLE</a>
                </li>
                <li>
                    <a href="<?= base_url('ColorFlipper/hex') ?>">HEX</a>
                </li>
            </ul>
        </div>
    </nav>

    <main>
        <div class="container">
            <h2>background color : <span class="color">
                #F1f5f8
            </span></h2>
            <button class="btn btn-hero" id="btn">Click Me</button>
        </div>
    </main>
    <!-- JavaScript -->
    <script src="<?= base_url('assets/js/hex.js') ?>"></script>
</body>
</html>