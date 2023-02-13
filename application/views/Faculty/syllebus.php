<?php
$this->load->view('Faculty/Layout/faculty_header');
?><br><br><br>



 <?php
foreach ($facultysubject as $sbjct) {

?>


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



<div style="overflow-x:auto;">
 

<h2 align="center"><b>Syllabus - <?php echo $sbjct->subject_name?></b></h2><br><br>
   <table>
    <tr>
     
      <th>Module 1</th>
      
       <th>Module 2</th>
        
        <th>Module 3</th>
       
         <th>Module 4</th>
         
          <th>Module 5</th>
        
   </tr>
    <?php
 $i=1;
foreach ($slbs as $syllabus)
{
if($syllabus->subject_id==$sbjct->subject_id)
{

  ?>
   <tr>
   
      <td style="height: 200px"><?php echo $syllabus->module1?>
        
      </td>
    

       <td style="height: 200px"><?php echo $syllabus->module2?>
         
       </td>
       
        <td style="height: 200px"><?php echo $syllabus->module3?>
         
        </td>
    
         <td style="height: 200px"><?php echo $syllabus->module4?>
          
         </td>
        
          <td style="height: 200px"><?php echo $syllabus->module5?>
           
          </td>
          
   </tr>
    
 
  </table>

</div>
 
</body>
</html>
 <?php
}
}


















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



<div style="overflow-x:auto;">
   
<h2 align="center"><b>Topics Covered - <?php echo $sbjct->subject_name?></b></h2><br><br>
  <table>
    <tr>
     

      <th> Module 1</th>
  
        <th> Module 2</th>
       
        <th> Module 3</th>
         
          <th> Module 4</th>
      
         <th> Module 5</th>
   </tr>
    <?php
 $i=1;
foreach ($slbs as $syllabus) 
{
  if($syllabus->subject_id==$sbjct->subject_id)
{

  ?>
   <tr>
   
   
        
      </td>
      <td><form method="post" action="<?php echo base_url('index.php/Facultycontroller/module1_updation/'.$syllabus->syllabus_id )?>">
        <input type="" name="module1" value="<?php echo $syllabus->module1_update?>" style="height: 100px"><br><br>
        <input type="submit" name="">
      </form><br>
       
      </td>

     
         
       </td>
       <td><form method="post" action="<?php echo base_url('index.php/Facultycontroller/module2_updation/'.$syllabus->syllabus_id )?>">
        <input type="" name="module2" value="<?php echo $syllabus->module2_update?>" style="height: 100px"><br><br>
        <input type="submit" name="">
      </form><br></td>
       
         
        </td>
        <td><form method="post" action="<?php echo base_url('index.php/Facultycontroller/module3_updation/'.$syllabus->syllabus_id )?>">
        <input type="" name="module3" value="<?php echo $syllabus->module3_update?>" style="height: 100px"><br><br>
        <input type="submit" name="">
      </form><br></td>
        
          
         </td>
         <td><form method="post" action="<?php echo base_url('index.php/Facultycontroller/module4_updation/'.$syllabus->syllabus_id )?>">
        <input type="" name="module4" value="<?php echo $syllabus->module4_update?>" style="height: 100px"><br><br>
        <input type="submit" name="">
      </form><br></td>
         
           
          </td>
          <td><form method="post" action="<?php echo base_url('index.php/Facultycontroller/module5_updation/'.$syllabus->syllabus_id )?>">
        <input type="" name="module5" value="<?php echo $syllabus->module5_update?>" style="height: 100px"><br><br>
        <input type="submit" name="">
      </form><br></td>
   </tr>
    
   <?php
}
}
 ?>
  </table>
</div>
<br><br><br>

<?php
}?>
</body>
</html>
<br><br><br><br><br><br>



<?php
$this->load->view('Faculty/Layout/faculty_footer');
?>