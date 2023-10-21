@extends('layouts.app')
<style>
    /* Form Container Styles */
    .form-container {
        background-color: #f5f5f5;
        border-radius: 10px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        max-width: 400px;
        margin: 0 auto;
        padding: 20px;
        text-align: center;
    }

    /* Header Styles */
    h1 {
        color: #333;
        font-size: 24px;
        margin-bottom: 20px;
    }

    /* Back Link Styles */
    a {
        text-decoration: none;
        color: #007BFF;
        display: block;
        margin-bottom: 20px;
    }

    /* Form Styles */
    form {
        text-align: left;
    }

    /* Label Styles */
    label {
        display: block;
        text-align: left;
        margin-top: 10px;
        color: #555;
        font-weight: bold;
    }

    /* Input Styles */
    input, textarea {
        width: 100%;
        padding: 10px;
        margin: 5px 0;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    /* Button Styles */
    button {
        background-color: #007BFF;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    button:hover {
        background-color: #0056b3;
    }
</style>

    @section('content')
    <div class="form-container">
        <h1>Edit Task</h1>
        <a href="{{ route('tasks.index') }}">Back to Task List</a>
        <form action="{{ route('tasks.update', $task->id) }}" method="POST">
            @csrf
            @method('PUT')
            <label for="title">Title:</label>
            <input type="text" name="title" id="title" value="{{ $task->title }}" required>
            <br>
            <label for="description">Description:</label>
            <textarea name="description" id="description" rows="3" required>{{ $task->description }}</textarea>
            <br>
            <button type="submit">Update Task</button>
        </form>
    </div>
    @endsection