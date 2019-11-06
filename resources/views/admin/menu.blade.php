@section('content')
<ul class="sidebar-menu" data-widget="tree">

    <!-- Inicio -->
    <li class="{{ Request::is('/') ? 'active' : '' }}"><a href="/"><i class="fa fa-home"></i> <span>Inicio</span></a></li>
    
    <!-- Ejercicio Número 1 -->
    <li class="{{ Request::is('multiples') ? 'active' : '' }}"><a href="/multiples"><i class="fa fa-edit"></i> <span>Ejercicio Número 1</span></a></li>
</ul>
