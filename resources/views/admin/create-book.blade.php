@extends('layouts.master')
@section ('title')
Create Book 
@endsection

@section('content');
  <section class="section">
    <div class="section-header">
      <h1>Create Data Book</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
        <div class="breadcrumb-item"><a href="#">Create Data Book</a></div>
      </div>
    </div>

    <div class="section-body">
     @if ($message = Session::get('fail'))
          <div class="alert alert-danger d-flex justify-content-center" width="15" height="10" role="alert">
               <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="danger:"><use xlink:href="#check-circle-fill"/></svg>
                    {{$message}}
               <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
               </button>
          </div>
     @endif
      <h2 class="section-title">Create Data Book</h2>
      <p class="section-lead"></p>
      <br>
      <form method="POST" action="{{ route('storeBook') }}" enctype="multipart/form-data">   
        @csrf
        <div class="row"> 
            <div class="col">
                <div class="card">
                    <div class="card-header">
                    <h4>Form Book</h4>
                    </div>
                    <div class="card-body">
                        <div class="row align-items-start">
                            <div class="col-sm-12">
                                <label>Title</label>
                                <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" placeholder="Book Title">
                                   @error('title')
                                        <div class="text-danger">{{ $message }}</div>
                                   @enderror
                            </div>
                        </div>
                        
                        <div class="row align-items-start">
                            <div class="col-sm-12">
                                <label>Author</label>
                                <input type="text" class="form-control @error('author') is-invalid @enderror" name="author" placeholder="Book Author">
                                   @error('author')
                                        <div class="text-danger">{{ $message }}</div>
                                   @enderror
                            </div>
                        </div>
                        
                        <div class="row align-items-start">
                            <div class="col-sm-12">
                                <label>Publisher</label>
                                <input type="text" class="form-control @error('publisher') is-invalid @enderror" name="publisher" placeholder="Book Publisher">
                                   @error('publisher')
                                        <div class="text-danger">{{ $message }}</div>
                                   @enderror
                            </div>
                        </div>
                        
                        <div class="row align-items-start">
                            <div class="col-sm-12">
                                <label>No. ISBN</label>
                                <input type="text" class="form-control @error('isbn') is-invalid @enderror" name="isbn" placeholder="Book ISBN">
                                   @error('isbn')
                                        <div class="text-danger">{{ $message }}</div>
                                   @enderror
                            </div>
                        </div>
                        
                        <div class="row align-items-start">
                            <div class="col-sm-12">
                                <label for="floatingTextarea">Synopsis</label>
                                <textarea type="text" class="form-control @error('synopsis') is-invalid @enderror" name="synopsis" id="floatingTextarea" style="height: 100px" placeholder="Book Synopsis"></textarea>
                                   @error('sybopsis')
                                        <div class="text-danger">{{ $message }}</div>
                                   @enderror
                            </div>
                        </div>
                        
                        <label>Book Category</label>
                                <select name="category"  class="form-control @error('category') is-invalid @enderror"  required>
                                  <option hidden>Choose Book Category</option> 
                                  @foreach( $data as $dt)
                                  <option value="{{ $dt->id }}">{{ $dt->category_name }}</option>
                                  @endforeach
                                </select>
                                  @error('category')
                                    <div class="text-danger">{{ $message }}</div>
                                  @enderror
                         
                         <div class="row align-items-start">
                              <div class="col-sm-12">
                                   <label>Cover Book</label>
                                   <input type="file" class="form-control @error('cover_book') is-invalid @enderror" name="cover_book" placeholder="Book Cover">
                                   
                                   @error('cover_book')
                                    <div class="text-danger">{{ $message }}</div>
                                   @enderror
                              </div>
                         </div>
                        
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
     