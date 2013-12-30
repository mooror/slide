<?php
/**
 * @package -extra name
 */
$dood = $modx->getService('-extra name','-extra name',$modx->getOption('-extra name.core_path',null,$modx->getOption('core_path').'components/-extra name/').'model/-extra name/',$scriptProperties);
if (!($dood instanceof -extra name)) return '';

/* setup default properties */
$tpl = $modx->getOption('tpl',$scriptProperties,'rowTpl');
$sort = $modx->getOption('sort',$scriptProperties,'name');
$dir = $modx->getOption('dir',$scriptProperties,'ASC');

/* build query */
$c = $modx->newQuery('-extra name');
$c->sortby($sort,$dir);
$-extra name = $modx->getCollection('-extra name',$c);

/* iterate */
$output = '';
foreach ($-extra name as $-extra name) {
    $-extra nameArray = $-extra name->toArray();
    $output .= $dood->getChunk($tpl,$-extra nameArray);
}

return $output;