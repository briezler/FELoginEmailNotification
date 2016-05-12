<?php

if (!defined ('TYPO3_MODE'))
    die ('Access denied.');
//hook FE login
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['felogin']['login_confirmed']['send_notification'] = 'CNETInc\feloginemailnotification\Hooks\LoginNotification->sendNotification';