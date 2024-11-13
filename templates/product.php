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
    <div class="w-1/2">
        <img class="w-full" src="<?=$image?>" alt="">
    </div>
    <div class="w-1/2 p-4">
        <h1 class="text-4xl mb-4"><?=$title?></h1>
        <h2 class="text-3xl mb-4"><?=$price?></h2>
        <p><?=$description?></p>
    </div>
</div>
</body>
</html>



