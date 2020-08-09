<!-- Button trigger modal -->
<!-- Modal -->
<div class="modal fade" id="mensagemModal" tabindex="-1" role="dialog" aria-labelledby="mensagemModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="mensagemModalLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="card-body" style="padding: 30px;">
                <form method="post"><!---->
                    <div class="form-group row">
                        <div class="col-sm-5">
                            <input name="nome_contato" type="text"  class="form-control" value="" id="nome_contato">
                        </div>
                        <div class="col-sm-5">
                            <input name="email_contato" type="text"  class="form-control" value="" id="email_contato">
                        </div>
                    </div>
                    <div class="col-sm-10">
                        <textarea name="mensagem" type="text"  class="form-control" id="mensagem" maxlength="300" style="height: 270px;" >
    
                        </textarea>
                    </div>
    
                </form>
            </div>
        </div>
    </div>
</div>