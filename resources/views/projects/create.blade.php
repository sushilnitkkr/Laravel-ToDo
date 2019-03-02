<!--
<!DOCTYPE html>
<html>
<head>
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.4/css/bulma.css">
	<title></title>
</head>
<body>
<h1>hello create page
</h1>
<form method="POST" action="/projects">
	{{csrf_field()}}
	<div>
		<input type="text" name="title" placeholder="project title" required>
	</div>
	<div>
		<textarea name="description" placeholder="project description" required></textarea>
	</div>
	<dir>
		<button type="submit"> Create Project</button>
	</dir>

</form>
</body>
</html>
-->

@extends('layout')
@section('content')

<h1 class="title">Create new Project</h1>
<form method="POST" action="/projects">
 @csrf
    <div class="field">
        <label class="label" for="title">Title</label>
        <div class="control">
            <input type="text" name="title" class="input {{ $errors->has('title') ? 'is-danger' : ''}}" value="{{old('title')}}">
        </div>
    </div>
    <div class="field">
 <label class="label" for="description">Description</label>
 <div class="control">
     <textarea name="description" class="textarea {{ $errors->has('title') ? 'is-danger' : ''}}">{{old('description')}}</textarea>
 </div>
    </div>
    <div class="field">
        <div class="control">
            <button type="submit" class="button">Create Project</button>
        </div>
    </div>
@include('errors')
</form>



@endsection
