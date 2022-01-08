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
			if (file_exists('cprofile' . $id)) {
				unlink('cprofile' . $id);
			}
			$this->load->view('module' . DS . 'list', array(), true);
			$this->load->view('module' . DS . 'user_info', array(), true);
			$username = $this->session->userdata('name');
			$data_info = array(
				'rightMenu' => $this->load->view('module' . DS . 'rightSide', array('username' => $username, 'menu' => $lib->show_lists('menu', true, array('parent_id' => 0))), true),
				'chatMenu' => $this->load->view('module' . DS . 'chat', array('id' => $id), true),
				'user_info' => $lib->user_info('student', $id, 'intrest', 'hobby'),
			);
			$profile = $this->load->view('profile' . DS . 'profile', $data_info, true);
			$this->cache->save('cprofile' . $id, $profile, 300);
		} else {
			if (file_exists('cprofile' . $id)) {
				unlink('cprofile' . $id);
			}
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
			$this->load->view('module' . DS . 'list', array(), true);
			echo $lib->search_box($search_info, 'student', '_id', base_url() . 'profile' . DS . 'index' . DS);
		} else {
			redirect(base_url());
		}
	}

	public function checkUserAndSendChat()
	{
		if ($_POST['chatContent'] !== '') {
			$receive_id = $_POST['id'];
			$info = $this->Student_Model->select_where('tbl_student', array('student_id' => $receive_id));
			$this->Student_Model->insert_data('tbl_chat', array('chat_sender_pic' => $_SESSION['pic'], 'chat_receiver_name' => $info[0]["student_name"], 'chat_receiver_id' => $info[0]["user_id"], 'chat_receiver_id_student' => @$receive_id, 'chat_sender_name' => $this->session->userdata('username'), 'chat_sender_id' => $this->session->userdata('user_id'), 'chat_content' => $_POST['chatContent']));
			echo 'true';
		} else {
			echo 'false';
			redirect(base_url());
		}
	}

	public function checkUserAndSendChatInChatRoom()
	{
		if (isset($_POST['chat'])) {
			$info = $this->Student_Model->select_where('tbl_student', array('student_id' => $_POST['id_rec']));
			$this->Student_Model->insert_data('tbl_chat', array('chat_sender_pic' => $_SESSION['pic'],
				'chat_receiver_name' => $info['0']["student_name"],
				'chat_receiver_id' => $info['0']["user_id"],
				'chat_receiver_id_student' => $_POST['id_rec'],
				'chat_sender_name' => $this->session->userdata('username'),
				'chat_sender_id' => $this->session->userdata('user_id'),
				'chat_content' => $_POST['chat_Content']));
			redirect(base_url() . 'profile' . DS . 'chat_room' . DS . $info[0]["user_id"]);
		}
	}

	public function all_chat()
	{
		$lib = new My_Lib();
		$this->load->view('module' . DS . 'list', array(), true);
		$con = 'chat_status=1 AND chat_receiver_id=' . $this->session->userdata('user_id') . ' ORDER BY chat_id  ASC';
		$info = $lib->show_lists('chat', true, $con, '_sender_id', base_url() . 'profile' . DS . 'chat_room' . DS, '_sender_name', 'tbl_');
		$header_info = array('title' => 'همه ی چت ها');
		$this->load->view('module' . DS . 'chatRoom', array('info' => $info, 'header' => $this->load->view('header' . DS . 'header', $header_info, true), 'footer' => $this->load->view('footer' . DS . 'footer', '', true)));

	}

	public function chat_room($sender_id)
	{
		$my_id = $_SESSION['user_id'];
		$query = 'SELECT * FROM tbl_chat WHERE chat_status=1 AND (chat_receiver_id=' . $my_id . ' AND chat_sender_id=' . $sender_id . ') OR (chat_sender_id=' . $sender_id . ' AND chat_receiver_id=' . $my_id . ') ORDER BY chat_time ASC';
		$data = $this->Student_Model->query_return_array($query);
		$header_info = array('title' => 'صفحه ی چت');
		$this->load->view('module' . DS . 'chatRoom', array('data' => $data, 'header' => $this->load->view('header' . DS . 'header', $header_info, true), 'footer' => $this->load->view('footer' . DS . 'footer', '', true)));
	}
}
