# PHP-SESSION-TEST

From http://php.net/manual/pt_BR/function.session-id.php

 ohcc at 163 dot com
 
8 months ago

When session.use_strict_mode is set to 1 or true, you cannot use session_id($sid) to set the session id for the current session.
<?php
    ini_set('session.use_strict_mode', 1);
    $sid = md5('wuxiancheng.cn');
    session_id($sid);
    session_start();
    var_dump(session_id() === $sid);// always false
?>

with

session.use_strict_mode = 1

and

Changing php.ini session.sid_length

from

session.sid_length = 26

to

session.sid_length = 32

and then get true on var_dump(session_id() === $sid);// always false
