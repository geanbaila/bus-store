<div class="menu-item me-lg-1">
    <a class="menu-link py-3" href="{{ url('/') }}">
        <span class="menu-title">HOME</span>
    </a>
</div>
<div class="menu-item me-lg-1">
    <a class="menu-link py-3 {{(isset($menu_despacho_active))?"active":""}}" href="{{ Route('stand') }}">
        <span class="menu-title">STAND</span>
    </a>
</div>
<div class="menu-item me-lg-1">
    <a class="menu-link py-3 {{(isset($menu_reporte_active))?"active":""}}" href="{{ Route('chart') }}">
        <span class="menu-title">REPORTE</span>
    </a>
</div>
<div class="menu-item me-lg-1">
    <a class="menu-link py-3 {{(isset($menu_configuracion_active))?"active":""}}" href="{{ Route('configuration') }}">
        <span class="menu-title">CONFIGURACIÓN</span>
    </a>
</div>
<!--begin::Breadcrumb-->
{{-- <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
	<li class="breadcrumb-item text-dark">
		<a href="{{url('/venta')}}" class="btn btn-sm btn-secondary">Cargas y encomiendas</a>
	</li>
	<li class="breadcrumb-item text-dark">
		<a href="{{url('/manifiesto')}}" class="btn btn-sm btn-secondary">
			Manifiesto de carga
		</a>
	</li>
	<li class="breadcrumb-item text-dark">
		<a href="#" class="btn btn-sm btn-secondary">Gestión de documentos</a>
	</li>
	<li class="breadcrumb-item text-dark">
		<a href="#" class="btn btn-sm btn-secondary">
			Número de faltantes
		</a>
	</li>
	<li class="breadcrumb-item text-dark">
		<a href="#" class="btn btn-sm btn-secondary">
			Facturación electrónica
		</a>
	</li>
</ul> --}}
<!--end::Breadcrumb-->
