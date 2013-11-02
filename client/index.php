<?php
session_start();
echo $_SESSION['session_type'];
?>
<html>
<a href="../login/index.php">test</a>
<a href="../login/index.php?action=logout">test</a>
</html>