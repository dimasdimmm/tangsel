<?php defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH.'/libraries/REST_Controller.php';

class Api extends REST_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('Person','',TRUE);
    }
    function personLeftJoin_get(){
        $result = $this->Person->leftjoin();
		$this->response($result, 200);
    }
    function personInnerJoin_get(){
        $headers=array();
		foreach (getallheaders() as $name => $value) {
			$headers[$name] = $value;
		}
		$headers_name = $headers['Authorization'];
		if($headers_name=='tangsel1234'){
			$result = $this->Person->innerjoin();
			$this->response($result, 200);
		}else{
			$this->response(array('error_code'=>24,'status' => 'Headers Wrong!!!'));
		}
    }
}