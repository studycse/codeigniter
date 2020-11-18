 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

  $output .= '
  <div class="table-responsive">
     <table class="table table-bordered table-striped">
      <tr>
       <th>username</th>
       <th>email</th>
       <th>division</th>
       <th>district</th>
       <th>upozila</th>
      </tr>
  ';
  if($data->num_rows() > 0)
  {
   foreach($data->result() as $row)
   {
    $output .= '
      <tr>
       <td>'.$row->username.'</td>
       <td>'.$row->email.'</td>
       <td>'.$row->division.'</td>
       <td>'.$row->district.'</td>
       <td>'.$row->upozila.'</td>
      </tr>
    ';
   }
  }
  else
  {
   $output .= '<tr>
       <td colspan="5">No Data Found</td>
      </tr>';
  }
  $output .= '</table>';
  echo $output;

  ?>