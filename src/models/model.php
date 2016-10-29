<?php

/**
 *COPYRIGHT (C) 2016. All Rights Reserved.
 *CS174 - Assignment 3
 * @author Jatinder Verma, Ladimer Elyeh, Brandon
*/

//Start a session
session_start();

$_SESSION['user'] = ''



//Namespace
namespace Codepunker\App\Model;    
    
class Model {
    
    //Constructor
    public function __construct() {
        parent::__construct();
    }
    
    //Get user by ID
	function get_user_by_id($id) {
		$this->db->where('user_id', $id);
		$query = $this->db->get('user');
		return $query->result();
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