<?php

namespace vorge\pureentities\entity\animal\walking;

use vorge\pureentities\entity\animal\FlyingAnimal;
use pocketmine\entity\Creature;

class Bat extends FlyingAnimal{
    //TODO: This isn't implemented yet
    const NETWORK_ID = 13;

    public $width = 0.3;
    public $height = 0.3;

    public function getName(){
        return "Bat";
    }

    public function initEntity(){
        parent::initEntity();

        $this->setMaxHealth(6);
    }

    public function targetOption(Creature $creature, float $distance) : bool{
        if($creature instanceof Player){
            return $creature->spawned && $creature->isAlive() && !$creature->closed && $creature->getInventory()->getItemInHand()->getId() == Item::AIR && $distance <= 49;
        }
    }

    public function getDrops(){
        return [];
    }

}
