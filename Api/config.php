<?php
define('ProPayPal', 0);
if(ProPayPal){
    define("PayPalClientId", "***********");
    define("PayPalSecret", "************");
    define("PayPalBaseUrl", "https://api.paypal.com/v1/");
    define("PayPalENV", "production");
} else {
    define("PayPalClientId", "**************");
    define("PayPalSecret", "**************");
    define("PayPalBaseUrl", "miDirección"); //recuerda dejar vacío para que "orderDetails.php" recupere tus datos
    define("PayPalENV", "sandbox");
}
?>