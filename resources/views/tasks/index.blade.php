    @extends('layouts.custom_main.app')

    @section('content')
    <div class="container">
        <h2>Task List</h2>
        <a href="{{ route('tasks.create') }}" class="btn btn-primary mb-3">Create Task</a>
        <table class="table">
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Due Date</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
            @foreach ($tasks as $task)
            <tr>
                <td>{{ $task->title }}</td>
                <td>{{ $task->description }}</td>
                <td>{{ $task->due_date }}</td>
                <td>{{ ucfirst($task->status) }}</td>
                <td>
                    <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    
                    <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm"
                            onclick="return confirm('Are you sure you want to delete this task?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
    @endsection
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        function updateTaskStatus(taskId, status) {
            $.ajax({
                url: `/api/tasks/${taskId}/status`,
                method: 'POST',
                data: {
                    status: status,
                    _token: "{{ csrf_token() }}"
                },
                success: function(response) {
                    alert(response.message);
                    location.reload();
                },
                error: function(xhr) {
                    alert('Something went wrong!');
                }
            });
        }
    </script>

