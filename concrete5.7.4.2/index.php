<?php
if (isset($_SERVER['REDIRECT_HTTPS'])) {
    $_SERVER['HTTPS'] = $_SERVER['REDIRECT_HTTPS'];
}
require('concrete/dispatcher.php');
