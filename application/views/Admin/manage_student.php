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

<h2 align="center">Manage Student</h2>
<br><br>


<div style="overflow-x:auto;">
  <table>
    <tr>
      <th>Sl.No</th>
      <th>Student Name</th>
       <th>Department</th>
      <th>Register Number</th>
      <th>Email ID</th>
      <th>Date Of Birth</th>
      <th>Phone Number</th>
      <th>Semester</th>
      <th>Address</th>
      
      
       <th>Student Image</th>
      <th>Edit</th>
      <th>Delete</th>
     
    </tr>
    <?php
    $i=1;
    foreach ($student as $stdnt) 
    {
    
    ?>
    <tr>
      <td><?php echo $i?></td>
      <td><?php echo $stdnt->s_name?></td>
      <td><?php echo $stdnt->dep_name?></td>
      <td><?php echo $stdnt->register_no?></td>
        <td><?php echo $stdnt->s_email?></td>
      <td><?php echo $stdnt->s_dob ?></td>
    
      <td><?php echo $stdnt->s_phone?></td>
      <td><?php echo $stdnt->s_semester?></td>
      <td><?php echo $stdnt->s_address?></td>
      <td><img src="<?php echo base_url('Asset/Student/student_img/'.$stdnt->s_image)?>" style="height:100px;width: 100px"></td>
       <td><a href="<?php echo base_url('index.php/Admincontroller/student_fetch/'.$stdnt->student_id)?>"><img src="<?php echo base_url('Asset/Admin/images/edit.png')?>" style="height: 40px;width: 40px"></a></td>
      <td><a href="<?php echo base_url('index.php/Admincontroller/student_delete/'.$stdnt->student_id)?>"><img src="<?php echo base_url('Asset/Admin/images/delete.png')?>"  style="height: 40px;width: 40px"></a></td>
     
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