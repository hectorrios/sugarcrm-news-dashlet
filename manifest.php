<?php
/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */

// THIS CONTENT IS GENERATED BY azucarcli
$manifest = array(
    'built_in_version' => '7.7.0',
    'acceptable_sugar_versions' => array (
        'regex_matches' => [
            '7\.[5-9]\.[0-9]\.[0-9]$',
        ],
    ),
    'acceptable_sugar_flavors' =>
        array (
            0 => 'ENT',
            1 => 'ULT',
        ),
        'readme' => '',
        'key' => '',
        'author' => 'SugarCRM',
        'description' => 'Fix to the NewsDashlet provided by Angel Magaña',
        'icon' => '',
        'is_uninstallable' => true,
        'name' => 'news-dashlet',
        'published_date' => '',
        'type' => 'module',
        'version' => '0.0.1',
        'remove_tables' => 'prompt',
);

$installdefs = array (
    'id' => '',


     //Use the copy block to copy files
     'copy' => [
        [
          'from' => '<basepath>/custom/',
          'to' => 'custom/',
        ],
     ],

     'post_execute' => array(
       '<basepath>/scripts/cleanup.php',
     ),

    'post_uninstall' => array(
        '<basepath>/scripts/cleanup.php',
    ),
);
    