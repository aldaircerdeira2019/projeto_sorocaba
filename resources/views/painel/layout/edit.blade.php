@extends('tema.painel_template')

@section('painel-admin')
<div class="container" style="height: 600px;">
    <div class="card shadow mb-4">
        <div class="card-body">
            <form  method="post" action="{{route('layout.update',$layout->id)}}"  enctype="multipart/form-data" ><!---->
                <h4><b>Edição do layout</b></h4><br>
                @csrf
                @method('PUT')
                
                <div class="form-group row">
                    <label for="nome_jogo" class="col-sm-4 col-form-label">Nome do Jogo</label>
                    <div class="col-sm-4">
                        <input name="nome_jogo" type="text"  class="form-control @error('nome_jogo') is-invalid @enderror" id="nome_jogo" value="{{old('nome_jogo', $layout->nome_jogo)}}" maxlength="60">
                        @error('nome_jogo')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror 
                    </div>
                </div>
                <div class="form-group row">
                    <label for="texto_destaque" class="col-sm-4 col-form-label">Texto destaque do tema</label>
                    <div class="col-sm-4">
                        <textarea name="texto_destaque" type="text"  class="form-control @error('texto_destaque') is-invalid @enderror" id="texto_destaque" maxlength="400">
                             {{old('texto_destaque', $layout->texto_destaque)}}
                        </textarea>
                        @error('texto_destaque')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror 
                    </div>
                </div>
                <div class="form-group row">
                    <label for="frase" class="col-sm-4 col-form-label">Frase</label>
                    <div class="col-sm-4">
                        <input name="frase" type="text"  class="form-control @error('frase') is-invalid @enderror" id="frase" value="{{old('frase', $layout->frase)}}" maxlength="160">
                        @error('frase')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror 
                    </div>
                </div>
                <div class="form-group row">
                    <label for="descri_form" class="col-sm-4 col-form-label">Frase do Formulario de contato</label>
                    <div class="col-sm-4">
                        <textarea name="descri_form" type="text"  class="form-control @error('descri_form') is-invalid @enderror" id="descri_form" maxlength="400">
                             {{old('descri_form', $layout->descri_form)}}
                        </textarea>
                        @error('descri_form')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror 
                    </div>
                </div>
                <img >
                <img src="{{asset($layout->background)}}" width="300px;">
                <div class="form-group row">
                    <label for="background" class="col-sm-4 col-form-label">Background do Tema</label>
                    <div class="col-sm-4">
                        <input name="background" type="file" accept=".jpg, .jpeg, .png" class="form-control-file @error('background') is-invalid @enderror" id="background" value="{{old('background', $layout->background)}}" >
                        @error('background')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror 
                    </div>
                </div>
    
                <button type="submit" class="btn btn-primary">salvar</button>
         
            </form>
        </div>
    </div>

</div>



@endsection