@extends('layouts.app')

@section('title', 'Create Page')

@section('content')
    @can('create',App\Models\Book::class)
        <form action="{{route('books.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-5">
                        @if(app()->getLocale() == 'en')
                            <div class="form-group" style="margin-top: 10px;">

                                <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" placeholder="Title">
                                @error('title')
                                <div class="alert alert-danger ">{{ $message  }}</div>
                                @enderror
                                <select class="form-control form-control-lg mt-3 @error('category_id') is-invalid @enderror" name="category_id" id="">
                                    @foreach($categories as $cat)
                                        <option value="{{$cat->id}}">{{$cat->{'name_'.app()->getLocale()} }}</option>
                                    @endforeach
                                        <br>
                                    @error('category_id')
                                    <div class="alert alert-danger ">{{ $message  }}</div>
                                    @enderror
                                </select><br>
                                <input type="text" name="author" class="form-control @error('author') is-invalid @enderror" placeholder="Author">
                                @error('author')
                                <div class="alert alert-danger ">{{ $message  }}</div>
                                @enderror
                                <br>
                                <input type="text" name="price" class="form-control @error('price') is-invalid @enderror" placeholder="price">
                                @error('price')
                                <div class="alert alert-danger ">{{ $message  }}</div>
                                @enderror
                                <br>
                                <label for="imgInput" class="form-control">Content(File)</label>
                                <input type="file" id="pdfInput" name="pdf" class="form-control @error('pdf') is-invalid @enderror" placeholder="file text">
                                @error('pdf')
                                <div class="alert alert-danger ">{{ $message }}</div>
                                @enderror <br>
                                <label for="imgInput" class="form-control">Image</label>
                                <input type="file" class="form-control @error('img') is-invalid @enderror"  id="imgInput" name="img">
                                @error('img')
                                <div class="alert alert-danger">{{$message}}</div>
                                @enderror
                                </div>
                                <button class="btn btn-primary form-control"  style="margin-top: 20px"  type="submit">Save</button>
                            </div>
                        </div>
                    @elseif(app()->getLocale() == 'kz')
                                <div class="form-group" style="margin-top: 10px;">

                                    <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" placeholder="??????????">
                                    @error('title')
                                    <div class="alert alert-danger ">{{ $message  }}</div>
                                    @enderror
                                    <select class="form-control form-control-lg mt-3 @error('category_id') is-invalid @enderror" name="category_id" id="">
                                        @foreach($categories as $cat)
                                            <option value="{{$cat->id}}">{{$cat->{'name_'.app()->getLocale()} }}</option>
                                        @endforeach
                                        <br>
                                        @error('category_id')
                                        <div class="alert alert-danger ">{{ $message  }}</div>
                                        @enderror
                                    </select><br>
                                    <input type="text" name="author" class="form-control @error('author') is-invalid @enderror" placeholder="????????????">
                                    @error('author')
                                    <div class="alert alert-danger ">{{ $message  }}</div>
                                    @enderror
                                    <br>
                                    <input type="text" name="price" class="form-control @error('price') is-invalid @enderror" placeholder="????????????">
                                    @error('price')
                                    <div class="alert alert-danger ">{{ $message  }}</div>
                                    @enderror
                                    <br>
                                    <label for="imgInput" class="form-control">??????????????(PDF,Docx,txt)</label>
                                    <input type="file" id="pdfInput" name="pdf" class="form-control @error('pdf') is-invalid @enderror" placeholder="????????(??????????)">
                                    @error('pdf')
                                    <div class="alert alert-danger ">{{ $message }}</div>
                                    @enderror <br>
                                    <label for="imgInput" class="form-control">?????????? ????????</label>
                                    <input type="file" class="form-control @error('img') is-invalid @enderror"  id="imgInput" name="img">
                                    @error('img')
                                    <div class="alert alert-danger">{{$message}}</div>
                                    @enderror
                                </div>
                                <button class="btn btn-primary form-control"  style="margin-top: 20px"  type="submit">????????????</button>
                @else
                    <div class="form-group" style="margin-top: 10px;">

                        <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" placeholder="????????????????">
                        @error('title')
                        <div class="alert alert-danger ">{{ $message  }}</div>
                        @enderror
                        <select class="form-control form-control-lg mt-3 @error('category_id') is-invalid @enderror" name="category_id" id="">
                            @foreach($categories as $cat)
                                <option value="{{$cat->id}}">{{$cat->{'name_'.app()->getLocale()} }}</option>
                            @endforeach
                            <br>
                            @error('category_id')
                            <div class="alert alert-danger ">{{ $message  }}</div>
                            @enderror
                        </select><br>
                        <input type="text" name="author" class="form-control @error('author') is-invalid @enderror" placeholder="??????????">
                        @error('author')
                        <div class="alert alert-danger ">{{ $message  }}</div>
                        @enderror
                        <br>
                        <input type="text" name="price" class="form-control @error('price') is-invalid @enderror" placeholder="????????">
                        @error('price')
                        <div class="alert alert-danger ">{{ $message  }}</div>
                        @enderror
                        <br>
                        <label for="imgInput" class="form-control">????????????????????(????????)</label>
                        <input type="file" id="pdfInput" name="pdf" class="form-control @error('pdf') is-invalid @enderror" placeholder="????????">
                        @error('pdf')
                        <div class="alert alert-danger ">{{ $message }}</div>
                        @enderror <br>
                        <label for="imgInput" class="form-control">?????????????? ??????????</label>
                        <input type="file" class="form-control @error('img') is-invalid @enderror"  id="imgInput" name="img">
                        @error('img')
                        <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <button class="btn btn-primary form-control"  style="margin-top: 20px"  type="submit">??????????????????</button>
            </div>
            </form>
    @endif
    @endcan
@endsection
