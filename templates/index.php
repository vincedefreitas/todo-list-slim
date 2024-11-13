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
    <h1 class="text-4xl mx-auto my-2">To Do List</h1>
    <form action="index.php" method="post">
        <label for="task">Task:</label>
        <input class="w-96 border rounded-md py-1 px-2" type="text" id="task" name="task" placeholder="What do you need to do today?">
        <input class="bg-emerald-300 py-1 px-2 rounded-md" type="submit" value="Add Task">
    </form>
</div>
<div class="w-1/2 border mx-auto p-4">
    <ul>
        <?php
        foreach ($tasks as $task) {
            echo "<ul class='py-2'>{$task['description']}</ul>";
        }
        ?>
    </ul>
</div>

</body>
</html>
