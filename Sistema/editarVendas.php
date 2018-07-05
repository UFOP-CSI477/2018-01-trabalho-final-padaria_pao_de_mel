<?php
	include_once 'menu.php';
    include_once 'assets/php/classes/classVendas.php';
    include_once 'assets/php/classes/classProduto.php';
    $vendas= new classVendas();
     $produto = new classProduto();
    if(isset($_POST['edit'])){
    $vendas->setId($_POST['id']);
    $vendas->setQuantidade($_POST['quantidade']);
    $vendas->setData($_POST['data']);
    $vendas->setProdutos_id($_POST['produtos_id']);
    if($vendas->edit() == 1){
        $result = "Vendas editada com sucesso!";
    }else{
        $error = "Erro ao editar";
    }
}


        ?>

<div id="main" class="container-fluid" style="margin-top: 50px">
 
    <div id="top" class="row">
        <div class="col-sm-12">
            <h2>Editar Venda</h2>
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
                                        <div class="col-12 col-md-9"><input type="text" name="quantidade" value="<?php echo $vendas->quantidade ?>"  class="form-control">
                                    </div>
                                </div>
                                <div class="row form-group">
                                        <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Data</label></div>
                                        <div class="col-12 col-md-9"><input type="date" id="email-input" name="data"  class="form-control" value="<?php echo $vendas->data ?>"></input></div>
                                        
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="email-input" class=" form-control-label">ID de Produtos</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="email-input" name="produtos_id" value="<?php echo $vendas->produtos_id ?>" class="form-control"></div>
                                    </div>
                                    
                                        <div class="form-actions form-group">
                                         <input type="hidden" name="id1" value="<?php echo $vendas->id ?>" >
                                        	<button type="submit" name="edit" class="btn btn-success btn-sm">Salvar</button>
                                        </div>
                                </form>
                            </div>
                           
                        </div>
                       
                    </div>

<?php
	include_once 'footer.php';
?>