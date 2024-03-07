@extends('layouts.master')
@section ('title')
Create Category 
@endsection

@section('content');
  <section class="section">
    <div class="section-header">
      <h1>Create Data Category</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
        <div class="breadcrumb-item"><a href="#">Create Data Category</a></div>
      </div>
    </div>

    <div class="section-body">
      <h2 class="section-title">Create Data Category</h2>
      <p class="section-lead"></p>
      <br>
      <form method="POST" action="{{ route('storeCategory') }}" enctype="multipart/form-data">   
        @csrf
        <div class="row"> 
            <div class="col">
                <div class="card">
                    <div class="card-header">
                    <h4>Form Category</h4>
                    </div>
                    <div class="card-body">
                        <div class="row align-items-start">
                            <div class="col-sm-12">
                                <label>Category Name</label>
                                <input type="text" class="form-control @error('category_name') is-invalid @enderror" name="category_name" >
                                @error('category_name')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <br>
                        
                        <div class="row align-items-start">
                            <div class="col-sm-8"></div>
                            <div class="col-sm-4">
                              <button class="btn btn-block btn-primary">Add</button>    
                            </div>
                        </div>      
                    </div>
                </div>
            </div>
        </div>
    </form>
    </div>
  </section>
@endsection
     