<?php

namespace LucasPhP\VoteLien;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\Player;
use pocketmine\plugin\PluginBase;


class main extends PluginBase{

    public function onCommand(CommandSender $sender, Command $command, string $label, array $args): bool
    {
        $commandName = $command->getName(); //Récuperation dans une variable du nom de la commande
        if($sender instanceof Player){ //si sender= l'envoyeur de la commande est un Player psq la console ne peut pas avoir de perm
            if(strtolower($commandName) === 'votelien') { //strtolower = mettre la commande en minuscule
                $sender->sendMessage('§bTu peux voter en allant sur §ahttps://minecraftpocket-servers.com/server/105922/ \n§bpuis en faisant §a/vote §bpour récupérer tes récompenses  ! ');
                return true;
            }
        }
        return true;
    }
}
