<?php

class Profile extends My_Controller
{
	public function index($id = 1)
	{
//		$a1 = array('uni_info' => @$uni_info);


//		$a4 = array(
//			'profileName' => $this->session->userdata('fullName'),
//			'userAge' => $this->session->userdata('age'),
//			'userFavorite' => $this->session->userdata('userFavorite'),
//			'userWorkExperience' => array_sum($this->session->userdata('workExperience'))
//		);
		//			'friendsTable' => $this->load->view('module/list', @$a1, true),
		$lib = new My_Lib();

		$this->load->driver('cache', array('adapter' => 'apc', 'backup' => 'file', 'key_prefix' => 'my_'));

		if (!$profile = $this->cache->get('cprofile')) {
			$query = 'select * from tbl_univercity';
			$uni_info = $this->Student_Model->query_return_array($query);
			$sql = 'select * from tbl_city';
			$uni_info1 = $this->Student_Model->query_return_array($sql);
			$user_info_db = $this->Student_Model->select_where('tbl_student', array('student_id' => $id));
			$sqlQuery = 'select * from tbl_menu';
			$menu_info = $this->Student_Model->query_return_array($sqlQuery);
			$a3 = array();
			$a2 = array(
				'menu_info' => $menu_info,
			);
			$this->load->view('module/list', array(), true);
			$this->load->view('module/user_info', array(), true);

			$data_info = array(
				'friendsTable' => list_info_user($uni_info, 'univercity'),
				'uni_info1' => $uni_info1,
				'rightMenu' => $this->load->view('module/rightSide', array('menu' => $lib->show_lists('menu', true, '', '')), true),
				'chatMenu' => $this->load->view('module/chat', @$a3, true),
				'city_list' => $lib->show_lists('city', false, '', ''),
				//'info_content' => $this->load->view('module/user_info', @$a4, true),
				'user_info' => $lib->user_info('student', $id, 'intrest', 'hobby'),
				'list_user' => $lib->list_info_user1('student')
			);
			$profile = $this->load->view('profile', $data_info, true);
			$this->cache->save('cprofile', $profile, 300);
		} else {
			$profile = $this->cache->get('cprofile');
		}
		$title = 'پروفایل';
		$header_info = array('title' => $title);
		$page = $this->load->view('header' . DS . 'header', $header_info, true);
		$page .= $profile;
		$page .= $this->load->view('footer' . DS . 'footer', '', true);
		echo $page;
//		var_dump($this->cache->cache_info());
		//	var_dump($this->cache->get_metadata('my_foo'));
	}

	public function groups()
	{
		$this->output->cache(10);
		if (isset($_POST['btn_search'])) {
			$search_value = $_POST['search'];
			$sql = "select * from tbl_student where student_name like '%$search_value%' and student_description like '%$search_value%'";
			$result_search = $this->Student_Model->query_return_array($sql);
			//$this->load->view();
		}
	}

	public function result()
	{
		if ($_POST['searchKey'] !== '') {
			$searchKey = $_POST['searchKey'];
			$query = "select * from tbl_student where student_name like '%$searchKey%' or student_description like '%$searchKey%'";
			$search_info = $this->Student_Model->query_return_array($query);
			$lib = new My_Lib();
			$this->load->view('module/list', array(), true);
			echo $lib->search_box($search_info, 'student', '_id', base_url() . 'profile/index/');
		}
//		$this->load->view('header' . DS . 'header', array('title' => 'نتایج جست و جو'), true);
	}
}
