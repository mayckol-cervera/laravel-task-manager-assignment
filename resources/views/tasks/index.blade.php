<!DOCTYPE html>
<html>
<head>
    <title>All Tasks</title>
</head>
<body>

    <h1>Task List</h1>

    <a href="/tasks/create">Create New Task</a>

    <hr>

    @if($tasks->isEmpty())
        <p>No tasks available.</p>
    @else

        @foreach($tasks as $task)

            <div style="margin-bottom: 20px; padding: 10px; border: 1px solid #060606ff;">

                <h3>{{ $task->title }}</h3>

                <p>{{ $task->description }}</p>

                @if($task->is_completed)
                    <p style="color: green;"><strong>Status:</strong> Completed</p>
                @else
                    <p style="color: red;"><strong>Status:</strong> Pending</p>
                @endif


                @if(!$task->is_completed)
                    <form action="/tasks/{{ $task->id }}/complete" method="POST">
                        @csrf
                        @method('PATCH')
                        <button type="submit">Mark as Completed</button>
                    </form>
                @endif

                <br>

                <a href="/tasks/{{ $task->id }}">View Task</a>

            </div>

        @endforeach

    @endif

</body>
</html>