 <?php
 include_once 'menu.php';
 include_once 'assets/php/classes/classEstoques.php';

$classEstoques= new classEstoques();





    if(isset($_POST['delete'])){

         $classEstoques->setId($_POST['id1']);

        if($classEstoques->delete() == 1){
            $result = "Estoque excluido com sucesso!";
        }else{
            $error = "Erro ao excluir";
        }

    }

    if(isset($_POST['edit'])){
        $classEstoques->setId($_POST['id1']);
         $classEstoques->setQuantidade($_POST['quantidade']);
                  $classEstoques->setProdutos_Id($_POST['produtos_id']);




    if($classEstoques->edit() == 1){
        $result = "Procedimento editado com sucesso!";
    }else{
        $error = "Erro ao editar";
    }

}


        if(isset($_GET['serch1'])){
             $stmt = $classEstoques->pesquisa($_GET['serch1']);
        }else{
            $stmt = $classEstoques->index();
           
        }
        
        
  
 ?>



 <div id="main" class="container-fluid" style="margin-top: 50px">
 
    <div id="top" class="row">
        <div class="col-sm-3">
            <h2>Estoque de Produtos</h2>
        </div>
        <div class="col-sm-6">
            
           <!--  <div class="input-group h2">
                <input name="data[search]" class="form-control" id="search" type="text" placeholder="Pesquisar Itens">
                <span class="input-group-btn">
                    <button class="btn btn-primary" type="submit">
                        <span class="glyphicon glyphicon-search"></span>
                    </button>
                </span>
            </div> -->
            <div class="input-group">
                    <div class="input-group-btn">
                                </div>
                                <input type="text" id="input1-group2" name="input1-group2" placeholder="Pesquisar" class="form-control">
                                <button class="btn btn-primary">
                                    <i class="fa fa-search"></i>
                                  </button>
                              </div>


        </div>
                <div class="col-sm-3">
            <a href="adicionarestoque.php" class="btn btn-primary pull-right h2">Novo Item</a>
        </div>
    </div> <!-- /#top -->
 
 
    <hr />
    <div id="list" class="row">
    
    <div class="table-responsive col-md-12">
                <table class="table table-striped" cellspacing="0" cellpadding="0">
            <thead>
                <tr>
                    <th>Quantidade</th>                    
                    <th>ID do Produto</th>
                    
                    <th class="actions">Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $stmt = $classEstoques->index();
                 while($row = $stmt->fetch(PDO::FETCH_OBJ)){
                  ?>
                <tr>
                    <td><?php echo $row->quantidade ?></td>
                    
                    <td><?php echo $row->produtos_id ?></td>
                    
                    <td class="actions">
                        <a class="btn btn-warning btn-xs" href="editarestoque.php?id=<?php echo $row->id ?>">Editar</a>
                        <a class="btn btn-danger btn-xs"  href="excluirestoque.php?id=<?php echo $row->id ?>">Excluir</a>
                    </td>
                       <?php } ?>
                </tr>
                
            </tbody>
        </table>
    </div>
    
    </div> <!-- /#list -->
 </div> <!-- /#main -->

<!-- Modal -->
<div class="modal fade" id="delete-modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
      	<h4 class="modal-title" id="modalLabel">Excluir Item</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        Deseja realmente excluir este item?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Sim</button>
    <button type="button" class="btn btn-default" data-dismiss="modal">N&atilde;o</button>
      </div>
    </div>
  </div>
</div>
<script type="application/javascript">
                var active = document.getElementById("estoque");
                active.classList.add("active");
 </script>

<?php 
require_once 'footer.php';
?>