
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

<h2 align="center">Internal Exam - TimeTable</h2><br><br>


<table>
  <thead>
     <tr>
    <th>sl.no</th>
    <!-- <th>Department</th> -->
   <!--  <th>Semester</th> -->
    
     
      <th>Subject</th>
      <th>Exam Time</th>
      <th>Exam Date (YYYY-MM-DD)</th>
<th>Edit</th>
      
  </tr>
  </thead>
 <tbody>

<?php
$i=1;
foreach($time_table as $fetch)
{
?>
   <tr>
    <td><?php echo $i?></td>
  
  

     
    <td><?php echo $fetch->subject_name?></td>
    <td><?php echo $fetch->Exam_time?></td>
    <td><?php echo $fetch->Exam_date?></td>
    <td><a href="<?php echo base_url('index.php/Admincontroller/timetable_edit/'.$fetch->time_table_id)?>"><img src="<?php echo base_url('Asset/Admin/images/edit.png')?>" style="height: 40px;width: 40px"></a></td> 
    <tr>
     <?php
     $i++;
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