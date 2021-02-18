<?php

interface controller{
    public function __construct();
	public function index();
    public function create($model, $data);
    public function update($model, $id, $data);
    public function delete($model, $id);
}