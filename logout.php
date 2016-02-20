<?php
session_destroy();
echo '<h2>Logging out ... </h2>';
header("Status: 301 Moved Permanently");
header("Location:index.php?page=home");
