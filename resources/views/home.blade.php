@extends('layouts.app')

<style>
    /* Container Styles */
    .container {
        background-color: #f7f7f7;
        padding: 20px;
    }

    /* Card Styles */
    .card {
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    /* Card Header Styles */
    .card-header {
        background-color: #007BFF;
        color: #fff;
        padding: 20px;
        border-radius: 10px 10px 0 0;
        text-align: center;
    }

    /* Card Body Styles */
    .card-body {
        padding: 20px;
    }

    /* Alert Styles */
    .alert-success {
        background-color: #5cb85c;
        color: #fff;
        padding: 10px;
        border-radius: 5px;
        margin-bottom: 20px;
    }

    /* Create Task Link Styles */
    .create-task-link {
        display: inline-block;
        background-color: #007BFF;
        color: #fff;
        padding: 10px 20px;
        border-radius: 5px;
        text-decoration: none;
        transition: background-color 0.3s;
    }

    .create-task-link:hover {
        background-color: #0056b3;
    }
</style>

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Tasks') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="{{ route('tasks.create') }}">Create a Task</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection