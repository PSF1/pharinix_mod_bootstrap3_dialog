<?php
if (!defined("CMS_VERSION")) { header("HTTP/1.0 404 Not Found"); die(""); }

if (!class_exists("commandIncBS3Dialog")) {
    class commandIncBS3Dialog extends driverCommand {

        public static function runMe(&$params, $debug = true) {
            $path = driverCommand::run('modGetPath', array('name' => 'pharinix_mod_bootstrap3_dialog'));
            echo '<link rel="stylesheet" href="'.CMS_DEFAULT_URL_BASE.$path['path'].'css/bootstrap-dialog.css"/>';
            echo '<script src="'.CMS_DEFAULT_URL_BASE.$path['path'].'js/bootstrap-dialog.js"></script>';
        }

        public static function getHelp() {
            return array(
                "package" => "pharinix_mod_bootstrap3_dialog",
                "description" => __("Print HTML includes to Bootstrap 3 dialog."), 
                "parameters" => array(), 
                "response" => array(),
                "type" => array(
                    "parameters" => array(), 
                    "response" => array(),
                ),
                "echo" => true
            );
        }
        
        public static function getAccess($ignore = "") {
            $me = __FILE__;
            return parent::getAccess($me);
        }
        
        public static function getAccessFlags() {
            return driverUser::PERMISSION_FILE_ALL_EXECUTE;
        }
    }
}
return new commandIncBS3Dialog();