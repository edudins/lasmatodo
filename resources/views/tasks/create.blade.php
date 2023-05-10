@extends('layout')

@section('content')
    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
        <form class="form bg-white p-6 border-1" method="POST" action="{{route('tasks.store')}}">
            @csrf
            <div>
                <label class="text-sm" for="title">Title:</label>
                <input class="text-lg border-1" type="text" id="title" value="{{old('title')}}" name="title">
                @error('title')
                <div class="form-error">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div>
                <label class="text-sm" for="due_date">Due:</label>
                <input class="text-lg border-1" type="date" id="due_date" value="{{old('due_date')}}" name="due_date">
                @error('due_date')
                <div class="form-error">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div>
                <label class="text-sm" for="description">Description:</label>
                <textarea class="text-lg border-1" id="description" name="description">
                    {{old('description')}}
                </textarea>
                @error('year')
                <div class="form-error">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div>
                <button class="border-1" type="submit">Save</button>
            </div>
        </form>
    </div>
@endsection
