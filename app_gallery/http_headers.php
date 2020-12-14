<?php
  header("HTTP 1.1/ 404 Not Found");
  // X-Powered-By: PHP/7.4.9
  header("X-Powered-By: can't tell you that");
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      // This won't work... unless you have output buffering turned on.
      // header("HTTP 1.1/ 404 Not Found");
    ?>
    <pre>
      <?php
        print_r(headers_list());
      ?>
    </pre>
  </body>
</html>
