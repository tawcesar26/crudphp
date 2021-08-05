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

     echo form_open('pagina/cadastro');

      ?>
        <form action="">
          <div class="form-row">
               <div class="form-group col-md-6">
                     <label for="email">Email</label>
                     <input type="email" class="form-control" id="email" placeholder="Email">
               </div>
               <div class="form-group col-md-4">
                     <label for="dtnascimento">Data de Nascimento</label>
                    <input type="date" class="form-control" id="dtnascimento" placeholder="">
               </div>
               <div class="form-group">
                  <label for="senha">Senha</label>
                  <input type="password" class="form-control" id="senha" placeholder="Senha">
               </div>
         </div>
      
      <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>

    <!-------------------FORMULARIO-------------------------->
   </div>
</div>




</body>
</html>