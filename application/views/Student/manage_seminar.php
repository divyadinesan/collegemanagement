<?php
$this->load->view('Student/Layout/header');
?>

<br><br>
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

<h2 align="center">Manage Seminar</h2><br><br>

<table>
  <thead>
    <?php
 $i=1;
foreach ($seminar as $smr) {

 ?>
     <tr>
    	<th>sl.no</th>
    	<th>Student Name</th>
    	<th>Register Number</th>
    	<th>Subject</th>
    	<th>Semester</th>
     	<th>Seminar Topic</th>
      	<th>Uploaded  Video</th>
         <?php
      foreach ($seminar as $smnr)
        if($smr->seminar_mark=='Pending')
        {
        ?>
        <th>Uploaded  Updated Video</th>
        <?php
      }
      else
      {
      ?>
      <th>Seminar Mark</th>
      <?php
    }
    ?>
        
  	</tr>
  </thead>
 <tbody>
 
   <tr>
    <td><?php echo $i?></td>
    <td><?php echo $smr->s_name?></td>
    <td><?php echo $smr->register_no?></td>
    <td><?php echo $smr->subject_name?></td>
    <td><?php echo $smr->semester?></td>
    <td><?php echo $smr->seminar_topic?></td>
    <td>
      <video width="320" height="240" controls="">
        <source src="<?php echo base_url('Asset/Student/seminar/'.$smr->seminar_uploding) ?>" type="video/mp4">
        </video>
    </td>
    <?php
     if($smr->seminar_mark=='Pending')
        {
        ?>
    <td><form method="post" action="<?php echo base_url('index.php/Studentcontroller/update_seminar/'.$smr->student_seminar_id  )?>" enctype="multipart/form-data">
      <input type="hidden" name="submition_date"  value="<?php echo $smr->submission_date?>" ><br>
      <input type="file" name="seminar"  ><br>
      <input type="submit" name="" value="submit">
    </form></td>
    <?php
  }
  else
  {
  ?>
    <td><?php echo $smr->seminar_mark?>/10</td>
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
<br><br><br><br>
</body>
</html>

<?php
$this->load->view('Student/Layout/footer');
?>