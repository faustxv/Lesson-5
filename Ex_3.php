<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <!-- <meta http-equiv="refresh" content="1"> -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Clock</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
  </head>
  <body>
    <div class="container">
      <div class="clock">
        <div class="digital">
          <span>
            <p>
              <?php 
                print date('d F Y');
              ?>
            </p>
          </span>
          <h1>
            <?php
              if (!isset($_GET['status'])) {
                if (isset($_GET['but'])) {
                  header('location:/Ex_3.php?status=stop');
                } 
                print date('H');
                print '<span class="h">:</span>';
                print date('i');
                print '<span class="h">:</span>';
                print date('s');
                header('Refresh: 1; URL=/Ex_3.php');
              }
              else {
                print date("H:i:s");
              }
            ?>
          </h1>
        </div>
        <div class="but">
          <form>
            <?php 
              if (!isset($_GET['status'])){
                echo '<button type="submit" name="status" value="stop" class="btn btn-primary btn-lg"><span class="glyphicon glyphicon-pause"></span></button>';
              }
              else{
                echo '<button type="submit" class="btn btn-primary btn-lg"><span class="glyphicon glyphicon-play"></span></button>';
              }
            ?>
          </form>
        </div>
      </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>