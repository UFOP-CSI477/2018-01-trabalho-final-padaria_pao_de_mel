<?php
	include_once 'menu.php';
    include_once 'assets/php/classes/classVendas.php';
     include_once 'assets/php/classes/classProduto.php';
     $classVendas = new classVendas();
     $classProduto= new classProduto();




        if(isset($_POST['insert'])){
            
        $classVendas->setQuantidade($_POST['quantidade']);
         $classVendas->setData($_POST['data']);
         $classVendas->setProdutos_id($_POST['produtos_id']);
         



    if($classVendas->insert()==1){
         echo "<script>location.href='vendas.php';</script>"; 
    }else{

        $error="Erro ao inserir";
    }

    }


?>

<div id="main" class="container-fluid" style="margin-top: 50px">
 
    <div id="top" class="row">
        <div class="col-sm-12">
            <h2>Adicionar Venda</h2>
        </div>
       
    </div> <!-- /#top -->
 
 
    <hr />
                        <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                            </div>
                            <div class="card-body card-block">
                                <form action="adicionarVenda.php" method="POST" enctype="multipart/form-data" class="form-horizontal">
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Quantidade</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="text-input" name="quantidade" placeholder="" class="form-control">
                                    </div>
                                </div>
                                <div class="row form-group">
                                        <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Data</label></div>
                                        <div class="col-12 col-md-9"><input type="date" id="email-input" name="data"  class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="email-input" class=" form-control-label">ID de produtos</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="email-input" name="produtos_id" placeholder="" class="form-control"></div>
                                    </div>
                                    
                                        <div class="form-actions form-group">
                                        	<button type="submit" name="insert" class="btn btn-success btn-sm">Enviar</button>
                                        </div>
                                </form>
                            </div>
                           
                        </div>
                       
                    </div>

<?php
	include_once 'footer.php';
?>