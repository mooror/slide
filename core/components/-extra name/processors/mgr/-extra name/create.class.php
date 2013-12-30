<?php
/**
 * @package -extra name
 * @subpackage processors
 */
class DoodleCreateProcessor extends modObjectCreateProcessor {
    public $classKey = 'Doodle';
    public $languageTopics = array('-extra name:default');
    public $objectType = '-extra name.doodle';

    public function beforeSave() {
        $name = $this->getProperty('name');

        if (empty($name)) {
            $this->addFieldError('name',$this->modx->lexicon('-extra name.doodle_err_ns_name'));
        } else if ($this->doesAlreadyExist(array('name' => $name))) {
            $this->addFieldError('name',$this->modx->lexicon('-extra name.doodle_err_ae'));
        }
        return parent::beforeSave();
    }
}
return 'DoodleCreateProcessor';