<?php
/* 
 * Generated by CRUDigniter v3.0 Beta 
 * www.crudigniter.com
 */
 
class ajax extends CI_Controller{

    function __construct()
    {
        parent::__construct();
        
    } 

    /*
     * Listing of ticket
     */
    function index()
    {
        $data['rs']=$this->db->get("test_product")->result_array();
        $this->load->view('ajax',$data);
    }

    function ajaxs()
    {
        
        $this->load->view('HelloWorld');
    }
    
    function get()
    {
        
        //echo "OK";
        echo $this->input->get("id")." ".$this->input->get("val")." ".$this->input->get("name");
    }

    function post()
    {
        
        //echo "OK";
        echo $this->input->post("id")." ".$this->input->post("val")." ".$this->input->post("name");
    }

    function getajax()
    {
        
         echo $this->input->post("id")." ".$this->input->post("name")." ".$this->input->post("nickname");
        
    }

    function getjson()
    {   

        //$data['ticket'] = $this->Ticket_model->get_ticket($id_ticket);
        
         $ar=array(
            "id"=>"001",
            "name"=>"anusorn",
            "surname"=>"database",
            "age"=>"22"

            );
         echo json_encode($ar);
    }

    function add()
    {   

        
        
         $ar=array(
            "product_name"=>$this->input->post("product_name"),
            "price"=>$this->input->post("price")
            

            );
         $this->db->insert("Test_product",$ar);
         echo "ok";
    }

    /*function username_taken()
    {
        $this->load->model('MUser', '', TRUE);
        $username = trim($_POST['username']);
        // if the username exists return a 1 indicating true
        if ($this->MUser->username_exists($username)) {
            echo '1';
        }
    }
*/
    
    
}
