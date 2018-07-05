<?php
	include_once 'menu.php';
    include_once 'assets/php/classes/classEstoques.php';
     $classEstoques = new classEstoques();
    $classEstoques->setId($_GET['id']);
    $estoque = $classEstoques->view();



        ?>

<div id="main" class="container-fluid" style="margin-top: 50px">
 
    <div id="top" class="row">
        <div class="col-sm-12">
            <h2>Deletar estoque</h2>
        </div>
       
    </div> <!-- /#top -->
 
 
    <hr />
                        <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                            </div>
                            <div class="card-body card-block">
                                <form action="estoque.php" method="POST" enctype="multipart/form-data" class="form-horizontal">
                                                <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">ID estoque</label></div>
                                        <div class="col-12 col-md-9"><input type="text" name="produtos_id" value="<?php echo $estoque->produtos_id ?>"  class="form-control">
                                    </div>
                                </div>
                                <div class="row form-group">
                                        <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Quantidade</label></div>
                                        <div class="col-12 col-md-9"><input name="quantidade" id="textarea-input" rows="9" value="<?php echo $estoque->quantidade ?>" class="form-control"></input></div>
                                    </div>
                                        <div class="form-actions form-group">
                                         <input type="hidden" name="id1" value="<?php echo $estoque->id ?>" >
                                        	<button type="submit" name="delete" class="btn btn-success btn-sm">Excluir</button>
                                        </div>
                                </form>
                            </div>
                           
                        </div>
                       
                    </div>

<?php
	include_once 'footer.php';
?>