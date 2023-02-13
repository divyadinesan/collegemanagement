<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Facultycontroller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

   public function seminar_mark($student_seminar_id)
   {
   	$mark=$this->input->post('mark');
		$arrayName = array('seminar_mark' => $mark);
		$this->load->model('Facultymodel');
		$exe=$this->Facultymodel->seminar_mark_model($student_seminar_id,$arrayName);
		if($exe)
		{
			echo "<script>alert('Successfully Added')</script>";
			$this->students_seminar();
		}
		else
		{
			echo "<script>alert('failed! Please Try Again!!!')</script>";
			$this->students_seminar();
		}
   }
	public function assignment_mark($student_assignment_upload_id )
	{
		$mark=$this->input->post('mark');
		$arrayName = array('assignment_mark' => $mark);
		$this->load->model('Facultymodel');
		$exe=$this->Facultymodel->assignment_mark_model($student_assignment_upload_id,$arrayName);
		if($exe)
		{
			echo "<script>alert('Successfully Added')</script>";
			$this->student_assignments();
		}
		else
		{
			echo "<script>alert('failed! Please Try Again!!!')</script>";
			$this->student_assignments();
		}
	}
	public function faculty_index()
	{
		$this->load->model('indexmodel');
	$Arrdata['faculty']=$this->indexmodel->faculty_fetch_model();
	$Arrdata['department']=$this->indexmodel->department_fetch_model();
	$this->load->view('Faculty/faculty_index',$Arrdata);
		//$this->load->view('Faculty/faculty_index');
	}


	public function faculty_login_insrt()
	{
		$email=$this->input->post('email');
		$password=$this->input->post('password');
		$faculty_log=array('faculty_email'=>$email,'faculty_password'=>$password);
		$this->load->model('Facultymodel');
		$count=$this->Facultymodel->log_faculty($faculty_log);
		if($count>0)
		{
			$this->session->set_flashdata('login_success','1');
			// echo "<script>alert('Thank you')</script>";
			//swal("thank you!");  
			$this->session->set_userdata('email',$email);
			$this->faculty_profile();
		}
		else
		{
			echo "<script>alert('Login failed! Please Try Again!!!')</script>";
			$this->faculty_index();
		}
	}


	public function faculty_home()
	{	
		if($this->session->has_userdata('email'))
		{
			
		$this->load->view('Faculty/faculty_home');
		}
		else
		{
			$this->faculty_index();
		}
	}




	public function faculty_syllebus()
	{
		if($this->session->has_userdata('email'))
		{
		 $this->load->model('Facultymodel');
		 $exe['facultysubject']=$this->Facultymodel->facultysubject_fetch_model();
		 $exe['slbs']=$this->Facultymodel->faculty_syllabus_model();
		$this->load->view('Faculty/syllebus',$exe);
		}
		else
		{
			$this->faculty_index();
		}
	}



	public function faculty_profile()
	{
		if($this->session->has_userdata('email'))
		{
			$this->load->model('Facultymodel');
			$exe['f_profile']=$this->Facultymodel->faculty_fetchh_model();
			$this->load->view('Faculty/faculty_profile',$exe);
		}
		else
		{
			$this->faculty_index();
		}
	}
	public function faculty_profile_update()
	{
			 $faculty_id=$this->input->post('faculty_id');
 	$faculty_name=$this->input->post('f_name');
 	$faculty_dateofbirth=$this->input->post('f_dob');
 	$faculty_gender=$this->input->post('gender');
 	$faculty_address=$this->input->post('f_address');
 	$faculty_phone=$this->input->post('f_phone');
	$faculty_email=$this->input->post('f_email');
// echo 	$faculty_password=$this->input->post('faculty_password');
	// $image=$_FILES['faculty_img']['name'];
	// if($image!="")
	// {
	// $time = Time();
	// $images = explode('.',$image);
	// $Add_photos =$time.'.'.end($images);
	// $config['upload_path']= './Asset/Admin/faculty/';
	// $config['allowed_types']= 'jpg|png|jpeg';
	// $config['file_name'] = $Add_photos;
	// $this->load->library('upload', $config);
	// $this->upload->initialize($config);
	// if($this->upload->do_upload('faculty_img'))
	// {
	// 	$result=array('faculty_name'=>$faculty_name,'faculty_dateofbirth'=>$faculty_dateofbirth,'faculty_gender'=>$faculty_gender,'faculty_address'=>$faculty_address,'faculty_phone'=>$faculty_phone,'faculty_email'=>$faculty_email,'faculty_image'=>$Add_photos);
	// 			$this->load->model('Facultymodel');
	// 			$exe=$this->Facultymodel->faculty_update_id_model($result,$faculty_id);
	// 	if($exe)
	// 	{
	// 		echo "<script>alert('Successfully Updated ')</script>";
	// 		$this->faculty_profile();
	// 	}
	// 	else
	// 	{
	// 		echo "<script>alert('Failed to update')</script>";
	// 		$this->faculty_profile();
	// 	}
	// }
	// else
	// {
	// 	echo "<script>alert('Invalid photo')</script>";
	// 		$this->faculty_profile();
	// }
	// }
	// else
	// {
		$result=array('faculty_name'=>$faculty_name,'faculty_dateofbirth'=>$faculty_dateofbirth,'faculty_gender'=>$faculty_gender,'faculty_address'=>$faculty_address,'faculty_phone'=>$faculty_phone,'faculty_email'=>$faculty_email);
				$this->load->model('Facultymodel');
				$exe=$this->Facultymodel->faculty_update_id_model($result,$faculty_id);
		if($exe==1)
		{
			echo "<script>alert('Successfully Updated ')</script>";
			$this->faculty_profile();
		}
		else
		{
			echo "<script>alert('Failed to update ')</script>";
			$this->faculty_profile();
		}
	//}	


	}



	public function holiday()
	{
		if($this->session->has_userdata('email'))
		{
			$this->load->model('Facultymodel');
			$exe['holiday']=$this->Facultymodel->holiday_fetch_model();
			$this->load->view('Faculty/holidays',$exe);
		}
		else
		{
			$this->faculty_index();
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


	public function Student_Attendance()
	{
		if($this->session->has_userdata('email'))
		{
			$this->load->model('Facultymodel');
			$exe['facultysubject']=$this->Facultymodel->facultysubject_fetch_model();
			$exe['facultystudent']=$this->Facultymodel->facultystudent();
			
			$this->load->view('Faculty/add_student_attendance',$exe);
		}
		else
		{
			$this->faculty_index();
		}
	}
	public function assignment_delete($assignment_upload)
	{
		$this->load->model('Facultymodel');
			$execute=$this->Facultymodel->assignment_delete_model($assignment_upload);
			if($execute)
			{
				echo "<script>alert('Successfully Deleted')</script>";
							$this->manage_assignment();
			}
			else
			{
				echo "<script>alert('Failed To Deleted')</script>";
							$this->manage_assignment();
			}


	}
	public function assignment_edit($assignment_upload)
	{
		if($this->session->has_userdata('email'))
		{
			$this->load->model('Facultymodel');
			$Arrdata['assignment']=$this->Facultymodel->assignment_fetch_asgmnt_model($assignment_upload);
			$this->load->view('Faculty/assignment_edit',$Arrdata);
		}
		else
		{
			$this->faculty_index();
		}
	}
	public function assignment_update($assignment_upload)
	{
		$submit_date=$this->input->post('submit_date');
 		
 		$image=$_FILES['pdf_question']['name'];
	if($image!="")
	{
		$time = Time();
		$images = explode('.',$image);
		$Add_photos =$time.'.'.end($images);
		$config['upload_path']= './Asset/Faculty/assignment_question';
		$config['allowed_types']= 'pdf';
		$config['file_name'] = $Add_photos;
		$this->load->library('upload', $config);
		$this->upload->initialize($config);
		if($this->upload->do_upload('pdf_question'))
		{
			$result=array('submition_date'=>$submit_date,'assignment_upload'=>$Add_photos);
			$this->load->model('Facultymodel');
			$exe=$this->Facultymodel->assignment_update_model($result,$assignment_upload);
			if($exe)
			{
				echo "<script>alert('Successfully Updated ')</script>";
				$this->manage_assignment();
			}
			else
			{
				echo "<script>alert('Failed to update')</script>";
				$this->manage_assignment();
			}
		}
		else
		{
			echo "<script>alert('Choose Pdf File!!')</script>";
			$this->manage_assignment();
		}
	}
	else
	{
		$result=array('submition_date'=>$submit_date);
		$this->load->model('Facultymodel');
				$exe=$this->Facultymodel->assignment_update_model($result,$assignment_upload);
		if($exe)
		{
			echo "<script>alert('Successfully Updated ')</script>";
			$this->manage_assignment();
		}
		else
		{
			echo "<script>alert('Failed to update')</script>";
			$this->manage_assignment();
		}
	}	
	
	}

	public function manage_assignment()
	{
		if($this->session->has_userdata('email'))
		{
			
			$this->load->model('Facultymodel');
			$arrData['assignmnet']=$this->Facultymodel->assignment_fetch_model();
			$this->load->view('Faculty/manage_assignment',$arrData);
		}
		else
		{
			$this->faculty_index();
		}
	}
	public function manage_seminar()
	{
		if($this->session->has_userdata('email'))
		{
			$this->load->model('Facultymodel');
			$arrData['seminar']=$this->Facultymodel->seminar_fetch_model();
		$this->load->view('Faculty/manage_seminar',$arrData);
		}
		else
		{
			$this->faculty_index();
		}
	}
	public function seminar_edit($seminar_id)
	{
		if($this->session->has_userdata('email'))
		{
			$this->load->model('Facultymodel');
			$arrData['seminar']=$this->Facultymodel->seminar_fetch_id_model($seminar_id);
		$this->load->view('Faculty/seminar_edit',$arrData);
		}
		else
		{
			$this->faculty_index();
		}
	}

	public function seminar_update($seminar_id)
	{
		$submit_date=$this->input->post('submit_date');
		$seminar_topic=$this->input->post('seminar_topic');
		$arrayName = array('submission_date' => $submit_date,'seminar_topic'=>$seminar_topic);
		$this->load->model('Facultymodel');
		$exe=$this->Facultymodel->seminar_update_model($seminar_id,$arrayName);
		if($exe)
		{
			echo "<script>alert('Successfully Updated ')</script>";
			$this->manage_seminar();
		}
		else
		{
			echo "<script>alert('Failed to update')</script>";
			$this->manage_seminar();
		}
	}
	// public function seminar_delete($seminar_id)
	// {
	// 	$this->load->model('Facultymodel');
	// 		$execute=$this->Facultymodel->seminar_delete_model($seminar_id);
	// 		if($execute)
	// 		{
	// 			echo "<script>alert('Successfully Deleted')</script>";
	// 						$this->manage_seminar();
	// 		}
	// 		else
	// 		{
	// 			echo "<script>alert('Failed To Deleted')</script>";
	// 						$this->manage_seminar();
	// 		}

	// }

	

		public function attendance_insert()
		{
			$this->load->library('form_validation');
		$this->form_validation->set_rules('student_id[]', 'student_id', 'required');
		$this->form_validation->set_rules('student_email[]', 'student_id', 'required');
		$this->form_validation->set_rules('subject_id', 'subject_id', 'required');
		$this->form_validation->set_rules('department_id', 'department_id', 'required');
		$this->form_validation->set_rules('semester', 'semester', 'required');
		$this->form_validation->set_rules('faculty_id', 'faculty_id', 'required');
		$this->form_validation->set_rules('date', 'date', 'required');
		$this->form_validation->set_rules('attendance_status[]', 'attendance_status', 'required');
		$this->form_validation->set_rules('subject_name', 'subject_name', 'required');
		if ($this->form_validation->run())
			{
					$data = $this->input->post();

					for ($i=0; $i <count($data['attendance_status']) ; $i++)
					{ 
						$dataArr['subject_id'] = $data['subject_id'];

						$dataArr['department_id'] = $data['department_id'];
						$dataArr['semester'] = $data['semester'];
						$dataArr['faculty_id'] = $data['faculty_id'];
						$dataArr['a_date'] = $data['date'];
						$dataArr['subject_name'] = $data['subject_name'];
						$dataArr['attendance_status'] = $data['attendance_status'][$i];
						$dataArr['student_id'] = $data['student_id'][$i];
						$dataArr['s_email'] = $data['student_email'][$i];

						

						$this->load->model('Facultymodel');
						$exee=$this->Facultymodel->attendance_insert_model($dataArr);

						
 					}	
 					if($exee)
						{
						echo "<script>alert('Added!!!')</script>";
							$this->Student_Attendance();
						}

						else
						{
							echo "<script>alert(' Please Try Again!!!')</script>";
							$this->Student_Attendance();
						}				
			}	
			
		}


	public function assignment()
	{
		if($this->session->has_userdata('email'))
		{
			$this->load->model('Facultymodel');
			$exe['facultysubject']=$this->Facultymodel->facultysubject_fetch_model();
			$exe['facultystudent']=$this->Facultymodel->facultystudent();
			$this->load->view('Faculty/assignment',$exe);
			$this->load->model('Facultymodel');
		}
		else
		{
			$this->faculty_index();
		}
	}



  public function assignment_insert()
  	{
 	$this->load->library('form_validation');
		$this->form_validation->set_rules('subject', 'student_id', 'required');
		$this->form_validation->set_rules('date', 'student_email', 'required');
		$this->form_validation->set_rules('student_email[]', 'faculty_email', 'required');
		$this->form_validation->set_rules('faculty_email', 'semester', 'required');
		$this->form_validation->set_rules('student_id[]', 'semester', 'required');
		$this->form_validation->set_rules('subject_id', 'faculty_id', 'required');
		$this->form_validation->set_rules('department_id', 'date', 'required');
		$this->form_validation->set_rules('semester', 'attendance_status', 'required');
		$this->form_validation->set_rules('faculty_id', 'attendance_status', 'required');
		$this->form_validation->set_rules('subject_name', 'attendance_status', 'required');
			$image=$_FILES['image']['name'];
			$time = Time();
			$images = explode('.',$image);
			$photo =$time.'.'.end($images);
			$config['upload_path']= './Asset/Faculty/assignment_question';
			$config['allowed_types']= 'pdf';
			$config['file_name'] = $photo;
			$this->load->library('upload', $config);
			$this->upload->initialize($config);
		




	 		if( $this->upload->do_upload('image'))
	 		{
				if ($this->form_validation->run())
	 			{
	 				$data = $this->input->post();
	 				for ($i=0; $i <count($data['student_id']) ; $i++)
	 				{ 


						$dataArr['faculty_email'] = $data['faculty_email'];
						$dataArr['student_email'] = $data['student_email'][$i];
						$dataArr['student_id'] = $data['student_id'][$i];
						$dataArr['subject_id'] = $data['subject_id'];
						$dataArr['department_id'] = $data['department_id'];
						$dataArr['semester'] = $data['semester'];
						$dataArr['faculty_id'] = $data['faculty_id'];
						$dataArr['submition_date'] = $data['date'];
						$dataArr['subject_name'] = $data['subject_name'];
						$dataArr['student_status'] = 'Not Submitted Yet';
						$dataArr['assignment_upload'] = $photo;
						$this->load->model('Facultymodel');
				$exe1=$this->Facultymodel->assignment_insert_model($dataArr);
			
				
	 		}
	 		if($exe1)
				{
					echo "<script>alert('Added!!!')</script>";
					$this->assignment();
				}
				else
				{
		
					echo "<script>alert('failed')</script>";
					$this->assignment();
				}
	 	}
			}
			else
			{
				echo "<script>alert('Invalid Image')</script>";
					$this->assignment();
			}	
 					

			
	}


	public function seminar()
	{
		if($this->session->has_userdata('email'))
		{
			$this->load->model('Facultymodel');
			$exe['facultysubject']=$this->Facultymodel->facultysubject_fetch_model();
			$exe['facultystudent']=$this->Facultymodel->facultystudent();
			$this->load->view('Faculty/seminar',$exe);
		}
		else
		{
			$this->faculty_index();
		}
	}



public function seminar_insert()
{
	$this->load->library('form_validation');
	$this->form_validation->set_rules('student_id[]', 'student_id', 'required');
	$this->form_validation->set_rules('student_email[]', 'student_email', 'required');
	$this->form_validation->set_rules('faculty_email', 'faculty_email', 'required');
	$this->form_validation->set_rules('subject_id', 'semester', 'required');
	$this->form_validation->set_rules('department_id', 'semester', 'required');
	$this->form_validation->set_rules('semester', 'faculty_id', 'required');
	$this->form_validation->set_rules('faculty_id', 'date', 'required');
	$this->form_validation->set_rules('date', 'attendance_status', 'required');
	$this->form_validation->set_rules('subject_name', 'attendance_status', 'required');
	$this->form_validation->set_rules('seminar_topic[]', 'attendance_status', 'required');
		if ($this->form_validation->run())
	 			{
	 				$data = $this->input->post();
	 				for ($i=0; $i <count($data['student_id']) ; $i++)
	 				{
	 						$dataArr['student_id'] = $data['student_id'][$i];
						$dataArr['student_email'] = $data['student_email'][$i];
						$dataArr['faculty_email'] = $data['faculty_email'];
						$dataArr['subject_id'] = $data['subject_id'];
						$dataArr['department_id'] = $data['department_id'];
						$dataArr['semester'] = $data['semester'];
						$dataArr['faculty_id'] = $data['faculty_id'];
						$dataArr['seminar_student_status'] = 'pending';
						$dataArr['subject_name'] = $data['subject_name'];
						$dataArr['submission_date'] = $data['date'];
						$dataArr['seminar_topic'] = $data['seminar_topic'][$i];
					
	$this->load->model('Facultymodel');
	$exee=$this->Facultymodel->seminar_insert_model($dataArr);
					}
	if($exee)
		{
			$this->seminar();
		}
		else
		{
			echo "<script>alert(' Please Try Again!!!')</script>";
			$this->seminar();
		}
	}
}

public function student_assignments()
{
	if($this->session->has_userdata('email'))
	{
		$this->load->model('Facultymodel');
		$result['assignment']=$this->Facultymodel->submitted_assignments();
		$this->load->view('Faculty/student_assignments',$result);
	}
	else
	{
		$this->faculty_index();
	}
}


public function students_seminar()
{
	if($this->session->has_userdata('email'))
	{
		$this->load->model('Facultymodel');
		$result['seminar']=$this->Facultymodel->submitted_seminar();
		$this->load->view('Faculty/students_seminar',$result);
	}
	else
	{
		$this->faculty_index();
	}
}

public function internal_mark()
{
	if($this->session->has_userdata('email'))
	{
		$this->load->model('Facultymodel');
		$this->load->model('Adminmodel');
		//$exe['exam']=$this->Adminmodel->exam_name_fetch_model();
		
		$exe['facultysubject']=$this->Facultymodel->facultysubject_fetch_model();
		$exe['facultystudent']=$this->Facultymodel->facultystudent();
		$this->load->view('Faculty/internal_mark',$exe);
	}
	else
	{
		$this->faculty_index();
	}
}

	public function internal_insert()
	{
	$this->load->library('form_validation');
	$this->form_validation->set_rules('student_id[]', 'student_id', 'required');
	$this->form_validation->set_rules('student_email[]', 'student_email', 'required');
	$this->form_validation->set_rules('faculty_email', 'faculty_email', 'required');
	$this->form_validation->set_rules('subject_id', 'semester', 'required');
	$this->form_validation->set_rules('department_id', 'semester', 'required');
	$this->form_validation->set_rules('semester', 'faculty_id', 'required');
	$this->form_validation->set_rules('faculty_id', 'date', 'required');
	//$this->form_validation->set_rules('exam', 'attendance_status', 'required');
	$this->form_validation->set_rules('subject_name', 'attendance_status', 'required');
	$this->form_validation->set_rules('internal_mark[]', 'attendance_status', 'required');
		if ($this->form_validation->run())
	 			{
	 				$data = $this->input->post();
	 				//print_r($data);
	 				for ($i=0; $i <count($data['student_id']) ; $i++)
	 				{
	 						//$dataArr['exam_id'] = $data['exam'];
	 						$dataArr['subject_id'] = $data['subject_id'];
	 						$dataArr['department_id'] = $data['department_id'];
	 						$dataArr['semester'] = $data['semester'];
	 						$dataArr['faculty_id'] = $data['faculty_id'];
	 						$dataArr['faculty_email'] = $data['faculty_email'];
	 						$dataArr['subject_name'] = $data['subject_name'];
	 						$dataArr['mark'] = $data['internal_mark'][$i];
							$dataArr['student_id'] = $data['student_id'][$i];
							$dataArr['student_email'] = $data['student_email'][$i];				
							$this->load->model('Facultymodel');
							$exee=$this->Facultymodel->internal_insert_model($dataArr);
					}
	if($exee)
		{
			$this->internal_mark();
		}
		else
		{
			echo "<script>alert(' Please Try Again!!!')</script>";
			$this-> internal_mark();
		}
	}
	}

	//topic updation

	public function module1_updation($syllabus_id)
	{
		$module1=$this->input->post('module1');
		$updatem=array('module1_update'=>$module1);
		$this->load->model('Facultymodel');
		$exe=$this->Facultymodel->topic_updation_model($syllabus_id,$updatem);
		if($exe==1)
		{
			echo "<script>alert('successfully updated Topics Covered!!')</script>";
			$this-> faculty_syllebus();
		}
		else
		{
			echo "<script>alert('failed!!')</script>";
			$this-> faculty_syllebus();
		}

	}
	public function module2_updation($syllabus_id)
	{
		$module2=$this->input->post('module2');
		$updatem=array('module2_update'=>$module2);
		$this->load->model('Facultymodel');
		$exe=$this->Facultymodel->topic_updation_model($syllabus_id,$updatem);
		if($exe==1)
		{
			echo "<script>alert('successfully updated Topics Covered!!')</script>";
			$this-> faculty_syllebus();
		}
		else
		{
			echo "<script>alert('failed!!')</script>";
			$this-> faculty_syllebus();
		}

	}
	public function module3_updation($syllabus_id)
	{
		$module3=$this->input->post('module3');
		$updatem=array('module3_update'=>$module3);
		$this->load->model('Facultymodel');
		$exe=$this->Facultymodel->topic_updation_model($syllabus_id,$updatem);
		if($exe==1)
		{
			echo "<script>alert('successfully updated Topics Covered!!')</script>";
			$this-> faculty_syllebus();
		}
		else
		{
			echo "<script>alert('failed!!')</script>";
			$this-> faculty_syllebus();
		}

	}
	public function module4_updation($syllabus_id)
	{
		$module4=$this->input->post('module4');
		$updatem=array('module4_update'=>$module4);
		$this->load->model('Facultymodel');
		$exe=$this->Facultymodel->topic_updation_model($syllabus_id,$updatem);
		if($exe==1)
		{
			echo "<script>alert('successfully updated Topics Covered!!')</script>";
			$this-> faculty_syllebus();
		}
		else
		{
			echo "<script>alert('failed!!')</script>";
			$this-> faculty_syllebus();
		}

	}
	public function module5_updation($syllabus_id)
	{
		$module5=$this->input->post('module5');
		$updatem=array('module5_update'=>$module5);
		$this->load->model('Facultymodel');
		$exe=$this->Facultymodel->topic_updation_model($syllabus_id,$updatem);
		if($exe==1)
		{
			echo "<script>alert('successfully updated Topics Covered!!')</script>";
			$this-> faculty_syllebus();
		}
		else
		{
			echo "<script>alert('failed!!')</script>";
			$this-> faculty_syllebus();
		}

	}

	public function recorded_class_upload()
	{
		if($this->session->has_userdata('email'))
		{
			$this->load->model('Facultymodel');
			$exe['facultysubject']=$this->Facultymodel->facultysubject_fetch_model();
			$exe['facultystudent']=$this->Facultymodel->facultystudent();
			$this->load->view('Faculty/recorded_class_upload',$exe);
			
		}
		else
		{
			$this->faculty_index();
		}
	}

	public function recorded_class_insert()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('module', 'module', 'required');
		$this->form_validation->set_rules('subject', 'student_id', 'required');
		$this->form_validation->set_rules('topics', 'student_email', 'required');
		$this->form_validation->set_rules('student_email[]', 'faculty_email', 'required');
		$this->form_validation->set_rules('faculty_email', 'semester', 'required');
		$this->form_validation->set_rules('student_id[]', 'semester', 'required');
		$this->form_validation->set_rules('subject_id', 'faculty_id', 'required');
		$this->form_validation->set_rules('department_id', 'date', 'required');
		$this->form_validation->set_rules('semester', 'attendance_status', 'required');
		$this->form_validation->set_rules('faculty_id', 'attendance_status', 'required');
		$this->form_validation->set_rules('subject_name', 'attendance_status', 'required');
			$image=$_FILES['image']['name'];
			$time = Time();
			$images = explode('.',$image);
			$photo =$time.'.'.end($images);
			$config['upload_path']= './Asset/Faculty/recorded_class';
			$config['allowed_types']= 'mp4';
			$config['file_name'] = $photo;
			$this->load->library('upload', $config);
			$this->upload->initialize($config);

	 		if( $this->upload->do_upload('image'))
	 		{
				if ($this->form_validation->run())
	 			{
	 				$data = $this->input->post();
	 				for ($i=0; $i <count($data['student_id']) ; $i++)
	 				{ 


						$dataArr['faculty_email'] = $data['faculty_email'];
						$dataArr['student_email'] = $data['student_email'][$i];
						$dataArr['student_id'] = $data['student_id'][$i];
						$dataArr['subject_id'] = $data['subject_id'];
						$dataArr['department_id'] = $data['department_id'];
						$dataArr['semester'] = $data['semester'];
						$dataArr['faculty_id'] = $data['faculty_id'];
						$dataArr['module'] = $data['module'];
						$dataArr['topics'] = $data['topics'];
						$dataArr['subject_name'] = $data['subject_name'];
						
						$dataArr['recorded_class_upload'] = $photo;
						$this->load->model('Facultymodel');
				$exe1=$this->Facultymodel->recorded_class_insert_model($dataArr);
			
				
	 		}
	 		if($exe1)
				{
					echo "<script>alert('Successfully Added')</script>";
					$this->recorded_class_upload();
				}
				else
				{
		
					echo "<script>alert('failed')</script>";
					$this->recorded_class_upload();
				}
	 	}
			}
			else
			{
				echo "<script>alert('Invalid Image')</script>";
					$this->recorded_class_upload();
			}	
 				
	}

	public function semester_timetable()
	{
		if($this->session->has_userdata('email'))
		{
			$this->load->model('Facultymodel');
			$arrData['semester']=$this->Facultymodel->semester_timetable_fetch_model();
			$this->load->view('Faculty/semester_timetable',$arrData);
		}
		else
		{
			$this->faculty_index();
		}
	}
	public function Manage_recordedclass()
	{
		if($this->session->has_userdata('email'))
		{
			$this->load->model('Facultymodel');
			$arrData['online']=$this->Facultymodel->onlineclass_model();
			$this->load->view('Faculty/Manage_recordedclass',$arrData);
		}
		else
		{
			$this->faculty_index();
		}
	}

	public function recorded_class_delete($recorded_class_upload)
	{

		$this->load->model('Facultymodel');
		$exe=$this->Facultymodel->recorded_class_delete_model($recorded_class_upload);
		if($exe==1)
		{
			echo "<script>alert('Deleted!!')</script>";
			$this->Manage_recordedclass();
		}
		else
		{
			echo "<script>alert('failed!!')</script>";
			$this->Manage_recordedclass();
		}
	}
	public function recorded_class_edit($recorded_class_upload)
	{
		if($this->session->has_userdata('email'))
		{
			$this->load->model('Facultymodel');
			$arrData['online']=$this->Facultymodel->recorded_class_fetch_model($recorded_class_upload);
			$this->load->view('Faculty/recorded_class_edit',$arrData);
		}
		else
		{
			$this->faculty_index();
		}
	}

	public function recorded_class_update($recorded_class_upload)
	{

 		
 		$module=$this->input->post('module');
 		$topics=$this->input->post('topics');
 		$image=$_FILES['video']['name'];
	if($image!="")
	{
	$time = Time();
	$images = explode('.',$image);
	$Add_photos =$time.'.'.end($images);
	$config['upload_path']= './Asset/Faculty/recorded_class';
	$config['allowed_types']= 'mp4';
	$config['file_name'] = $Add_photos;
	$this->load->library('upload', $config);
	$this->upload->initialize($config);
	if($this->upload->do_upload('video'))
	{
		$result=array('module'=>$module,'topics'=>$topics,'recorded_class_upload'=>$Add_photos);
		$this->load->model('Facultymodel');
				$exe=$this->Facultymodel->recorded_class_update_model($result,$recorded_class_upload);
		if($exe)
		{
			echo "<script>alert('Successfully Updated ')</script>";
			$this->Manage_recordedclass();
		}
		else
		{
			echo "<script>alert('Failed to update')</script>";
			$this->Manage_recordedclass();
		}
	}
	else
	{
		echo "<script>alert('Invalid video')</script>";
			$this->Manage_recordedclass();
	}
	}
	else
	{
		$result=array('module'=>$module,'topics'=>$topics);
		$this->load->model('Facultymodel');
				$exe=$this->Facultymodel->recorded_class_update_model($result,$recorded_class_upload);
		if($exe)
		{
			echo "<script>alert('Successfully Updated ')</script>";
			$this->Manage_recordedclass();
		}
		else
		{
			echo "<script>alert('Failed to update')</script>";
			$this->Manage_recordedclass();
		}
	}	
	}

}





