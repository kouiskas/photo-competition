<?php
/* 
 	Copyright (C) 2007-2008 Gilles Dubuc.
 
 	This file is part of photographycomp.com.
*/

$LOG_LEVEL["TRACE"] = 0;
$LOG_LEVEL["DEBUG"] = 1;
$LOG_LEVEL["INFO"] = 2;
$LOG_LEVEL["ERROR"] = 3;
$LOG_LEVEL["CRITICAL"] = 4;

$STYLING_PATH = $APP_LOCAL_PATH."/styling/";
$FBJS_PATH = $APP_LOCAL_PATH."/fbjs/";
$AJAX_PATH = $APP_REAL_PATH."ajax/";

$PAGE['COMPETITIONS'] = $APP_PATH."competitions.php";
$PAGE_CODE['COMPETITIONS'] = 0;
$PAGE['VOTE'] = $APP_PATH."vote.php";
$PAGE_CODE['VOTE'] = 1;
$PAGE['WINNERS'] = $APP_PATH."winners.php";
$PAGE_CODE['WINNERS'] = 2;
$PAGE['TOPICS'] = $APP_PATH."topics.php";
$PAGE_CODE['TOPICS'] = 3;
$PAGE['JAR'] = $APP_PATH."jar.php";
$PAGE_CODE['JAR'] = 4;
$PAGE['YOUR_SUBMISSIONS'] = $APP_PATH."yoursubmissions.php";
$PAGE_CODE['YOUR_SUBMISSIONS'] = 5;
$PAGE['INVITE'] = $APP_PATH."invite.php";
$PAGE_CODE['INVITE'] = 6;
$PAGE['CHAT'] = $APP_PATH."chat.php";
$PAGE_CODE['CHAT'] = 7;
$PAGE['COOL_APPS'] = $APP_PATH."coolapps.php";
$PAGE_CODE['COOL_APPS'] = 8;
$PAGE['COMPETITIONS2'] = $APP_PATH."competitions2.php";
$PAGE_REAL['COMPETITIONS2'] = $APP_REAL_PATH."competitions2.php";
$PAGE_CODE['COMPETITIONS2'] = 9;
$PAGE['USERS'] = $APP_PATH."users.php";
$PAGE_CODE['USERS'] = 10;
$PAGE['FAQ'] = $APP_PATH."faq.php";
$PAGE_CODE['FAQ'] = 11;

$PAGE['BANNED'] = $APP_REAL_PATH."banned.php";

$PAGE['ADBRITE'] = $APP_REAL_PATH."adbrite.php";

$PAGE['INDEX'] = $PAGE['COMPETITIONS2'];

$STYLING["PICTURES"] = $STYLING_PATH."pictures.inc.php";
$STYLING["TEXT"] = $STYLING_PATH."text.inc.php";
$STYLING["TOPMENU"] = $STYLING_PATH."topmenu.inc.php";
$STYLING["TOPICS"] = $STYLING_PATH."topics.inc.php";
$STYLING["COMPETITIONS"] = $STYLING_PATH."competitions.inc.php";
$STYLING["ALBUMS"] = $STYLING_PATH."albums.inc.php";
$STYLING["PICTURE"] = $STYLING_PATH."picture.inc.php";
$STYLING["WALL"] = $STYLING_PATH."wall.inc.php";
$STYLING["VOTE"] = $STYLING_PATH."vote.inc.php";

$FBJS["TOPICS"] = $FBJS_PATH."topics.inc.php";
$FBJS["PICTURES"] = $FBJS_PATH."pictures.inc.php";
$FBJS["PICTURES2"] = $FBJS_PATH."pictures2.inc.php";
$FBJS["STARS"] = $FBJS_PATH."stars.inc.php";

$TABLE["USER"] = "user";
$TABLE["TOPIC"] = "topic";
$TABLE["TOPIC_VOTE"] = "topicvote";
$TABLE["COMPETITION"] = "competition";
$TABLE["PICTURE"] = "picture";
$TABLE["PICTURE_VOTE"] = "picturevote";
$TABLE["WALL"] = "wall";

$COLUMN["USER_ID"] = "user_id";
$COLUMN_TYPE["USER_ID"] = "BIGINT";
$COLUMN_TYPE_ATTRIBUTES["USER_ID"] = "UNSIGNED NOT NULL";

$COLUMN["ANON_ID"] = "anon_id";
$COLUMN_TYPE["ANON_ID"] = "INT";
$COLUMN_TYPE_ATTRIBUTES["ANON_ID"] = "UNSIGNED NOT NULL";

$COLUMN["SESSION_KEY"] = "session_key";
$COLUMN_TYPE["SESSION_KEY"] = "VARCHAR(80)";
$COLUMN_TYPE_ATTRIBUTES["SESSION_KEY"] = "NOT NULL";

$COLUMN["TOPIC_ID"] = "topic_id";
$COLUMN_TYPE["TOPIC_ID"] = "INT";
$COLUMN_TYPE_ATTRIBUTES["TOPIC_ID"] = "UNSIGNED NOT NULL";

$COLUMN["TITLE"] = "title";
$COLUMN_TYPE["TITLE"] = "VARCHAR(80)";
$COLUMN_TYPE_ATTRIBUTES["TITLE"] = "NOT NULL";

$COLUMN["DESCRIPTION"] = "description";
$COLUMN_TYPE["DESCRIPTION"] = "VARCHAR(200)";
$COLUMN_TYPE_ATTRIBUTES["DESCRIPTION"] = "";

$COLUMN["VALUE"] = "value";
$COLUMN_TYPE["VALUE"] = "INT";
$COLUMN_TYPE_ATTRIBUTES["VALUE"] = "NOT NULL";

$COLUMN["STATUS"] = "status";
$COLUMN_TYPE["STATUS"] = "TINYINT";
$COLUMN_TYPE_ATTRIBUTES["STATUS"] = "UNSIGNED NOT NULL";

$COLUMN["START_TIME"] = "start_time";
$COLUMN_TYPE["START_TIME"] = "TIMESTAMP";
$COLUMN_TYPE_ATTRIBUTES["START_TIME"] = "NOT NULL DEFAULT CURRENT_TIMESTAMP";

$COLUMN["WINNER_USER_ID"] = "winner_user_id";
$COLUMN_TYPE["WINNER_USER_ID"] = $COLUMN_TYPE["USER_ID"];
$COLUMN_TYPE_ATTRIBUTES["WINNER_USER_ID"] = "UNSIGNED";

$COLUMN["VOTER_ID"] = "voter_id";
$COLUMN_TYPE["VOTER_ID"] = $COLUMN_TYPE["USER_ID"];
$COLUMN_TYPE_ATTRIBUTES["VOTER_ID"] = $COLUMN_TYPE_ATTRIBUTES["USER_ID"];

$COLUMN["PICTURE_ID"] = "picture_id";
$COLUMN_TYPE["PICTURE_ID"] = "VARCHAR(50)";
$COLUMN_TYPE_ATTRIBUTES["PICTURE_ID"] = "UNSIGNED NOT NULL";

$COLUMN["WINNER_PICTURE_ID"] = "winner_picture_id";
$COLUMN_TYPE["WINNER_PICTURE_ID"] = $COLUMN_TYPE["PICTURE_ID"];
$COLUMN_TYPE_ATTRIBUTES["WINNER_PICTURE_ID"] = "UNSIGNED";

$COLUMN["FLAGGED"] = "flagged";
$COLUMN_TYPE["FLAGGED"] = "INT";
$COLUMN_TYPE_ATTRIBUTES["FLAGGED"] = "UNSIGNED";

$COLUMN["COMMENTS_ALLOWED"] = "comments_allowed";
$COLUMN_TYPE["COMMENTS_ALLOWED"] = "BOOL";
$COLUMN_TYPE_ATTRIBUTES["COMMENTS_ALLOWED"] = "";

$COLUMN["POST_TIME"] = "post_time";
$COLUMN_TYPE["POST_TIME"] = "TIMESTAMP";
$COLUMN_TYPE_ATTRIBUTES["POST_TIME"] = "NOT NULL DEFAULT CURRENT_TIMESTAMP";

$COLUMN["TEXT"] = "text";
$COLUMN_TYPE["TEXT"] = "VARCHAR(2000)";
$COLUMN_TYPE_ATTRIBUTES["TEXT"] = "";

$STATUS["VOTING"] = 0;
$STATUS["OPEN"] = 1;
$STATUS["CLOSED"] = 2;
$STATUS["ACTIVE"] = 0;
$STATUS["DELETED"] = 3;
$STATUS["FLAGGED"] = 4;
$STATUS["BANNED"] = 5;

?>