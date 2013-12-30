<?php
/**
 * @package -extra name
 * @subpackage controllers
 */
require_once dirname(__FILE__) . '/model/-extra name/-extra name.class.php';
abstract class -extra nameManagerController extends modExtraManagerController {
    /** @var -extra name $-extra name */
    public $-extra name;
    public function initialize() {
        $this->-extra name = new -extra name($this->modx);

        $this->addCss($this->-extra name->config['cssUrl'].'mgr.css');
        $this->addJavascript($this->-extra name->config['jsUrl'].'mgr/-extra name.js');
        $this->addHtml('<script type="text/javascript">
        Ext.onReady(function() {
            -extra name.config = '.$this->modx->toJSON($this->-extra name->config).';
        });
        </script>');
        return parent::initialize();
    }
    public function getLanguageTopics() {
        return array('-extra name:default');
    }
    public function checkPermissions() { return true;}
}
/**
 * @package -extra name
 * @subpackage controllers
 */
class IndexManagerController extends -extra nameManagerController {
    public static function getDefaultController() { return 'home'; }
}