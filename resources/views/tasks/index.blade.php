@extends('layout')

@section('title', 'todo')

@section('content')
    <div class="max-w-7xl mx-auto p-6 lg:p-8">
        <h1>Your future tasks:</h1>
        @if (count($tasks) > 0)
            @foreach ($tasks as $task)
                <div class="card mt-4">
                    <div>
                        <h2 class="card-title">
                            {{$task['title']}}
                        </h2>
                        <ul>
                            <li class="card-li">
                                <em>Due:</em> {{$task['due_date']}}
                            </li>
                            @if ($task['description'])
                                <li class="card-li">
                                    <em>Description:</em> {{$task['description']}}
                                </li>
                            @endif
                        </ul>
                    </div>
                    <div class="card-buttons">
                        <div>
                            <form method="POST" action="{{route('tasks.finish', [$task['id']])}}">
                                @csrf
                                <button class="button" type="submit" onclick="return confirm(`Have you finished with the task?`)">Finish</button>
                            </form>
                        </div>
                        <div>
                            <form method="POST" action="{{route('tasks.archive', [$task['id']])}}">
                                @csrf
                                <button class="button" type="submit" onclick="return confirm(`Are you sure you want to archive this task?`)">Archive</button>
                            </form>
                        </div>
                        <div>
                            <a href="{{route('tasks.edit', [$task])}}">
                                <button class="button" type="button">Edit</button>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        @else
            <h2>Currently no tasks are set. Use "Create" to create a new task.</h2>
        @endif
    </div>
@endsection
