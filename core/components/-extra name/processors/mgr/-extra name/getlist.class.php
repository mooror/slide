<?php
/**
 * Get a list of -extra name
 *
 * @package -extra name
 * @subpackage processors
 */
class -extra nameGetListProcessor extends modObjectGetListProcessor {
    public $classKey = '-extra name';
    public $languageTopics = array('-extra name:default');
    public $defaultSortField = 'name';
    public $defaultSortDirection = 'ASC';
    public $objectType = '-extra name.-extra name';

    public function prepareQueryBeforeCount(xPDOQuery $c) {
        $query = $this->getProperty('query');
        if (!empty($query)) {
            $c->where(array(
                'name:LIKE' => '%'.$query.'%',
                'OR:description:LIKE' => '%'.$query.'%',
            ));
        }
        return $c;
    }
}
return '-extra nameGetListProcessor';