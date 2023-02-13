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

<h2 align="center">Manage TimeTable</h2>
<br><br>

<?php
   
    foreach ($department as $dprtmnt)
     {
    
    
    ?>
<h4 align="center"></h4>
<br>
<div style="overflow-x:auto;">
  <table>
    <tr>
      <th>Sl.No</th>
      <th>Department Name</th>
      <th>Subject</th>
      <th>Semester</th>
     
      
      <th>Exam Time</th>
      <th>Exam Date</th>
     <!--  <th>Edit</th>
      <th>Delete</th> -->
     
    </tr>
    <?php
    $i=1;
    foreach ($timetable as $tmetble) 
    {
           if($tmetble->department_id==$dprtmnt->department_id)
           {



    
    ?>
    <tr>
      <td><?php echo $i?></td>
      <td><?php echo $tmetble->dep_name?></td>
      <td><?php echo $tmetble->subject_name?></td>
        <td><?php echo $tmetble->semester?></td>
        
         <td><?php echo $tmetble->Exam_time?></td>
        <td><?php echo $tmetble->Exam_date?></td>
     
    
      
     
    <!--    <td><img src="<?php echo base_url('Asset/Admin/images/edit.png')?>" style="height: 40px;width: 40px"></td>
      <td><img src="<?php echo base_url('Asset/Admin/images/delete.png')?>"  style="height: 40px;width: 40px"></td> -->
     
    </tr>

   
    <?php
    $i++;
}
}

?>
   
  </table>
</div><br><br>

<?php
}
?>
</body>
</html>

<br><br><br><br>


<?php
$this->load->view('Admin/Layout/admin_footer');
?>