<ul class="nav">
    <li class="nav-header"> Menú </li>
    <li class="{{ Request::is('home*') ? 'active' : '' }}">
        <a href="{!! url('home') !!}">
            <i class="fa fa-home"></i>&nbsp;&nbsp;
            <span>{{ trans('labels.modules.Inicio') }}</span>
        </a>
    </li>
    <li class="{{ Request::is('Conflicto/index') ? 'active' : '' }}">
        <a href="{!! route('Conflicto.index') !!}">
            <i class="fa fa-free-code-camp"></i>
            <span>{{ trans('labels.modules.Conflicto') }}</span>
        </a>
    </li>
    <li class="{{ Request::is('activista/*') ? 'active' : '' }}">
        <a href="{!! route('activista.index') !!}">
            <i class="fa fa-user-circle"></i>
            <span>{{ trans('labels.modules.Activista') }}</span>
        </a>
    </li>
    <li class="{{ Request::is('Institucion*') ? 'active' : '' }}">
        <a href="{!! route('Institucion.index') !!}">
            <i  class="fa fa-university"></i>
            <span>{{ trans('labels.modules.Instituciones') }}</span>
        </a>
    </li>
    <li class="has-sub">
        <a href="javascript:;">
            <i class="fa fa-cog"></i>
            <b class="caret pull-right"></b>
            <span>{{ trans('labels.modules.Paremetros') }}</span>
        </a>
        <ul class="sub-menu">
            {{--Amenaza--}}
            <li class="{{ Request::is('Amenaza/*') ? 'active' : '' }}">
                <a href="{!! route('Amenaza.index') !!}">
                    <i class="fa fa-times"></i>
                    <span>{{ trans('labels.modules.Amenaza') }}</span>
                </a>
            </li>
            {{--Fuente de Informacion--}}
            <li class="{{ Request::is('FuenteInformacion/*') ? 'active' : '' }}">
                <a href="{!! route('FuenteInformacion.index') !!}">
                    <i class="fa fa-info-circle"></i>
                    <span>{{ trans('labels.modules.FuenteInformacion') }}</span>
                </a>
            </li>
            {{--Fase--}}
            <li class="{{ Request::is('Fase/*') ? 'active' : '' }}">
                <a href="{!! route('Fase.index') !!}">
                    <i class="fa fa-bar-chart"></i>
                    <span>{{ trans('labels.modules.Fase') }}</span>
                </a>
            </li>
            {{--MEDIO--}}
            <li class="{{ Request::is('Medio/*') ? 'active' : '' }}">
                <a href="{!! route('Medio.index') !!}">
                    <i class="fa fa-medium"></i>
                    <span>{{ trans('labels.modules.Medio') }}</span>
                </a>
            </li>
            {{--DICCIONARIO
            <li class="{{ Request::is('Diccionario*') ? 'active' : '' }}">
                <a href="{!! route('Diccionario.index') !!}">
                    <i class="fa fa-book"></i>
                    <span>{{ trans('labels.modules.Diccionario') }}</span>
                </a>
            </li>--}}
            {{--GRADO CONFLICTIVIDAD--}}
            <li class="{{ Request::is('GradoConflictivida*') ? 'active' : '' }}">
                <a href="{!! route('GradoConflictividad.index') !!}">
                    <i class="fa fa-thermometer-half"></i>
                    <span>{{ trans('labels.modules.GradoConflictividad') }}</span>
                </a>
            </li>
            {{--NATURALEZA--}}
            <li class="{{ Request::is('Naturaleza*') ? 'active' : '' }}">
                <a href="{!! route('Naturaleza.index') !!}">
                    <i class="fa fa-book"></i>
                    <span>{{ trans('labels.modules.Naturaleza') }}</span>
                </a>
            </li>
            {{--NIVEL--}}
            <li class="{{ Request::is('Nivel*') ? 'active' : '' }}">
                <a href="{!! route('Nivel.index') !!}">
                    <i class="fa fa-book"></i>
                    <span>{{ trans('labels.modules.Nivel') }}</span>
                </a>
            </li>
            {{--USUARIOS--}}
            @if(\Auth::user()->Rol == 1)
            <li class="{{ Request::is('Usuario*') ? 'active' : '' }}">
                <a href="{!!route('Usuario.index') !!}">
                <i class="fa fa-user"></i>
                 <span>{{ trans('labels.modules.Usuarios') }}</span></a>
            </li>
            @endif
        </ul>
    </li>
    <li>
        <a href="javascript:;" class="sidebar-minify-btn" data-click="sidebar-minify"><i class="fa fa-angle-double-left"></i></a>
    </li>
</ul>
