<?php
ob_start();
include 'templates/homepage.html.php';
$content = ob_get_clean();
include 'templates/weblayout.html.php';