<?php
/*
                   _ooOoo_
                  o8888888o
                  88" . "88
                  (| -_- |)
                  O\  =  /O
               ____/`---'\____
             .'  \\|     |//  `.
            /  \\|||  :  |||//  \
           /  _||||| -:- |||||-  \
           |   | \\\  -  /// |   |
           | \_|  ''\---/''  |   |
           \  .-\__  `-`  ___/-. /
         ___`. .'  /--.--\  `. . __
      ."" '<  `.___\_<|>_/___.'  >'"".
     | | :  `- \`.;`\ _ /`;.`/ - ` : | |
     \  \ `-.   \_ __\ /__ _/   .-` /  /
======`-.____`-.___\_____/___.-`____.-'======
                   `=---='
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
*/
/**
 * Created by : PhpStorm
 * Date: 2019/10/26
 * Time: 22:53
 * User: 李光春
 */

require_once './vendor/autoload.php';

$qywx = new \liguangchun\notice\QyWeixin();
$ding = new \liguangchun\notice\DingDing();

// 钉钉机器人
$ding->setConfig([
    'access_token' => 'xxxxxxxxxxxxxxxxxxxx'
]);
$res = $ding->text('测试测试');
if (empty($res)) var_dump($ding->getError());
var_dump($res);

// 企业微信机器人
$qywx->setConfig([
    'key' => 'xxx-xx-xx-xx-xxx'
]);
$res = $qywx->text('测试测试');
if (empty($res)) var_dump($qywx->getError());
var_dump($res);