<?php
	session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=SHIFT-JIS" />
<title>���i�ꗗ�b�y��̒ʔ̃T�C�g  oh yeah !!</title>
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
            <h2>���i�ꗗ</h2>
            <!-- ���i���X�g -->
            <div class="list clearfix">
<?php
	// �f�[�^�x�[�X�ɐڑ����鏈���B
	// ���ɉ����Ĉȉ��̕ϐ������������܂��B
	$host = "localhost";	// �ڑ���z�X�g��
	$user = "root";			// �ڑ����[�U��
	$pass = "dennis@1098";				// �ڑ��p�X���[�h
	$dbname = "ec";			// �f�[�^�x�[�X��
	
	//if( !$conn = mysql_connect( $host, $user, $pass ) ) 
	//{
	//	die("MySQL �ڑ��G���[".mysql_error());
	//}
	//mysql_select_db( $dbname );
	
	$link = mysql_connect($host, $user, $pass);
    if (!$link) {
    die('MySQL �ڑ��G���[ : ' . mysql_error());
    }
    // ec ���J�����g�� db �Ɏw�肷��
    $db_selected = mysql_select_db($dbname, $link);
    if (!$db_selected) {
    die ('Can\'t use ec db : ' . mysql_error());
    }
	
	mysql_set_charset("sjis");// �����R�[�h���w�肵�܂��B

	/**-----------------------------------------------------------
	 *
	 * �y���O�C������(1)�z
	 * ��ʍ����́u���O�C���v�{�^���������ꂽ���ɂ��� if ���ɓ���܂��B
	 *
	 ------------------------------------------------------------*/
	if( isset($_REQUEST["cmd"])&&$_REQUEST["cmd"] == "do_login" )
	{
		// ���� $sql �ϐ��̒��g�𖄂߂ĉ������B
		$sql = "select * from m_customers ";
        $sql.= "where customer_code = '" . $_REQUEST["login_id"] . "'";
		$sql.= "and pass='" . $_REQUEST["login_pass"] . "'";
		
		
		$res = mysql_query( $sql );
		$is_login = 0;
		// �������ʂ���ꂽ�ꍇ(�܂�A���O�C���ɐ��������ꍇ)�ȉ��� if ���ɓ���B
		if( $row = mysql_fetch_array( $res ) ) 
		{
			$_SESSION["customer_code"] = $_REQUEST["login_id"];
			$_SESSION["name"] = $row["name"];
			$is_login = 1;
		}
		mysql_free_result($res);
	}

	/**-----------------------------------------------------------
	 *
	 * �y���O�C������(2)�z
	 * ���O�C����ɁA��ʍ����́u���O�A�E�g�v�{�^���������ꂽ����
	 * ���� if ���ɓ���܂��Bunset ���߂͕ϐ��̒��g��j�����閽�߂ł��B
	 *
	 ------------------------------------------------------------*/
	if( isset($_REQUEST["cmd"])&&$_REQUEST["cmd"] == "do_logout" )
	{
		unset( $_SESSION["customer_code"] );
		unset( $_SESSION["name"] );
	}

	$sql = "SELECT * FROM m_items WHERE del_flag = '0' ";
	if( isset($_REQUEST["item_name"]) )
	{
		$sql = $sql . " AND item_name LIKE '%" . $_REQUEST["item_name"] . "%' ";
	}

	// �������u�Ǌy��v�u���y��v�u�Ŋy��v�̂����ꂩ�̃`�F�b�N�{�b�N�X��
	// �`�F�b�N�������Ă����ꍇ�A�ȉ��� if ���ɓ���܂��B
	if( isset($_REQUEST["cat_kan"])&&$_REQUEST["cat_kan"] == "1" || 
		isset($_REQUEST["cat_gen"])&&$_REQUEST["cat_gen"] == "1" || 
		isset($_REQUEST["cat_da"])&&$_REQUEST["cat_da"] == "1" )
	{
		$in = "";
		if( $_REQUEST["cat_kan"] == "1" )
		{
			$in = $in . "1,";
		}
		if( $_REQUEST["cat_gen"] == "1" )
		{
			$in = $in . "2,";
		}
		if( $_REQUEST["cat_da"] == "1" )
		{
			$in = $in . "3,";
		}
		$in = preg_replace( "/,$/", "", $in );
		$sql = $sql . " AND category IN ( $in ) ";
	}
	
	
	$res = mysql_query( $sql );
	while( $item = mysql_fetch_array( $res ) ) {
?>
              <dl class="products">
			    <dt><a href="item_detail.php?code=<?php print(htmlspecialchars( $item["item_code"] ) ); ?>"><img src="img/thumb/<?php print( $item["image"] ); ?>" alt="" /><br />
                <?php print( $item["item_name"] ); ?></a></dt>
                <dd>&yen;<?php print( $item["price"] ); ?></dd>
              </dl>
<?php
	}
?>
            </div>
            <!-- /���i���X�g -->
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
    <!-- �E�R���e���c -->

    <!-- �����j���[ -->
    <div id="leftbox">
      <h1><img src="common/img/title.gif" alt="oh yeah!!" /></h1>
      <div id="menu">

<?php
	// ���O�C�����Ă��Ȃ����́A�ȉ��� if ���ɓ���܂��B
	if( isset($_SESSION["customer_code"]) == false )
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
		
		//if( $is_login == 0 and isset($_REQUEST["cmd"])&&$_REQUEST["cmd"] == "do_login" )	
		//is_login �̓��[�J���ϐ��ł����A���̖����͂܂�������Ȃ��B��U������O���Ď����Ă݂܂��B	
		if(isset($_REQUEST["cmd"])&&$_REQUEST["cmd"] == "do_login" )
		{
			print("���O�C���Ɏ��s���܂�����B�ă��O�C�����Ă��������B");
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
          <div class="top">�悤����<span class="person"><?php print($_SESSION["name"])?></span>����I</div>
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
              <input type="text" name="item_name" class="text" value="<?php if(isset($_REQUEST["item_name"])){print($_REQUEST["item_name"]);}?>"/>
            </dd>
          </dl>
          <dl class="clearfix cat">
            <dt><img src="common/img/t7.gif" alt="�J�e�S��" /></dt>
            <dd>
              <input type="checkbox" name="cat_kan" value="1" <?php if( isset($_REQUEST["cat_kan"])&&$_REQUEST["cat_kan"] == "1" ){ print( "checked" ); } ?>/>
              �Ǌy��<br />
              <input type="checkbox" name="cat_gen" value="1" <?php if( isset($_REQUEST["cat_gen"])&&$_REQUEST["cat_gen"] == "1" ){ print( "checked" ); } ?>/>
              ���y��<br />
              <input type="checkbox" name="cat_da" value="1" <?php if( isset($_REQUEST["cat_gen"])&&$_REQUEST["cat_da"] == "1" ){ print( "checked" ); } ?>/>
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
	if( isset($_SESSION["customer_code"]) ==false)
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
