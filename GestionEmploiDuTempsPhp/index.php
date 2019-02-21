<!DOCTYPE html>
<?php 
/*
* Supplémentaire :
- Nous pourrions avoir besoin de faire référence au bootstrap en utilisant // plutôt que d'être spécifique au protocole (http / https)
* - Voir ce lien pour plus d'informations: https://blog.httpwatch.com/2010/02/10/using-protocol-relative-urls-to-switch-between-http-and-https/
* 
*/
?>
<html lang="fr">
<head>
	<!--Les balises META servent à placer des métadonnées (metadata) dans une page HTML. On placera ces informations dans l’élément head, et elles ne seront pas affichées sur la page. -->
	<meta charset="UTF-8"/>
	<meta name="keywords" content="HTML,CSS,JavaScript,PHP,Sqlite3"/>
	<meta name="description" content="Page de connexion pour l'évaluation des usagers "/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="auteur" content="Ouahab FENNICHE,Benjamin REIPRICH"/>

	<!-- Derniers CSS compilés et minifiés -->
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"> 
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script> 
	<!-- Dernier JavaScript compilé -->
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<script src="js/login.js"></script>
	
	<!-- http://smallenvelop.com/display-loading-icon-page-loads-completely/ -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="style.css"> 
	
	<style type="text/css">

/* Collez ce fichier css dans votre fichier de feuille de style ou sous votre tag * /
/* Cela ne fonctionne qu'avec JavaScript,
si ce n'est pas le cas, n'affichez pas loader */
.no-js #loader { display: none;  }
.js #loader { display: block; position: absolute; left: 100px; top: 0; }
.se-pre-con {
	position: fixed;
	left: 0px;
	top: 0px;
	width: 100%;
	height: 100%;
	z-index: 9999;
	background: url(image/Preloader_2.gif) center no-repeat #fff;
}


/*Base Style*/
footer{
	bottom:0px;
	left:0px;
	width:100%;
	line-height: 35px;
	text-align: center;
	font-weight: bold;
	background-color: #CCC;
}

/* Définir l'image d'arrière-plan*/

#background{
position: fixed;
top: 0;
left: 0;
width: 9000px;
	height: 100%;
 background: url('image/Lens.jpg') ;
  background-repeat: no-repeat;
  background-position:center;
  background-attachment: fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  z-index: -1;
 }

 .background-image-blur{
 	-webkit-filter: blur(45px);   /*blur=flou*/
    -moz-filter: blur(45px);
    -o-filter: blur(45px);
    -ms-filter: blur(45px);
    filter: blur(45px);

    -webkit-transition: all 2s ease-out;
    -moz-transition: all 2s ease-out;
    -o-transition: all 2s ease-out;
    -ms-transition: all 2s ease-out;

    transition: all 2s ease-out;
 }


/* Pour donner le dégradé à l'image de fond dans "#background" */

/*.FadeAway{
    position: absolute; top:0px; left:0px; width:100%; height:100%;
        background:transparent;
        background: linear-gradient(top, rgba( 255, 255, 255, 255 ) 0%, rgba( 255, 255, 255, 1 ) 100% );
        background: -moz-linear-gradient(top, rgba( 255, 255, 255, 0) 0%, rgba( 255, 255, 255, 1 ) 100% );
        background: -ms-linear-gradient(top, rgba( 255, 255, 255, 0 ) 0%, rgba( 255, 255, 255, 1 ) 100% );
        background: -o-linear-gradient( top, rgba( 255, 255, 255, 0 ) 0%, rgba( 255, 255, 255, 1 ) 100% );
        background: -webkit-linear-gradient( top, rgba( 255, 255, 255, 0 ) 0%, rgba( 255, 255, 255, 1 ) 100% );
        -ms-filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#550000FF, endColorstr=#550000FF);
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#00ffffff, endColorstr=#ffffffff);

}*/

#header{
	width:100%;
	/*height:100px;*/
}

	.desktop-header{
		height: 100px;
	}

	.mobile-header{
		height: 0px;
	}


	#header-text h3{
		text-align: center;
		font-size: 30px;
	}

	#header-text p{
		text-align: center;
		font-size:20px;
	}

.form-body{
    margin:25px;
}

.form-top-right{
	width : 25%;
	float:left;
	font-size: 66px;
}
.form-top-left{
	width : 75%;
	float:left;
}

.form-element{
	display: inline;
	width:100%;
}
	button.form-element{
		margin-bottom: 20px;
	}

.module-form{
	/*border:1px solid blue;*/
	background-color: #ECF0F1;
	display: inline-block;
    vertical-align: middle;
    padding-left: 0px;
    padding-right: 0px;
    opacity: 0;	/*Nous allons animer cela */
}
	.module-heading{
		margin:20px 0px;
	}


@media (min-width:768px){


	.middle-border {
	    min-height: 300px;
	    margin-top: 100px;
	    border-right: 1px solid #000;
	    border-right: 1px solid rgba(0, 0, 0, 0.6);
	}

	.mobile{
		display: none;
	}

	.desktop{
		display: inline;
	}

	.glyphicon-validation{
		font-size:15px;
		margin: 7px;
	}

}
@media (max-width:767px){


	.middle-border {
	    min-height: auto;
	    margin: 65px 30px 0 30px;
	    border-right: 0;
	}

	.mobile{
		display: inline;
		margin:20px 0px;
	}

	.desktop{
		display: none;
	}

	.glyphicon-validation{
		font-size:10px;
		margin: 7px;
	}
}

/* Juste pour enlever le remplissage par défaut de bootstrap's col - * - *
* en ont surtout besoin pour le titre-forme */

/*#main-login{
	padding-left:0px;
	padding-right: 0px;
}*/

.form-header{
	width:100%;
	padding: 30px;
}

.multi-form-wrapper{
	/*margin-bottom:20px;*/
}

</style>

<script type="text/javascript">
	$(window).load(function() {
		// Animer le chargement hors écran
		$(".se-pre-con").fadeOut("slow");;
	});
</script>
</head>
<body>
	<div id="background"></div>
	<div id="header"> </div>

	<div class="container multi-form-wrapper">
		 <div class="form-container row">
			<div id="main-login" class="module-form  col-xs-12 col-sm-5 col-md-5 col-lg-5">
			


      <div class="form-content">
        <div class="form-header background-dark-green white">
        	<div class="form-top-left">
		          <h3>S'identifier</h3>
		          <p> Voir votre emplois du temps </p>
		      </div>
		      <div class="form-top-right">
		      		<span class="glyphicon glyphicon-lock"></span>
		      </div>
		      <br style="clear:both"/>
        </div>
        <div class="form-body">
			<form role="form">
          	<div class="form-group category">
              <label for="category"> <span class="glyphicon glyphicon-user"></span> </span> Se connecter en tant que </label>
				<select  class="form-control form-element" name='category'>
					<option class='drop-down' value='Etudiant'> Etudiant </option>			
					<option class='drop-down' value='Enseignant'> Enseignant </option>			
					<option class='drop-down' value='Administrateur'> Administrateur </option>			
				</select>
			</div>
            <div class="form-group Identifiant">
              <label for="Identifiant"> <span class="glyphicon glyphicon-user"> </span> Identifiant</label>
        	  <input type="textbox" class="form-control form-element" name="Identifiant" placeholder="Identifiant">
            </div>

            <div class="form-group is-hidden email">
              <label for="Email"> <span class="glyphicon glyphicon-user"> </span> Email</label>
        	  <input type="textbox" class="form-control form-element" name="email" placeholder="Email">
            </div>

            <div class="form-group password">
              <label for="password"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
			  <input type="password" class="form-control form-element" name="password" placeholder="Password">
            </div>
            <br>
			<button type="button" class="btn btn-default btn-success btn-block submit-btn login-btn"><span class="glyphicon glyphicon-lock"></span>&nbsp; Se connecter</button>
          </form>
        </div>
        <div class="modal-footer">
          <!-- Message from serverside (basanth)-->
          <div class="pull-left message" id="login-message"></div>
           <p>mot de passe <a id="forgot-password" href="#">Oublier?</a></p><br>
        </div>
      </div>

		</div>

	 	<div class="col-sm-1"></div>
	 	<div class="col-sm-1 "></div>
		<div id="main-signup" class="module-form col-xs-12 col-sm-5 col-md-5 col-lg-5">
		

 	<div class="form-content">
        <div class="form-header background-maroon white">
        	<div class="form-top-left">
		          <h3>S'inscrire</h3>
		          <p> S'inscrire pour acceder au emplois du temps </p>
		      </div>
		      <div class="form-top-right">
		      		<span class="glyphicon glyphicon-pencil"></span>
		      </div>
		      <br style="clear:both"/>
        </div>

        <div class="form-body">
			<form role="form">
          	<div class="form-group category">
              <label for="category"> <span class="glyphicon glyphicon-user"></span> </span> S'inscrire en tant que : </label>
				<select  class="form-control form-element" name='category'>
					<option class='drop-down' value='Etudiant'> Etudiant </option>			
					<option class='drop-down' value='Enseignant'> Enseignant </option>						
					<option class='drop-down' value='Administrateur'> Administrateur </option>			
				</select>
			</div>
            <div class="form-group identifiant">
              <label for="Identifiant"> <span class="glyphicon glyphicon-user"> </span> Identifiant </label>
        	  <input type="textbox" class="form-control usn-validation form-element" name="identifiant" placeholder="Identifiant">
            </div>


            <div class="form-group niveau_etudes">
              <label for="Niveau_etudes"> <span class="glyphicon glyphicon-user"> </span> Niveau d'études </label>
        	  <select type="text" class="form-control usn-validation form-element" name="niveau_etudes" placeholder="Niveau_etudes"> <option> L1 </option> <option>L2</option> <option>L3</option> <option>M1</option> <option>M2</option> </select>
            </div>


             <div class="form-group is-hidden email">
              <label for="Email"> <span class="glyphicon glyphicon-user"> </span> Email</label>
        	  <input type="textbox" class="form-control form-element" name="email" placeholder="Email">
            </div>

            <div class="form-group password">
              <label for="password"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
			  <input  type="password" class="form-control password-validation form-element" name="password" placeholder="Password" data-validation="false">
            </div>


            <div class="form-group confirm-password">
              <label for="confirm-password"><span class="glyphicon glyphicon-eye-open"></span> Confirm Password</label>
			  <input  type="password" class="form-control password-confirmation form-element" name="password1" placeholder="Confirm Password" data-validation="false">
            </div>
            <br>
            <button type="button" class="btn btn-default btn-danger btn-block submit-btn signup-btn"><span class="glyphicon glyphicon-pencil"></span>&nbsp; S'inscrire </button>
			<!--<input type="submit" class="submit-btn btn btn-primary btn-danger form-element" value="S'inscrire"> -->
          </form>
        </div>
        <div class="modal-footer">

          <!-- Message from serverside (basanth)-->
          <div class="message pull-left" id="message_inscription"></div>
        </div>
      </div>

		</div>
	</div> 



	</div>



 <!-- Modal -->
  <div class="modal fade" id="forgot-password-modal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header background-green" style="padding:35px 50px;color:white;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4><span class="glyphicon glyphicon-lock"></span> Mot de passe Oublier </h4>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
          <form role="form">
            <div class="form-group">
              <label for="identifiant"><span class="glyphicon glyphicon-user"></span> Identifiant </label>
              <input type="text" class="form-control" id="identifiant" placeholder="Entrez votre identifiant">
            </div>

            <div class="form-group">
              <label for="mail"><span class="glyphicon glyphicon-user"></span> Email </label>
              <input type="text" class="form-control" id="mail" placeholder="Entrez votre email">
            </div>            
            
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Nouveau mot de passe</label>
              <input type="password" class="form-control password-validation" id="new-password" placeholder="Entrez un nouveau mot de passe">
            </div>
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Confirmer mot de passe </label>
              <input type="password" class="form-control confirm-password-validation" id="confirm-new-password" placeholder="Confirmer le nouveau mot de passe">
            </div>
              <button type="button" id="send-email-confirmation-button" class="btn btn-success btn-block"> <span class="glyphicon glyphicon-envelope"></span> &nbsp;M'envoyer un email de confirmation</button>
          </form>
        </div>
        <div class="modal-footer">
          <p id="forgot-password-message"></p>
        </div> 
      </div>
      
    </div>
  </div> 



</body>
<div class="se-pre-con"></div>
<script type="text/javascript">
function headerAdjustment(){
	if(window.innerWidth > 767){
		$('#header').addClass('desktop-header').removeClass('mobile-header');
	}else{
		$('#header').addClass('mobile-header').removeClass('desktop-header');
	}
}

$(window).on('load resize',function(){
	headerAdjustment();
});

$("#forgot-password").click(function(){
    $("#forgot-password-modal").modal();
});

$('#send-email-confirmation-button').on('click',function(){
	invalid_fields_on_page =  0;
	$('#new-password').trigger('blur');
	$('#confirm-new-password').trigger('blur');
	
	var email = $('#usrname').val();
	var new_password = $('#new-password').val();
	var confirm_new_password = $('#confirm-new-password').val();
	
	if(invalid_fields_on_page == 0){
	   //Change password in database
	   $.post("forgot-password.php",{new_password:new_password,email:email,confirm_new_password:confirm_new_password},response);
	   
	   function response(res){
	   	console.log(res);
	   	var obj = JSON.parse(res);
	   	if(obj.success == true){
	   		$('#forgot-password-message').css('color','green');
	   		$('#forgot-password-message').text(obj.message);
	   	}else{
	   		$('#forgot-password-message').css('color','red');
	   		$('#forgot-password-message').text(obj.message);
	   	}
	   }
	}
	
	
});
</script>
</html>
<!-- jQuery library -->s
