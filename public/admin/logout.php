<?php

session_start();
session_destroy();

header('Location: http://'.$_SERVER['HTTP_HOST'].'/admin/index.php');
exit();