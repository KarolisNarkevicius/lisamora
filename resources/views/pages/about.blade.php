@extends('layout')

@section('body-class','about')

@section('content')
    <div class="container z-depth-1">

        <h2 class="fancy-heading">
            <span>
                @lang('about.header-apie')
            </span>
        </h2>
        <p>
            @lang('about.p-apie')
        </p>

        <div class="car-image">
            <img src="/images/masinos.jpg">
        </div>

        <h2 class="fancy-heading">
            <span>
                @lang('about.header-darbai')
            </span>
        </h2>
        <ul>
            @foreach(\Illuminate\Support\Facades\Lang::get('about.ul-darbai') as $darbas)
                <li>{{$darbas}}</li>
            @endforeach
        </ul>
        <h3>
            @lang('about.header-mini1')
        </h3>
    </div>
@endsection