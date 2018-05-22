<!DOCTYPE html>
<html >
<head><meta http-equiv="Content-Type" content="text/html; charset=euc-jp">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
	<!--<link rel="shortcut icon" href="assets/img/sep.ico" />-->
	<link rel="stylesheet" type="text/css" href="assets/css/estilo.css">
	<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">
	<script src="assets/js/angularjs/angular.min.js"></script>
	<title>Inicio</title>
	<style>
		html,body,div,span,applet,object,iframe,h1,h2,h3,h4,h5,h6,p,blockquote,pre,a,abbr,acronym,address,big,cite,code,del,dfn,em,img,ins,kbd,q,s,samp,small,strike,strong,sub,sup,tt,var,b,u,i,center,dl,dt,dd,ol,ul,li,fieldset,form,label,legend,table,caption,tbody,tfoot,thead,tr,th,td,article,aside,canvas,details,embed,figure,figcaption,footer,header,hgroup,menu,nav,output,ruby,section,summary,time,mark,audio,video{margin:0;padding:0;border:0;font-size:100%;font:inherit;vertical-align:baseline}
		article,aside,details,figcaption,figure,footer,header,hgroup,menu,nav,section{display:block}
		body{line-height:1}
		ol,ul{list-style:none}
		blockquote,q{quotes:none}
		blockquote:before,blockquote:after,q:before,q:after{content:'';content:none}
		table{border-collapse:collapse;border-spacing:0}


		html {
		  height: 100%;
		}

		body {
		  display: -webkit-box;
		  display: -ms-flexbox;
		  display: flex;
		  -webkit-box-orient: vertical;
		  -webkit-box-direction: normal;
			  -ms-flex-direction: column;
				  flex-direction: column;
		  -webkit-box-pack: center;
			  -ms-flex-pack: center;
				  justify-content: center;
		  -webkit-box-align: center;
			  -ms-flex-align: center;
				  align-items: center;
		  position: relative;
		  min-height: 100%;

		    background-image: url("/assets/img/fondo.jpg");/*#F1F1F1*/
            background-position: center center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
            background-color: #004793;
		}

		/* Animation Keyframes */
		@-webkit-keyframes scale_header {
		  0%   {max-height: 0px; margin-bottom: 0px; opacity: 0;}
		  100% {max-height: 117px; margin-bottom: 25px; opacity: 1;}
		}
		@keyframes scale_header {
		  0%   {max-height: 0px; margin-bottom: 0px; opacity: 0;}
		  100% {max-height: 117px; margin-bottom: 25px; opacity: 1;}
		}

		@-webkit-keyframes input_opacity {
		  0%   {-webkit-transform: translateY(-10px);transform: translateY(-10px); opacity: 0}
		  100% {-webkit-transform: translateY(0px);transform: translateY(0px); opacity: 1}
		}

		@keyframes input_opacity {
		  0%   {-webkit-transform: translateY(-10px);transform: translateY(-10px); opacity: 0}
		  100% {-webkit-transform: translateY(0px);transform: translateY(0px); opacity: 1}
		}

		@-webkit-keyframes text_opacity {
		  0% {color: transparent;}
		}

		@keyframes text_opacity {
		  0% {color: transparent;}
		}

		@-webkit-keyframes error_before {
		  0%   {height: 5px; background: rgba(0, 0, 0, 0.156); color: transparent;}
		  10%  {height: 117px; background: #FFFFFF; color: #C62828}
		  90%  {height: 117px; background: #FFFFFF; color: #C62828}
		  100% {height: 5px; background: rgba(0, 0, 0, 0.156); color: transparent;}
		}

		@keyframes error_before {
		  0%   {height: 5px; background: rgba(0, 0, 0, 0.156); color: transparent;}
		  10%  {height: 117px; background: #FFFFFF; color: #C62828}
		  90%  {height: 117px; background: #FFFFFF; color: #C62828}
		  100% {height: 5px; background: rgba(0, 0, 0, 0.156); color: transparent;}
		}


		/* Login Form */
		.login-container {
		  display: -webkit-box;
		  display: -ms-flexbox;
		  display: flex;
		  -webkit-box-orient: vertical;
		  -webkit-box-direction: normal;
			  -ms-flex-direction: column;
				  flex-direction: column;
		  -webkit-box-align: center;
			  -ms-flex-align: center;
				  align-items: center;
		  position: relative;
		  width: 340px;
		  height: auto;
		  padding: 5px;
		  box-sizing: border-box;
		}

		.login-container img {
		  width: 200px;
		  margin: 0 0 20px 0;
		}

		.login-container p {
		  -ms-flex-item-align: start;
			  align-self: flex-start;
		  font-family: 'Roboto', sans-serif;
		  font-size: 0.8rem;
		  color: rgba(0, 0, 0, 0.5);
		}

		.login-container p a {
		  color: rgba(0, 0, 0, 0.4);
		}

		.login {
		  position: relative;
		  width: 100%;
		  padding: 10px;
		  margin: 0 0 10px 0;
		  box-sizing: border-box;
		  border-radius: 3px;
		  background: #FAFAFA;
		  overflow: hidden;
		  -webkit-animation: input_opacity 0.2s cubic-bezier(.55, 0, .1, 1);
				  animation: input_opacity 0.2s cubic-bezier(.55, 0, .1, 1);
		  box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14),
					  0 1px 5px 0 rgba(0, 0, 0, 0.12),
					  0 3px 1px -2px rgba(0, 0, 0, 0.2);
		}

		.login > header {
		  position: relative;
		  width: 100%;
		  padding: 10px;
		  margin: -10px -10px 25px -10px;
		  border-bottom: 1px solid rgba(0, 0, 0, 0.1);
		  background: #003399/*#009688*/;
		  font-family: 'Roboto', sans-serif;
		  font-size: 1.3rem;
		  color: #FAFAFA;
		  -webkit-animation: scale_header 0.6s cubic-bezier(.55, 0, .1, 1), text_opacity 1s cubic-bezier(.55, 0, .1, 1);
				  animation: scale_header 0.6s cubic-bezier(.55, 0, .1, 1), text_opacity 1s cubic-bezier(.55, 0, .1, 1);
		  box-shadow: 0px 2px 2px 0px rgba(0, 0, 0, 0.14),
					  0px 1px 5px 0px rgba(0, 0, 0, 0.12),
					  0px 3px 1px -2px rgba(0, 0, 0, 0.2);
		}

		.login > header:before {
		  content: '';
		  display: -webkit-box;
		  display: -ms-flexbox;
		  display: flex;
		  -webkit-box-pack: center;
			  -ms-flex-pack: center;
				  justify-content: center;
		  -webkit-box-align: center;
			  -ms-flex-align: center;
				  align-items: center;
		  position: absolute;
		  width: 100%;
		  height: 5px;
		  padding: 10px;
		  margin: -10px 0 0 -10px;
		  box-sizing: border-box;
		  background: rgba(0, 0, 0, 0.156);
		  font-family: 'Roboto', sans-serif;
		  font-size: 0.9rem;
		  color: transparent;
		  z-index: 5;
		}

		.login.error_1 > header:before,
		.login.error_2 > header:before {
		  -webkit-animation: error_before 3s cubic-bezier(.55, 0, .1, 1);
				  animation: error_before 3s cubic-bezier(.55, 0, .1, 1);
		}

		.login.error_1 > header:before {
		  content: 'Invalid username or password!';
		}

		.login.error_2 > header:before {
		  content: 'Invalid or expired Token!';
		}

		.login > header h2 {
		  margin: 50px 0 10px 0;
		}

		.login > header h4 {
		  font-size: 0.7em;
		  -webkit-animation: text_opacity 1.5s cubic-bezier(.55, 0, .1, 1);
				  animation: text_opacity 1.5s cubic-bezier(.55, 0, .1, 1);
		  color: rgba(255, 255, 255, 0.4);
		}

		/* Form */
		.login-form {
		  padding: 15px;
		  box-sizing: border-box;
		}


		/* Submit Button */
		.submit-container {
		  display: -webkit-box;
		  display: -ms-flexbox;
		  display: flex;
		  -webkit-box-orient: horizontal;
		  -webkit-box-direction: normal;
			  -ms-flex-direction: row;
				  flex-direction: row;
		  -webkit-box-pack: end;
			  -ms-flex-pack: end;
				  justify-content: flex-end;
		  position: relative;
		  padding: 10px;
		  margin: 35px -25px -25px -25px;
		  border-top: 1px solid rgba(0, 0, 0, 0.1);
		}

		.btn.form.amarillo.pull-right {
			width: 100%;
		}

	</style>

</head>

<body ng-app="reg">
	<div class="login-container">
    	<section class="login" id="login">
    		<header>
    			<h2>Bienvenido a SEP UNAH</h2>
    			<h4>Por favor ingrese su usuario y clave</h4>
    		</header>
    		<form class="login-form" method="POST" action="index.php">
    			<div class="form-grupo form-texto-animado">
    				<input type="text" class="input-text" required="" id="usuario" name="usuario" autofocus>
    				<label for="usuario" >
    					<i class="fa fa-user"></i>
    					Usuario
    				</label>
    			</div>
    			<div class="form-grupo form-texto-animado">
    				<input type="password" class="input-text" required="" id="clave" name="clave">
    				<label for="clave">
    					<i class="fa fa-key"></i>
    					Clave
    				</label>
    			</div>
    			<div class="submit-container">
    				<input type="submit" class="btn form amarillo pull-right" value="Ingresar">
    				<!--<button class="btn form amarillo pull-right" ng-click="da()">
        		        Recuperar Contraseña
        	        </button>-->
    			</div>
    		</form>
        </section>
    </div>
</body>

		
		
		