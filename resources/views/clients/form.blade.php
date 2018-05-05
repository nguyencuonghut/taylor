<div class="form-group">
    {!! Form::label('name', 'Họ và tên:', ['class' => 'control-label']) !!}
    {!! 
        Form::text('name',  
        isset($data['owners']) ? $data['owners'][0]['name'] : null, 
        ['class' => 'form-control']) 
    !!}
</div>

<div class="form-group">
    {!! Form::label('email', 'Email:', ['class' => 'control-label']) !!}
    {!! 
        Form::email('email',
        isset($data['email']) ? $data['email'] : null, 
        ['class' => 'form-control']) 
    !!}
</div>

<div class="form-group">
    {!! Form::label('address', 'Địa chỉ:', ['class' => 'control-label']) !!}
    {!! 
        Form::text('address',
        isset($data['address']) ? $data['address'] : null, 
        ['class' => 'form-control'])
    !!}
</div>

<div class="form-inline">
    <div class="form-group col-sm-6 removeleft">
        {!! Form::label('primary_number', 'Số điện thoại:', ['class' => 'control-label']) !!}
        {!! 
            Form::text('primary_number',  
            isset($data['phone']) ? $data['phone'] : null, 
            ['class' => 'form-control']) 
        !!}
    </div>

    <div class="form-group col-sm-6 removeleft removeright">
        {!! Form::label('secondary_number', 'Số điện thoại (số thứ 2):', ['class' => 'control-label']) !!}
        {!! 
            Form::text('secondary_number',  
            null, 
            ['class' => 'form-control']) 
        !!}
    </div>
</div>

<div class="form-inline">
    <div class="form-group col-sm-6 removeleft">
        {!! Form::label('date_of_birth', 'Ngày sinh', ['class' => 'control-label']) !!}
        {!! Form::date('date_of_birth', \Carbon\Carbon::now(), ['class' => 'form-control']) !!}
    </div>
    <div class="form-group col-sm-6 removeleft removeright">
        {!! Form::label('favorite_color', 'Màu yêu thích:', ['class' => 'control-label']) !!}
        {!!
            Form::text('favorite_color',
            null,
            ['class' => 'form-control'])
        !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('gender_id', 'Giới tính:', ['class' => 'control-label']) !!}
    {!! Form::select('gender_id', $genders, null, ['placeholder' => '', 'id'=>'gender_id', 'name'=>'gender_id','class'=>'form-control', 'style' => 'width:100%']) !!}
</div>

{!! Form::submit($submitButtonText, ['class' => 'btn btn-primary']) !!}