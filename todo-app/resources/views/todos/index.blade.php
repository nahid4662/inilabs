@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>To-do List</h1>
        <a href="{{ route('todos.create') }}" class="btn btn-primary mb-3">Add New To-do</a>
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        <table class="table">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($todos as $todo)
                    <tr>
                        <td>{{ $todo->title }}</td>
                        <td>{{ $todo->description }}</td>
                        <td>{{ $todo->is_completed ? 'Completed' : 'Pending' }}</td>
                        <td>
                            <a href="{{ route('todos.edit', $todo->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('todos.destroy', $todo->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
