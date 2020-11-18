<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Query_mod extends CI_Model {



//this function will save a record in database
public function insert()
	{
                 $data=array(
                      'username'=>$this->input->post('username'),
                      'email'=>$this->input->post('email'),
                      'address'=>$this->input->post('address'),
                      'mobile'=>$this->input->post('mobile'),
                      'division'=>$this->input->post('division'),
                      'district'=>$this->input->post('district'),
                      'upozila'=>$this->input->post('upozila'),
                      'language'=>$this->input->post('language'),
                      'sscversity'=>$this->input->post('sscversity'),
                      'sscboard'=>$this->input->post('sscboard'),
                      'sscresult' =>$this->input->post('sscresult'),
                      'hscversity' =>$this->input->post('hscversity'),
                      'hscboard'=>$this->input->post('hscboard'),
                      'hscresult' =>$this->input->post('hscresult'),
                      'gdversity' =>$this->input->post('gdversity'),
                      'gdboard' =>$this->input->post('gdboard'),
                      'gdresult' =>$this->input->post('gdresult'),
                      'msversity' =>$this->input->post('msversity'),
                      'msboard' =>$this->input->post('msboard'),
                      'msresult' =>$this->input->post('msresult')
                    );


        				 $this->db->insert('registertable3',$data);
        				 $last_id = $this->db->insert_id();


///image insertion-------------------

				        $upload_path = './uploads/'.$last_id;

				        if(!is_dir($upload_path)) {
		            mkdir($upload_path, 0777,true);
		             }

             
                
                if ( (!empty($_FILES['image']['name'])) && (!empty($_FILES['file']['name'] )) )
                {
                  //file1 upload 
                  $config['upload_path']  = $upload_path;
                  $config['allowed_types'] = 'gif|jpg|png';
                  $this->load->library('upload', $config);
                  $this->upload->initialize($config);


                  $this->upload->do_upload('image');                
                  $data1=$this->upload->data();
                  $file1=$data1['file_name'];
                  

                  //file 2 upload 
                  $config['upload_path']   = $upload_path;
                  $config['allowed_types']  = 'doc|docx';
                  $this->load->library('upload', $config);
                  $this->upload->initialize($config);

                  $this->upload->do_upload('file');
                  $data2=$this->upload->data();
                  $file2=$data2['file_name'];




                  // database file1 file2  insert 
                  $data = array('image' => $file1,'file' => $file2);
                  $this->db->where('id', $last_id );
                  $this->db->update('registertable3', $data);
    
                }

        
	
///training part--------------------------------
 $training_name =$this->input->post('training_name');
 $organization =$this->input->post('organization');
 $details=$this->input->post('details');
 

  $items = array();
	 $size = count($training_name);	
     for($i = 0 ; $i < $size ; $i++){
  	 $items = array(

		   	 "ref_master_id" =>  $last_id ,
		      "training_name" => $training_name[$i], 
		      "organization" => $organization[$i], 
		      "details"=> $details[$i]
   ); 	
    $this->db->insert('training2',$items); 
 }

	}



///List fetching table page-----------------
	public function getPosts($limit,$offset)
	{
		$query=$this->db->select('registertable3.*,division_tab.division_name,district_tab.district_name,upozila_tab.upozila_name')
				->from('registertable3')
				->join('division_tab','division_tab.id = registertable3.division','left')
				->join('district_tab','district_tab.id = registertable3.district','left')
				->join('upozila_tab','upozila_tab.id = registertable3.upozila','left')
        ->limit($limit,$offset)
				->get();

		if($query->num_rows() >0){
			return $query->result();
		} 
	}

//pagination---------------
public function get_num_rows(){
  $query= $this->db->get('registertable3');
  return $query->num_rows();
}

//search page---------------

public function search_Recorde($query){
  
    $this->db->select(['registertable3.id','registertable3.username','registertable3.email','division_tab.division_name','district_tab.district_name','upozila_tab.upozila_name']);
    $this->db->from('registertable3');
    $this->db->join('division_tab','division_tab.id = registertable3.division','left');
    $this->db->join('district_tab','district_tab.id = registertable3.district','left');
    $this->db->join('upozila_tab','upozila_tab.id = registertable3.upozila','left');
    $this->db->like('username', $query);
    $this->db->or_like('email',$query);
    $user=$this->db->get();
    return $user->result();
  
}

///List fetching table division_tab-----------------
public function getDivision(){
	$division=$this->db->get('division_tab')->result_array();
	return $division;
}

///List fetching table district_tab-----------------
public function getDistrict($divisionId){

	$this->db->where('divi_id',$divisionId);
	$district=$this->db->get('district_tab');
	$output='<option value="">Select an option</option>';
    
    foreach ($district->result() as $dis) {
    	$output.='<option value="'.$dis->id.'">'.$dis->district_name.'</option>';
    }
    return $output;
}

///List fetching table district_tab-----------------
public function getUpozila($divisionId){

	$this->db->where('dis_id',$divisionId);
	$upozila=$this->db->get('upozila_tab');
	$output='<option value="">Select an option</option>';
    
    foreach ($upozila->result() as $upo) {
    	$output.='<option value="'.$upo->id.'">'.$upo->upozila_name.'</option>';
    }
    return $output;
}



///detail query

public function getDetailPosts($id){
	$query=$this->db->select('registertable3.*,division_tab.division_name,district_tab.district_name,upozila_tab.upozila_name')
				->from('registertable3')
				->where('registertable3.id',$id)
				->join('division_tab','division_tab.id = registertable3.division','left')
				->join('district_tab','district_tab.id = registertable3.district','left')
				->join('upozila_tab','upozila_tab.id = registertable3.upozila','left')
				->get();
	if($query->num_rows()>0){
		return $query->row(); // result
	}	

}


public function getDetailTraning($id){
	$query=$this->db->select('*')
					->from('training2')
					->where('ref_master_id',$id)
					->get();
	if($query->num_rows()>0){
		return $query->result(); // result
	}	

}

///delete query----------
public function DeletePosts($id){
	return $this->db->delete('registertable3', ['id'=>$id]);
}

///update getting the value by get method...

public function getSinglePosts($id){
 $query=$this->db->select('registertable3.*,division_tab.division_name,district_tab.district_name,upozila_tab.upozila_name')
        ->from('registertable3')
        ->join('division_tab','division_tab.id = registertable3.division','left')
        ->join('district_tab','district_tab.id = registertable3.district','left')
        ->join('upozila_tab','upozila_tab.id = registertable3.upozila','left')
        ->where('registertable3.id',$id)
        ->get();
  if($query->num_rows()>0){
    return $query->row();

}
}

//update query data 
public function updatePost($id){



   $data=array(        
                      'username'=>$this->input->post('username'),
                      'email'=>$this->input->post('email'),
                      'address'=>$this->input->post('address'),
                      'mobile'=>$this->input->post('mobile'),
                      'division'=>$this->input->post('division'),
                      'district'=>$this->input->post('district'),
                      'upozila'=>$this->input->post('upozila'),
                      'language'=>$this->input->post('language'),
                      'sscversity'=>$this->input->post('sscversity'),
                      'sscboard'=>$this->input->post('sscboard'),
                      'sscresult' =>$this->input->post('sscresult'),
                      'hscversity' =>$this->input->post('hscversity'),
                      'hscboard'=>$this->input->post('hscboard'),
                      'hscresult' =>$this->input->post('hscresult'),
                      'gdversity' =>$this->input->post('gdversity'),
                      'gdboard' =>$this->input->post('gdboard'),
                      'gdresult' =>$this->input->post('gdresult'),
                      'msversity' =>$this->input->post('msversity'),
                      'msboard' =>$this->input->post('msboard'),
                      'msresult' =>$this->input->post('msresult'),
                      // 'image'=>"",
                      // 'file'=>""
                    );
            $update=$this->db->where('id',$id)
            ->update('registertable3',$data);

        
  // $upimg=$this->db->select('*')
  //         ->from('registertable3')
  //         ->where('id',$id)
  //         ->get();
  // if($upimg->num_rows()>0){
  //  $image= $upimg->row(); // result

  // }
           
             
///image insertion-------------------
               
              $upload_path = './uploads/'.$id.'/'; 

               // if(file_exists($upload_path))
               //      {
               //       unlink($upload_path,true);
               //    // print_r($upload_path.$image->image);
               //    //         exit();
               //      }

                $config['upload_path']  = $upload_path;

                $config['allowed_types'] = 'gif|jpg|png';
                $this->load->library('upload', $config);
                $this->upload->initialize($config);

                if (!empty($_FILES['image']['name']))
                {
                  $this->upload->do_upload('image');
                
                  $data1=$this->upload->data();
                  $file1=$data1['file_name'];
    
                }

               
                $config['upload_path']   = $upload_path;
                $config['allowed_types']  = 'doc|docx';
                $this->load->library('upload', $config);
                $this->upload->initialize($config);

                if (!empty($_FILES['file']['name'] ))
                {
                  $this->upload->do_upload('file');
                  
                  $data2=$this->upload->data();

                  $file2=$data2['file_name'];

                  
    $data = array('image' => $file1,'file' => $file2);
    $this->db->where('id', $id );
    $this->db->update('registertable3', $data);


                  }else{

                  echo "not updated";

       }



///training part--------------------------------
  $this->db->delete('training2', ['ref_master_id'=>$id]);          
 $training_name =$this->input->post('training_name');
 $organization =$this->input->post('organization');
 $details=$this->input->post('details');
 

     $items = array();
     $size = count($training_name); 
     for($i = 0 ; $i < $size ; $i++){
     $items = array(

         "ref_master_id" =>  $id ,
          "training_name" => $training_name[$i], 
          "organization" => $organization[$i], 
          "details"=> $details[$i]
   );   
     $this->db->insert('training2',$items); 
 }

  }



// }
////search data--------------------

  // public function search_data($query){

  //    $this->db->select(['registertable3.id','registertable3.username','registertable3.email','division_tab.division_name','district_tab.district_name','upozila_tab.upozila_name']);
  //     $this->db->from('registertable3');
  //     $this->db->join('division_tab','division_tab.id = registertable3.division','left');
  //     $this->db->join('district_tab','district_tab.id = registertable3.district','left');
  //     $this->db->join('upozila_tab','upozila_tab.id = registertable3.upozila','left');
  //     // $this->db->where('registertable3.id',$id);
  //   if($query != '');
  //   {

  //     $this->db->like('username', $query);
  //     $this->db->or_like('email',$query);


  //   }
  //     $this->db->order_by('id','DESC');
  //     return $this->db->get();

  // }
  




  

}



// }





?>