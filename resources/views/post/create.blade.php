@extends('layouts.app')

@section('content')

<!-- Bootstrap Boilerplate... -->

<div class="panel-body">
    <!-- Display Validation Errors -->

    <!-- New Task Form -->
    <form action="{{ route('posts.store') }}" method="POST" class="form-horizontal">
        @csrf

        <!-- Task Name -->
        <div class="form-group">
            <label for="task" class="col-sm-3 control-label">{{ trans('post') }}</label>
            <div class="col-sm-6">
                <input type="text" name="name" id="task-name" class="form-control" value="{{ old('name') }}">
                @error ('name')
                    <span style="color:red" class="main__table-text--red">({{ $message }})</span>
                @enderror
                <div>
                    <select name="task_id">
                        <option value="" selected>{{ trans('select_task') }}</option>
                        @foreach ($tasks as $task)
                            <option value="{{ $task->id }}">{{ $task->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
        <!-- Add Task Button -->
        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-6">
                <button type="submit" class="btn btn-default">
                    <i class="fa fa-plus"></i>{{ trans('add_post') }}
                </button>
            </div>
        </div>
    </form>
</div>

@endsection
