<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body> 
      <h1>Daftar :{{$data}}</h1>
      @foreach($jenis as $data)
      <li>{{$data}}</li><hr>
      @endforeach
     
</body>
</html>