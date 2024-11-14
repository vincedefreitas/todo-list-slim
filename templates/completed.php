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
                echo "<div class='flex gap-2 items-center'>";
                echo "<li class='py-2'>{$task['description']}</li>";
                echo "<form action='/delete/{$task['id']}' method='POST'>";
                echo "<input class='bg-emerald-300 py-1 px-2 rounded-md' type='submit' value='Delete'>";
                echo "</form>";
                echo "</div>";
            }
        }
        ?>
    </ul>
</div>
</body>
</html>