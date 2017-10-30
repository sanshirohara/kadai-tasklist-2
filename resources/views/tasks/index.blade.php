@extends('layouts.app')

@section('content')

    <h1>メッセージ一覧</h1>

    @if (count($tasks) > 0)
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>id</th>
                    <th>ステータス</th>
                    <th>メッセージ</th>
                </tr>
            </thead>
            <tbody>
        <ul>
            @foreach ($tasks as $task)
                
                <li>{!! link_to_route('tasks.show', $task->id, ['id' => $task->id]) !!} : {{ $task->status}} > {{ $task->content }}</li>
                
            @endforeach
        </ul>
    @endif

    {!! link_to_route('tasks.create', '新規メッセージの投稿', null, ['class' => 'btn btn-primary']) !!}

@endsection