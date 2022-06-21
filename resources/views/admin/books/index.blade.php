@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row w-100 justify-content-center">
        <div class="col-11 mx-auto">
            <div class="cube mx-auto"><div></div><div></div><div></div><div></div><div></div><div></div></div>
            <table class="table w-100 table-hover text-center">
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
                        <td style="max-width: 17rem; overflow:hidden"><a href="{{$book['cover']}}">{{$book['cover']}}</a></td>
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
