<?php

  public function do_upload()
        {
             
                $config['upload_path']          = './upload';
                $config['allowed_types']        = 'gif|jpg|png';
                $this->load->library('upload', $config);

                if (!empty($_FILES['image']['name']) )
                {
                  $this->upload->do_upload('image');
                  $data1=$this->upload->data();
                  $file1=$data1['file_name'];
    
                }
                $config['upload_path']          = './file';
                $config['allowed_types']        = 'doc|docx';
                $this->load->library('upload', $config);

                if (!empty($_FILES['file']['name']) )
                {
                  $this->upload->do_upload('file');
                  $data2=$this->upload->data();
                  $file2=$data2['file_name'];


                   if($this->input->post()) {

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
                      'image'=>$file1,
                      'file'=>$file2
                    );



                      $this->load->model('Query_mod');
                      $this->Query_mod->insert($data);
                       redirect(base_url().'index.php/register/list');

}
    
                }else{

                    echo "not uploaded";

                }

        }


?>