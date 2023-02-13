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

<h2 align="center">Manage Syllabus</h2>
<br><br>


<div style="overflow-x:auto;">
  <table>
    <tr>
      <th>Sl.No</th>
      <th>subject Name</th>
      <th>Module 1</th>
      <th>Module 2</th>
      <th>Module 3</th>
      <th>Module 4</th>
      <th>Module 5</th>
      <th>Edit</th>
      <th>Delete</th>
     
    </tr>
    <?php
    $i=1;
    foreach ($syllabus as $slbs) 
    {
    
    ?>
    <tr>
      <td><?php echo $i?></td>
      <td><?php echo $slbs->subject_name?></td>
      <td><?php echo $slbs->module1?></td>
      <td><?php echo $slbs->module2?></td>
      <td><?php echo $slbs->module3?></td>
      <td><?php echo $slbs->module4?></td>
      <td><?php echo $slbs->module5?></td>
       <td><a href="<?php echo base_url('index.php/Admincontroller/syllabus_fetch/'.$slbs->syllabus_id)?>"><img src="<?php echo base_url('Asset/Admin/images/edit.png')?>" style="height: 50px;width: 50px"></a></td>
      <td><a href="<?php echo base_url('index.php/Admincontroller/syllabus_delete/'.$slbs->syllabus_id)?>"><img src="<?php echo base_url('Asset/Admin/images/delete.png')?>"  style="height: 50px;width: 50px"></a></td>
     
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