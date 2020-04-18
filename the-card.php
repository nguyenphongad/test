<?php 

$db_sever= "localhost";
$db_username="root";
$db_password="";
$db_name="sql_card";

$conn= new mysqli($db_sever, $db_username, $db_password, $db_name) or die("kết nối thất bại");

$query = "SELECT * FROM mydemo";

$result =$conn->query($query);
if (!$result){
	die ('Câu truy vấn bị lỗi');
}else{
	echo "kết nối database thành công";
}

?> 
<!DOCTYPE html>
<html lang="vi">
<head>
	<title>the card</title>
</head>
<body>
	<h1>số lượng : </h1>
	<?php 


	if (isset($_POST['sent'])) {

		if ( $_POST['user']==NULL or $_POST['pass']==NULL) {
			echo "Các giá trị không được bỏ trống";
		}
		else{
			$show = mysqli_query("INSERT INTO mydemo VALUE('".$_POST['user']."','".$_POST['pass']."')");
			if ($show) echo "tạo thành công";
			else echo "bị lỗi";
			
		}

	}

	?>

	<form action="the-card.php" method="POST">
		user: <input type="text" name="user" ><br><br>
		pass: <input type="text" name="pass"><br><br>
		<input type="submit" name="sent" value="Lưu">
	</form>
	


</body>
</html>