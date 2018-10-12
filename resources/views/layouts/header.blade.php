<div id="header" class="header navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <a href="javascript:;" class="navbar-brand">{{ config('app.name') }}</a>
            <button type="button" class="navbar-toggle" data-click="sidebar-toggled">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <ul class="nav navbar-nav navbar-right">
            <li class="dropdown navbar-user">
                {{-- <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
                    {!! Html::image('/storage/'. Auth::user()->Foto, substr(Auth::user()->Usuario,0,1)) !!}
                    <span class="hidden-xs">{!! Auth::user()->Usuario !!}</span>
                </a> --}}
                <ul class="dropdown-menu animated fadeInLeft">
                    <li class="arrow"></li>
                   {{--  <li><a href="{{route('Usuario.ResetPassword')}}">Cambiar Contraseña</a></li> --}}
                    <li class="divider"></li>
                    <li>{{-- <a href="{!! url('/logout') !!}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            Cerrar Sesión
                        </a> --}}
                        <form id="logout-form" action="{{ url('/logout') }}" method="POST"
                              style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>
