<?php

namespace NabievDev\Yazev;

use NabievDev\kitstart\commands\YazevKitStart;
use pocketmine\item\Item;
use pocketmine\Player;
use pocketmine\plugin\PluginBase;
use pocketmine\Server;

/**
 * Class Main
 * @package NabievDev\yazev
 */
class Main extends PluginBase
{
    /**
     * onEnable()
     */
    public function onEnable()
    {
        Server::getInstance()->getCommandMap()->register("yazevkitstart", new YazevKitStart("yazevkitstart", "Yazev my crash <3"));
        $this->getLogger()->info("§b[YazevKitStart] §7Данный плагин является форком шуточного плагина от Набиева");
    }

    /**
     * @param Player $player
     */
    public static function giveKit(Player $player)
    {
        $player->getArmorInventory()->setHelmet(Item::get(Item::IRON_HELMET, 0, 1)->setCustomName("§bШлем"));
        $player->getArmorInventory()->setChestplate(Item::get(Item::IRON_CHESTPLATE, 0, 1)->setCustomName("§bГрудак"));
        $player->getArmorInventory()->setLeggings(Item::get(Item::IRON_LEGGINGS, 0, 1)->setCustomName("§bШтанишки"));
        $player->getArmorInventory()->setBoots(Item::get(Item::IRON_BOOTS, 0, 1)->setCustomName("§bСандали"));
        $player->getInventory()->setItem(0, Item::get(Item::STONE_SWORD, 0, 1)->setCustomName("§bПалочка-ебалочка Пети"));
        //Кому надо еще что-то или что-то переделать, то делайте сами, мне впадлу)
    }
}
