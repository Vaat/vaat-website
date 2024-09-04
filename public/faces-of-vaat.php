<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faces of Vaat</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .face-img {
            width: 100%;
            height: auto; /* Ensure the whole image is shown */
        }
        .row {
            margin: 0;
        }
        .back {
            color: #D1D6D9;
            font-family: Inter, sans-serif;
            margin-top: 30px;
            display: block;
        }
        a {
            color: #E37462;
            transition: color .08s;
        }
        a:hover {
            color: #E37462;
            text-decoration: underline;
        }
        h2 {
            line-height: 1.2;
            font-family: Inter, sans-serif;
            color: #D1D6D9;
            padding: 30px 0;
        }
    </style>
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-11">
            <h2>The Faces of Vaat</h2>
        </div>
        <div class="col-lg-1">
            <a href="//vaat.ee" class="back">Home</a>
        </div>
    </div>
    <div class="row no-gutters">
        <?php
        $images = glob('images/faces-of-vaat/*.jpg');
        foreach ($images as $filename) :
            ?>
            <div class="col-6 col-md-3 col-lg-2">
                <img src="<?= $filename ?>" class="face-img" alt="Face of Vaat">
            </div>
        <?php endforeach; ?>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>