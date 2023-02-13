<?php
$this->load->view('Faculty/Layout/faculty_header');
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

<h2 align="center">Students Seminar</h2><br><br>

<table>
  <thead>
     <tr>
    	<th>sl.no</th>
    	<th>Student Name</th>
    	<th>Register Number</th>
    	<th>Subject</th>
    	<th>Semester</th>
     	<th>Seminar Topic</th>
      	<th>Uploaded Seminar</th>
        <th>Mark Status</th>
        <th>Upload Mark </th>

  	</tr>
  </thead>
 <tbody>
 <?php
 $i=1;
foreach ($seminar as $smr) {
if($smr->seminar_mark=='Pending')
{
 ?>
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
     <td><?php echo $smr->seminar_mark?></td>
    <td><form method="post" action="<?php echo base_url('index.php/Facultycontroller/seminar_mark/'.$smr->student_seminar_id)?>">
      <input type="text" name="mark" placeholder="Enter Mark/10"><br><br>
      <input type="submit" name="">
    </form></td>
   </tr>
   </tr>
   <?php
   $i++;
 }
}
 ?>
 
 </tbody>
  
</table>
<br><br><br><br>
</body>
</html>





<?php
$this->load->view('Faculty/Layout/faculty_footer');
?>
