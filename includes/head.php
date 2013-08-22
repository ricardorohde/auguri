<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Auguri | Residence</title>
  <meta name="description" content=" FAZER ">
  <!-- <meta name="keywords" content="idealeabcd, apto no abc, imoveis no abc, imobiliarias no abc, ideale, imoveis, imovel, predio, residencial, casa, imoveisabc, imoveisabcd, LMG Imóveis, imobiliárias em São Bernardo do Campo, imóveis em São Bernardo do Campo, casas em São Bernardo do Campo, apartamentos em São Bernardo do Campo, sobrados em São Bernardo do Campo, terrenos em São Bernardo do Campo, galpões em São Bernardo do Campo, chácaras em São Bernardo do Campo, imobiliárias no ABC, imóveis no ABC, casas no ABC, apartamentos no ABC, sobrados no ABC, terrenos no ABC, galpões no ABC, chácaras no ABC, São Bernardo do Campo, Guia de imóveis ABC, Guia de Imóveis SP, SP, ABC, Guia de Imóveis, Imobiliária, Imóveis, Apartamento, Casa, Sobrado, Comércio, Comercial">
  <meta name="robots" content="index, follow" /> -->

  <!-- CSS files -->
  <link rel="stylesheet" href="css/reset.css" />
  <link rel="stylesheet" href="css/nivo-slider.css" />
  <link rel="stylesheet" href="css/prettyPhoto.css" />
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" type="text/css" media="all" href="css/jScrollPane.css" />

  <!-- JS files -->

  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/jquery-1.4.4.min.js"></script>
  <script type="text/javascript" src="js/jquery.mousewheel.js"></script>
  <script type="text/javascript" src="js/jScrollPane.js"></script>

  
  <script type="text/javascript" src="js/jquery.nivo.slider.pack.js"></script>
  <script type="text/javascript">
  $(window).load(function() {
    $('#slider').nivoSlider();
  });

</script><!--slider-->		


<script type="text/javascript">
$(document).ready(function(){
				// this initialises the demo scollpanes on the page.
				$('#pane1, #pane2, #pane3').jScrollPane();
			});

</script>


<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/jquery.nivo.slider.pack.js"></script>
<script type="text/javascript" src="js/jquery.tinycarousel.min.js"></script>
<script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>

<script type="text/javascript">

			//metodo para limpar a div de aviso de envio com sucesso
			$(document).ready(function() {
				$("#limpar").click(function(){
				$("#msg").html("");					
				});	
			});
            //metodo para chamar function php para enviar e-mail
            $(document).ready(function() {
                    $("#contact_form").submit(function(form) {
                        // Desabilita a função real do form, que seria mandar pra página 
                        form.preventDefault();
                        $("#carregando").show('slow');
                        //pegando valores que estavam nos input text
                         var parNome = $('#contact_name').val();
                        var parEmail = $('#contact_email').val();
                        var parSubject = $('#contact_subject').val();
                        var parMsg = $('#contact_message').val();
                        var parTel = $('#contact_phone').val();
                        var parOpr = $('#contact_oper').val();
                         //requisitando class e passando parametros
                         $.post("class/envioEmail.php", {name: parNome, email: parEmail, subject: parSubject, message: parMsg, phone: parTel, operadora: parOpr },                               
                        //pegando o retorno da class de envio de email
                        function(data){
                            if(data){
                              //colocando texto retornado no codigo php na div reposta
                             $("#carregando").hide();
                             $("#msg").html(data);
                            }
                         }
                         , "html");
                    });
                });
        </script>


</head>
