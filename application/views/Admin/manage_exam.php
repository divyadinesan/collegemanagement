<?php
$this->load->view('Admin/Layout/admin_header');
?>

<br><br><br><br>


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: 1px solid #ddd;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}
</style>
</head>
<body>

<h2 align="center">Manage Exam</h2>
<br><br>


<div style="overflow-x:auto;">
  <table>
    <tr>
      <th>Sl.No</th>
      <th>Exam Name</th>
     
      <th>Edit</th>
      <th>Delete</th>
     
    </tr>
    <?php
    $i=1;
    foreach ($exam as $exm) 
    {
    
    ?>
    <tr>
      <td><?php echo $i?></td>
      <td><?php echo $exm->exam_name?></td>
      
       <td><img src="<?php echo base_url('Asset/Admin/images/edit.png')?>" style="height: 50px;width: 50px"></td>
      <td><img src="<?php echo base_url('Asset/Admin/images/delete.png')?>"  style="height: 50px;width: 50px"></td>
     
    </tr>
    <?php
    $i++;
}
?>
   
  </table>
</div>

</body>
</html>

<br><br><br><br>




<?php
$this->load->view('Admin/Layout/admin_footer');
?>