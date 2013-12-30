<?php
/**
 * -extra names Connector
 *
 * @package -extra names
 */
require_once dirname(dirname(dirname(dirname(__FILE__)))).'/config.core.php';
require_once MODX_CORE_PATH.'config/'.MODX_CONFIG_KEY.'.inc.php';
require_once MODX_CONNECTORS_PATH.'index.php';

$corePath = $modx->getOption('-extra names.core_path',null,$modx->getOption('core_path').'components/-extra names/');
require_once $corePath.'model/-extra names/-extra names.class.php';
$modx->-extra names = new -extra names($modx);

$modx->lexicon->load('-extra names:default');

/* handle request */
$path = $modx->getOption('processorsPath',$modx->-extra names->config,$corePath.'processors/');
$modx->request->handleRequest(array(
    'processors_path' => $path,
    'location' => '',
));




/** hello*/