<?php

namespace Nothing;

use pockemtine\Server;
use pocketmine\Player; 
use pocketmine\plugin\Nothing;
use pocketmine\command\Command;

use pockemtine\plugin\PluginBase;
use pocketmine\comamnd\CommandSender;

Class Nothing extends PluginBase{

	public function OnEnable(){ 
		$this->GetLogger()->info("Plugin đã hoạt động =)");
	}

	public function OnDisable(){
		$this->Getlogger()->info("Pluign đã tắt =)");
	}

	public function OnCommand(CommandSender $sender, Command $cmd, String $label, Array $args) : bool {

		Switch($cmd->GetName()){
			case "nothing":
			$senderMessage("Nothing !");
		}
		return true;
	}

}

