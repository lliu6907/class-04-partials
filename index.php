<?php
$page_title = "Citation";
?>

<!DOCTYPE html>
<html lang="en">

<head>
<?php include ("includes/meta.php"); ?>
</head>

<body>
<?php include ("includes/header.php"); ?>

  <main>
    <h2>INFO/CS 2300; NBA 5301</h2>

    <p>This website is rendered server-side in PHP.</p>

    <!-- Note: Avoid outputting your PHP version in your production HTML.         -->
    <!--       Malicious actors may use the version to try and hack your website. -->
    <p>You're running PHP version: <strong><?php echo phpversion(); ?></strong>.</p>
  </main>

  <?php include ("includes/footer.php"); ?>
</body>

</html>
