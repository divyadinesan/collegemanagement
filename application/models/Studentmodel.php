<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Studentmodel extends CI_Model {

public function profile_update_id_model($result,$student_id)
{
	$this->db->where('student_id',$student_id);
	$this->db->update('student',$result);

}
public function student_already_registered($email,$reg)
{
	$this->db->where('s_email',$email);
	$this->db->where('register_no',$reg);
	return $this->db->count_all_results('student');
}
public function student_leave_alrdy_registered($leave_from)
{
	$this->db->where('leave_from',$leave_from);
	
	return $this->db->count_all_results('student_leave');
}
public function student_insert_model($result)
{
	return $this->db->insert('student',$result);
}
public function student_login_model($student_log)
{
	$this->db->where($student_log);
	return $this->db->count_all_results('student');
}
public function faculty_student_fetch_model()
{
	$email=$this->session->userdata('Email');
	$this->db->select('*');
	$this->db->from('student');
	$this->db->join('faculty','faculty.f_department_id=student.s_department_id','inner');
	$this->db->where('faculty.f_position','class_Tutor');
	$this->db->where('student.s_email',$email);
	return $this->db->get()->result();
}

public function student_leave_list_model()
{
	$email=$this->session->userdata('Email');
	$this->db->select('*');
	$this->db->from('student_leave');
	$this->db->where('student_leave.l_student_email',$email);
	return $this->db->get()->result();

}

public function assignment_topic_model($subject_id)
{
	$email=$this->session->userdata('Email');
	$this->db->select('*');
	$this->db->from('assignment');
	$this->db->join('faculty','assignment.faculty_id=faculty.faculty_id','inner');
	$this->db->where('assignment.student_email',$email);
	$this->db->where('assignment.student_status','Not Submitted Yet');
	$this->db->where('assignment.subject_id',$subject_id);
	
	return $this->db->get()->result();
}

public function assignment_submission($assignment_upload)
{
	return $this->db->insert('student_assignment_upload',$assignment_upload);
}

public function student_status_model($assignment_id,$student_status)
{
	$this->db->where('assignment.assignment_id',$assignment_id);
	return $this->db->update('assignment',$student_status);
}

public function seminar_topic_model($subject_id)
{
	$email=$this->session->userdata('Email');
	$this->db->select('*');
	$this->db->from('seminar');
	$this->db->join('faculty','seminar.faculty_id=faculty.faculty_id','inner');
	$this->db->where('seminar.student_email',$email);
	$this->db->where('seminar.seminar_student_status','pending');
	$this->db->where('seminar.subject_id',$subject_id);
	return $this->db->get()->result();
}

public function seminar_submission($seminar_submission)
{
	return $this->db->insert('student_seminar',$seminar_submission);
}

public function student_seminar_status_model($seminar_id,$student_status)
{
	$this->db->where('seminar_id ',$seminar_id);
	return $this->db->update('seminar',$student_status);
}

public function onlineclass_model($subject_id)
{
	$email=$this->session->userdata('Email');
	$this->db->select('*');
	$this->db->from('recorded_class');
	$this->db->join('faculty','recorded_class.faculty_id=faculty.faculty_id');
	$this->db->where('student_email',$email);
	$this->db->where('recorded_class.subject_id',$subject_id);
	return $this->db->get()->result();
}
public function student_leave_model()
{
	$email=$this->session->userdata('Email');
	$this->db->select('*');
	$this->db->from('attendance');
	$this->db->join('faculty','faculty.faculty_id=attendance.faculty_id');
	$this->db->where('s_email',$email);
	$this->db->where('attendance_status','Abscent');
	return $this->db->get()->result();
}


public function stdnt_timetable_model($semester)
{
	$email=$this->session->userdata('Email');
	$this->db->select('*');
	$this->db->from('time_table');
	//$this->db->group_by('time_table.subject_id');
	$this->db->join('student','student.department_id=time_table.department_id');
	 $this->db->join('department','department.department_id=time_table.department_id');
	 $this->db->join('subject','subject.subject_id=time_table.subject_id');
	 // $this->db->join('exam','exam.exam_id =time_table.Exam_id');
	$this->db->where('student.s_email',$email);
	$this->db->where('time_table.semester',$semester);
	
	return $this->db->get()->result();
}
 public function groupby_semester()
{

 		$this->db->select('*');
 		$this->db->from('time_table');
// 		  //$this->db->join('exam','exam.exam_id =time_table.Exam_id');
 		$this->db->group_by('time_table.semester');
 		return $this->db->get()->result();

 }

public function subject_fetch_model()
{
	$email=$this->session->userdata('Email');
	$this->db->select('*');
		$this->db->from('subject');
		  $this->db->join('student','subject.department_id=student.department_id');
		  $this->db->where('subject.semester=student.s_semester');
		  $this->db->where('student.s_email',$email);
		  return $this->db->get()->result();
}

public function syllabus_fetch_model($subject_id)
{
	$this->db->select('*');
	$this->db->from('syllabus');
	$this->db->where('subject_id',$subject_id);
	return $this->db->get()->result();

}
public function faculty_fetch_model($subject_id)
{
	$this->db->select('*');
	$this->db->from('subject');
	 $this->db->join('faculty','subject.faculty_id=faculty.faculty_id');
	$this->db->where('subject_id',$subject_id);
	return $this->db->get()->result();
}


public function myprofile_model()
{
	$email=$this->session->userdata('Email');
	$this->db->select('*');
	$this->db->from('student');
	$this->db->where('student.s_email',$email);
	
	return $this->db->get()->result();
}



public function Manage_Assignment_model()
{

// 	$email=$this->session->userdata('Email');
// 	$this->db->select('*');
// 	$this->db->from('student_assignment_upload');
// 	$this->db->join('student','student.student_id=student_assignment_upload.student_id');
// 	$this->db->join('department','department.department_id=student_assignment_upload.department_id');
// 	$this->db->where('student_email',$email);
// 	return $this->db->get()->result();
$email=$this->session->userdata('Email');
		$this->db->select('*');
		$this->db->from('student_assignment_upload');
		$this->db->join('faculty','faculty.faculty_id=student_assignment_upload.faculty_id'	);
		$this->db->join('student','student_assignment_upload.student_id=student.student_id'	);
		$this->db->where('student_assignment_upload.student_email',$email);
		return $this->db->get()->result();
}

public function student_result_model($sem)
{
	$email=$this->session->userdata('Email');
	$this->db->select('*');
	$this->db->from('internal_mark');
	 $this->db->join('faculty','internal_mark.faculty_id=faculty.faculty_id');
	$this->db->where('internal_mark.semester',$sem);
	$this->db->where('internal_mark.student_email',$email);
	return $this->db->get()->result();
}

public function semester_timetable_fetch_model()
{
	$email=$this->session->userdata('Email');
	$this->db->select('*');
	$this->db->from('semester_timetable');
	$this->db->join('student','student.department_id=semester_timetable.department_id');
	$this->db->join('department','department.department_id=semester_timetable.department_id');
	$this->db->where('student.s_email',$email);
	return $this->db->get()->result();
}
public function update_assignment_model($result,$student_assignment_upload_id)
{
	$this->db->where('student_assignment_upload_id',$student_assignment_upload_id);
	return $this->db->update('student_assignment_upload',$result);
	
}

 public function submitted_seminar()
	{
		$email=$this->session->userdata('Email');
		$this->db->select('*');
		$this->db->from('student_seminar');
		$this->db->join('faculty','faculty.faculty_id=student_seminar.faculty_id');
		$this->db->join('student','student_seminar.student_id=student.student_id');
		$this->db->where('student_seminar.student_email',$email);
	 	return $this->db->get()->result();
	}


	public function update_seminar_model($result,$student_seminar_id )
	{
		$this->db->where('student_seminar_id ',$student_seminar_id );
	return $this->db->update('student_seminar',$result);
	}

	public function student_assignment_upload_model()
	{
		$email=$this->session->userdata('Email');
		$this->db->select('*');
		$this->db->from('student_assignment_upload');
		$this->db->where('student_email',$email);
		
		return $this->db->get()->result();
	}
	public function student_seminar_upload_model()
	{
		$email=$this->session->userdata('Email');
		$this->db->select('*');
		$this->db->from('student_seminar');
		$this->db->where('student_email',$email);
		return $this->db->get()->result();
	}









}