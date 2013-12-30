<?php
require_once (strtr(realpath(dirname(dirname(__FILE__))), '\\', '/') . '/-extra name.class.php');
class -extra name_mysql extends -extra name {
    public function __construct(& $xpdo) {
        parent :: __construct($xpdo);
    }
}
?>