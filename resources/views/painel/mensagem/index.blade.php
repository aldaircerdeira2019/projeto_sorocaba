@extends('tema.painel_template')

@section('painel-admin')
    <div class="container">
        <div class="card shadow mb-4">
            <div class="card-body">
                <div  class="table table-hover" style="max-width: 800px">
                    <table class="table table-sm" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th scope="col">Nome</th>
                                <th scope="col">Email</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($mensagens as $mensagem)

                                <tr>
                                    <td>{{$mensagem->nome_contato}}</td>
                                    <td>{{$mensagem->email_contato}}</td>
                                    <td>
                                        <a class="btn btn-primary" onclick="modalShow({{$mensagem->id}})" role="button">
                                            <i style="color: white" class="far fa-eye"></i>
                                        </a>
                                    </td>
                                </tr>
                            
                            @endforeach
                        </tbody>
                    </table>   
                {{$mensagens->links()}}
        
            </div>
        </div>

    </div>

    @include('painel.mensagem.modal.show')

@endsection
@section('section_script')
    @include('painel.mensagem.script.script')
@endsection