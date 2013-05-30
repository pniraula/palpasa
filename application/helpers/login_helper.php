<?php
function is_logged_in() {
    $CI =& get_instance();
    $user = $CI->session->userdata('email');
    if (!isset($user)) {
    	 return $user; 
	} else {
		 return $user; 
	}
}
function logOut() {
    $CI =& get_instance();
    $CI->session->unset_userdata('email');
   
}
function encode($string) {
    $CI =& get_instance();
	$key = $CI->session->userdata('key');
    $key = sha1($key);
    $strLen = strlen($string);
    $keyLen = strlen($key);
	$j=0;
	$hash='';
    for ($i = 0; $i < $strLen; $i++) {
        $ordStr = ord(substr($string,$i,1));
        if ($j == $keyLen) { $j = 0; }
        $ordKey = ord(substr($key,$j,1));
        $j++;
        $hash .= strrev(base_convert(dechex($ordStr + $ordKey),16,36));
    }
    return $hash;
}

function decode($string) {
    $CI =& get_instance();
	$key = $CI->session->userdata('key');
    $key = sha1($key);
    $strLen = strlen($string);
    $keyLen = strlen($key);
	$j=0;
	$hash='';
    for ($i = 0; $i < $strLen; $i+=2) {
        $ordStr = hexdec(base_convert(strrev(substr($string,$i,2)),36,16));
        if ($j == $keyLen) { $j = 0; }
        $ordKey = ord(substr($key,$j,1));
        $j++;
        $hash .= chr($ordStr - $ordKey);
    }
    return $hash;
}
function setKey($val){
	 $CI =& get_instance();
    $CI->session->unset_userdata('key', $val);
}
function desKey(){
	$CI =& get_instance();
    $CI->session->unset_userdata('key');
}
function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $randomString;
}
?>