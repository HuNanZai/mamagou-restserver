<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 15-4-13
 * Time: 上午9:49
 */

/**
 * Class Specialsale
 * 专场相关的数据的操作
 */
class Specialsale extends REST_Controller{

    function __construct(){
        parent::__construct();

        $this->load->model('specialsale_model');
    }

    function multi(){

	}

    function single(){
		if( $this->get('id') ){
			$this->_single_get();
		}
    }

	/**
	 * 单个的获取
	 *
	 */
	function _single_get(){
		if( !$this->get('id') ){
			$this->response(null, 404);
		}
		$specisalsale = @$this->specialsale_model->get( $this->get('id') );
		$this->response($specisalsale, 200);
	}

	/**
	 * 单个更新
	 *
	 */
	function _single_post(){

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