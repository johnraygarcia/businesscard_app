<?php
class ContactModel extends CI_Model {

    var $FirstName   = '';
    var $LastName = '';
    var $Phone = '';
    var $Email = '';
    var $Address    = '';
    var $City    = '';
    var $State= '';
    var $Zipcode    = '';

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    
    function get_last_entry($filters) {
        $query = $this->db->get_where('Contact',$filters, 1);
        return $query->result();
    }
    
    function get_last_ten_entries()
    {
        $query = $this->db->get('contact', 10);
        return $query->result();
    } 
    
    function get_by_id($id) {
        $query = $this->db->get_where('contact', array('id' => $id));
        return $query->result();
    }

    function insert_entry()
    {
        $this->FirstName     = $_POST['FirstName'];
        $this->LastName     = $_POST['LastName'];
        $this->Phone        = $_POST['Phone'];
        $this->Email        = $_POST['Email'];
        $this->Address      = $_POST['Address'];
        $this->City         = $_POST['City'];
        $this->State        = $_POST['State'];
        $this->Zipcode      = $_POST['Zipcode'];
        $this->db->insert('contact', $this);
        $filters = array('FirstName' => $this->FirstName, 'LastName' => $this->LastName);
        $record = $this->get_last_entry($filters);
        if($record) {
            return $record;
        }
        return false;
    }

}