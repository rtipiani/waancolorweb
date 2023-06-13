@extends('layouts.app')

@section('title', 'inicio')

@section('content')
<section class="w3l-main-slider position-relative">
    <div class="companies20-content">
        <div class="owl-one owl-carousel owl-theme">
            <div class="item">
                <li>
                    <div class="slider-info banner-view bg bg2">
                        <div class="banner-info">
                            <div class="container">
                                <div class="banner-info-bg">
                                    <h5>
                                        {{ __('Construcción e infraestructura.') }}
                                    </h5>
                                    <div class="banner-buttons">
                                        <a class="btn btn-style btn-primary" href="https://wa.link/gqo6yo" target="_blank">
                                            {{ __('Solicitar cotización') }}
                                            <i class='fa fa-whatsapp'></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </div>
            <div class="item">
                <li>
                    <div class="slider-info banner-view banner-top1 bg bg2">
                        <div class="banner-info">
                            <div class="container">
                                <div class="banner-info-bg">
                                    <h5>
                                        {{ __('Carpintería y ebanistería.') }}
                                    </h5>
                                    <div class="banner-buttons">
                                        <a class="btn btn-style btn-primary" href="https://wa.link/nnjre0" target="_blank">
                                            {{ __('Solicitar cotización') }}
                                            <i class='fa fa-whatsapp'></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </div>
            <div class="item">
                <li>
                    <div class="slider-info banner-view banner-top2 bg bg2">
                        <div class="banner-info">
                            <div class="container">
                                <div class="banner-info-bg">
                                    <h5>
                                        {{ __('Estructuras metálicas.') }}
                                    </h5>
                                    <div class="banner-buttons">
                                        <a class="btn btn-style btn-primary" href="https://wa.link/2qhmjd">
                                            {{ __('Solicitar cotización') }}
                                            <i class='fa fa-whatsapp'></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </div>
            <div class="item">
                <li>
                    <div class="slider-info banner-view banner-top3 bg bg2">
                        <div class="banner-info">
                            <div class="container">
                                <div class="banner-info-bg">
                                    <h5>
                                        {{ __('Diseño de interiores.') }}
                                    </h5>
                                    <div class="banner-buttons">
                                        <a class="btn btn-style btn-primary" href="https://wa.link/19z6ik">
                                            {{ __('Solicitar cotización') }}
                                            <i class='fa fa-whatsapp'></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </div>
        </div>
    </div>
</section>

<section class="features-4">
    <div class="features4-block py-5">
        <div class="container py-lg-4">
            <div class="title-content text-center mb-lg-5 mt-4">
                <h6 class="sub-title">
                    {{ __('¿Porqué elegirnos?') }}
                </h6>
                <h3 class="nhy-title">
                    {{ __('TE DAMOS ALGUNOS MOTIVOS') }}
                </h3>
                <p class="fea-para">
                    {{ __('Somos una empresa sólida y confiable.') }}
                </p>
            </div>
            <div class="row features4-grids text-left mt-lg-4">
                <div class="col-lg-4 col-md-6 features4-grid mt-4">
                    <div class="features4-grid-inn">
                        <div class="img-featured">
                            <div class="ch-item ch-img-1">
                                <div class="ch-info-wrap">
                                    <div class="ch-info">
                                        <div class="ch-info-front ch-img-1"></div>
                                        <div class="ch-info-back">
                                            <h4>
                                                {{ __('WAANCOLOR') }}
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="features4-rightinfo">
                            <h5>
                                <a href="{{ route('nosotros') }}">
                                    {{ __('Diseño de interiores') }}
                                </a>
                            </h5>
                            <p>
                                {{ __('Damos personalidad a tus Proyectos, creamos espacios modernos, te ayudamos a diseñar, remodelar o ampliar tu oficina o negocio.') }}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 features4-grid mt-4">
                    <div class="features4-grid-inn">
                        <div class="img-featured">
                            <div class="ch-item ch-img-2">
                                <div class="ch-info-wrap">
                                    <div class="ch-info">
                                        <div class="ch-info-front ch-img-2"></div>
                                        <div class="ch-info-back">
                                            <h4>
                                                {{ __('WAANCOLOR') }}
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="features4-rightinfo">
                            <h5>
                                <a href="{{ route('nosotros') }}">
                                    {{ __('Arquitectura e ingeniería') }}
                                </a>
                            </h5>
                            <p>
                                {{ __('Ofrecemos servicios integrales para tus proyectos: Diseño Arquitectónico, Desarrollo de Especialidades, Metrados y Presupuestos.') }}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 features4-grid mt-4">
                    <div class="features4-grid-inn">
                        <div class="img-featured">
                            <div class="ch-item ch-img-3">
                                <div class="ch-info-wrap">
                                    <div class="ch-info">
                                        <div class="ch-info-front ch-img-3"></div>
                                        <div class="ch-info-back">
                                            <h4>
                                                {{ __('WAANCOLOR') }}
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="features4-rightinfo">
                            <h5>
                                <a href="{{ route('nosotros') }}">
                                    {{ __('Construcción e implementación') }}
                                </a>
                            </h5>
                            <p>
                                {{ __('Construimos y supervisamos tus proyectos o la implementación de este.') }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="w3l-specification-6">
    <div class="specification-6-mian py-5">
        <div class="container py-lg-5">
            <div class="row story-6-grids">
                <div class="col-lg-10 story-gd pl-lg-4  text-center mx-auto">
                    <div class="title-content px-lg-5">
                        <h3 class="hny-title two">
                            {{ __('nos comprometemos') }}
                        </h3>
                        <p class="mt-3 mb-lg-5 px-lg-5 counter-para">
                            {{ __('Ser una de las empresas mejor gestionadas, de mayor futuro y más atractivo para constructoras, empleados y colectividad en general.') }}
                        </p>
                    </div>
                    <div class="skill_info mt-lg-5 mt-4 pt-lg-4">
                        <div class="stats_left">
                            <div class="counter_grid">
                                <div class="icon_info">
                                    <p class="counter">
                                        {{ __('+16') }}
                                    </p>
                                    <h4>
                                        {{ __('años de experiencia') }}
                                    </h4>
                                </div>
                            </div>
                        </div>
                        <div class="stats_left">
                            <div class="counter_grid">
                                <div class="icon_info">
                                    <p class="counter">
                                        {{ __('+150') }}
                                    </p>
                                    <h4>
                                        {{ __('proyectos completados') }}
                                    </h4>
                                </div>
                            </div>
                        </div>
                        <div class="stats_left">
                            <div class="counter_grid">
                                <div class="icon_info">
                                    <p class="counter">
                                        {{ __('+850') }}
                                    </p>
                                    <h4>
                                        {{ __('clientes felices') }}
                                    </h4>
                                </div>
                            </div>
                        </div>
                        <div class="stats_left">
                            <div class="counter_grid">
                                <div class="icon_info">
                                    <p class="counter">
                                        {{ __('35') }}
                                    </p>
                                    <h4>
                                        {{ __('profesionales activos') }}
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

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
					<a href="https://wa.link/g7a2cx" target="_blank">
                        <img src="assets/images/s1.png" class="img-fuild" alt="Waancolor">
                    </a>
					<a class="cause-title-wrap" href="https://wa.link/g7a2cx" target="_blank">
						<h4 class="cause-title">
                            {{ __('Construcciones con sistema drywall.') }}
                        </h4>
					</a>
					<p class="card-text mb-0">
                        {{ __('Construcción revolucionaria: Descubre la versatilidad y eficiencia del sistema Drywall.') }}
                    </p>
					<a class="btn btn-style btn-primary mt-4" href="https://wa.link/g7a2cx" target="_blank">
                        {{ __('Solicitar cotización') }}
                        <i class="fa fa-whatsapp"></i>
                    </a>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 causes-grid">
				<div class="causes-grid-info">
					<a href="https://wa.link/g7a2cx" target="_blank">
                        <img src="assets/images/s2.png" class="img-fuild" alt="Waancolor">
                    </a>
					<a class="cause-title-wrap" href="https://wa.link/g7a2cx" target="_blank">
						<h4 class="cause-title">
                            {{ __('Obras civiles y de albañilería en general.') }}
                        </h4>
					</a>
					<p class="card-text mb-0">
                        {{ __('Descubre obras civiles y albañilería: construcciones sólidas que transforman el entorno.') }}
                    </p>
					<a class="btn btn-style btn-primary mt-4" href="https://wa.link/g7a2cx" target="_blank">
                        {{ __('Solicitar cotización') }}
                        <i class="fa fa-whatsapp"></i>
                    </a>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 causes-grid">
				<div class="causes-grid-info">
					<a href="https://wa.link/g7a2cx" target="_blank">
                        <img src="assets/images/s3.png" class="img-fuild" alt="Waancolor">
                    </a>
					<a class="cause-title-wrap" href="https://wa.link/g7a2cx" target="_blank">
						<h4 class="cause-title">
                            {{ __('Gasfitería e instalaciones sanitarias.') }}
                        </h4>
					</a>
					<p class="card-text mb-0">
                        {{ __('Expertos en gasfitería e instalaciones sanitarias: soluciones confiables para tu hogar.') }}
                    </p>
					<a class="btn btn-style btn-primary mt-4" href="https://wa.link/g7a2cx" target="_blank">
                        {{ __('Solicitar cotización') }}
                        <i class="fa fa-whatsapp"></i>
                    </a>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 causes-grid">
				<div class="causes-grid-info">
					<a href="https://wa.link/g7a2cx" target="_blank">
                        <img src="assets/images/s4.png" class="img-fuild" alt="Waancolor">
                    </a>
					<a class="cause-title-wrap" href="https://wa.link/g7a2cx" target="_blank">
						<h4 class="cause-title">
                            {{ __('Carpintería en madera y melamina.') }}
                        </h4>
					</a>
					<p class="card-text mb-0">
                        {{ __('Excelencia en carpintería: creando belleza y funcionalidad en madera y melamina.') }}
                    </p>
					<a class="btn btn-style btn-primary mt-4" href="https://wa.link/g7a2cx" target="_blank">
                        {{ __('Solicitar cotización') }}
                        <i class="fa fa-whatsapp"></i>
                    </a>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 causes-grid">
				<div class="causes-grid-info">
					<a href="https://wa.link/g7a2cx" target="_blank">
                        <img src="assets/images/s5.png" class="img-fuild" alt="Waancolor">
                    </a>
					<a class="cause-title-wrap" href="https://wa.link/g7a2cx" target="_blank">
						<h4 class="cause-title">
                            {{ __('Pintura y acabados en general.') }}
                        </h4>
					</a>
					<p class="card-text mb-0">
                        {{ __('Transforma tus espacios con maestría: expertos en pintura y acabados.') }}
                    </p>
					<a class="btn btn-style btn-primary mt-4" href="https://wa.link/g7a2cx" target="_blank">
                        {{ __('Solicitar cotización') }}
                        <i class="fa fa-whatsapp"></i>
                    </a>
				</div>
			</div>
            <div class="col-lg-4 col-md-6 causes-grid">
				<div class="causes-grid-info">
					<a href="https://wa.link/g7a2cx" target="_blank">
                        <img src="assets/images/s6.png" class="img-fuild" alt="Waancolor">
                    </a>
					<a class="cause-title-wrap" href="https://wa.link/g7a2cx" target="_blank">
						<h4 class="cause-title">
                            {{ __('Vidriería y estructuras de aluminio.') }}
                        </h4>
					</a>
					<p class="card-text mb-0">
                        {{ __('Innovación en vidriería y estructuras de aluminio: diseño y calidad incomparables.') }}
                    </p>
					<a class="btn btn-style btn-primary mt-4" href="https://wa.link/g7a2cx" target="_blank">
                        {{ __('Solicitar cotización') }}
                        <i class="fa fa-whatsapp"></i>
                    </a>
				</div>
			</div>
            <div class="col-lg-4 col-md-6 causes-grid">
				<div class="causes-grid-info">
					<a href="https://wa.link/g7a2cx" target="_blank">
                        <img src="assets/images/s7.png" class="img-fuild" alt="Waancolor">
                    </a>
					<a class="cause-title-wrap" href="https://wa.link/g7a2cx" target="_blank">
						<h4 class="cause-title">
                            {{ __('Estructuras metálicas.') }}
                        </h4>
					</a>
					<p class="card-text mb-0">
                        {{ __('Construcciones de acero a medida: solidez y versatilidad en estructuras metálicas.') }}
                    </p>
					<a class="btn btn-style btn-primary mt-4" href="https://wa.link/g7a2cx" target="_blank">
                        {{ __('Solicitar cotización') }}
                        <i class="fa fa-whatsapp"></i>
                    </a>
				</div>
			</div>
            <div class="col-lg-4 col-md-6 causes-grid">
				<div class="causes-grid-info">
					<a href="https://wa.link/g7a2cx" target="_blank">
                        <img src="assets/images/s8.png" class="img-fuild" alt="Waancolor">
                    </a>
					<a class="cause-title-wrap" href="https://wa.link/g7a2cx" target="_blank">
						<h4 class="cause-title">
                            {{ __('Cableado estructurado.') }}
                        </h4>
					</a>
					<p class="card-text mb-0">
                        {{ __('La columna vertebral de las comunicaciones: soluciones eficientes en cableado estructurado.') }}
                    </p>
					<a class="btn btn-style btn-primary mt-4" href="https://wa.link/g7a2cx" target="_blank">
                        {{ __('Solicitar cotización') }}
                        <i class="fa fa-whatsapp"></i>
                    </a>
				</div>
			</div>
            <div class="col-lg-4 col-md-6 causes-grid">
				<div class="causes-grid-info">
					<a href="https://wa.link/g7a2cx" target="_blank">
                        <img src="assets/images/s9.png" class="img-fuild" alt="Waancolor">
                    </a>
					<a class="cause-title-wrap" href="https://wa.link/g7a2cx" target="_blank">
						<h4 class="cause-title">
                            {{ __('Diseño publicitario.') }}
                        </h4>
					</a>
					<p class="card-text mb-0">
                        {{ __('Impacto visual garantizado: diseños publicitarios creativos y estratégicos para destacar tu marca.') }}
                    </p>
					<a class="btn btn-style btn-primary mt-4" href="https://wa.link/g7a2cx" target="_blank">
                        {{ __('Solicitar cotización') }}
                        <i class="fa fa-whatsapp"></i>
                    </a>
				</div>
			</div>
            <div class="col-lg-4 col-md-6 causes-grid">
				<div class="causes-grid-info">
					<a href="https://wa.link/g7a2cx" target="_blank">
                        <img src="assets/images/s10.png" class="img-fuild" alt="Waancolor">
                    </a>
					<a class="cause-title-wrap" href="https://wa.link/g7a2cx" target="_blank">
						<h4 class="cause-title">
                            {{ __('Instalaciones eléctricas en general.') }}
                        </h4>
					</a>
					<p class="card-text mb-0">
                        {{ __('Soluciones eléctricas integrales: expertos en instalaciones eléctricas para un funcionamiento eficiente y seguro.') }}
                    </p>
					<a class="btn btn-style btn-primary mt-4" href="https://wa.link/g7a2cx" target="_blank">
                        {{ __('Solicitar cotización') }}
                        <i class="fa fa-whatsapp"></i>
                    </a>
				</div>
			</div>
            <div class="col-lg-4 col-md-6 causes-grid">
				<div class="causes-grid-info">
					<a href="https://wa.link/g7a2cx" target="_blank">
                        <img src="assets/images/s11.png" class="img-fuild" alt="Waancolor">
                    </a>
					<a class="cause-title-wrap" href="https://wa.link/g7a2cx" target="_blank">
						<h4 class="cause-title">
                            {{ __('Instalación de pozo a tierra certificado.') }}
                        </h4>
					</a>
					<p class="card-text mb-0">
                        {{ __('Garantía de seguridad eléctrica: confía en nuestra instalación certificada de pozo a tierra.') }}
                    </p>
					<a class="btn btn-style btn-primary mt-4" href="https://wa.link/g7a2cx" target="_blank">
                        {{ __('Solicitar cotización') }}
                        <i class="fa fa-whatsapp"></i>
                    </a>
				</div>
			</div>
            <div class="col-lg-4 col-md-6 causes-grid">
				<div class="causes-grid-info">
					<a href="https://wa.link/g7a2cx" target="_blank">
                        <img src="assets/images/s12.png" class="img-fuild" alt="Waancolor">
                    </a>
					<a class="cause-title-wrap" href="https://wa.link/g7a2cx" target="_blank">
						<h4 class="cause-title">
                            {{ __('Señalización y demarcación de áreas.') }}
                        </h4>
					</a>
					<p class="card-text mb-0">
                        {{ __('Seguridad visual y organización: expertos en señalización y demarcación de áreas eficientes.') }}
                    </p>
					<a class="btn btn-style btn-primary mt-4" href="https://wa.link/g7a2cx" target="_blank">
                        {{ __('Solicitar cotización') }}
                        <i class="fa fa-whatsapp"></i>
                    </a>
				</div>
			</div>
            <div class="col-lg-4 col-md-6 causes-grid">
				<div class="causes-grid-info">
					<a href="https://wa.link/g7a2cx" target="_blank">
                        <img src="assets/images/s13.png" class="img-fuild" alt="Waancolor">
                    </a>
					<a class="cause-title-wrap" href="https://wa.link/g7a2cx" target="_blank">
						<h4 class="cause-title">
                            {{ __('Instalación de mallas Raschel.') }}
                        </h4>
					</a>
					<p class="card-text mb-0">
                        {{ __('Soluciones versátiles y duraderas: expertos en instalación de mallas Raschel de calidad.') }}
                    </p>
					<a class="btn btn-style btn-primary mt-4" href="https://wa.link/g7a2cx" target="_blank">
                        {{ __('Solicitar cotización') }}
                        <i class="fa fa-whatsapp"></i>
                    </a>
				</div>
			</div>
            <div class="col-lg-4 col-md-6 causes-grid">
				<div class="causes-grid-info">
					<a href="https://wa.link/g7a2cx" target="_blank">
                        <img src="assets/images/s14.png" class="img-fuild" alt="Waancolor">
                    </a>
					<a class="cause-title-wrap" href="https://wa.link/g7a2cx" target="_blank">
						<h4 class="cause-title">
                            {{ __('Instalación, mantenimiento y reparación de sistemas de aire y acondicionado.') }}
                        </h4>
					</a>
					<p class="card-text mb-0">
                        {{ __('Comodidad climática garantizada por expertos.') }}
                    </p>
					<a class="btn btn-style btn-primary mt-4" href="https://wa.link/g7a2cx" target="_blank">
                        {{ __('Solicitar cotización') }}
                        <i class="fa fa-whatsapp"></i>
                    </a>
				</div>
			</div>
            <div class="col-lg-4 col-md-6 causes-grid">
				<div class="causes-grid-info">
					<a href="https://wa.link/g7a2cx" target="_blank">
                        <img src="assets/images/s15.png" class="img-fuild" alt="Waancolor">
                    </a>
					<a class="cause-title-wrap" href="https://wa.link/g7a2cx" target="_blank">
						<h4 class="cause-title">
                            {{ __('Sistemas de seguridad y emergencia: cámaras de seguridad CCTV, cercos eléctricos, alarmas contra robo, asalto e incendio; señalización de zonas de emergencia, etc.') }}
                        </h4>
					</a>
					<p class="card-text mb-0">
                        {{ __('Protección total.') }}
                    </p>
					<a class="btn btn-style btn-primary mt-4" href="https://wa.link/g7a2cx" target="_blank">
                        {{ __('Solicitar cotización') }}
                        <i class="fa fa-whatsapp"></i>
                    </a>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="middle py-5">
    <div class="container py-xl-5 py-lg-3">
        <div class="welcome-left text-center py-3">
            <div class="title-content">
                <h3 class="hny-title two">
                    {{ __('somos líderes') }}
                </h3>
                <p>
                    {{ __('Somos una empresa sólida y confiable a nivel nacional, con lo cual nuestros clientes se sientan totalmente satisfechos.') }}
                </p>
            </div>
            <a class="btn btn-style btn-primary mt-4" href="https://wa.link/g7a2cx" target="_blank">
                {{ __('Contáctanos') }}
                <i class='fa fa-whatsapp'></i>
            </a>
        </div>
    </div>
</div>

<section class="w3l-testimonials">
    <div class="testimonials py-5">
        <div class="container text-center py-lg-3">
            <div class="title-content text-center mb-lg-5 mb-4">
                <h6 class="sub-title">
                    {{ __('Testimonios') }}
                </h6>
                <h3 class="hny-title">
                    {{ __('¿Qué opinan nuestros clientes?') }}
                </h3>
            </div>
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <div class="owl-testimonial owl-carousel owl-theme">
                        <div class="item">
                            <div class="slider-info mt-lg-4 mt-3">
                                <div class="img-circle">
                                    <img src="assets/images/f2.jpg" class="img-fluid rounded" alt="Ssomac Consultores">
                                </div>
                                <div class="message">
                                    {{ __('Estoy realmente impresionado con la eficiencia y profesionalismo de su equipo en la instalación de sistemas de aire acondicionado. Ahora mi hogar es un oasis de confort en cualquier temporada. ¡Altamente recomendados!') }}
                                </div>
                                <div class="name">
                                    {{ __('- Juan Sánchez') }}
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="slider-info mt-lg-4 mt-3">
                                <div class="img-circle">
                                    <img src="assets/images/f4.jpg" class="img-fluid rounded" alt="Ssomac Consultores">
                                </div>
                                <div class="message">
                                    {{ __('La instalación de mallas Raschel en nuestro jardín ha sido una excelente elección. No solo brindan una protección duradera, sino que también se integran perfectamente con la estética del lugar. ¡Muy satisfechos con el resultado!') }}
                                </div>
                                <div class="name">
                                    {{ __('- Roberto Gómez') }}
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="slider-info mt-lg-4 mt-3">
                                <div class="img-circle">
                                    <img src="assets/images/f3.jpg" class="img-fluid rounded" alt="Ssomac Consultores">
                                </div>
                                <div class="message">
                                    {{ __('Confiamos en su experiencia para implementar sistemas de seguridad y emergencia en nuestro negocio. Las cámaras de seguridad CCTV y las alarmas nos brindan una tranquilidad invaluable. Sin duda, son especialistas en protección.') }}
                                </div>
                                <div class="name">
                                    {{ __('- María Rodríguez') }}
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="slider-info mt-lg-4 mt-3">
                                <div class="img-circle">
                                    <img src="assets/images/f6.jpg" class="img-fluid rounded" alt="Ssomac Consultores">
                                </div>
                                <div class="message">
                                    {{ __('Su equipo de señalización y demarcación de áreas hizo un trabajo impecable en nuestro complejo. Ahora nuestros visitantes pueden moverse de manera segura y eficiente gracias a una señalización clara y precisa. ¡Gracias por su excelente trabajo!') }}
                                </div>
                                <div class="name">
                                    {{ __('- Raúl Martínez') }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
