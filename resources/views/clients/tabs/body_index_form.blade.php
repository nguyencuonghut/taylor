<div class="form-inline">
    <div class="form-group col-sm-4 removeleft">
        {!! Form::label('co', 'Cổ:', ['class' => 'control-label']) !!}
        {!!
            Form::number('co',
            isset($body_index['co']) ? $body_index['co'] : null,
            ['class' => 'form-control'])
        !!}
    </div>
    <div class="form-group col-sm-4 removeleft">
        {!! Form::label('vai', 'Vai:', ['class' => 'control-label']) !!}
        {!!
            Form::number('vai',
            isset($body_index['vai']) ? $body_index['vai'] : null,
            ['class' => 'form-control'])
        !!}
    </div>
    <div class="form-group col-sm-4 removeleft removeright">
        {!! Form::label('nguc', 'Ngực:', ['class' => 'control-label']) !!}
        {!!
            Form::number('nguc',
            isset($body_index['nguc']) ? $body_index['nguc'] : null,
            ['class' => 'form-control'])
        !!}
    </div>
</div>


<div class="form-inline">
    <div class="form-group col-sm-4 removeleft">
        {!! Form::label('eo', 'Eo:', ['class' => 'control-label']) !!}
        {!!
            Form::number('eo',
            isset($body_index['eo']) ? $body_index['eo'] : null,
            ['class' => 'form-control'])
        !!}
    </div>
    <div class="form-group col-sm-4 removeleft">
        {!! Form::label('bung', 'Bụng:', ['class' => 'control-label']) !!}
        {!!
            Form::number('bung',
            isset($body_index['bung']) ? $body_index['bung'] : null,
            ['class' => 'form-control'])
        !!}
    </div>
    <div class="form-group col-sm-4 removeleft removeright">
        {!! Form::label('mong', 'Mông:', ['class' => 'control-label']) !!}
        {!!
            Form::number('mong',
            isset($body_index['mong']) ? $body_index['mong'] : null,
            ['class' => 'form-control'])
        !!}
    </div>
</div>

<div class="form-inline">
    <div class="form-group col-sm-4 removeleft">
        {!! Form::label('dui', 'Đùi:', ['class' => 'control-label']) !!}
        {!!
            Form::number('dui',
            isset($body_index['dui']) ? $body_index['dui'] : null,
            ['class' => 'form-control'])
        !!}
    </div>
    <div class="form-group col-sm-4 removeleft">
        {!! Form::label('dung', 'Đũng:', ['class' => 'control-label']) !!}
        {!!
            Form::number('dung',
            isset($body_index['dung']) ? $body_index['dung'] : null,
            ['class' => 'form-control'])
        !!}
    </div>
    <div class="form-group col-sm-4 removeleft removeright">
        {!! Form::label('dai_than', 'Dài thân:', ['class' => 'control-label']) !!}
        {!!
            Form::number('dai_than',
            isset($body_index['dai_than']) ? $body_index['dai_than'] : null,
            ['class' => 'form-control'])
        !!}
    </div>
</div>


<div class="form-inline">
    <div class="form-group col-sm-4 removeleft">
        {!! Form::label('dai_tay', 'Dài tay:', ['class' => 'control-label']) !!}
        {!!
            Form::number('dai_tay',
            isset($body_index['dai_tay']) ? $body_index['dai_tay'] : null,
            ['class' => 'form-control'])
        !!}
    </div>
    <div class="form-group col-sm-4 removeleft">
        {!! Form::label('bap_tay', 'Bắp tay:', ['class' => 'control-label']) !!}
        {!!
            Form::number('bap_tay',
            isset($body_index['bap_tay']) ? $body_index['bap_tay'] : null,
            ['class' => 'form-control'])
        !!}
    </div>
    <div class="form-group col-sm-4 removeleft removeright">
        {!! Form::label('ha_eo', 'Hạ eo:', ['class' => 'control-label']) !!}
        {!!
            Form::number('ha_eo',
            isset($body_index['ha_eo']) ? $body_index['ha_eo'] : null,
            ['class' => 'form-control'])
        !!}
    </div>
</div>