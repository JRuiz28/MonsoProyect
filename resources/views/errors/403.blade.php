@extends('HeadFoot')
@section('header')
    @parent
@endsection
@section('content')
    <body>
        <section class="section">
            <div class="section__container-img">
                <img class="section__container-img--403" src="/images/403.png"/>
            </div>
            <div class="section__container-paragraph">
                <p class="section__container-paragraph--paragraph">No tienes permitido acceder acá.
                </p>
                <button class="section__container-paragraph--button">
                    Volver a inicio
                </button>
            </div>
            <div>
                
            </div>
        </section>
    </body>
@endsection
@section('footer')
    @parent
@endsection