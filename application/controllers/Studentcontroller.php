<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Studentcontroller extends CI_Controller 
{

	public function student_index()
	{
		$this->load->model('indexmodel');
		$Arrdata['faculty']=$this->indexmodel->faculty_fetch_model();
		$Arrdata['department']=$this->indexmodel->department_fetch_model();
		$this->load->view('student/student_index',$Arrdata);
	}

	public function parent_login()
	{
		$this->load->view('student/parent_login');
	}

	public function parent_login_check()
	{
		$Email=$this->input->post('email');
		$password=$this->input->post('password');
		$student_log=array('s_email'=>$Email,'parent_password'=>$password);
		$this->load->model('Studentmodel');
		$count=$this->Studentmodel->student_login_model($student_log);
		if($count>0)
		{
			echo "<script>alert('Thank you')</script>";
			$this->session->set_userdata('Email',$Email);
			$this->parent_home();
		}
		else
		{
			echo "<script>alert('Login failed')</script>";
			$this->parent_login();
		}
	}

	public function parent_home()
	{
		if($this->session->has_userdata('Email'))
		{
			$this->load->model('Facultymodel');
			$exe['holiday']=$this->Facultymodel->holiday_fetch_model();
			$this->load->view('student/parent_home',$exe);
		}
		else
		{
			$this->parent_login();
		}
	}

	public function parent_student_semester()
		{
			if($this->session->has_userdata('Email'))
		{
			
			$this->load->view('Student/parent_student_semester');
		}
		else
		{
			$this->parent_login();
		}
		}
	public function parent_student_internal($sem)
	{
		if($this->session->has_userdata('Email'))
		{
			 $this->load->model('Studentmodel');
			 $arrData['assignment']=$this->Studentmodel->student_assignment_upload_model();
			  $arrData['seminar']=$this->Studentmodel->student_seminar_upload_model();
			  $arrData['internal']=$this->Studentmodel->student_result_model($sem);
			$this->load->view('student/parent_student_internal',$arrData);
		}
		else
		{
			$this->parent_login();
		}
	}

	public function student_login()
	{
		$Email=$this->input->post('email');
		$password=$this->input->post('password');
		$student_log=array('s_email'=>$Email,'register_no'=>$password);
		$this->load->model('Studentmodel');
		$count=$this->Studentmodel->student_login_model($student_log);
		if($count>0)
		{
			echo "<script>alert('Thank you')</script>";
			$this->session->set_userdata('Email',$Email);
			$this->student_home();
		}
		else
		{
			echo "<script>alert('Login failed')</script>";
			$this->student_index();
		}
	}


	public function student_home()
	{
		if($this->session->has_userdata('Email'))
		{
		$this->load->model('Studentmodel');
			$arrData['syllabus']=$this->Studentmodel->subject_fetch_model();
			$this->load->view('student/student_home',$arrData);
		}
		else
		{
			$this->student_index();
		}
	}
	public function subject_seminar()
	{
		if($this->session->has_userdata('Email'))
		{
			$this->load->model('Studentmodel');
			$arrData['syllabus']=$this->Studentmodel->subject_fetch_model();
			$this->load->view('student/subject_seminar',$arrData);
		}
		else
		{
			$this->student_index();
		}
	}
	public function subject_assignment()
	{
		if($this->session->has_userdata('Email'))
		{
			$this->load->model('Studentmodel');
			$arrData['syllabus']=$this->Studentmodel->subject_fetch_model();
			$this->load->view('student/subject_assignment',$arrData);
		}
		else
		{
			$this->student_index();
		}
	}


	public function assignment_topic($subject_id)
	{
		if($this->session->has_userdata('Email'))
		{
			$this->load->model('Studentmodel');
			$asgnmnt['asgnmnt']=$this->Studentmodel->assignment_topic_model($subject_id);
			$this->load->view('Student/assignment_topic',$asgnmnt);
		}
		else
		{
			$this->student_index();
		}
	}


	public function assignment_submission()
	{
		if($this->session->has_userdata('Email'))
		{
			$student_email=$this->input->post('student_email');
			$faculty_email=$this->input->post('faculty_email');
			$assignment_id=$this->input->post('assignment_id');
			$subject_id=$this->input->post('subject_id');
			$department_id=$this->input->post('department_id');
			$semester=$this->input->post('semester');
			$faculty_id=$this->input->post('faculty_id');
			$submition_date=$this->input->post('a_date');
			$subject_name=$this->input->post('subject_name');
			$student_id=$this->input->post('student_id');
			$todaydate=date('y-m-d');

			$image=$_FILES['image']['name'];
			$time = Time();
			$images = explode('.',$image);
			$photo =$time.'.'.end($images);
			$config['upload_path']= './Asset/Student/assignment_answer';
			$config['allowed_types']= 'pdf';
			$config['file_name'] = $photo;
			$this->load->library('upload', $config);
			$this->upload->initialize($config);
			//date check
			if(strtotime($todaydate)<strtotime($submition_date))
			{
				//date check
			if( $this->upload->do_upload('image'))
			{
				$assignment_upload=array('student_email'=>$student_email,'faculty_email'=>$faculty_email,'assignment_id'=>$assignment_id,'subject_id'=>$subject_id, 'department_id'=>$department_id,'semester'=>$semester,'faculty_id'=>$faculty_id,'submition_date'=>$submition_date,'subject_name'=>$subject_name,'student_id'=>$student_id,'assignment_upload'=>$photo,'assignment_mark'=>'Pending');
				$this->load->model('Studentmodel');
				$exe1=$this->Studentmodel->assignment_submission($assignment_upload);
			
				if($exe1==1)
				{
						$student_status=array('student_status'=>'submitted');
						$exe2=$this->Studentmodel->student_status_model($assignment_id,$student_status);
						if($exe2==1)
						{
							echo "<script>alert('Submitted Successfully!!!')</script>";
							$this->assignment_topic();
						}
						else
						{
							echo "<script>alert('Failed To Update!!')</script>";
							$this->assignment_topic();
						}
				}
				else
				{
		
					echo "<script>alert('failed')</script>";
					$this->assignment_topic();
				}
			}
			else
			{
				echo "<script>alert('Invalid Image')</script>";
					$this->assignment_topic();
			}

//date check
}
		else
		{
			echo "<script>alert('Submission date is over')</script>";
			$this->assignment_topic();
		}
			//date check
		}
		else
		{
			$this->student_index();
		}
	}




	public function seminar_topic($subject_id)
	{
		if($this->session->has_userdata('Email'))
		{
			$this->load->model('Studentmodel');
			$seminar['smnr']=$this->Studentmodel->seminar_topic_model($subject_id);
			$this->load->view('Student/seminar_topic',$seminar);
		}
		else
		{
			$this->student_index();
		}
	}


	public function seminar_submission()
	{
	if($this->session->has_userdata('Email'))
	{
		$seminar_topic=$this->input->post('seminar_topic');
		$student_email=$this->input->post('student_email');
		$faculty_email=$this->input->post('faculty_email');
		$seminar_id=$this->input->post('seminar_id');
		$subject_id=$this->input->post('subject_id');
		$department_id=$this->input->post('department_id');
		$semester=$this->input->post('semester');
		$faculty_id=$this->input->post('faculty_id');
		$submition_date=$this->input->post('a_date');
		$subject_name=$this->input->post('subject_name');
		$student_id=$this->input->post('student_id');
		$todaydate=date('y-m-d');
		$image=$_FILES['image']['name'];
			 $time = Time();
			 $images = explode('.',$image);
			 $photo =$time.'.'.end($images);
			 $config['upload_path']= './Asset/Student/seminar';
			 $config['allowed_types']= 'mp4';
			 $config['file_name'] = $photo;
			$this->load->library('upload', $config);
			 $this->upload->initialize($config);

			 //date check
			if(strtotime($todaydate)<=strtotime($submition_date))
			{
				//date check

			 if( $this->upload->do_upload('image'))
			{
				$seminar_submission=array('department_id'=>$department_id,'faculty_email'=>$faculty_email,'faculty_id'=>$faculty_id,'semester'=>$semester,'seminar_topic'=>$seminar_topic,'student_email'=>$student_email,'student_id'=>$student_id,'subject_id'=>$subject_id,'subject_name'=>$subject_name,'submission_date'=>$submition_date,'seminar_uploding'=>$photo,'seminar_mark'=>'Pending');
				$this->load->model('Studentmodel');
				$exe1=$this->Studentmodel->seminar_submission($seminar_submission);
			
				if($exe1==1)
				{
						$student_status=array('seminar_student_status'=>'submitted');
						$exe2=$this->Studentmodel->student_seminar_status_model($seminar_id,$student_status);
						if($exe2==1)
						{
							echo "<script>alert('Submitted Successfully!!!')</script>";
							$this->seminar_topic();
						}
						else
						{
							echo "<script>alert('Failed To Update!!')</script>";
							$this->seminar_topic();
						}
				}
				else
				{
		
					echo "<script>alert('failed')</script>";
					$this->seminar_topic();
				}
			}
			else
			{
				echo "<script>alert('Invalid Image')</script>";
					$this->seminar_topic();
			}

			//date check
			}
		else
		{
			echo "<script>alert('Submission date is over')</script>";
			$this->seminar_topic();
		}
			//date check
	}
	else
	{
		$this->student_index();
	}
	}

public function parent_student_leave()
{
	if($this->session->has_userdata('Email'))
		{
			$this->load->model('Studentmodel');
			$arrData['stdnt_leave']=$this->Studentmodel->student_leave_model();
			$this->load->view('Student/parent_student_leave',$arrData);
		}
		else
		{
			$this->parent_login();
		}
}


	public function student_leave()
	{
		if($this->session->has_userdata('Email'))
		{
			$this->load->model('Studentmodel');
			$arrData['stdnt_leave']=$this->Studentmodel->student_leave_model();
			$this->load->view('Student/student_leave',$arrData);
		}
		else
		{
			$this->student_index();
		}
	}
	public function parent_internal_timetable($semester)
	{
		if($this->session->has_userdata('Email'))
		{
			$this->load->model('Studentmodel');
			$arrData['semester']=$this->Studentmodel->groupby_semester();
			$arrData['timetable']=$this->Studentmodel->stdnt_timetable_model($semester);
			$this->load->view('Student/parent_internal_timetable',$arrData);
		}
		else
		{
			$this->parent_login();
		}
	}
	public function timetable($sem)
	{
		if($this->session->has_userdata('Email'))
		{
			$this->load->model('Studentmodel');
			$arrData['semester']=$this->Studentmodel->groupby_semester();
			$arrData['timetable']=$this->Studentmodel->stdnt_timetable_model($sem);
			$this->load->view('Student/timetable',$arrData);
		}
		else
		{
			$this->student_index();
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

	public function syllabus()
	{
		if($this->session->has_userdata('Email'))
		{
			$this->load->model('Studentmodel');
			$arrData['syllabus']=$this->Studentmodel->subject_fetch_model();
			$this->load->view('Student/subject',$arrData);
		}
		else
		{
			$this->student_index();
		}
	}
	public function subject_onlineclass()
	{
		if($this->session->has_userdata('Email'))
		{
			$this->load->model('Studentmodel');
			$arrData['syllabus']=$this->Studentmodel->subject_fetch_model();
			$this->load->view('Student/subject_onlineclass',$arrData);
		}
		else
		{
			$this->student_index();
		}
	}

	public function syllabus_fetch($subject_id)
	{

		if($this->session->has_userdata('Email'))
		{
			$this->load->model('Studentmodel');
			$arrData['syllabus']=$this->Studentmodel->syllabus_fetch_model($subject_id);
			$this->load->view('Student/syllabus',$arrData);
		}
		else
		{
			$this->student_index();
		}
	}

	public function faculty_fetch($subject_id)
	{
		if($this->session->has_userdata('Email'))
		{
			$this->load->model('Studentmodel');
			$arrData['faculty_fetch']=$this->Studentmodel->faculty_fetch_model($subject_id);
			$this->load->view('Student/faculty',$arrData);
		}
		else
		{
			$this->student_index();
		}
	}

	public function student_profile()
	{
		if($this->session->has_userdata('Email'))
		{
			$this->load->model('Studentmodel');
			$arrData['profile']=$this->Studentmodel->myprofile_model();
			$this->load->view('Student/student_profile',$arrData);
		}
		else
		{
			$this->student_index();
		}
	}
	public function profile_update($student_id)
	{
	$name=$this->input->post('name');
	$email=$this->input->post('email');
	$dob=$this->input->post('dob');
	$ph=$this->input->post('phone');
	$address=$this->input->post('address');
	$result=array('s_name'=>$name,'s_email'=>$email,'s_dob'=>$dob,'s_phone'=>$ph,'s_address'=>$address);
				$this->load->model('Studentmodel');
				$exe1=$this->Studentmodel->profile_update_id_model($result,$student_id);
			
				if($exe1==1)
				{
					//echo "<script>alert('Added!!!')</script>";
					$this->student_profile();
				}
				else
				{
		
					//echo "<script>alert('failed')</script>";
					$this->student_profile();
				}
	}


		public function student_semester()
		{
			if($this->session->has_userdata('Email'))
		{
			// $this->load->model('Studentmodel');
			// $arrData['profile']=$this->Studentmodel->myprofile_model();
			$this->load->view('Student/student_semester');
		}
		else
		{
			$this->student_index();
		}
		}

		public function result($sem)
		{
			if($this->session->has_userdata('Email'))
			{
			 $this->load->model('Studentmodel');
			 $arrData['assignment']=$this->Studentmodel->student_assignment_upload_model();
			  $arrData['seminar']=$this->Studentmodel->student_seminar_upload_model();
			  $arrData['internal']=$this->Studentmodel->student_result_model($sem);
			$this->load->view('Student/internalmark',$arrData);
			}
			else
			{
			$this->student_index();
			}
		}
		public function parent_semester_timetable()
		{
			if($this->session->has_userdata('Email'))
			{
			$this->load->model('Studentmodel');
			$arrData['semester']=$this->Studentmodel->semester_timetable_fetch_model();
			$this->load->view('Student/parent_semester_timetable',$arrData);
			}
			else
			{
			$this->parent_login();
			}
		}

		public  function semester_timetable()
		{
			if($this->session->has_userdata('Email'))
			{
			$this->load->model('Studentmodel');
			$arrData['semester']=$this->Studentmodel->semester_timetable_fetch_model();
			$this->load->view('Student/semester_timetable',$arrData);
			}
			else
			{
			$this->student_index();
			}
		}

		public function onlineclass($subject_id)
		{
			if($this->session->has_userdata('Email'))			
			{
				 $this->load->model('Studentmodel');
				 $result['online']=$this->Studentmodel->onlineclass_model($subject_id);
				$this->load->view('student/onlineclass',$result);
			}
			else
			{
				$this->student_index();
			}
		}
		
		public function seme_internal_timetable()
		{
			if($this->session->has_userdata('Email'))			
			{
				 
				$this->load->view('student/seme_internal_timetable');
			}
			else
			{
				$this->student_index();
			}
		}

		public function parent_sem_internal_timetable()
		{
			if($this->session->has_userdata('Email'))
		{
			
			$this->load->view('Student/parent_sem_internal_timetable');
		}
		else
		{
			$this->student_index();
		}
		}

		public function subject_topic()
		{
			$this->load->model('Studentmodel');
			$arrData['subject']=$this->Studentmodel->subject_fetch_model();
			$this->load->view('Student/subject_topic',$arrData);
		}

		public function topic_cover_fetch($subject_id)
		{
			if($this->session->has_userdata('Email'))
		{
			$this->load->model('Studentmodel');
			$arrData['syllabus']=$this->Studentmodel->syllabus_fetch_model($subject_id);
			$this->load->view('Student/topic_cover_fetch',$arrData);
		}
		else
		{
			$this->student_index();
		}
		}

		public function Manage_Assignment()
		{
			if($this->session->has_userdata('Email'))
			{
				$this->load->model('Studentmodel');
				$arrData['assignment']=$this->Studentmodel->Manage_Assignment_model();
				$this->load->view('Student/Manage_Assignment',$arrData);
			}
			else
			{
				$this->student_index();
			}
		}

		public function update_assignment($student_assignment_upload_id)
		{		
			$submition_date=$this->input->post('submition_date');
			$todaydate=date('y-m-d');
			//date check
			if(strtotime($todaydate)<strtotime($submition_date))
			{
				//date check
 				$image=$_FILES['assignment']['name'];
				if($image!="")
				{
					$time = Time();
					$images = explode('.',$image);
					$Add_photos =$time.'.'.end($images);
					$config['upload_path']= './Asset/Student/assignment_answer';
					$config['allowed_types']= 'pdf';
					$config['file_name'] = $Add_photos;
					$this->load->library('upload', $config);
					$this->upload->initialize($config);
						if($this->upload->do_upload('assignment'))
						{
							$result=array('assignment_upload'=>$Add_photos);
							$this->load->model('Studentmodel');
							$exe=$this->Studentmodel->update_assignment_model($result,$student_assignment_upload_id);
							if($exe)
							{
								echo "<script>alert('Successfully Updated ')</script>";
								$this->Manage_Assignment();
							}
							else
							{
								echo "<script>alert('Failed to update')</script>";
								$this->Manage_Assignment();
							}
						}
						else
						{
							echo "<script>alert('Invalid pdf')</script>";
							$this->Manage_Assignment();
						}
				}
	//date check
			}
			else
			{
				echo "<script>alert('Submission date is over')</script>";
				$this->assignment_topic();
			}
			//date check
		}




		public function manage_seminar()
		{
			if($this->session->has_userdata('Email'))
			{
				$this->load->model('Studentmodel');
				$result['seminar']=$this->Studentmodel->submitted_seminar();
				$this->load->view('Student/manage_seminar',$result);
			}
			else
			{
				$this->student_index();
			}
		}


		public function update_seminar($student_seminar_id )
		{
			// $submition_date=$this->input->post('submition_date');
			// $todaydate=date('y-m-d');
			// //date check
			// if(strtotime($todaydate)<strtotime($submition_date))
			// {
				//date check
 				$image=$_FILES['seminar']['name'];
				if($image!="")
				{
					$time = Time();
					$images = explode('.',$image);
					$Add_photos =$time.'.'.end($images);
					$config['upload_path']= './Asset/Student/seminar';
					 $config['allowed_types']= 'mp4';
					$config['file_name'] = $Add_photos;
					$this->load->library('upload', $config);
					$this->upload->initialize($config);
						if($this->upload->do_upload('seminar'))
						{
							$result=array('seminar_uploding'=>$Add_photos);
							$this->load->model('Studentmodel');
							$exe=$this->Studentmodel->update_seminar_model($result,$student_seminar_id );
							if($exe)
							{
								echo "<script>alert('Successfully Updated ')</script>";
								$this-> manage_seminar();
							}
							else
							{
								echo "<script>alert('Failed to update')</script>";
								$this-> manage_seminar();
							}
						}
						else
						{
							echo "<script>alert('Invalid Video')</script>";
							$this-> manage_seminar();
						}
				}
	//date check
			// }
			// else
			// {
			// 	echo "<script>alert('Submission date is over')</script>";
			// 	$this-> manage_seminar();
			// }
			//date check
		}










}
