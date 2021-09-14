<?php

/*=====================================================

	ナビゲーション用関数

=====================================================*/

function lnav($y, $n = false){
	if( !$n && $y ){
		echo ' class="here"';
	} else {
		echo '';
	}
}

function nav($y, $n = false){
	if( !$n && $y ){
		echo 'o';
	} else {
		echo 'n';
	}
}

function ck(){
	$num = func_num_args();
	$path = $_SERVER['SCRIPT_NAME'];

	for( $i = 0; $i < $num; $i++ ){
		$str = func_get_arg($i);

		if( $str == "/" && $path == "/index.php" ){
			return true;
		}

		if( $str != "/" && strpos($path, $str) !== FALSE ){
			return true;
		}

	}
	return false;
}

//
//　処理：ディレクトリから指定したディレクトリのみを取り出す
//　引数：$directory - 取得したいディレクトリの階層
//　　　　※例：/abc/def/index.php にて def のみ取得したい場合、$directory = 2 を指定
//　戻値：取り出したディレクトリ名（/なし）
//
function fnc_get_directory($directory)
{
	$name = preg_split("/\//", $_SERVER["PHP_SELF"]);
	return $name[$directory];
}

?>

