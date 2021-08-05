<!DOCTYPE html>
<!--
	 by TEMPLATE STOCK
	templatestock.co @templatestock
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->

<html lang="pt-br">
<head>
   <!-- Meta Data -->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title><?php echo $titulo ?></title>
   <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

   <!-- Stlylesheet -->
   <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>" type="text/css" />
   <link rel="stylesheet" href="<?php echo base_url('assets/js/bootstrap.min.js') ?>" type="text/css" />



</head>
<body>

<div class="card">
      <div class="card-header">
        <a href="<?php echo base_url(''); ?>"> <button type="button" class="btn btn-primary">Pagina Inicial</button></a>

      </div>

      <div class="card-body">
        <h5 class="card-title">Cadastro de Cliente</h5>

     <!-------------------FORMULARIO-------------------------->    
    
     <?php 

        if($formerror){
            echo '<p>'. $formerror .'</p>'; 
        }
    ?>
    <div class="form-row">
     <?php   
        echo form_open('pagina/cadastro');
        echo form_label('Nome: ', 'nome');
        echo form_input('nome', set_value('nome'));
        echo form_label('E-mail: ', 'email');
        echo form_input('email',set_value('email'));
        echo form_label('Senha: ', 'password');
        echo form_input('senha',set_value('senha'));
        echo form_submit('enviar','Enviar mensagem >>', array('class' => 'botao'));
        echo form_close();


    ?>
    </div>
        <!--<form action="<?php echo base_url('cadastro'); ?>" method="post">
          <div class="form-row">

                  
            <input type="text" class="form-control" id="nome" name="nome" >
         
               <div class="form-group col-md-6">
                    
                     <input type="email" class="form-control" id="email" >
               </div>
               <div class="form-group col-md-4">
                    
                    <input type="date" class="form-control" id="dtnascimento">
               </div>
               <div class="form-group">
                 
                  <input type="password" class="form-control" id="senha" >
               </div>
         </div>
      
      <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>-->

    <!-------------------FORMULARIO-------------------------->
   </div>
</div>




</body>
</html>