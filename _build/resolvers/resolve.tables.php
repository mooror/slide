<?php
/**
 * Resolve creating custom db tables during install.
 *
 * @package -extra name
 * @subpackage build
 */
if ($object->xpdo) {
    switch ($options[xPDOTransport::PACKAGE_ACTION]) {
        case xPDOTransport::ACTION_INSTALL:
            $modx =& $object->xpdo;
            $modelPath = $modx->getOption('-extra name.core_path',null,$modx->getOption('core_path').'components/-extra name/').'model/';
            $modx->addPackage('-extra name',$modelPath);

            $manager = $modx->getManager();

            $manager->createObjectContainer('-extra name');

            break;
        case xPDOTransport::ACTION_UPGRADE:
            break;
    }
}
return true;