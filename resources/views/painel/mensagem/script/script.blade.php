<script type="text/javascript">
    function modalShow(id)
    {
        
       $.ajax({
           url:"{{url('painel/mensagem')}}"+ '/' +id,
           type: 'GET',
            dataType: 'JSON',
            success: function (data) {
                //alert(data.mensagem.nome_contato);
                $("#mensagemModal").modal('show');
                $("#nome_contato").val(data.mensagem.nome_contato);
                $("#email_contato").val(data.mensagem.email_contato); 
                $("#mensagem").text(data.mensagem.mensagem); 
               
                
            },
            erro: function(){
                alert('erro');
            }
        });
    }


</script>  