<?php
	/**
	 * webapp.php
	 *
	 * メイン実行ファイルです。ブラウザから直接呼び出されるのは
	 * このPHPスクリプトです。
	 *
	 **/

	ini_set('mbstring.http_input', 'pass');
	ini_set('mbstring.http_output', 'pass');

	ini_set('display_errors', 'On');
	ini_set('error_reporting',E_ERROR | E_WARNING | E_PARSE);
	


	// フレームワークルート
	define("MISC_DIR", 						'../../../../application', FALSE);

	define("CLASSES_DIR", MISC_DIR .  		'/classes', FALSE);
	define("APP_DIR", CLASSES_DIR . 		'/pmph', FALSE);
	define("LIB_DIR", MISC_DIR . 			'/lib', FALSE);
	define("COMMON_DIR", LIB_DIR . 			'/common', FALSE);
	define("BASES_DIR", LIB_DIR . 			'/bases', FALSE);
	define("TEMPLATE_DIR", MISC_DIR . 		'/template', FALSE);
	define("TEMPORARY_DIR", MISC_DIR . 		'/tmp', FALSE);
	define("DATA_DIR", MISC_DIR . 			'/data', FALSE);


	// 定数
	require_once LIB_DIR . '/const.inc';

	// ベースクラス
	require_once BASES_DIR . '/CBaseObject.inc';
	require_once BASES_DIR . '/CBaseTagTemplate.inc';
	require_once BASES_DIR . '/CBaseWebappDispatch.inc';
	require_once BASES_DIR . '/CBaseWebappLogic.inc';
	require_once BASES_DIR . '/CBaseWebappView.inc';
	require_once BASES_DIR . '/CBaseWebappLabyrinthos.inc';

	// 共通中間ベースクラス
	require_once CLASSES_DIR . '/CCommonWebappDispatch.inc';
	require_once CLASSES_DIR . '/CCommonWebappLogic.inc';
	require_once CLASSES_DIR . '/CCommonWebappView.inc';
	require_once CLASSES_DIR . '/CCommonWebappLabyrinthos.inc';
	require_once CLASSES_DIR . '/CCommonTagTemplate.inc';

	// 個別中間ベースクラス
	require_once APP_DIR . '/CWebappDispatch.inc';
	require_once APP_DIR . '/CWebappLogic.inc';
	require_once APP_DIR . '/CWebappView.inc';
	require_once APP_DIR . '/CWebappLabyrinthos.inc';
	require_once APP_DIR . '/CTagTemplate.inc';
	require_once APP_DIR . '/sub_cmn.inc';


	// 共通ユーティリティ
	require_once COMMON_DIR . '/cmn_util.inc';
	require_once COMMON_DIR . '/CConfigFile.inc';
	require_once COMMON_DIR . '/CMailSend.inc';
	require_once COMMON_DIR . '/CMailSendEx.inc';
	require_once COMMON_DIR . '/CHidden.inc';
	require_once COMMON_DIR . '/mail_func.inc';
	require_once COMMON_DIR . '/WA_Auth.inc';


	// コンテキスト取得
	$path_info = $_SERVER['PATH_INFO'];
	$path_info = ereg_replace("^/", "", $path_info);
	$path_info = ereg_replace("/$", "", $path_info);
	$ctx_array = split("/", $path_info);
	$name_task = $ctx_array[0];
	$name_module = $ctx_array[1];

	// ---------------------------------------------------------------
	// モジュール定義配列 デフォルトコンテキスト

	require_once APP_DIR . '/modules.inc';
	// ---------------------------------------------------------------

	// モジュールない場合
	if(Mis_empty($DISPATCH_CLASS_NAMES[$name_task][$name_module]) == 1)
	{
		issue_404();
		exit;
	}


	// タスク名／モジュール名／フラグを格納
	// フラグは、カテゴリのような使い方で、DB接続処理やセッションの省略などの
	// 処理わけに利用する

	$g_name_task = $name_task;
	$g_name_module = $name_module;
	$ltmpar = split(';', $DISPATCH_CLASS_NAMES[$name_task][$name_module]);
	if(is_array($ltmpar))
	{
		$g_name_flgmark = $ltmpar[1];
	}else{
		$g_name_flgmark = "";
	}

	// セッション関連
	require_once(COMMON_DIR . '/session.inc');

	// データベース関連
	require_once(COMMON_DIR . '/db.inc');
	

	// モジュール呼び出し
	$dispatcher = new CWebappDispatch($name_task, $name_module);
	$ariadne = $dispatcher->dispatchTest();
	$context = $dispatcher->dispatchLogic();

	// 内部リダイレクト
	if($context['_redirect'] == 1)
	{
		$name_task = $context['_task'];
		$name_module = $context['_module'];
		$g_name_task = $name_task;
		$g_name_module = $name_module;

		$dispatcher = new CWebappDispatch($name_task, $name_module);
	}

	$dispatcher->dispatchView($context);
	exit;


?>