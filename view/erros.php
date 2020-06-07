<?php
    
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 


	if(isset($_SESSION['usuario_existe']) ){ ?>
		<p>USUÁRIO JÁ CADASTRADO</p>
	<?php }
	unset($_SESSION['usuario_existe']);
	

	if (isset($_SESSION['email_ja_cadastrado'])){ ?>
		<p>EMAIL JÁ CADASTRADO</p>
	<?php }
	unset($_SESSION['email_ja_cadastrado']);

    if (isset($_SESSION['usuariosenhaerro'])){ ?>
        <p>INSIRA SEU NOME DE USUÁRIO E SUA SENHA</p>
        <?php }
    unset($_SESSION['usuariosenhaerro']);


    if (isset($_SESSION['emailvazio'])){ ?>
        <p>INSIRA UM EMAIL VÁLIDO</p>
        <?php }
    unset($_SESSION['emailvazio']);


    if (isset($_SESSION['usuariovazio'])){ ?>
        <p>INSIRA UM NOME DE USUÁRIO</p>
        <?php }
    unset($_SESSION['usuariovazio']);


    if (isset($_SESSION['senhavazio'])){ ?>
        <p>INSIRA UMA SENHA VÁLIDA</p>
        <?php  }
    unset($_SESSION['senhavazio']);


    if (isset($_SESSION['senhasdif'])){ ?>
        <p>SENHAS NÃO CORRESPONDENTES</p>
        <?php  }
    unset($_SESSION['senhasdif']); 

    if (isset($_SESSION['confirmar_email'])){ ?>
        <p>UM LINK DE CONFIRMAÇÃO FOI ENVIADO PARA SEU EMAIL</p>
        <?php  }
    unset($_SESSION['confirmar_email']);

    if (isset($_SESSION['erro_confirmar_email'])){ ?>
        <p>ERRO AO ENVIAR EMAIL DE CONFIRMAÇÃO</p>
        <?php  }
    unset($_SESSION['erro_confirmar_email']);

    /*if (isset($_SESSION['status_cadastro'])){ ?>
        <p>Cadastro efetuado com sucesso</p>
        <?php }
    unset($_SESSION['status_cadastro']);
*/
?>