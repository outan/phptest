<?php
	session_start();

	// �f�[�^�x�[�X�ɐڑ����鏈���B
	// ���ɉ����Ĉȉ��̕ϐ������������܂��B
	$host = "localhost";	// �ڑ���z�X�g��
	$user = "root";			// �ڑ����[�U��
	$pass = "dennis@1098";				// �ڑ��p�X���[�h
	$dbname = "ec";			// �f�[�^�x�[�X��
	if( !$conn = mysql_connect( $host, $user, $pass ) ) 
	{
		die("MySQL �ڑ��G���[");
	}
	mysql_select_db( $dbname );
	mysql_set_charset("sjis");		// �����R�[�h���w�肵�܂��B
	
	/**-----------------------------------------------------------
	 *
	 * ����o�^��ʂŁu�X�V�v�{�^�����N���b�N���ꂽ���̏����B
	 * ���O�C����Ԃɉ����āAUPDATE �܂��� INSERT �����s����B
	 *
	 ------------------------------------------------------------*/
	if( isset($_REQUEST["cmd"])&&$_REQUEST["cmd"] == "regist_member" )
	{
		if( isset($_SESSION["customer_code"])&&$_SESSION["customer_code"] != "" )
		{
			// �����ɁA���O�C���ς̏ꍇ�̏������L�q���ĉ������B
			$sql  = " update m_customers set ";
			$sql .= " customer_code = '" . $_REQUEST["customer_code"] . "',";
			$sql .= " pass = '" . $_REQUEST["pass"] . "',";
			$sql .= " name = '" . $_REQUEST["name"] . "',";
			$sql .= " address = '" . $_REQUEST["address"] . "',";
			$sql .= " tel = '" . $_REQUEST["tel"] . "',";
			$sql .= " mail = '" . $_REQUEST["mail"] . "'";
			$sql .= " where customer_code =  '" . $_SESSION["customer_code"] . "'";
			$res = mysql_query( $sql );
		
			//<script> javascript�͎����ł��Ȃ��悤�ł��B
            // document object model�F�X�V��̉�ʏ�̃��O�C�����̖��O���X�V
           // var e = document.getElementById('person');
           // e.innerHTML = $_REQUEST["name"];
		  //alert($_REQUEST["name"]);
          //</script>
			print( $sql );
		}
		else
		{
			// �����ɁA���O�C�����̏ꍇ�̏������L�q���ĉ������B
        $sql = "insert into m_customers( customer_code, pass, name, address, tel, mail, del_flag, reg_date ) ";
        $sql .= "values( ";
        $sql .= " '".$_REQUEST["customer_code"]."', ";
        $sql .= " '".$_REQUEST["pass"]."', ";
        $sql .= " '".$_REQUEST["name"]."', ";
        $sql .= " '".$_REQUEST["address"]."', ";
        $sql .= " '".$_REQUEST["tel"]."', ";
        $sql .= " '".$_REQUEST["mail"]."', ";
        $sql .= " '0', ";
        $sql .= " now() ) ";
        $res = mysql_query( $sql );
		print("not login.");
		print( $sql );

		}
	}

	// ���O�C���ςł���΁A���q�l�̏����f�[�^�x�[�X���擾�B
	if( isset($_SESSION["customer_code"])&&$_SESSION["customer_code"] != "" )
	{
		$sql = " select * from m_customers ";
		$sql.= " where customer_code= '" . $_SESSION["customer_code"] . "'";
		$res = mysql_query( $sql );
		$count = 0;
		$info = mysql_fetch_array( $res ) ;
	}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=SHIFT-JIS" />
<title>�o�^���b�y��̒ʔ̃T�C�g  oh yeah !!</title>
<link href="common/css/base.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="common/js/base.js"></script>
</head>
<body onload="MM_preloadImages('common/img/bt1_f2.gif','common/img/bt2_f2.gif','common/img/bt3_f2.gif','common/img/bt3_2_f2.gif','common/img/bt_login_f2.gif')">
<div id="wrap">
  <div id="contents">
    <!-- �E�R���e���c -->
    <div id="rightbox">
      <div id="main">
        <div id="main2">
          <!-- �����^�C�g���ȊO���ʕ������� -->

          <!-- ���C������ �e�y�[�W���Ƃɍ쐬-->
          <div id="mainbox" class="clearfix">
            <h2>�o�^���</h2>

            <form name="member_form" action="member.php" method="post">
            <input type="hidden" name="cmd" value="regist_member"/>
            <div class="info clearfix">
            <dl>
            <dt>ID�F</dt>
            <dd><input type="text" name="customer_code" <?php if(isset($info["customer_code"])&&$info["customer_code"] != "" ){ print( "readonly" ); } ?> value="<?php if(isset($info["customer_code"])){print( $info["customer_code"] );} ?>"/></dd>
            <dt>�p�X���[�h�F</dt>
            <dd><input type="password" name="pass" value="<?php if(isset($info["pass"])){print( $info["pass"] );} ?>"/></dd>
            <dt>�����F</dt>
            <dd><input type="text" name="name" value="<?php if(isset($info["name"])){print( $info["name"] ); }?>"/></dd>
            <dt>�Z���F</dt>
            <dd><input type="text" name="address" value="<?php if(isset($info["address"])){print( $info["address"] );} ?>"/></dd>
            <dt>�d�b�F</dt>
            <dd><input type="text" name="tel" value="<?php if(isset($info["tel"])){print( $info["tel"] );} ?>"/></dd>
            <dt>�A�h���X�F</dt>
            <dd><input type="text" name="mail" value="<?php if(isset( $info["mail"])){print( $info["mail"] );} ?>" size="30"/>
            </dd>
            </dl>
            <input type="submit" class="update" value="�o�^"/>
            </div>
            </form>
          </div>
          <!-- /���C������ �e�y�[�W���Ƃɍ쐬-->

          <!-- �������ʕ������� -->
          <!-- �t�b�^�[ -->
          <div id="footer">
            <p class="copy">Copyright &copy; 2008 oh yeah !! All Rights Reserved.</p>
          </div>
          <!-- /�t�b�^�[ -->
        </div>
        <!-- /���C������ -->
      </div>
    </div>

    <!-- �����j���[ -->
    <div id="leftbox">
      <h1><img src="common/img/title.gif" alt="oh yeah!!" /></h1>
      <div id="menu">

<?php
	// ���O�C�����Ă��Ȃ����́A�ȉ��� if ���ɓ���܂��B
	if( isset($_SESSION["customer_code"])== false )
	{
?>
        <!-- ���O�C���t�H�[���i�񃍃O�C�����j -->
        <form name="login_form" action="item_list.php" method="post">
        <input type="hidden" name="cmd" value="do_login"/>
        <div class="box">
          <div class="top"><img src="common/img/t1.gif" alt="���O�C��" /></div>
          <dl class="clearfix">
<?php
		// ���O�C���Ɏ��s�������̃G���[�\���B
		//if( $is_login == 0 and $_REQUEST["cmd"] == "do_login" )
       if(isset($_REQUEST["cmd"])&&$_REQUEST["cmd"] == "do_login" )

		{
			print("���O�C���Ɏ��s���܂����B");
		}
?>
            <dt><img src="common/img/t4.gif" alt="ID" /></dt>
            <dd>
              <input name="login_id" type="text" class="text" />
            </dd>
            <dt><img src="common/img/t5.gif" alt="PASS" /></dt>
            <dd>
              <input name="login_pass" type="password" class="text" />
            </dd>
          </dl>
          <div class="bottom">
            <input name="id3" type="submit" value="���O�C��" />
          </div>
        </div>
        </form>
<?php 
	// ���O�C���ς̎��́A�ȉ��� if ���ɓ���܂��B
	} else {

?>
        <form name="login_form" action="item_list.php" method="post">
        <input type="hidden" name="cmd" value="do_logout"/>

        <!-- /���O�C���t�H�[�� -->
        <!-- �E�F���J���i���O�C�����j -->
        <div class="box">
          <div class="top">�悤����<span id="person"><?php if(isset($_SESSION["name"])){print($_SESSION["name"]);}?></span>����I</div>
          <div class="bottom">
            <input name="id3" type="submit" value="���O�A�E�g" />
          </div>
        </div>
        </form>
<?php
	}
?>
        <!-- /�E�F���J�� -->
        <!-- ���i���� -->
        <form name="login_form" action="item_list.php" method="post">
        <input type="hidden" name="cmd" value="do_search"/>
        <div class="box" id="search">
          <div class="top"><img src="common/img/t2.gif" alt="���i����" /></div>
          <dl class="clearfix">
            <dt><img src="common/img/t6.gif" alt="���i��" width="32" height="18" /></dt>
            <dd>
              <input type="text" name="item_name" class="text" value="<?php if(isset($_REQUEST["item_name"])){print( $_REQUEST["item_name"] );}?>"/>
            </dd>
          </dl>
          <dl class="clearfix cat">
            <dt><img src="common/img/t7.gif" alt="�J�e�S��" /></dt>
            <dd>
              <input type="checkbox" name="cat_kan" value="1" <?php if( isset($_REQUEST["cat_kan"])&&$_REQUEST["cat_kan"] == "1" ){ print( "checked" ); } ?>/>
              �Ǌy��<br />
              <input type="checkbox" name="cat_gen" value="1" <?php if( isset($_REQUEST["cat_gen"])&&$_REQUEST["cat_gen"] == "1" ){ print( "checked" ); } ?>/>
              ���y��<br />
              <input type="checkbox" name="cat_da" value="1" <?php if( isset($_REQUEST["cat_da"])&&$_REQUEST["cat_da"] == "1" ){ print( "checked" ); } ?>/>
              �Ŋy�� </dd>
          </dl>
          <div class="bottom">
            <input name="id3" type="submit" value="����" />
          </div>
        </div>
        </form>
        <!-- ���i���� -->
        
        <!-- ���ʃ��j���[ -->
        <ul class="menu">
          <li><a href="item_list.php"><img src="common/img/bt1.gif" alt="���i�ꗗ" name="Image1" width="172" height="38" id="Image1" onmouseover="MM_swapImage('Image1','','common/img/bt1_f2.gif',1)" onmouseout="MM_swapImgRestore()" /></a></li>
          <li><a href="cart.php"><img src="common/img/bt2.gif" alt="�J�[�g�̒�" name="Image2" width="172" height="38" id="Image2" onmouseover="MM_swapImage('Image2','','common/img/bt2_f2.gif',1)" onmouseout="MM_swapImgRestore()" /></a></li>
<?php
	// ���O�C�����̏ꍇ
	if( isset($_SESSION["customer_code"])&&$_SESSION["customer_code"] == "")
	{
?>
          <li><a href="member.php"><img src="common/img/bt3_2.gif" alt="����o�^" name="Image4" width="172" height="38" id="Image4" onmouseover="MM_swapImage('Image4','','common/img/bt3_2_f2.gif',1)" onmouseout="MM_swapImgRestore()" /></a></li>
<?php
	// ���O�C���ς̏ꍇ
	} else { 
?>
          <li><a href="member.php"><img src="common/img/bt3.gif" alt="�o�^���" name="Image3" width="172" height="38" id="Image3" onmouseover="MM_swapImage('Image3','','common/img/bt3_f2.gif',1)" onmouseout="MM_swapImgRestore()" /></a></li>
<?php
	} 
?>
        </ul>
        <!-- /���ʃ��j���[ -->
      </div>
    </div>
    <!-- /�����j���[ -->
   

  </div>
</div>
</body>
</html>
