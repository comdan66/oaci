<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * @author      OA Wu <comdan66@gmail.com>
 * @copyright   Copyright (c) 2017 OA Wu Design
 * @license     http://creativecommons.org/licenses/by-nc/2.0/tw/
 */

$redis['active_server'] = 'default';
$redis['servers'] = array (
    'default' => array (
        'host' => '127.0.0.1',
        'port' => '6379',
        'password' => ''),

    'demo' => array (
        'host' => '127.0.0.1',
        'port' => '6379',
        'password' => ''),
  );
