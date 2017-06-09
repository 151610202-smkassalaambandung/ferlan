<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body> 
      <h1>Daftar :{{$data}} {{$data2}}</h1>
      @foreach($query as $key)
      <li>{{$key}}</li><hr>
      @endforeach
     
</body>
</html>