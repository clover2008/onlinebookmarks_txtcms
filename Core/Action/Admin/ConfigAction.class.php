<?php
/**
 * TXTCMS ��վ����ģ��
 * @copyright			(C) 2013-2014 TXTCMS
 * @license			http://www.txtcms.com
 * @lastmodify			2014-8-28
 */
class ConfigAction extends AdminAction {
	public $confile;
	public function _init(){
		parent::_init();
		$this->confile=TEMP_PATH.'config.php';
	}
	//��ʾģ��
	public function index(){
		$theme_list=array();
		$tplpath=TMPL_PATH;
		$dirarr=scandirs($tplpath);
		foreach($dirarr as $k=> $file){
			if(is_dir($tplpath.$file) && $file!='.' && $file!='..' ){
				$theme_list[$k]['dir']=$dirarr[$k];
			}
		}
		$this->assign('themelist',$theme_list);
		$this->display();
	}
	//��������
	public function update(){
		$config = $_POST["con"];
		foreach( $config as $k=> $v ){
			$config[$k]=trim($config[$k]);
			$config[$k]=get_magic($config[$k]);
		}
		$ajax=array();
		if(!preg_match("#http://[^/]+/$#",$config['web_url'])){
			$ajax['status']=0;
			$ajax['info']='��վ��ַ��ʽ����ȷ';
			$this->ajaxReturn($ajax);
		}else{
			$ajax['status']=1;
		}
		//�滻·��
		$config['web_url_route']=array();
		$config['web_url_route']['list']=str_replace(array('{id}','{page}','/'),array('(\\d+)','(\\d+)','\\/'),$config['web_url_route_list']);
		$config['web_url_route']['list_p']=str_replace(array('{id}','{page}','/'),array('(\\d+)','(\\d+)','\\/'),$config['web_url_route_list_p']);
		$config['web_url_route']['show']=str_replace(array('{id}','{page}','/'),array('(\\d+)','(\\d+)','\\/'),$config['web_url_route_show']);
		$config['web_url_route']['show_p']=str_replace(array('{id}','{page}','/'),array('(\\d+)','(\\d+)','\\/'),$config['web_url_route_show_p']);

		$config_old = require $this->confile;
		$config_new =array_merge($config_old,$config);
		ksort($config_new);
		arr2file($this->confile,$config_new);
		$this->ajaxReturn($ajax);
	}
}