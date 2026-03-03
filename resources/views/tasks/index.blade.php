<!DOCTYPE html>
<html>
<head>
    <title>All Tasks</title>
</head>
<body>

<h1>All Tasks</h1>

@foreach($tasks as $task)
    <div style="border:1px solid #191a17ff; padding:10px; margin-bottom:10px;">
        <h3>{{ $task->title }}</h3>

        <p>{{ $task->description }}</p>

        <p>
            Status:
            {{ $task->is_completed ? 'Complete' : 'Incomplete' }}
        </p>

        <a href="/tasks/{{ $task->id }}">View Task</a>
    </div>
@endforeach

</body>
</html>