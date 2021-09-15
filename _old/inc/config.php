<?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/common.php");

$val = $_COOKIE["switchScreen"];

/*=====================================================

	サイト情報

=====================================================*/

//サイトURL統一
if ($_SERVER['HTTPS'] == "on") {
	$PROTOCOL = "https://";
} else {
	$PROTOCOL = "http://";
}
define("CANONICAL", $PROTOCOL . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']);


//サイト名
define("SITE_NAME", "");

//キーワード
define("KEY_WORD", "");

//ディスクリプション
define("DESCRIPTION", "");

//H1文言
define("SEO_WORDS", "");
