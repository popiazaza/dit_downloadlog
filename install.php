<?php
if (!defined('IN_DISCUZ')) {
  exit('Access Denied');
}
DB::query("DROP TABLE IF EXISTS `" . DB::table('dit_downloadlog') . "`;");
DB::query("CREATE TABLE IF NOT EXISTS `" . DB::table('dit_downloadlog') . "` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `uid` mediumint(8) unsigned NOT NULL,
  `username` varchar(15) NOT NULL,
  `aid` mediumint(8) unsigned NOT NULL,
  `datetime` int(10) unsigned NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE = MYISAM CHARACTER SET utf8 COLLATE utf8_general_ci;");

$logs = C::t('common_credit_log')->fetch_all_by_operation('BAC');
$luids = array();
foreach ($logs as $log) {
  $luids[$log['uid']] = $log['uid'];
}
$members = C::t('common_member')->fetch_all($luids);
foreach ($logs as $log) {
  DB::query("INSERT INTO `" . DB::table('dit_downloadlog') . "` (`id`, `uid`, `username`, `aid`, `datetime`) VALUES (NULL, '" . $log['uid'] . "', '" . $members[$log['uid']]['username'] . "', '" . $log['relatedid'] . "', '" . $log['dateline'] . "');");
}

$finish = true;
