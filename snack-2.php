<!-- Snack 2
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->
<?php
$name = $_GET['name'];
$email = $_GET['mail'];
$age = $_GET['age'];

$mailChecka = (strpos($email,'@'));
$mailCheckb = (strpos($email,'.'));

if($mailChecka != false && $mailCheckb != false){
    $mailMsg = 'email ok';

}else{
    $mailMsg = 'email errata';
};


if(is_numeric($age)) {
    $ageMessage = 'eta corretta';
} else {
    $ageMessage = 'eta errata';
}

if (strlen($name ) <= 3) {
    $nameMessage = "nome non corretto";
} else {
    $nameMessage = "nome ok";
}

if($mailMsg =='email ok' && $ageMessage =='eta corretta'  && $nameMessage == 'nome ok'){
    $userAccess = 'accesso riuscito';
} else {
    $userAccess ='accesso negato';
}

?>
<div>
<!-- <?= $mailMsg ?>
</div>
<div>
<?= $ageMessage ?>
</div>
<div>
<?= $nameMessage  ?>
</div> -->
<div>
<?= $userAccess ?>
</div>