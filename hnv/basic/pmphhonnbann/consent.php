<?php
if (! isset($action)) {
	$action = $_SERVER['REQUEST_URI'];
}
// デフォルト値
if (! isset($midashi)) {
	$midashi = '資料請求：郵送';
}
?><!DOCTYPE HTML PUBLIC "-//W3C//Dtd HTML 4.01 transitional//EN">
<html><!-- InstanceBegin template="/Templates/base_euc.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=euc-jp">
<!-- InstanceBeginEditable name="doctitle" -->
<title>fnx_help</title>


<!--スタイルシートの設定-->
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
  <td align="left"><img src="../../img/top_formovin.gif" alt="for Movin' 　もっと伝わる、新しい道へ" width="250" height="36"></td>
  <td align="right"><a href="http://www.nexway.co.jp/" target="_blank"><img src="../../img/nexway_logo.gif" alt="ネクスウェイのトップページへリンク" width="215" height="36" border="0"></a></td>
 </tr>
</table>

<div style="margin:0;"><!-- #BeginLibraryItem "/Library/head.lbi" --><map name="gmenu" style=" margin:0px; ">
		<area shape="rect" coords="424,81,679,97" href="../ask/index.htm"><area shape="rect" coords="599,5,668,20" href="index.php"><area shape="rect" coords="676,6,743,20" href="../ask/index.htm"><area shape="rect" coords="6,36,158,83" href="../../index.php"></map><img src="../../img/top_header.gif" alt="FAX同報サービス、ネクスウェイのFNX。貴社のビジネスの悩みを解決します。" width="750" height="100" border="0" usemap="#gmenu"><!-- #EndLibraryItem --></div>

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
				<ul style="margin:0px;"><li class="t0"><a href="../../info/bs/index.php">お知らせ</a></li>
				</ul>
				</div>
				<div class="menu">
				<ul style="margin:0px;"><li class="t0"><a href="../../bgn/fnx/index.htm">はじめてのFNX</a></li>
				</ul>
				</div>
				<div class="menu" style="border-width:0px 0px 0px 0px; padding-bottom:0px;">
				<ul style="margin:0px;"><li class="t0"><a href="../../svc/bs/index.htm">サービス別情報</a></li>
				</ul>
				</div>
				<div class="menu_sub">
				<ul style="margin:0px;">
				 <li class="t0"><a href="../../svc/ltype/lt_01.htm">販促Navigator LinkType</a> </li>
				</ul>
				<ul style="margin:0px;">
				 <li class="t0"><a href="../../svc/wtype/wtype_09.htm">販促Navigator WebType</a>  </li>
				</ul>
				<ul style="margin:0px;">
				 <li class="t0"><a href="../../svc/bs/index.htm">FAX一斉同報サービス</a> </li>
				</ul>
				</div>
				<div class="menu" style="border-width:1px 0px 1px 0px;">
				<ul style="margin:0px;"><li class="t0"><a href="../../qa/bs/index.htm">よくあるお問合せ</a></li>
				</ul>
				</div>
				<div class="menu" style="border-width:0px 0px 0px 0px; padding-bottom:0px;">
				<ul style="margin:0px;">
						<li class="t0">FNX活用ノウハウ</li>
				</ul>
				</div>
				<div class="menu_sub">
				<ul style="margin:0px;">
				 <li class="t0"><a href="../../prct/tmpl/index.htm">FAX原稿テンプレート</a> <img src="../../img/icon_uonly.gif" alt="限定"></li>
				</ul>
				<ul style="margin:0px;">
				 <li class="t0"><a href="../../prct/smpl/index.htm">E-mailテキストデザイン</a>  <img src="../../img/icon_uonly.gif" alt="限定"></li>
				</ul>
				<ul style="margin:0px;">
				 <li class="t0"><a href="../../tool/acln/index.htm">重複チェックツール</a> <img src="../../img/icon_uonly.gif" alt="限定"></li>
				</ul>
				<ul style="margin:0px;">
				 <li class="t0"><a href="../../prct/mleader/index.htm">FAX会報バックナンバー</a> <img src="../../img/icon_uonly.gif" alt="限定"></li>
				</ul>
				<ul style="margin:0px;">
				 <li class="t0"><a href="../../prct/sp/index.htm">販促ノウハウ講座</a> <img src="../../img/icon_uonly.gif" alt="限定"></li>
				</ul>
				</div>
				
				<div class="menu" style="border-width:1px 0px 0px 0px; padding-top:5px;padding-bottom:0px;">
				<ul style="margin:0px "><li class="t0">FNXのご利用に関して</li>
				</ul>
				</div>				
				<div class="menu_sub">
				<ul style="margin:0px ">
				 <li class="t0"><a href="../../use/price/index.htm">利用規約・料金</a></li>
				</ul>
				<ul style="margin:0px ">
				 <li class="t0"><a href="../../use/dmnd/index.htm">ご請求について</a></li>
				</ul>
				<ul style="margin:0px ">
				 <li class="t0">
				<a href="../prv/prv_scr.htm">個人情報の取り扱いに関して</a></li>
				</ul>				
				<ul style="margin:0px ">
				 <li class="t0"><a href="../../use/manual/index.htm">マニュアル・<br>
各種書類ダウンロード</a> <img src="../../img/icon_uonly.gif" alt="限定"></li>
				</ul>
				<ul style="margin:0px ">
				 <li class="t0"><a href="../../use/prcd/index.htm">ご移転・FAX移設時の<br>
手続き</a></li>
				</ul>
</div>

<div class="menu" style="border-width:1px 0px 0px 0px; padding-top:5px;padding-bottom:5px;">
		<ul style="margin:0px;"><li class="t0"><a href="../map/index.htm">サイトマップ</a></li>
		</ul>
</div>

<div class="menu" style="border-width:0px 0px 0px 0px; padding-bottom:0px;">
				<ul style="margin:0px;"><li class="t0">資料請求</li>
				</ul>
				</div>
				<div class="menu_sub">
				<ul style="margin:0px;">
				 <li class="t0"><a href="index.php">資料請求（郵送）</a></li>
				</ul>
				<ul style="margin:0px;">
				 <li class="t0"><a href="dl.htm">資料請求（ダウンロード）</a></li>
				</ul>
				</div>
				
<div class="menu" style="margin-top:0px; ">
		<ul style="margin:0px;"><li class="t0"><a href="../ask/index.htm">お問合せ</a></li>
		</ul>
</div>

<div style="padding:5px; margin-top:15px;">
<div style="width:150px;">
<div style="float:left; width:23px; "> <img src="../../img/icon_uonly.gif" alt="限定" width="21" height="11"></div>
<div class="t_sub" style="float:left;width:127;">FNXご利用企業様限定コーナーになります。パスワードがご不明な場合は、お手数ですが<a href="mailto:fnxcs@nexway.co.jp">fnxcs@nexway.co.jp</a>までお問い合わせください。</div>
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

<span class="t">この度は、弊社のFNXに関心をお寄せくださいましてありがとうございます。<br>
下記内容に同意の上、入力フォームへお進みください。</span>

	<div class="t" style="width:545px; margin-top:10px; ">
	<div style="padding:10px; background-color:#FFFFFF; border: 2px solid #666666; ">
		<div style="padding:3px; background-color:#999999; color:#FFFFFF; font-weight:bold; ">個人情報の取扱いについて</div>
			<div style="padding-top:5px; ">
			お預かりした個人情報（氏名・住所・電話番号・メールアドレス等）は、下記の目的の範囲内で取り扱いさせていただきます。
					<div style="padding:5px; ">
			・弊社サービスご利用者へのサービス提供、ご利用料金の請求<br>
			・サービスに関わるお知らせの電話、宅配、郵送、ＦＡＸや電子メールによる発信等<br>
			・資料請求やアンケートに対する資料・プレゼントの発送<br>
			・当社のサービスの改善又は新たなサービスの開発を行うこと<br>
			・上記の他、当社の営業に関する行為 
			</div>
			尚、弊部では契約者との契約が解除された後も、本利用目的の実施に必要な範囲内で個人情報を利用する場合があります。
			<br>
			<br>
			原則として、ご本人の承諾なしに、上記目的以外に個人情報を利用または第三者に提供する事はいたしません。ただし、ネクスウェイは個人情報を取扱う業務の一部または全部を当社の監督の下、外部委託することがあります。また、弊社サービスやセミナーの案内が不要な場合は申請いただければ、情報提供を停止させていただきます。
			</div>
			<div style="padding-left:40px; margin-top:10px; ">
			個人情報管理責任者：<br>
			株式会社ネクスウェイ 同報サービス担当責任者<br>
			</div>
			<div style="border:1px dotted #cccccc; border-width:1 0 0 0 ; padding-top:10px; margin-top:10px; ">
			個人情報の取扱いに関するお問合せおよび情報の修正、削除等は下記までご連絡ください。<br>
TEL：0120-458-750 <font color="#cc0000"><br>
</font>E-mail：<a href="mailto:fnxcs@nexway.co.jp">fnxcs@nexway.co.jp</a>
<br><br>
			ネクスウェイのプライバシーポリシー：<a href="http://www.nexway.co.jp/privacy.html" target="_blank">http://www.nexway.co.jp/privacy.html</a><br>
			サイトご利用にあたって：<a href="http://www.fnx.jp/hnv/basic/how/index.htm" target="_blank">http://www.fnx.jp/hnv/basic/how/index.htm</a>
			</div>
		</div>
	
		<div style="margin-top:10px; ">
		<form name="consent_form" method="post" action="<?= $action ?>">
		<input name="REFERER" type="hidden" value="<?php echo htmlspecialchars($_SERVER['HTTP_REFERER']); ?>">
		<div style="text-align:center; margin-top:5px; ">個人情報の取り扱いについて</div>
		<div style="padding-left:172px; margin-top:5px;">
			<div class="consent_field">
			<input name="consent" type="radio" value="1" onClick="change_consent();" id="consent_1">
			<label for="consent_1">同意する</label>
			</div>	
			<div class="consent_field">
			<input name="consent" type="radio" onClick="change_consent();" value="0" id="consent_0" checked>
			<label for="consent_0">同意しない</label>
			</div>
			<div style="clear:both; "></div>
		</div>
	
		<div style="text-align:center; margin-top:10px; ">
		<input name="next_button" type="submit" id="next_button" value="入力画面へ進む">
		</div>
	</form>
	</div>
	</div>


<div class="t" style="margin-top:10px; border:1px dotted #dddddd; padding:10px;">
※尚、<a href="dl.htm">資料請求ダウンロードページ</a>にて、一部資料のダウンロードが可能です。あわせてご覧ください。
</div>

<div class="t" style="margin-top:10px;">
<script language="JavaScript" type="text/JavaScript">
change_consent();
</script>
<img src="../../img/arrow_sub_back.gif" width="14" height="10" align="absmiddle"><a href="javascript:history.back();">戻る</a>
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
<div class="menu_ft t_sub"><a href="http://www.nexway.co.jp/" target="_blank">会社概要</a> | <a href="http://www.nexway.co.jp/privacy.html" target="_blank">プライバシーポリシー</a> | <a href="../how/index.htm">サイトご利用にあたって</a></div>
<!-- #EndLibraryItem --><!-- #BeginLibraryItem "/Library/foot.lbi" --><!-- #EndLibraryItem --></td>
<td width="1" bgcolor="#000088"><img src="../../img/spacer.gif" width="1" height="5" alt=""></td>
</tr>
</table>
<img src="../../img/spacer.gif" width="1" height="5" alt="">
</center>
</body>
<!-- InstanceEnd --></html>
