
Invalide_fields_on_page=  0;

$(document).on('blur','.identifiant-validation',function(){
	var content = $(this).val();
	var message = '';
	/*Vérifiez la ponctuation. Voir s'il y a une meilleure façon*/
	validArray = content.match(/^\w{10}$/i);
	var valid = true;

	if(content.length == 0){
		valid = false;
		Invalide_fields_on_page++;
		console.log("Entrez les champs ");
		message = "Entrez votre identifiant"; //made change
	}else if(validArray == null){
		valid = false;
		Invalide_fields_on_page++;
		console.log("Données incorrect !");
		message = "Invalide identifiant";//made change
		//console.log(InvalideArray);
	}else{
		// No errors!
	}

	$(this).closest('.form-body').siblings('.modal-footer').find('.message').html(message);
	if(valid){
	    $(this).css('border','');
	    $(this).attr('data-validation',true);
	    $(this).closest('.form-body').siblings('.modal-footer').find('.message').css('color','green');

  }else{
	    $(this).css('border','1px solid red');
	    $(this).attr('data-validation',false);
	    $(this).closest('.form-body').siblings('.modal-footer').find('.message').css('color','red');
  }
});
$(document).on('blur','.alphanum-validation',function(){
	//".form-group input[type='textbox']"
	var content = $(this).val();
	var message = '';
	/*Vérifiez la ponctuation. Voir s'il y a une meilleure façon*/
	InvalideArray = content.match(/[^0-9A-Za-z_ ]/g);
	var valid = true;

	if(content.length == 0){
		valid = false;
		Invalide_fields_on_page++;
		console.log("Entrez les champs ");
		message = "Entrez les champs";
	}else if(InvalideArray != null){
		valid = false;
		Invalide_fields_on_page++;
		console.log("Données incorrect !");
		console.log(InvalideArray);
		message = "Données incorrect !";
	}else{
		// No errors!
	}

	$(this).closest('.form-body').siblings('.modal-footer').find('.message').html(message);
	 if(valid){
    	 $(this).css('border','');
   		 $(this).attr('data-validation',true);
    	 $(this).closest('.form-body').siblings('.modal-footer').find('.message').css('color','green');
 	 }else{
	    $(this).css('border','1px solid red');
	    $(this).attr('data-validation',false);
        $(this).closest('.form-body').siblings('.modal-footer').find('.message').css('color','red');
  }
});

$(document).on('blur','.password-validation',function(){
	var content = $(this).val();
	var message = '';
	/*Vérifiez la ponctuation. Voir s'il y a une meilleure façon*/
	InvalideArray = content.match(/[^0-9A-Za-z_ ]/g);
	var valid = true;

	if(content.length == 0){
		valid = false;
		Invalide_fields_on_page++;
		console.log("Entrez les champs ");
		message = "Entrez les champs";
	}else if(InvalideArray != null){
		valid = false;
		Invalide_fields_on_page++;
		console.log("Entrez uniquement les alphabets, les chiffres et le trait de soulignement");
		console.log(InvalideArray);
		message = "Entrez uniquement les alphabets, les chiffres et le trait de soulignement";
	}else if(content.length < 8){
		valid = false;
		Invalide_fields_on_page++;
		console.log("Le mot de passe doit avoir au moins 8 caractères");
		message = "Le mot de passe doit avoir au moins 8 caractères";
	}else{
		// No errors!
	}

	$(this).closest('.form-body').siblings('.modal-footer').find('.message').html(message);

if(valid){
    $(this).css('border','');
    $(this).attr('data-validation',true);
    $(this).closest('.form-body').siblings('.modal-footer').find('.message').css('color','green');
  }else{
    	$(this).css('border','1px solid red');
    	$(this).attr('data-validation',false);
        $(this).closest('.form-body').siblings('.modal-footer').find('.message').css('color','red');
  }

});

$(document).on('blur','.password-confirmation',function(){
	var content = $(this).val();
	var password = $(this).parent().siblings().find('.password-validation').val();
	var message = '';
	
	InvalideArray = content.match(/[^0-9A-Za-z_ ]/g);
	var valid = true;

	/* Tout d'abord, vérifiez si le mot de passe entré dans le champ mot de passe est correct*/
	if(($(this).parent().siblings().find('.password-validation').attr('data-validation') != 'true')){
		valid = false;
		Invalide_fields_on_page++;
		console.log("Entrez d'abord un mot de passe correct");
		message = "Entrez d'abord un mot de passe correct";
	}else if(content.length == 0){
		valid = false;
		Invalide_fields_on_page++;
		console.log("Entrez les champs ");
		message = "Entrez les champs ";
	}else if(password.length == 0){
		/*Si rien n'est entré dans le champ mot de passe (redondant)*/
		valid = false;
		Invalide_fields_on_page++;
		console.log("Entrez le mot de passe premierement ");
		message = "Entrez le mot de passe premierement ";
	}else if(password != content){
		valid = false;
		Invalide_fields_on_page++;
		console.log("Les mots de passe ne correspondent pas");
		message = "Les mots de passe ne correspondent pas";
	}else{
		// No errors!
	}

		$(this).closest('.form-body').siblings('.modal-footer').find('.message').html(message);

	if(valid){
    $(this).css('border','');
    $(this).attr('data-validation',true);
        $(this).closest('.form-body').siblings('.modal-footer').find('.message').css('color','green');
  }else{
    $(this).css('border','1px solid red');
    $(this).attr('data-validation',false);
        $(this).closest('.form-body').siblings('.modal-footer').find('.message').css('color','red');
  }
});

$(document).on('blur','.email-validation',function(){
	var content = $(this).val();

	/*Check for punctuation. See if there is a better way*/
	InvalideArray = content.match(/[^0-9A-Za-z_@\. ]/g);
	var valid = true;

	if(content.length == 0){
		valid = false;
		Invalide_fields_on_page++;
		console.log("Entrez les champs ")
	}else if(InvalideArray != null){
		valid = false;
		Invalide_fields_on_page++;
		console.log("Entrez uniquement les alphabets, les chiffres, @ et le soulignement");
		console.log(InvalideArray);
	}else if(content.count("@") != 1){
		valid = false;
		Invalide_fields_on_page++;
		console.log("Entrez un mail  valid ");
		console.log(InvalideArray);
	}else{
		// No errors!
	}

	if(valid){
    $(this).css('border','');
    $(this).attr('data-validation',true);
  }else{
    $(this).css('border','1px solid red');
    $(this).attr('data-validation',false);
  }
});


$(document).on('click','.email-validation',function(){
		Invalide_fields_on_page=0;
	if($(this).siblings().find('.identifiant-validation').is(':hidden')){
		//$(this).siblings().find('.email-validation').trigger('blur');
		$(this).siblings().find('.alphanum-validation').trigger('blur');
	}else{
		$(this).siblings().find('.identifiant-validation').trigger('blur');
	}

	//$(this).siblings().find('.alphanum-validation').trigger('blur');
	$(this).siblings().find('.password-validation').trigger('blur');
	$(this).siblings().find('.password-confirmation').trigger('blur');
	if(Invalide_fields_on_page>0)
			return false;
	else
		return true;

});

/* If etudiant, ask for the identifiant, otherwise ask for email*/
$(document).on('change','.categorie select',function(){
	var categorie = $(this).val();
	if(categorie == 'etudiant'){
		$(this).parent().siblings('.identifiant').removeClass('is-hidden');
		$(this).parent().siblings('.email').addClass('is-hidden');
	}else{
		$(this).parent().siblings('.identifiant').addClass('is-hidden');
		$(this).parent().siblings('.email').removeClass('is-hidden');
	}
});


/* Afficher l'image sur le chargement complet
* Aussi, donnez-lui ce fondu cool en vigueur.
* La fonction :
- Affiche l'image Normalement, fullscren.
- Il estompe alors l'image
- Charge le formulaire de connexion
- charge le formulaire d'inscription après un petit retard
*/


var img = new Image();
var image_path = 'image/lens.jpg';

img.onload = function(){
      // image  has been loaded
      $("#background").hide();
      $("#background").css("background-image","url('"+image_path+"')");
      $('#background').fadeIn(1000,"swing");
      setTimeout(function(){
      		$('#background').addClass('background-image-blur');
      		setTimeout(function(){
      		$('#main-login').fadeTo(400,1);
      		$('#main-signup').fadeTo(400,1);

      		},900);

      },2500);
};
img.src = image_path;

$(document).on('click','.login-btn',function(){
	Invalide_fields_on_page = 0;
	var categorie = $(this).siblings('.categorie').find('select[name=categorie]').val();
	var identifiant = $(this).siblings('.identifiant').find('input[name=identifiant]').val();
	var email = $(this).siblings('.email').find('input[name=email]').val();
	var password = $(this).siblings('.password').find('input[name=password]').val();

	if(Invalide_fields_on_page == 0){

		$.post('login.php',{
			categorie:categorie,
			identifiant:identifiant,
			email:email,
			password:password
		},response);

		function response(res){
			console.log(res);
			var result = JSON.parse(res);
			console.log("message : " + result.message + result.success);
			$('#login-message').html(result.message);
			if(result.success){
				/*window.location=result.url;*/
				$('#login-message').css('color','green');
				$('#login-message').html(result.message);
			}else{
				$('#login-message').html(result.message);
				$('#login-message').css('color','red');
			}
			return ;	
		}

	}

});

$(document).on('click','.signup-btn',function(){
	var categorie = $(this).siblings('.categorie').find('select[name=categorie]').val();
	var identifiant = $(this).siblings('.identifiant').find('input[name=identifiant]').val();
	var email = $(this).siblings('.email').find('input[name=email]').val();
	var password = $(this).siblings('.password').find('input[name=password]').val();
	var password1 = $(this).siblings('.confirm-password').find('input[name=password1]').val();

	$.post('signup.php',{
		categorie:categorie,
		identifiant:identifiant,
		email:email,
		password:password,
		password1:password1
	},response);

	function response(res){
		//alert(res);
		var result = JSON.parse(res);
		//console.log("message : " + result.message + result.success);
		$('#signup-message').html(result.message);
		if(result.success){
			$('#signup-message').css('color','green');
		}else{
			$('#signup-message').css('color','red');
		}
		//$('#signup-message').html(result.message);
		return ;	
	}
});





