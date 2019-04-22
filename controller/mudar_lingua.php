<?php

$cookie_value = filter_input(INPUT_GET, 'l', FILTER_VALIDATE_INT);

if($cookie_value == 2 || $cookie_value == 1 || $cookie_value == 0)
{
    setcookie("LANG", $cookie_value, time() + (86400 * 30), "/");
}
else
{ 
   setcookie("LANG", 0, time() + (86400 * 30), "/"); // por default lingua = 1
}

$url_retorno = $_SERVER['HTTP_REFERER'];
if(!empty($url_retorno))
{
    header('Location: ' . $url_retorno);
}
else
{
    header('Location:' . URL . "index.php?action=home");
}
?>