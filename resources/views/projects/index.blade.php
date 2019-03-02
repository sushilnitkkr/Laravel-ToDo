@extends('layout')
@section('content')
<h1 class="title">Project!</h1>
<ul>
@foreach($projects as $project)
<li>
    <a href="/projects/{{$project->id}}">
        {{$project->title}}
    </a></li> <!-- Recieved data from controller display database data.-->
@endforeach
</ul>
@endsection
