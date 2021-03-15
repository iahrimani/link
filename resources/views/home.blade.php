@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Генератор коротких ссылок') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h2>Информация о пользователе</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate illo possimus, saepe optio, ullam iusto aut fugit nesciunt repellendus doloremque excepturi perspiciatis exercitationem et aliquid quas numquam natus, molestiae odio?</p>
                    <h3><a href="{{route('generate.shorten.link')}}">Перейти</a></h3>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
