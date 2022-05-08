<?php
session_destroy();
header('Clear-Site-Data: "cache", "cookies", "storage", "executionContexts"');
?>
<!DOCTYPE html>
<html>
<header>
    <title>Sandbox</title>
    <link rel="stylesheet" href="styles.css">
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
    <meta http-equiv="Pragma" content="no-cache" />
    <meta http-equiv="Expires" content="-1" />
</header>


<body>
    You've been correctly logged out
</body>

</html>