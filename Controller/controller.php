<?php 

include_once('../Model/book.php');

class controller {
	public $model;
	public function __construct(){
		$this->model = new book();
	}

	public function getController(){
		if (!isset($_GET['book'])){
			// khi người dùng chưa lựa chọn thì sẽ hiển thị danh mục sách
			$books = $this->model->getBookList();
			include_once('../View/viewList.php');
		}else{
			// khi người dùng lựa chọn thì sẽ hiển thị thông tin của sách được lựa chọn
			$book =  $this->model->getBook($_GET['book']);
			//print_r($book);
			include_once('../View/viewDetail.php');
		}
	}

}

$c=new controller();
$c->getController();

?>