<ul class="nav">
    <li class="nav-header"> Menú </li>
    <li class="{{ Request::is('home*') ? 'active' : '' }}">
        <a href="{{ route('home') }}">
            <i class="fa fa-home"></i>&nbsp;&nbsp;
            <span>{{ trans('labels.modules.Inicio') }}</span>
        </a>
    </li>
    <li class="{{ Request::is('products*') ? 'active' : '' }}">
        <a href="{{ route('products.index') }}">
            <i class="fa fa-free-code-camp"></i>
            <span>{{ trans('labels.modules.Producto') }}</span>
        </a>
    </li>
    <li class="{{ Request::is('empresas*') ? 'active' : '' }}">
        <a href="{{ route('empresas.index') }}">
            <i class="fa fa-user-circle"></i>
            <span>{{ trans('labels.modules.Empresa') }}</span>
        </a>
    </li>
     {{--<li class="{{ Request::is('Institucion*') ? 'active' : '' }}">
        <a href="#">
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
           Amenaza
            <li class="{{ Request::is('Amenaza/*') ? 'active' : '' }}">
                <a href="#">
                    <i class="fa fa-times"></i>
                    <span>{{ trans('labels.modules.Amenaza') }}</span>
                </a>
            </li>
            {{--Fase
            <li class="{{ Request::is('Fase/*') ? 'active' : '' }}">
                <a href="#">
                    <i class="fa fa-bar-chart"></i>
                    <span>{{ trans('labels.modules.Fase') }}</span>
                </a>
            </li>
            {{--MEDIO
            <li class="{{ Request::is('Medio/*') ? 'active' : '' }}">
                <a href="#">
                    <i class="fa fa-medium"></i>
                    <span>{{ trans('labels.modules.Medio') }}</span>
                </a>
            </li>
                        
            {{--USUARIOS
            @if(\Auth::user()->Rol == 1)
            <li class="{{ Request::is('Usuario*') ? 'active' : '' }}">
                <a href="#">
                <i class="fa fa-user"></i>
                 <span>{{ trans('labels.modules.Usuarios') }}</span></a>
            </li>
           {{--  @endif 
        </ul>--}}
    </li>
    <li>
        <a href="javascript:;" class="sidebar-minify-btn" data-click="sidebar-minify"><i class="fa fa-angle-double-left"></i></a>
    </li>
</ul>
