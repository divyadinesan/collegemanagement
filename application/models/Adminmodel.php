<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adminmodel extends CI_Model {


	public function log_admin($admin_log)
	{
		$this->db->where($admin_log);
	return $this->db->count_all_results('admin');
	}

	public function holiday_fetch_id_model($holiday_id)
	{
		$this->db->select('*');
		$this->db->from('holiday');
		$this->db->where('holiday_id',$holiday_id);
		return $this->db->get()->result();
	}
	public function admin_department_fetch_model()
	{
		$this->db->select('*');
		$this->db->from('department');
		return $this->db->get()->result();
	}
	public function department_fetch_id_model($department_id)
	{
		$this->db->select('*');
		$this->db->from('department');
		$this->db->where('department_id',$department_id);
		return $this->db->get()->result();
	}
	public function faculty_id_update_model($result,$faculty_id)
	{
		$this->db->where('faculty_id',$faculty_id);
	return $this->db->update('faculty',$result);
	}
	public function syllabus_delete_model($syllabus_id)
	{
		$this->db->where('syllabus_id',$syllabus_id);
	return $this->db->delete('syllabus');
	}
	public function holiday_delete_model($holiday_delete)
	{
$this->db->where('holiday_id',$holiday_delete);
	return $this->db->delete('holiday');
	}
	public function student_delete_model($student_id)
	{
		$this->db->where('student_id',$student_id);
	return $this->db->delete('student');
	}
	public function subject_delete_model($subject_id)
	{
		$this->db->where('subject_id',$subject_id);
	return $this->db->delete('subject');
	}
	public function department_delete_model($department_id)
	{
		
		$this->db->where('department_id',$department_id);
	return $this->db->delete('department');
	}
	public function faculty_delete_model($faculty_id)
	{
		$this->db->where('faculty_id',$faculty_id);
	return $this->db->delete('faculty');
	}
	public function student_fetch_id_model($student_id)
	{
			$this->db->select('*');
		$this->db->from('student');
		$this->db->where('student_id',$student_id);
		return $this->db->get()->result();
	}
	public function faculty_fetch_id_model($faculty_id)
	{
		$this->db->select('*');
		$this->db->from('faculty');
		$this->db->where('faculty_id',$faculty_id);
		return $this->db->get()->result();
	}

		public function holiday_update_model($result,$holiday_id)
		{
			$this->db->where('holiday_id',$holiday_id);
	return $this->db->update('holiday',$result);
		}


	public function student_update_model($result,$student_id)
	{
		$this->db->where('student_id',$student_id);
	return $this->db->update('student',$result);
	}
		public function department_update_model($result,$department_id)
		{
			$this->db->where('department_id',$department_id);
	return $this->db->update('department',$result);
		}
		public function syllabus_update_model($result,$syllabus_id)
		{
			$this->db->where('syllabus_id',$syllabus_id);
	return $this->db->update('syllabus',$result);
		}
	public function department_id_fetch_model($department_id)
	{
		$this->db->select('*');
		$this->db->from('department');
		$this->db->where('department_id',$department_id);
		return $this->db->get()->result();
	}


	public function syllabus_fetch_id_model($syllabus_id)
	{
		$this->db->select('*');
		$this->db->from('syllabus');
		$this->db->where('syllabus_id',$syllabus_id);
		$this->db->join('subject','subject.subject_id =syllabus.subject_id');
		return $this->db->get()->result();
	}
	public function subject_fetch_id_model($subject_id)
	{
		$this->db->select('*');
		$this->db->from('subject');
		$this->db->where('subject_id',$subject_id);
		$this->db->join('department ','subject.department_id=department.department_id');
		$this->db->join('faculty','subject.faculty_id =faculty.faculty_id');
		return $this->db->get()->result();
	}
	public function subject_update_model($result,$subject_id)
	{
			$this->db->where('subject_id',$subject_id);
	return $this->db->update('subject',$result);
	}

	public function admin_fetch_model()
	{
		$this->db->select('*');
		$this->db->from('admin');
		return $this->db->get()->result();
	}
	public function admin_update_model($ArrData)
	{
		return $this->db->update('admin',$ArrData);
	}
	public function faculty_already_insert($faculty_email)
	{
		$this->db->where('faculty_email',$faculty_email);
		return $this->db->count_all_results('faculty');
	}
	public function department_insert_model($result)
	{
		return $this->db->insert('department',$result);
	}
	public function department_already_insert($department)
	{
		$this->db->where('dep_name',$department);
		return $this->db->count_all_results('department');
	}

	public function department_fetch_model()
	{
		$this->db->select('*');
		$this->db->from('department');
		return $this->db->get()->result();
	}
	public function departmentt_fetch_id_model($department_id)
	{
		$this->db->select('*');
		$this->db->from('department');
		$this->db->where('department_id',$department_id);
		return $this->db->get()->result();
	}
	public function groupby_department()
	{
		$this->db->select('*');
		$this->db->from('subject');
		$this->db->join('department ','subject.department_id=department.department_id');
		$this->db->group_by('subject.department_id');

		return $this->db->get()->result();
	}
	
	// public function groupby_semester()
	// {
	// 	$this->db->select('*');
	// 	$this->db->from('subject');
	// 	$this->db->group_by('subject.semester');
		
	// 	return $this->db->get()->result();
	// }
	public function faculty_fetch_model()
	{
		$this->db->select('*');
		$this->db->from('faculty');
		return $this->db->get()->result();
	}



	public function subject_already_insert($subName)
	{
		$this->db->where('subject_name',$subName);
		return $this->db->count_all_results('subject');
	}
	public function subject_insert_model($result)
	{
		return $this->db->insert('subject',$result);
	}
	public function subject_fetch_model($sem,$department_id)
		{
		$this->db->select('*');
		$this->db->from('subject');
		$this->db->where('department_id',$department_id);
		$this->db->where('semester',$sem);
		return $this->db->get()->result();
		}

		public function subjectt_fetch_model()
		{
		$this->db->select('*');
		$this->db->from('subject');
		
		return $this->db->get()->result();
		}



		public function subject_department_fetch_model($sem,$department_id)
		{
			$this->db->select('*');
			$this->db->from('subject');
			//$this->db->order_by('subject.semester', "asc");
			$this->db->join('department ','subject.department_id=department.department_id');
			// $this->db->join('faculty','subject.faculty_id=faculty.faculty_id');
			$this->db->where('subject.department_id',$department_id);
			$this->db->where('subject.semester',$sem);
			return $this->db->get()->result();
		}

		public function subject_departmentt_fetch_model()
		{
			$this->db->select('*');
			$this->db->from('subject');
			//$this->db->order_by('subject.semester', "asc");
			$this->db->join('department ','subject.department_id=department.department_id');
			 $this->db->join('faculty','subject.faculty_id=faculty.faculty_id');
			
			return $this->db->get()->result();
		}

	public function syllebus_insert_model($result)
	{
		return $this->db->insert('syllabus',$result);
	}
	public function syllabus_already_insert($sub_id)
	{
		$this->db->where('subject_id',$sub_id);
		return $this->db->count_all_results('syllabus');
	}
	public function faculty_insert_model($result)
	{
		return $this->db->insert('faculty',$result);
	}
	
	public function holiday_already_insert($fdate)
	{
		$this->db->where('from_date	',$fdate);
		return $this->db->count_all_results('holiday');
	}
	public function holiday_insert_model($result)
	{
		return $this->db->insert('holiday',$result);
	}

	public function faculty_fetch()
	{
		$this->db->select('*');
		$this->db->from('faculty');
		$this->db->join('department','department.department_id=faculty.f_department_id	','inner');
		$this->db->join('subject','subject.subject_id =faculty.f_subject_id');
		$this->db->where('f_status','Pending');
		return $this->db->get()->result();
	}
	public function approve_faculty_model($f_id,$approve_faculty)
	{
		$this->db->where('f_id',$f_id);
		return $this->db->update('faculty',$approve_faculty);
	}

	public function staff_leave_request_model()
	{

	$this->db->select('*');
	$this->db->from('faculty_leave');
	$this->db->join('faculty','faculty_leave.lf_faculty_id=faculty.f_id');
	$this->db->where('faculty_leave.status','Pending');
	return $this->db->get()->result();
	}
	

	public function faculty_leave_approve_model($faculty_leave_id,$approve)
	{
		$this->db->where('faculty_leave_id',$faculty_leave_id);
		return $this->db->update('faculty_leave',$approve);
	}

	public function faculty_leave_reject_model($faculty_leave_id,$rejected)
	{
	$this->db->where('faculty_leave_id',$faculty_leave_id);
	return $this->db->update('faculty_leave',$rejected);
	}

	public function timetable_insrt_model($ArrData)
	{
			return $this->db->insert('time_table',$ArrData);
	}

	public function exam_name_already_insert($name)
	{
		$this->db->where('exam_name	',$name);
		return $this->db->count_all_results('exam');
	}

	public function exam_insert_model($ArrData)
	{
		return $this->db->insert('exam',$ArrData);
	}
	// public function exam_name_fetch_model()
	// {
	// 	$this->db->select('*');
	// $this->db->from('exam');
	// return $this->db->get()->result();
	// }

	public function student_fetch_model()
	{
		$this->db->select('*');
	$this->db->from('student');
	$this->db->join('department','student.department_id=department.department_id');
	$this->db->order_by('s_semester', "asc");
	return $this->db->get()->result();
	}

	public function syllabus_fetch_model()
	{
		$this->db->select('*');
	$this->db->from('syllabus');
	$this->db->join('subject','subject.subject_id=syllabus.subject_id');
	return $this->db->get()->result();
	}


	public function stdnt_timetable_model()
	{

	$this->db->select('*');
	$this->db->from('time_table');
	
	$this->db->join('student','student.department_id=time_table.department_id');
	 $this->db->join('department','department.department_id=time_table.department_id');
	 $this->db->join('subject','subject.subject_id=time_table.subject_id');
	 // $this->db->join('exam','exam.exam_id =time_table.Exam_id');
	
	
	return $this->db->get()->result();
	}


	// public function department_fetch_id_model($department_id)
	// {
	// 	$this->db->select('*');
	// 	$this->db->from('department');
	//  	$this->db->where('department_id ',$department_id);
	// 	return $this->db->get()->result();
	// }

	public function timetable_semester_insert($result)
	{
		return $this->db->insert('semester_timetable',$result);
	}











}