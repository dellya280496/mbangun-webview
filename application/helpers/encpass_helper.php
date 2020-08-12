<?php
/*
Helper ini berfungsi untuk mengenkripsi 
*/
if (!function_exists('encpass')) {

    function encpass($value) {
        $salt = '#*seCrEt!@-*%';
        $result = do_hash($salt . $value);
        $result = do_hash($salt . $result, 'md5');

        return $result;
    }
}
