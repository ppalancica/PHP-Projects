<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <p>Contact Page</p>
    <pre>
      <?php
        // print_r($_GET);
        $id = $_GET['id'];
        echo $id;
      ?>
      <?php
        $company = $_GET['company'];
        echo $company;
      ?>
    </pre>
  </body>
</html>
