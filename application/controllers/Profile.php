<?php

class Profile extends My_Controller
{
	public function index($id = 1)
	{
		$lib = new My_Lib();
		$this->load->driver('cache', array('adapter' => 'apc', 'backup' => 'file', 'key_prefix' => 'my_'));
		if (!$profile = $this->cache->get('cprofile' . $id)) {
			$user_info_db = $this->Student_Model->select_where('tbl_student', array('student_id' => $id));
			$this->load->view('module/list', array(), true);
			$this->load->view('module/user_info', array(), true);
			foreach ($user_info_db as $key) {
				$username = $key['student_name'];
			}
			$data_info = array(
				'rightMenu' => $this->load->view('module' . DS . 'rightSide', array('username' => $username, 'menu' => $lib->show_lists('menu', true, '0', 'parent_id')), true),
				'chatMenu' => $this->load->view('module' . DS . 'chat', array(), true),
				'user_info' => $lib->user_info('student', $id, 'intrest', 'hobby'),
			);
			$profile = $this->load->view('profile' . DS . 'profile', $data_info, true);
			$this->cache->save('cprofile' . $id, $profile, 300);
		} else {
			$profile = $this->cache->get('cprofile' . $id);
		}
		$title = 'پروفایل';
		$header_info = array('title' => $title);
		$page = $this->load->view('header' . DS . 'header', $header_info, true);
		$page .= $profile;
		$page .= $this->load->view('footer' . DS . 'footer', '', true);
		echo $page;
	}

	public function search()
	{

		$lib = new My_Lib();
		$this->load->driver('cache', array('adapter' => 'apc', 'backup' => 'file', 'key_prefix' => 'my_'));
		if (!$profile = $this->cache->get('listFile')) {
			$this->load->view('module/list', array(), true);
			$this->load->view('module/user_info', array(), true);
//			$username=$this->session->userdata('name');
			$username = 'admin';
			if (isset($_POST['btn_search'])) {
				$search_value = $_POST['search'];
				if ($search_value !== '') {
					$sql_run = "select * from tbl_student where student_name like '%$search_value%' and student_description like '%$search_value%'";
				} else {
					$sql_run = 'select * from tbl_student';
				}
				$search_data_info = $this->Student_Model->query_return_array($sql_run);
			}
			$data_info = array(
				'rightMenu' => $this->load->view('module' . DS . 'rightSide', array('username' => $username, 'menu' => $lib->show_lists('menu', true, '0', 'parent_id')), true),
				'chatMenu' => $this->load->view('module' . DS . 'chat', array(), true),
				'search_data_info' => @$search_data_info
			);
			$profile = $this->load->view('profile' . DS . 'search', $data_info, true);
			$this->cache->save('listFile', $profile, 300);
		} else {
			$profile = $this->cache->get('listFile');
		}
		$title = 'نتایج';
		$header_info = array('title' => $title);
		$page = $this->load->view('header' . DS . 'header', $header_info, true);
		$page .= $profile;
		$page .= $this->load->view('footer' . DS . 'footer', '', true);
		echo $page;


	}


	public function QueryResult()
	{
		if ($_POST['searchKey'] !== '') {
			$searchKey = $_POST['searchKey'];
			$query = "select * from tbl_student where student_name like '%$searchKey%' or student_description like '%$searchKey%'";
			$search_info = $this->Student_Model->query_return_array($query);
			$lib = new My_Lib();
			$this->load->view('module/list', array(), true);
			echo $lib->search_box($search_info, 'student', '_id', base_url() . 'profile' . DS . 'index' . DS);
		}
	}
}

//$query = 'select * from tbl_univercity';
//$uni_info = $this->Student_Model->query_return_array($query);
//$sql = 'select * from tbl_city';
//$uni_info1 = $this->Student_Model->query_return_array($sql);


//'friendsTable' => list_info_user($uni_info, 'univercity'),
//				'uni_info1' => $uni_info1,
//'city_list' => $lib->show_lists('city', false, '', ''),
//
//				'list_user' => $lib->list_info_user1('student'),
//				'search_data_info' => @$search_data_info
