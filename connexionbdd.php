<?php

try
{
	 $bdd=new PDO('mysql:host=127.0.0.1;dbname=whitelist;charset=utf8','root','YOUR_PASSWORD',
	array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
	
}
catch(Exception $e)
{
	echo'Echec de connexion à la BDD car';
	die('Erreur :'.$e->getMessage());
}

?>