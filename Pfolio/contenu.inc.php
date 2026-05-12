<?php
if(!isset($_GET['pg'])){
    include('accueil.inc.php');
}else{
    switch($_GET['pg']){
        case 'ser': include('service.inc.php');
            break;
        case 'log': include('login.inc.php');
            break;
        case 'app': include('apropos.inc.php');
            break;
        case 'con': include('contact.inc.php');
            break;
        case 'ins': include('ajout.inc.php');
            break;   
        case 'lis': include('listes.inc.php');
            break;
        case 'supp': include('delet.inc.php');
            break;
        default: include('accueil.inc.php');
    }
}
?>