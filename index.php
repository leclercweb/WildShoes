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
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    
   
    <script src="js/bootstrap.min.js"></script>

   
    
    
    
    
   			 <style type="text/css">
   			 
   			 	
   			 	body {
   			 		cursor: url("ch.png"), pointer;
   			 	}
   			 	hr {
   			 	color: #AE8964;
   			 	font-size: 60px;
   			 	}
   			 
   			 	@font-face { 
  					font-family: 'caviar'; 
					  src: url('police/CaviarDreams.ttf'); 
					}					

				#caviar{
					  font-family: 'caviar', Georgia, serif;
					}

   			 	.fond {
	   			 	background-image: url('images/wildshoes-orleans.jpg');
	   			 	background-size: cover;
	   			 	opacity: 0.8;
   			 	       }
   				  button, input, select, textarea {
    				 	font-family: inherit;
    					font-style: italic;
   				 	font-size: inherit;
   					line-height: inherit;
   				 	color: #582900;
   				 	font-weight: bold;
    								 }
    				.btn:focus {
    					background-color: #582900;
    								 }
    				.btn-primary:focus {
    					background-color: #582900;
    								 }				 
    								
				 .modal-open {
    					background-color: #582900;   /*changement couleur de fond  louveture modal*/
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



    			</style>


  </head>










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
    		
     		  			 <ul id="caviar" class="nav navbar-nav">
       						 <!-- <li class="active"><a href="#">Wildshoes<span class="sr-only">(current)</span></a></li> -->
       						 <li><a href="#savoir">Savoir-faire</a></li>
       			 			<li><a href="#chausse">Chausse-pieds</a></li>
        					 <li><a href="#tire">Tire-bottes</a></li>
        					 <li><a href="#devis">Sur-mesure</a></li>
      		  			 </ul>
      		  			 
		</div><!-- /.navbar-collapse -->
  	</div><!-- /.container-fluid -->
</nav>

<!-- -------------------------------------------------------------------------------- VISUEL HOME -------------------------------------------------------------------------------- -->



 

	
	<div id="visuel-top" class="container"> 
 	   		<div class="jumbotron fond">
 	   		<h1 id="caviar" style="color: white; font-weight: bold; text-align: center;">Nous sommes leaders depuis 89 ans</h1>
 	   		<p style="text-align: center;"><a style="background-color: white; color: #582900; font-weight: bold;" class="btn btn-primary btn-lg" href="#" role="button">Voir nos produits</a></p>
		<!-- <img   src="images/wildshoes-orleans.jpg" class="col-md-12 col-sm-12 col-xs-12"> -->
	 		</div>
	</div> 


	
	
	
	
	
	
	
	
	
	
	
	
	

<!-- -------------------------------------------------------------------------------- SAVOIR-FAIRE -------------------------------------------------------------------------------- -->




<div id="process" class="container">
<p>Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un peintre anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n'a pas fait que survivre cinq siècles, mais s'est aussi adapté à la bureautique informatique, sans que son contenu n'en soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.</p>
</div>

	
	
	
	
	
	
	
	
	
	
<!-- -------------------------------------------------------------------------------- PRODUITS 1/3 = CHAUSSE-PIEDS -------------------------------------------------------------------------------- -->

	<div id="products1" class="container" style="margin-top: 55px;">
		<div id="chausse" class="row">
  			<div class="col-sm-12 col-md-6 col-lg-3 ">
    				<div class="thumbnail">
      					<img src="images/chausse_pied_bois.jpg" alt="...">
      					<div  class="caption">
       			 <h3>Wild Bois</h3>
        			<p>Ce produit est authentiquement fait main ;)</p>

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
				<p><a href="#" class="btn btn-primary" role="button">Plus d'infos</a> </p>
      					</div>
    				</div>
 			 </div>


  			<div class="col-sm-12 col-md-6 col-lg-3">
    				<div class="thumbnail">
      					<img src="images/chausse_pied_telescopique.jpg" alt="...">
      					<div class="caption">
       			 <h3>Wild Plus</h3>
        			<p>Ce produit est authentiquement fait main ;)</p>
       				<p><a href="#" class="btn btn-primary" role="button">Plus d'infos</a> </p>
      					</div>
    				</div>
 			 </div>

  			

		

		</div>

	</div>









<!-- -------------------------------------------------------------------------------- VISUEL SEPARATION -------------------------------------------------------------------------------- -->








				
			<div id="layer1" class="container">
			
				<div style="margin-left: 0px;" id="visuel-mid" >				
				
		<img src="images/chaussure.jpg" class="col-sm-6 col-xs-6 col-md-6 col-lg-6" >
		
		
	
				</div>
				
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
       			<p><a href="#" rel="popup_name"  class="btn btn-primary poplight" role="button">Plus d'infos</a></p>
  
      					</div>
    				</div>
 			 </div>

  			<div class="col-sm-12 col-md-6 col-lg-4">
    				<div class="thumbnail">
      					<img src="images/tirebotte_metal.jpg" alt="...">
      					<div class="caption">
       			 <h3>Wild Corne</h3>
        			<p>Ce produit est authentiquement fait main ;)</p>

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

 	<div class="container">
 	
   


<div style="text-align: center;">
<button style="text-align: center; font-size: 17px;"class="btn btn-primary btn-lg " data-toggle="modal" data-target="#myModal">
  Nous sommes présents sur Orléans !<br />
  Pour nous contacter, cliquez !
</button>
</div>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Si vous avez une question, n'hésitez pas à remplir le formulaire</h4>
      </div>
      <div class="modal-body">
      
      
      
      
 
      </div>
      
      
      
      
     
      
      
      
 <!--  -----------  FORMULAIRE ------------------------------------------------------------------------------------- -->
 
 
 
 
        <form class="form-horizontal">
<fieldset>

<!-- Form Name -->
<legend>Formulaire de contact</legend>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="textarea">Votre message</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="textarea" name="textarea" placeholder="Ecrivez votre message..."></textarea> <br />
    <tr style="text-align: center;">
				
<td colspan="3"><input type="submit" name="envoyer"  class="" value="Envoyer" onclick="show_alert();"></td>
    </tr>
  </div>
</div>

</fieldset>
</form>


<!--  -----------------------FIN FORMULAIRE CONTACT ------------------------------------------------------------------ -->






      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
        
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
<br />





<!-- --------------------------------------------------------------------------------  FIN POPUP ------- -->





 	<div class="container">
 	
 	
 	
<!-- ----------------------- FORMULAIRE DEVIS  --------------------------------------------------------- -->
 	
 	
 	
 	
 	<div style="margin: auto;" class="jumbotron" id="devis">
 	
 	
 	
 	
<script>
function show_alert() {
   alert("Ceci est un formulaire fictif ;-)");
}
</script>




		<form action="" method="" style="text-align: center;"> 
		<h2 id="caviar" style="color: #582900; padding-bottom: 30px; font-weight: bold;">N'hésitez pas à remplir le formulaire ci dessous si vous souhaitez personnaliser votre chausse-pied.</h2> 
		
		 
			<table style="width: 100%;">

				<tr>
					<td style="margin:0 5px; width:80px;"><label>Nom : </label></td>
					<td colspan="2" style="margin:0 5px;"><input type="text" placeholder="entrez votre nom" name="nom" style="width:100%;" class="" value=""></td>
				</tr>



				<tr>		
					<td  style="margin:0 5px;"><label>Prénom : </label></td>
					
					<td colspan="2" style="margin:0 5px;">
		<input type="text" placeholder="entrez votre prenom" name="prenom" style="width:100%;" class="" value="">
					</td>
				</tr>
				

				<tr>
					
					<td style="margin:0 5px;"><label>Numéro : </label></td>
					
					<td colspan="2"  style="margin:0 5px;">
					
		<input type="number" placeholder="entrez votre numero" name="numero" style="width:100%;" class="" value="">
					</td>
				</tr>

				<tr>
					<td style="margin:0 5px; width:80px;"><label>Votre mail : </label></td>
					<td colspan="3"><input type="text" placeholder="entrez votre email" name="email" style="width:100%;" class="" value=""></td>
				</tr>
				
				
				<tr>
				<td style="margin:0 5px; width:auto;"><label>Date du jour : </label></td>
				<td><input style="width: 100%;" type="date" name="anniversaire"></td>
				</tr>  
				
				
				<tr>
					<td style="margin:0 5px;width:80px;"><label>Type de chausse-pieds : </label></td>
					<td colspan="3">
		<textarea style="width: 100%; height: 100px; resize:none;" placeholder="Veuillez décrire votre demande avec précision, taille, matériaux, message, logo..." name="message" ></textarea>
					</td>
				</tr>
				
				
				<tr>
				
					<td colspan="3" style=""><input class="btn btn-primary" type="submit" name="envoyer" style="" class="" value="Envoyer" onclick="show_alert();"></td>
				</tr>
			
				
				
			</table>
		</form>
		
<iframe style="padding-top: 20px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d5350.383611119946!2d1.8903332624267581!3d47.89397277626705!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e4e525b46c0b37%3A0x279b61e0d94376ed!2sAvenue+du+Champ+de+Mars%2C+45100+Orl%C3%A9ans!5e0!3m2!1sfr!2sfr!4v1473953425560" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
	
	
	
	
	</div>
	
	

	
	

		
		
		
<!-- ------------------------------------------------------------------------FOOTER-------------------------------------- -->


 	<center>
		<div id="footer" class="col-lg-12">
 	
		 	<div style="float-right; padding-top: 15px;">
		 		<img src="google.png">
		 		<img src="linkedin.png">
		 		<img src="facebook.png">
		 		<img src="twitter.png">
		 		<img src="youtube.png">
 	
 	
<h4><a class="contact"  href="#">Contact</a> - <a class="contact" href="mentions/index.html">Mentions légales</a></h4>
			
			</div>

		</div>			
		
	</center>	



		
</div>  


<!-- -----------------------------------------DIV CONTAINER FIN ---------------------------------------------------------- -->
		
	
		
		   
 


  </body>
</html>
