<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Slim 4</title>
    <link href='//fonts.googleapis.com/css?family=Lato:300' rel='stylesheet' type='text/css'>
    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body>
<div class="text-center mb-2">
    <h1 class="text-4xl mx-auto my-2">Completed Tasks</h1>
</div>
<div class="w-1/2 border mx-auto p-4">
    <ul>
        <?php
        foreach ($tasks as $task) {
            if ($task['completed']) {
                echo "<ul class='py-2'>{$task['description']}</ul>";
            }
        }
        ?>
    </ul>
</div>
</body>
</html>