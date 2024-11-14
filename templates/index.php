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
    <form action="/" method="POST">
        <label for="task">Task:</label>
        <input class="w-96 border rounded-md py-1 px-2" type="text" id="task" name="description" placeholder="What do you need to do today?">
        <input class="bg-emerald-300 py-1 px-2 rounded-md" type="submit" value="Add Task">
    </form>
</div>
<div class="w-1/2 border mx-auto p-4">
    <ul>
        <?php
        foreach ($tasks as $task) {
            if (!$task['completed']) {
                echo "<div class='flex gap-2 items-center'>";
                echo "<li class='py-2'>{$task['description']}</li>";
                echo "<form action='/completed/{$task['id']}' method='POST'>";
                echo "<input class='bg-emerald-300 py-1 px-2 rounded-md' type='submit' value='Done'>";
                echo "</form>";
                echo "</div>";
            }
        }
        ?>
    </ul>
</div>
</body>
</html>
