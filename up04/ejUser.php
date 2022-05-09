<?php

    $password = $_POST["password"];

    require_once("PasswordValidator.php");

    $name = $_REQUEST["user"];
    $password = $_REQUEST["password"];

    $valid = new PasswordValidator($user, $password);

    $valid->isValid();

    echo "<br>";

    $valid->strongPassword();

    file_put_contents("users.txt", "$valid", FILE_APPEND);