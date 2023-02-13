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

<h2 align="center">Assignment Topics</h2><br><br>

<table>
  <thead>
     <tr>
    <th>sl.no</th>
    <th>Faculty Name</th>
    <th>Subject</th>
     <th>Semester</th>
     <th>Submission date</th>
      <th>Assignment Topic</th>
      <th>Upload Assignment</th>
  </tr>
  </thead>
 <tbody>
  <?php
  $i=1;
  foreach ($asgnmnt as $asgmnt) {
   
  ?>
   <tr>
     <td><?php echo $i?></td>
     <td><?php echo $asgmnt->faculty_name?></td>
     <td><?php echo $asgmnt->subject_name?></td>
     <td><?php echo $asgmnt->semester?></td>
     <td><?php echo $asgmnt->submition_date?></td>
     <td><br><object data="<?php echo base_url('Asset/Faculty/assignment_question/'.$asgmnt->assignment_upload)?>"  width="100%" height="300px" type="application/pdf"></object></td>
     <td>
    
      <form method="post" action="<?php echo base_url('index.php/Studentcontroller/assignment_submission')?>" enctype="multipart/form-data">
       

 <input type="hidden" name="student_email" value="<?php echo $asgmnt->student_email?>"><br>


        <input type="hidden" name="faculty_email"  value="<?php echo $asgmnt->faculty_email?>" ><br>

       <input type="hidden" name="assignment_id" value="<?php echo $asgmnt->assignment_id?>"><br>


        <input type="hidden" name="subject_id"  value="<?php echo $asgmnt->subject_id?>" ><br>
        <input type="hidden" name="department_id"  value="<?php echo $asgmnt->department_id ?> "><br>
        <input type="hidden" name="semester"  value="<?php echo $asgmnt->semester?>"><br>
        <input type="hidden" name="faculty_id"  value="<?php echo $asgmnt->faculty_id?>" ><br>
        <input type="hidden" name="a_date"  value="<?php echo $asgmnt->submition_date?>" ><br>
            
        <input type="hidden" name="subject_name"  value="<?php echo $asgmnt->subject_name?>" ><br>
        <input type="hidden" name="student_id" value="<?php echo $asgmnt->student_id?>" ><br>
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