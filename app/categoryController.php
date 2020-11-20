<?php 

	include "coneccionControl.php";

	if (isset($_POST['action'])) {
		$categoryController = new CategoryController();
		switch ($_POST['action']) {
			case 'store':
				$name = strip_tags($_POST['name']);
				$description = strip_tags($_POST['description']);
				$status = strip_tags($_POST['status']);


				$categoryController->store($name,$description,$status);
			break;
		}
	}



	class CategoryController{

		public function get(){

			$conn = connect();

			if ($conn->connect_error==false) {

				$query = "select = form categories";
				$prepared_query = $conn->prepare($query);
				$prepared_query->execute();

				$result = $prepared_query->get_result();
				$categories = $result->fetch_all(MYSQLI_ASSOC);


				if (count($categories)){
					return $categories;
				}else{
					return array();
				}
			}else{
				array();
			}
		}

		public function store($nane,$description,$status){
			if ($conn->connect_error==false) {
				
				if ($name!="" && $description!="" && $status!="") {

					$query = "insert into categories(name,description,status) values(?,?,?))";

					$prepared_query = $conn->prepared($query);
					$prepared_query->bind_param('sss',$name,$description,$status);
					if ($prepared_query->execute()) {
						header("location:". $_SERVER['HTTP_REFERER']);
					}else{
						header("location:". $_SERVER['HTTP_REFERER']);
					}
				}else{
					header("location:". $_SERVER['HTTP_REFERER']);
				}
			}else{
				header("location:". $_SERVER['HTTP_REFERER']);
			}
		}
	}

?>