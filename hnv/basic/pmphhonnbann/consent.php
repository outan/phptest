<?php
if (! isset($action)) {
	$action = $_SERVER['REQUEST_URI'];
}
// �ǥե������
if (! isset($midashi)) {
	$midashi = '�������ᡧ͹��';
}
?><!DOCTYPE HTML PUBLIC "-//W3C//Dtd HTML 4.01 transitional//EN">
<html><!-- InstanceBegin template="/Templates/base_euc.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=euc-jp">
<!-- InstanceBeginEditable name="doctitle" -->
<title>fnx_help</title>


<!--�������륷���Ȥ�����-->
<meta http-equiv="Content-Style-Type" content="text/css">
<style type="text/css">
<!--
.consent_field {
	float:left;
	width: 100px;
}
-->
</style>
<script language="JavaScript" type="text/JavaScript">
function change_consent() {
	fm = document.consent_form;
	for (i=0; i<fm.consent.length; i++) {
		if (fm.consent[i].checked) {
			if (fm.consent[i].value == "1") {
				fm.next_button.disabled = false;
			} else {
				fm.next_button.disabled = true;
			}
		}
	}
}
</script>


<!-- InstanceEndEditable -->
<meta http-equiv="Content-Style-Type" content="text/css">
<link rel="stylesheet" href="../../css/hnv_bs.css"  type="text/css" media="screen,tv">
<link rel="stylesheet" href="../../css/txt.css"  type="text/css">
<link rel="stylesheet" href="../../css/hnv_2.css"  type="text/css" media="screen,tv">

<!-- InstanceBeginEditable name="head" --><!-- InstanceEndEditable -->
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
			<?= $midashi ?>
			<!-- InstanceEndEditable -->
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

<span class="t">�����٤ϡ����Ҥ�FNX�˴ؿ��򤪴󤻤��������ޤ��Ƥ��꤬�Ȥ��������ޤ���<br>
�������Ƥ�Ʊ�դξ塢���ϥե�����ؤ��ʤߤ���������</span>

	<div class="t" style="width:545px; margin-top:10px; ">
	<div style="padding:10px; background-color:#FFFFFF; border: 2px solid #666666; ">
		<div style="padding:3px; background-color:#999999; color:#FFFFFF; font-weight:bold; ">�Ŀ;���μ谷���ˤĤ���</div>
			<div style="padding-top:5px; ">
			���¤��ꤷ���Ŀ;���ʻ�̾�����ꡦ�����ֹ桦�᡼�륢�ɥ쥹���ˤϡ���������Ū���ϰ���Ǽ�갷�������Ƥ��������ޤ���
					<div style="padding:5px; ">
			�����ҥ����ӥ������ѼԤؤΥ����ӥ��󶡡����������������<br>
			�������ӥ��˴ؤ�뤪�Τ餻�����á����ۡ�͹�����ƣ��ؤ��Żҥ᡼��ˤ��ȯ����<br>
			����������䥢�󥱡��Ȥ��Ф���������ץ쥼��Ȥ�ȯ��<br>
			�����ҤΥ����ӥ��β������Ͽ����ʥ����ӥ��γ�ȯ��Ԥ�����<br>
			���嵭��¾�����ҤαĶȤ˴ؤ���԰� 
			</div>
			���������ǤϷ���ԤȤη��󤬲�����줿��⡢��������Ū�μ»ܤ�ɬ�פ��ϰ���ǸĿ;�������Ѥ����礬����ޤ���
			<br>
			<br>
			��§�Ȥ��ơ����ܿͤξ����ʤ��ˡ��嵭��Ū�ʳ��˸Ŀ;�������Ѥޤ����軰�Ԥ��󶡤�����Ϥ������ޤ��󡣤��������ͥ����������ϸĿ;����谷����̳�ΰ����ޤ������������Ҥδ��Ĥβ��������������뤳�Ȥ�����ޤ����ޤ������ҥ����ӥ��䥻�ߥʡ��ΰ��⤬���פʾ��Ͽ�������������С������󶡤���ߤ����Ƥ��������ޤ���
			</div>
			<div style="padding-left:40px; margin-top:10px; ">
			�Ŀ;��������Ǥ�ԡ�<br>
			������ҥͥ��������� Ʊ�󥵡��ӥ�ô����Ǥ��<br>
			</div>
			<div style="border:1px dotted #cccccc; border-width:1 0 0 0 ; padding-top:10px; margin-top:10px; ">
			�Ŀ;���μ谷���˴ؤ��뤪��礻����Ӿ���ν�����������ϲ����ޤǤ�Ϣ����������<br>
TEL��0120-458-750 <font color="#cc0000"><br>
</font>E-mail��<a href="mailto:fnxcs@nexway.co.jp">fnxcs@nexway.co.jp</a>
<br><br>
			�ͥ����������Υץ饤�Х����ݥꥷ����<a href="http://www.nexway.co.jp/privacy.html" target="_blank">http://www.nexway.co.jp/privacy.html</a><br>
			�����Ȥ����Ѥˤ����äơ�<a href="http://www.fnx.jp/hnv/basic/how/index.htm" target="_blank">http://www.fnx.jp/hnv/basic/how/index.htm</a>
			</div>
		</div>
	
		<div style="margin-top:10px; ">
		<form name="consent_form" method="post" action="<?= $action ?>">
		<input name="REFERER" type="hidden" value="<?php echo htmlspecialchars($_SERVER['HTTP_REFERER']); ?>">
		<div style="text-align:center; margin-top:5px; ">�Ŀ;���μ�갷���ˤĤ���</div>
		<div style="padding-left:172px; margin-top:5px;">
			<div class="consent_field">
			<input name="consent" type="radio" value="1" onClick="change_consent();" id="consent_1">
			<label for="consent_1">Ʊ�դ���</label>
			</div>	
			<div class="consent_field">
			<input name="consent" type="radio" onClick="change_consent();" value="0" id="consent_0" checked>
			<label for="consent_0">Ʊ�դ��ʤ�</label>
			</div>
			<div style="clear:both; "></div>
		</div>
	
		<div style="text-align:center; margin-top:10px; ">
		<input name="next_button" type="submit" id="next_button" value="���ϲ��̤ؿʤ�">
		</div>
	</form>
	</div>
	</div>


<div class="t" style="margin-top:10px; border:1px dotted #dddddd; padding:10px;">
������<a href="dl.htm">���������������ɥڡ���</a>�ˤơ����������Υ�������ɤ���ǽ�Ǥ������碌�Ƥ�������������
</div>

<div class="t" style="margin-top:10px;">
<script language="JavaScript" type="text/JavaScript">
change_consent();
</script>
<img src="../../img/arrow_sub_back.gif" width="14" height="10" align="absmiddle"><a href="javascript:history.back();">���</a>
</div>


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
