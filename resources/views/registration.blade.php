@extends('layout')

@section('title')
    Registration
@endsection

@section('main_content')
    <h1 class="text-center">Registration form</h1>
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form class="row justify-content-center" method="post" action="/registration/check">
        @csrf
        <div class="mb-3 col-md-6 ">
            <label for="exampleInputEmail1" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>
        <div class="mb-3 col-md-6 ">
            <label for="exampleInputEmail1" class="form-label">Surname</label>
            <input type="text" class="form-control" id="surname" name="surname">
        </div>
        <div class="mb-3 col-md-6 ">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
        </div>
        <div class="mb-3 col-md-6 ">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        <button type="submit" class="btn btn-primary">Registration</button>
    </form>
@endsection
