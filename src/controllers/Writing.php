<?php

/* Location: ./src/controllers/Reading.php */
include_once('src/models/model.php');

class Writing {
    
    //Constructor
    public function __construct() {
        parent::__construct();
        $this->load->model('model');
    }

    //Load the landing_view
    public function index() {
        $this->load->view('writing_view');
    }
}