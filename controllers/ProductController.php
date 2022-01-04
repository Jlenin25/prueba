<?php

class ProductController extends Controller {
    public function __construct() {
        parent::__construct();
    }
    public function index() {
        $this->view->render('admin/product/index');
    }
    public function create() {
        $this->view->render('admin/product/create');
    }
    public function edit() {
        $this->view->render('admin/product/edit');
    }
}