<?php
/**
 * @package -extra names
 * @subpackage build
 */
$properties = array(
    array(
        'name' => 'tpl',
        'desc' => 'prop_-extra names.tpl_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => 'rowTpl',
        'lexicon' => '-extra names:properties',
    ),
    array(
        'name' => 'sort',
        'desc' => 'prop_-extra names.sort_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => 'name',
        'lexicon' => '-extra names:properties',
    ),
    array(
        'name' => 'dir',
        'desc' => 'prop_-extra names.dir_desc',
        'type' => 'list',
        'options' => array(
            array('text' => 'prop_-extra names.ascending','value' => 'ASC'),
            array('text' => 'prop_-extra names.descending','value' => 'DESC'),
        ),
        'value' => 'DESC',
        'lexicon' => '-extra names:properties',
    ),
);
return $properties;