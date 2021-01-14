<div class="form-group">
    {!! Form::label('c_name', '公司名稱：') !!}
    {!! Form::text('c_name', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('c_manager','經理人:') !!}
    {!! Form::text('c_manager',null ,['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('c_phone', '公司電話：') !!}
    {!! Form::text('c_phone', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('c_address', '公司地址：') !!}
    {!! Form::text('c_address', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::submit($submitButtonText, ['class'=>'btn btn-primary form-control']) !!}
</div>
