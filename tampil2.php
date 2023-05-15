<?php 
$koneksi = new PDO ("mysql:host=localhost;dbname=belajar", "root", "");
$query = $koneksi->query("SELECT * FROM siswa"); 
?>
<!DOCTYPE html>
<html lang="en"> 
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table border="1" class="table">
	<tr>
		<th>Nis</th>
		<th>Nama</th>		
	</tr>
    <?php foreach($query as $q):?>
        <tr>
            <td><?php echo $q['nis']; ?></td>
            <td><?php echo $q['nama']; ?></td>
        </tr>
    <?php endforeach; ?>
</body>
</html>