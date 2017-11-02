@extends('layouts.app')

@section('content')

    <h1>メッセージ新規作成ページ</h1>
    
    {{ '<p style="color: red;">htmlentities 関数に通した場合</p>' }}
    {!! '<p style="color: red;">htmlentities 関数に通さなかった場合</p>' !!}
    
    <div class="row">
        <div class="col-lg-6 col-md-offset-2 col-md-8 col-lg-offset-3 col-lg-6">
            {!! Form::model($task, ['route' => 'tasks.store']) !!}
            
                <div class="form-group">
                    {!! Form::label('status', 'タイトル:') !!}
                    {!! Form::text('status', null, ['class' => 'form-control']) !!}
                </div>
                    
                <div class="form-group">
                    {!! Form::label('content', 'メッセージ:') !!}
                    {!! Form::text('content', null, ['class' => 'form-control']) !!}
                </div>
                
                {!! Form::submit('投稿', ['class' => 'btn btn-primary']) !!}
        
            {!! Form::close() !!}
        </div>
    </div>

@endsection