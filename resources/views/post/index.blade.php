@extends('layouts.app')

@section('content')
<!-- Create Task Form... -->

<!-- Current Tasks -->
<div class="panel panel-default">
    <div class="panel-heading">
        {{ trans('post_list') }}
    </div>
    <div class="panel-body">
        <table class="table table-striped task-table">

            <!-- Table Headings -->
            <thead>
                <th>{{ trans('post') }}</th>
                <th><a href="{{ route('posts.create') }}" type="submit" class="btn btn-basic">{{ trans('add_new') }}</a></th>
            </thead>

            <!-- Table Body -->
            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <!-- Task Name -->
                        <td class="table-text"><div>{{ $post->name }}</div></td>
                        <td>
                            <a href="{{ route('posts.show', $post->id) }}" type="submit" class="btn btn-success">{{ trans('detail') }}</a>
                            <a href="{{ route('posts.edit', $post->id) }}" type="submit" class="btn btn-primary">{{ trans('edit') }}</a>
                        </td>
                        <td>
                            <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
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
        <a href="{{ route('tasks.index') }}">{{ trans('task_list') }}</a>
    </div>
</div>
@endsection
