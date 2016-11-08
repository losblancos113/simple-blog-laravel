<div class="form-group">
    {!! Form::label('title','Tieu de bai viet', ['class' => 'control-label']) !!}
    {!! Form::text('title',null,[
            'id' => 'title',
            'class' => 'form-control',
            'placeholder' => 'Dien tieu de bai viet',
            'required' => 'true'
    ]) !!}
</div>
<div class="form-group">
    {!! Form::label('content','Content', ['class' => 'control-label']) !!}
    {!! Form::textarea('content',null,[
            'id' => 'content',
            'class' => 'form-control',
            'placeholder' => 'Noi dung',
            'required' => 'true'
    ]) !!}
</div>
<div class="form-group">
    {!! Form::submit($button_name, [
        'class' => 'btn btn-primary'
    ]) !!}
</div>