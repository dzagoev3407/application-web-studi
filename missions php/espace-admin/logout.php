<?php

session_start();
$_SESSION = [];
session_destroy();
$urlRedirectForm = 'form.php';
header("Location: $urlRedirectForm");