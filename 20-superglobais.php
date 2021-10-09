<?php
/**Superglobais
 * 
 * $GLOBALS
 * $_SERVER
 * $_REQUEST
 * $_FILES
 * $_ENV
 * $_COOKIE
 * $_SESSION
 */

$x = 10;
$y = 15;

function soma(){
    echo $GLOBALS['x'] + $GLOBALS['y'];
}

soma(); // 25

echo '<hr>';

echo $_SERVER['PHP_SELF']."<br>"; // /20-superglobais.php
echo $_SERVER['SERVER_NAME']."<br>"; // cursophp.com
echo $_SERVER['SCRIPT_FILENAME']."<br>"; // C:/wamp64/www/cursophp.com/20-superglobais.php
echo $_SERVER['DOCUMENT_ROOT']."<br>"; // C:/wamp64/www/cursophp.com
echo $_SERVER['SERVER_PORT']."<br>"; // 80
echo $_SERVER['REMOTE_ADDR']."<br>"; // 127.0.0.1
