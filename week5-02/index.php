<?php
$title = 'Internet Joke Database Demo';
ob_start();
//load giao diện riêng của từng page
include 'templates/home.html.php';
$output = ob_get_clean();
//load giao diện chung của toàn bộ web
include 'templates/layout.html.php';