<?php

namespace WorldEdit;

use pocketmine\plugin\PluginBase;

class WorldEdit extends PluginBase {

    /** @var WorldEdit */
    private static $instance = null;

    public function onLoad() {
        if(!self::$instance instanceof WorldEdit) {
            self::$instance = $this;
        }
    }

    public function onEnable() {
        $this->getLogger()->info("WorldEdit by @EntirelyQuartz was enabled");
    }

    public function onDisable() {
        $this->getLogger()->info("WorldEdit by @EntirelyQuartz was disabled");
    }

}