<?php
	require_once('pmphlib.php');
	if (! isset($rec)) {
		$rec = init_ask();
	}
	$rec['SITE'] = 'support';
	if (! isset($main_message)) {
		$main_message = '���Τ��Ӥ����ҤΥ����ӥ��ˤ��ؿ��򤪴󤻤����������꤬�Ȥ��������ޤ���';
	}
	if (! isset($sub_message)) {
		$sub_message = '<span class="t">������Ǥ����ʲ��Υե������ɬ�פʾ�������Ϥξ�ֳ�ǧ�ץܥ���򲡤��Ƥ���������<br>�ޤ��֤����Ҥ�ꤴϢ�������������Ƥ��������ޤ���</span>';
	}

	$dir_name = dirname($_SERVER["REQUEST_URI"]);
	if (empty($_SERVER["HTTPS"])) {
		$protocol_name = 'http:';
	} else {
		$protocol_name = 'https:';
	}
	$thanks_page = $protocol_name . '//'. $_SERVER['HTTP_HOST'] . $dir_name . '/thanks.php';
	// https://www.fnx.jp/hnv/basic/pmph/thanks.php
?><!DOCTYPE HTML PUBLIC "-//W3C//Dtd HTML 4.01 transitional//EN">
<html><!-- InstanceBegin template="/Templates/base_euc.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=euc-jp">
<!-- InstanceBeginEditable name="doctitle" -->
<title>FNX��������</title>
<!-- InstanceEndEditable -->
<meta http-equiv="Content-Style-Type" content="text/css">
<link rel="stylesheet" href="../../css/hnv_bs.css"  type="text/css" media="screen,tv">
<link rel="stylesheet" href="../../css/txt.css"  type="text/css">
<link rel="stylesheet" href="../../css/hnv_2.css"  type="text/css" media="screen,tv">

<!-- InstanceBeginEditable name="head" -->
<style type="text/css">
<!--
.conf {
	color: #003399;
	font-size:90%;
	line-height:130%;
}
-->
</style>
<!-- InstanceEndEditable -->
</head>
<body>
<center>

<table width="750" border="0" cellspacing="0" cellpadding="0" height="100%">
<tr> 
<td width="1" bgcolor="#000088"><img src="../../img/spacer.gif" width="1" height="5" alt=""></td>
<td align="center" valign="top" bgcolor="#ffffff">

<table width="100%"  border="0" cellspacing="0" cellpadding="0">
 <tr>
  <td align="left"><img src="../../img/top_formovin.gif" alt="for Movin' ����ä�����롢������ƻ��" width="250" height="36"></td>
  <td align="right"><a href="http://www.nexway.co.jp/" target="_blank"><img src="../../img/nexway_logo.gif" alt="�ͥ����������Υȥåץڡ����إ��" width="215" height="36" border="0"></a></td>
 </tr>
</table>

<div style="margin:0;"><!-- #BeginLibraryItem "/Library/head.lbi" --><map name="gmenu" style=" margin:0px; ">
		<area shape="rect" coords="424,81,679,97" href="../ask/index.htm"><area shape="rect" coords="599,5,668,20" href="index.php"><area shape="rect" coords="676,6,743,20" href="../ask/index.htm"><area shape="rect" coords="6,36,158,83" href="../../index.php"></map><img src="../../img/top_header.gif" alt="FAXƱ�󥵡��ӥ����ͥ�����������FNX�����ҤΥӥ��ͥ���Ǻ�ߤ��褷�ޤ���" width="750" height="100" border="0" usemap="#gmenu"><!-- #EndLibraryItem --></div>

<table width="750" border="0" cellspacing="0" cellpadding="0">
 <tr align="left" valign="top">
		<td width="165" style=" background-image:url(../../img/menu_bk.gif); ">
	
	<table width="165" border="0" cellspacing="0" cellpadding="0">
 <tr>
  <td>
				<div class="menu" style=" padding-bottom:0px; ">
				<ul style="margin:0px;">
				 <li class="t"><a href="../../index.php">Home</a></li>
				</ul>
				</div> 
			</td>
			</tr>
			</table>
				   <!-- #BeginLibraryItem "/Library/menu_left.lbi" -->
<table width="165" border="0" cellspacing="0" cellpadding="0">
 <tr>
  <td>
<div class="menu">
				<ul style="margin:0px;"><li class="t0"><a href="../../info/bs/index.php">���Τ餻</a></li>
				</ul>
				</div>
				<div class="menu">
				<ul style="margin:0px;"><li class="t0"><a href="../../bgn/fnx/index.htm">�Ϥ���Ƥ�FNX</a></li>
				</ul>
				</div>
				<div class="menu" style="border-width:0px 0px 0px 0px; padding-bottom:0px;">
				<ul style="margin:0px;"><li class="t0"><a href="../../svc/bs/index.htm">�����ӥ��̾���</a></li>
				</ul>
				</div>
				<div class="menu_sub">
				<ul style="margin:0px;">
				 <li class="t0"><a href="../../svc/ltype/lt_01.htm">��¥Navigator LinkType</a> </li>
				</ul>
				<ul style="margin:0px;">
				 <li class="t0"><a href="../../svc/wtype/wtype_09.htm">��¥Navigator WebType</a>  </li>
				</ul>
				<ul style="margin:0px;">
				 <li class="t0"><a href="../../svc/bs/index.htm">FAX����Ʊ�󥵡��ӥ�</a> </li>
				</ul>
				</div>
				<div class="menu" style="border-width:1px 0px 1px 0px;">
				<ul style="margin:0px;"><li class="t0"><a href="../../qa/bs/index.htm">�褯���뤪��礻</a></li>
				</ul>
				</div>
				<div class="menu" style="border-width:0px 0px 0px 0px; padding-bottom:0px;">
				<ul style="margin:0px;">
						<li class="t0">FNX���ѥΥ��ϥ�</li>
				</ul>
				</div>
				<div class="menu_sub">
				<ul style="margin:0px;">
				 <li class="t0"><a href="../../prct/tmpl/index.htm">FAX���ƥƥ�ץ졼��</a> <img src="../../img/icon_uonly.gif" alt="����"></li>
				</ul>
				<ul style="margin:0px;">
				 <li class="t0"><a href="../../prct/smpl/index.htm">E-mail�ƥ����ȥǥ�����</a>  <img src="../../img/icon_uonly.gif" alt="����"></li>
				</ul>
				<ul style="margin:0px;">
				 <li class="t0"><a href="../../tool/acln/index.htm">��ʣ�����å��ġ���</a> <img src="../../img/icon_uonly.gif" alt="����"></li>
				</ul>
				<ul style="margin:0px;">
				 <li class="t0"><a href="../../prct/mleader/index.htm">FAX����Хå��ʥ�С�</a> <img src="../../img/icon_uonly.gif" alt="����"></li>
				</ul>
				<ul style="margin:0px;">
				 <li class="t0"><a href="../../prct/sp/index.htm">��¥�Υ��ϥ��ֺ�</a> <img src="../../img/icon_uonly.gif" alt="����"></li>
				</ul>
				</div>
				
				<div class="menu" style="border-width:1px 0px 0px 0px; padding-top:5px;padding-bottom:0px;">
				<ul style="margin:0px "><li class="t0">FNX�Τ����Ѥ˴ؤ���</li>
				</ul>
				</div>				
				<div class="menu_sub">
				<ul style="margin:0px ">
				 <li class="t0"><a href="../../use/price/index.htm">���ѵ�������</a></li>
				</ul>
				<ul style="margin:0px ">
				 <li class="t0"><a href="../../use/dmnd/index.htm">������ˤĤ���</a></li>
				</ul>
				<ul style="margin:0px ">
				 <li class="t0">
				<a href="../prv/prv_scr.htm">�Ŀ;���μ�갷���˴ؤ���</a></li>
				</ul>				
				<ul style="margin:0px ">
				 <li class="t0"><a href="../../use/manual/index.htm">�ޥ˥奢�롦<br>
�Ƽ������������</a> <img src="../../img/icon_uonly.gif" alt="����"></li>
				</ul>
				<ul style="margin:0px ">
				 <li class="t0"><a href="../../use/prcd/index.htm">����ž��FAX���߻���<br>
��³��</a></li>
				</ul>
</div>

<div class="menu" style="border-width:1px 0px 0px 0px; padding-top:5px;padding-bottom:5px;">
		<ul style="margin:0px;"><li class="t0"><a href="../map/index.htm">�����ȥޥå�</a></li>
		</ul>
</div>

<div class="menu" style="border-width:0px 0px 0px 0px; padding-bottom:0px;">
				<ul style="margin:0px;"><li class="t0">��������</li>
				</ul>
				</div>
				<div class="menu_sub">
				<ul style="margin:0px;">
				 <li class="t0"><a href="index.php">���������͹����</a></li>
				</ul>
				<ul style="margin:0px;">
				 <li class="t0"><a href="dl.htm">��������ʥ�������ɡ�</a></li>
				</ul>
				</div>
				
<div class="menu" style="margin-top:0px; ">
		<ul style="margin:0px;"><li class="t0"><a href="../ask/index.htm">����礻</a></li>
		</ul>
</div>

<div style="padding:5px; margin-top:15px;">
<div style="width:150px;">
<div style="float:left; width:23px; "> <img src="../../img/icon_uonly.gif" alt="����" width="21" height="11"></div>
<div class="t_sub" style="float:left;width:127;">FNX�����Ѵ���͸��ꥳ���ʡ��ˤʤ�ޤ����ѥ���ɤ��������ʾ��ϡ�������Ǥ���<a href="mailto:fnxcs@nexway.co.jp">fnxcs@nexway.co.jp</a>�ޤǤ��䤤��碌����������</div>
<div style="clear:both; "></div>
</div>
</div>
</td>
 </tr>
</table><!-- #EndLibraryItem --></td>

<td width="585" align="center" style="background-image:url(../../img/cnr_bk.gif); ">

<!--cnr_t start-->
   <div style=" margin:0px; width:585px; height:46px; background-image:url(../../img/cnr_t.gif); " >
			<div style=" margin-left:30px; padding-top:20px; font-size:14px; font-weight:bold; text-align:left; color:#ffffff;">
			<!-- InstanceBeginEditable name="cnr_t" -->
			 FNX�������ᡧ͹��<!-- InstanceEndEditable -->
			</div>
			</div> 
<!--cnr_t end-->
					
<table width="585"  border="0" cellspacing="0" cellpadding="0">
 <tr>
  <td align="left" width="20" style="background-image:url(../../img/cnr_bk.gif); ">
		<img src="../../img/spacer.gif" width="20" height="20">
		</td>
		
		<td align="left" width="565">

			<!--contents start-->
			<div style="width:545px; margin-right:20px; margin-top:10px; margin-bottom:10px; ">
			<!--contents start-->
				<div style="margin-top:10px; margin-bottom:15px; text-align:left; background-color: #ffffff; ">
						<!-- InstanceBeginEditable name="body" -->
<form action="https://www.salesforce.com/servlet/servlet.WebToLead?encoding=EUC-JP" method="post" name="fnx" style="margin:0; padding:0; ">
<input  type="hidden" name="retURL" value="<?php echo $thanks_page; ?>">

<input  type="hidden" name="oid" value="00D100000000AFI">
<input  type="hidden" id="lead_source" name="lead_source" value="WEB">
<input  type="hidden" id="00N10000000ENeb" name="00N10000000ENeb" value="��������">
<input  type="hidden" id="recordType" name="recordType" value="0121000000004FP">
<input  type="hidden" id="Campaign_ID" name="Campaign_ID" value="701100000000ccG">
<?php
/*
<input type="hidden" name="command" value="regist">
<input name="Apache" type="hidden" value="<?php echo html($rec['Apache']); ?>">
<input name="MMARK" type="hidden" value="<?php echo html($rec['MMARK']); ?>">
<input name="FMARK" type="hidden" value="<?php echo html($rec['FMARK']); ?>">
<input name="SITE" type="hidden" value="<?php echo html($rec['SITE']); ?>">
<input name="REFERER" type="hidden" value="<?php echo html($rec['REFERER']); ?>">
*/
?>
		<div class="t" style="font-weight:bold; "><?php echo $main_message; ?></div>
       <div class="t" style="margin-top:7; margin-bottom:10; "><?php echo $sub_message; ?></div>
							
       <table width="100%" border="0" cellspacing="0" cellpadding="1">
        <tr>
         <td align="center" valign="middle" bgcolor="#000066">
           <table width="100%" border="0" cellspacing="1" cellpadding="3">
            <tr>
             <td align="left" valign="middle" bgcolor="#dddddd" class="t">�Ƽ掠���ӥ��ѥ�ե�å�</td>
            </tr>
            <tr>
             <td align="left" valign="top" bgcolor="#FFFFFF" class="t">
													<div style="padding:3px; ">
<?php
		$text_material = array();
		if (isset($rec['00N10000000Emth']) && $rec['00N10000000Emth']=='1') {
			array_push($text_material, '<input type="hidden" id="00N10000000Emth" name="00N10000000Emth" value="1"/>FNX��¥Navigator');
		}
		if (isset($rec['00N10000000J8lD']) && $rec['00N10000000J8lD']=='1') {
			array_push($text_material, '<input type="hidden" id="00N10000000J8lD" name="00N10000000J8lD" value="1"/>FNX�ե������ߥ����Ʊ�󥵡��ӥ�');
		}
		if (isset($rec['00N10000000J8lI']) && $rec['00N10000000J8lI']=='1') {
			array_push($text_material, '<input type="hidden" id="00N10000000J8lI" name="00N10000000J8lI" value="1"/>FNX��ݥ����ӥ�');
		}
		if (isset($rec['00N10000000Emtw']) && $rec['00N10000000Emtw']=='1') {
			array_push($text_material, '<input type="hidden" id="00N10000000Emtw" name="00N10000000Emtw" value="1"/>Targeting Data Support�ʥ������ƥ��󥰡��ǡ��������ݡ��ȡ�');
		}
		echo join('<br />', $text_material);
?>
													</div>
													</td>
            </tr>
            <tr>
             <td align="left" valign="middle" bgcolor="#dddddd" class="t">����¾������Ω������</td>
            </tr>
            <tr>
             <td align="left" valign="top" bgcolor="#FFFFFF" class="t">
<?php
		$text_material = array();
		if (isset($rec['00N10000000J8lN']) && $rec['00N10000000J8lN']=='1') {
			array_push($text_material, '<input type="hidden" id="00N10000000J8lN" name="00N10000000J8lN" value="1"/>FAX���Ƥ������ƥ�ץ졼�ȡ�CD-ROM�ա�');
		}
		if (isset($rec['00N10000000J8lS']) && $rec['00N10000000J8lS']=='1') {
			array_push($text_material, '<input type="hidden" id="00N10000000J8lS" name="00N10000000J8lS" value="1"/>���ݥ���ȥ��饹�ȥ֥å���CD-ROM�ա�');
		}
		echo join('<br />', $text_material);
?>													</td>
            </tr>
            <tr>
             <td align="left" valign="middle" bgcolor="#dddddd" class="t">�����ӥ��ˤĤ��ƤΤ���˾��ʹ��������������</td>
            </tr>
            <tr>
             <td align="left" valign="top" bgcolor="#FFFFFF" class="t">
													<div style="padding:3px; ">
<?php
		$text_material = array();
		if (isset($rec['00N10000000J8lX']) && $rec['00N10000000J8lX']=='1') {
			array_push($text_material, '<input type="hidden" id="00N10000000J8lX" name="00N10000000J8lX" value="1"/>�����ӥ��Τ����Ѥ��˾');
		}
		if (isset($rec['00N10000000J8lc']) && $rec['00N10000000J8lc']=='1') {
			array_push($text_material, '<input type="hidden" id="00N10000000J8lc" name="00N10000000J8lc" value="1"/>�Ķ�ô���Ԥ���ˬ���������˾');
		}
		if (isset($rec['00N10000000J8ld']) && $rec['00N10000000J8ld']=='1') {
			array_push($text_material, '<input type="hidden" id="00N10000000J8ld" name="00N10000000J8ld" value="1"/>���äˤ��������˾');
		}
		echo join('<br />', $text_material);
?>													</div>
													</td>
            </tr>
            <tr>
             <td align="left" valign="middle" bgcolor="#DDDDDD" class="t">����¾ ����Ū�ʤ��䤤�礻�������̻��ब�������ޤ����餴��������������</td>
            </tr>
            <tr>
             <td align="left" valign="top" bgcolor="#FFFFFF" class="t">
				<div style="padding:3px; "><?php echo brhtml($rec['00N10000000EMaT']); ?>
				<input type="hidden" name="00N10000000EMaT" value="<?php echo html($rec['00N10000000EMaT']); ?>">
				</div>
             </td>
            </tr>
           </table>
           <!--�����ӥ��ˤĤ��Ƥμ��䡢����ޤ�-->
         </td>
        </tr>
       </table>
       <table width="100%" border="0" cellspacing="0" cellpadding="3">
        <tr>
         <td align="left" valign="middle" bgcolor="#9999FF" class="t"><strong><font color="#FFFFFF">��</font> ������򤴵�������������</strong></td>
        </tr>
       </table>
       <table width="100%" border="0" cellspacing="0" cellpadding="1">
        <tr>
         <td align="center" valign="middle" bgcolor="#000066">
			<div class="t" style=" padding:4px; background-color:#990000; color:#FFFFFF;">���μ¤˻������Ϥ����뤿���ɬ�ܹ��ܤ�ɬ������������������</div>
			<table width="100%" border="0" cellspacing="1" cellpadding="5" >
				<tr bgcolor="#FFCCCC" align="LEFT" valign="TOP">
					<td nowrap class="t">��̾��<font color="#CC3300">��ɬ�� </font></td>
					<td width="100%" class="conf">
						<input name="last_name" type="hidden" id="last_name" value="<?php echo html($rec['last_name']); ?>">
						<?php echo html($rec['last_name']); ?> <font color="#666666" class="t_sub">��</font></td>
				</tr>
				<tr align="LEFT" valign="TOP" bgcolor="#EEEEEE">
					<td nowrap class="t">�եꥬ��</td>
					<td class="conf">
						<input name="00N10000000EMgY" type="hidden" id="00N10000000EMgY" value="<?php echo html($rec['00N10000000EMgY']); ?>">
						<?php echo html($rec['00N10000000EMgY']); ?> <font color="#666666" class="t_sub">��</font></td>
				</tr>
				<tr bgcolor="#FFCCCC" align="LEFT" valign="TOP">
					<td nowrap class="t">����̾<font color="#CC3300"> ��ɬ�� </font></td>
					<td class="conf">
						<input name="company" type="hidden" id="company" value="<?php echo html($rec['company']); ?>">
						<?php echo html($rec['company']); ?> <font color="#666666" class="t_sub">��</font></td>
				</tr>
				<tr align="LEFT" valign="TOP" bgcolor="#EEEEEE">
					<td nowrap class="t">����̾</td>
					<td class="conf">
						<input name="00N10000000E8JK" type="hidden" id="00N10000000E8JK" value="<?php echo html($rec['00N10000000E8JK']); ?>">
						<?php echo html($rec['00N10000000E8JK']); ?> <font color="#666666" class="t_sub">��</font></td>
				</tr>
				<tr align="LEFT" valign="TOP" bgcolor="#EEEEEE">
					<td nowrap class="t">��</td>
					<td class="conf">
						<input name="title" type="hidden" id="title" value="<?php echo html($rec['title']); ?>">
						<?php echo html($rec['title']); ?> <font color="#666666" class="t_sub">��</font></td>
				</tr>
				<tr bgcolor="#FFCCCC" align="LEFT" valign="TOP">
					<td nowrap class="t">͹���ֹ� <font color="#CC3300">��ɬ�� </font></td>
					<td class="conf">
						<input name="zip" type="hidden" id="zip" value="<?php echo html($rec['zip']); ?>">
						<?php echo html($rec['zip']); ?> <font color="#666666" class="t_sub">��</font></td>
				</tr>
				<tr bgcolor="#FFCCCC" align="LEFT" valign="TOP">
					<td nowrap class="t">������ <font color="#CC3300">��ɬ�� </font></td>
					<td class="conf">
						<input name="street" type="hidden" id="street" value="<?php echo html($rec['street']); ?>">
						<?php echo html($rec['street']); ?></td>
				</tr>
				<tr bgcolor="#FFCCCC" align="LEFT" valign="TOP">
					<td nowrap class="t">�᡼�륢�ɥ쥹 <font color="#CC3300">��ɬ�� </font></td>
					<td class="conf">
						<input name="email" type="hidden" id="email" value="<?php echo html($rec['email']); ?>">
						<?php echo html($rec['email']); ?> </td>
				</tr>
				<tr bgcolor="#FFCCCC" align="LEFT" valign="TOP">
					<td nowrap class="t">�������ֹ�<font color="#CC3300"> ��ɬ�� </font></td>
					<td class="conf">
						<input name="phone" type="hidden" id="phone" value="<?php echo html($rec['phone']); ?>">
						<?php echo html($rec['phone']); ?> <font color="#666666" class="t_sub">��</font></td>
				</tr>
				<tr bgcolor="#FFCCCC" align="LEFT" valign="TOP">
					<td nowrap class="t">FAX�ֹ�<font color="#CC3300"> ��ɬ�� </font></td>
					<td class="conf">
						<input name="fax" type="hidden" id="fax" value="<?php echo html($rec['fax']); ?>">
						<?php echo html($rec['fax']); ?> <font color="#666666" class="t_sub"> ��</font></td>
				</tr>
			</table>
         </td>
        </tr>
       </table>
       <table width="100%" cellspacing="0" cellpadding="10" border="0">
        <tr align="center">
         <td><input type="submit" value="����" name="submit">
          </td>
        </tr>
       </table>
						 </form>
						<!-- InstanceEndEditable --></div>
						
			   </div>
			<!--contents end-->
</td>
</tr>
</table>


		</td>
  </tr>
</table>

<!-- #BeginLibraryItem "/Library/menu_ft.lbi" -->
<div class="menu_ft t_sub"><a href="http://www.nexway.co.jp/" target="_blank">��ҳ���</a> | <a href="http://www.nexway.co.jp/privacy.html" target="_blank">�ץ饤�Х����ݥꥷ��</a> | <a href="../how/index.htm">�����Ȥ����Ѥˤ����ä�</a></div>
<!-- #EndLibraryItem --><!-- #BeginLibraryItem "/Library/foot.lbi" --><!-- #EndLibraryItem --></td>
<td width="1" bgcolor="#000088"><img src="../../img/spacer.gif" width="1" height="5" alt=""></td>
</tr>
</table>
<img src="../../img/spacer.gif" width="1" height="5" alt="">
</center>
</body>
<!-- InstanceEnd --></html>