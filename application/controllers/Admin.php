<?php

class Admin extends Grocery
{
	/**
	 * @throws Exception
	 */
	public function index()
	{

		$crud = new grocery_CRUD();
		$crud->set_language("persian");
		$crud->set_table('tbl_student');
//relations

		$num = 0;
		$crud->set_relation("city_id", "tbl_city", "city_name", "city_parent = $num");

//		$crud->set_relation_n_n("city_id", "tbl_city", "tbl_city", 'city_id', "city_paren", 'city_name', 'parent_city', array('parent_city' => $num));

		$crud->set_relation('univercity_id', 'tbl_univercity', 'univercity_name',"univercity_parent = $num");
		$crud->set_relation('major_id', 'tbl_major', 'major_name');
		$crud->set_relation_n_n('interest', 'tbl_intrest', 'tbl_hobby', 'student_id', 'hobby_id', 'hobby_name');
		$crud->set_relation_n_n('work', 'tbl_work', 'tbl_field', 'student_id', 'field_id', 'field_name');
//end of relations
		$crud->change_field_type('student_gender', 'true_false', array('خانم', 'آقا'));

		$fields = $this->db->list_fields('tbl_student');
		array_push($fields, "work", "interest");

		foreach ($fields as $field) {
			$crud->display_as($field, lang($field));
		}
		$crud->set_Subject('student');
		$output = $crud->render();
		$this->_example_output($output);
	}

	public function field()
	{
		$crud = new grocery_CRUD();
		$crud->set_language("persian");
		$crud->set_table('tbl_field');
		$fields = $this->db->list_fields('tbl_field');
		foreach ($fields as $field) {
			$crud->display_as($field, lang($field));
		}
		$crud->set_Subject('field');
		$output = $crud->render();
		$this->_example_output($output);
	}

	public function uni()
	{
		$crud = new grocery_CRUD();
		$crud->set_language("persian");
		$crud->set_table('tbl_univercity');
		$fields = $this->db->list_fields('tbl_univercity');
		foreach ($fields as $field) {
			$crud->display_as($field, lang($field));
		}
		$crud->set_Subject('university');
		$output = $crud->render();
		$this->_example_output($output);
	}

	public function city()
	{
		$crud = new grocery_CRUD();
		$crud->set_language("persian");
		$crud->set_table('tbl_city');
		$fields = $this->db->list_fields('tbl_city');
		foreach ($fields as $field) {
			$crud->display_as($field, lang($field));
		}
		$crud->set_Subject('city');
		$output = $crud->render();
		$this->_example_output($output);
	}

	public function major()
	{
		$crud = new grocery_CRUD();
		$crud->set_language("persian");
		$crud->set_table('tbl_major');
		$fields = $this->db->list_fields('tbl_major');
		foreach ($fields as $field) {
			$crud->display_as($field, lang($field));
		}
		$crud->set_Subject('major');
		$output = $crud->render();
		$this->_example_output($output);
	}

	public function hobby()
	{
		$crud = new grocery_CRUD();
		$crud->set_language("persian");
		$crud->set_table('tbl_hobby');
		$fields = $this->db->list_fields('tbl_hobby');
		foreach ($fields as $field) {
			$crud->display_as($field, lang($field));
		}
		$crud->set_Subject('hobby');
		$output = $crud->render();
		$this->_example_output($output);
	}
}

?>

