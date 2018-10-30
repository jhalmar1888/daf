@extends('layouts.app2')
@section('content')
<div id="home" class="content has-bg home" style="height: 969px;">
            <!-- begin content-bg -->
            <div class="content-bg">
            </div>
           <h1 class="text-center">ORDENES DE PAGO </h1>
<h1 class="page-header">Dashboard <small>del sistema de Orden de Pago</small></h1>
		<div class="container home-content">
				<!-- begin col-3 -->
				<div class="col-md-3 col-sm-6">
					<div class="widget widget-stats bg-green">
						<div class="stats-icon"><i class="fa fa-desktop"></i></div>
						<div class="stats-info">
							<h4>TOTAL VISITANTES AL SISTEMA</h4>
							<p>10</p>	
						</div>
						<div class="stats-link">
							<a href="{{ route('products.index') }}">VISTAS DE NUEVA ORDEN
								<i class="fa fa-arrow-circle-o-right"></i>
							</a>
						</div>
					</div>
				</div>
				<!-- end col-3 -->
				<!-- begin col-3 -->
				<div class="col-md-3 col-sm-6">
					<div class="widget widget-stats bg-blue">
						<div class="stats-icon"><i class="fa fa-chain-broken"></i></div>
						<div class="stats-info">
							<h4>CANTIDAD DE REGISTROS</h4>
							<p>20.44%</p>	
						</div>
						<div class="stats-link">
							<a href="javascript:;">View Detail <i class="fa fa-arrow-circle-o-right"></i></a>
						</div>
					</div>
				</div>
				<!-- end col-3 -->
				<!-- begin col-3 -->
				<div class="col-md-3 col-sm-6">
					<div class="widget widget-stats bg-purple">
						<div class="stats-icon"><i class="fa fa-users"></i></div>
						<div class="stats-info">
							<h4>CANTIDAD DE EMPRESAS</h4>
							<p>50</p>	
						</div>
						<div class="stats-link">
							<a href="javascript:;">View Detail <i class="fa fa-arrow-circle-o-right"></i></a>
						</div>
					</div>
				</div>
				<!-- end col-3 -->

			</div>

<div class="bg-cover">
  {{--   <img src="/images/cofadena.png" alt="">

    <img src="/images/cofadena2.png" width="500" height="500"> --}}
</div>
        </div>



	


@endsection