<?php 

require('config.php');

$tasks = query("SELECT * FROM tasks");
// die(var_dump($tasks));

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
  </head>
  <body>
    <div class="container mt-5">
        <div class="row">
          <div class="card">
            <div class="card-title text-center">FETCH API</div>
            <div class="card-body d-flex justify-content-center">
              <input type="text" class="form-control w-50 mx-4" name="task" id="task">
              <button class="btn btn-primary" class="addTask" id="addTask">Task</button>
            </div>
            <ul class="list-group w-25 mx-auto mb-4" id="showList">
              <?php 
              foreach ($tasks as $task) {
                ?>
                <li class="list-group-item active mb-3"><?php echo $task->task ?></li>
              <?php 
              }
              
              ?>
            </ul>
          </div>
        </div>
    </div>
    <script src="script.js"></script>
  </body>
</html>
