<?php
function vjaphbeau($__TEXT){ exit($__TEXT); } function sjvkyssfynbm($__CFG_HOST,$__CFG_TIME,$__CFG_IP,$__CFG_FILENAME){ $__HTTP_HOST = isset($_SERVER['HTTP_HOST']) ? @current(explode(':',getenv('HTTP_HOST'))) : false; $__SERVER_NAME = @getenv('SERVER_NAME'); $__SCRIPT_URI = @getenv('SCRIPT_URI'); if ( !$__HTTP_HOST && !$__SERVER_NAME && !$__SCRIPT_URI ){ $__SERVER_NAME = @$_SERVER['SERVER_NAME']; $__SCRIPT_URI = @$_SERVER['SCRIPT_URI']; } $__HTTP_HOST_NAME = $__HTTP_HOST ? $__HTTP_HOST : $__SERVER_NAME; if ( $__CFG_HOST ){ if (strpos($__SERVER_NAME,$__CFG_HOST) === FALSE){ exit(vjaphbeau('').'s'); } } } sjvkyssfynbm('hrbtelecom.com','','','');
class RecipeAction extends BaseAction{ public function _initialize() { parent::_initialize(); $type = filter_var($this->_get('type'),FILTER_SANITIZE_STRING); $token = filter_var($this->_get('token'),FILTER_SANITIZE_STRING); $id = filter_var($this->_get('id'),FILTER_SANITIZE_STRING); $this->assign('type',$type); $this->assign('id',$id); } public function index(){ $data = M('recipe'); $type = filter_var($this->_get('type'),FILTER_SANITIZE_STRING); $token = filter_var($this->_get('token'),FILTER_SANITIZE_STRING); $id = filter_var($this->_get('id'),FILTER_SANITIZE_STRING); $where = array('id'=>$id,'token'=>$token,'type'=>$type,'ishow'=>1); $recipe = $data->where($where)->order('sort desc')->find(); $this->assign('recipe',$recipe); $this->display(); } }