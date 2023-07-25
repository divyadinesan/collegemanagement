<?php
$this->load->view('Admin/Layout/admin_header');
?>

<br><br><br>
<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

<h2 align="center">Semester - TimeTable</h2><br><br>


<table>
  <thead>
     <tr>
    <th>sl.no</th>
    <!-- <th>Department</th> -->
   <!--  <th>Semester</th> -->
    
     
      <th>Semester</th>
      <th>TimeTable</th>
     
<th>Upload Timetable</th>
      
  </tr>
  </thead>
 <tbody>

<?php
$i=1;
foreach ($timetable as $fetch) {

?>
   <tr>
    <td><?php echo $i?></td>
  
  

     
    <td><?php echo $fetch->semester?></td>
    <td><br><object data="<?php echo base_url('Asset/Admin/semester_timetable/'.$fetch->time_table_image)?>"  width="100%" height="300px" type="application/pdf"></object></td>
    
    <td><form method="post" action="<?php echo base_url('index.php/Admincontroller/semester_update/'.$fetch->sem_timetable_id)?>" enctype="multipart/form-data">

      <input type="file" name="timetable"><br>
      <input type="submit" name="" >
    </form></td> 
    <tr>
    <?php
  }
  ?>
 </tbody>
 
</table>
<br><br>
 
<br><br>

<br><br><br><br>
</body>
</html>

<?php
$this->load->view('Admin/Layout/admin_footer');
?>