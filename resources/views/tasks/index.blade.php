@extends('layouts.app')

@section('content')

    
<div class="row">
        <div class="col-xs-12 col-sm-offset-2 col-sm-8 col-md-offset-2 col-md-8 col-lg-offset-3 col-lg-6">
    <h1>To doリスト</h1>

    @if (count($tasks) > 0)
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>id</th>
                    <th>進捗状況</th>
                    <th>To do</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tasks as $task)
                    <tr>
                        <td>{!! link_to_route('tasks.show', $task->id, ['id' => $task->id]) !!}</td>
                        <td>{{ $task->status }}</td>
                        <td>{{ $task->content }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
    
    {!! link_to_route('tasks.create', '新規To doの追加', null, ['class' => 'btn btn-primary']) !!}

</div>
</div>

@endsection