@extends('layout')

@section('body-class','contacts')

@section('content')
    <div class="container z-depth-1">
        @if(!App::isLocale('lt'))
        <h2 class="fancy-heading">
            <span>
                @lang('contacts.contacts-header')
            </span>
        </h2>
            <div class="info">
                <div class="row">
                    <div class="block col l6 s12 m6">
                        <div class="center valign-wrapper">
                                <i class="small material-icons valign">contact_phone</i>
                            <span class="text valign">
                                @lang('contacts.phone') @lang('contacts.numeris')
                            </span>
                        </div>
                    </div>
                    <div class="block col l6 s12 m6">
                        <div class="center valign-wrapper">
                            <i class="small material-icons valign">email</i>
                            <span class="text valign">
                                @lang('contacts.email') @lang('contacts.pastas')
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        @else
            <h2 class="fancy-heading">
            <span>
                @lang('contacts.contacts-header')
            </span>
            </h2>
            <div class="row info-lt">
                <div class="col s12 m3 l3 center-align">
                    <div class="title">                        Direktorius                    </div>
                    <div>                        Vygandas Kavaliauskas                    </div>
                    <div>                        Mobilus telefonas  +370 699 16387                    </div>
                    <div>                        El. paštas:  vygandas@lisamora.lt                    </div>
                </div>
                <div class="col s12 m3 l3 center-align">
                    <div class="title">                        Užsakymai, konsultacijos, projektai                    </div>
                    <div>                        Renaldas Streleckis                    </div>
                    <div>                        Mobilus telefonas  +370 699 96956                    </div>
                    <div>                        El.paštas:  renaldas@lisamora.lt                    </div>
                </div>
                <div class="col s12 m3 l3 center-align">
                    <div class="title">                        Vyr. buhalterė                    </div>
                    <div>                        Simona Radžiukynienė                    </div>
                    <div>                        Mobilus telefonas     +370 655 57566                    </div>
                    <div>                        El.paštas:  simona@lisamora.lt                    </div>
                </div>
                <div class="col s12 m3 l3 center-align">
                    <div class="title">                        Projektų Vadovas                    </div>
                    <div>                        Andrius Pileckas                    </div>
                    <div>                        Mobilus telefonas     +370 673 69772                    </div>
                    <div>                        El.paštas:  andrius@lisamora.lt                    </div>
                </div>
            </div>
            <h2 class="fancy-heading">
                <span>
                    Rekvizitai
                </span>
            </h2>
            <div class="rekvizitai">
                <div class="center-align">
                    <div>Įmonės kodas:135960025</div>
                    <div>PVM mokėtojo kodas LT100001412310</div>
                    <div>Adresas Ukmergės g. 14-4, LT-49343 Kaunas</div>
                </div>
            </div>
        @endif
        <!--<h2 class="fancy-heading">
            <span>
            @lang('contacts.message-header')
        </span>
        </h2>
        <div class="form">
            <div class="row">
                <div class="l12 col">

                    <div class="row">
                        <div class="input-field col s4 offset-s2">
                            <input id="name" type="text">
                            <label for="name">@lang('contacts.name-input')</label>
                        </div>
                        <div class="input-field col s4">
                            <input id="email" type="email" class="validate">
                            <label for="email">@lang('contacts.email-input')</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s8 offset-s2">
                            <textarea id="textarea1" class="materialize-textarea"></textarea>
                            <label for="textarea1">@lang('contacts.message-input')</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s2 offset-s2">
                        <a class="waves-effect waves-light btn modal-trigger" href="#contactsModal">@lang('contacts.send-button')</a>
                            </div>
                    </div>

                </div>
            </div>
        </div>-->
    </div>
@endsection