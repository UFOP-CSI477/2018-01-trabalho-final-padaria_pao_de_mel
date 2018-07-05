 <?php
 include_once 'menu.php';
include_once 'assets/php/classes/classProduto.php';
    
        $classProduto= new classProduto();




    if(isset($_POST['delete'])){

         $classProduto->setId($_POST['id1']);

        if($classProduto->delete() == 1){
            $result = "Procedimento excluido com sucesso!";
        }else{
            $error = "Erro ao excluir";
        }

    }

    if(isset($_POST['edit'])){
        $classProduto->setId($_POST['id1']);
         $classProduto->setNome($_POST['nome']);
         $classProduto->setDescricao($_POST['descricao']);
         $classProduto->setQuantidade($_POST['quantidade']);
         $classProduto->setPreco($_POST['preco']);



    if($classProduto->edit() == 1){
        $result = "Procedimento editado com sucesso!";
    }else{
        $error = "Erro ao editar";
    }

}


        if(isset($_GET['serch1'])){
             $stmt = $classProduto->pesquisa($_GET['serch1']);
        }else{
            $stmt = $classProduto->index();
           
        }
        
        
  
 ?>


 <div id="main" class="container-fluid" style="margin-top: 50px">
 
    <div id="top" class="row">
        <div class="col-sm-3">
            <h2>Produtos</h2>
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
                                <input type="text" id="input1-group2" name="search1" placeholder="Pesquisar" class="form-control">
                                <button class="btn btn-primary">
                                    <i class="fa fa-search"></i>
                                  </button>
                              </div>
        </div>
        <div class="col-sm-3">
            <a href="adicionarproduto.php" class="btn btn-primary pull-right h2">Novo Item</a>
        </div>
    </div> <!-- /#top -->
 
 
    <hr />
    <div id="list" class="row">
    
    <div class="table-responsive col-md-12">
        <table class="table table-striped" cellspacing="0" cellpadding="0">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Descrição</th>
                    <th>Quantidade</th>
                    <th>Preço (R$)</th>
                    <th class="actions">Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $stmt = $classProduto->index();
                 while($row = $stmt->fetch(PDO::FETCH_OBJ)){
                  ?>
                <tr>
                    <td class="nome"><?php echo $row->id ?></td>

                    <td class="nome"><?php echo $row->nome ?></td>
                    <td class="descricao"><?php echo $row->descricao ?></td>
                    <td class="quantidade"><?php echo $row->quantidade ?></td>
                    <td class="preco"><?php echo $row->preco ?></td>
                    <td class="actions">
                        <a class="btn btn-warning btn-xs" href="editarproduto.php?id=<?php echo $row->id ?>">Editar</a>
                        <a class="btn btn-danger btn-xs"  href="excluirproduto.php?id=<?php echo $row->id ?>">Excluir</a>
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
<!--         <input type="hidden" name="id" value="<?php echo $classProduto->id ?>" >
 -->        <button type="button" class="btn btn-primary" name="delete" >Sim</button>
    <button type="button" class="btn btn-default" data-dismiss="modal">N&atilde;o</button>
      </div>
    </div>
  </div>
</div>

<script type="application/javascript">
                var active = document.getElementById("produtos");
                active.classList.add("active");
 </script>

<?php 
require_once 'footer.php';
?>