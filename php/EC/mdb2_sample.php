<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
</head>
<body>
<?php

	// MDB2 ライブラリの読み込み
	require_once("MDB2.php");

	// エラーが発生した時の処理を記述します。
	PEAR::setErrorHandling( PEAR_ERROR_CALLBACK, 'handleError' );
	function handleError( $error )
	{
	    die('エラーが発生しました。管理者までお問い合わせ下さい。');
	}

	// データベースに接続します。
	$dsn = array(
		"phptype"  => "mysql",
		"username" => "root",
		"password" => "",
		"hostspec" => "localhost",
		"database" => "ec",
	);
	$mdb2 =& MDB2::connect( $dsn );

	// 文字コード指定。
	$mdb2->setCharset( "utf8" );

	// SQL文を実行します。
	$stmt = $mdb2->prepare( "SELECT * FROM m_items WHERE category = ? or category = ? " );
	$res = $stmt->execute( array( "1", "3" ) );

?>
<table border="1">
<?php 
	// 検索結果の数だけループし、画面に表示します。
	while ( ( $row = $res->fetchRow( MDB2_FETCHMODE_ASSOC ) ) ) 
	{
?>
	<tr>
		<td><?php print( $row["item_code"] ); ?></td>
		<td><?php print( $row["item_name"] ); ?></td>
	</tr>
<?php
	}
?>
</table>
<?php
	$res->free();
	$mdb2->disconnect();
?>
</body>
</html>
