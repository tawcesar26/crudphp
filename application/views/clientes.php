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
   <div class="card-header">
        <a href="<?php echo base_url(''); ?>"> <button type="button" class="btn btn-primary">Pagina Inicial</button></a>
      </div>


  <div class="card"><br>
<h5 class="card-title">Lista de Clientes</h5>
   <table class="table table-striped">
     <thead>
       <tr>
         <th scope="col">#</th>
         <th scope="col">Primeiro</th>
         <th scope="col">Último</th>
         <th scope="col">Nickname</th>
      </tr>
   </thead>
   <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
   </tr>
   <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
   </tr>
   <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
   </tr>
   </tbody>
   </table>
</div>


</body>
</html>