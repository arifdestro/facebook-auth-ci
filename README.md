# facebook-auth-ci

Tools : 
  1. Codeigniter v3
  2. Xampp php v7
  
You need :
  1. Facebook App id & Facebook App Secret : https://developers.facebook.com/ 

## Cara Penggunaan
1. Run your XAMPP or something else
2. Setting your config autoload with library('database','session') and helper('url') go to config.php and set base_url to http://localhost/(your directory name)
3. you can use .htaccess for simple url
4. Create new database from phpmyadmin dan import database **DATABASE** in your directory, like `oauth.sql`
5. Setting your config file on your ci folder `application/config/database.php` :

``` php
defined('BASEPATH') OR exit('No direct script access allowed');
$active_group = 'default';
$query_builder = TRUE;

$db['default'] = array(
    'dsn'   => '',
    'hostname' => 'localhost',
    'username' => 'root',
    'password' => '(empty this if you using xampp)',
    'database' => '(your database name)',
    'dbdriver' => 'mysqli',
    'dbprefix' => '',
    'pconnect' => FALSE,
    'db_debug' => (ENVIRONMENT !== 'production'),
    'cache_on' => FALSE,
    'cachedir' => '',
    'char_set' => 'utf8',
    'dbcollat' => 'utf8_general_ci',
    'swap_pre' => '',
    'encrypt' => FALSE,
    'compress' => FALSE,
    'stricton' => FALSE,
    'failover' => array(),
    'save_queries' => TRUE
);
```
Note : This tutorial if you using xampp
