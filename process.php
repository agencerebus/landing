<?php
try
{
    $bdd = new PDO('mysql:host=ariewnetave.mysql.db;dbname=ariewnetave', 'ariewnetave', 'RebusCompet8');
 
}
catch (Exception $e)
{
    exit('Erreur : ' . $e->getMessage());
}
$nom     = $_POST["email"] ;
echo $nom;
$req = $bdd->prepare('INSERT INTO emails(id, email) VALUES(:id, :email)');
$req->execute(array(
	'id' => "",
	'email' => $nom
	));


print_r($bdd->errorInfo());
?>