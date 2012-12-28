<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
</head>
<body>
<?php

	// MDB2 ���C�u�����̓ǂݍ���
	require_once("MDB2.php");

	// �G���[�������������̏������L�q���܂��B
	PEAR::setErrorHandling( PEAR_ERROR_CALLBACK, 'handleError' );
	function handleError( $error )
	{
	    die('�G���[���������܂����B�Ǘ��҂܂ł��₢���킹�������B');
	}

	// �f�[�^�x�[�X�ɐڑ����܂��B
	$dsn = array(
		"phptype"  => "mysql",
		"username" => "root",
		"password" => "",
		"hostspec" => "localhost",
		"database" => "ec",
	);
	$mdb2 =& MDB2::connect( $dsn );

	// �����R�[�h�w��B
	$mdb2->setCharset( "utf8" );

	// SQL�������s���܂��B
	$stmt = $mdb2->prepare( "SELECT * FROM m_items WHERE category = ? or category = ? " );
	$res = $stmt->execute( array( "1", "3" ) );

?>
<table border="1">
<?php 
	// �������ʂ̐��������[�v���A��ʂɕ\�����܂��B
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
