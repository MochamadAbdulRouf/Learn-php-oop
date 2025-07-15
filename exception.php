<?php

// try catch
require_once "exception/validation-exception.php";
require_once "data/login-request.php";
require_once "helper/validation.php";

// Multiple Try Catch 
$loginRequest = new LoginRequest();
$loginRequest->username = "  ";
$loginRequest->password = "  ";

try{
    validateLoginRequest($loginRequest);
    echo "VALID" . PHP_EOL;
    } catch (ValidationException $exception) {
        echo "Error : {$exception->getMessage()}" . PHP_EOL;

        var_dump($exception->getTrace());

        echo $exception->getTraceAsString() . PHP_EOL;
    } finally {
        echo "Error atau ga Error akan tetap di eksekusi" . PHP_EOL;
    }

