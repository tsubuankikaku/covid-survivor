{!! Form::open(['route' => 'experiences.store']) !!}
    <div class="form-group">
        {!! Form::textarea('content', null, ['class' => 'form-control', 'rows' => '2']) !!}
        {!! Form::submit('Post', ['class' => 'btn btn-info btn-block']) !!}
    </div>
{!! Form::close() !!}