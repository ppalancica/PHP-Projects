<?php
  include("header.php");
?>
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
