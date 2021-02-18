<?php

class OrderItem extends model{
//--------------------------------------------------------//
    public function __construct(){
        parent::__construct();
    }
//--------------------------------------------------------//
    public function getTotalRevenue($startDate='', $endDate=''){
        $this->db->select('order_item','COALESCE(sum(quantity*price),0) as total_revenue','create_date between \''.$startDate.'\' and \''.$endDate.'\'');
        return $this->db->result_array();
    }
}