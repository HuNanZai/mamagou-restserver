<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 15-4-13
 * Time: 上午9:49
 */

include_once APPPATH."libraries/REST_Controller.php";
/**
 * Class Specialsale
 * 专场相关的数据的操作
 */
class Specialsale extends REST_Controller{

    function __construct(){
        parent::__construct();
    }

	/**
	 * 单个的获取
	 *
	 */
	function single_get(){
		if( !$this->get('id') ){
			$this->response(null, 404);
		}
        $this->load->model('specialsale_model');
		$specisalsale = $this->specialsale_model->get( $this->get('id') );
		$this->response($specisalsale, 200);
	}

	/**
	 * 单个更新
	 *
	 */
	function single_post(){
		if( !$this->post('id') ){
			$this->response(null, 404);
		}
	}

	/**
	 * 单个删除
	 *
	 */
	function _single_delete(){

	}

	/**
	 * 单个新增
	 *
	 */
	function _single_put(){

	}
}
