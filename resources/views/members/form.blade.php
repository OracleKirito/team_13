<div class="form-group">
    {!! Form::label('a_name', '會員姓名：') !!}
    {!! Form::text('a_name', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('birth','出生年月日:') !!}
    {!! Form::date('birth',null ,['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('account', '帳號：') !!}
    {!! Form::text('account', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('password', '密碼：') !!}
    {!! Form::text('password', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('balance', '餘額：') !!}
    {!! Form::text('balance', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::submit($submitButtonText, ['class'=>'btn btn-primary form-control']) !!}
</div>
