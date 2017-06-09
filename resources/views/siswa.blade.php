<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<center>
<table border="1">
      <tr class="bg-info">
          <td>Id</td>
          <td>Nama</td>
          <td>Alamat</td>
          <td>Jenis Kelamin</td>
      </tr>
<?php 
  $no=1;
?>
@foreach ($a as $data)
<tr>
	<td>{{ $no++ }}</td>
	<td>{{ $data->nama }}</td>
	<td>{{ $data->alamat }}</td>
	<td>{{ $data->jk }}</td>
</tr>
@endforeach
</table>
</center> 
</body>
</html>