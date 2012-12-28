<?php
	/**
	 * webapp.php
	 *
	 * �ᥤ��¹ԥե�����Ǥ����֥饦������ľ�ܸƤӽФ����Τ�
	 * ����PHP������ץȤǤ���
	 *
	 **/

	ini_set('mbstring.http_input', 'pass');
	ini_set('mbstring.http_output', 'pass');

	ini_set('display_errors', 'On');
	ini_set('error_reporting',E_ERROR | E_WARNING | E_PARSE);
	


	// �ե졼�����롼��
	define("MISC_DIR", 						'../../../../application', FALSE);

	define("CLASSES_DIR", MISC_DIR .  		'/classes', FALSE);
	define("APP_DIR", CLASSES_DIR . 		'/pmph', FALSE);
	define("LIB_DIR", MISC_DIR . 			'/lib', FALSE);
	define("COMMON_DIR", LIB_DIR . 			'/common', FALSE);
	define("BASES_DIR", LIB_DIR . 			'/bases', FALSE);
	define("TEMPLATE_DIR", MISC_DIR . 		'/template', FALSE);
	define("TEMPORARY_DIR", MISC_DIR . 		'/tmp', FALSE);
	define("DATA_DIR", MISC_DIR . 			'/data', FALSE);


	// ���
	require_once LIB_DIR . '/const.inc';

	// �١������饹
	require_once BASES_DIR . '/CBaseObject.inc';
	require_once BASES_DIR . '/CBaseTagTemplate.inc';
	require_once BASES_DIR . '/CBaseWebappDispatch.inc';
	require_once BASES_DIR . '/CBaseWebappLogic.inc';
	require_once BASES_DIR . '/CBaseWebappView.inc';
	require_once BASES_DIR . '/CBaseWebappLabyrinthos.inc';

	// ������֥١������饹
	require_once CLASSES_DIR . '/CCommonWebappDispatch.inc';
	require_once CLASSES_DIR . '/CCommonWebappLogic.inc';
	require_once CLASSES_DIR . '/CCommonWebappView.inc';
	require_once CLASSES_DIR . '/CCommonWebappLabyrinthos.inc';
	require_once CLASSES_DIR . '/CCommonTagTemplate.inc';

	// ������֥١������饹
	require_once APP_DIR . '/CWebappDispatch.inc';
	require_once APP_DIR . '/CWebappLogic.inc';
	require_once APP_DIR . '/CWebappView.inc';
	require_once APP_DIR . '/CWebappLabyrinthos.inc';
	require_once APP_DIR . '/CTagTemplate.inc';
	require_once APP_DIR . '/sub_cmn.inc';


	// ���̥桼�ƥ���ƥ�
	require_once COMMON_DIR . '/cmn_util.inc';
	require_once COMMON_DIR . '/CConfigFile.inc';
	require_once COMMON_DIR . '/CMailSend.inc';
	require_once COMMON_DIR . '/CMailSendEx.inc';
	require_once COMMON_DIR . '/CHidden.inc';
	require_once COMMON_DIR . '/mail_func.inc';
	require_once COMMON_DIR . '/WA_Auth.inc';


	// ����ƥ����ȼ���
	$path_info = $_SERVER['PATH_INFO'];
	$path_info = ereg_replace("^/", "", $path_info);
	$path_info = ereg_replace("/$", "", $path_info);
	$ctx_array = split("/", $path_info);
	$name_task = $ctx_array[0];
	$name_module = $ctx_array[1];

	// ---------------------------------------------------------------
	// �⥸�塼��������� �ǥե���ȥ���ƥ�����

	require_once APP_DIR . '/modules.inc';
	// ---------------------------------------------------------------

	// �⥸�塼��ʤ����
	if(Mis_empty($DISPATCH_CLASS_NAMES[$name_task][$name_module]) == 1)
	{
		issue_404();
		exit;
	}


	// ������̾���⥸�塼��̾���ե饰���Ǽ
	// �ե饰�ϡ����ƥ���Τ褦�ʻȤ����ǡ�DB��³�����䥻�å����ξ�ά�ʤɤ�
	// �����櫓�����Ѥ���

	$g_name_task = $name_task;
	$g_name_module = $name_module;
	$ltmpar = split(';', $DISPATCH_CLASS_NAMES[$name_task][$name_module]);
	if(is_array($ltmpar))
	{
		$g_name_flgmark = $ltmpar[1];
	}else{
		$g_name_flgmark = "";
	}

	// ���å�����Ϣ
	require_once(COMMON_DIR . '/session.inc');

	// �ǡ����١�����Ϣ
	require_once(COMMON_DIR . '/db.inc');
	

	// �⥸�塼��ƤӽФ�
	$dispatcher = new CWebappDispatch($name_task, $name_module);
	$ariadne = $dispatcher->dispatchTest();
	$context = $dispatcher->dispatchLogic();

	// ����������쥯��
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