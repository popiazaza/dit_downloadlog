<?php
if (!defined('IN_DISCUZ')) {
    exit('Access Denied');
}
if (!$_G['uid']) {
    showmessage('not_loggedin', '', '', array('login' => 1));
}
if (!$_GET['aid']) {
    showmessage('ขออภัย เกิดข้อผิดพลาด');
}
$aid = intval($_GET['aid']);
$attach = C::t('forum_attachment')->fetch($aid);
if (!$attach) {
    showmessage('ขออภัย ไม่พบไฟล์นี้');
}
$log_query = DB::query("SELECT *,COUNT(*) as count,max(datetime) as dateline  FROM `" . DB::table('dit_downloadlog') . "` WHERE `aid`='" . $attach['aid'] . "' GROUP BY `uid`,`aid` ORDER BY `dateline` DESC");
while ($log = DB::fetch($log_query)) {
    $log['dateline'] = date("d/m/Y H:i:s", $log['dateline']);
    $loglist[] = $log;
}
include template('dit_downloadlog:dit_downloadlog');
exit();
