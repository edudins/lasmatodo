@extends('layout')

@section('title', 'lasmatodo')

@section('content')
    <div class="max-w-7xl mx-auto p-6 lg:p-8">
        <h1>Archived tasks:</h1>
        @if (count($tasks) > 0)
            @foreach ($tasks as $task)
                @if($task['done']===true)
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
                            <button>Delete</button>
                        </div>
                    </div>
                @endif
            @endforeach
        @else
            <h2>Currently no tasks are set. Use "Create" to create new task.</h2>
        @endif
    </div>
@endsection
