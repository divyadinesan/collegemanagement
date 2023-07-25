 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admincontroller extends CI_Controller 
{


	public function admin_home()
	{
		if($this->session->has_userdata('Email'))
		{
			$this->load->view('Admin/admin_home');
		}
		else
		{
			$this->Admin_login();
		}
	}
	public function manage_timetable_subject()
{
	if($this->session->has_userdata('Email'))
		{
			$this->load->model('Adminmodel');
			$Arrdata['department']=$this->Adminmodel->admin_department_fetch_model();
			$this->load->view('Admin/manage_timetable_subject',$Arrdata);
		}
		else
		{
			$this->Admin_login();
		}
}
	public function department_syllabus()
	{
		if($this->session->has_userdata('Email'))
		{
			$this->load->model('Adminmodel');
			$Arrdata['department']=$this->Adminmodel->admin_department_fetch_model();
			$this->load->view('Admin/department_syllabus',$Arrdata);
		}
		else
		{
			$this->Admin_login();
		}
	}
	public function sem_syllabus_timetable($department_id)
	{
		if($this->session->has_userdata('Email'))
		{
			$this->load->model('Adminmodel');
			$Arrdata['department']=$this->Adminmodel->department_fetch_id_model($department_id);
			$this->load->view('Admin/sem_syllabus_timetable',$Arrdata);
		}
		else
		{
			$this->Admin_login();
		}
	}
	public function time_table_fetch($sem,$department_id)
	{
		if($this->session->has_userdata('Email'))
		{
			$this->load->model('Adminmodel');
			$Arrdata['time_table']=$this->Adminmodel->time_table_fetch_model($sem,$department_id);
			$this->load->view('Admin/time_table_fetch',$Arrdata);
		}
		else
		{
			$this->Admin_login();
		}
	}
	public function timetable_edit($time_table_id)
	{
		if($this->session->has_userdata('Email'))
		{
			$this->load->model('Adminmodel');
			$Arrdata['time_table']=$this->Adminmodel->timetable_fetch_model($time_table_id);
			$this->load->view('Admin/timetable_edit',$Arrdata);
		}
		else
		{
			$this->Admin_login();
		}
	}
	public function timetable_update($time_table_id)
	{
		if($this->session->has_userdata('Email'))
		{
			
		$exam_time=$this->input->post('exam_time');
		$date=$this->input->post('date');
		$Arrdata=array('Exam_time'=>$exam_time,'Exam_date'=>$date);
		$this->load->model('Adminmodel');
		$execute=$this->Adminmodel->timetable_update_model($time_table_id,$Arrdata);
			if($execute)
		{
			echo "<script>alert('Updated Successfully!!!')</script>";
			
			$this->manage_timetable_subject();
		}
		else
		{
			echo "<script>alert('Failed To Update!!')</script>";
			$this->manage_timetable_subject();
		}
		}
		else
		{
			$this->Admin_login();
		}
	}
	public function manage_timetable_semester_subject()
	{
		if($this->session->has_userdata('Email'))
		{
			$this->load->model('Adminmodel');
			$Arrdata['department']=$this->Adminmodel->admin_department_fetch_model();
			$this->load->view('Admin/manage_timetable_semester_subject',$Arrdata);
		}
		else
		{
			$this->Admin_login();
		}
	}
	public function department_timetable()
	{
		if($this->session->has_userdata('Email'))
		{
			$this->load->model('Adminmodel');
			$Arrdata['department']=$this->Adminmodel->admin_department_fetch_model();
			$this->load->view('Admin/department_timetable',$Arrdata);
		}
		else
		{
			$this->Admin_login();
		}
	}

	public function sem_syllabus($department_id)
	{
		if($this->session->has_userdata('Email'))
		{
			$this->load->model('Adminmodel');
			$Arrdata['department']=$this->Adminmodel->department_fetch_id_model($department_id);
			$this->load->view('Admin/sem_syllabus',$Arrdata);
		}
		else
		{
			$this->Admin_login();
		}
	}
	public function semester_timetable($department_id)
	{
		if($this->session->has_userdata('Email'))
		{
			$this->load->model('Adminmodel');
			$Arrdata['timetable']=$this->Adminmodel->semester_timetable_model($department_id);
			$this->load->view('Admin/semester_timetable',$Arrdata);
		}
		else
		{
			$this->Admin_login();
		}
	}
	public function sem_timetable($department_id)
	{
		if($this->session->has_userdata('Email'))
		{
			$this->load->model('Adminmodel');
			$Arrdata['department']=$this->Adminmodel->department_fetch_id_model($department_id);
			$this->load->view('Admin/sem_timetable',$Arrdata);
		}
		else
		{
			$this->Admin_login();
		}
	}


	public function Admin_login()
	{
		$this->load->view('Admin/admin_login');
	}


	public function Admin_login_insrt()
	{
		$password=$this->input->post('password');
		$Email=$this->input->post('Email');
		$admin_log=array('email'=>$Email,'password'=>$password);
		$this->load->model('Adminmodel');
		$count=$this->Adminmodel->log_admin($admin_log);
		if($count>0)
		{
			echo "<script>alert('Thank you')</script>";
			$this->session->set_userdata('Email',$Email);
			$this->update_password();
		}
		else
		{
			echo "<script>alert('Login failed')</script>";
			$this->Admin_login();
		}
	}


	public function update_password()
	{
		if($this->session->has_userdata('Email'))
		{
			$this->load->model('Adminmodel');
			$ArrData['admin']=$this->Adminmodel->admin_fetch_model();
			$this->load->view('Admin/update_password',$ArrData);
		}
		else
		{
			$this->Admin_login();
		}
	}


	public function update_pass()
	{
		$new_password=$this->input->post('new_password');
		$conf_password=$this->input->post('conf_password');
		if($new_password==$conf_password)
		{
		$ArrData=array('password'=>$new_password);
		$this->load->model('Adminmodel');
		$execute=$this->Adminmodel->admin_update_model($ArrData);
		if($execute)
		{
			echo "<script>alert('Success')</script>";
			$this->update_password();
		}
		else
		{
			echo "<script>alert('Failed To Success!!!!!')</script>";
			$this->update_password();
		}
		}
		else
		{
			echo "<script>alert('Password Mismatch..Please Try Again!!!!!')</script>";
			$this->update_password();
		}
	}


	public function add_department()
	{
		if($this->session->has_userdata('Email'))
		{
			$this->load->view('Admin/add_department');
		}
		else
		{
			$this->Admin_login();
		}
	}


	public function department_insrt()
	{
		if($this->session->has_userdata('Email'))
		{
			$department=$this->input->post('Name');
       		$this->load->model('Adminmodel');
			$exe=$this->Adminmodel->department_already_insert($department);
			if($exe==0)
			{
         		$image=$_FILES['image']['name'];
			 	$time = Time();
			 	$images = explode('.',$image);
				$photo =$time.'.'.end($images);
			 	$config['upload_path']= './Asset/Admin/department';
			 	$config['allowed_types']= 'jpg|png|jpeg';
			 	$config['file_name'] = $photo;
				$this->load->library('upload', $config);
			 	$this->upload->initialize($config);

			 	if( $this->upload->do_upload('image'))
				{
					$result=array('dep_name'=>$department,'dep_image'=>$photo);
					$this->load->model('Adminmodel');
					$exe1=$this->Adminmodel->department_insert_model($result);
			
					if($exe1==1)
					{
						echo "<script>alert('Added!!!')</script>";
						$this->add_department();
					}
					else
					{
		
						echo "<script>alert('failed')</script>";
						$this->add_department();
					}
				}
				else
				{
					echo "<script>alert('Invalid Image')</script>";
					$this->add_department();
				}
			}
			else
			{
			echo "<script>alert('Department Already Added')</script>";
					$this->add_department();
			}
		}
		else
		{
		$this->Admin_login();
		}

	}



	public function manage_department()
	{
		if($this->session->has_userdata('Email'))
		{
	 
	 		$this->load->model('Adminmodel');
			$exe['department']=$this->Adminmodel->department_fetch_model();
			$this->load->view('Admin/Manage_department',$exe);
		}
		else
		{
			$this->Admin_login();
		}
	}
	public function department_update()
	{
		$department_id=$this->input->post('department_id');
		$department=$this->input->post('Name');
		$image=$_FILES['image']['name'];
	if($image!="")
	{
	$time = Time();
	$images = explode('.',$image);
	$Add_photos =$time.'.'.end($images);
	$config['upload_path']= './Asset/Admin/department';
	$config['allowed_types']= 'jpg|png|jpeg';
	$config['file_name'] = $Add_photos;
	$this->load->library('upload', $config);
	$this->upload->initialize($config);
	if($this->upload->do_upload('image'))
	{
		$result=array('dep_name'=>$department,'dep_image'=>$Add_photos);
				$this->load->model('Adminmodel');
				$exe=$this->Adminmodel->department_update_model($result,$department_id);
		if($result)
		{
			echo "<script>alert('Successfully Updated ')</script>";
			$this->manage_department();
		}
		else
		{
			echo "<script>alert('Failed to update')</script>";
			$this->manage_department();
		}
	}
	else
	{
		echo "<script>alert('Invalid photo')</script>";
			$this->manage_department();
	}
	}
	else
	{
		$result=array('dep_name'=>$department);
				$this->load->model('Adminmodel');
				$exe=$this->Adminmodel->department_update_model($result,$department_id);
		if($result)
		{
			echo "<script>alert('Successfully Updated ')</script>";
			$this->manage_department();
		}
		else
		{
			echo "<script>alert('Failed to update ')</script>";
			$this->manage_department();
		}
	}	
	}

	public function department_fetch($department_id)
	{
		if($this->session->has_userdata('Email'))
		{
	 
	 	 	$this->load->model('Adminmodel');
			 $exe['department']=$this->Adminmodel->department_id_fetch_model($department_id);
			$this->load->view('Admin/department_fetch',$exe);
		}
		else
		{
			$this->Admin_login();
		}
	}






	public function add_subject()
	{
		if($this->session->has_userdata('Email'))
		{
		$this->load->model('Adminmodel');
	 	$exe['department']=$this->Adminmodel->department_fetch_model();
	  	$exe['faculty']=$this->Adminmodel->faculty_fetch_model();  
		$this->load->view('Admin/add_subject.php',$exe);
		}
		else
		{
			$this->Admin_login();
		}
	}




	public function subject_insrt()
	{
		if($this->session->has_userdata('Email'))
		{
			$faculty_id=$this->input->post('faculty_id');
			$deprt_id=$this->input->post('deprt_id');
			$semester=$this->input->post('semester');
			$subName=$this->input->post('subName');
       		$this->load->model('Adminmodel');
			$exe=$this->Adminmodel->subject_already_insert($subName);
			if($exe==0)
			{
         		$image=$_FILES['image']['name'];
			 	$time = Time();
				$images = explode('.',$image);
			 	$photo =$time.'.'.end($images);
			 	$config['upload_path']= './Asset/Admin/subject';
			 	$config['allowed_types']= 'jpg|png|jpeg';
				$config['file_name'] = $photo;
				$this->load->library('upload', $config);
			 	$this->upload->initialize($config);

			 	if( $this->upload->do_upload('image'))
				{
					$result=array('subject_name'=>$subName,'department_id'=>$deprt_id,'semester'=>$semester,'faculty_id'=>$faculty_id,'subject_image'=>$photo);
					$this->load->model('Adminmodel');
					$exe1=$this->Adminmodel->subject_insert_model($result);
			
					if($exe1==1)
					{
						echo "<script>alert('Added!!!')</script>";
						$this->add_subject();
					}
					else
					{
		
						echo "<script>alert('failed')</script>";
						$this->add_subject();
					}
				}
				else
				{
					echo "<script>alert('Invalid Image')</script>";
					$this->add_subject();
				}
			}
			else
			{
				echo "<script>alert('Subject Already Added')</script>";
				$this->add_subject();
			}
		}
		else
		{
			$this->Admin_login();
		}

	}


	public function manage_subject()
	{
		if($this->session->has_userdata('Email'))
		{
	 
			$this->load->model('Adminmodel');
			$exe['subjectdep']=$this->Adminmodel->subject_departmentt_fetch_model();
			//$exe['department']=$this->Adminmodel->department_fetch_model();
	  	// $exe['faculty']=$this->Adminmodel->faculty_fetch_model();  
			//$exe['subject']=$this->Adminmodel->subject_fetch_model();
			$this->load->view('Admin/Manage_subject',$exe);
		}
		else
		{
			$this->Admin_login();
		}
	}

	public function subject_fetch($subject_id)
	{
			if($this->session->has_userdata('Email'))
		{
	 
			$this->load->model('Adminmodel');
			$ArrData['subject']=$this->Adminmodel->subject_fetch_id_model($subject_id);
			$ArrData['faculty']=$this->Adminmodel->faculty_fetch_model();
			$ArrData['department']=$this->Adminmodel->department_fetch_model();
			$this->load->view('Admin/subject_fetch',$ArrData);
		}
		else
		{
			$this->Admin_login();
		}
	}

	public function subject_edit()
	{
		$subject_id=$this->input->post('subject_id');
		$faculty_id=$this->input->post('faculty_id');
			$deprt_id=$this->input->post('deprt_id');
			$semester=$this->input->post('semester');
			$subName=$this->input->post('subName');
			$image=$_FILES['image']['name'];
	if($image!="")
	{
	$time = Time();
	$images = explode('.',$image);
	$Add_photos =$time.'.'.end($images);
	$config['upload_path']= './Asset/Admin/subject';
	$config['allowed_types']= 'jpg|png|jpeg';
	$config['file_name'] = $Add_photos;
	$this->load->library('upload', $config);
	$this->upload->initialize($config);
	if($this->upload->do_upload('image'))
	{
		$result=array('subject_name'=>$subName,'department_id'=>$deprt_id,'semester'=>$semester,'faculty_id'=>$faculty_id,'subject_image'=>$Add_photos);
				$this->load->model('Adminmodel');
				$exe=$this->Adminmodel->subject_update_model($result,$subject_id);
		if($result)
		{
			echo "<script>alert('Successfully Updated ')</script>";
			$this->manage_subject();
		}
		else
		{
			echo "<script>alert('Failed to update')</script>";
			$this->manage_subject();
		}
	}
	else
	{
		echo "<script>alert('Invalid photo')</script>";
			$this->manage_subject();
	}
	}
	else
	{
		$result=array('subject_name'=>$subName,'department_id'=>$deprt_id,'semester'=>$semester,'faculty_id'=>$faculty_id);
				$this->load->model('Adminmodel');
				$exe=$this->Adminmodel->subject_update_model($result,$subject_id);
		if($result)
		{
			echo "<script>alert('Successfully Updated ')</script>";
			$this->manage_subject();
		}
		else
		{
			echo "<script>alert('Failed to update ')</script>";
			$this->manage_subject();
		}
	}	
	}


public function add_faculty()
{
	if($this->session->has_userdata('Email'))
	{
	$this->load->model('Adminmodel');
	
	$this->load->view('Admin/add_faculty.php');
}
else
{
	$this->Admin_login();
}
}

public function faculty_insrt()
{
	$faculty_name=$this->input->post('faculty_name');
	$faculty_dateofbirth=$this->input->post('faculty_dateofbirth');
	$faculty_gender=$this->input->post('faculty_gender');
	$faculty_address=$this->input->post('faculty_address');
	$faculty_phone=$this->input->post('faculty_phone');
	$faculty_email=$this->input->post('faculty_email');
	$faculty_password=$this->input->post('faculty_password');

        $this->load->model('Adminmodel');
		$exe=$this->Adminmodel->faculty_already_insert($faculty_email);
	if($exe==0)
	{
         $image=$_FILES['image']['name'];
			 $time = Time();
			 $images = explode('.',$image);
			 $photo =$time.'.'.end($images);
			 $config['upload_path']= './Asset/Admin/faculty';
			 $config['allowed_types']= 'jpg|png|jpeg';
			 $config['file_name'] = $photo;
			$this->load->library('upload', $config);
			 $this->upload->initialize($config);

			 if( $this->upload->do_upload('image'))
			{
				$result=array('faculty_name'=>$faculty_name,'faculty_dateofbirth'=>$faculty_dateofbirth,'faculty_gender'=>$faculty_gender,'faculty_address'=>$faculty_address,'faculty_phone'=>$faculty_phone,'faculty_email'=>$faculty_email,'faculty_password'=>$faculty_password,'faculty_image'=>$photo);
				$this->load->model('Adminmodel');
				$exe1=$this->Adminmodel->faculty_insert_model($result);
			
				if($exe1==1)
				{
					echo "<script>alert('Added!!!')</script>";
					$this-> add_faculty();
				}
				else
				{
		
					echo "<script>alert('failed')</script>";
					$this-> add_faculty();
				}
			}
			else
			{
				echo "<script>alert('Invalid Image')</script>";
					$this->add_faculty();
			}
	}
	else
	{
		echo "<script>alert(' Already Registered')</script>";
					$this-> add_faculty();
	}
}
public function faculty_edit()
{
	$faculty_id=$this->input->post('faculty_id');
	$faculty_name=$this->input->post('faculty_name');
	$faculty_dateofbirth=$this->input->post('faculty_dateofbirth');
	// $faculty_gender=$this->input->post('faculty_gender');
	$faculty_address=$this->input->post('faculty_address');
	$faculty_phone=$this->input->post('faculty_phone');
	$faculty_email=$this->input->post('faculty_email');
	$faculty_password=$this->input->post('faculty_password');
	$image=$_FILES['image']['name'];
	if($image!="")
	{
	$time = Time();
	$images = explode('.',$image);
	$Add_photos =$time.'.'.end($images);
	$config['upload_path']= './Asset/Admin/faculty';
	$config['allowed_types']= 'jpg|png|jpeg';
	$config['file_name'] = $Add_photos;
	$this->load->library('upload', $config);
	$this->upload->initialize($config);
	if($this->upload->do_upload('image'))
	{
		$result=array('faculty_name'=>$faculty_name,'faculty_dateofbirth'=>$faculty_dateofbirth,'faculty_address'=>$faculty_address,'faculty_phone'=>$faculty_phone,'faculty_email'=>$faculty_email,'faculty_password'=>$faculty_password,'faculty_image'=>$Add_photos);
				$this->load->model('Adminmodel');
				$exe=$this->Adminmodel->faculty_id_update_model($result,$faculty_id);
		if($result)
		{
			echo "<script>alert('Successfully Updated ')</script>";
			$this->manage_faculty();
		}
		else
		{
			echo "<script>alert('Failed to update')</script>";
			$this->manage_faculty();
		}
	}
	else
	{
		echo "<script>alert('Invalid photo')</script>";
			$this->manage_faculty();
	}
	}
	else
	{
		$result=array('faculty_name'=>$faculty_name,'faculty_dateofbirth'=>$faculty_dateofbirth,'faculty_address'=>$faculty_address,'faculty_phone'=>$faculty_phone,'faculty_email'=>$faculty_email,'faculty_password'=>$faculty_password);
				$this->load->model('Adminmodel');
				$exe=$this->Adminmodel->faculty_id_update_model($result,$faculty_id);
		if($result)
		{
			echo "<script>alert('Successfully Updated ')</script>";
			$this->manage_faculty();
		}
		else
		{
			echo "<script>alert('Failed to update ')</script>";
			$this->manage_faculty();
		}
	}	
}

	public function manage_faculty()
	{
		if($this->session->has_userdata('Email'))
		{
			$this->load->model('Adminmodel');
			$ArrData['faculty']=$this->Adminmodel->faculty_fetch_model();
			$this->load->view('Admin/manage_faculty',$ArrData);
		}
		else
		{
			$this->Admin_login();
		}
	}
	public function faculty_fetch($faculty_id)
	{
		if($this->session->has_userdata('Email'))
		{
			$this->load->model('Adminmodel');
			$ArrData['faculty']=$this->Adminmodel->faculty_fetch_id_model($faculty_id);
			$this->load->view('Admin/faculty_fetch',$ArrData);
		}
		else
		{
			$this->Admin_login();
		}
	}
	public function holiday_delete($holiday_delete)
	{
		$this->load->model('Adminmodel');
				$exe=$this->Adminmodel->holiday_delete_model($holiday_delete);
		if($exe)
		{
			echo "<script>alert('Successfully Deleted ')</script>";
			$this->manage_holiday();
		}
		else
		{
			echo "<script>alert('Failed  ')</script>";
			$this->manage_holiday();
		}
	}
	public function student_delete($student_id)
	{
		$this->load->model('Adminmodel');
				$exe=$this->Adminmodel->student_delete_model($student_id);
		if($exe)
		{
			echo "<script>alert('Successfully Deleted ')</script>";
			$this->manage_student();
		}
		else
		{
			echo "<script>alert('Failed  ')</script>";
			$this->manage_student();
		}
	}
	public function syllabus_delete($syllabus_id)
	{
		$this->load->model('Adminmodel');
				$exe=$this->Adminmodel->syllabus_delete_model($syllabus_id);
		if($exe)
		{
			echo "<script>alert('Successfully Deleted ')</script>";
			$this->manage_syllabus();
		}
		else
		{
			echo "<script>alert('Failed  ')</script>";
			$this->manage_syllabus();
		}
	}
	public function subject_delete($subject_id)
	{
		$this->load->model('Adminmodel');
				$exe=$this->Adminmodel->subject_delete_model($subject_id);
		if($exe)
		{
			echo "<script>alert('Successfully Deleted ')</script>";
			$this->manage_subject();
		}
		else
		{
			echo "<script>alert('Failed  ')</script>";
			$this->manage_subject();
		}
	}
	public function department_delete($department_id)
	{
		$this->load->model('Adminmodel');
				$exe=$this->Adminmodel->department_delete_model($department_id);
		if($exe)
		{
			echo "<script>alert('Successfully Deleted ')</script>";
			$this->manage_department();
		}
		else
		{
			echo "<script>alert('Failed  ')</script>";
			$this->manage_department();
		}
	}
	public function faculty_delete($faculty_id)
	{
		$this->load->model('Adminmodel');
				$exe=$this->Adminmodel->faculty_delete_model($faculty_id);
		if($exe)
		{
			echo "<script>alert('Successfully Deleted ')</script>";
			$this->manage_faculty();
		}
		else
		{
			echo "<script>alert('Failed  ')</script>";
			$this->manage_faculty();
		}
	}

 public function add_holiday()
{
	if($this->session->has_userdata('Email'))
	{
	
	$this->load->view('Admin/add_holiday');
	}
	else
	{
		$this->Admin_login();
	}
}
public function holiday_insrt()
{
	$reason=$this->input->post('reason');
	$fdate=$this->input->post('fdate');
	$todate=$this->input->post('todate');
	
	 $this->load->model('Adminmodel');
		$exe=$this->Adminmodel->holiday_already_insert($fdate);
	if($exe==0)
	{
	$result=array('reason'=>$reason,'from_date'=>$fdate,'to_date'=>$todate);
				$this->load->model('Adminmodel');
				$exe1=$this->Adminmodel->holiday_insert_model($result);
			
				if($exe1==1)
				{
					echo "<script>alert('Added!!!')</script>";
					$this->add_holiday();
				}
				else
				{
		
					echo "<script>alert('failed')</script>";
					$this->add_holiday();
				}
	}
	else
	{
		echo "<script>alert('Holiday Already Added')</script>";
					$this->add_holiday();
	}
}

	
	 public function manage_holiday()
	{
		if($this->session->has_userdata('Email'))
		{
	 
	 		$this->load->model('Facultymodel');
			$ArrData['holiday']=$this->Facultymodel->holiday_fetch_model();
			$this->load->view('Admin/Manage_holiday',$ArrData);
		}
		else
		{
			$this->Admin_login();
		}
	}

	public function holiday_edit($holiday_id)
	{
			if($this->session->has_userdata('Email'))
		{
	 
	 		$this->load->model('Adminmodel');
			$ArrData['holiday']=$this->Adminmodel->holiday_fetch_id_model($holiday_id);
			$this->load->view('Admin/holiday_edit',$ArrData);
		}
		else
		{
			$this->Admin_login();
		}
	}
 public function student()
{
	$this->load->model('Adminmodel');
	$result['department']=$this->Adminmodel->department_fetch_model();
	$this->load->view('Admin/add_student',$result);
}




public function student_registration()
{
	$name=$this->input->post('name');
	$reg=$this->input->post('reg');
	$email=$this->input->post('email');
	$dob=$this->input->post('dob');
	$ph=$this->input->post('ph');
	$semester=$this->input->post('semester');

	$address=$this->input->post('address');
	$dpt_id=$this->input->post('dpt_id');
	$parent_name=$this->input->post('parent_name');
	// $parent_email=$this->input->post('parent_email');
	$parent_password=$this->input->post('parent_password');
        $this->load->model('Studentmodel');
		$exe=$this->Studentmodel->student_already_registered($email,$reg);
	if($exe==0)
	{
         $image=$_FILES['image']['name'];
			 $time = Time();
			 $images = explode('.',$image);
			 $photo =$time.'.'.end($images);
			 $config['upload_path']= './Asset/Student/student_img';
			 $config['allowed_types']= 'jpg|png|jpeg';
			 $config['file_name'] = $photo;
			$this->load->library('upload', $config);
			 $this->upload->initialize($config);

			 if( $this->upload->do_upload('image'))
			{
				$result=array('s_name'=>$name,'s_email'=>$email,'s_dob'=>$dob,'s_phone'=>$ph,'s_semester'=>$semester,'s_address'=>$address,'register_no'=>$reg,'department_id'=>$dpt_id,'s_image'=>$photo,'parent_name'=>$parent_name,'parent_password'=>$parent_password);
				$this->load->model('Adminmodel');
				$exe1=$this->Studentmodel->student_insert_model($result);
			
				if($exe1==1)
				{
					echo "<script>alert('Added!!!')</script>";
					$this->student();
				}
				else
				{
		
					echo "<script>alert('failed')</script>";
					$this->student();
				}
			}
			else
			{
				echo "<script>alert('Invalid Image')</script>";
					$this->student();
			}
	}
	else
	{
		echo "<script>alert(' Already Registered')</script>";
					$this->student();
}
}


	public function manage_student()
	{
		if($this->session->has_userdata('Email'))
		{
			$this->load->model('Adminmodel');
			//$ArrData['department']=$this->Adminmodel->groupby_dep();
			$ArrData['student']=$this->Adminmodel->student_fetch_model();
			$this->load->view('Admin/manage_student',$ArrData);
		}
		else
		{
			$this->Admin_login();
		}
	}

	public function student_fetch($student_id)
	{
		if($this->session->has_userdata('Email'))
		{
			$this->load->model('Adminmodel');
			$ArrData['student']=$this->Adminmodel->student_fetch_id_model($student_id);
			$this->load->view('Admin/student_fetch',$ArrData);
		}
		else
		{
			$this->Admin_login();
		}
	}
	public function student_edit()
	{
	$student_id=$this->input->post('student_id');
		$name=$this->input->post('name');
	$reg=$this->input->post('reg');
	$email=$this->input->post('email');
	$dob=$this->input->post('dob');
	$ph=$this->input->post('ph');
	//$semester=$this->input->post('semester');

	$address=$this->input->post('address');
	//$dpt_id=$this->input->post('dpt_id');
	$image=$_FILES['image']['name'];
	if($image!="")
	{
	$time = Time();
	$images = explode('.',$image);
	$Add_photos =$time.'.'.end($images);
	$config['upload_path']= './Asset/Student/student_img';
	$config['allowed_types']= 'jpg|png|jpeg';
	$config['file_name'] = $Add_photos;
	$this->load->library('upload', $config);
	$this->upload->initialize($config);
	if($this->upload->do_upload('image'))
	{
		$result=array('s_name'=>$name,'s_email'=>$email,'s_dob'=>$dob,'s_phone'=>$ph,'s_address'=>$address,'register_no'=>$reg,'s_image'=>$Add_photos);
				$this->load->model('Adminmodel');
				$exe=$this->Adminmodel->student_update_model($result,$student_id);
		if($result)
		{
			echo "<script>alert('Successfully Updated ')</script>";
			$this->manage_student();
		}
		else
		{
			echo "<script>alert('Failed to update')</script>";
			$this->manage_student();
		}
	}
	else
	{
		echo "<script>alert('Invalid photo')</script>";
			$this->manage_student();
	}
	}
	else
	{
		$result=array('s_name'=>$name,'s_email'=>$email,'s_dob'=>$dob,'s_phone'=>$ph,'s_address'=>$address,'register_no'=>$reg);
				$this->load->model('Adminmodel');
				$exe=$this->Adminmodel->student_update_model($result,$student_id);
		if($result)
		{
			echo "<script>alert('Successfully Updated ')</script>";
			$this->manage_student();
		}
		else
		{
			echo "<script>alert('Failed to update ')</script>";
			$this->manage_student();
		}
	}	
	}

public function syllabus($sem,$department_id)
{
	if($this->session->has_userdata('Email'))
	{
	$this->load->model('Adminmodel');
	 $exe['department']=$this->Adminmodel->department_fetch_model();
	 $exe['subject']=$this->Adminmodel->subject_fetch_model($sem,$department_id); 
	$this->load->view('Admin/syllabus',$exe);
	}
	else
	{
		$this->Admin_login();
	}
}

public function syllabus_insrt()
{
	

	$sub_id=$this->input->post('sub_id');
	$module1=$this->input->post('module1');
	$module2=$this->input->post('module2');
	$module3=$this->input->post('module3');
	$module4=$this->input->post('module4');
	$module5=$this->input->post('module5');
	 $this->load->model('Adminmodel');
	$exe=$this->Adminmodel->syllabus_already_insert($sub_id);
	if($exe==0)
	{
	$result=array('subject_id'=>$sub_id,'module1'=>$module1,'module2'=>$module2,'module3'=>$module3,'module4'=>$module4,'module5'=>$module5,'module1_update'=>'Topics Covered','module2_update'=>'Topics Covered','module3_update'=>'Topics Covered','module4_update'=>'Topics Covered','module5_update'=>'Topics Covered');
				$this->load->model('Adminmodel');
				$exe1=$this->Adminmodel->syllebus_insert_model($result);
			
				if($exe1==1)
				{
					
					echo "<script>alert('Added!!!')</script>";
					$this->department_syllabus();
				}
				else
				{
		
					echo "<script>alert('failed')</script>";
					$this->department_syllabus();
				}
	}
	else
	{
		echo "<script>alert('Syllebus Already Added')</script>";
					$this->department_syllabus();
	}
}

	public function manage_syllabus()
	{
		if($this->session->has_userdata('Email'))
		{
	 
	 		$this->load->model('Adminmodel');
			$ArrData['syllabus']=$this->Adminmodel->syllabus_fetch_model();
			$this->load->view('Admin/Manage_syllabus',$ArrData);
		}
		else
		{
			$this->Admin_login();
		}
	}

	public function syllabus_fetch($syllabus_id)
	{
			if($this->session->has_userdata('Email'))
		{
	 
	 		$this->load->model('Adminmodel');
	 		
	 $ArrData['subject']=$this->Adminmodel->subjectt_fetch_model();
		 	$ArrData['syllabus']=$this->Adminmodel->syllabus_fetch_id_model($syllabus_id);
			$this->load->view('Admin/syllabus_fetch',$ArrData);
		}
		else
		{
			$this->Admin_login();
		}
	}

	public function syllabus_update()
	{
		$syllabus_id=$this->input->post('syllabus_id');
		$sub_id=$this->input->post('sub_id');
	$module1=$this->input->post('module1');
	$module2=$this->input->post('module2');
	$module3=$this->input->post('module3');
	$module4=$this->input->post('module4');
	$module5=$this->input->post('module5');
	$result=array('subject_id'=>$sub_id,'module1'=>$module1,'module2'=>$module2,'module3'=>$module3,'module4'=>$module4,'module5'=>$module5);
				$this->load->model('Adminmodel');
				$exe1=$this->Adminmodel->syllabus_update_model($result,$syllabus_id);
			
				if($exe1==1)
				{
					
					echo "<script>alert('updated!!!')</script>";
					$this->manage_syllabus();
				}
				else
				{
		
					echo "<script>alert('failed')</script>";
					$this->manage_syllabus();
				}
	}
	public function holiday_update()
	{
		$holiday_id=$this->input->post('holiday_id');
		$reason=$this->input->post('reason');
	$fdate=$this->input->post('fdate');
	$todate=$this->input->post('todate');
	 $result=array('reason'=>$reason,'from_date'=>$fdate,'to_date'=>$todate);
	 $this->load->model('Adminmodel');
				$exe1=$this->Adminmodel->holiday_update_model($result,$holiday_id);
			
				if($exe1==1)
				{
					
					echo "<script>alert('updated!!!')</script>";
					$this->manage_holiday();
				}
				else
				{
		
					echo "<script>alert('failed')</script>";
					$this->manage_holiday();
				}
	}

public function timetable($sem,$department_id)
{
	if($this->session->has_userdata('Email'))
	{
		$this->load->model('Adminmodel');
  $exe['department']=$this->Adminmodel->departmentt_fetch_id_model($department_id);
	//  $exe['subject']=$this->Adminmodel->subject_fetch_model($sem,$department_id);
	
		// $exe['department']=$this->Adminmodel->groupby_department();
		// //$exe['semester']=$this->Adminmodel->groupby_semester();
		 $exe['subject']=$this->Adminmodel->subject_department_fetch_model($sem,$department_id);
	
		$this->load->view('Admin/time_table',$exe);
	}
	else
	{
		$this->Admin_login();
	}
}

 public function timetable_insrt()
{
 	
 		$this->load->library('form_validation');
		$this->form_validation->set_rules('date[]', 'exam_date', 'required');
		$this->form_validation->set_rules('time[]', 'eam_time', 'required');
		$this->form_validation->set_rules('sub_id[]', 'subject_id', 'required');
		$this->form_validation->set_rules('deprt_id[]', 'depaertment_id', 'required');
		$this->form_validation->set_rules('semester[]', 'semester', 'required');
		
		if ($this->form_validation->run())
			{
					$data = $this->input->post();
					//print_r($data);die();
					

					for ($i=0; $i <count($data['semester']) ; $i++)
					{ 
						$ArrData['department_id'] = $data['deprt_id'][$i];
						$ArrData['semester'] = $data['semester'][$i];
						$ArrData['subject_id'] = $data['sub_id'][$i];
						$ArrData['Exam_time'] = $data['time'][$i];
						$ArrData['Exam_date	'] = $data['date'][$i];
						$this->load->model('Adminmodel');
					 	$exe=$this->Adminmodel->timetable_insrt_model($ArrData);
 					}	
 					if($exe)
						{
							
							echo "<script>alert('Added!!!')</script>";
							$this->department_timetable();
						}

						else
						{
							echo "<script>alert(' Please Try Again!!!')</script>";
							$this->department_timetable();
						}				
			}	 	
 }




 public function manage_timetable()
	{
		if($this->session->has_userdata('Email'))
		{
	 
	 		$this->load->model('Adminmodel');
	 		$this->load->model('Studentmodel');
			$ArrData['timetable']=$this->Adminmodel->stdnt_timetable_model();
			$ArrData['department']=$this->Adminmodel->groupby_department();
			$this->load->view('Admin/Manage_timetable',$ArrData);
		}
		else
		{
			$this->Admin_login();
		}
	}

public function exam()
{
	if($this->session->has_userdata('Email'))
	{
	
	$this->load->view('Admin/exam');
	}
	else
	{
		$this->Admin_login();
	}
}
public function exam_insrt()
{
	$name=$this->input->post('name');
	 $this->load->model('Adminmodel');
		$exe=$this->Adminmodel->exam_name_already_insert($name);
	if($exe==0)
	{
	$ArrData=array('exam_name'=>$name);
				$this->load->model('Adminmodel');
				$exe1=$this->Adminmodel->exam_insert_model($ArrData);
			
				if($exe1==1)
				{
					echo "<script>alert('Added!!!')</script>";
					$this->exam();
				}
				else
				{
		
					echo "<script>alert('failed')</script>";
					$this->exam();
				}
	}
	else
	{
		echo "<script>alert('Already Added')</script>";
					$this->exam();
	}
}

public function manage_exam()
{
	if($this->session->has_userdata('Email'))
	{
		$this->load->model('Adminmodel');
		$ArrData['exam']=$this->Adminmodel->exam_name_fetch_model();
		$this->load->view('Admin/manage_exam',$ArrData);
	}
	else
	{
		$this->Admin_login();
	}
}


		public function logout()
		{
			$this->session->sess_destroy();
	
			$this->load->model('indexmodel');
			$Arrdata['faculty']=$this->indexmodel->faculty_fetch_model();
			$Arrdata['department']=$this->indexmodel->department_fetch_model();
			$this->load->view('Index/index',$Arrdata);
	

		}

		public function timetable_semester()
		{
			if($this->session->has_userdata('Email'))
			{
				 $this->load->model('Adminmodel');
				 $ArrData['department']=$this->Adminmodel->department_fetch_model();
				$this->load->view('Admin/timetable_semester',$ArrData);
			}
			else
			{
				$this->Admin_login();
			}
		}

		

		public function timetable_semester_insert()
		{
			$department_id=$this->input->post('department_id');
			$semester=$this->input->post('semester');
			$image=$_FILES['image']['name'];
			$time = Time();
			$images = explode('.',$image);
			$photo =$time.'.'.end($images);
			$config['upload_path']= './Asset/Admin/semester_timetable';
			$config['allowed_types']= 'jpg|png|jpeg|pdf';
			$config['file_name'] = $photo;
			$this->load->library('upload', $config);
			$this->upload->initialize($config);

	 		 if( $this->upload->do_upload('image'))
			{
				$result=array('department_id'=>$department_id,'semester'=>$semester,'time_table_image'=>$photo);
				$this->load->model('Adminmodel');
				$exe1=$this->Adminmodel->timetable_semester_insert($result);
			
				if($exe1==1)
				{
					echo "<script>alert('Added!!!')</script>";
					$this->timetable_semester();
				}
				else
				{
		
					echo "<script>alert('failed')</script>";
					$this->timetable_semester();
				}
			}
			else
			{
				echo "<script>alert('Invalid Image')</script>";
					$this->timetable_semester();
			}
		}

    
    public function semester_update($sem_timetable_id)
    {
    	$image=$_FILES['timetable']['name'];
				if($image!="")
				{
					$time = Time();
					$images = explode('.',$image);
					$Add_photos =$time.'.'.end($images);
					$config['upload_path']= './Asset/Admin/semester_timetable';
					$config['allowed_types']= 'pdf';
					$config['file_name'] = $Add_photos;
					$this->load->library('upload', $config);
					$this->upload->initialize($config);
						if($this->upload->do_upload('timetable'))
						{
							$result=array('time_table_image'=>$Add_photos);
							$this->load->model('Adminmodel');
							$exe=$this->Adminmodel->timetable_semester_update($result,$sem_timetable_id);
							if($exe)
							{
								echo "<script>alert('Successfully Updated ')</script>";
								$this->manage_timetable_semester_subject();
							}
							else
							{
								echo "<script>alert('Failed to update')</script>";
								$this->manage_timetable_semester_subject();
							}
						}
						else
						{
							echo "<script>alert('Invalid pdf')</script>";
							$this->manage_timetable_semester_subject();
						}
					}
    }








































}