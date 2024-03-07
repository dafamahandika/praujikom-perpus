<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>{{ $book->title }}</title>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<br>
<body style="font-family: sans-serif" onload="window.print()">
	<center>
          <ul style="list-style:none">
               <h5>{{ $book->title }}</h5>
               <li>{{ $book->author }}</li>
               <li>{{ $book->publisher }}</li>
               <li>{{ $book->isbn }}</li>
               <li>{{ $book->synopsis }}</li>
          </ul>
     </center>

</body>
</html>