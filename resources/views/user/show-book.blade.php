@extends('user.master')

@section('content')
<section class="section" id="about">
    <div class="container m-3">
        <a href="/user/dashboard" class="btn btn-secondary text-light mt-2">Back</a>
        <div class="row align-items-center">
            <div class="col-lg-7 col-md-12 col-sm-12" data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                <img src="{{ asset('cover/'.$book->cover_book) }}" class="rounded img-fluid d-block mx-auto w-75 h-50" alt="{{ $book->cover_book }}">
            </div>
            <div class="right-text col-lg-5 col-md-12 col-sm-12 mobile-top-fix">
                <div class="left-heading">
                    <h4>{{ $book->title }}</h4>
                </div>
                <div class="left-text">
                    <ul class="list-unstyled">
                        <li class="p-1 fs-5"><strong>Category</strong>: {{ $book->category->category_name }}</li>
                        <li class="p-1 fs-5"><strong>Author</strong>: {{ $book->author }}</li>
                        <li class="p-1 fs-5"><strong>Publisher</strong>: {{ $book->publisher }}</li>
                        <li class="p-1 fs-5"><strong>No. ISBN</strong>: {{ $book->isbn }}</li>
                        <li class="p-1 fs-5 text-justify" style="text-align: justify"><strong>Synopsis</strong> <br>{{ $book->synopsis }}</li>
                    </ul>
                    <form action="{{ route('printBook', ['id'=>$book->id]) }}" method="post">
                        @csrf
                        <button class="btn btn-info ">
                            Download E-book
                        </button>
                    </form>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="hr"></div>
            </div>
        </div>
    </div>
</section>
@endsection