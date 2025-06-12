<?php
session_start();
session_unset();
session_destroy();
setcookie("username", "", time() - 3600); // xóa cookie
header("Location: login.php");
exit;
