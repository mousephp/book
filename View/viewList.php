<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>

<body>
	<table>
		<tr><td>Title</td><td>Author</td><td>Description</td></tr>
			<?php
// hiển thị danh mục sách
			foreach ($books as $title => $book){ 
				echo 
				'<tr>
				<td><a href="?book='.$book->title.'">'.$book->title.'</a></td><td>'.$book->author.'</td><td>'.$book->description.'</td>
				</tr>';

					// echo '<tr><td>'.$i++.'</td><td><a href="?sid='.$book->id.'">'.$book->title.'</a></td><td>'.$book->author.'</td><td>'.$book->description.'</td></tr>';
			}
			?>
		</table>
	</body>
	</html>