<?php
session_start();
session_destroy();
echo "<script>window.open('../index.php?logout=welcome to hematraders','_self')</script>";
?>