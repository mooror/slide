<?php
/**
 * Adds modActions and modMenus into package
 *
 * @package -extra name
 * @subpackage build
 */
$action= $modx->newObject('modAction');
$action->fromArray(array(
    'id' => 1,
    'namespace' => '-extra name',
    'parent' => 0,
    'controller' => 'controllers/index',
    'haslayout' => true,
    'lang_topics' => '-extra name:default',
    'assets' => '',
),'',true,true);

$menu= $modx->newObject('modMenu');
$menu->fromArray(array(
    'text' => '-extra name',
    'parent' => 'components',
    'description' => '-extra name.desc',
    'icon' => 'images/icons/plugin.gif',
    'menuindex' => 0,
    'params' => '',
    'handler' => '',
),'',true,true);
$menu->addOne($action);
unset($menus);

return $menu;