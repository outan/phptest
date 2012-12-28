<?php
	require_once('pmphlib.php');
	if (! isset($rec)) {
		$rec = init_ask();
	}
	$rec['SITE'] = 'support';
	if (! isset($main_message)) {
		$main_message = 'このたびは弊社のサービスにご関心をお寄せいただきありがとうございます。';
	}
	if (! isset($sub_message)) {
		$sub_message = '<span class="t">お手数ですが以下のフォームに必要な情報を入力の上「確認」ボタンを押してください。<br>折り返し弊社よりご連絡・ご回答させていただきます。</span>';
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
<title>FNX資料請求</title>
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
			 FNX資料請求：郵送<!-- InstanceEndEditable -->
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
<input  type="hidden" id="00N10000000ENeb" name="00N10000000ENeb" value="資料請求">
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
             <td align="left" valign="middle" bgcolor="#dddddd" class="t">各種サービスパンフレット</td>
            </tr>
            <tr>
             <td align="left" valign="top" bgcolor="#FFFFFF" class="t">
													<div style="padding:3px; ">
<?php
		$text_material = array();
		if (isset($rec['00N10000000Emth']) && $rec['00N10000000Emth']=='1') {
			array_push($text_material, '<input type="hidden" id="00N10000000Emth" name="00N10000000Emth" value="1"/>FNX販促Navigator');
		}
		if (isset($rec['00N10000000J8lD']) && $rec['00N10000000J8lD']=='1') {
			array_push($text_material, '<input type="hidden" id="00N10000000J8lD" name="00N10000000J8lD" value="1"/>FNXファクシミリ一斉同報サービス');
		}
		if (isset($rec['00N10000000J8lI']) && $rec['00N10000000J8lI']=='1') {
			array_push($text_material, '<input type="hidden" id="00N10000000J8lI" name="00N10000000J8lI" value="1"/>FNX国際サービス');
		}
		if (isset($rec['00N10000000Emtw']) && $rec['00N10000000Emtw']=='1') {
			array_push($text_material, '<input type="hidden" id="00N10000000Emtw" name="00N10000000Emtw" value="1"/>Targeting Data Support（ターゲティング　データ　サポート）');
		}
		echo join('<br />', $text_material);
?>
													</div>
													</td>
            </tr>
            <tr>
             <td align="left" valign="middle" bgcolor="#dddddd" class="t">その他、お役立ち情報</td>
            </tr>
            <tr>
             <td align="left" valign="top" bgcolor="#FFFFFF" class="t">
<?php
		$text_material = array();
		if (isset($rec['00N10000000J8lN']) && $rec['00N10000000J8lN']=='1') {
			array_push($text_material, '<input type="hidden" id="00N10000000J8lN" name="00N10000000J8lN" value="1"/>FAX原稿お助けテンプレート（CD-ROM付）');
		}
		if (isset($rec['00N10000000J8lS']) && $rec['00N10000000J8lS']=='1') {
			array_push($text_material, '<input type="hidden" id="00N10000000J8lS" name="00N10000000J8lS" value="1"/>ワンポイントイラストブック（CD-ROM付）');
		}
		echo join('<br />', $text_material);
?>													</td>
            </tr>
            <tr>
             <td align="left" valign="middle" bgcolor="#dddddd" class="t">サービスについてのご要望をお聞かせください。</td>
            </tr>
            <tr>
             <td align="left" valign="top" bgcolor="#FFFFFF" class="t">
													<div style="padding:3px; ">
<?php
		$text_material = array();
		if (isset($rec['00N10000000J8lX']) && $rec['00N10000000J8lX']=='1') {
			array_push($text_material, '<input type="hidden" id="00N10000000J8lX" name="00N10000000J8lX" value="1"/>サービスのご利用を希望');
		}
		if (isset($rec['00N10000000J8lc']) && $rec['00N10000000J8lc']=='1') {
			array_push($text_material, '<input type="hidden" id="00N10000000J8lc" name="00N10000000J8lc" value="1"/>営業担当者から訪問説明を希望');
		}
		if (isset($rec['00N10000000J8ld']) && $rec['00N10000000J8ld']=='1') {
			array_push($text_material, '<input type="hidden" id="00N10000000J8ld" name="00N10000000J8ld" value="1"/>電話にて説明を希望');
		}
		echo join('<br />', $text_material);
?>													</div>
													</td>
            </tr>
            <tr>
             <td align="left" valign="middle" bgcolor="#DDDDDD" class="t">その他 具体的なお問い合せ・ご相談事項がございましたらご記入ください。</td>
            </tr>
            <tr>
             <td align="left" valign="top" bgcolor="#FFFFFF" class="t">
				<div style="padding:3px; "><?php echo brhtml($rec['00N10000000EMaT']); ?>
				<input type="hidden" name="00N10000000EMaT" value="<?php echo html($rec['00N10000000EMaT']); ?>">
				</div>
             </td>
            </tr>
           </table>
           <!--サービスについての質問、これまで-->
         </td>
        </tr>
       </table>
       <table width="100%" border="0" cellspacing="0" cellpadding="3">
        <tr>
         <td align="left" valign="middle" bgcolor="#9999FF" class="t"><strong><font color="#FFFFFF">▼</font> 送付先をご記入ください。</strong></td>
        </tr>
       </table>
       <table width="100%" border="0" cellspacing="0" cellpadding="1">
        <tr>
         <td align="center" valign="middle" bgcolor="#000066">
			<div class="t" style=" padding:4px; background-color:#990000; color:#FFFFFF;">※確実に資料をお届けするために必須項目は必ずご記入ください。</div>
			<table width="100%" border="0" cellspacing="1" cellpadding="5" >
				<tr bgcolor="#FFCCCC" align="LEFT" valign="TOP">
					<td nowrap class="t">お名前<font color="#CC3300">※必須 </font></td>
					<td width="100%" class="conf">
						<input name="last_name" type="hidden" id="last_name" value="<?php echo html($rec['last_name']); ?>">
						<?php echo html($rec['last_name']); ?> <font color="#666666" class="t_sub">　</font></td>
				</tr>
				<tr align="LEFT" valign="TOP" bgcolor="#EEEEEE">
					<td nowrap class="t">フリガナ</td>
					<td class="conf">
						<input name="00N10000000EMgY" type="hidden" id="00N10000000EMgY" value="<?php echo html($rec['00N10000000EMgY']); ?>">
						<?php echo html($rec['00N10000000EMgY']); ?> <font color="#666666" class="t_sub">　</font></td>
				</tr>
				<tr bgcolor="#FFCCCC" align="LEFT" valign="TOP">
					<td nowrap class="t">貴社名<font color="#CC3300"> ※必須 </font></td>
					<td class="conf">
						<input name="company" type="hidden" id="company" value="<?php echo html($rec['company']); ?>">
						<?php echo html($rec['company']); ?> <font color="#666666" class="t_sub">　</font></td>
				</tr>
				<tr align="LEFT" valign="TOP" bgcolor="#EEEEEE">
					<td nowrap class="t">部署名</td>
					<td class="conf">
						<input name="00N10000000E8JK" type="hidden" id="00N10000000E8JK" value="<?php echo html($rec['00N10000000E8JK']); ?>">
						<?php echo html($rec['00N10000000E8JK']); ?> <font color="#666666" class="t_sub">　</font></td>
				</tr>
				<tr align="LEFT" valign="TOP" bgcolor="#EEEEEE">
					<td nowrap class="t">役職</td>
					<td class="conf">
						<input name="title" type="hidden" id="title" value="<?php echo html($rec['title']); ?>">
						<?php echo html($rec['title']); ?> <font color="#666666" class="t_sub">　</font></td>
				</tr>
				<tr bgcolor="#FFCCCC" align="LEFT" valign="TOP">
					<td nowrap class="t">郵便番号 <font color="#CC3300">※必須 </font></td>
					<td class="conf">
						<input name="zip" type="hidden" id="zip" value="<?php echo html($rec['zip']); ?>">
						<?php echo html($rec['zip']); ?> <font color="#666666" class="t_sub">　</font></td>
				</tr>
				<tr bgcolor="#FFCCCC" align="LEFT" valign="TOP">
					<td nowrap class="t">ご住所 <font color="#CC3300">※必須 </font></td>
					<td class="conf">
						<input name="street" type="hidden" id="street" value="<?php echo html($rec['street']); ?>">
						<?php echo html($rec['street']); ?></td>
				</tr>
				<tr bgcolor="#FFCCCC" align="LEFT" valign="TOP">
					<td nowrap class="t">メールアドレス <font color="#CC3300">※必須 </font></td>
					<td class="conf">
						<input name="email" type="hidden" id="email" value="<?php echo html($rec['email']); ?>">
						<?php echo html($rec['email']); ?> </td>
				</tr>
				<tr bgcolor="#FFCCCC" align="LEFT" valign="TOP">
					<td nowrap class="t">お電話番号<font color="#CC3300"> ※必須 </font></td>
					<td class="conf">
						<input name="phone" type="hidden" id="phone" value="<?php echo html($rec['phone']); ?>">
						<?php echo html($rec['phone']); ?> <font color="#666666" class="t_sub">　</font></td>
				</tr>
				<tr bgcolor="#FFCCCC" align="LEFT" valign="TOP">
					<td nowrap class="t">FAX番号<font color="#CC3300"> ※必須 </font></td>
					<td class="conf">
						<input name="fax" type="hidden" id="fax" value="<?php echo html($rec['fax']); ?>">
						<?php echo html($rec['fax']); ?> <font color="#666666" class="t_sub"> 　</font></td>
				</tr>
			</table>
         </td>
        </tr>
       </table>
       <table width="100%" cellspacing="0" cellpadding="10" border="0">
        <tr align="center">
         <td><input type="submit" value="送信" name="submit">
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
<div class="menu_ft t_sub"><a href="http://www.nexway.co.jp/" target="_blank">会社概要</a> | <a href="http://www.nexway.co.jp/privacy.html" target="_blank">プライバシーポリシー</a> | <a href="../how/index.htm">サイトご利用にあたって</a></div>
<!-- #EndLibraryItem --><!-- #BeginLibraryItem "/Library/foot.lbi" --><!-- #EndLibraryItem --></td>
<td width="1" bgcolor="#000088"><img src="../../img/spacer.gif" width="1" height="5" alt=""></td>
</tr>
</table>
<img src="../../img/spacer.gif" width="1" height="5" alt="">
</center>
</body>
<!-- InstanceEnd --></html>