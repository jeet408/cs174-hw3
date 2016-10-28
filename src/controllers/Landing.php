<?php 

/* Location: ./src/controllers/Landing.php */


class Landing {
    
    //Constructor
    public function __construct() {
    }
    
    //Load the landing_view
    function index() {
        $this->load->view('landing_view');
    }
      
    //Form validation
    function read_story() {
        $this->load->library("form_validation");
        
        $this->form_validation->set_rules('phrase', 'required');
        
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('landing_view');
        } else {
            $this->load->view('landing_view');
        }
    }    
}

?>