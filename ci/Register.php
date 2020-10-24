<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {
     var $data =  array();

    public function __construct(){
        parent::__construct();

        $this->load->database();
        $this->load->helper(array('url','form'));
        $this->load->helper('file');
        $this->load->library('upload');
        $this->load->model('Query_mod');
    }

public function create(){

    //division 
     $division=$this->Query_mod->getDivision();
     $item=[];
     $item['division']=$division;
     $this->load->view('create',$item); 
                        
 if($this->input->post('submit')){
                      
          $this->Query_mod->insert(); //insert query function running...
          redirect(base_url().'index.php/register/list');

}

}           

 
///list page-------------------------

	public function list()
	{	
		$this->load->model('Query_mod');
		$post= $this->Query_mod->getPosts();
		$this->load->view('list',['post'=>$post]);


	}

 //district id=division id
   public function getDistrict(){
   if($this->input->post('id')){

   echo $this->Query_mod->getDistrict($this->input->post('id'));

       }
   }

   //upozila districtId= district id
  public function getUpozila(){
   if($this->input->post('districtId')){

   echo $this->Query_mod->getUpozila($this->input->post('districtId'));

     }
   }


 ///detail table 
   public function detail($id){
   
    $this->data['post']= $this->Query_mod->getDetailPosts($id);
    $this->data['trn']= $this->Query_mod->getDetailTraning($id);
    
     $this->load->view('detail',$this->data);
   // $this->load->view('detail',['post'=>$post]);
   
   }

///delete 
   public function delete($id){
   if( $this->Query_mod->DeletePosts($id)){
     redirect(base_url().'index.php/register/list');
   }else{
    echo "not deleted";
   }
   }

   ///update  getting value table 
   public function update($id){

    //division 
     $division=$this->Query_mod->getDivision();
     $item=[];
     $item['division']=$division;
    
    $post= $this->Query_mod->getSinglePosts($id);
    $this->load->view('update',['post'=>$post,'division'=>$division]);

      if($this->input->post('update')) 
          {
                     
        $this->Query_mod->updatePost($id,$data); //insert query function running...
        redirect(base_url().'index.php/register/list');

          }


   }

  



}

?>