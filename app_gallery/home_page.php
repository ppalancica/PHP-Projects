<?php
  include("functions.php");
  include("header.php");
?>
    <?php $page_name = "Contact Page"; ?>
    <?php $id = 1; ?>
    <?php $company_name = "Palancica & Co"; ?>
    <a href="contact_page.php?id=<?php echo $id; ?>&company=<?php echo rawurlencode($company_name); ?>"><?php echo $page_name; ?></a>

    <?php
      $link_text = "<Click> & find out more";
    ?>
    <!-- Wrong way -->
    <a href="">
      <?php echo $link_text; ?>
    </a>
    <!-- Rigth way -->
    <a href="">
      <?php echo htmlspecialchars($link_text); ?>
    </a>

    <?php
      echo full_name("Pavel", "Palancica");
    ?>

  </body>
</html>
