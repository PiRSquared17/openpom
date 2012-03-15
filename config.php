<?php
/*
  OpenPOM
 
  Copyright 2010, Exosec
  Licensed under GPL Version 2.
  http://www.gnu.org/licenses/
*/

/* NAGIOS or ICINGA */
$BACKEND            = "nagios";
//$BACKEND          = "icinga";

/* SQL VARIABLE */
$SQL_HOST           = "127.0.0.1";
$SQL_USER           = "openpom";
$SQL_PASSWD         = "my_password";
$SQL_DB             = "ndoutils";

$REFRESHTIME        = 60;   /* PAGE REFRESH TIME */
$LINE_BY_PAGE       = 100;  /* MAX LINE PER PAGE AND LIMIT SQL REQUEST */
$MAXLEN_STINFO      = 50;   /* MAX CHARACTERS ON STINFO COLUMN  */
$MAXLEN_HOST        = 30;   /* MAX CHARACTERS ON HOST COLUMN */
$MAXLEN_SVC         = 30;   /* MAX CHARACTERS ON SVC COLUMN */
$MAXLEN_GROUPS      = 40;   /* MAX CHARACTERS ON GROUPS COLUMN */
$FRAME              = 0;    /* SHOW THE COLOR FRAME AROUND THE PAGE */
$FONT_SIZE          = 11;   /* FONT SIZE FOR ALERT */
$POPIN              = 1;    /* SHOW POPIN ON ROW MOUSE OVER */

//$LEVEL              = 1; /* SHOW CRITICAL ONLY */
$LEVEL                = 2; /* LEVEL 2 SHOW CRITICAL WARNING AND UNKNOWN */
//$LEVEL              = 3; /* LEVEL 3 SHOW CRITICAL WARNING UNKNOWN AND SOFT */
//$LEVEL              = 4; /* SHOW LEVEL 4 AND ACK AND DOWNTIME */
//$LEVEL              = 5; /* SHOW LEVEL 5 AND OUTAGE */
//$LEVEL              = 6; /* SHOW LEVEL 6 AND SVC FOR ACK/DOWNTIME HOST */
//$LEVEL              = 7; /* LEVEL 7 SHOW ALL */
//$LEVEL              = 8; /* LEVEL 8 SHOW ONLY ACKNOWLEDGE */
//$LEVEL              = 9; /* LEVEL 9 SHOW ONLY DOWNTIME */
//$LEVEL              = 10; /* LEVEL 10 SHOW ONLY DISABLE NOTIFICATION */
//$LEVEL              = 11; /* LEVEL 11 SHOW ONLY DISABLE CHECK */
//$LEVEL              = 12; /* LEVEL 12 SHOW ONLY CRITICAL HOST AND SERVICE SOFT AND HARD */
//$LEVEL              = 12; /* LEVEL 12 SHOW ONLY WARNING SERVICE SOFT AND HARD */
//$LEVEL              = 13; /* LEVEL 13 SHOW ONLY UNKNOWN SERVICE SOFT AND HARD */
//$LEVEL              = 14; /* LEVEL 14 SHOW ONLY OK */
$MAXLEVEL             = 15;

/* TABLE ALERT COLUMNS ORDER */
$COLS               = array(
"checkbox"          => 'none',
"flag"              => 'COEF, DURATION',
"duration"          => 'DURATION',
"machine"           => 'MACHINE_NAME',
"IP"                => 'ADDRESS',
"service"           => 'SERVICES' ,
"stinfo"            => 'OUTPUT',
"group"             => 'GROUPE',
"last"              => 'LASTCHECK',
);

/* Do not display this columns by default */
$NO_COLS            = array(
"IP",
"group", 
);

/* 
  ALERT COLOR  you must define the new color in style.css (tr.color) 
  red yellow orange green black
*/
$CRITICAL           = "red";
$WARNING            = "yellow";
$OK                 = "green";
$UNKNOWN            = "orange";
$OTHER              = "white";
$TRACK_ERROR        = "blue";
$TRACK_OK           = "bluegreen";

/*
  set default lang (supported lang are en, fr and de)                                     
  default lang is "english" or 
  try openpom/index.php?lang=xx where xx is the country abreviation code
*/
$MYLANG             = "en"; 

/* OTHER VARIABLE */
$VERSION            = "1.5.0";
$CODENAME           = "OpenPOM";
$ENCODING           = "ISO-8859-1"; 

/* NAGIOS AND ICINGA VARIABLES */
/* escapeshellarg() is called on each element of $*_PARMS arrays */
$EXEC_CMD           = "./send-order";
$EXEC_PARAM         = array();
//$SUDO_EXEC        = "/usr/bin/sudo";
//$SUDO_PARAM         = array('-u', 'admin');
$CMD_FILE           = "/usr/local/nagios/var/rw/nagios.cmd";
//$CMD_FILE         = "/var/lib/icinga/rw/icinga.cmd";
$BASE_URL           = "" ;
$LINK               = "/" . $BACKEND . "/cgi-bin/extinfo.cgi";

/* SEARCH FILTERING */
$QUICKSEARCH = 1 ;  //disabled direct search on click

/* SHOW GRPAH FROM EXTERNAL SOURCE
 *  
 * Default images are generated by Nagios' trends.cgi 
 * Image at URI defined in $GRAPH_HOST will be displayed for hosts
 * Image at URI defined in $GRAPH_SVC will be displayed for services
 * 
 * Keywords:
 * @@define_host@@ will be replaced by the selected host name
 * @@define_service@@ will be replaced by the selected service name
 */
$GRAPH_HOST = '/' . $BACKEND . '/cgi-bin/trends.cgi' 
  . '?createimage'
  . '&backtrack=4'
  . '&zoom=4'
  . '&host=@@define_host@@';

$GRAPH_SVC = '/' . $BACKEND . '/cgi-bin/trends.cgi'
  . '?createimage'
  . '&backtrack=4'
  . '&zoom=4'
  . '&host=@@define_host@@'
  . '&service=@@define_service@@';

/* POPUP CONTENT WHEN CLICKING ON THE GRAPH ICON
 * 
 * Default is to use the graph.php provided with OpenPOM which display the
 * image defined in $GRAPH_HOST or $GRAPH_SVC (respectively for an host or
 * a service) and a very basic period selector.
 *  
 * Periods available are defined in the array $GRAPH_POPUP_PERIODS where each
 * element is an array of 2 elements defining the start and end value of the
 * period. The start/end values must be valid string for passing to PHP's  
 * strtotime() function.
 * 
 * See PHP documentation for more information:
 * http://www.php.net/manual/en/datetime.formats.php
 * 
 * The start/end timestamps are passed to the URI defined in $GRAPH_HOST and
 * $GRAPH_SVC. The name of the parameters used to pass them are defined 
 * repectively in $GRAPH_POPUP_PARAM_START and $GRAPH_POPUP_PARAM_END. 
 */
$GRAPH_POPUP_HOST = 'graph.php?host=@@define_host@@';
$GRAPH_POPUP_SVC = 'graph.php?host=@@define_host@@&service=@@define_service@@';
$GRAPH_POPUP_WIDTH = 800;
$GRAPH_POPUP_HEIGHT = 400;

$GRAPH_POPUP_PERIODS = array(
  'Day'   => array('-1 day',    'now'), 
  'Week'  => array('-1 week',   'now'), 
  'Month' => array('-1 month',  'now'), 
  'Year'  => array('-1 year',   'now'));

$GRAPH_POPUP_DEFAULT = 'Week';
$GRAPH_POPUP_PARAM_START = 't1';
$GRAPH_POPUP_PARAM_END = 't2';


/* ILLEGAL_CHAR IN POST / GET DATA 
 * 
 * the following characters should always be included:
 * - semicolon ";" field separator used by Nagios in commands 
 * - tild "~" special comment prefix used for disable and track 
 */
$ILLEGAL_CHAR       = '`~$^<>';


/* POPIN WIDTH RESTRICTION */
$POPIN_INITIAL_WIDTH = 500;
$POPIN_FIT_TO_GRAPH_WIDTH = true;

/* POPUP STATUS SIZE */
$STATUS_POPUP_WIDTH  = 600 ;
$STATUS_POPUP_HEIGHT = 600 ;

/* ELEMENT SHOWED ON STATUS POPIN 0 => DO NOT DISPLAY*/
$SHOWSTATUSGRAPH   = 1 ; /*SHOW GRAPH*/
$SHOWSTATUSALL     = 1 ; /*SHOW ELEMENT*/
$SHOWSTATUSLIMIT   = 5 ; /*SHOW NB ELEMENT*/

/* 0 => HIDE , 1 => HIDE OR SHOWED (SEE LIMIT), 2 => ALWAYS SHOWED */
$STATUSPOPIN = array (
  'curstat'      => 1,
  'outputstatus' => 1,
  'checkstatus'  => 1,
  'lastok'       => 1,
  'nextcheck'    => 1,
  'checkinfo'    => 1,
  'checktime'    => 1,
  'laststatus'   => 1,
  'flapping'     => 1,
  'groupstatus'  => 1,
  'notifystatus' => 1,
  'ackcur'       => 2,
  'downcur'      => 2,
  'notifycur'    => 2,
  'disacur'      => 2,
  'commentcur'   => 2,
  'history'      => 2,
) ;

/* POPUP HISTORY SIZE */
$HISTORY_POPUP_WIDTH  = 600 ;
$HISTORY_POPUP_HEIGHT = 700 ;

/* ELEMENT SHOWED IN HISTORY AND ORDER 0 => DO NOT DISPLAY */
$HISTORY = array(
'ack'    => 1,
'down'   => 1,
'com'    => 1,
'notify' => 1,
'state'  => 1,
'flap'   => 1,
) ;

/* ACKNOWLEDGEMENT */
$EXT_CMD['ack']['host'][0]      = array(
'ACKNOWLEDGE_HOST_PROBLEM',
'$host',
'1;0;0',
'$user',
'$comment');

$EXT_CMD['ack']['svc'][0]       = array(
'ACKNOWLEDGE_SVC_PROBLEM',
'$host',
'$svc',
'1;0;0',
'$user',
'$comment');

/* DOWNTIME */
$EXT_CMD['down']['host'][0]     = array(
'SCHEDULE_HOST_DOWNTIME',
'$host',
'$start_time',
'$end_time',
'1;0',
'7200',
'$user',
'$comment');

$EXT_CMD['down']['svc'][0]      = array(
'SCHEDULE_SVC_DOWNTIME',
'$host',
'$svc',
'$start_time',
'$end_time',
'1;0',
'7200',
'$user',
'$comment');

/* RECHECK */
$EXT_CMD['recheck']['host'][0]  = array(
'SCHEDULE_FORCED_HOST_CHECK',
'$host',
'$next',
); 
$EXT_CMD['recheck']['host'][1]  = array(
'SCHEDULE_FORCED_HOST_SVC_CHECKS',
'$host',
'$next',
); 
$EXT_CMD['recheck']['svc'][0]   = array(
'SCHEDULE_FORCED_SVC_CHECK',
'$host',
'$svc',
'$next',
);

/* RESET STATE */
$EXT_CMD['reset']['host'][0]    = array(
'DEL_ALL_HOST_COMMENTS',
'$host');

$EXT_CMD['reset']['host'][1]    = array(
'REMOVE_HOST_ACKNOWLEDGEMENT',
'$host');

$EXT_CMD['reset']['host'][2]    = array(
'ENABLE_HOST_NOTIFICATIONS',
'$host');

$EXT_CMD['reset']['host'][3]    = array(
'DEL_HOST_DOWNTIME',
'$downtime_id');

$EXT_CMD['reset']['host'][4]  = array(
'ENABLE_HOST_CHECK',
'$host');

$EXT_CMD['reset']['svc'][0]    = array(
'DEL_ALL_SVC_COMMENTS',
'$host',
'$svc');

$EXT_CMD['reset']['svc'][1]     = array(
'REMOVE_SVC_ACKNOWLEDGEMENT',
'$host',
'$svc');

$EXT_CMD['reset']['svc'][2]     = array(
'ENABLE_SVC_NOTIFICATIONS',
'$host',
'$svc');

$EXT_CMD['reset']['svc'][3]    = array(
'DEL_SVC_DOWNTIME',
'$downtime_id');

$EXT_CMD['reset']['svc'][4]  = array(
'ENABLE_SVC_CHECK',
'$host',
'$svc');

/* DISABLE NOTIFICATION */
$EXT_CMD['disable']['host'][0]  = array(
'DISABLE_HOST_NOTIFICATIONS',
'$host');

$EXT_CMD['disable']['host'][1]  = array(
'ADD_HOST_COMMENT',
'$host',
'1',
'$user',
'~disable:$comment');

$EXT_CMD['disable']['svc'][0]   = array(
'DISABLE_SVC_NOTIFICATIONS',
'$host',
'$svc');

$EXT_CMD['disable']['svc'][1]  = array(
'ADD_SVC_COMMENT',
'$host',
'$svc',
'1',
'$user',
'~disable:$comment');

/* ADD COMMENT */
$EXT_CMD['comment_persistent']['host'][0]  = array(
'ADD_HOST_COMMENT',
'$host',
'1',
'$user',
'$comment');

$EXT_CMD['comment_persistent']['svc'][0]  = array(
'ADD_SVC_COMMENT',
'$host',
'$svc',
'1',
'$user',
'$comment');

/* DISABLE CHECK */
$EXT_CMD['disablecheck']['host'][0]  = array(
'DISABLE_HOST_CHECK',
'$host');

$EXT_CMD['disablecheck']['host'][1]  = array(
'ADD_HOST_COMMENT',
'$host',
'1',
'$user',
'~disablecheck:$comment');

$EXT_CMD['disablecheck']['svc'][0]   = array(
'DISABLE_SVC_CHECK',
'$host',
'$svc');

$EXT_CMD['disablecheck']['svc'][1]  = array(
'ADD_SVC_COMMENT',
'$host',
'$svc',
'1',
'$user',
'~disablecheck:$comment');

/* ENABLE GLOBAL NOTIFICATIONS */
$EXT_CMD['ena_notif']['host'][0]  = array(
'ENABLE_NOTIFICATIONS');

/* DISABLE GLOBAL NOTIFICATIONS */
$EXT_CMD['disa_notif']['host'][0]  = array(
'DISABLE_NOTIFICATIONS');

/* TRACK ENTRY */
$EXT_CMD['track']['host'][0]  = array(
'ADD_HOST_COMMENT',
'$host',
'1',
'$user',
'~track:This host is beeing tracked');

$EXT_CMD['track']['svc'][0]  = array(
'ADD_SVC_COMMENT',
'$host',
'$svc',
'1',
'$user',
'~track:This service is beeing tracked');

?>
