<?php
namespace develnext\bundle\jsoup;

use develnext\bundle\jsoup\components\JsoupScriptComponent;
use ide\bundle\AbstractBundle;
use ide\bundle\AbstractJarBundle;
use ide\formats\ScriptModuleFormat;
use ide\Ide;
use ide\project\behaviours\GuiFrameworkProjectBehaviour;
use ide\project\Project;
use php\jsoup\Jsoup;
use php\lib\fs;

class JsoupBundle extends AbstractJarBundle
{
    function getName()
    {
        return "HTML Парсер (Jsoup)";
    }

    function getDescription()
    {
        return "Пакет для парсинга html и сайтов в стиле апи jQuery";
    }

    public function isAvailable(Project $project)
    {
        return $project->hasBehaviour(GuiFrameworkProjectBehaviour::class);
    }

    public function onAdd(Project $project)
    {
        parent::onAdd($project);

        $format = Ide::get()->getRegisteredFormat(ScriptModuleFormat::class);

        if ($format) {
            $format->register(new JsoupScriptComponent());
        }
    }

    public function onRemove(Project $project)
    {
        parent::onRemove($project);

        $format = Ide::get()->getRegisteredFormat(ScriptModuleFormat::class);

        if ($format) {
            $format->unregister(new JsoupScriptComponent());
        }
    }

    /**
     * @return array
     */
    public function getUseImports()
    {
        return [Jsoup::class];
    }
}