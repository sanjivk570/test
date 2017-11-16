@extends('layouts.app')
@section('title', 'Roles')
@section('content')
<table border='1'>
    <tr>
        <td><b>id</b></td>
        <td><b>name</b></td>
        <td><b>date</b></td>
        <td><b>Action</b></td>
    </tr>
    @foreach($roles as $roleItem)
    <tr>
        <td>{{$roleItem->id}}</td>
        <td>{{$roleItem->name}}</td>
        <td>{{$roleItem->created_at}}</td>
        <td><a href="roles/{{$roleItem->id}}"> View </a></td>
    </tr>
    @endforeach
</table>
@endsection
