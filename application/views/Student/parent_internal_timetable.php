<?php
$this->load->view('Student/Layout/parent_header');
?><br><br><br>
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
<?php
foreach ($semester as $sem) {
 
?> 

<table>
  <thead>
     <tr>
    <th>sl.no</th>
    <!-- <th>Department</th> -->
   <!--  <th>Semester</th> -->
    
     
      <th>Subject</th>
      <th>Exam Time</th>
      <th>Exam Date (YYYY-MM-DD)</th>

  </tr>
  </thead>
 <tbody>

<?php
$i=1;

foreach ($timetable as $tmetble) {
  if($tmetble->semester==$sem->semester)
  {

  
 
?>
   <tr>
    <td><?php echo $i?></td>
  
   <!--  <td><?php echo $tmetble->semester?></td> -->

     <td><?php echo $tmetble->subject_name?></td>
    <td><?php echo $tmetble->Exam_time?></td>
    <td><?php echo $tmetble->Exam_date?></td> 
    <tr>
      <?php
    $i++;
    
  }
}
  
    ?>
 </tbody>
 
</table>
<br><br>
 <?php
}
?>
<br><br>

<br><br><br><br>
</body>
</html>


<?php
$this->load->view('Student/Layout/footer');
?>