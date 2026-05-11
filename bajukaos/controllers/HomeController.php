<?php

require_once 'core/Controller.php';
require_once 'models/Product.php';

class HomeController extends Controller {

    public function index(){

        $product = new Product();

        $data['products'] = $product->getProducts();

        $this->view('index', $data);
    }
}