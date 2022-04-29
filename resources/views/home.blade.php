@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
<div class='row'>
        <a href="/create" class="btn btn-info ">Add</a href="/create">
    </div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">№</th>
      <th scope="col">First</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>
      @foreach ($data as $a)
    <tr>
      <th scope="row">{{$a->id}}</th>
      <td>{{$a->name}}</td>
      <td>
        <a class='btn btn-primary' href="update/{{$a->id}}">Edit</a>
        <a class='btn btn-danger' href="delete/{{$a->id}}">Delete</a>
      </td>
    </tr>
    @endforeach 
  </tbody>
</table>
@endsection

