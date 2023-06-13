@extends('layouts.app')

@section('title', 'nosotros')

@section('content')
<div class="inner-banner"></div>
<section class="w3l-content-6">
	<div class="content-6-mian py-5">
		<div class="container py-lg-5">
			<div class="content-info-in row">
				<div class="col-lg-6">
					<img src="assets/images/ab1.png" class="img-fluid" alt="Waancolor" >
				</div>
				<div class="col-lg-6 mt-lg-0 mt-5 about-right-faq align-self pl-lg-4">
					<div class="title-content text-left mb-2">
						<h4 class="hny-title">
                            {{ __('¿Quiénes somos?') }}
                        </h4>
					</div>
					<p class="text-justify">
                        {{ __('Somos una empresa dedicada a la venta de bienes y servicios en general (mantenimiento preventivo, predictivo, correctivo e instalación de equipos eléctricos, mecánicos, metal mecánica, electrónicos y trabajos de pintura).') }}
                        <br>
                        {{ __('Así mismo contamos con una cadena de tienda de pinturas multi-marca, con productos de alta calidad, logística efectiva y atención personalizada.') }}
                        <br>
                        {{ __('Nuestra empresa cuenta con personal  altamente calificado cuyo objetivo es proveer servicio a los sectores del mercado para el desarrollo de sus proyectos.') }}
                        <br>
                        {{ __('De nuestra parte existe todo el compromiso de realizar su proyecto con profesionalismo, fomentando una buena experiencia de nuestro servicio.') }}
                    </p>
				</div>
				<div class="col-lg-6 mt-5 about-right-faq align-self order2">
					<div class="title-content text-left mb-2">
						<h3 class="hny-title">
                            {{ __('Misión') }}
                        </h3>
					</div>
					<p class="mt-3 text-justify">
                        {{ __('Proveer y satisfacer las expectativas de nuestros clientes obteniendo su reconocimiento en los amplios sectores de la construcción e industria en general.') }}
                        <br>
                        {{ __('Ser una de las empresas mejor gestionadas, de mayor futuro, con soluciones rápidas y flexibles para ser más atractivos a constructoras, empleados y colectividad en general.') }}
                    </p>
				</div>
				<div class="col-lg-6 mt-5 pl-lg-4">
					<img src="assets/images/ab3.png" alt="Waancolor" class="img-fluid">
				</div>
			</div>
		</div>
	</section>
    <section class="w3l-content-4">
		<div class="content-4-main py-5">
			<div class="container py-lg-4">
				<div class="content-info-in row">
					<div class="content-right col-lg-6">
						<img src="assets/images/ab2.png" class="img-fluid" alt="Waancolor">
					</div>
					<div class="content-left col-lg-6 pl-lg-4">
						<h3 class="hny-title">
                            {{ __('Visión') }}
                        </h3>
						<p class="mt-3 text-justify">
                            {{ __('Posicionarnos como una empresa sólida y confiable a nivel nacional, con lo cual nuestros clientes se sientan totalmente satisfechos con el profesionalismo que demostramos.') }}
                            <br>
                            {{ __('Liderar el sector público y privado como una empresa sobresaliente de las demás, llegando a ser socio estratégico de nuestros clientes para un desarrollo sostenido de los proyectos a realizar.') }}
                        </p>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection
