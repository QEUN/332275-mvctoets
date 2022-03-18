<?php
class Fruits extends Controller {
    public function __construct() {
        $this->fruitModel = $this->model('Fruit');
    }

    public function index() {
        $fruitData = $this->fruitModel->getFruits();
        $data = [
            'title' => 'Home page',
            'fruitData' => $fruitData
        ];

        $this->view('fruits/index', $data);
    }
}
