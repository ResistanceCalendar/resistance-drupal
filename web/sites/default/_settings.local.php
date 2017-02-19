<?php

/**
 * Load services definition file.
 */
$settings['container_yamls'][] = __DIR__ . '/services.yml';

/**
 * Include the Pantheon-specific settings file.
 *
 * n.b. The settings.pantheon.php file makes some changes
 *      that affect all envrionments that this site
 *      exists in.  Always include this file, even in
 *      a local development environment, to ensure that
 *      the site settings remain consistent.
 */
include __DIR__ . "/settings.pantheon.php";

/**
 * Place the config directory outside of the Drupal root.
 */
$config_directories = array(
  CONFIG_SYNC_DIRECTORY => dirname(DRUPAL_ROOT) . '/config',
);

/**
 * remove the underscore from this file
 * copy and paste info here from settings.php
 * on your local install
 * leave the rest of this file alone
 */

$settings['install_profile'] = 'standard';
$databases['default']['default'] = array (
  'database' => 'database_name',
  'username' => 'database_user',
  'password' => 'database_password',
  'prefix' => '',
  'host' => 'localhost',
  'port' => '3306',
  'namespace' => 'Drupal\\Core\\Database\\Driver\\mysql',
  'driver' => 'mysql',
);

/**
 *
 * leave the line below in place
 *
 */

$settings['hash_salt'] = '3NZ0NBxGZu_-9lPqIqvnomTiIqtpFRNQK30ZeFMcBSO77J_FnfTwX62GE4zof_J9e9ba9K3n1w';

