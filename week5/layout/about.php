<?php
ob_start();
include 'templates/about.html.php';
$content = ob_get_clean();
include 'templates/weblayout.html.php';
