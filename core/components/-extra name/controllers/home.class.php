<?php
/**
 * @package -extra names
 * @subpackage controllers
 */
class -extra namesHomeManagerController extends -extra namesManagerController {
    public function process(array $scriptProperties = array()) {

    }
    public function getPageTitle() { return $this->modx->lexicon('-extra names'); }
    public function loadCustomCssJs() {
        $this->addJavascript($this->-extra names->config['jsUrl'].'mgr/widgets/-extra names.grid.js');
        $this->addJavascript($this->-extra names->config['jsUrl'].'mgr/widgets/home.panel.js');
        $this->addLastJavascript($this->-extra names->config['jsUrl'].'mgr/sections/index.js');
    }
    public function getTemplateFile() { return $this->-extra names->config['templatesPath'].'home.tpl'; }
}