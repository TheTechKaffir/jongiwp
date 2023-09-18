<?php 
/*
 * Plugin Name:       Jongi Contact Form
 * Plugin URI:        https://jongibrandz.co.za/plugins/jongi-contact-form/
 * Description:       Simple display of Contact Forms in the Frontend, including record listing in the WP Admin Portal.
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Jongi - The Tech Kaffir
 * Author URI:        https://jongimbodla.africa/
 * Text Domain:       jongi-contact-form
 */

if(!defined('ABSPATH'))
{
    die("Ndikubhaqile uzam'ukungena ngondlela mnyama!!");
}
// Check the (possible) existence of Main Plugin class (JongiContactForm) so that we do not have more than one instances of the same class loading
if(!class_exists('JongiContactForm'))
{
    define('JCF_PLUGIN_PATH',plugin_dir_path(__FILE__));// define a constant to replace the plugin_dir_path(__FILE__) function, in subsequent tasks

    // Below we encapsulate our plugin's logic, in a class, so there may be no conflicts with any other plugin
    class JongiContactForm
    {
        public function __construct()
        {
            require_once(JCF_PLUGIN_PATH . '/vendor/autoload.php');// now we have our carbon fields library installed in our plugin (check the composer.json file)
        }

        public function initialize()
        {
            include_once JCF_PLUGIN_PATH . 'includes/utilities.php';
            include_once JCF_PLUGIN_PATH . 'includes/options-page.php';
            include_once JCF_PLUGIN_PATH . 'includes/contact-form.php';
        }
        
    }

    $JongiContactForm = new JongiContactForm;
    $JongiContactForm->initialize(); // On loading of the constructor, the initialize function will be initialized and the code inside this function will run.
}

/** TEMP NOTES - To cut on completion of the project */
/**
 * Typically after instantiating the class (JongiContactForm), something that comes to mind is the options menu. Therefore 'WP Options API' becomes the next step but its daunting and confusing, one might opt for Advanced Custom Fields which is a Pro plugin, but in order for us to have everything shipped with our plugin in one bundle, we will use the free PHP WP Carbon Fields library, which you can install in your plugin, which will also give you the same fucntionality of the ACF, if bot even better. LINK https://docs.carbonfields.net/quickstart.html
 * 
 * Now that we have our carbon fields library installed in our plugin, we nay go ahead and use it to create the 'Options Menu'. 
 * But because we don't wanna have everything inside the constructor method, lets create a new function and name it 'initialize'. 
 * 
 * Let us further make it clean by creating a utilities.php file inside a folder called 'includes' and include it once inside the 'initialize' method.
 * 
 */

