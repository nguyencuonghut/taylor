<div class="form-inline">
    <div class="form-group col-sm-4 removeleft">
        {!! Form::label('product_type_id', 'Loại sản phẩm:', ['class' => 'control-label']) !!}
        {!! Form::select('product_type_id', $product_types, null, ['placeholder' => '', 'id'=>'product_type_id', 'name'=>'product_type_id','class'=>'form-control', 'style' => 'width:100%']) !!}

    </div>
    <div class="form-group col-sm-4 removeleft">
        {!! Form::label('material_id', 'Chất liệu:', ['class' => 'control-label']) !!}
        {!! Form::select('material_id', $materials, null, ['placeholder' => '', 'id'=>'material_id', 'name'=>'material_id','class'=>'form-control', 'style' => 'width:100%']) !!}

    </div>
    <div class="form-group col-sm-4 removeleft removeright">
        {!! Form::label('texture_type_id', 'Kiểu dệt:', ['class' => 'control-label']) !!}
        {!! Form::select('texture_type_id', $texture_types, null, ['placeholder' => '', 'id'=>'texture_type_id', 'name'=>'texture_type_id','class'=>'form-control', 'style' => 'width:100%']) !!}

    </div>
</div>


<div class="form-inline">
    <div class="form-group col-sm-6 removeleft">
        {!! Form::label('price', 'Giá tiền:', ['class' => 'control-label']) !!}
        {!!
            Form::number('price',
            isset($product['price']) ? $product['price'] : null,
            ['class' => 'form-control'])
        !!}
    </div>
    <div class="form-group col-sm-6 removeright">
        {!! Form::label('color', 'Màu sắc:', ['class' => 'control-label']) !!}
        {!!
            Form::text('color',
            isset($product['color']) ? $product['color'] : null,
            ['class' => 'form-control'])
        !!}
    </div>
</div>