<!DOCTYPE html>
<html lang="fr">

<!-- --------------------------------------------------------------------------------  TYPICAL HEAD FROM BOOTSTRAP  -------------------------------------------------------------------------------- -->

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bienvenue chez Wildshoes</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    
    
    
   			 <style type="text/css">
   			 	body {
   			 	cursor: url("ch.png"), pointer;
   			 	}
   			 
   				 button, input, select, textarea {
    				 	font-family: inherit;
    					font-style: italic;
   				 	font-size: inherit;
   					line-height: inherit;
   				 	color: #582900;
   				 	font-weight: bold;
    								 }
	
				.col-xs-12 {
					margin-top: 60px;
					   }
				.btn-primary {
				background-color: #AE8964;
				border-color: #AE8964;
				}
				.btn-primary:hover {
				background-color: #3F2204;
				border-color: #3F2204;
				text-decoration: none;
						}
				a {
				color: #AE8964;
				font-weight: bold;
				}
				a:hover {
				color: #AE8964;
				font-weight: bold;
				text-decoration: none;
				}
				.contact {
				color: #582900;
				}
				
				
				
				
				
				@keyframes articlerotatif
				{
				  
				   
				10% 
				    {
					transform: translateX(3px);
				    }

				20% 
				    {
					transform: translateY(3px);
				    }
				40% 
				    {
					transform: translateX(3px);
				    }

				60% 
				    {
					transform: translateY(3px);
				    }
				80% 
				    {
					transform: translateX(3px);
				    }

				100% 
				    {
					transform: translateY(3px);
				    }


				}




				@-webkit-keyframes articlerotatif
				{
				  
				  10% 
				    {
					transform: translateX(3px);
				    }

				20% 
				    {
					transform: translateY(3px);
				    }
				40% 
				    {
					transform: translateX(3px);
				    }

				60% 
				    {
					transform: translateY(3px);
				    }
				80% 
				    {
					transform: translateX(3px);
				    }

				100% 
				    {
					transform: translateY(3px);
				    }

				}



				.btn-primary:hover
				{
				    animation: articlerotatif 500ms;
				    -webkit-animation: articlerotatif 500ms;
				}

				input:hover {
				    border: 1px solid #999
				}

				input:focus {
				    color: #582900;
				    border: 1px solid #3F2204;
				    box-shadow: inset rgba(0,0,0,0.35) 2px 2px 12px, #3F2204 0 0 10px;
				    outline: 0;
				}
				textarea:focus {
				    color: #582900;				  				   
				    border: 1px solid #3F2204;				    
				    box-shadow: inset rgba(0,0,0,0.35) 2px 2px 12px, #3F2204 0 0 10px;				 
				    outline: 0;
				}



				   
				@import url(http://fonts.googleapis.com/css?family=Roboto);

				* {
				    font-family: 'Roboto', sans-serif;
				}

				#login-modal .modal-dialog {
				    width: 350px;
				}

				#login-modal input[type=text], input[type=password] {
					margin-top: 10px;
				}

				#div-login-msg,
				#div-lost-msg,
				#div-register-msg {
				    border: 1px solid #dadfe1;
				    height: 30px;
				    line-height: 28px;
				    transition: all ease-in-out 500ms;
				}

				#div-login-msg.success,
				#div-lost-msg.success,
				#div-register-msg.success {
				    border: 1px solid #68c3a3;
				    background-color: #c8f7c5;
				}

				#div-login-msg.error,
				#div-lost-msg.error,
				#div-register-msg.error {
				    border: 1px solid #eb575b;
				    background-color: #ffcad1;
				}

				#icon-login-msg,
				#icon-lost-msg,
				#icon-register-msg {
				    width: 30px;
				    float: left;
				    line-height: 28px;
				    text-align: center;
				    background-color: #dadfe1;
				    margin-right: 5px;
				    transition: all ease-in-out 500ms;
				}

				#icon-login-msg.success,
				#icon-lost-msg.success,
				#icon-register-msg.success {
				    background-color: #68c3a3 !important;
				}

				#icon-login-msg.error,
				#icon-lost-msg.error,
				#icon-register-msg.error {
				    background-color: #eb575b !important;
				}

				#img_logo {
				    max-height: 100px;
				    max-width: 100px;
				}

				/* #########################################
				   #    override the bootstrap configs     #
				   ######################################### */

				.modal-backdrop.in {
				    filter: alpha(opacity=50);
				    opacity: .8;
				}

				.modal-content {
				    background-color: #ececec;
				    border: 1px solid #bdc3c7;
				    border-radius: 0px;
				    outline: 0;
				}

				.modal-header {
				    min-height: 16.43px;
				    padding: 15px 15px 15px 15px;
				    border-bottom: 0px;
				}

				.modal-body {
				    position: relative;
				    padding: 5px 15px 5px 15px;
				}

				.modal-footer {
				    padding: 15px 15px 15px 15px;
				    text-align: left;
				    border-top: 0px;
				}

				.checkbox {
				    margin-bottom: 0px;
				}

				.btn {
				    border-radius: 0px;
				}

				.btn:focus,
				.btn:active:focus,
				.btn.active:focus,
				.btn.focus,
				.btn:active.focus,
				.btn.active.focus {
				    outline: none;
				}

				.btn-lg, .btn-group-lg>.btn {
				    border-radius: 0px;
				}

				.btn-link {
				    padding: 5px 10px 0px 0px;
				    color: #95a5a6;
				}

				.btn-link:hover, .btn-link:focus {
				    color: #2c3e50;
				    text-decoration: none;
				}

				.glyphicon {
				    top: 0px;
				}

				.form-control {
				  border-radius: 0px;
				}


			





    			</style>
    
    <script>
  $(function() {
    
    var $formLogin = $('#login-form');
    var $formLost = $('#lost-form');
    var $formRegister = $('#register-form');
    var $divForms = $('#div-forms');
    var $modalAnimateTime = 300;
    var $msgAnimateTime = 150;
    var $msgShowTime = 2000;

    $("form").submit(function () {
        switch(this.id) {
            case "login-form":
                var $lg_username=$('#login_username').val();
                var $lg_password=$('#login_password').val();
                if ($lg_username == "ERROR") {
                    msgChange($('#div-login-msg'), $('#icon-login-msg'), $('#text-login-msg'), "error", "glyphicon-remove", "Login error");
                } else {
                    msgChange($('#div-login-msg'), $('#icon-login-msg'), $('#text-login-msg'), "success", "glyphicon-ok", "Login OK");
                }
                return false;
                break;
            case "lost-form":
                var $ls_email=$('#lost_email').val();
                if ($ls_email == "ERROR") {
                    msgChange($('#div-lost-msg'), $('#icon-lost-msg'), $('#text-lost-msg'), "error", "glyphicon-remove", "Send error");
                } else {
                    msgChange($('#div-lost-msg'), $('#icon-lost-msg'), $('#text-lost-msg'), "success", "glyphicon-ok", "Send OK");
                }
                return false;
                break;
            case "register-form":
                var $rg_username=$('#register_username').val();
                var $rg_email=$('#register_email').val();
                var $rg_password=$('#register_password').val();
                if ($rg_username == "ERROR") {
                    msgChange($('#div-register-msg'), $('#icon-register-msg'), $('#text-register-msg'), "error", "glyphicon-remove", "Register error");
                } else {
                    msgChange($('#div-register-msg'), $('#icon-register-msg'), $('#text-register-msg'), "success", "glyphicon-ok", "Register OK");
                }
                return false;
                break;
            default:
                return false;
        }
        return false;
    });
    
    $('#login_register_btn').click( function () { modalAnimate($formLogin, $formRegister) });
    $('#register_login_btn').click( function () { modalAnimate($formRegister, $formLogin); });
    $('#login_lost_btn').click( function () { modalAnimate($formLogin, $formLost); });
    $('#lost_login_btn').click( function () { modalAnimate($formLost, $formLogin); });
    $('#lost_register_btn').click( function () { modalAnimate($formLost, $formRegister); });
    $('#register_lost_btn').click( function () { modalAnimate($formRegister, $formLost); });
    
    function modalAnimate ($oldForm, $newForm) {
        var $oldH = $oldForm.height();
        var $newH = $newForm.height();
        $divForms.css("height",$oldH);
        $oldForm.fadeToggle($modalAnimateTime, function(){
            $divForms.animate({height: $newH}, $modalAnimateTime, function(){
                $newForm.fadeToggle($modalAnimateTime);
            });
        });
    }
    
    function msgFade ($msgId, $msgText) {
        $msgId.fadeOut($msgAnimateTime, function() {
            $(this).text($msgText).fadeIn($msgAnimateTime);
        });
    }
    
    function msgChange($divTag, $iconTag, $textTag, $divClass, $iconClass, $msgText) {
        var $msgOld = $divTag.text();
        msgFade($textTag, $msgText);
        $divTag.addClass($divClass);
        $iconTag.removeClass("glyphicon-chevron-right");
        $iconTag.addClass($iconClass + " " + $divClass);
        setTimeout(function() {
            msgFade($textTag, $msgOld);
            $divTag.removeClass($divClass);
            $iconTag.addClass("glyphicon-chevron-right");
            $iconTag.removeClass($iconClass + " " + $divClass);
  		}, $msgShowTime);
    }
});</script>

  </head>

<!-- ********** NOW CODING WITH GEDIT (UBUNTU/GNOME) SORRY FOR BAD INDENTATION, WORKING ON THE GOOD CONFIG FOR SOURCE EDITING, PROBABLY A MIX OF SUBLIME TEXT AND TERMINATOR ********** -->

 <body>





<!-- --------------------------------------------------------------------------------  NAV  -------------------------------------------------------------------------------- -->


<nav  class="navbar navbar-default navbar-fixed-top">
 	<div class="container">
  			  <!-- LOGO	Brand and toggle get grouped for better mobile display -->
  			  <div class="navbar-header">
      				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
       					 <span class="sr-only">Navigation</span>
        				<span class="icon-bar"></span>
       					 <span class="icon-bar"></span>
       					 <span class="icon-bar"></span>
      				</button>
      				<a class="navbar-brand" href="#"><img src="images/logo.png" height="100%" alt="Wildshoes" class="pull-left"></a>
    			</div>

   			 <!-- ITEMS MENU	Collect the nav links, forms, and other content for toggling -->
    		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    		
     		  			 <ul class="nav navbar-nav">
       						 <!-- <li class="active"><a href="#">Wildshoes<span class="sr-only">(current)</span></a></li> -->
       						 <li><a href="">Savoir-faire</a></li>
       			 			<li><a href="">Chausse-pieds</a></li>
        					 <li><a href="">Tire-bottes</a></li>
        					 <li><a href="#devis">Sur-mesure</a></li>
      		  			 </ul>
      		  			 
		</div><!-- /.navbar-collapse -->
  	</div><!-- /.container-fluid -->
</nav>

<!-- -------------------------------------------------------------------------------- VISUEL HOME -------------------------------------------------------------------------------- -->

 

	<div id="visuel-top" class="container">
 	   		
		<img   src="images/wildshoes-orleans.jpg" class="col-md-12 col-sm-12 col-xs-12">
	 
	</div>


	
	
	

<!-- -------------------------------------------------------------------------------- SAVOIR-FAIRE -------------------------------------------------------------------------------- -->

	<div id="process" class="container">


<br/>
<br/>

</div>
		<h2 style="text-align: center; color: #582900;">Nous sommes leaders depuis 72 ans</h2>
<br/>
<br/>
	</div>
	
<!-- -------------------------------------------------------------------------------- PRODUITS 1/3 = CHAUSSE-PIEDS -------------------------------------------------------------------------------- -->

	<div id="products1" class="container">
		<div class="row">
  			<div class="col-sm-6 col-md-12 col-lg-3">
    				<div class="thumbnail">
      					<img src="images/chausse_pied_bois.jpg" alt="...">
      					<div class="caption">
       			 <h3>Wild Bois</h3>
        			<p>Ce produit est authentiquement fait main ;)</p>
				<p>On sait depuis longtemps que travailler avec du texte lisible et contenant du sens est source de distractions, et empêche de se concentrer sur la mise en page elle-même. L'avantage du Lorem Ipsum sur un texte générique comme 'Du texte. Du texte. Du texte.' est qu'il possède une distribution de lettres plus ou moins normale, et en tout cas comparable avec celle du français standard. </p>
       				<p><a href="#" class="btn btn-primary" role="button">Plus d'infos</a> </p>
      					</div>
    				</div>
 			 </div>

  			<div class="col-sm-12 col-md-6 col-lg-3">
    				<div class="thumbnail">
      					<img src="images/chausse_pied_corne.jpg" alt="...">
      					<div class="caption">
       			 <h3>Wild Corne</h3>
        			<p>Ce produit est authentiquement fait main ;)</p>
<p>On sait depuis longtemps que travailler avec du texte lisible et contenant du sens est source de distractions, et empêche de se concentrer sur la mise en page elle-même. L'avantage du Lorem Ipsum sur un texte générique comme 'Du texte. Du texte. Du texte.' est qu'il possède une distribution de lettres plus ou moins normale, et en tout cas comparable avec celle du français standard. </p>
       				<p><a href="#" class="btn btn-primary" role="button">Plus d'infos</a> </p>
      					</div>
    				</div>
 			 </div>


  			<div class="col-sm-12 col-md-6 col-lg-3">
    				<div class="thumbnail">
      					<img src="images/chausse_pied_metal.jpg" alt="...">
      					<div class="caption">
       			 <h3>Wild Métal</h3>
        			<p>Ce produit est authentiquement fait main ;)</p>
<p>On sait depuis longtemps que travailler avec du texte lisible et contenant du sens est source de distractions, et empêche de se concentrer sur la mise en page elle-même. L'avantage du Lorem Ipsum sur un texte générique comme 'Du texte. Du texte. Du texte.' est qu'il possède une distribution de lettres plus ou moins normale, et en tout cas comparable avec celle du français standard. </p>
				<p><a href="#" class="btn btn-primary" role="button">Plus d'infos</a> </p>
      					</div>
    				</div>
 			 </div>


  			<div class="col-sm-12 col-md-6 col-lg-3">
    				<div class="thumbnail">
      					<img src="images/chausse_pied_telescopique.jpg" alt="...">
      					<div class="caption">
       			 <h3>Wild Plus</h3>
        			<p>Nouveau : télescopique</p>
       				<p><a href="#" class="btn btn-primary" role="button">Plus d'infos</a> </p>
      					</div>
    				</div>
 			 </div>

  			

		

		</div>

	</div>

<!-- -------------------------------------------------------------------------------- VISUEL SEPARATION -------------------------------------------------------------------------------- -->


				
			<div id="layer1" class="container">
			
				<div style="display: inline-block; margin-left: 0px;" id="visuel-mid" >				
				
		<img src="images/chaussure.jpg" class="col-sm-6 col-xs-6 col-md-6 col-lg-6" >
		
		
		<div class="col-xs-offset-2 col-xs-2"><p>fhfdhdf<br />uuygiuhh<br />fhfdhdf<br />uuygiuhh<br />fhfdhdf<br />uuygiuhh<br /></p></div></div>
		
				
				
			</div>



<!-- -------------------------------------------------------------------------------- PRODUITS 2/3 = TIRE-BOTTES -------------------------------------------------------------------------------- -->

	<div id="products2" class="container">
		<div class="row">
  			<div class="col-sm-12 col-md-6 col-lg-4">
    				<div class="thumbnail">
      					<img src="images/tirebotte_bois.jpg" alt="...">
      					<div class="caption">
       			 <h3>Wild Bois</h3>
        			<p>Ce produit est authentiquement fait main ;)</p>
				<p>On sait depuis longtemps que travailler avec du texte lisible et contenant du sens est source de distractions, et empêche de se concentrer sur la mise en page elle-même. L'avantage du Lorem Ipsum sur un texte générique comme 'Du texte. Du texte. Du texte.' est qu'il possède une distribution de lettres plus ou moins normale, et en tout cas comparable avec celle du français standard. </p>
       				<p><a href="#" rel="popup_name"  class="btn btn-primary poplight" role="button">Plus d'infos</a> </p>
  
      					</div>
    				</div>
 			 </div>

  			<div class="col-sm-12 col-md-6 col-lg-4">
    				<div class="thumbnail">
      					<img src="images/tirebotte_metal.jpg" alt="...">
      					<div class="caption">
       			 <h3>Wild Corne</h3>
        			<p>Ce produit est authentiquement fait main ;)</p>
<p>On sait depuis longtemps que travailler avec du texte lisible et contenant du sens est source de distractions, et empêche de se concentrer sur la mise en page elle-même. L'avantage du Lorem Ipsum sur un texte générique comme 'Du texte. Du texte. Du texte.' est qu'il possède une distribution de lettres plus ou moins normale, et en tout cas comparable avec celle du français standard. </p>
       				<p><a href="#" class="btn btn-primary" role="button">Plus d'infos</a> </p>
      					</div>
    				</div>
 			 </div>


  			<div class="col-sm-12 col-md-6 col-lg-4">
    				<div class="thumbnail">
      					<img src="images/grattoir.jpg" alt="...">
      					<div class="caption">
       			 <h3>Wild Métal</h3>
        			<p>Ce produit est authentiquement fait main ;)</p>
<p>On sait depuis longtemps que travailler avec du texte lisible et contenant du sens est source de distractions, et empêche de se concentrer sur la mise en page elle-même. L'avantage du Lorem Ipsum sur un texte générique comme 'Du texte. Du texte. Du texte.' est qu'il possède une distribution de lettres plus ou moins normale, et en tout cas comparable avec celle du français standard. </p>
				<p><a href="#" class="btn btn-primary" role="button">Plus d'infos</a> </p>
      					</div>
    				</div>
 			 </div>

  		

			</div>

		</div>

	

<br />
<br />
<br />
<br />
<br />
<br />

<!-- --------------------------------------------------------------------------------   POPUP  -------------------------------------------------------------------------------- -->





</script>

<div class="container">
	<div class="row">
		<h1 class="text-center">Pour recevoir la newsletter WildShoes Orléans.<br /> Inscrivez vous !</h1>
        <p class="text-center"><a href="#" class="btn btn-primary btn-lg" role="button" data-toggle="modal" data-target="#login-modal">Ouvrir la fenêtre de connexion</a></p>
	</div>
</div>
<!-- END # BOOTSNIP INFO -->

<!-- BEGIN # MODAL LOGIN -->
<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    	<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header" align="center">
					<img class="img-circle" id="img_logo" src="images/chaussure.jpg">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
					</button>
				</div>
                
                <!-- Begin # DIV Form -->
                <div id="div-forms">
                
                    <!-- Begin # Login Form -->
                    <form id="login-form">
		                <div class="modal-body">
				    		<div id="div-login-msg">
                                <div id="icon-login-msg" class="glyphicon glyphicon-chevron-right"></div>
                                <span id="text-login-msg">Ecrivez votre identifiant.</span>
                            </div>
				    		<input id="login_username" class="form-control" type="text" placeholder="Votre identifiant" required>
				    		<input id="login_password" class="form-control" type="password" placeholder="Votre mot de passe" required>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox"> Se rappeler de moi
                                </label>
                            </div>
        		    	</div>
				        <div class="modal-footer">
                            <div>
                                <button type="submit" class="btn btn-primary btn-lg btn-block" onclick="show_alert();">Connexion</button>
                            </div>
				    	    <div>
                                <button id="login_lost_btn" type="button" class="btn btn-link">Mot de passe perdu ?</button>
                                <button id="login_register_btn" type="button" class="btn btn-link">Enregistrement</button>
                            </div>
				        </div>
                    </form>
                    <!-- End # Login Form -->
                    
                    <!-- Begin | Lost Password Form -->
                    <form id="lost-form" style="display:none;">
    	    		    <div class="modal-body">
		    				<div id="div-lost-msg">
                                <div id="icon-lost-msg" class="glyphicon glyphicon-chevron-right"></div>
                                <span id="text-lost-msg">Ecrivez votre e-mail</span>
                            </div>
		    				<input id="lost_email" class="form-control" type="text" placeholder="Votre e-mail" required>
            			</div>
		    		    <div class="modal-footer">
                            <div>
                                <button type="submit" class="btn btn-primary btn-lg btn-block">Envoyer</button>
                            </div>
                            <div>
                                <button id="lost_login_btn" type="button" class="btn btn-link">Se connecter</button>
                                <button id="lost_register_btn" type="button" class="btn btn-link">S'enregistrer</button>
                            </div>
		    		    </div>
                    </form>
                    <!-- End | Lost Password Form -->
                    
                    <!-- Begin | Register Form -->
                    <form id="register-form" style="display:none;">
            		    <div class="modal-body">
		    				<div id="div-register-msg">
                                <div id="icon-register-msg" class="glyphicon glyphicon-chevron-right"></div>
                                <span id="text-register-msg">Enregistrer mon compte.</span>
                            </div>
		    				<input id="register_username" class="form-control" type="text" placeholder="Username (type ERROR for error effect)" required>
                            <input id="register_email" class="form-control" type="text" placeholder="E-Mail" required>
                            <input id="register_password" class="form-control" type="password" placeholder="Password" required>
            			</div>
		    		    <div class="modal-footer">
                            <div>
                                <button type="submit" class="btn btn-primary btn-lg btn-block">S'enregistrer</button>
                            </div>
                            <div>
                                <button id="register_login_btn" type="button" class="btn btn-link">Se connecter</button>
                                <button id="register_lost_btn" type="button" class="btn btn-link">Mot de passe perdu ?</button>
                            </div>
		    		    </div>
                    </form>
                    <!-- End | Register Form -->
                    
                </div>
                <!-- End # DIV Form -->
                
			</div>
		</div>
	</div>





<br />
<br />
<br />
<br />
<br />
<br />
<br />





<!-- --------------------------------------------------------------------------------   POPUP -------------------------------------------------------------------------------- -->


<!-- --------------------------------------------------------------------------------   LOCATION MAP   -------------------------------------------------------------------------------- -->


 	<div class="container">
 	
 	
 	<!-- -------------- FORMULAIRE DEVIS  --------------------------------------------- -->
 	
 	
 	
 	
 	<div style="margin: auto;" class="jumbotron" id="devis">
 	
 	
 	
 	
<script>
function show_alert() {
   alert("Ceci est un formulaire fictif ;-)");
}
</script>



		<form action="" method="" style="text-align: center;"> 
		<h2 style="color: #582900; padding-bottom: 30px;">N'hésitez pas à remplir le formulaire ci dessous si vous souhaitez personnaliser votre chausse-pied.</h2>  
			<table style="width: 100%;">

				<tr>
					<td style="margin:0 5px; width:80px;"><label>Nom : </label></td>
					<td colspan="2" style="margin:0 5px;"><input type="text" placeholder="entrez votre nom" name="nom" style="width:100%;" class="" value=""></td>
				</tr>

				<tr>		
					<td colspan="2" style="margin:0 5px;"><label>Prénom : </label></td>
					
					<td style="margin:0 5px;">
		<input type="text" placeholder="entrez votre prenom" name="prenom" style="width:100%;" class="" value="">
					</td>
				</tr>

       				 <tr>		
					<td colspan="2" style="margin:0 5px;">
							<label>Numéro : </label>
					</td>
					<td style="margin:0 5px;">
		<input type="text" placeholder="entrez votre numero" name="numero" style="width:100%;" class="" value="">
				</td>
				</tr>

				<tr>
					<td style="margin:0 5px;width:80px;"><label>Votre mail : </label></td>
					<td colspan="3"><input type="text" placeholder="entrez votre email" name="email" style="width:100%;" class="" value=""></td>
				</tr>
				<tr>
					<td style="margin:0 5px;width:80px;"><label>Type de chausse-pieds : </label></td>
					<td colspan="3">
		<textarea style="width: 100%; height: 100px; resize:none;" placeholder="entrez votre type de chausse-pied, bois, métaln corne etc... votre demande doit être précise." name="message" ></textarea>
					</td>
				</tr>
				<tr>
				
					<td colspan="3" style=""><input type="submit" name="envoyer" style="" class="" value="Envoyer" onclick="show_alert();"></td>
				</tr>
			
				
				
			</table>
		</form>
		
	</div>

<!-- --------------------------------------------------------------------------------   FOOTER   -------------------------------------------------------------------------------- -->

 	<div id="footer">
 	
 <!-- ----------------------------------------- LIKE FACEBOOK --------------- -->	
 	
 	<div style="float: right; padding-top: 15px;">
 	<img src="google.png">
 	<img src="linkedin.png">
 	<img src="facebook.png">
 	<img src="twitter.png">
 	<img src="youtube.png">
 	</div>
 	
 
		<h4><a class="contact" href="#">Contact</a> - <a class="contact" href="mentions/index.html">Mentions légales</a></h4>
		
	<div style="color: #582900; font-weight: bold; font-style: italic; font-size: 16px;">		<?php




// Enregistrons les informations de date dans des variables

//echo date('d/m/y', time() )

$jour = date('d');
$mois = date('m');
$annee = date('Y');

$heure = date('H');
$minute = date('i');

echo '<br />
                                                       <b> Nous sommes le</b><b> ' . $jour . '/' . $mois . '/' . $annee . ' </b>et il est 
                                                       <b> ' . $heure. ' h ' . $minute; 
 ?>
	</div></div>

<!-- -------------------------------------------------FORMULAIRE DEVIS FIN --------- -->
		
		

		<!--<br/>
		<div id="map" class="col-sm-6">
		<iframe width="55%" height="350" frameborder="0" style="border: 1px solid black" src="http://www.openstreetmap.org/export/embed.html?bbox=1.8911880254745483%2C47.8920535963068%2C1.8982690572738647%2C47.89525482791994&layer=mapnik&marker=47.8936542368513%2C1.8947285413742065" marginwidth="0" marginheight="0" scrolling="no">
		</div>-->


	
<!-- ------------------------------------------------------------   *  JQ / JS CALLS (FROM TYPICAL BOOTSTRAP CODE) *  ------------------------------------------------------------ -->
	 

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    
   
    <script src="js/bootstrap.min.js"></script>

    </div>  <!-- -----------------------------------------DIV CONTAINER ------------------- -->
  </body>
</html>
