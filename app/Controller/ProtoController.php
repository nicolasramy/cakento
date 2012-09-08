<?php
class ProtoController extends AppController {
    public $uses = array(
        'Product'
    );

    public function index() {
        $products = $this->Product->info(1);
        var_dump($products);
        exit;
    }
}
