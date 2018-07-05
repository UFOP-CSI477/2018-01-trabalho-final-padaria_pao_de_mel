<?php
	include_once 'menu.php';
    include_once 'assets/php/classes/classProduto.php';
     $classProduto = new classProduto();
    $classProduto->setId($_GET['id']);
    $produto = $classProduto->view();



        ?>

<div id="main" class="container-fluid" style="margin-top: 50px">
 
    <div id="top" class="row">
        <div class="col-sm-12">
            <h2>Editar Produto</h2>
        </div>
       
    </div> <!-- /#top -->
 
 
    <hr />
                        <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                            </div>
                            <div class="card-body card-block">
                                <form action="produtos.php" method="POST" enctype="multipart/form-data" class="form-horizontal">
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Nome</label></div>
                                        <div class="col-12 col-md-9"><input type="text" name="nome" value="<?php echo $produto->nome ?>"  class="form-control">
                                    </div>
                                </div>
                                <div class="row form-group">
                                        <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Descrição</label></div>
                                        <div class="col-12 col-md-9"><input name="descricao" id="textarea-input" rows="9" value="<?php echo $produto->descricao ?>" class="form-control"></input></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="email-input" class=" form-control-label">Quantidade</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="email-input" name="quantidade" value="<?php echo $produto->quantidade ?>" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label class=" form-control-label">Preço</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="password-input" name="preco" value="<?php echo $produto->preco ?>" class="form-control">
                                    </div>
                                        <div class="form-actions form-group">
                                         <input type="hidden" name="id1" value="<?php echo $produto->id ?>" >
                                        	<button type="submit" name="edit" class="btn btn-success btn-sm">Salvar</button>
                                        </div>
                                </form>
                            </div>
                           
                        </div>
                       
                    </div>

<?php
	include_once 'footer.php';
?>