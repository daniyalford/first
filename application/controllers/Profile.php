<?php

class Profile extends My_Controller
{
	public function index($id = '')
	{
		if ($id === '') {
			redirect(base_url() . 'profile' . DS . 'search');
		}
		$lib = new My_Lib();
		$this->load->driver('cache', array('adapter' => 'apc', 'backup' => 'file', 'key_prefix' => 'my_'));
		if (!$profile = $this->cache->get('cprofile' . $id)) {
			$this->load->view('module/list', array(), true);
			$this->load->view('module/user_info', array(), true);
			$username = $this->session->userdata('name');
			$data_info = array(
				'rightMenu' => $this->load->view('module' . DS . 'rightSide', array('username' => $username, 'menu' => $lib->show_lists('menu', true, '0', 'parent_id')), true),
				'chatMenu' => $this->load->view('module' . DS . 'chat', array('id' => $id), true),
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
//		$this->load->driver('cache', array('adapter' => 'apc', 'backup' => 'file', 'key_prefix' => 'my_'));
		if (isset($_POST['searchBox']) && $_POST['searchBox'] != '') {
//			$x = 'listFile' . $_POST['searchBox'];
			$sql_run = "select * from tbl_student where student_name like '%" . $_POST['searchBox'] . "%' and student_description like '%" . $_POST['searchBox'] . "%'";
		} else {
//			$x = 'listFile';
			$sql_run = 'select * from tbl_student';
		}
//		if (!$profile = $this->cache->get($x)) {
		$this->load->view('module/list', array(), true);
		$this->load->view('module/user_info', array(), true);
		$username = $this->session->userdata('name');
		$search_data_info = $this->Student_Model->query_return_array($sql_run);
		$data_info = array(
			'rightMenu' => $this->load->view('module' . DS . 'rightSide', array('username' => $username, 'menu' => $lib->show_lists('menu', true, '0', 'parent_id')), true),
			'chatMenu' => $this->load->view('module' . DS . 'chat', array(), true),
			'search_data_info' => @$search_data_info
		);
		$profile = $this->load->view('profile' . DS . 'search', $data_info, true);
//			$this->cache->save($x, $profile, 300);
//		} else {
//			$profile = $this->cache->get($x);
//		}
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
		} else {
			redirect(base_url());
		}
	}


	public function checkUserAndSendChat()
	{
		if ($_POST['chatContent'] !== '') {
			$receive_id = $_POST['id'];
			$sender_id = $this->session->userdata('user_id');
			$this->Student_Model->insert_data('tbl_chat', array('chat_receiver_id' => @$receive_id, 'chat_sender_id' => @$sender_id, 'chat_content' => $_POST['chatContent']));
			echo 'true';
		} else {
			echo 'false';
			redirect(base_url());
		}
	}
}
