@extends('layouts.master')

@section ('title')
Data User WIKBOOK
@endsection

@section('content')


<section class="section">
    <div class="section-header">
        <h1>Data Users</h1>
    </div>
    <div class="section-body">
        <h3 class="section-title">List User
            <a href="/dashboard/user/excel" title="Tambah Category"
            style="float: right; margin-right: 2%" class="btn btn-success mr-1" target="_blank">Export Excel</a>
            
            <a href="{{ route('exportUserPdf') }}" title="Tambah Category"
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
        <table id="data-admin" class="table table-striped table-bordered table-md text-center"
            style="width: 100%; margin-top:5%; padding:2%;" cellspacing="1">
            <thead>
                <tr>
                    <th>No</th>
                    <th>User ID</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>No. Handphone</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1;?>
                @foreach($data as $dt)
                @if($dt->is_admin == 0)
                <tr>
                    <td>{{$i++}}</td>
                    <td>{{$dt->id}}</td>
                    <td>{{$dt->name}}</td>
                    <td>{{$dt->email}}</td>
                    <td>{{$dt->phone}}</td>
                    <td>
                        <a href="{{ route('destroyUser', ['id' => $dt->id]) }}" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                @endif
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
