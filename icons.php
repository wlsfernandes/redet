<?php include 'header.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Icons</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            flex-wrap: wrap;
            padding: 20px;
        }
        .icon-box {
            margin: 10px;
            text-align: center;
        }
        .icon-box i {
            font-size: 48px;
            margin-bottom: 10px;
            display: block;
        }
        .icon-box .icon-name {
            font-size: 14px;
        }
    </style>
</head>
<body>
<?php for ($i = 1; $i <= 66; $i++): ?>
        <div class="icon-box"><i class="icon-<?php echo $i; ?>"></i><div class="icon-name">icon-<?php echo $i; ?></div></div>
    <?php endfor; ?>
   
</body>
</html>
