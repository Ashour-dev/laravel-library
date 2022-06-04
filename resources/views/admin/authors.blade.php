@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-9 mx-auto">   
            <table class="table table-hover text-center">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">First name</th>
                        <th scope="col">Last name</th>
                        <th scope="col">created_at</th>
                        <th scope="col">updated_at</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($Authors as $Author)
                    <tr>
                        <th scope="row">{{$Author->id}}</th>
                        <td>{{$Author->first_name}}</td>
                        <td>{{$Author->last_name}}</td>
                        <td>{{$Author->created_at}}</td>
                        <td>{{$Author->updated_at}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
                <div class="pagination justify-content-center mt-4">
                    {{$Authors->links()}}
                </div>
        </div>
    </div>
</div>
@endsection
