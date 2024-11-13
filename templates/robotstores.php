<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<div class="flex">
    <div class="sidebar w-2/12"></div>
    <div class="product-grid grid grid-cols-6 gap-4 w-10/12 py-4 ">
        <?php
        echo \App\ViewHelpers\RobotStoresViewHelper::displayProducts($products);
        ?>
    </div>

</div>

</body>
</html>
