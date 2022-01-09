<?php

class Admin extends Grocery
{
	/**
	 * @throws Exception
	 */
	public function index()
	{
		$num = 0;
		$crud = new grocery_CRUD();
		$crud->set_language("persian");
		$crud->set_table('tbl_student');
		//relations
		$crud->set_relation("city_id", "tbl_city", "city_name", "city_parent = $num");
		$crud->set_relation("student_pic", "users", "pic");
		$crud->set_relation("user_id", "users", "id");
		$crud->set_relation('univercity_id', 'tbl_univercity', 'univercity_name', "univercity_parent = $num");
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
		$crud->unset_columns('user_id');
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

	public function maps()
	{
		$crud = new grocery_CRUd();
		//Now set the 2 fields we want to capture with type set to hidden
		$crud->change_field_type('latitude', 'hidden');
		$crud->change_field_type('longitude', 'hidden');
//make sure you add MAP as extra / additional field that we gona set the callback to.

		$crud->callback_add_field('map', array($this, 'show_map_field'));
//Here we set the callback for field generation
		if ($crud->getState() == 'read') {
			$crud->set_js('http://maps.google.com/maps/api/js?sensor=false', FALSE);
			$crud->set_js("manage/plot_point_js");
		} elseif ($crud->getState() == 'add' || $crud->getState() == 'edit' || $crud->getState() == 'copy') {
			$crud->set_js("assets/scripts/map.js");
			$crud->set_js('http://maps.google.com/maps/api/js?sensor=false', FALSE);
//Make sure you remove / unset the map field before you do insert / update as its not 1 in the table and non-removal of it will give error
			$crud->callback_before_insert(array($this, 'unset_map_field_add'));
			$crud->callback_before_update(array($this, 'unset_map_field_edit'));
		}
//Function to generate the map field

	}
	public function _show_map_field($value = false, $primary_key = false)
	{
		return '<p>Refine your position by dragging and dropping the pin on your location</p>
				<div id="retailer-map" style="width:530px; height:300px;"></div>';
	}

	public function _plot_point_js()
	{
		$retailer_id = $this->session->userdata('retailer_id');
		$retailer = $this->cModel->getByField('retailers', 'rid', $retailer_id);
		if (count($retailer) > 0) {
			$latitude = $retailer['latitude'];
			$longitude = $retailer['longitude'];
			$script = '
				var map;
				var marker;
				var circle;
				var geocoder;
				window.onload = function() {
					geocoder = new google.maps.Geocoder();
					var latlng = new google.maps.LatLng(' . $latitude . ',' . $longitude . ');
					var myOptions = {
				      zoom: 18,
				      center: latlng,
				      mapTypeId: google.maps.MapTypeId.SATELLITE
				    };
				    map = new google.maps.Map(document.getElementById("retailer-map"), myOptions);
					addMarker(map.getCenter());
					google.maps.event.addListener(map,"click", function(event) {
						//alert("You cannot reset the location by changing pointer in here");
			  			//addMarker(event.latLng);
			  		});
			  	}
							
				function addMarker(location) {
			  		if(marker) {marker.setMap(null);}
			  		marker = new google.maps.Marker({
			     		position: location,
			      		draggable: true
			  		});
			  		marker.setMap(map);
			  	}
			';
			echo $script;
		}
	}
}

?>

