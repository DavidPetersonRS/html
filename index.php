<?php
// Get the App Service name from the environment variable
$appServiceName = getenv('WEBSITE_SITE_NAME');
?>
<html>
  <body>
    <h1>Hello from <?php echo htmlspecialchars($appServiceName); ?></h1>
  </body>
</html>
