@extends('tema.painel_template')

@section('painel-admin')
    <div class="container">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
            <a  href="{{route('personagem.create')}}" class="btn btn-success">Novo </a>
            </div>
            <div class="card-body">
                <div  class="table table-hover" style="max-width: 600px">
                    <table class="table table-sm" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th scope="col">Nome</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($personagens as $personagem)

                                <tr>
                                    <td>{{$personagem->nome_personagem}}</td>
                                    <td style="float: right;">
                                        <a class="btn btn-primary" onclick="modalShow({{$personagem->id}})" role="button">
                                            <i style="color: white" class="far fa-eye"></i>
                                        </a>
                                   
                                        <a class="btn btn-primary" href="{{route('personagem.edit',$personagem->id )}}" role="button">
                                            editar
                                        </a>
                                    </td>
                                </tr>
                            
                            @endforeach
                        </tbody>
                    </table>   
                {{$personagens->links()}}
        
            </div>
        </div>

    </div>
    @include('painel.personagen.modal.show')

@endsection
@section('section_script')
    @include('painel.personagen.script.script')
@endsection