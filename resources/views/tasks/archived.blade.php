@extends('layout')

@section('title', 'lasmatodo')

@section('content')
    <div class="max-w-7xl mx-auto p-6 lg:p-8">
        <h1>Your archived tasks:</h1>
        @if (count($tasks) > 0)
            @foreach ($tasks as $task)
                <div class="mt-4">
                    <div>
                        <h2>
                            {{$task['title']}}
                        </h2>
                        <ul>
                            <li>
                                <em>Due:</em> {{$task['due_date']}}
                            </li>
                            @if ($task['description'])
                                <li>
                                    <em>Description:</em> {{$task['description']}}
                                </li>
                            @endif
                        </ul>
                    </div>
                    <div>
                        <form method="POST" action="{{ route('tasks.destroy', $task->id) }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm(`Are you sure you want to completely delete this task? You won't be able to get it back.`)">Delete</button>
                        </form>
                    </div>
                </div>
            @endforeach
        @else
            <h2>Currently no tasks are archived. Use "Create" to create a new task.</h2>
        @endif
    </div>
@endsection
