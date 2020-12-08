<?php 
include_once('model.php');
/**
 * 
 */
class book{	
	public function getBookList(){
		return array(
			'tam quoc chi'=>new model('tam quoc chi','50','chuyen cuoi tam quoc chi'), //key phai == tam quoc chi
			'viet nam vo doi'=>new model('viet nam vo doi','150','chuyen cuoi viet nam vo doi'),
			'chuyen thuoc'=>new model('chuyen thuoc','456','chuyen chuyen thuoc cua lo tan')
		);
	}


	// public function getBookList(){ 
	// 	return array(
	// 		"Jungle Book" => new model("Jungle Book", "R.
	// 			Kipling", "A classic book."),
	// 		"Professional CodeIgniter" => new model("Professional
	// 			CodeIgniter", "Thomas Mayer", "A book about how to
	// 			program with CodeIgniter Framework"),
	// 		"PHP for Dummies" => new model("PHP for Dummies",
	// 			"Some Smart Guy", "A tutorial book about propramming
	// 			language")

	// 	);
	// }

	public function getBook($title){
		$allBook=$this->getBookList();//tra ve danh sach book
		//print_r($allBook);
		return $allBook[$title];//lay ra book dua va title
	}
}



?>