@extends('layouts.app')

@section('title', 'contáctanos')

@section('content')
<div class="inner-banner"></div>
<section class="w3l-contact-11">
	<div class="form-41-mian py-5">
		<div class="container py-lg-4">
			<div class="row align-form-map">
				<div class="col-lg-6 contact-left pr-lg-4">
					<div class="partners">
					    <div class="cont-details">
						    <div class="title-content text-left">
							    <h6 class="sub-title">
                                    {{ __('Contacta') }}
                                </h6>
							    <h3 class="hny-title">
                                    {{ __('con nosotros') }}
                                </h3>
						    </div>
						    <p class="mt-3 mb-4 pr-lg-5 text-justify">
                                {{ __('¡Hola!') }} <br>
                                {{ __('estamos disponibles todos los días y 24 horas por WhatsApp y correo electrónico. Escríbanos para que podamos hablar más sobre eso.') }}
                            </p>
						    <h6 class="mb-4 text-justify">
                                {{ __('Para obtener más información o consultar sobre nuestros proyectos, productos y servicios,
                                no dude en ponerse en contacto con nosotros.') }}
                            </h6>
					    </div>
					    <div class="hours">
						    <h6 class="mt-4">
                                {{ __('Correo electrónico:') }}
                            </h6>
						    <p>
                                <a href="mailto:ventas@waancolor.com">
                                    {{ __('ventas@waancolor.com') }}
                                </a>
                            </p>
						    <h6 class="mt-4">
                                {{ __('Dirección:') }}
                            </h6>
						    <p>
                                {{ __('Av. Universitaria norte Nro. 3246 - Los Olivos.') }}
                            </p>
						    <h6 class="mt-4">
                                {{ __('Contáctanos:') }}
                            </h6>
						    <p class="margin-top">
                                <a href="tel:982045062">
                                    {{ __('982045062') }}
                                </a>
                            </p>
                            <h6 class="mt-4">
                                {{ __('Nuestras redes sociales:') }}
                            </h6>
                            <div class="social-media">
                                <a href="https://www.facebook.com/waancolor" target="_blank">
                                    <span class="fa fa-facebook" aria-hidden="true"></span>
                                </a>
                                <a href="https://instagram.com" target="_blank">
                                    <span class="fa fa-instagram" aria-hidden="true"></span>
                                </a>
                                <a href="https://www.linkedin.com/" target="_blank">
                                    <span class="fa fa-linkedin" aria-hidden="true"></span>
                                </a>
                                <a href="https://www.youtube.com/" target="_blank">
                                    <span class="fa fa-youtube" aria-hidden="true"></span>
                                </a>
                            </div>
					    </div>
					</div>
				</div>
				<div class="col-lg-6 form-inner-cont">
					<div class="title-content text-left">
						<h3 class="hny-title mb-lg-5 mb-4">
                            {{ __('Déjanos un mensaje') }}
                        </h3>
					</div>
				    <form class="signin-form" action="{{ route('enviarFormulario') }}" method="post">
                        @csrf
					    <div class="form-input">
					        <input type="text" name="nombre_razonSocial" id="nombre_razonSocial" placeholder="Nombre o razón social..." />
					    </div>
					    <div class="row con-two">
					        <div class="col-lg-6 form-input">
					            <input type="text" name="dni_ruc" id="dni_ruc" placeholder="DNI/RUC..." />
					        </div>
					        <div class="col-lg-6 form-input">
						        <input type="text" name="telefono" id="telefono" placeholder="Teléfono..." />
					        </div>
					    </div>
                        <div class="form-input">
					        <input type="email" name="correo_electronico" id="correo_electronico" placeholder="Correo electrónico..." />
					    </div>
					    <div class="form-input">
					        <textarea name="mensaje_web" id="mensaje_web" required="" placeholder="Escribe tu mensaje aquí..."></textarea>
					    </div>
					    <div class="submit-button text-lg-right">
					        <button type="submit" class="btn btn-style">
                                {{ __('Enviar ahora') }}
                            </button>
				        </div>
				    </form>
				</div>
			</div>
		</div>
	</div>
	<div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3902.6435429753788!2d-77.08624952396246!3d-11.999148641018017!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105ce8a729f0449%3A0x5dda267a59e5061!2sAv.%20Universitaria%203246%2C%20Los%20Olivos%2015302!5e0!3m2!1ses!2spe!4v1686582515569!5m2!1ses!2spe" frameborder="0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
	</div>
</section>
@endsection
