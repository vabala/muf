<?php

$lang = 'lv';
if(isset($_GET["lang"])){
    $lang = $_GET["lang"];
}

$ml = array();


$ml = [
    'lv' => ["<a href = 'index.php'> Sakums </a>","<a href = '#'> Auglu mafini </a>","<a href = '#'> Sokolades mafini </a>","<a href = '#'> Parastie mafini </a>","<a href = 'contacts.php'> Kontakti </a>","<a href = 'index.php?logOut=1'> LogOut  </a>"] ,
    'ru' => ["<a href = 'index.php'> Glavnaja </a>","<a href = '#'> Fruktovie mafini </a>","<a href = '#'> Sokoladnie mafini </a>","<a href = '#'> Obicnie mafini </a>","<a href = 'contacts.php'> Kontakti </a>","<a href = 'index.php?logOut=1'> LogOut </a>"],  
    'en'  => ["<a href = 'index.php'> Home </a>","<a href = '#'> Fruit maffins </a>","<a href = '#'> Chocolate maffins </a>","<a href = '#'> Ordinary maffins </a>","<a href = 'contacts.php'> Contacts </a>","<a href = 'index.php?logOut=1'> LogOut </a>"],
    
];



if(!array_key_exists($lang, $ml)){
    $lang = 'lv';
}

$d= implode(" | ", $ml[$lang]);
echo $d;

echo '<br>';
$lang = ["<a href = '?lang=lv'>lv </a>","<a href = '?lang=ru'> ru </a>","<a href = '?lang=en'>en </a>"];
$e= implode (" | ", $lang);
echo $e;



