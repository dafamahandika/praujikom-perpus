@extends('layouts.master')
@section ('title')
Detail Book
@endsection

@section('content')
  <section class="section">
    <div class="section-header">
      <h1>{{ $book->title }}</h1>
    </div>
    <div class="section-body">
     <h3 class="section-title">Detail<a href="{{ route('indexBook') }}" title="Tambah Category"
          style="float: right; margin-right: 2%" class="btn btn-primary mr-1">Back</a></h3>
        <div class="row"> 
            <div class="col">
                <div class="card"> 
                     <div class="card-header">
                         <img src="/cover/{{ $book->cover_book }}" class="card-img-top w-50"alt="{{ $book->cover_book }}">
                    </div>
                    <div class="card-body">
                         <h4>{{ $book->title }}</h4>
                         <ul>
                              <li>Book ID: {{ $book->id }}</li>
                              <li>Category ID: {{ $book->category_id }}</li>
                              <li>Title: {{ $book->title }}</li>
                              <li>Author: {{ $book->author }}</li>
                              <li>Publisher : {{ $book->publisher }}</li>
                              <li>Nomor ISBN : {{ $book->isbn }}</li>
                              <li>Synopsis: {{ $book->synopsis }}</li>
                         </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </section>
@endsection