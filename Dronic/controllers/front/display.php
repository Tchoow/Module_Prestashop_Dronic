<?php
class DronicdisplayModuleFrontController extends ModuleFrontController
{
    public function initContent()
    {
        parent::initContent();
        $this->setTemplate('module:Dronic/views/templates/front/display.tpl');
    }
}