<!-- Button trigger modal -->
<!-- Modal -->
<div class="modal fade" id="personagemModal" tabindex="-1" role="dialog" aria-labelledby="personagemLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="personagemLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="card-body" style="padding: 30px;">
                <form method="post"><!---->
                    <div class="form-group row">
                        <div class="col-sm-8">
                            <img id="image"style="width: 300px;float:right">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nome_personagem" class="col-sm-4 col-form-label">Nome do Personagem</label>
                        <div class="col-sm-4">
                            <input name="nome_personagem" type="text"  class="form-control" id="nome_personagem" value="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="descri_personagem" class="col-sm-4 col-form-label">Descrição</label>
                        <div class="col-sm-4">
                            <textarea name="descri_personagem" type="text"  class="form-control" id="descri_personagem" style="height: 300px;">
                            </textarea>
                        </div>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>
</div>