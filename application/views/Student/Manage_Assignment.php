<?php
$this->load->view('Student/Layout/header');
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

<h2 align="center">Manage Assignment</h2><br><br>

<!-- <h3 align="center">Semester :</h3><br><br> -->
<table>
  <thead>
    <?php
$i=1;
foreach ($assignment as $asgmnt) {
  ?>
     <tr>
    <th>sl.no</th>
    <th>Faculty Name</th>
    <th>Subject</th>
     <th>Semester</th>
     <th>Submission date</th>
      <th>Assignment </th>
      <?php
      

        if($asgmnt->assignment_mark=='Pending')
        {
        ?>
      <th>Upload Updated Assignment</th>
      <?php
    }
    else
    {

    ?>
      <th>Assignment Mark</th>
      <?php
    }
    ?>


  </tr>
  </thead>
 <tbody>



 
   <tr>
     <td><?php echo $i?></td>
     <td><?php echo $asgmnt->faculty_name?></td>
    
     <td><?php echo $asgmnt->subject_name?></td>
     <td><?php echo $asgmnt->semester?></td>
     <td><?php echo $asgmnt->submition_date?></td>
    
     <td><br><object data="<?php echo base_url('Asset/student/assignment_answer/'.$asgmnt->assignment_upload)?>"  width="100%" height="300px" type="application/pdf"></object></td>
     <?php
     if($asgmnt->assignment_mark=='Pending')
     {
     ?>
    <td><form method="post" action="<?php echo base_url('index.php/Studentcontroller/update_assignment/'. $asgmnt->student_assignment_upload_id)?>" enctype="multipart/form-data">
      <input type="hidden" name="submition_date"  value="<?php echo $asgmnt->submition_date?>" ><br>
      <input type="file" name="assignment"  ><br>
      <input type="submit" name="" value="submit">
    </form></td>
    <?php
  }
  else
  {
  ?>
    <td><?php echo $asgmnt->assignment_mark?>/10</td>
    <?php
  }
  ?>
   </tr>
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
$this->load->view('Student/Layout/footer');
?>