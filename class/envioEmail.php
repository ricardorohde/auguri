 <?php
            if ((!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest')) {
                
            	
            extract($_POST);
              //definindo  mensagem que vai ser enviado no e-mail
              $mensagem = "<strong>Nome:  </strong>".$name;
              $mensagem .= "<br> <strong>Assunto: </strong>".$subject;
              $mensagem .= "<br /> <strong>Telefone: </strong>".$phone;
              $mensagem .= "<br /> <strong>Operadora: </strong>".$operadora;
              $mensagem .= "<br> <strong>E-Mail: </strong>".$email;
              $mensagem .= "<br>  <strong>Mensagem: </strong> <br>".$message;

                //estanciando a classe phpMailer
                require("../phpmail/php_mailer/class.phpmailer.php");
                $mail = new PHPMailer;
                
                //definindo dados do servidor smtp
                $mail->IsSMTP(); //definindo que o enviou vai  ser smtp;
                $mail->Host = "xxxx";
                $mail->Port = 587;
                $mail->SMTPAuth = true;
                $mail->Username = 'xxxx';
                $mail->Password = 'xxxx';
                $mail->SMTPSecure = "TLS";
                //dados do e-mail
                $mail->Subject = "Contato - Auguri Residence";
                $mail->From = $email; 
                $mail->FromName = $name ;
                $mail->AddAddress('xxxxxxx');
                $mail->IsHTML(true); // Define que o e-mail será enviado como HTML
               $mail->Body =$mensagem;

                if ($mail->Send()) {
                    echo 'Mensagem <br />enviada com sucesso!';
                } else {
                    echo 'Mensagem não enviada,<br /> tente novamente!';
                }
            }
?>
