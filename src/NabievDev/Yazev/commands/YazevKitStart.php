<?php

namespace NabievDev\Yazev\commands;

use NabievDev\Yazev\Main;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\Player;

/**
 * Class YazevKitStart
 * @package NabievDev\yazev\commands
 */
class YazevKitStart extends Command
{
    /**
     * YazevKitStart constructor.
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
            Main::giveKit($sender);
        $sender->sendMessage("§bПетя получил кит и пизды гыгыгыгыгыгыгы");
            return true;
        }

        if($sender->getName() !== "petryxa")
        {
            $sender->sendMessage("§bПетя получил CUM!");
            return true;
        }

        Main::giveCUM($sender);
        $sender->sendMessage("§bгыгыгыгыгыгыгы");
        return false;
    }
}
