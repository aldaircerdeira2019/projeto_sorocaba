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
        </div>
    </div>

@endsection
