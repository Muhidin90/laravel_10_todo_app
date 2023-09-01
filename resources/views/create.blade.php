@extends('layouts.app')
@section('title', 'Add Task')
    

@section('content')
    <form action="{{ route('tasks.store') }}" method="post">
    
    <div>
        <label for="title">Title</label>  
        <input type="text" name="title" id="title">
    </div>

    <div>
        <label for="desc">description</label>
        <input type="text" name="desc" id="desc">
    </div>

    <div>
        <label for="long_desc">long description</label>
        <textarea name="long description" id="long description" cols="30" rows="10"></textarea>
    </div>

    <input type="submit" value="add">
    @csrf
    </form>
@endsection