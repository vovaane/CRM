<?php

if (!defined('sugarEntry') || !sugarEntry)
    die('Not A Valid Entry Point');

require_once('include/Dashlets/DashletGeneric.php');
require_once('modules/jjwg_Areas/jjwg_Areas.php');

class jjwg_AreasDashlet extends DashletGeneric { 

    function jjwg_AreasDashlet($id, $def = null) {

        require('modules/jjwg_Areas/metadata/dashletviewdefs.php');

        parent::DashletGeneric($id, $def);

        if (empty($def['title']))
            $this->title = translate('LBL_HOMEPAGE_TITLE', 'jjwg_Areas');

        $this->searchFields = $dashletData['jjwg_AreasDashlet']['searchFields'];
        $this->columns = $dashletData['jjwg_AreasDashlet']['columns'];

        $this->seedBean = new jjwg_Areas();        
    }

}