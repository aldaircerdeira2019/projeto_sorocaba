@extends('tema.template')
@section('home')
    @include('css.welcome', ['layout']),
    <div id="bloco01">
        @can('admin')
            <a class="btn btn-primary" href="{{route('admin.index')}}">Area Administrativa</a>
        @endcan
        <div id="bloco_card">
            <div id="bloco_card_img"></div>
            <p id="text_destaque">{{$layout->texto_destaque}} </p>
        </div>
    </div>
    
    <div id="bloco02">
    </div>

    <div id="bloco03">
        <div id="form">
                <p id="title_form">FORMULARIO</p>
                <p id="frase_form">{{$layout->descri_form}}</P>
              <div class="card-body">
                    <form  method="post" action="{{route('mensagem.store')}}" style="margin: 30px; max-width: 600px;"><!---->
                        @csrf
                        <div class="form-group row">
                            <div class="col-sm-5">
                                <input name="nome_contato" type="text"  class="form-control @error('nome_contato') is-invalid @enderror" id="nome_contato" value="{{old('nome_contato')}}" placeholder="nome">
                                @error('nome_contato')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-sm-5">
                                <input name="email_contato" type="text"  class="form-control @error('email_contato') is-invalid @enderror" id="email_contato" value="{{old('email_contato')}}" placeholder="email">
                                @error('email_contato')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror 
                            </div>
                        </div>
                        <div class="col-sm-10">
                            <textarea name="mensagem" type="text"  class="form-control @error('mensagem') is-invalid @enderror" id="mensagem" maxlength="300" style="height: 270px;" >
                                    {{old('mensagem')}}
                            </textarea>
                            @error('mensagem')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror 
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success">Enviar</button>
                        </div>
                    </form>
                </div>
        </div>
    </div>

@endsection
