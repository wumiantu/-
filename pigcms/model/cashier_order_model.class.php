<?php 
bpBase::loadSysClass('model', '', 0);
class cashier_order_model extends model {
	public function __construct() 
	{
		$this->table_name = 'cashier_order';parent::__construct();
	}
	

	public function getOrders($limit='',$orderby='',$where='1=1'){
	   $datas=$this->select($where, '*', $limit, $orderby); 
	   return $datas;
	}

	public function  getOneOrder($where='1=1'){
	  return $this->get_one($where, '*'); 
	}
} 
?>