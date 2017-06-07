<!DOCTYPE html>
<html>
<head>
	<title>Looping</title>
</head>
<body>
      <h1>Buah</h1>
      @foreach($buah as $data)
      {{$data}}<hr>
      @endforeach
      <h1>Makhluk Hidup</h1>
       @foreach($makhluk as $data)
      {{$data}}<hr>
      @endforeach
      <h1>Komputer</h1>
       @foreach($komputer as $data)
      {{$data}}<hr>
      @endforeach
      

      


</body>
</html>