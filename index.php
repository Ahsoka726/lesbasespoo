<?php

    require(__DIR__. '/hero.php');
    require(__DIR__. '/orc.php');

    $player = new Hero(2000,0,'Epée normal',250, 'Bouclier',600);
    $player2 = new Orc(500,0);

    while ($player->getHealth() > 0) {
        $player2->attack();
        $player->getHealth();
        $player->attacked($damage);
        echo 'L\'orc a attaqué  ' .$player2->attack(). 'de dégats, l\'armure a absorbé' .$player->getShieldValue(). ' mais des dégats on était infligés ';
            
    }
























    // if ($damage < 0) {
    //     $damage = 0; // les dégâts ne peuvent pas être négatifs
    // }
    // $unabsorbed_damage = $orc_damage - $damage; // dégâts non absorbés par l'armure
    // $hero_health -= $damage; // mise à jour de la santé du héros
    // $hero_rage += 10; // le héros gagne 10 points de rage à chaque attaque de l'orc
    // echo "L'Orc inflige ".$damage." points de dégâts au héros. L'armure absorbe ".$armor_reduction." points de dégâts, il reste ".$unabsorbed_damage." points de dégâts non absorbés. La santé du héros est maintenant ".$hero_health." et sa rage est de ".$hero_rage.".\n";
    // }

?>