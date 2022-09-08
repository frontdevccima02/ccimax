<!DOCTYPE html>
<html lang="es_MX">
<head>
	<meta http-equiv="Content-Type" content="text/html" charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" contet="ie=edge">
	<meta name="author" content="Ing. Saúl Fernando Torres Hernández">
	<meta name="description" content="Grúpo CCIMA S.A. de C.V."/>
	<meta name="keywords" content="grupo ccima, navetec, constructora, servicio de construccion, desarrolladora, llave en mano, built to suit, renta de maquinaria, renta de gruas, maquinaria pesada para construccion, naves industriales, renta naves industriales, venta naves industriales, parques industriales, terrenos, terrenos industriales, terrenos habitacionales, bienes raices, inmobiliaria"/>

	<title>Grupo CCIMA</title>

	<script type="text/javascript" src="media/assets/js/analytics.js"></script>

	<link rel="stylesheet" type="text/css" href="media/bower_components/materialize/css/materialize.min.css">
	<link rel="stylesheet" type="text/css" href="media/assets/css/portto-blanco.css">
	<link rel="stylesheet" type="text/css" href="media/assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="media/assets/css/navetec.css">
	<link rel="stylesheet" type="text/css" href="media/assets/css/quote.css">
	<link rel="stylesheet" type="text/css" href="media/assets/css/helpers.css">

	<script type="text/javascript" src="media/bower_components/jquery.min.js"></script>
	<script type="text/javascript" src="media/bower_components/materialize/js/materialize.min.js"></script>

</head>

<body ng-controller="NvtCalamandaQuoteCtrl as nvtCalamanda">
  
	<md-sidenav class="cc-sidenav md-sidenav-left md-whiteframe-4dp" md-component-id="left">
        <md-toolbar class="md-hue-2">
            <h1 class="md-toolbar-tools">BUSINESS PARK</h1>
        </md-toolbar>
        <a href="#!/Navetec-Beta_Business_Park" ng-click="close()">
            <div class="link-body link-nav">
                Beta Business Park
            </div>
        </a>
        <md-divider></md-divider>
        <a href="#!/Navetec-Gamma_Business_Park" ng-click="close()">
            <div class="link-body link-nav">
                Gamma Business Park
            </div>
        </a>
        <md-divider></md-divider>
        <a href="#!/Navetec-Celta_Business_Park" ng-click="close()">
            <div class="link-body link-nav">
                Celta Business Park
            </div>
        </a>
        <md-divider></md-divider>
        <a href="#!/Navetec-Celta_Business_Park" ng-click="close()">
            <div class="link-body link-nav">
                Celta Business Park
            </div>
        </a>
        <md-divider></md-divider>
        <a href="#!/Navetec-Santa_Rosa_Business_Park" ng-click="close()">
            <div class="link-body link-nav">
                Santa Rosa Business Park
            </div>
        </a>
        <md-divider></md-divider>
        <a href="#!/Navetec-Gamma_II_Business_Park" ng-click="close()">
            <div class="link-body link-nav">
                Gamma Dos Business Park
            </div>
        </a>
        <md-divider></md-divider>
        <a href="#!/Navetec-Aeropuerto_Business_Park" ng-click="close()">
            <div class="link-body link-nav">
                Aeropuerto Business Park
            </div>
        </a>
        <md-divider></md-divider>
        <a href="#!/Navetec-Pedro_Escobedo_Business_Park" ng-click="close()">
            <div class="link-body link-nav">
                Pedro Escobedo Business Park
            </div>
        </a>
		<md-divider></md-divider>
        <a href="#!/Navetec-SLP_Business_Park" ng-click="close()">
            <div class="link-body link-nav">
                San Luis Potosí
            </div>
        </a>
        <md-toolbar class="md-hue-2">
            <h1 class="md-toolbar-tools">NAVIGATION</h1>
        </md-toolbar>
        <a href="#!/Navetec" ng-click="close()">
            <div class="link-body link-nav">
                Navetec
            </div>
        </a>
        <md-divider></md-divider>
        <a href="#!/" ng-click="close()">
            <div class="link-body link-nav">
                Grupo CCIMA
            </div>
        </a>
        <md-divider></md-divider>
    </md-sidenav>

    <div ng-controller="sideNavCtrl" class="navbar-fixed">
        <nav class="cc-nav white" role="navigation">
            <div class="nav-wrapper">
                <div class="container">
                    <ul>
                        <li><a href="#!/Navetec" class="nav-logo"><img src="media/assets/img/logos/logo-navetec.svg"></a></li>
                        <li class="right"><md-button class="md-icon-button md-noink" ng-click="toggleLeft()">
                            <svg viewBox="0 0 24 24" width="24"><path d="M3,18h18v-2H3V18z M3,13h18v-2H3V13z M3,6v2h18V6H3z" fill="#5F6368"></path></svg>
                        </md-button></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

	<div class="modal-dialog" ng-class="nvtCalamanda.dialogDisplay">
		<div class="backdrop-dialog" ng-click="nvtCalamanda.closeDialog()"></div>
			<div class="container-dialog p-20">
				<div class="toolbar-dialog blue-txt">
					Cotización
					<span ng-click="nvtCalamanda.closeDialog()">
						<img class="btn-close-dialog mt-4" src="media/assets/img/icons/close.svg">
					</span>
				</div>
                <div class="content-dialog">

<div class="divider"></div>

<div class="p-20 grey lighten-5">
  <div class="p-5">
    <h6 class="futura-med">Navetec Business Park {{nvtCalamanda.propertyData.condominium}}</h6>
  </div>
  <div class="p-5">
                <h6 class="futura-light">{{nvtCalamanda.propertyData.propertyClass}}</h6>
            </div>
  <div class="p-5">
    <h6 class="futura-light">{{nvtCalamanda.propertyData.type}}</h6>
  </div>
  <div class="p-5">
    <h6 class="futura-light">Numero {{nvtCalamanda.propertyData.number}}</h6>
  </div>
  <!-- <div class="p-5">
    <h6 class="futura-light">Dimenciones: {{nvtCalamanda.propertyData.dimensions}}</h6>
  </div> -->
  <div class="p-5">
    <h6 class="futura-light">Área de {{nvtCalamanda.propertyData.area}} M&sup2;</h6>
  </div>
  <div class="p-5">
    <h6 class="futura-light">Precio por M&sup2; de ${{nvtCalamanda.propertyData.cost_m2}} MXN</h6>
  </div>
  <div class="p-5">
    <h6 class="futura-light green-text">Precio de ${{nvtCalamanda.propertyData.total}} MXN <span style="color: #857C82; font-size: 12px;"></span></h6>
  </div>
  <div class="p-5">
                <h6 class="futura-light blue-text">Pregunta por nuestras promociones del mes</h6>
            </div>
</div>


<div class="divider"></div>

<div class="py-20 ">
  <h5 class="center-align grey-text futura-book">Promociones de Lanzamiento Digital</h5>
</div>

<!-- <div class="divider"></div>

<div class="p-20">
  <h6 class="deep-purple-text futura-light">{{nvtCalamanda.propertyData.discountPlan1}}% para propiedades pagadas de contado al 100%</h6>
  <h6 class="green-text futura-light">Precio de ${{nvtCalamanda.propertyData.totalPlan1}} MXN <span style="color: #857C82; font-size: 12px;">+ I.V.A.</span></h6>
  <p class="promo__description grey-text">¡Oferta limitada!</p>
</div>

<div class="divider"></div>

<div class="p-20">
  <h6 class="deep-purple-text futura-light">{{nvtCalamanda.propertyData.discountPlan2}}% de descuento para propiedades con financiamiento hasta 10 años</h6>
  <h6 class="green-text futura-light">Precio de ${{nvtCalamanda.propertyData.totalPlan2}} MXN</h6>
  <p class="promo__description grey-text">¡Oferta limitada!</p>
</div> -->

<div class="divider"></div>

<div class="p-20">
  <h6 class="deep-purple-text futura-light">10% de descuento sobre le monto de enganche</h6>
  <p class="promo__description grey-text">*Pagando el 100% de enganche</p>
  <p class="promo__description grey-text">*Valido hasta {{nvtCalamanda.month + ' ' + nvtCalamanda.year}}</p>
</div>

<div class="divider"></div>

<div class="p-20">
  <h6 class="deep-purple-text futura-light">Compra en {{nvtCalamanda.month}} y paga la primera mensualidad hasta {{nvtCalamanda.nextMonth}}</h6>
  <p class="promo__description grey-text">*Pagando el 100% de enganche</p>
  <p class="promo__description grey-text">*Aplica para todas las operaciones a crédito realizadas en {{nvtCalamanda.month + ' ' + nvtCalamanda.year}}</p>
</div>

<div class="divider"></div>

        <div class="p-20">
            <p class="blue-text futura-book">¡Apártalo ahora!</p>
            <p class="green-text">Con tan solo {{nvtCalamanda.costToBlock}}</p>
            <button class="btn blue-bg no__shadow futura-bold">Apártar ahora</button>
        </div>

    </div>
			</div>

			<div class="divider"></div>
			<div class="option-menu-dialog" ng-controller="ContactMenuCtrl as contactCtrl">
				<md-menu class="right mr-20 mt-10"  md-offset="0 -60">
					<button aria-label="Abrir Menu de Contacto" class="btn blue-bg no__shadow futura-demi" ng-click="contactCtrl.openMenu($mdMenu, $event)">
						Contacto
					</button>
					<md-menu-content width="4">
						<md-menu-item>
							<md-button disabled="disabled">
								+52 1 442 127 5214
							</md-button>
						</md-menu-item>
						<md-menu-divider></md-menu-divider>
						<md-menu-item>
							<md-button ng-click="contactCtrl.toWhatsapp()">
								Whatsapp
							</md-button>
						</md-menu-item>
						<md-menu-item>
							<md-button ng-click="contactCtrl.toCall()">
								Llamada
							</md-button>
						</md-menu-item>
					</md-menu-content>
				</md-menu>
			</div>
			
		</div>
	</div>
	
	<div class="plano_container">

		<div class="container mt-64">
			<div class="row quote-header">
				<div class="col s12">
					<h2 class="center-align futura-med">CALAMANDA</h2>
					<div class="quote-description">
						<p class="left">Cotiza facilmente con un solo Click</p>
						<img class="quote-icon-tap mt-15 ml-10 left" src="media/assets/img/icons/tap.svg">
					</div>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="color-table">
				<div class="color-block ae-property-active-bg left"></div>
				<p class="pl-40 py-2">DISPONIBLE</p>
			</div>
			<div>
				<div class="color-block mustard-bg left"></div>
				<p class="pl-40 py-2">NO DISPONIBLE</p>
			</div>
		</div>

        <div class="">
          <!-- aqui va el codigo -->
          
          

        </div>
	</div>
    
</body>
</html>
