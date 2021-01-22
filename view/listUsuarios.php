<?php require_once("layout/header.php");
   
?>



<div class='tableUsuarios'>
<h1>Usuários e grupos</h1>
<table border="3">
    <thead>

    </thead>
    <tbody>
  <?php while($usuario=$usuarios->lista->fetch_object()):?>
  

  <tr> <td> <?php echo $usuario->nm_usuario;?> </td> <td> <?php echo $usuario->nm_grupo;?> </td></tr>
  
  <?php endwhile; ?>
  </tbody>
</table>

</div>





<?php require_once("layout/footer.php") ?>