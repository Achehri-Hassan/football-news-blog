<?php
session_start();

// حذف كل بيانات الجلسة
session_unset();
session_destroy();

// رجوع لصفحة login
header("Location: index.php");
exit;

?>