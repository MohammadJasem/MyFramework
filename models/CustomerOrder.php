<?php

Abstract class CustomerOrder extends model
{
    //--------------------------------------------------------//
    public function __construct(){
        parent::__construct();
    }
//--------------------------------------------------------//
    public function getCount($table, $startDate='', $endDate='', $group=false){
        if($table=='customer')
            $date='create_date';
        else
            $date='purchase_date';
        if($group) {
            $this->db->select($table, 'Date('.$date.') as '.$date.',  COUNT('.$date.') as count', ''.$date.' between \'' . $startDate . '\' and \'' . $endDate . '\'', '', '', '', 'date('.$date.')');
            return $this->db->result_array();
        }else
            return $this->db->num($table,$date.' between \''.$startDate.'\' and \''.$endDate.'\'');
    }
//--------------------------------------------------------//
    public abstract function getCustomData();
}