<?php
/**
 * Metadata version
 */

use Controller\Admin as AdminController;

$sMetadataVersion = '2.0';
/**
 * Module information
 */
$aModule = array(
  'id'           => 'mb/adminsearch_extension',
  'title'        => 'Adminsuche-Erweiterung',
  'description'  => 'adminsearch_extension',
  'thumbnail'    => '',
  'version'      => '1.0',
  'author'       => 'Buhe',
  'controllers'  => [
    'mb_navigationController_extension' => AdminController\mb_navigationController_extension::class,
    'wostok' => AdminController\wostok::class,
  ],
  'templates' => [],
  'settings'    => [
    ['group' => 'oxcom_adminsearch_main', 'name' => 'blMbAdminSearchShowModulesLinks', 'type' => 'bool', 'value' => true],
  ],
);