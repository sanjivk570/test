
@extends('layouts.app')
@section('title', 'Role')
@section('content')
<table border='1'>
    <tr>
        <td><b>id</b></td>
        <td><b>name</b></td>
        <td><b>date</b></td>
    </tr>
    <tr>
        <td>{{$role->id}}</td>
        <td>{{$role->name}}</td>
        <td>{{$role->created_at}}</td>
    </tr>
</table>
@endsection
