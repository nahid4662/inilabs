@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Add New To-do</h1>
        <form action="{{ route('todos.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" required>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" name="description"></textarea>
            </div>
            <button type="submit" class="btn btn-success mt-3">Create</button>
        </form>
    </div>
@endsection
