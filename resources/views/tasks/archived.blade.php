@extends('tasks.layout')

@section('title', 'archived')

@section('content')
    <div class="max-w-7xl mx-auto p-6 lg:p-8">
        <h1>Your archived tasks:</h1>
        @if (count($tasks) > 0)
            @foreach ($tasks as $task)
                <div class="card mt-4">
                    <div>
                        <h2 class="card-title">
                            {{$task['title']}} <em
                                    class="label">{{$task['is_done'] ? '(Finished)' : ($task['is_archived'] ? '(Archived)' : '(Missed)')}}</em>
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
                            <form method="POST" action="{{ route('tasks.destroy', $task['id']) }}">
                                @csrf
                                @method('DELETE')
                                <button class="button" type="submit"
                                        onclick="return confirm(`Are you sure you want to completely delete this task? You won't be able to get it back.`)">
                                    Delete
                                </button>
                            </form>
                        </div>
                        <div>
                            <form method="POST" action="{{ route('tasks.restore', $task['id']) }}">
                                @csrf
                                <button class="button" type="submit"
                                        onclick="return confirm(`Are you sure you want to restore this task? The date will be set for tomorrow.`)">
                                    Restore
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        @else
            <h2>Currently no tasks are archived. Use "Create" to create a new task.</h2>
        @endif
    </div>
@endsection
