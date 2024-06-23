<?php
//transforme a fraase em objeto
$string = '{"nome":"Vinicius","anoNascimento":1997,"profissao":"Dev"}';

var_dump(json_decode($string, true));


?>