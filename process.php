<?php
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=landing', 'root', '');
 
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

echo 'Le jeu a bien été ajouté !';

print_r($bdd->errorInfo());
?>