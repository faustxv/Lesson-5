<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 101 Template</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <div class="container">
    	<form role="form" method="POST">
        <div class="form-group">
          <label for="exampleInputText">Text</label>
          <input type="text" name="text" class="form-control" id="exampleInputText" placeholder="Enter Text" required>
        </div>
        <div class="form-group">
          <label for="exampleInputTextArea">TextArea</label>
          <textarea class="form-control" name="textarea" rows="3" placeholder="Enter Text" required></textarea>
        </div>
        <button type="submit" name="send" class="btn btn-default">Отправить</button>
      </form>
    </div>
    <?php 
      if (isset($_POST['send'])) {
        $text     = $_POST['text'];
        $textarea = $_POST['textarea'];
        $fc       = fopen("File/{$text}.txt", "w+");
        fwrite($fc, $textarea);
        fclose($fc);
      }
    ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>