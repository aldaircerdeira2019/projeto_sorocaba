@extends('tema.template')
@section('home')

    <div style="top: 0px;
    left: 0px;
    margin-top: -25px;
    width: 100%;
    height: 1080px;
    background: transparent url('{{ asset('assets/img/Imagem 2.png')}}') 0% 0% no-repeat padding-box;
    opacity: 0.85;">
        @can('admin')
            <a class="btn btn-primary" href="{{route('admin.index')}}">Area Administrativa</a>
        @endcan
        <div style="top: 0px;
        margin: 0 30% 0 30%;
        width: 586px;
        height: 1080px;
        background: transparent url('{{ asset('assets/img/Imagem card1.svc')}}') 0% 0% no-repeat padding-box;
        box-shadow: 0px 3px 6px #00000099;
        opacity: 1;">
            <div style="width: 526px;
                margin: 0px auto 0px auto;
                height: 754px;
                background: transparent url('{{ asset('assets/img/Imagem card.png')}}') 0% 0% no-repeat padding-box;
                box-shadow: 0px 3px 6px #00000099;
                border-radius: 196px;
                opacity: 1;">

            </div>
            <p style="text-align: center;
                font: Regular 20px/21px Open Sans;
                padding: 0 30px 0 30px;
                letter-spacing: 0px;
                color: #F0F0F2;
                text-shadow: 0px 3px 6px #00000029;
                opacity: 1;"
            >
                ja de tipos e os embaralhou para fazer um livro de modelos de tipos. Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto para a editoração eletrônica, permanecendo essencialmente inalterado. Se popularizou na década de 60, quando a Letraset lançou decalques contendo passagens de Lorem Ipsum, e mais recentemente quando passou a ser integrado a softwares de editoração eletrônica como Aldus PageMaker.

                Porque nós o usamos?
                É um fato conhecido de todos que um leitor se distrairá com o conteúdo de texto legível de uma página quando estiver examinando sua diagramação. A vantagem de usar Lorem Ipsum é que ele tem uma distribuição normal de letras, ao contrário de "Conteúdo aqui, conteúdo aqui", fazendo com que ele tenha uma aparência similar a de um texto legível. Muitos softwares de publicação e editores de páginas na internet agora usam Lorem Ipsum como texto-modelo padrão, e uma rápida busca por 'lorem ipsum' mostra vários websites ainda em sua fase de construção. Várias versões novas surgiram ao longo dos anos, eventualmente por acidente, e às vezes de propósito (injetando humor, e coisas do gênero).
                
                    
            </p>

        </div>
    </div>
    
    <div style="top: 1080px;
    left: 0px;
    width: 1920px;
    height: 1147px;
    background: #363636 0% 0% no-repeat padding-box;
    opacity: 1;">
    </div>

    <div style="
        left: 0px;
        width: 1920px;
        height: 700px;
        background: transparent linear-gradient(143deg, #7DEDE2 0%, #58B790 100%) 0% 0% no-repeat padding-box;
        opacity: 1;">
        <div style="
                margin: 0 20% 0 20%;
                width: 700px;
                height: 700px;
                background: #FFFFFF 0% 0% no-repeat padding-box;
                box-shadow: 0px 0px 6px #0000004D;
                opacity: 1;">
                <p style="
                height: 43px;
                text-align: center;
                font: Bold 35px/46px Montserrat;
                letter-spacing: -0.88px;
                color: #63C7A9;
                opacity: 1;">
                FORMULARIO
                </p>
                <P style="text-align: left;
                padding: 30px;
                font: Regular 20px/21px Open Sans;
                letter-spacing: 0px;
                color: #363636;
                opacity: 1;">
                    ele tem uma distribuição normal de letras, ao contrário de "Conteúdo aqui, conteúdo aqui", fazendo com que ele tenha uma aparência similar a de um texto legível. Muitos softwares de publicação e editores de páginas na internet agora usam Lorem Ipsum como texto-modelo padrão, e uma rápida busca por 'lorem ipsum' mostra vários websites ainda em sua fase de construção. Várias versões novas surgiram ao longo dos anos, eventualmente por acidente, e às vezes de propósito (injetando humor, e coisas do gênero).
                </P>
        </div>
    </div>

@endsection
