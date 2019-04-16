<?php
/**
 * @package     Basic OpenCart AutoComplete for PHPStorm
 * @author      Vitor Reis - Dev5™
 */

# Define [config.php]
define('DIR_OPENCART',      '{opencart root}/');
define('HTTP_SERVER',       '{protocol}://yoursite/{admin/}');
define('HTTP_CATALOG',      '{protocol}://yoursite/');
define('HTTPS_SERVER',      '{protocol}://yoursite/{admin/}');
define('HTTPS_CATALOG',     '{protocol}://yoursite/');
define('DIR_APPLICATION',   DIR_OPENCART . '{admin|catalog}/');
define('DIR_SYSTEM',        DIR_OPENCART . 'system/');
define('DIR_IMAGE',         DIR_OPENCART . 'image/');
define('DIR_STORAGE',       DIR_SYSTEM . 'storage/');
define('DIR_CATALOG',       DIR_OPENCART . 'catalog/');
define('DIR_LANGUAGE',      DIR_APPLICATION . 'language/');
define('DIR_TEMPLATE',      DIR_APPLICATION . 'view/template/');
define('DIR_CONFIG',        DIR_SYSTEM . 'config/');
define('DIR_CACHE',         DIR_STORAGE . 'cache/');
define('DIR_DOWNLOAD',      DIR_STORAGE . 'download/');
define('DIR_LOGS',          DIR_STORAGE . 'logs/');
define('DIR_MODIFICATION',  DIR_STORAGE . 'modification/');
define('DIR_SESSION',       DIR_STORAGE . 'session/');
define('DIR_UPLOAD',        DIR_STORAGE . 'upload/');
define('DB_DRIVER',         '{db drive}');
define('DB_HOSTNAME',       '{db hostname}');
define('DB_USERNAME',       '{db username}');
define('DB_PASSWORD',       '{db password}');
define('DB_DATABASE',       '{db database}');
define('DB_PORT',           '{db port}');
define('DB_PREFIX',         '{db prefix}');
define('OPENCART_SERVER',   'https://www.opencart.com/');

# Engine
include_once 'engine/action.php';
include_once 'engine/controller.php';
include_once 'engine/event.php';
include_once 'engine/router.php';
include_once 'engine/loader.php';
include_once 'engine/model.php';
include_once 'engine/registry.php';
include_once 'engine/proxy.php';

/**
 * Class Dev5™ OpenCart AutoComplete for PHPStorm All versions
 */
abstract class OpenCart {
    public function __construct() {

        function library($class) { $file = 'library/' . str_replace('\\', '/', strtolower($class)) . '.php'; if (is_file($file)) { include_once($file); return true; } else return false; }
        spl_autoload_register('library');
        spl_autoload_extensions('.php');

        # Library
        $this->config = new Config();
        $this->log = new Log(null);
        $this->event = new Event(null);
        $this->load = new Loader(null);
        $this->request = new Request();
        $this->response = new Response();
        $this->db = new Db(null);
        $this->session = new Session(null);
        $this->cache = new Cache(null);
        $this->language = new Language(null);
        $this->document = new Document(null);
        $this->url = new Url(null);

        # Library Cart
        $this->cart = new \Cart\Cart(null);
        $this->currency = new \Cart\Currency(null);
        $this->customer = new \Cart\Customer(null);
        $this->length = new \Cart\Length(null);
        $this->tax = new \Cart\Tax(null);
        $this->user = new \Cart\User(null);
        $this->weight = new \Cart\Weight(null);
    }
}