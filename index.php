<?php

/*
 *---------------------------------------------------------------
 * APPLICATION ENVIRONMENT
 *---------------------------------------------------------------
 *
 * Set the application environment.
 */
define('ENVIRONMENT', isset($_SERVER['CI_ENV']) ? $_SERVER['CI_ENV'] : 'development');

/*
 *---------------------------------------------------------------
 * ERROR REPORTING
 *---------------------------------------------------------------
 *
 * Different environments require different error reporting levels.
 */
switch (ENVIRONMENT) {
    case 'development':
        error_reporting(-1);
        ini_set('display_errors', 1);
        break;

    case 'testing':
    case 'production':
        error_reporting(0);
        ini_set('display_errors', 0);
        break;

    default:
        exit('The application environment is not set correctly.');
}

/*
 *---------------------------------------------------------------
 * SYSTEM FOLDER NAME
 *---------------------------------------------------------------
 */
$system_path = 'system';

/*
 *---------------------------------------------------------------
 * APPLICATION FOLDER NAME
 *---------------------------------------------------------------
 */
$application_folder = 'application';

/*
 *---------------------------------------------------------------
 * VIEW FOLDER NAME
 *---------------------------------------------------------------
 */
$view_folder = '';

/*
 * ---------------------------------------------------------------
 * Resolve the system path for increased reliability
 * ---------------------------------------------------------------
 */

if (defined('STDIN')) {
    chdir(dirname(__FILE__));
}

if (realpath($system_path) !== FALSE) {
    $system_path = realpath($system_path).DIRECTORY_SEPARATOR;
}

// Ensure there's a trailing slash
$system_path = rtrim($system_path, '/').'/';

// Verify the system path is correct
if (!is_dir($system_path)) {
    exit("Your system folder path does not appear to be set correctly.");
}

/*
 *---------------------------------------------------------------
 * Define constants for CodeIgniter's core files
 *---------------------------------------------------------------
 */
define('SELF', pathinfo(__FILE__, PATHINFO_BASENAME));
define('BASEPATH', str_replace('\\', '/', $system_path));
define('FCPATH', str_replace(SELF, '', __FILE__));
define('SYSDIR', basename(BASEPATH));

// Resolve application folder name
if (is_dir($application_folder)) {
    define('APPPATH', $application_folder.'/');
} else {
    exit("Your application folder path does not appear to be set correctly.");
}

// Resolve view folder name
if (!isset($view_folder[0]) && is_dir(APPPATH.'views/')) {
    $view_folder = APPPATH.'views/';
}

define('VIEWPATH', $view_folder.'/');

/*
 *---------------------------------------------------------------
 * LOAD THE BOOTSTRAP FILE
 *---------------------------------------------------------------
 */
// require_once BASEPATH.'core/CodeIgniter.php';
