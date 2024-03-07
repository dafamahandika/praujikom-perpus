<!DOCTYPE html>
<html>
<head>
	<title>Data Book</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>
	<center>
		<h5>Data Book WIKBOOK</h4>
	</center>
 
	<table class='table table-bordered text-center'>
		<thead>
               <tr>
                   <th>No</th>
                   <th>Book ID</th>
                   <th>Category Name</th>
                   <th>Title</th>
                   <th>Author</th>
                   <th>Publisher</th>
                   <th>No. ISBN</th>
               </tr>
           </thead>
           <tbody>
               <?php $i = 1;?>
               @foreach($books as $book)
               <tr>
                   <td>{{$i++}}</td>
                   <td>{{$book->id}}</td>
                   <td>{{$book->category->category_name}}</td>
                   <td>{{$book->title}}</td>
                   <td>{{$book->author}}</td>
                   <td>{{$book->publisher}}</td>
                   <td>{{$book->isbn}}</td>
               </tr>
               @endforeach
           </tbody>
	</table>
 
</body>
</html>