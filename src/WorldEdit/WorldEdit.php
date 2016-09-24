<?php

namespace WorldEdit;

use pocketmine\plugin\PluginBase;
use WorldEdit\action\ActionHandler;
use WorldEdit\command\CommandHandler;
use WorldEdit\selection\SelectionHandler;

class WorldEdit extends PluginBase {

    /** @var WorldEdit */
    private static $instance = null;

    /** @var SelectionHandler */
    private $selectionHandler;

    /** @var ActionHandler */
    private $actionHandler;

    /** @var CommandHandler */
    private $commandHandler;

    public function onLoad() {
        if(!self::$instance instanceof WorldEdit) {
            self::$instance = $this;
        }
    }

    public function onEnable() {
        $this->setSelectionHandler();
        $this->setActionHandler();
        $this->setCommandHandler();
        $this->getLogger()->info("WorldEdit by @GiantQuartz was enabled");
    }

    public function onDisable() {
        $this->getLogger()->info("WorldEdit by @GiantQuartz was disabled");
    }

    /**
     * Return SelectionHandler instance
     *
     *
     * @return SelectionHandler
     */
    public function getSelectionHandler() {
        return $this->selectionHandler;
    }

    /**
     * @return ActionHandler
     */
    public function getActionHandler() {
        return $this->actionHandler;
    }

    /**
     * @return CommandHandler
     */
    public function getCommandHandler() {
        return $this->commandHandler;
    }

    public function setSelectionHandler() {
        $this->selectionHandler = new SelectionHandler($this);
    }

    public function setActionHandler() {
        $this->actionHandler = new ActionHandler($this);
    }

    public function setCommandHandler() {
        $this->commandHandler = new CommandHandler($this);
    }

}
