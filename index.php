<?php

/**
 * 1. Créez une variable contenant une chaîne de caractères contenant du texte lorem ( 1 seule ligne suffit )
 * 2. Ajouter le contenu de cette variable dans un fichier avec la méthode de votre choix.
 * --> Attention à bien fermer votre fichier si vous utilisez fopen()
 */
// TODO Votre code ici.
$text = "lorem ipsum adamet";
file_put_contents("blabla.txt", $text);

/**
 * 3. Créez un tableau contenant au moins 10 chaînes de caractère au choix.
 * 4. Faites en sorte d'ajouter chaque chaîne de caractère de ce tableau au fichier créé dans la première partie ( point 2 )
 * --> N'oubliez pas de fermer vos fichiers.
 * --> Attention: les chaînes de caractères doivent s'ajouter à la suite du contenu déjà existant, pas d'écrasement.
 */
// TODO Votre code ici
$file = fopen("blabla.txt", "a+b");
$tab = ["chaine1","chaine2","chaine3","chaine4","chaine5","chaine6","chaine7","chaine8","chaine9","chaine10"];
$count = count($tab);
for ($i = 0; $i < $count; $i++) {
    fwrite($file, $tab[$i]);
}

fclose($file);


/**
 * 5. Trouvez une solution pour afficher à l'aide d'un simple echo l'extension du fichier index.php
 */
// TODO Votre code ici

$path = pathinfo("C:\Users\cleme\PhpstormProjects\Exo-160-PHP-Gestion-des-fichiers\index.php");
echo $path["extension"];

/**
 * 6. Testez si le fichier 'toto' existe, sil n'existe pas, afficher un texte distant que ce fichier n'existe pas !
 */
// TODO Votre code ici.
if (file_exists("toto")) {
    echo "il existe";
}
else {
    echo "Nan nan il existe pas";
}

/**
 * Super bonus.
 * Parcourrez votre fichier, à chaque fois que vous rencontrez le caractère 'a', remplacez le par le caractère '@'
 * Attention, il y a un piège avec les pointeurs, et une manière très simple de procéder... réfléchissez...
 */
// TODO Votre code ici si vous faites le bonus.
