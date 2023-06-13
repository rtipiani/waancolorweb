@extends('layouts.app')

@section('title', 'Políticas de privacidad')

@section('content')
<div class="inner-banner"></div>
<div class="w3-services py-5">
	<div class="container py-lg-4">
		<div class="title-content text-left mb-lg-5 mb-4">
			<h3 class="hny-title">
                {{ __('Políticas de privacidad') }}
            </h3>
            <br>
			<p class="text-justify">
                {{ __('En waancolor.com ("nosotros", "nuestro" o "nos"), reconocemos la importancia de la privacidad de tus datos personales.') }}
                <br>
                {{ __('Esta Política de Privacidad describe cómo recopilamos, utilizamos y protegemos la información que recopilamos a través de nuestro sitio web waancolor.com ("el Sitio"). Al acceder o utilizar el Sitio, aceptas los términos y prácticas descritos en esta Política de Privacidad.') }}
            </p>
            <ol>
            	<li>
            		<p>
            			<strong>
            				{{ __('Información que recopilamos:') }}
            			</strong>
            		</p>
            		<p>
            			<strong>
            				{{ __('1.1 Información personal:') }}
            			</strong>
            		</p>
            		<p class="text-justify">
            			{{ __('Recopilamos información personal que nos proporcionas de manera voluntaria, como nombre, dirección de correo electrónico, número de teléfono, dirección de envío y facturación, entre otros, cuando te registras en nuestro sitio, realizas una compra o nos contactas a través de los formularios de contacto.') }}
            		</p>
            		<p>
            			<strong>
            				{{ __('1.2 Información de uso del sitio:') }}
            			</strong>
            		</p>
            		<p class="text-justify">
            			{{ __('Recopilamos información no personal de forma automática cuando interactúas con nuestro sitio web. Esta información puede incluir datos de navegación, dirección IP, tipo de navegador, proveedor de servicios de Internet, páginas de referencia/salida, sistema operativo, fecha/hora de acceso y datos de clics.') }}
            		</p>
            	</li>
            	<li>
            		<p>
            			<strong>
            				{{ __('Uso de la información:') }}
            			</strong>
            		</p>
            		<p>
            			<strong>
            				{{ __('2.1 Utilización de información personal:') }}
            			</strong>
            		</p>
            		<p class="text-justify">
            			{{ __('Utilizamos la información personal que recopilamos para los siguientes fines:') }}
        				<ul class="ml-3">
        					<li>
        						{{ __('Procesar tus pedidos y gestionar transacciones.') }}
        					</li>
        					<li>
        						{{ __('Proporcionar asistencia al cliente y responder a tus consultas.') }}
        					</li>
        					<li>
        						{{ __('Personalizar tu experiencia en el sitio web.') }}
        					</li>
        					<li>
        						{{ __('Enviar correos electrónicos promocionales y boletines informativos, siempre que hayas dado tu consentimiento.') }}
        					</li>
        					<li>
        						{{ __('Mejorar nuestros productos, servicios y sitio web mediante análisis y estudios de mercado.') }}
        					</li>
        					<li>
        						{{ __('Cumplir con las obligaciones legales y proteger nuestros derechos legales.') }}
        					</li>
        				</ul>
            		</p>
            		<p>
            			<strong>
            				{{ __('2.2 Utilización de información de uso del sitio:') }}
            			</strong>
            		</p>
            		<p class="text-justify">
            			{{ __('La información no personal recopilada automáticamente se utiliza para analizar tendencias, administrar el sitio web, rastrear el movimiento de los usuarios en el sitio y recopilar información demográfica. Esta información nos ayuda a mejorar la funcionalidad y la experiencia del usuario en el sitio.') }}
            		</p>
            	</li>
            	<li>
            		<p>
            			<strong>
            				{{ __('Divulgación de información:') }}
            			</strong>
            		</p>
            		<p>
            			<strong>
            				{{ __('3.1 Proveedores de servicios:') }}
            			</strong>
            		</p>
            		<p class="text-justify">
            			{{ __('Podemos compartir información personal con terceros proveedores de servicios que nos ayudan en la operación de nuestro sitio web y la prestación de servicios relacionados, como procesadores de pagos, servicios de envío y servicios de atención al cliente. Estos proveedores de servicios tienen acceso limitado a la información personal necesaria para realizar sus funciones, pero no pueden utilizarla para otros fines.') }}
            		</p>
            		<p>
            			<strong>
            				{{ __('3.2 Cumplimiento legal:') }}
            			</strong>
            		</p>
            		<p class="text-justify">
            			{{ __('Podemos divulgar información personal cuando creemos de buena fe que la divulgación es necesaria para cumplir con una obligación legal, hacer cumplir nuestros términos y condiciones, proteger la seguridad de nuestros usuarios o investigar actividades ilegales.') }}
            		</p>
            	</li>
            	<li>
            		<p>
            			<strong>
            				{{ __('Cookies y tecnologías similares:') }}
            			</strong>
            		</p>
            		<p>
            			<strong>
            				{{ __('4.1 Cookies:') }}
            			</strong>
            		</p>
            		<p class="text-justify">
            			{{ __('Utilizamos cookies y tecnologías similares para mejorar la experiencia del usuario, personalizar el contenido y los anuncios, proporcionar funciones de redes sociales y analizar el tráfico del sitio. Al acceder y utilizar nuestro sitio web, aceptas el uso de cookies de acuerdo con nuestra Política de Cookies.') }}
            		</p>
            		<p>
            			<strong>
            				{{ __('4.2 Opciones de cookies:') }}
            			</strong>
            		</p>
            		<p class="text-justify">
            			{{ __('Puedes controlar y administrar las cookies a través de la configuración de tu navegador. Sin embargo, ten en cuenta que desactivar ciertas cookies puede afectar la funcionalidad del sitio web y limitar tu experiencia de navegación.') }}
            		</p>
            	</li>
            	<li>
            		<p>
            			<strong>
            				{{ __('Enlaces a sitios web de terceros:') }}
            			</strong>
            		</p>
            		<p class="text-justify">
            			{{ __('Nuestro sitio web puede contener enlaces a otros sitios web que no están bajo nuestro control. No nos hacemos responsables de las prácticas de privacidad o el contenido de esos sitios web. Te recomendamos revisar las políticas de privacidad de dichos sitios antes de proporcionar cualquier información personal.') }}
            		</p>
            	</li>
            	<li>
            		<p>
            			<strong>
            				{{ __('Seguridad de la información:') }}
            			</strong>
            		</p>
            		<p class="text-justify">
            			{{ __('Implementamos medidas de seguridad apropiadas para proteger la información personal que recopilamos y mantenemos. Sin embargo, ten en cuenta que ninguna transmisión de datos a través de Internet o almacenamiento electrónico es completamente segura. No podemos garantizar la seguridad absoluta de tus datos.') }}
            		</p>
            	</li>
            	<li>
            		<p>
            			<strong>
            				{{ __('Tus derechos:') }}
            			</strong>
            		</p>
            		<p>
            			<strong>
            				{{ __('Tienes ciertos derechos en relación con tus datos personales:') }}
            			</strong>
            		</p>
            		<p class="text-justify">
        				<ul class="ml-3">
        					<li>
        						{{ __('Derecho de acceso: Puedes solicitar información sobre los datos personales que tenemos sobre ti.') }}
        					</li>
        					<li>
        						{{ __('Derecho de rectificación: Puedes corregir o actualizar tus datos personales si son inexactos o están desactualizados.') }}
        					</li>
        					<li>
        						{{ __('Derecho de eliminación: Puedes solicitar la eliminación de tus datos personales, sujeto a ciertas excepciones.') }}
        					</li>
        					<li>
        						{{ __('Derecho de restricción de procesamiento: Puedes solicitar la restricción del procesamiento de tus datos personales en determinadas circunstancias.') }}
        					</li>
        					<li>
        						{{ __('Derecho de oposición: Puedes oponerte al procesamiento de tus datos personales por razones relacionadas con tu situación particular.') }}
        					</li>
        					<li>
        						{{ __('Derecho a la portabilidad de datos: Puedes solicitar una copia de tus datos personales en un formato estructurado y legible por máquina.') }}
        					</li>
        				</ul>
            		</p>
            		<p class="text-justify">
            			{{ __('Para ejercer tus derechos, ponte en contacto con nosotros utilizando los datos de contacto que se proporcionan al final de esta Política de Privacidad. Procesaremos tu solicitud de acuerdo con las leyes y regulaciones de privacidad aplicables.') }}
            		</p>
            	</li>
            	<li>
            		<p>
            			<strong>
            				{{ __('Cambios en la Política de Privacidad:') }}
            			</strong>
            		</p>
            		<p class="text-justify">
            			{{ __('Nos reservamos el derecho de actualizar o modificar esta Política de Privacidad en cualquier momento. Te notificaremos los cambios significativos publicando la versión actualizada en nuestro sitio web o enviándote un aviso por correo electrónico. Se te solicitará que revises y aceptes los cambios antes de seguir utilizando el sitio web.') }}
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
