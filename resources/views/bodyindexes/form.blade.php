
<div class="form-inline">
    <div class="form-group col-sm-4 removeleft">
    {!! Form::label('co', 'Cổ:', ['class' => 'control-label']) !!}
        {!!
            Form::number('co',
            isset($data['co']) ? $data['co'] : null,
            ['class' => 'form-control'])
        !!}
    </div>
    <div class="form-group col-sm-4 removeleft">
        {!! Form::label('vai', 'Vai:', ['class' => 'control-label']) !!}
        {!!
            Form::number('vai',
            isset($data['vai']) ? $data['vai'] : null,
            ['class' => 'form-control'])
        !!}
    </div>
    <div class="form-group col-sm-4 removeleft removeright">
        {!! Form::label('nguc', 'Ngực:', ['class' => 'control-label']) !!}
        {!!
            Form::number('nguc',
            isset($data['nguc']) ? $data['nguc'] : null,
            ['class' => 'form-control'])
        !!}
    </div>
</div>


<div class="form-inline">
    <div class="form-group col-sm-4 removeleft">
        {!! Form::label('eo', 'Eo:', ['class' => 'control-label']) !!}
        {!!
            Form::number('eo',
            isset($data['eo']) ? $data['eo'] : null,
            ['class' => 'form-control'])
        !!}
    </div>
    <div class="form-group col-sm-4 removeleft">
        {!! Form::label('bung', 'Bụng:', ['class' => 'control-label']) !!}
        {!!
            Form::number('bung',
            isset($data['bung']) ? $data['bung'] : null,
            ['class' => 'form-control'])
        !!}
    </div>
    <div class="form-group col-sm-4 removeleft removeright">
        {!! Form::label('mong', 'Mông:', ['class' => 'control-label']) !!}
        {!!
            Form::number('mong',
            isset($data['mong']) ? $data['mong'] : null,
            ['class' => 'form-control'])
        !!}
    </div>
</div>

<div class="form-inline">
    <div class="form-group col-sm-4 removeleft">
        {!! Form::label('dui', 'Đùi:', ['class' => 'control-label']) !!}
        {!!
            Form::number('dui',
            isset($data['dui']) ? $data['dui'] : null,
            ['class' => 'form-control'])
        !!}
    </div>
    <div class="form-group col-sm-4 removeleft">
        {!! Form::label('dung', 'Đũng:', ['class' => 'control-label']) !!}
        {!!
            Form::number('dung',
            isset($data['dung']) ? $data['dung'] : null,
            ['class' => 'form-control'])
        !!}
    </div>
    <div class="form-group col-sm-4 removeleft removeright">
        {!! Form::label('dai_than', 'Dài thân:', ['class' => 'control-label']) !!}
        {!!
            Form::number('dai_than',
            isset($data['dai_than']) ? $data['dai_than'] : null,
            ['class' => 'form-control'])
        !!}
    </div>
</div>


<div class="form-inline">
    <div class="form-group col-sm-4 removeleft">
        {!! Form::label('dai_tay', 'Dài tay:', ['class' => 'control-label']) !!}
        {!!
            Form::number('dai_tay',
            isset($data['dai_tay']) ? $data['dai_tay'] : null,
            ['class' => 'form-control'])
        !!}
    </div>
    <div class="form-group col-sm-4 removeleft">
        {!! Form::label('bap_tay', 'Bắp tay:', ['class' => 'control-label']) !!}
        {!!
            Form::number('bap_tay',
            isset($data['bap_tay']) ? $data['bap_tay'] : null,
            ['class' => 'form-control'])
        !!}
    </div>
    <div class="form-group col-sm-4 removeleft removeright">
        {!! Form::label('ha_eo', 'Hạ eo:', ['class' => 'control-label']) !!}
        {!!
            Form::number('ha_eo',
            isset($data['ha_eo']) ? $data['ha_eo'] : null,
            ['class' => 'form-control'])
        !!}
    </div>
</div>
{!! Form::submit($submitButtonText, ['class' => 'btn btn-primary']) !!}