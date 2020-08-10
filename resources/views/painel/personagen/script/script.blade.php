<script type="text/javascript">
    function modalShow(id)
    {
        
       $.ajax({
           url:"{{url('painel/personagem')}}"+ '/' +id,
           type: 'GET',
            dataType: 'JSON',
            success: function (data) {
                var img = "{{asset('')}}" + data.personagem.avatar;
                $("#personagemModal").modal('show');
                $("#nome_personagem").val(data.personagem.nome_personagem);
                $("#descri_personagem").text(data.personagem.descri_personagem); 
                $("#image").attr('src',img);
               
                
            },
            erro: function(){
                alert('erro');
            }
        });
    }


</script>  