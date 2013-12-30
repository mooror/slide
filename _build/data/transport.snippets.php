<?php
/**
 * @package -extra names
 * @subpackage build
 */
function getSnippetContent($filename) {
    $o = file_get_contents($filename);
    $o = trim(str_replace(array('<?php','?>'),'',$o));
    return $o;
}
$snippets = array();

/* course snippets */
$snippets[1]= $modx->newObject('modSnippet');
$snippets[1]->fromArray(array(
    'id' => 1,
    'name' => '-extra names',
    'description' => 'Displays a list of -extra names.',
    'snippet' => getSnippetContent($sources['elements'].'snippets/snippet.-extra names.php'),
),'',true,true);
$properties = include $sources['data'].'properties/properties.-extra names.php';
$snippets[1]->setProperties($properties);
unset($properties);

return $snippets;