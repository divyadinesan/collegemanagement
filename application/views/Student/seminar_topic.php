<?php
$this->load->view('Student/Layout/header');
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

<h2 align="center">Semiar Topics</h2><br><br>

<table>
  <thead>
     <tr>
    <th>sl.no</th>
    <th>Faculty Name</th>
    <th>Subject</th>
     <th>Semester</th>
     <th>Submission date</th>
      <th>Seminar Topic</th>
      <th>Upload Seminar</th>

  </tr>
  </thead>
 <tbody>
  
  <?php
  $i=1;
  foreach ($smnr as $seminar)
  {

  ?>
   <tr>
    <td><?php echo $i?></td>
     <td><?php echo $seminar->faculty_name?></td>
     <td><?php echo $seminar->subject_name?></td>
     <td><?php echo $seminar->semester?></td>
     <td><?php echo $seminar->submission_date?></td>
     <td><?php echo $seminar->seminar_topic?></td>
     
    <td>
      <form method="post" action="<?php echo base_url('index.php/Studentcontroller/seminar_submission')?>" enctype="multipart/form-data">
       

 <input type="hidden" name="student_email" value="<?php echo $seminar->student_email?>"><br>

        <input type="hidden" name="seminar_topic" value="<?php echo $seminar->seminar_topic?>">
        <input type="hidden" name="faculty_email"  value="<?php echo $seminar->faculty_email?>" ><br>

       <input type="hidden" name="seminar_id" value="<?php echo $seminar->seminar_id ?>"><br>


        <input type="hidden" name="subject_id"  value="<?php echo $seminar->subject_id?>" ><br>
        <input type="hidden" name="department_id"  value="<?php echo $seminar->department_id ?> "><br>
        <input type="hidden" name="semester"  value="<?php echo $seminar->semester?>"><br>
        <input type="hidden" name="faculty_id"  value="<?php echo $seminar->faculty_id?>" ><br>
        <input type="hidden" name="a_date"  value="<?php echo $seminar->submission_date?>" ><br>
            
        <input type="hidden" name="subject_name"  value="<?php echo $seminar->subject_name?>" ><br>
        <input type="hidden" name="student_id" value="<?php echo $seminar->student_id?>" ><br>
            <input type="file" name="image" ><br>
       <input type="submit" value="Upload" style="background-color: green;color: white">
     </form>
   </td>
   </tr>
  <?php
  $i++;
}
?>
 </tbody>
  
</table>
<br><br><br><br>
</body>
</html>


<?php
$this->load->view('Student/Layout/footer');
?>