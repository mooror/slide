<?php
require_once (dirname(__FILE__).'/update.class.php');
/**
 * @package -extra name
 * @subpackage processors
 */
class -extra nameUpdateFromGridProcessor extends -extra nameUpdateProcessor {
    public function initialize() {
        $data = $this->getProperty('data');
        if (empty($data)) return $this->modx->lexicon('invalid_data');
        $data = $this->modx->fromJSON($data);
        if (empty($data)) return $this->modx->lexicon('invalid_data');
        $this->setProperties($data);
        $this->unsetProperty('data');

        return parent::initialize();
    }
}
return '-extra nameUpdateFromGridProcessor';