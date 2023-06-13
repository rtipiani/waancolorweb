@extends('layouts.app')

@section('title', 'Términos & Condiciones')

@section('content')
<div class="inner-banner"></div>
<div class="w3-services py-5">
	<div class="container py-lg-4">
		<div class="title-content text-left mb-lg-5 mb-4">
			<h3 class="hny-title">
                {{ __('Términos & condiciones') }}
            </h3>
            <br>
			<p class="text-justify">
                {{ __('Por favor, lee detenidamente estos Términos y Condiciones ("Términos") antes de utilizar el sitio web waancolor.com ("el Sitio") operado por waancolor.com ("nosotros", "nuestro" o "nos"). Al acceder o utilizar el Sitio, aceptas estar sujeto a estos Términos. Si no estás de acuerdo con alguno de los términos establecidos aquí, por favor, no accedas ni utilices el Sitio.') }}
            </p>
            <ol>
            	<li>
            		<p>
            			<strong>
            				{{ __('Uso del sitio:') }}
            			</strong>
            		</p>
            		<p>
            			<strong>
            				{{ __('1.1 Edad mínima:') }}
            			</strong>
            		</p>
            		<p class="text-justify">
            			{{ __('Debes tener al menos 18 años de edad para acceder y utilizar el Sitio. Si eres menor de 18 años, debes obtener el consentimiento de tus padres o tutores legales.') }}
            		</p>
            		<p>
            			<strong>
            				{{ __('1.2 Uso autorizado:') }}
            			</strong>
            		</p>
            		<p class="text-justify">
            			{{ __('Se te concede un derecho limitado y no exclusivo para acceder y utilizar el Sitio de acuerdo con estos Términos. No puedes utilizar el Sitio con fines ilegales, difamatorios, obscenos o que violen los derechos de terceros.') }}
            		</p>
                    <p>
                        <strong>
                            {{ __('1.3 Contenido del usuario:') }}
                        </strong>
                    </p>
                    <p class="text-justify">
                        {{ __('Al proporcionar cualquier tipo de contenido en el Sitio, como comentarios, reseñas o envío de material, otorgas a waancolor.com una licencia no exclusiva, transferible, sublicenciable, mundial y libre de regalías para utilizar, reproducir, modificar, adaptar, publicar, distribuir y mostrar dicho contenido en relación con el funcionamiento del Sitio.') }}
                    </p>
            	</li>
            	<li>
            		<p>
            			<strong>
            				{{ __('Propiedad intelectual:') }}
            			</strong>
            		</p>
            		<p>
            			<strong>
            				{{ __('2.1 Derechos del autor:') }}
            			</strong>
            		</p>
            		<p class="text-justify">
            			{{ __('Todos los derechos de autor, marcas comerciales y otros derechos de propiedad intelectual relacionados con el contenido y los materiales del Sitio son propiedad exclusiva de waancolor.com o de los terceros que otorgaron una licencia para su uso.') }}
            		</p>
            		<p>
            			<strong>
            				{{ __('2.2 Restricciones:') }}
            			</strong>
            		</p>
            		<p class="text-justify">
            			{{ __('No está permitida la reproducción, distribución, modificación, adaptación, venta o cualquier otro uso no autorizado del contenido y los materiales del Sitio, a menos que se cuente con el permiso expreso por escrito de waancolor.com.') }}
            		</p>
            	</li>
            	<li>
            		<p>
            			<strong>
            				{{ __('Exclusión de responsabilidad:') }}
            			</strong>
            		</p>
            		<p>
            			<strong>
            				{{ __('3.1 Uso bajo tu propio riesgo:') }}
            			</strong>
            		</p>
            		<p class="text-justify">
            			{{ __('El uso del Sitio es bajo tu propio riesgo. waancolor.com no se hace responsable de ningún daño directo, indirecto, incidental, especial o consecuente que pueda surgir del uso o la incapacidad de utilizar el Sitio.') }}
            		</p>
            		<p>
            			<strong>
            				{{ __('3.2 Enlaces a terceros:') }}
            			</strong>
            		</p>
            		<p class="text-justify">
            			{{ __('El Sitio puede contener enlaces a sitios web de terceros. waancolor.com no asume ninguna responsabilidad por el contenido, las políticas de privacidad o las prácticas de los sitios web de terceros.') }}
            		</p>
            	</li>
            	<li>
            		<p>
            			<strong>
            				{{ __('Modificaciones:') }}
            			</strong>
            		</p>
            		<p class="text-justify">
            			{{ __('waancolor.com se reserva el derecho de modificar o reemplazar estos Términos en cualquier momento. Los cambios entrarán en vigencia tan pronto sean publicados en el Sitio. Es tu responsabilidad revisar periódicamente estos Términos para estar al tanto de las actualizaciones.') }}
            		</p>
            	</li>
            	<li>
            		<p>
            			<strong>
            				{{ __('Contacto:') }}
            			</strong>
            		</p>
            		<p class="text-justify">
            			{{ __('Si tienes alguna pregunta, comentario o inquietud relacionada con esta Política de Privacidad o nuestras prácticas de privacidad, no dudes en contactarnos a través de los siguientes datos de contacto:') }}
            			<ul class="ml-3">
        					<li>
        						<strong>
        							{{ __('WAANCOLOR S.A.C. - RUC: 20609566885') }}
        						</strong>
        					</li>
        					<li>
        						<strong>
        							{{ __('Correo electrónico:') }}
        						</strong>
        						{{ __('ventas@waancolor.com') }}
        					</li>
        					<li>
        						<strong>
        							{{ __('Teléfono:') }}
        						</strong>
        						{{ __('982045062') }}
        					</li>
        				</ul>
            		</p>
            	</li>
            </ol>
		</div>
	</div>
</div>
@endsection
