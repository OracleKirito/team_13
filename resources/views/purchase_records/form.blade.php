<div class="form-group">
    {!! Form::label('b_number', '訂單編號：') !!}
    {!! Form::text('b_number', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('b_date','購買日期:') !!}
    {!! Form::date('b_date',null ,['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('serial_number', '序號：') !!}
    {!! Form::text('serial_number', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('a_id', '會員：') !!}
    {!! Form::text('a_id', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('p_id', '商品：') !!}
    {!! Form::text('p_id', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::submit($submitButtonText, ['class'=>'btn btn-primary form-control']) !!}
</div>
