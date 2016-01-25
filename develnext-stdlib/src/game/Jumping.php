<?php
namespace game;

use action\Geometry;
use php\gui\UXNode;

class Jumping
{
    const DATA_SOLID_PROPERTY = '--jumping-solid';

    /**
     * @param UXNode $node
     * @param $gridX
     * @param $gridY
     */
    static function toGrid(UXNode $node, $gridX, $gridY)
    {
        $x = $node->x;
        $y = $node->y;

        $x = round($x / $gridX) * $gridX;
        $y = round($y / $gridY) * $gridY;

        $node->x = $x;
        $node->y = $y;
    }

    /**
     * @param UXNode $node
     * @param int $gridX
     * @param int $gridY
     * @param int $tryIndex
     */
    static function toRand(UXNode $node, $gridX = 1, $gridY = 1, $tryIndex = 0)
    {
        $parent = $node->parent;

        if ($parent) {
            $x = rand(0, $parent->width);
            $y = rand(0, $parent->height);

            $node->x = $x;
            $node->y = $y;

            if ($gridX > 1 || $gridY > 1) {
                Jumping::toGrid($node, $gridX, $gridY);
            }
        }
    }

    /**
     * @param UXNode $node
     */
    static function toStart(UXNode $node)
    {
        if ($position = $node->data('--start-position')) {
            $node->position = $position;
        }
    }

    /**
     * @param UXNode $node
     * @param $x
     * @param $y
     */
    static function to(UXNode $node, $x, $y)
    {
        $node->x = $x;
        $node->y = $y;
    }
}