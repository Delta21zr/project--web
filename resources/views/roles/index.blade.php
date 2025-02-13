@extends('layouts.master')
@section('content')
<div class="container">
    <table class="table table-dark table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th> Name</th>
                <th>Key name</th>
            </tr>
        </thead>
        <tbody>
            @foreach($roles as $role)
            <tr>
                <rd>{{$role ->id}}</rd>
                <rd>{{$role ->name}}</rd>
                <rd>{{$role ->key_name}}</rd>
            </tr>
            @endforeach
        </tbody>
    </table>
</div> 
@endsection
