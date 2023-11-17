<?php
define('ProPayPal', 0);
if(ProPayPal){
    define("PayPalClientId", "Afld543U29ZVANUydR5gaFWpoo52F1A9iHSSuadhUJsURFOGA8SBYTNWM9u9Z055QhVMCP4sfr9dWKXq");
    define("PayPalSecret", "ECQ72G1QATP7F3EVNlJ427YdUzKgCMSP8Ap6D8xd4CMfXvzWnaMzQCyz8iYnO4W1e7JG6RWXmhUxL6Ec");
    define("PayPalBaseUrl", "https://api.paypal.com/v1/");
    define("PayPalENV", "production");
} else {
    define("PayPalClientId", "Afld543U29ZVANUydR5gaFWpoo52F1A9iHSSuadhUJsURFOGA8SBYTNWM9u9Z055QhVMCP4sfr9dWKXq");
    define("PayPalSecret", "ECQ72G1QATP7F3EVNlJ427YdUzKgCMSP8Ap6D8xd4CMfXvzWnaMzQCyz8iYnO4W1e7JG6RWXmhUxL6Ec");
    define("PayPalBaseUrl", "../PWCI/"); //recuerda dejar vacío para que "orderDetails.php" recupere tus datos
    define("PayPalENV", "sandbox");
}
?>