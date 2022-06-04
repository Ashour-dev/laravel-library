@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-11 mx-auto">
            <form action="{{route('admin.books.store')}}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="name" class="form-label">Book name</label>
                    <input type="text" class="form-control" id="name">
                </div>
                <div class="mb-3">
                    <label for="Author_id" class="form-label w-100">Author</label>
                    <select class="form-select w-100 p-2" aria-label="Default select example" id="Author_id">
                        <option selected>Select the Author</option>
                        @foreach ($Authors as $Author)
                        <option value="{{$Author->id}}">{{$Author->first_name}} {{$Author->last_name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="cover" class="form-label">cover</label>
                    <input type="link" class="form-control" id="cover">
                </div>
                <div class="mb-3">
                    <label for="lang" class="form-label">lang</label>
                    <input type="text" class="form-control" id="lang">
                </div>
                <div class="mb-3">
                    <label for="format" class="form-label w-100">Format</label>
                    <select class="form-select w-100 p-2" aria-label="Default select example" id="format">
                        <option selected>Select a format</option>
                        @foreach ($formats as $format)
                        <option value="{{$format}}">{{$format}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="pages_number" class="form-label">pages_number</label>
                    <input type="number" class="form-control" id="pages_number">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            {{-- <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Book name</th>
                        <th scope="col">Author</th>
                        <th scope="col">cover</th>
                        <th scope="col">lang</th>
                        <th scope="col">format</th>
                        <th scope="col">pages_number</th>
                        <th scope="col">created_at</th>
                        <th scope="col">updated_at</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($books as $book)
                    <tr>
                        <th scope="row">{{$book['id']}}</th>
                        <td>{{$book['name']}}</td>
                        <td>{{$book->Author->first_name}} {{$book->Author->last_name}}</td>
                        <td>{{$book['cover']}}</td>
                        <td>{{$book['lang']}}</td>
                        <td>{{$book['format']}}</td>
                        <td>{{$book['pages_number']}}</td>
                        <td>{{$book['created_at']}}</td>
                        <td>{{$book['updated_at']}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table> --}}
        </div>
    </div>
</div>
@endsection
