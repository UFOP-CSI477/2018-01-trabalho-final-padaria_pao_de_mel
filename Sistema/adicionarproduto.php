<?php
	include_once 'menu.php';
?>

<div id="main" class="container-fluid" style="margin-top: 50px">
 
    <div id="top" class="row">
        <div class="col-sm-12">
            <h2>Adicionar Produto</h2>
        </div>
       
    </div> <!-- /#top -->
 
 
    <hr />
                        <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                            </div>
                            <div class="card-body card-block">
                                <form action="#" method="post" enctype="multipart/form-data" class="form-horizontal">
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Nome</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="text-input" name="text-input" placeholder="" class="form-control">
                                    </div>
                                </div>
                                <div class="row form-group">
                                        <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Descrição</label></div>
                                        <div class="col-12 col-md-9"><textarea name="textarea-input" id="textarea-input" rows="9" placeholder="" class="form-control"></textarea></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="email-input" class=" form-control-label">Quantidade</label></div>
                                        <div class="col-12 col-md-9"><input type="email" id="email-input" name="email-input" placeholder="" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="password-input" class=" form-control-label">Preço</label></div>
                                        <div class="col-12 col-md-9"><input type="password" id="password-input" name="password-input" placeholder="" class="form-control">
                                    </div>
                                        <div class="form-actions form-group">
                                        	<button type="submit" class="btn btn-success btn-sm">Enviar</button>
                                        </div>
                                </form>
                            </div>
                           
                        </div>
                       
                    </div>

<?php
	include_once 'footer.php';
?>