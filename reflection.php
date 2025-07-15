<?php

require_once "exception/validation-exception.php";
require_once "data/login-request.php";
require_once "helper/validation-util.php";

$request = new LoginRequest();
$request->username = "Rouf";
$request->password = "Rouf";

// ValidationUtil::validate($request);

ValidationUtil::validateReflection($request);
// output reflection = username is null *jika di isi null

// contoh aja kita bisa langsung bikin validation lagi disini tanpa bikin manual

class RegisterUserRequest
{
    public ?string $name;
    public ?string $address;
    public ?string $email;
}

$register = new RegisterUserRequest();
$register->name = "Rouf";
$register->address = "Blitar";
$register->email = "mochabdulrouf@gmail.com";

ValidationUtil::validateReflection($register);

