<?php 

//session
//$user = MOdel::find_by_id($_SESSION['user_id']);

/* Location: ./src/controllers/Landing.php */
//include_once('src/models/model.php');

class Landing {
    
    //Constructor
    public function __construct() {
        parent::__construct();
        $this->load->model('model');
    }

    //Load the landing_view
    public function index() {
        $this->load->view('landing_view');
    }
      
    //Form validation
    public function read_story() {
        $this->load->library("form_validation");
        
        $this->form_validation->set_rules('phrase', 'required');
        
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('landing_view');
        } else {
            $this->load->view('landing_view');
        }
    }   
    
    //Get Top 10 Highest Rated
    public function getHighestRated() {
        
    }
    
    //Get Top 10 Most Viewed
    public function getMostViewed() {
        
    }
    
    //Get Top 10 Newest
    public function getNewest() {
        
    }
     
}

?>