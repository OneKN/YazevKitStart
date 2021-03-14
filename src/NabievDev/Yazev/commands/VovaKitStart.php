<?php

namespace NabievDev\kitstart\commands;

use NabievDev\vovakit\Main;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\Player;

/**
 * Class VovaKitStart
 * @package NabievDev\kitstart\commands
 */
class VovaKitStart extends Command
{
    /**
     * VovaKitStart constructor.
     * @param string $name
     * @param string $description
     * @param string|null $usageMessage
     * @param array $aliases
     */
    public function __construct(string $name, string $description = "", string $usageMessage = null, array $aliases = [])
    {
        parent::__construct($name, $description, $usageMessage, $aliases);
    }

    /**
     * @param CommandSender $sender
     * @param string $commandLabel
     * @param array $args
     * @return bool
     */
    public function execute(CommandSender $sender, string $commandLabel, array $args) : bool
    {
        if(!$sender instanceof Player)
        {
            $sender->sendMessage("§bДанный набор может взять только Вова Кит из игры!");
            return true;
        }

        if($sender->getName() !== "extinqued")
        {
            $sender->sendMessage("§bПашель нахуи, этот набор тока для Вовi");
            return true;
        }

        Main::giveKit($sender);
        $sender->sendMessage("§bВова получил кит и пизды гыгыгыгыгыгыгы");
        return false;
    }
}