<?php
if (!defined('IN_DISCUZ')) {
    exit('Access Denied');
}
DB::query("DROP TABLE IF EXISTS `" . DB::table('dit_downloadlog') . "`;");
$finish = true;
