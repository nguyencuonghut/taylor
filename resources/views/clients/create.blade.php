@extends('layouts.master')
@section('heading')
    <h1>Tạo khách hàng</h1>
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
                    html: true
                });
            });
        });
    </script>
@endpush


    {!!Form::close()!!}

    {!! Form::open([
            'route' => 'clients.store',
            'class' => 'ui-form'
            ]) !!}
    @include('clients.form', ['submitButtonText' => __('Tạo mới')])

    {!! Form::close() !!}


@stop
