<?php
	include_once 'menu.php';
    include_once 'assets/php/classes/classVendas.php';
    include_once 'assets/php/classes/classProduto.php';
     $classProduto = new classProduto();
      $classVendas = new classVendas();
    $classVendas->setId($_GET['id']);
    $venda = $classVendas->view();



        ?>

<div id="main" class="container-fluid" style="margin-top: 50px">
 
    <div id="top" class="row">
        <div class="col-sm-12">
            <h2>Deletar Venda</h2>
        </div>
       
    </div> <!-- /#top -->
 
 
    <hr />
                        <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                            </div>
                            <div class="card-body card-block">
                                <form action="vendas.php" method="POST" enctype="multipart/form-data" class="form-horizontal">
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Quantidade</label></div>
                                        <div class="col-12 col-md-9"><input type="text" name="quantidade" value="<?php echo $venda->quantidade ?>"  class="form-control">
                                    </div>
                                </div>
                                <div class="row form-group">
                                        <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Data</label></div>
                                        <div class="col-12 col-md-9"><input name="data" id="textarea-input" rows="9" value="<?php echo $venda->data ?>" class="form-control"></input></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="email-input" class=" form-control-label">ID de Produtos</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="email-input" name="produtos_id" value="<?php echo $venda->produtos_id ?>" class="form-control"></div>
                                    </div>
                                    
                                        <div class="form-actions form-group">
                                         <input type="hidden" name="id1" value="<?php echo $venda->id ?>" >
                                        	<button type="submit" name="delete" class="btn btn-success btn-sm">Excluir</button>
                                        </div>
                                </form>
                            </div>
                           
                        </div>
                       
                    </div>

<?php
	include_once 'footer.php';
?>