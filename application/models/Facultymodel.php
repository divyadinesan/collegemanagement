<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Facultymodel extends CI_Model 
{

	public function log_faculty($faculty_log)
	{
		$this->db->where($faculty_log);
		return $this->db->count_all_results('faculty');
	}
	public function count_student_model($Arrdata1)
	{
		$this->db->where($Arrdata1);
		return $this->db->count_all_results('internal_mark');
	}
	public function faculty_syllabus_model()
	{
		$email=$this->session->userdata('email');
	 	$this->db->select('*');
	 	$this->db->from('syllabus');
	 	// $this->db->join('subject','subject.subject_id=syllabus.subject_id');
	 	// $this->db->join('faculty','faculty.faculty_id=subject.subject_id');
	 	// $this->db->where('faculty.faculty_email',$email);
	 	return $this->db->get()->result();
 	}

 	public function faculty_update_id_model($result,$faculty_id)
 	{
 		$this->db->where('faculty_id',$faculty_id);
 		$this->db->update('faculty',$result);
 	}


 	public function admin_fetch_model()
 	{
 		$this->db->select('*');
 		$this->db->from('admin');
 		return $this->db->get()->result();
 	}

 	public function faculty_fetchh_model()
 	{
		$email=$this->session->userdata('email');
		$this->db->select('*');
		$this->db->from('faculty');
		$this->db->where('faculty_email',$email);
		return $this->db->get()->result();
 	}


	public function holiday_fetch_model()
	{
		$this->db->select('*');
		$this->db->from('holiday');
		return $this->db->get()->result();
	}


	public function facultysubject_fetch_model()
	{
		$email=$this->session->userdata('email');
		$this->db->select('*');
		$this->db->from('faculty');
		$this->db->join('subject','faculty.faculty_id=subject.faculty_id');
		$this->db->join('department','department.department_id=subject.department_id');
		$this->db->where('faculty_email',$email);
		return $this->db->get()->result();
	}

	public function facultystudent()
	{
		$email=$this->session->userdata('email');
		$this->db->select('*');
		$this->db->from('subject');
		//$this->db->join('faculty','faculty.faculty_id=subject.faculty_id');
		$this->db->join('student','subject.semester=student.s_semester');
				$this->db->group_by('student.register_no');
		//$this->db->join('student','student.department_id=subject.department_id');
		return $this->db->get()->result();
	}


	public function attendance_insert_model($attendance_insert)
	{	
		return $this->db->insert('attendance',$attendance_insert);
	}


	public function assignment_insert_model($dataArr)
	{
		return $this->db->insert('assignment',$dataArr);
	}


	public function seminar_insert_model($dataArr)
	{
		return $this->db->insert('seminar',$dataArr);
	}


	public function submitted_assignments()
	{
		$email=$this->session->userdata('email');
		$this->db->select('*');
		$this->db->from('student_assignment_upload');
		$this->db->join('faculty','faculty.faculty_id=student_assignment_upload.faculty_id'	);
		$this->db->join('student','student_assignment_upload.student_id=student.student_id'	);
		$this->db->where('student_assignment_upload.faculty_email',$email);
		return $this->db->get()->result();
	}


	public function submitted_seminar()
	{
		$email=$this->session->userdata('email');
		$this->db->select('*');
		$this->db->from('student_seminar');
		$this->db->join('faculty','faculty.faculty_id=student_seminar.faculty_id');
		$this->db->join('student','student_seminar.student_id=student.student_id');
		$this->db->where('student_seminar.faculty_email',$email);
	 	return $this->db->get()->result();
	}


	public function internal_insert_model($dataArr)
	{
		return $this->db->insert('internal_mark',$dataArr);
	}

	public function topic_updation_model($syllabus_id,$updatem)
	{
		$this->db->where('syllabus_id',$syllabus_id);
		return $this->db->update('syllabus',$updatem);
	}
	public function recorded_class_insert_model($dataArr)
	{
		return $this->db->insert('recorded_class',$dataArr);
	}

	public function semester_timetable_fetch_model()
	{
	// $email=$this->session->userdata('email');
	$this->db->select('*');
	$this->db->from('semester_timetable');
	// $this->db->join('student','student.department_id=semester_timetable.department_id');
	$this->db->join('department','department.department_id=semester_timetable.department_id');
	// $this->db->where('student.s_email',$email);
	return $this->db->get()->result();
	}



	public function onlineclass_model()
{
	$email=$this->session->userdata('email');
	$this->db->select('*');
	$this->db->from('recorded_class');
	$this->db->group_by('recorded_class_upload');
	$this->db->where('recorded_class.faculty_email',$email);
	return $this->db->get()->result();
}
public function assignment_delete_model($assignment_upload)
{
	$this->db->where('assignment_upload',$assignment_upload);
	return $this->db->delete('assignment');

}
public function assignment_fetch_asgmnt_model($assignment_upload)
{
	$this->db->where('assignment_upload',$assignment_upload);
	$email=$this->session->userdata('email');
	$this->db->select('*');
	$this->db->from('assignment');
	$this->db->where('assignment.faculty_email',$email);
	return $this->db->get()->result();
}
public function assignment_update_model($result,$assignment_upload)
{
	$this->db->where('assignment_upload',$assignment_upload);
	return $this->db->update('assignment',$result);
}
public function assignment_fetch_model()
{
	$email=$this->session->userdata('email');
	$this->db->select('*');
	$this->db->from('assignment');
	$this->db->group_by('assignment_upload');
	$this->db->where('assignment.faculty_email',$email);
	return $this->db->get()->result();
}
public function seminar_fetch_model()
{

	$email=$this->session->userdata('email');
	$this->db->select('*');
	$this->db->from('seminar');
	$this->db->join('student','seminar.student_id=student.student_id');
	$this->db->where('seminar.faculty_email',$email);
	return $this->db->get()->result();
}

public function recorded_class_delete_model($recorded_class_upload)
{
	$this->db->where('recorded_class_upload',$recorded_class_upload);
	return $this->db->delete('recorded_class');
}

public function recorded_class_fetch_model($recorded_class_upload)
{
	$email=$this->session->userdata('email');
	$this->db->select('*');
	$this->db->from('recorded_class');
	$this->db->where('recorded_class.faculty_email',$email);
	$this->db->where('recorded_class_upload',$recorded_class_upload);
	return $this->db->get()->result();
}

public function recorded_class_update_model($result,$recorded_class_upload)
{
	$this->db->where('recorded_class_upload',$recorded_class_upload);
	return $this->db->update('recorded_class',$result);
}


public function assignment_mark_model($student_assignment_upload_id,$arrayName)
{
	$this->db->where('student_assignment_upload_id',$student_assignment_upload_id);
	return $this->db->update('student_assignment_upload',$arrayName);
}
public function seminar_mark_model($student_seminar_id,$arrayName)
{
	$this->db->where('student_seminar_id',$student_seminar_id);
	return $this->db->update('student_seminar',$arrayName);
}
public function seminar_fetch_id_model($seminar_id)
{
	$this->db->where('seminar_id',$seminar_id);
	$email=$this->session->userdata('email');
	$this->db->select('*');
	$this->db->from('seminar');
	$this->db->where('seminar.faculty_email',$email);
	return $this->db->get()->result();
}
public function seminar_update_model($seminar_id,$arrayName)
{
	$this->db->where('seminar_id',$seminar_id);
	return $this->db->update('seminar',$arrayName);
}


}