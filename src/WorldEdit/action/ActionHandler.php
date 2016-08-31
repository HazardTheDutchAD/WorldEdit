<?php

namespace WorldEdit\action;

use WorldEdit\WorldEdit;

class ActionHandler {

    /** @var WorldEdit */
    private $plugin;

    /** @var WorldEditAction[] */
    private $actions = [];

    /**
     * ActionHandler constructor.
     *
     * @param WorldEdit $plugin
     */
    public function __construct(WorldEdit $plugin) {
        $this->plugin = $plugin;
    }

    /**
     * @return WorldEdit
     */
    public function getPlugin() {
        return $this->plugin;
    }
    /**
     * @return WorldEditAction[]
     */
    public function getActions() {
        return $this->actions;
    }

    /**
     * @param WorldEditAction[] $actions
     */
    public function setActions($actions) {
        $this->actions = $actions;
    }

    /**
     * @param WorldEditAction $action
     */
    public function removeAction(WorldEditAction $action) {
        if(in_array($action, $this->actions)) {
            unset($this->actions[array_search($action, $this->actions)]);
        }
    }

}