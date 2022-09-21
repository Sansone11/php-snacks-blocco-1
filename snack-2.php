<!-- Snack 2
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->
<?php
$name = $_GET['name'];
$email = $_GET['mail'];
$age = $_GET['age'];

$mailChecka = (strpos($email,'@'));
$mailCheckb = (strpos($email,'.'));
var_dump($mailChecka,$mailCheckb);

if($mailChecka != false && $mailCheckb != false){
    echo 'email ok';

}else{
    echo 'email errata';
}
?>