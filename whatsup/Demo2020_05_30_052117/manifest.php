<?php
/**
 *
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by SalesAgility Ltd.
 * Copyright (C) 2011 - 2018 SalesAgility Ltd.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU Affero General Public License for more
 * details.
 *
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 *
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo and "Supercharged by SuiteCRM" logo. If the display of the logos is not
 * reasonably feasible for technical reasons, the Appropriate Legal Notices must
 * display the words "Powered by SugarCRM" and "Supercharged by SuiteCRM".
 */

// THIS CONTENT IS GENERATED BY MBPackage.php
$manifest = array (
  0 => 
  array (
    'acceptable_sugar_versions' => 
    array (
      0 => '6.5.25',
    ),
  ),
  1 => 
  array (
    'acceptable_sugar_flavors' => 
    array (
      0 => 'CE',
      1 => 'PRO',
      2 => 'ENT',
    ),
  ),
  'readme' => '',
  'key' => '',
  'author' => '',
  'description' => '',
  'icon' => '',
  'is_uninstallable' => true,
  'name' => 'Demo',
  'published_date' => '2020-05-30 05:21:10',
  'type' => 'module',
  'version' => 1590816077,
  'remove_tables' => 'prompt',
);


$installdefs = array (
  'id' => 'Demo',
  'relationships' => 
  array (
  ),
  'language' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/include/language/en_us.Demo.php',
      'to_module' => 'application',
      'language' => 'en_us',
    ),
    1 => 
    array (
      'from' => '<basepath>/SugarModules/modules/Leads/language/en_us.lang.php',
      'to_module' => 'Leads',
      'language' => 'en_us',
    ),
  ),
  'custom_fields' => 
  array (
    'Leadsjjwg_maps_address_c' => 
    array (
      'id' => 'Leadsjjwg_maps_address_c',
      'name' => 'jjwg_maps_address_c',
      'label' => 'LBL_JJWG_MAPS_ADDRESS',
      'comments' => 'Address',
      'help' => 'Address',
      'module' => 'Leads',
      'type' => 'varchar',
      'max_size' => '255',
      'require_option' => '0',
      'default_value' => NULL,
      'date_modified' => '2020-05-08 06:09:39',
      'deleted' => '0',
      'audited' => '0',
      'mass_update' => '0',
      'duplicate_merge' => '0',
      'reportable' => '1',
      'importable' => 'true',
      'ext1' => NULL,
      'ext2' => '',
      'ext3' => '',
      'ext4' => '',
    ),
    'Leadsjjwg_maps_geocode_status_c' => 
    array (
      'id' => 'Leadsjjwg_maps_geocode_status_c',
      'name' => 'jjwg_maps_geocode_status_c',
      'label' => 'LBL_JJWG_MAPS_GEOCODE_STATUS',
      'comments' => 'Geocode Status',
      'help' => 'Geocode Status',
      'module' => 'Leads',
      'type' => 'varchar',
      'max_size' => '255',
      'require_option' => '0',
      'default_value' => NULL,
      'date_modified' => '2020-05-08 06:09:39',
      'deleted' => '0',
      'audited' => '0',
      'mass_update' => '0',
      'duplicate_merge' => '0',
      'reportable' => '1',
      'importable' => 'true',
      'ext1' => NULL,
      'ext2' => '',
      'ext3' => '',
      'ext4' => '',
    ),
    'Leadsjjwg_maps_lat_c' => 
    array (
      'id' => 'Leadsjjwg_maps_lat_c',
      'name' => 'jjwg_maps_lat_c',
      'label' => 'LBL_JJWG_MAPS_LAT',
      'comments' => '',
      'help' => 'Latitude',
      'module' => 'Leads',
      'type' => 'float',
      'max_size' => '10',
      'require_option' => '0',
      'default_value' => '0.00000000',
      'date_modified' => '2020-05-08 06:09:39',
      'deleted' => '0',
      'audited' => '0',
      'mass_update' => '0',
      'duplicate_merge' => '0',
      'reportable' => '1',
      'importable' => 'true',
      'ext1' => '8',
      'ext2' => '',
      'ext3' => '',
      'ext4' => '',
    ),
    'Leadsjjwg_maps_lng_c' => 
    array (
      'id' => 'Leadsjjwg_maps_lng_c',
      'name' => 'jjwg_maps_lng_c',
      'label' => 'LBL_JJWG_MAPS_LNG',
      'comments' => '',
      'help' => 'Longitude',
      'module' => 'Leads',
      'type' => 'float',
      'max_size' => '11',
      'require_option' => '0',
      'default_value' => '0.00000000',
      'date_modified' => '2020-05-08 06:09:39',
      'deleted' => '0',
      'audited' => '0',
      'mass_update' => '0',
      'duplicate_merge' => '0',
      'reportable' => '1',
      'importable' => 'true',
      'ext1' => '8',
      'ext2' => '',
      'ext3' => '',
      'ext4' => '',
    ),
    'Leadslinkedin_c' => 
    array (
      'id' => 'Leadslinkedin_c',
      'name' => 'linkedin_c',
      'label' => 'LBL_LINKEDIN',
      'comments' => 'URL LinkedIn',
      'help' => NULL,
      'module' => 'Leads',
      'type' => 'url',
      'max_size' => '255',
      'require_option' => '0',
      'default_value' => NULL,
      'date_modified' => '2020-05-25 12:11:25',
      'deleted' => '0',
      'audited' => '0',
      'mass_update' => '0',
      'duplicate_merge' => '0',
      'reportable' => '1',
      'importable' => 'true',
      'ext1' => NULL,
      'ext2' => NULL,
      'ext3' => '0',
      'ext4' => '_self',
    ),
    'Leadstechnology_c' => 
    array (
      'id' => 'Leadstechnology_c',
      'name' => 'technology_c',
      'label' => 'LBL_TECHNOLOGY',
      'comments' => NULL,
      'help' => NULL,
      'module' => 'Leads',
      'type' => 'varchar',
      'max_size' => '255',
      'require_option' => '0',
      'default_value' => NULL,
      'date_modified' => '2020-05-19 12:50:04',
      'deleted' => '0',
      'audited' => '1',
      'mass_update' => '0',
      'duplicate_merge' => '0',
      'reportable' => '1',
      'importable' => 'true',
      'ext1' => NULL,
      'ext2' => NULL,
      'ext3' => NULL,
      'ext4' => NULL,
    ),
  ),
  'copy' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/modules/Leads/metadata/SearchFields.php',
      'to' => 'custom/modules/Leads/metadata/SearchFields.php',
    ),
    1 => 
    array (
      'from' => '<basepath>/SugarModules/modules/Leads/metadata/SearchFields.php',
      'to' => 'custom/working/modules/Leads/metadata/SearchFields.php',
    ),
    2 => 
    array (
      'from' => '<basepath>/SugarModules/modules/Leads/metadata/detailviewdefs.php',
      'to' => 'custom/modules/Leads/metadata/detailviewdefs.php',
    ),
    3 => 
    array (
      'from' => '<basepath>/SugarModules/modules/Leads/metadata/detailviewdefs.php',
      'to' => 'custom/working/modules/Leads/metadata/detailviewdefs.php',
    ),
    4 => 
    array (
      'from' => '<basepath>/SugarModules/modules/Leads/metadata/editviewdefs.php',
      'to' => 'custom/modules/Leads/metadata/editviewdefs.php',
    ),
    5 => 
    array (
      'from' => '<basepath>/SugarModules/modules/Leads/metadata/editviewdefs.php',
      'to' => 'custom/working/modules/Leads/metadata/editviewdefs.php',
    ),
    6 => 
    array (
      'from' => '<basepath>/SugarModules/modules/Leads/metadata/listviewdefs.php',
      'to' => 'custom/modules/Leads/metadata/listviewdefs.php',
    ),
    7 => 
    array (
      'from' => '<basepath>/SugarModules/modules/Leads/metadata/quickcreatedefs.php',
      'to' => 'custom/modules/Leads/metadata/quickcreatedefs.php',
    ),
    8 => 
    array (
      'from' => '<basepath>/SugarModules/modules/Leads/metadata/quickcreatedefs.php',
      'to' => 'custom/working/modules/Leads/metadata/quickcreatedefs.php',
    ),
    9 => 
    array (
      'from' => '<basepath>/Extension/modules/Accounts/Ext/Vardefs/_override_sugarfield_jjwg_maps_lng_c.php',
      'to' => 'custom/Extension/modules/Accounts/Ext/Vardefs/_override_sugarfield_jjwg_maps_lng_c.php',
    ),
    10 => 
    array (
      'from' => '<basepath>/Extension/modules/Accounts/Ext/Vardefs/_override_sugarfield_jjwg_maps_lat_c.php',
      'to' => 'custom/Extension/modules/Accounts/Ext/Vardefs/_override_sugarfield_jjwg_maps_lat_c.php',
    ),
    11 => 
    array (
      'from' => '<basepath>/Extension/modules/Accounts/Ext/Vardefs/_override_sugarfield_jjwg_maps_geocode_status_c.php',
      'to' => 'custom/Extension/modules/Accounts/Ext/Vardefs/_override_sugarfield_jjwg_maps_geocode_status_c.php',
    ),
    12 => 
    array (
      'from' => '<basepath>/Extension/modules/Accounts/Ext/Vardefs/_override_sugarfield_jjwg_maps_address_c.php',
      'to' => 'custom/Extension/modules/Accounts/Ext/Vardefs/_override_sugarfield_jjwg_maps_address_c.php',
    ),
    13 => 
    array (
      'from' => '<basepath>/Extension/modules/Cases/Ext/Vardefs/_override_sugarfield_jjwg_maps_lng_c.php',
      'to' => 'custom/Extension/modules/Cases/Ext/Vardefs/_override_sugarfield_jjwg_maps_lng_c.php',
    ),
    14 => 
    array (
      'from' => '<basepath>/Extension/modules/Cases/Ext/Vardefs/_override_sugarfield_jjwg_maps_lat_c.php',
      'to' => 'custom/Extension/modules/Cases/Ext/Vardefs/_override_sugarfield_jjwg_maps_lat_c.php',
    ),
    15 => 
    array (
      'from' => '<basepath>/Extension/modules/Cases/Ext/Vardefs/_override_sugarfield_jjwg_maps_geocode_status_c.php',
      'to' => 'custom/Extension/modules/Cases/Ext/Vardefs/_override_sugarfield_jjwg_maps_geocode_status_c.php',
    ),
    16 => 
    array (
      'from' => '<basepath>/Extension/modules/Cases/Ext/Vardefs/_override_sugarfield_jjwg_maps_address_c.php',
      'to' => 'custom/Extension/modules/Cases/Ext/Vardefs/_override_sugarfield_jjwg_maps_address_c.php',
    ),
    17 => 
    array (
      'from' => '<basepath>/Extension/modules/Contacts/Ext/Vardefs/_override_sugarfield_jjwg_maps_lng_c.php',
      'to' => 'custom/Extension/modules/Contacts/Ext/Vardefs/_override_sugarfield_jjwg_maps_lng_c.php',
    ),
    18 => 
    array (
      'from' => '<basepath>/Extension/modules/Contacts/Ext/Vardefs/_override_sugarfield_jjwg_maps_lat_c.php',
      'to' => 'custom/Extension/modules/Contacts/Ext/Vardefs/_override_sugarfield_jjwg_maps_lat_c.php',
    ),
    19 => 
    array (
      'from' => '<basepath>/Extension/modules/Contacts/Ext/Vardefs/_override_sugarfield_jjwg_maps_geocode_status_c.php',
      'to' => 'custom/Extension/modules/Contacts/Ext/Vardefs/_override_sugarfield_jjwg_maps_geocode_status_c.php',
    ),
    20 => 
    array (
      'from' => '<basepath>/Extension/modules/Contacts/Ext/Vardefs/_override_sugarfield_jjwg_maps_address_c.php',
      'to' => 'custom/Extension/modules/Contacts/Ext/Vardefs/_override_sugarfield_jjwg_maps_address_c.php',
    ),
    21 => 
    array (
      'from' => '<basepath>/Extension/modules/Leads/Ext/Vardefs/_override_sugarfield_jjwg_maps_lng_c.php',
      'to' => 'custom/Extension/modules/Leads/Ext/Vardefs/_override_sugarfield_jjwg_maps_lng_c.php',
    ),
    22 => 
    array (
      'from' => '<basepath>/Extension/modules/Leads/Ext/Vardefs/_override_sugarfield_jjwg_maps_lat_c.php',
      'to' => 'custom/Extension/modules/Leads/Ext/Vardefs/_override_sugarfield_jjwg_maps_lat_c.php',
    ),
    23 => 
    array (
      'from' => '<basepath>/Extension/modules/Leads/Ext/Vardefs/_override_sugarfield_jjwg_maps_geocode_status_c.php',
      'to' => 'custom/Extension/modules/Leads/Ext/Vardefs/_override_sugarfield_jjwg_maps_geocode_status_c.php',
    ),
    24 => 
    array (
      'from' => '<basepath>/Extension/modules/Leads/Ext/Vardefs/_override_sugarfield_jjwg_maps_address_c.php',
      'to' => 'custom/Extension/modules/Leads/Ext/Vardefs/_override_sugarfield_jjwg_maps_address_c.php',
    ),
    25 => 
    array (
      'from' => '<basepath>/Extension/modules/Leads/Ext/Vardefs/_override_sugarfield_lead_source.php',
      'to' => 'custom/Extension/modules/Leads/Ext/Vardefs/_override_sugarfield_lead_source.php',
    ),
    26 => 
    array (
      'from' => '<basepath>/Extension/modules/Leads/Ext/Vardefs/_override_sugarfield_first_name.php',
      'to' => 'custom/Extension/modules/Leads/Ext/Vardefs/_override_sugarfield_first_name.php',
    ),
    27 => 
    array (
      'from' => '<basepath>/Extension/modules/Leads/Ext/Vardefs/_override_sugarfield_last_name.php',
      'to' => 'custom/Extension/modules/Leads/Ext/Vardefs/_override_sugarfield_last_name.php',
    ),
    28 => 
    array (
      'from' => '<basepath>/Extension/modules/Leads/Ext/Vardefs/_override_sugarfield_title.php',
      'to' => 'custom/Extension/modules/Leads/Ext/Vardefs/_override_sugarfield_title.php',
    ),
    29 => 
    array (
      'from' => '<basepath>/Extension/modules/Leads/Ext/Vardefs/_override_sugarfield_lead_source_description.php',
      'to' => 'custom/Extension/modules/Leads/Ext/Vardefs/_override_sugarfield_lead_source_description.php',
    ),
    30 => 
    array (
      'from' => '<basepath>/Extension/modules/Leads/Ext/Vardefs/_override_sugarfield_alt_address_postalcode.php',
      'to' => 'custom/Extension/modules/Leads/Ext/Vardefs/_override_sugarfield_alt_address_postalcode.php',
    ),
    31 => 
    array (
      'from' => '<basepath>/Extension/modules/Leads/Ext/Vardefs/_override_sugarfield_primary_address_postalcode.php',
      'to' => 'custom/Extension/modules/Leads/Ext/Vardefs/_override_sugarfield_primary_address_postalcode.php',
    ),
    32 => 
    array (
      'from' => '<basepath>/Extension/modules/Leads/Ext/Vardefs/_override_sugarfield_linkedin_c.php',
      'to' => 'custom/Extension/modules/Leads/Ext/Vardefs/_override_sugarfield_linkedin_c.php',
    ),
    33 => 
    array (
      'from' => '<basepath>/Extension/modules/Leads/Ext/Vardefs/_override_sugarfield_technology_c.php',
      'to' => 'custom/Extension/modules/Leads/Ext/Vardefs/_override_sugarfield_technology_c.php',
    ),
    34 => 
    array (
      'from' => '<basepath>/Extension/modules/Meetings/Ext/Vardefs/_override_sugarfield_jjwg_maps_lng_c.php',
      'to' => 'custom/Extension/modules/Meetings/Ext/Vardefs/_override_sugarfield_jjwg_maps_lng_c.php',
    ),
    35 => 
    array (
      'from' => '<basepath>/Extension/modules/Meetings/Ext/Vardefs/_override_sugarfield_jjwg_maps_lat_c.php',
      'to' => 'custom/Extension/modules/Meetings/Ext/Vardefs/_override_sugarfield_jjwg_maps_lat_c.php',
    ),
    36 => 
    array (
      'from' => '<basepath>/Extension/modules/Meetings/Ext/Vardefs/_override_sugarfield_jjwg_maps_geocode_status_c.php',
      'to' => 'custom/Extension/modules/Meetings/Ext/Vardefs/_override_sugarfield_jjwg_maps_geocode_status_c.php',
    ),
    37 => 
    array (
      'from' => '<basepath>/Extension/modules/Meetings/Ext/Vardefs/_override_sugarfield_jjwg_maps_address_c.php',
      'to' => 'custom/Extension/modules/Meetings/Ext/Vardefs/_override_sugarfield_jjwg_maps_address_c.php',
    ),
    38 => 
    array (
      'from' => '<basepath>/Extension/modules/Opportunities/Ext/Vardefs/_override_sugarfield_jjwg_maps_lng_c.php',
      'to' => 'custom/Extension/modules/Opportunities/Ext/Vardefs/_override_sugarfield_jjwg_maps_lng_c.php',
    ),
    39 => 
    array (
      'from' => '<basepath>/Extension/modules/Opportunities/Ext/Vardefs/_override_sugarfield_jjwg_maps_lat_c.php',
      'to' => 'custom/Extension/modules/Opportunities/Ext/Vardefs/_override_sugarfield_jjwg_maps_lat_c.php',
    ),
    40 => 
    array (
      'from' => '<basepath>/Extension/modules/Opportunities/Ext/Vardefs/_override_sugarfield_jjwg_maps_geocode_status_c.php',
      'to' => 'custom/Extension/modules/Opportunities/Ext/Vardefs/_override_sugarfield_jjwg_maps_geocode_status_c.php',
    ),
    41 => 
    array (
      'from' => '<basepath>/Extension/modules/Opportunities/Ext/Vardefs/_override_sugarfield_jjwg_maps_address_c.php',
      'to' => 'custom/Extension/modules/Opportunities/Ext/Vardefs/_override_sugarfield_jjwg_maps_address_c.php',
    ),
    42 => 
    array (
      'from' => '<basepath>/Extension/modules/Project/Ext/Vardefs/_override_sugarfield_jjwg_maps_lng_c.php',
      'to' => 'custom/Extension/modules/Project/Ext/Vardefs/_override_sugarfield_jjwg_maps_lng_c.php',
    ),
    43 => 
    array (
      'from' => '<basepath>/Extension/modules/Project/Ext/Vardefs/_override_sugarfield_jjwg_maps_lat_c.php',
      'to' => 'custom/Extension/modules/Project/Ext/Vardefs/_override_sugarfield_jjwg_maps_lat_c.php',
    ),
    44 => 
    array (
      'from' => '<basepath>/Extension/modules/Project/Ext/Vardefs/_override_sugarfield_jjwg_maps_geocode_status_c.php',
      'to' => 'custom/Extension/modules/Project/Ext/Vardefs/_override_sugarfield_jjwg_maps_geocode_status_c.php',
    ),
    45 => 
    array (
      'from' => '<basepath>/Extension/modules/Project/Ext/Vardefs/_override_sugarfield_jjwg_maps_address_c.php',
      'to' => 'custom/Extension/modules/Project/Ext/Vardefs/_override_sugarfield_jjwg_maps_address_c.php',
    ),
    46 => 
    array (
      'from' => '<basepath>/Extension/modules/Prospects/Ext/Vardefs/_override_sugarfield_jjwg_maps_lng_c.php',
      'to' => 'custom/Extension/modules/Prospects/Ext/Vardefs/_override_sugarfield_jjwg_maps_lng_c.php',
    ),
    47 => 
    array (
      'from' => '<basepath>/Extension/modules/Prospects/Ext/Vardefs/_override_sugarfield_jjwg_maps_lat_c.php',
      'to' => 'custom/Extension/modules/Prospects/Ext/Vardefs/_override_sugarfield_jjwg_maps_lat_c.php',
    ),
    48 => 
    array (
      'from' => '<basepath>/Extension/modules/Prospects/Ext/Vardefs/_override_sugarfield_jjwg_maps_geocode_status_c.php',
      'to' => 'custom/Extension/modules/Prospects/Ext/Vardefs/_override_sugarfield_jjwg_maps_geocode_status_c.php',
    ),
    49 => 
    array (
      'from' => '<basepath>/Extension/modules/Prospects/Ext/Vardefs/_override_sugarfield_jjwg_maps_address_c.php',
      'to' => 'custom/Extension/modules/Prospects/Ext/Vardefs/_override_sugarfield_jjwg_maps_address_c.php',
    ),
  ),
);