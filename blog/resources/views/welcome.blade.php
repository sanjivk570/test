
@extends('layouts.app')
@section('title', 'Roles')
@section('content')

<ul>
    @foreach($roles as $roleItem)
    <li><a href="roles/{{$roleItem->id}}">Roll Name => {{$roleItem->name}}</li>
    @endforeach
</ul>
@endsection
