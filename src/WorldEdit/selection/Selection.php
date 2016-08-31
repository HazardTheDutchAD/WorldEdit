<?php

namespace WorldEdit\selection;

use pocketmine\level\Position;
use pocketmine\Player;

class Selection {

    /** @var SelectionHandler */
    private $handler;

    /** @var Player|null */
    private $owner;

    /** @var Position */
    private $position1 = null;

    /** @var Position */
    private $position2 = null;

    /**
     * Selection constructor.
     *
     * @param SelectionHandler $handler
     * @param Player|null $owner
     */
    public function __construct(SelectionHandler $handler, $owner) {
        $this->handler = $handler;
        $this->owner = $owner;
    }

    /**
     * @return Player|null
     */
    public function getOwner() {
        return $this->owner;
    }

    /**
     * @return Position
     */
    public function getPosition1() {
        return $this->position1;
    }

    /**
     * @return Position
     */
    public function getPosition2() {
        return $this->position2;
    }

    /**
     * @return mixed
     */
    public function getMaxX() {
        return max($this->position1->x, $this->position2->x);
    }

    /**
     * @return mixed
     */
    public function getMinX() {
        return min($this->position1->x, $this->position2->x);
    }

    /**
     * @return mixed
     */
    public function getMaxY() {
        return max($this->position1->y, $this->position2->y);
    }

    /**
     * @return mixed
     */
    public function getMinY() {
        return min($this->position1->y, $this->position2->y);
    }

    /**
     * @return mixed
     */
    public function getMaxZ() {
        return max($this->position1->z, $this->position2->z);
    }

    /**
     * @return mixed
     */
    public function getMinZ() {
        return min($this->position1->z, $this->position2->z);
    }

    /**
     * @param Position $position1
     */
    public function setPosition1($position1) {
        $this->position1 = $position1;
    }

    /**
     * @param Position $position2
     */
    public function setPosition2($position2) {
        $this->position2 = $position2;
    }

    /**
     * @return bool
     */
    public function isSelectionReady() {
        return !(empty($this->position1) and empty($this->position2));
    }

    public function remove() {
        $this->handler->removeSelection($this);
    }

}