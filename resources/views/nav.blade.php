<div class="navbar-fixed">
    <nav>
        <div class="nav-wrapper">
            <a href="/@lang('route.locale')" class="brand-logo">
                <img src="/images/logo.png">
            </a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="/@lang('route.locale')" class="nav-apie">@lang('general.home')</a></li>
                {{--<li><a href="{{ isset($sauna) ? '#steam' : '/'.Lang::get('route.steam') }}"--}}
                       {{--class="nav-steam">@lang('general.steam')</a></li>--}}
                <li><a href="{{ isset($sauna) ? '#turkish' : '/'.Lang::get('route.turkish') }}"
                       class="nav-turkish">@lang('general.turkish')</a></li>
                <li><a href="{{ isset($sauna) ? '#russian' : '/'.Lang::get('route.russian') }}"
                       class="nav-russian">@lang('general.russian')</a></li>
                <li><a href="{{ isset($sauna) ? '#finnish' : '/'.Lang::get('route.finnish') }}"
                       class="nav-finnish">@lang('general.finnish')</a></li>
                <li><a href="{{ Lang::get('route.locale') ? "/" : ""  }}@lang('route.locale')/@lang('route.contacts')" class="nav-contacts">@lang('general.contacts')</a></li>
            </ul>
        </div>
    </nav>
</div>