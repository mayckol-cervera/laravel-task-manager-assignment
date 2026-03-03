<!DOCTYPE html>
<html>
<head>
    <title>Create Task</title>
</head>
<body>

<h1>Create New Task</h1>

@if(session('success'))
    <p style="color: green;">{{ session('success') }}</p>
@endif

<form action="/tasks" method="POST">
    @csrf

    <div>
        <label>Title:</label>
        <input type="text" name="title" value="{{ old('title') }}">
        @error('title')
            <p style="color:red;">{{ $message }}</p>
        @enderror
    </div>

    <br>

    <div>
        <label>Description:</label>
        <textarea name="description">{{ old('description') }}</textarea>
        @error('description')
            <p style="color:red;">{{ $message }}</p>
        @enderror
    </div>

    <br>

    <button type="submit">Create Task</button>
</form>

<br>
<a href="/tasks">Back to Tasks</a>

</body>
</html>