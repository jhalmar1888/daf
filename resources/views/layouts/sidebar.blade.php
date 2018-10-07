<!-- begin #sidebar -->
<div id="sidebar" class="sidebar">
    <!-- begin sidebar scrollbar -->
    <div data-scrollbar="true" data-height="100%">
        <!-- begin sidebar user -->
        <ul class="nav">
            <li class="nav-profile">
                <div class="image">
                    <a href="javascript:;">{!! Html::image('/storage/'. Auth::user()->Foto, Auth::user()->Usuario) !!}</a>
                </div>
                <div class="info">
                    @if (Auth::guest())
                        Invitado
                    @else
                        {{ Auth::user()->Usuario}}
                    @endif
                    <small>Conectado como: {{ Auth::user()->Rol ? Auth::user()->rol->Rol : ''}}</small>
                </div>
            </li>
        </ul>
        @include('layouts.menu')
    </div>
</div>
<div class="sidebar-bg"></div>
