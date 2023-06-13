@extends('layouts.app')

@section('title', 'servicios waancolor')

@section('content')
<div class="inner-banner"></div>
<div class="w3-services py-5">
	<div class="container py-lg-4">
		<div class="title-content text-left mb-lg-5 mb-4">
			<h6 class="sub-title">
                {{ __('te ofrecemos') }}
            </h6>
			<h3 class="hny-title">
                {{ __('los siguientes servicios') }}
            </h3>
			<p>
                {{ __('desarrollamos innovadoras soluciones y personalizadas para su necesidad.') }}
            </p>
		</div>
		<div class="row w3-services-grids">
			<div class="col-lg-4 col-md-6 causes-grid">
				<div class="causes-grid-info">
					<a href="https://wa.link/g7a2cx">
                        <img src="assets/images/s1.png" class="img-fuild" alt="Waancolor">
                    </a>
					<a class="cause-title-wrap" href="https://wa.link/g7a2cx">
						<h4 class="cause-title">
                            {{ __('Construcciones con sistema drywall.') }}
                        </h4>
					</a>
					<p class="card-text mb-0">
						{{ __('Construcción revolucionaria: Descubre la versatilidad y eficiencia del sistema Drywall.') }}
					</p>
					<a class="btn btn-style btn-primary mt-4" href="https://wa.link/g7a2cx">
                        {{ __('Solicitar cotización') }}
                        <i class="fa fa-whatsapp"></i>
                    </a>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 causes-grid">
				<div class="causes-grid-info">
					<a href="https://wa.link/g7a2cx">
                        <img src="assets/images/s2.png" class="img-fuild" alt="Waancolor">
                    </a>
					<a class="cause-title-wrap" href="https://wa.link/g7a2cx">
						<h4 class="cause-title">
                            {{ __('Obras civiles y de albañilería en general.') }}
                        </h4>
					</a>
					<p class="card-text mb-0">
						{{ __('Descubre obras civiles y albañilería: construcciones sólidas que transforman el entorno.') }}
					</p>
					<a class="btn btn-style btn-primary mt-4" href="https://wa.link/g7a2cx">
                        {{ __('Solicitar cotización') }}
                        <i class="fa fa-whatsapp"></i>
                    </a>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 causes-grid">
				<div class="causes-grid-info">
					<a href="https://wa.link/g7a2cx">
                        <img src="assets/images/s3.png" class="img-fuild" alt="Waancolor">
                    </a>
					<a class="cause-title-wrap" href="https://wa.link/g7a2cx">
						<h4 class="cause-title">
                            {{ __('Gasfitería e instalaciones sanitarias.') }}
                        </h4>
					</a>
					<p class="card-text mb-0">
						{{ __('Expertos en gasfitería e instalaciones sanitarias: soluciones confiables para tu hogar.') }}
					</p>
					<a class="btn btn-style btn-primary mt-4" href="https://wa.link/g7a2cx">
                        {{ __('Solicitar cotización') }}
                        <i class="fa fa-whatsapp"></i>
                    </a>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 causes-grid">
				<div class="causes-grid-info">
					<a href="https://wa.link/g7a2cx">
                        <img src="assets/images/s4.png" class="img-fuild" alt="Waancolor">
                    </a>
					<a class="cause-title-wrap" href="https://wa.link/g7a2cx">
						<h4 class="cause-title">
                            {{ __('Carpintería en madera y melamina.') }}
                        </h4>
					</a>
					<p class="card-text mb-0">
						{{ __('Excelencia en carpintería: creando belleza y funcionalidad en madera y melamina.') }}
					</p>
					<a class="btn btn-style btn-primary mt-4" href="https://wa.link/g7a2cx">
                        {{ __('Solicitar cotización') }}
                        <i class="fa fa-whatsapp"></i>
                    </a>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 causes-grid">
				<div class="causes-grid-info">
					<a href="https://wa.link/g7a2cx">
                        <img src="assets/images/s5.png" class="img-fuild" alt="Waancolor">
                    </a>
					<a class="cause-title-wrap" href="https://wa.link/g7a2cx">
						<h4 class="cause-title">
                            {{ __('Pintura y acabados en general.') }}
                        </h4>
					</a>
					<p class="card-text mb-0">
						{{ __('Transforma tus espacios con maestría: expertos en pintura y acabados.') }}
					</p>
					<a class="btn btn-style btn-primary mt-4" href="https://wa.link/g7a2cx">
                        {{ __('Solicitar cotización') }}
                        <i class="fa fa-whatsapp"></i>
                    </a>
				</div>
			</div>
            <div class="col-lg-4 col-md-6 causes-grid">
				<div class="causes-grid-info">
					<a href="https://wa.link/g7a2cx">
                        <img src="assets/images/s6.png" class="img-fuild" alt="Waancolor">
                    </a>
					<a class="cause-title-wrap" href="https://wa.link/g7a2cx">
						<h4 class="cause-title">
                            {{ __('Vidriería y estructuras de aluminio.') }}
                        </h4>
					</a>
					<p class="card-text mb-0">
						{{ __('Innovación en vidriería y estructuras de aluminio: diseño y calidad incomparables.') }}
					</p>
					<a class="btn btn-style btn-primary mt-4" href="https://wa.link/g7a2cx">
                        {{ __('Solicitar cotización') }}
                        <i class="fa fa-whatsapp"></i>
                    </a>
				</div>
			</div>
            <div class="col-lg-4 col-md-6 causes-grid">
				<div class="causes-grid-info">
					<a href="https://wa.link/g7a2cx">
                        <img src="assets/images/s7.png" class="img-fuild" alt="Waancolor">
                    </a>
					<a class="cause-title-wrap" href="https://wa.link/g7a2cx">
						<h4 class="cause-title">
                            {{ __('Estructuras metálicas.') }}
                        </h4>
					</a>
					<p class="card-text mb-0">
						{{ __('Construcciones de acero a medida: solidez y versatilidad en estructuras metálicas.') }}
					</p>
					<a class="btn btn-style btn-primary mt-4" href="https://wa.link/g7a2cx">
                        {{ __('Solicitar cotización') }}
                        <i class="fa fa-whatsapp"></i>
                    </a>
				</div>
			</div>
            <div class="col-lg-4 col-md-6 causes-grid">
				<div class="causes-grid-info">
					<a href="https://wa.link/g7a2cx">
                        <img src="assets/images/s8.png" class="img-fuild" alt="Waancolor">
                    </a>
					<a class="cause-title-wrap" href="https://wa.link/g7a2cx">
						<h4 class="cause-title">
                            {{ __('Cableado estructurado.') }}
                        </h4>
					</a>
					<p class="card-text mb-0">
						{{ __('La columna vertebral de las comunicaciones: soluciones eficientes en cableado estructurado.') }}
					</p>
					<a class="btn btn-style btn-primary mt-4" href="https://wa.link/g7a2cx">
                        {{ __('Solicitar cotización') }}
                        <i class="fa fa-whatsapp"></i>
                    </a>
				</div>
			</div>
            <div class="col-lg-4 col-md-6 causes-grid">
				<div class="causes-grid-info">
					<a href="https://wa.link/g7a2cx">
                        <img src="assets/images/s9.png" class="img-fuild" alt="Waancolor">
                    </a>
					<a class="cause-title-wrap" href="https://wa.link/g7a2cx">
						<h4 class="cause-title">
                            {{ __('Diseño publicitario.') }}
                        </h4>
					</a>
					<p class="card-text mb-0">
						{{ __('Impacto visual garantizado: diseños publicitarios creativos y estratégicos para destacar tu marca.') }}
					</p>
					<a class="btn btn-style btn-primary mt-4" href="https://wa.link/g7a2cx">
                        {{ __('Solicitar cotización') }}
                        <i class="fa fa-whatsapp"></i>
                    </a>
				</div>
			</div>
            <div class="col-lg-4 col-md-6 causes-grid">
				<div class="causes-grid-info">
					<a href="https://wa.link/g7a2cx">
                        <img src="assets/images/s10.png" class="img-fuild" alt="Waancolor">
                    </a>
					<a class="cause-title-wrap" href="https://wa.link/g7a2cx">
						<h4 class="cause-title">
                            {{ __('Instalaciones eléctricas en general.') }}
                        </h4>
					</a>
					<p class="card-text mb-0">
						{{ __('Soluciones eléctricas integrales: expertos en instalaciones eléctricas para un funcionamiento eficiente y seguro.') }}
					</p>
					<a class="btn btn-style btn-primary mt-4" href="https://wa.link/g7a2cx">
                        {{ __('Solicitar cotización') }}
                        <i class="fa fa-whatsapp"></i>
                    </a>
				</div>
			</div>
            <div class="col-lg-4 col-md-6 causes-grid">
				<div class="causes-grid-info">
					<a href="https://wa.link/g7a2cx">
                        <img src="assets/images/s11.png" class="img-fuild" alt="Waancolor">
                    </a>
					<a class="cause-title-wrap" href="https://wa.link/g7a2cx">
						<h4 class="cause-title">
                            {{ __('Instalación de pozo a tierra certificado.') }}
                        </h4>
					</a>
					<p class="card-text mb-0">
						{{ __('Garantía de seguridad eléctrica: confía en nuestra instalación certificada de pozo a tierra.') }}
					</p>
					<a class="btn btn-style btn-primary mt-4" href="https://wa.link/g7a2cx">
                        {{ __('Solicitar cotización') }}
                        <i class="fa fa-whatsapp"></i>
                    </a>
				</div>
			</div>
            <div class="col-lg-4 col-md-6 causes-grid">
				<div class="causes-grid-info">
					<a href="https://wa.link/g7a2cx">
                        <img src="assets/images/s12.png" class="img-fuild" alt="Waancolor">
                    </a>
					<a class="cause-title-wrap" href="https://wa.link/g7a2cx">
						<h4 class="cause-title">
                            {{ __('Señalización y demarcación de áreas.') }}
                        </h4>
					</a>
					<p class="card-text mb-0">
						{{ __('Seguridad visual y organización: expertos en señalización y demarcación de áreas eficientes.') }}
					</p>
					<a class="btn btn-style btn-primary mt-4" href="https://wa.link/g7a2cx">
                        {{ __('Solicitar cotización') }}
                        <i class="fa fa-whatsapp"></i>
                    </a>
				</div>
			</div>
            <div class="col-lg-4 col-md-6 causes-grid">
				<div class="causes-grid-info">
					<a href="https://wa.link/g7a2cx">
                        <img src="assets/images/s13.png" class="img-fuild" alt="Waancolor">
                    </a>
					<a class="cause-title-wrap" href="https://wa.link/g7a2cx">
						<h4 class="cause-title">
                            {{ __('Instalación de mallas Raschel.') }}
                        </h4>
					</a>
					<p class="card-text mb-0">
						{{ __('Soluciones versátiles y duraderas: expertos en instalación de mallas Raschel de calidad.') }}
					</p>
					<a class="btn btn-style btn-primary mt-4" href="https://wa.link/g7a2cx">
                        {{ __('Solicitar cotización') }}
                        <i class="fa fa-whatsapp"></i>
                    </a>
				</div>
			</div>
            <div class="col-lg-4 col-md-6 causes-grid">
				<div class="causes-grid-info">
					<a href="https://wa.link/g7a2cx">
                        <img src="assets/images/s14.png" class="img-fuild" alt="Waancolor">
                    </a>
					<a class="cause-title-wrap" href="https://wa.link/g7a2cx">
						<h4 class="cause-title">
                            {{ __('Instalación, mantenimiento y reparación de sistemas de aire y acondicionado.') }}
                        </h4>
					</a>
					<p class="card-text mb-0">
						{{ __('Comodidad climática garantizada por expertos.') }}
					</p>
					<a class="btn btn-style btn-primary mt-4" href="https://wa.link/g7a2cx">
                        {{ __('Solicitar cotización') }}
                        <i class="fa fa-whatsapp"></i>
                    </a>
				</div>
			</div>
            <div class="col-lg-4 col-md-6 causes-grid">
				<div class="causes-grid-info">
					<a href="https://wa.link/g7a2cx">
                        <img src="assets/images/s15.png" class="img-fuild" alt="Waancolor">
                    </a>
					<a class="cause-title-wrap" href="https://wa.link/g7a2cx">
						<h4 class="cause-title">
                            {{ __('Sistemas de seguridad y emergencia: cámaras de seguridad CCTV, cercos eléctricos, alarmas contra robo, asalto e incendio; señalización de zonas de emergencia, etc.') }}
                        </h4>
					</a>
					<p class="card-text mb-0">
						{{ __('Protección total.') }}
					</p>
					<a class="btn btn-style btn-primary mt-4" href="https://wa.link/g7a2cx">
                        {{ __('Solicitar cotización') }}
                        <i class="fa fa-whatsapp"></i>
                    </a>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
