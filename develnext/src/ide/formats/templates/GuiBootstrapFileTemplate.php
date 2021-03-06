<?php
namespace ide\formats\templates;

use ide\formats\AbstractFileTemplate;

/**
 * Class GuiBootstrapFileTemplate
 * @package ide\formats\templates
 */
class GuiBootstrapFileTemplate extends AbstractFileTemplate
{
    protected $beforeCode = '';
    protected $afterCode = '';

    /**
     * @return array
     */
    public function getArguments()
    {
        return [
            'BEFORE_CODE' => $this->beforeCode,
            'AFTER_CODE'  => $this->afterCode,
        ];
    }

    /**
     * @return mixed
     */
    public function getBeforeCode()
    {
        return $this->beforeCode;
    }

    /**
     * @param mixed $beforeCode
     */
    public function setBeforeCode($beforeCode)
    {
        $this->beforeCode = $beforeCode;
    }

    /**
     * @return mixed
     */
    public function getAfterCode()
    {
        return $this->afterCode;
    }

    /**
     * @param mixed $afterCode
     */
    public function setAfterCode($afterCode)
    {
        $this->afterCode = $afterCode;
    }
}