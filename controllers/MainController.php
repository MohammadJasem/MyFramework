<?php

class MainController implements controller
{
    public $Customer;
    public $Order;
    public $OrderItem;
    public $response;
    public $request;
    public function __construct(){
        $this->response = array();
        $this->request = $_POST;
        $this->Customer = new Customer();
        $this->Order = new Order();
        $this->OrderItem = new OrderItem();
    }
//--------------------------------------------------------------//
    public function index(){
        $startDate = date('Y-m-d', strtotime('-30 days'));
        $endDate = date('Y-m-d');
        $totalCustomer = $this->Customer->getCount('customer',$startDate,$endDate);
        $totalCustomerGroup = $this->Customer->getCount('customer',$startDate,$endDate,true);
        $totalOrder = $this->Order->getCount('order',$startDate,$endDate);
        $totalOrderGroup = $this->Order->getCount('order',$startDate,$endDate,true);
        $totalRevenue = $this->OrderItem->getTotalRevenue($startDate,$endDate)[0]['total_revenue'];
        return view('index',[
            'totalCustomer' => $totalCustomer,
            'totalCustomerGroup' => $totalCustomerGroup,
            'totalOrder'   => $totalOrder,
            'totalOrderGroup'   => $totalOrderGroup,
            'totalRevenue'  => $totalRevenue,
            'startDate'  => $startDate,
            'endDate'  => $endDate,
        ]);
    }


    public function create($model, $data){

    }
    public function update($model, $id, $data){

    }
    public function delete($model, $id){

    }

    public function getStatistics(){
        $startDate = $this->request['startDate'];
        $endDate = $this->request['endDate'];
        $totalCustomer = $this->Customer->getCount('customer',$startDate,$endDate);
        $totalCustomerGroup = $this->Customer->getCount('customer',$startDate,$endDate,true);
        $totalOrder = $this->Order->getCount('order',$startDate,$endDate);
        $totalOrderGroup = $this->Order->getCount('order',$startDate,$endDate,true);
        $totalRevenue = $this->OrderItem->getTotalRevenue($startDate,$endDate)[0]['total_revenue'];
        $this->response['totalCustomer'] = $totalCustomer;
        $this->response['totalCustomerGroup'] = $totalCustomerGroup;
        $this->response['totalOrder'] = $totalOrder;
        $this->response['totalOrderGroup'] = $totalOrderGroup;
        $this->response['totalRevenue'] = $totalRevenue;
    }
}