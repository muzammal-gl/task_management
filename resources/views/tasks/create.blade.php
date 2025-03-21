
@extends('layouts.custom_main.app')

@section('content')
<div class="container">
    <div class="container">
        <h2>Create New Task</h2>
        <form action="{{ route('tasks.store') }}" method="POST">
            @csrf
    
            <div class="mb-3">
                <label for="title">Title</label>
                <input type="text" name="title" class="form-control" required>
            </div>
    
            <div class="mb-3">
                <label for="description">Description</label>
                <textarea name="description" class="form-control" required></textarea>
            </div>
    
            <div class="mb-3">
                <label for="due_date">Due Date</label>
                <input type="date" name="due_date" class="form-control">
            </div>
    
            <div class="mb-3">
                <label for="status">Status</label>
                <select name="status" class="form-control">
                    <option value="pending">Pending</option>
                    <option value="in-progress">In Progress</option>
                    <option value="completed">Completed</option>
                </select>
            </div>
    
            <button type="submit" class="btn btn-success">Create Task</button>
        </form>
    </div>    
    @endsection
