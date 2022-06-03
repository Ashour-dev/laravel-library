@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-10 mx-auto">   
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Author_id</th>
                        <th scope="col">name</th>
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
                        <td>{{$book['Author_id']}}</td>
                        <td>{{$book['name']}}</td>
                        <td>{{$book['cover']}}</td>
                        <td>{{$book['lang']}}</td>
                        <td>{{$book['format']}}</td>
                        <td>{{$book['pages_number']}}</td>
                        <td>{{$book['created_at']}}</td>
                        <td>{{$book['updated_at']}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
