<?php
namespace ide\behaviour\spec;

use behaviour\custom\BlinkAnimationBehaviour;
use behaviour\custom\ChatterAnimationBehaviour;
use behaviour\custom\DraggingBehaviour;
use behaviour\custom\DraggingFormBehaviour;
use behaviour\custom\GameEntityBehaviour;
use behaviour\custom\GameSceneBehaviour;
use ide\behaviour\AbstractBehaviourSpec;
use ide\formats\form\AbstractFormElement;
use ide\formats\form\elements\FormFormElement;
use ide\formats\form\elements\GamePaneFormElement;
use ide\formats\form\elements\PanelFormElement;
use ide\formats\form\elements\ScrollPaneFormElement;
use ide\formats\form\elements\SpriteViewFormElement;
use ide\scripts\AbstractScriptComponent;
use php\gui\UXNode;

class GameEntityBehaviourSpec extends AbstractBehaviourSpec
{
    /**
     * @return string
     */
    public function getName()
    {
        return 'Объект игровой сцены';
    }

    public function getGroup()
    {
        return self::GROUP_GAME;
    }

    public function getIcon()
    {
        return "icons/gameMonitor16.png";
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return 'Объект для игровой сцены со свойствами физики и не только';
    }

    /**
     * @return string
     */
    public function getType()
    {
        return GameEntityBehaviour::class;
    }

    /**
     * @param $target
     * @return bool
     */
    public function isAllowedFor($target)
    {
        return !($target instanceof AbstractScriptComponent)
                && !($target instanceof FormFormElement);
    }
}