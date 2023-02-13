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

<h2 align="center">Manage Subject</h2>
<br><br>


<div style="overflow-x:auto;">
  <table>
    <tr>
      <th>Sl.No</th>
       <th>Department</th>
      <th>subject Name</th>
      <th>Semester</th>
      <th>Faculty Name</th>
      <th>Image</th>
      <th>Edit</th>
      <th>Delete</th>
     
    </tr>
    <?php
    $i=1;
    // foreach ($subject as $sbjct) 
    foreach ($subjectdep as  $sbjct) 
    {
    
    ?>
    <tr>
      <td><?php echo $i?></td>
      <td><?php echo $sbjct->dep_name?></td>
      <td><?php echo $sbjct->subject_name?></td>
      <td><?php echo $sbjct->semester?></td>
      <td><?php echo $sbjct->faculty_name?></td>
      <td><img src="<?php echo base_url('Asset/Admin/subject/'.$sbjct->subject_image)?>" style="height: 100px;width: 100px"></td>
       <td><a href="<?php echo base_url('index.php/Admincontroller/subject_fetch/'.$sbjct->subject_id)?>"><img src="<?php echo base_url('Asset/Admin/images/edit.png')?>" style="height: 40px;width: 40px"></a></td>
      <td><a href="<?php echo base_url('index.php/Admincontroller/subject_delete/'.$sbjct->subject_id)?>"><img src="<?php echo base_url('Asset/Admin/images/delete.png')?>"  style="height: 40px;width: 40px"></a></td>
     
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