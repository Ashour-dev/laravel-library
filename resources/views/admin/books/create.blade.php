@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-11 mx-auto">
            <form action="{{route('admin.books.store')}}" method="post">
                @csrf
                {{-- @method('PUT') --}}
                <div class="mb-3">
                    <label for="name" class="form-label">Book name</label>
                    <input type="text" class="form-control" name="name" id="name">
                    @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="Author_id" class="form-label w-100">Author</label>
                    <select class="form-select w-100 p-2" aria-label="Default select example" name="Author_id" id="Author_id">
                        <option selected value="">Select the Author</option>
                        @foreach ($Authors as $Author)
                        <option value="{{$Author->id}}">{{$Author->first_name}} {{$Author->last_name}}</option>
                        @endforeach
                    </select>
                    @error('Author_id')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="cover" class="form-label">cover</label>
                    <input type="link" class="form-control" name="cover" id="cover">
                    @error('cover')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="lang" class="form-label">lang</label>
                    <input type="text" class="form-control" name="lang" id="lang">
                    @error('lang')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="format" class="form-label w-100">Format</label>
                    <select class="form-select w-100 p-2" aria-label="Default select example" name="format" id="format">
                        <option selected value="">Select a format</option>
                        @foreach ($formats as $format)
                        <option value="{{$format}}">{{$format}}</option>
                        @endforeach
                    </select>
                    @error('format')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="pages_number" class="form-label">pages_number</label>
                    <input type="number" class="form-control" name="pages_number" id="pages_number">
                    @error('pages_number')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection
