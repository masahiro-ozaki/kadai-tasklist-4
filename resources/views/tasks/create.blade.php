@extends('layouts.app')

@section('content')


    <div class="row">
        <div class="col-xs-12 col-sm-offset-2 col-sm-8 col-md-offset-2 col-md-8 col-lg-offset-3 col-lg-6">
            <h1>To do追加ページ</h1>
            {!! Form::model($task, ['route' => 'tasks.store']) !!}
                
                <div class="form-group">
                    {!! Form::label('status', '進捗状況:') !!}
                    {!! Form::text('status', null, ['class' => 'form-control', "placeholder"=>"進捗状況を書いてください"]) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('content', 'To do:') !!}
                    {!! Form::text('content', null, ['class' => 'form-control', "placeholder"=>"To doを書いてください"]) !!}
                </div>
            
                {!! Form::submit('追加', ['class' => 'btn btn-primary']) !!}
        
            {!! Form::close() !!}
        </div>
    </div>

@endsection