<?php

namespace roi611\AntiTotem;

use pocketmine\plugin\PluginBase;

use pocketmine\event\Listener;
use pocketmine\event\entity\EntityDamageEvent;

class Main extends PluginBase implements Listener
{

    public function onEnable(){
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
    }

    public function onDamage(EntityDamageEvent $source){

        $totemModifier = $source->getModifier(EntityDamageEvent::MODIFIER_TOTEM);
		if($totemModifier < 0){ //Totem prevented death
            $name = $source->getEntity();
            $name->kill();

        }

	}

}