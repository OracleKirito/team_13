<div class="form-group">
    {!! Form::label('platform', '平台：') !!}
    {!! Form::text('platform', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('p_name','商品名稱:') !!}
    {!! Form::text('p_name',null ,['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('price', '價格：') !!}
    {!! Form::text('price', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('company', '公司編號：') !!}
    {!! Form::text('company', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('inventory', '庫存：') !!}
    {!! Form::text('inventory', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::submit($submitButtonText, ['class'=>'btn btn-primary form-control']) !!}
</div>
