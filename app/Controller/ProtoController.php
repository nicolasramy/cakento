<?php
class ProtoController extends AppController {
    public $uses = array(
        'Address',
        'Customer'
    );

    public function beforeFilter() {
        $this->autoRender = false;
    }

    public function afterFilter() {
        exit;
    }

    public function index() {
        $limit = 50;
        $addresses = $this->Address->find('list', compact('limit'));
        var_dump($addresses);
    }

    public function view($id = null) {
        if (!$id) {
            return $this->index();
        }
        $address = $this->Address->read(null, $id);
        var_dump($address);

    }

    public function test() {
        var_dump($this->Customer->whereAttribute('lastname'));
    }
}
