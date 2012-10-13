<?php
class ProtoController extends AppController {
    public $uses = array(
        'Box'
    );

    public function index() {
        $boxes = $this->Box->info(1);
        var_dump($boxes);
        exit;
    }
}
