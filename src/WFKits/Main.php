<?php

namespace WFKits;

use pocketmine\plugin\PluginBase;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\event\player\PlayerQuitEvent;
use pocketmine\Player;
use pocketmine\Server;
use pocketmine\event\Listener;
use pocketmine\utils\TextFormat as C;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;

class Main extends PluginBase implements Listener{
public function onLoad(){
                    $this->getLogger()->info("Plugin Loading");
          }
          public function onEnable(){
					$this->getServer()->getPluginManager()->registerEvents($this,$this);
                    $this->getServer->getLogger()->info("Enabled Plugin");
          }
          public function onDisable(){
                    $this->getServer->getLogger()->info("Plugin Disabled");
          }
	  public function onJoin(PlayerJoinEvent $event){
  		    $player = $event->getPlayer();
   		    $name = $player->getName();
   	            $this->getServer()->broadcastMessage(C::GREEN."Ducky Scammed the Server$! He's a dick!");
	  }
	  public function onCommand(CommandSender $sender, Command $command, string $label, array $args) : bool{
			if($command->getName() === "wizard"){
 			if(!$sender instanceof Player){
          	    $sender->sendMessage("This Command Only Works for players! Please perform this command IN GAME!");
     }else{
$sender->sendMessage("Heres Your Wand");
$sender->getInventory()->addItem(Item::get(280,0,1);
				 }				 
return true;
				 }
				 }
