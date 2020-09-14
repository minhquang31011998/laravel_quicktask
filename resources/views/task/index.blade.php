@extends('layouts.app')

@section('content')
<!-- Create Task Form... -->

<!-- Current Tasks -->
<div class="panel panel-default">
    <div class="panel-heading">
        {{ trans('task_list') }}
    </div>
    <div class="panel-body">
        <table class="table table-striped task-table">

            <!-- Table Headings -->
            <thead>
                <th>{{ trans('task') }}</th>
                <th><a href="{{ route('tasks.create') }}" type="submit" class="btn btn-basic">{{ trans('add_new') }}</a></th>
            </thead>

            <!-- Table Body -->
            <tbody>
                @foreach ($tasks as $task)
                    <tr>
                        <!-- Task Name -->
                        <td class="table-text"><div>{{ $task->name }}</div></td>
                        <td>
                            <a href="{{ route('tasks.edit', $task->id) }}" type="submit" class="btn btn-primary">{{ trans('edit') }}</a>
                        </td>
                        <td>
                            <form action="{{ route('tasks.destroy', $task->id) }}" method="POST">
                            @csrf
                            @method('DELETE')

                                <button type="submit" class="btn btn-danger">
                                    <i class="fa fa-trash"></i> {{ trans('delete') }}
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="panel-heading">
        <a href="{{ route('posts.index') }}">{{ trans('post_list') }}</a>
    </div>
</div>
@endsection
