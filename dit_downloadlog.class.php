<?php
if (!defined('IN_DISCUZ')) {
    exit('Access Denied');
}
class plugin_dit_downloadlog_forum
{
    function attachment_logging()
    {
        global $_G;
        $attachment = explode('|', base64_decode($_G['gp_aid']));
        if ($attach = C::t('forum_attachment')->fetch($attachment[0])) {
            DB::insert('dit_downloadlog', array(
                'uid' => $_G['uid'],
                'username' => addslashes($_G['username']),
                'aid' => $attachment[0],
                'datetime' => TIMESTAMP,
            ), false, false, true);
        }
    }
}
