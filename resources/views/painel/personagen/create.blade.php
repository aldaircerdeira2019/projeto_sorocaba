@extends('tema.painel_template')

@section('painel-admin')
    <div class="container">
        <div class="card shadow mb-4">
            <div class="card-body">
                <form  method="post" action="{{route('personagem.store')}}"  enctype="multipart/form-data" ><!---->
                    <h4><b>Cadastrar novo Personagem</b></h4><br>
                    @csrf
                    @method('POST')
                    <div class="form-group row">
                        <label for="nome_personagem" class="col-sm-4 col-form-label">Nome do Personagem</label>
                        <div class="col-sm-4">
                            <input name="nome_personagem" type="text"  class="form-control @error('nome_personagem') is-invalid @enderror" id="nome_personagem" value="{{old('nome_personagem')}}" maxlength="60">
                            @error('nome_personagem')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror 
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="descri_personagem" class="col-sm-4 col-form-label">Descrição</label>
                        <div class="col-sm-4">
                            <textarea name="descri_personagem" type="text"  class="form-control @error('descri_personagem') is-invalid @enderror" id="descri_personagem" maxlength="400" style="height: 300px;">
                                {{old('descri_personagem')}}
                            </textarea>
                            @error('descri_personagem')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror 
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="avatar" class="col-sm-4 col-form-label">AVATAR</label>
                        <div class="col-sm-4">
                            <input name="avatar" type="file" accept=".jpg, .jpeg, .png" class="form-control-file @error('avatar') is-invalid @enderror" id="avatar" value="{{old('avatar')}}" >
                            @error('avatar')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror 
                        </div>
                    </div>
        
                    <button type="submit" class="btn btn-primary">Adicionar</button>
            
                </form>
            </div>
        </div>

    </div>
@endsection

