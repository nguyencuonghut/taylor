@extends('layouts.master')
@section('heading')
@stop
@section('content')
@push('scripts')
    <script>
        $(document).ready(function () {
            $('[data-toggle="tooltip"]').tooltip(); //Tooltip on icons top
            $('.popoverOption').each(function () {
                var $this = $(this);
                $this.popover({
                    trigger: 'hover',

                    placement: 'left',
                    container: $this,
                    html: true,
                    content: $this.find('#popover_content_wrapper').html()
                });
            });
        });
    </script>
@endpush
    <div class="row">
        @include('partials.clientheader')
    </div>
    <div class="row">
        <div class="col-md-8">

                    <!-- Tab for each ticket -->
                    <div class="col-md-12">
                        <el-tabs active-name=<?php
                        switch (Session::get('tab')) {
                            case 'body_index':
                                echo("body_index");
                                break;
                            case 'product':
                                echo("product");
                                break;
                            default:
                                echo("body_index");
                                break;
                        }
                        ?> style="width:100%">
                            <el-tab-pane label="Số đo" name="body_index">
                                @if($body_index == '')
                                    <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#create_body_index"><i class="fa fa-plus-circle"><b> Tạo số đo</b></i></button>

                                    <div class="modal fade" id="create_body_index" tabindex="-1" role="dialog" aria-labelledby="CreateBodyIndexModalLabel">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                    <h4 class="modal-title" id="CreateBodyIndexModalLabel"><b>Tạo số đo</b></h4>
                                                </div>
                                                <div class="modal-body">
                                                    {!! Form::open([
                                                            'route' => ['bodyindexes.store', $client->id],
                                                            ]) !!}

                                                    @include('clients.tabs.body_index_form')
                                                    {!! Form::submit( __('Tạo') , ['class' => 'btn btn-primary', 'style' => 'width:100%']) !!}
                                                    {!! Form::close() !!}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @else
                                    <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#edit_body_index"><i class="fa fa-edit"><b> Cập nhật số đo</b></i></button>

                                    <div class="modal fade" id="edit_body_index" tabindex="-1" role="dialog" aria-labelledby="EditBodyIndexModalLabel">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                    <h4 class="modal-title" id="EditBodyIndexModalLabel"><b>Cập nhật số đo</b></h4>
                                                </div>
                                                <div class="modal-body">
                                                    {!! Form::model($client, [
                                                        'method' => 'PATCH',
                                                        'route' => ['bodyindexes.update', $client->id],
                                                        'enctype' => 'multipart/form-data'
                                                        ]) !!}
                                                    @include('clients.tabs.body_index_form')
                                                    {!! Form::submit( __('Tạo') , ['class' => 'btn btn-primary', 'style' => 'width:100%']) !!}
                                                    {!! Form::close() !!}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="boxspace">
                                        <div class="contactleft">
                                            <p><b>Cổ:</b> {{$body_index->co}} cm</p>
                                            <p><b>Vai:</b> {{$body_index->vai}} cm</p>
                                            <p><b>Ngực:</b> {{$body_index->nguc}} cm</p>
                                            <p><b>Eo:</b> {{$body_index->eo}} cm</p>
                                            <p><b>Bụng:</b> {{$body_index->bung}} cm</p>
                                            <p><b>Mông:</b> {{$body_index->mong}} cm</p>
                                        </div>

                                        <!--Client info leftside END-->
                                        <!--Client info rightside-->
                                        <div class="contactright">
                                            <p><b>Đùi:</b> {{$body_index->dui}} cm</p>
                                            <p><b>Đũng:</b> {{$body_index->dung}} cm</p>
                                            <p><b>Dài thân:</b> {{$body_index->dai_than}} cm</p>
                                            <p><b>Dài tay:</b> {{$body_index->dai_tay}} cm</p>
                                            <p><b>Bắp tay:</b> {{$body_index->bap_tay}} cm</p>
                                            <p><b>Hạ eo:</b> {{$body_index->ha_eo}} cm</p>
                                        </div>
                                    </div>
                                @endif
                            </el-tab-pane>

                            <el-tab-pane label="Sản phẩm" name="product">
                                <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#create_product"><i class="fa fa-plus-circle"><b> Tạo sản phẩm</b></i></button>

                                <div class="modal fade" id="create_product" tabindex="-1" role="dialog" aria-labelledby="CreateProductModalLabel">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" id="CreateProductModalLabel"><b>Tạo sản phẩm</b></h4>
                                            </div>
                                            <div class="modal-body">
                                                {!! Form::open([
                                                        'route' => ['products.store', $client->id],
                                                        ]) !!}

                                                @include('clients.tabs.product_form')
                                                {!! Form::submit( __('Tạo') , ['class' => 'btn btn-primary', 'style' => 'width:100%']) !!}
                                                {!! Form::close() !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <table class="table table-hover" id="products-table">
                                    <h3>{{ __('Sản phẩm đã may') }}</h3>
                                    <thead>
                                    <tr>
                                        <th>{{ __('Loại sản phẩm') }}</th>
                                        <th>{{ __('Chất liệu') }}</th>
                                        <th>{{ __('Kiểu dệt') }}</th>
                                        <th>{{ __('Giá') }}</th>
                                        <th>{{ __('Màu sắc') }}</th>
                                        <th>{{ __('Ngày may') }}</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($products as $product)
                                    <tr>
                                        <td>{{$product->product_type->name}}</td>
                                        <td>{{$product->material->name}}</td>
                                        <td>{{$product->texture_type->name}}</td>
                                        <td>{{number_format($product->price,0)}} VNĐ</td>
                                        <td>{{$product->color}}</td>
                                        <td>{{date_format(new DateTime($product->created_at), 'd-m-Y')}}</td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </el-tab-pane>
                        </el-tabs>
                    </div>
                </div>

        <div class="col-md-4 currenttask">
            <div class="sidebarheader" style="background-color: #337ab7">
                <p style="text-align: center;">{{'Timeline'}}</p>
            </div>
            <div class="activity-feed movedown">
                @foreach($activities as $activity)
                    <div class="feed-item">
                        <div class="activity-date">{{date_format(new DateTime($activity->created_at), "d-m-Y H:i")}}</div>
                        <div class="activity-text">{!! $activity->text !!}</div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@stop
