<div class="col-md-8">

    <h1 class="moveup">{{$client->name}}</h1>

    <!--Client info leftside-->
    <div class="contactleft">
        @if($client->email != "")
                <!--MAIL-->
        <p><span class="glyphicon glyphicon-envelope" aria-hidden="true" data-toggle="tooltip"
                 title="{{ __('mail') }}" data-placement="left"> </span>
            <a href="mailto:{{$client->email}}" data-toggle="tooltip" data-placement="left">{{$client->email}}</a></p>
        @endif
        @if($client->primary_number != "")
                <!--Work Phone-->
        <p><span class="glyphicon glyphicon-headphones" aria-hidden="true" data-toggle="tooltip"
                 title=" {{ __('Primary number') }} " data-placement="left"> </span>
            <a href="tel:{{$client->work_number}}">{{$client->primary_number}}</a></p>
        @endif
        @if($client->secondary_number != "")
                <!--Secondary Phone-->
        <p><span class="glyphicon glyphicon-phone" aria-hidden="true" data-toggle="tooltip"
                 title="{{ __('Secondary number') }}" data-placement="left"> </span>
            <a href="tel:{{$client->secondary_number}}">{{$client->secondary_number}}</a></p>
        @endif
        @if($client->address)
                <!--Address-->
        <p><span class="glyphicon glyphicon-home" aria-hidden="true" data-toggle="tooltip"
                 title="{{ __('Full address') }}" data-placement="left"> </span> {{$client->address}}
        </p>
        @endif
    </div>

    <!--Client info leftside END-->
    <!--Client info rightside-->
    <div class="contactright">
        @if($client->date_of_birth != "")
                <!--Company-->
        <p><span class="glyphicon glyphicon-calendar" aria-hidden="true" data-toggle="tooltip"
                 title="{{ __('Ngày sinh') }}" data-placement="left"> </span> {{date_format(new DateTime($client->date_of_birth), "d-m-Y")}}</p>
        @endif
        @if($client->gender_id != "")
                <!--Company-->
        <p><span class="glyphicon glyphicon-user" aria-hidden="true" data-toggle="tooltip"
                 title="{{ __('Giới tính') }}" data-placement="left"> </span> {{$client->gender->name}}</p>
        @endif
        @if($client->favorite_color != "")
                <!--Industry-->
        <p><span class="glyphicon glyphicon-tint" aria-hidden="true" data-toggle="tooltip"
                 title="{{ __('Màu yêu thích') }}"data-placement="left"> </span> {{$client->favorite_color}}</p>
        @endif
    </div>
</div>

<!--Client info rightside END-->
