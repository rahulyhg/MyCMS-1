<?php
defined('BASEPATH') OR exit('No direct script access allowed');

function random_password($length = 8) {
    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%&*()_-?";
    $password = substr( str_shuffle( $chars ), 0, $length );
    return $password;
}