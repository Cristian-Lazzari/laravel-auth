@extends('layouts.base')

@section('contents')
<ul>
    <li><a href="{{route('login')}}">login</a></li>
    <li><a href="{{route('admin.project.index')}}">indexadmin</a></li>
</ul>
@endsection