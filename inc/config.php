<?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/common.php");

//$val = $_COOKIE["switchScreen"];
$val = isset($_COOKIE["switchScreen"]) ? $_COOKIE["switchScreen"] : null;

/*=====================================================

	サイト情報

=====================================================*/

//サイトURL統一
//if ($_SERVER['HTTPS'] == "on") {
if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == "on") {
	$PROTOCOL = "https://";
} else {
	$PROTOCOL = "http://";
}
define("CANONICAL", $PROTOCOL . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']);


//サイト名
define("SITE_NAME", "(株)キャタラー/ 静岡県掛川市");

//キーワード
define("KEY_WORD", "自動車触媒,ガソリン触媒,3way触媒,二輪車用触媒,活性炭,キャタラー,自動車用触媒,環境ケミカル,燃料電池用電極触媒,キャパシタ用炭素材,ディーゼル触媒,静岡,掛川");

//ディスクリプション
define("DESCRIPTION", "株式会社キャタラーは四輪自動車触媒を中心に、ディーゼル自動車触媒、二輪自動車触媒を製造しているトヨタグループの会社です。近年、排ガス触媒分野に加え、燃料電池用電極触媒やキャパシタ用炭素材、活性炭など先進技術分野にも力を入れています。");

//H1文言
define("SEO_WORDS", "");
