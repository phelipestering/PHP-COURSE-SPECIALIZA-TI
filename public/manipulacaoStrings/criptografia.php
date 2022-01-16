<?php
// criptografando com md5 retorna um valor com 32 caracteres
$salt = 'dijgorelsdmcweop$%%#@#dasknjlmegdoj';
$password = '123456' . $salt;

// sempre combine o salt com o password para ficar mais dificil descobrir o hash
//echo md5($password);


//echo sha1($password);

// http://blog.thiagobelem.net/criptografia-no-php-usando-md5-sha1-e-base64

//echo hash('sha512', $password);


// funcao que encrypta os dados de forma muito segura


function cryptC(String $value)
{
    $hash = crypt($value, 'dijgorelsdmcweop$%%#@#dasknjlmegdoj');
    $hash = md5($value);
    $hash = sha1($hash);
    $hash = hash ('sha512', $hash);

    return $hash;

}

echo cryptC($password);