@extends('layouts.master')

@section ('title')
Data Book WIKBOOK
@endsection

@section('content')


<section class="section">
    <div class="section-header">
        <h1>Data Books</h1>
    </div>
    <div class="section-body">
     <form action="{{ route('searchBook') }}" method="GET">
          <input type="text" name="search" id="" placeholder="Book Title">
          <button class="btn btn-primary">Search</button>
      </form>
        <h3 class="section-title">List Book 
            <a href="{{ route('createBook') }}" title="Tambah Category"
            style="float: right; margin-right: 2%" class="btn btn-primary mr-1">Add Book</a>
            
            <a href="{{ route('exportBookPdf') }}" title="Tambah Category"
            style="float: right; margin-right: 2%" class="btn btn-success mr-1">Export PDF</a>
        </h3>
        @if (session('destroy'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert"> 
                <div class="text-center">
                    {{ session ('destroy') }}
                </div>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        
        @if (session('search'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert"> 
                <div class="text-center">
                    {{ session ('search') }}
                </div>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif

        @if (session('success'))
            	<div class="container">    
                	<div class="alert alert-success alert-dismissible fade show" role="alert">
                    	{{ session ('success') }}
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
                	</div>
            	</div>
        @endif
        
        @if (session('edit'))
            	<div class="container">    
                	<div class="alert alert-info alert-dismissible fade show" role="alert">
                    	{{ session ('edit') }}
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
                	</div>
            	</div>
        @endif
        
        <table id="data-admin" class="table table-striped table-bordered table-md text-center"
            style="width: 100%; margin-top:5%; padding:2%;" cellspacing="1">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Book ID</th>
                    <th>Category ID</th>
                    <th>Category Name</th>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Publisher</th>
                    <th>No. ISBN</th>
                    <th>Detail</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1;?>
                @foreach($book as $dt)
                <tr>
                    <td>{{$i++}}</td>
                    <td>{{$dt->id}}</td>
                    <td>{{$dt->category_id}}</td>
                    <td>{{$dt->category->category_name}}</td>
                    <td>{{$dt->title}}</td>
                    <td>{{$dt->author}}</td>
                    <td>{{$dt->publisher}}</td>
                    <td>{{$dt->isbn}}</td>
                    <td><a href="{{ route('detailBook', ['id' => $dt->id]) }}">Detail</a></td>
                    <td>
                        <div class="d-flex flex-row-mb-3">
                            <a href="{{ route('destroyBook', ['id' => $dt->id]) }}" class="m-1 btn btn-danger">Delete</a>
                        </div>

                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</section>
<script src="../../admin/dataTables/js/jquery.dataTables.min.js"></script>
<script src="../../admin/dataTables/js/dataTables.bootstrap4.min.js"></script>
<script>
    $(document).ready(function () {
        $('#data-admin').DataTable({
            "iDisplayLength": 25
        });
    });

</script>
@endsection
