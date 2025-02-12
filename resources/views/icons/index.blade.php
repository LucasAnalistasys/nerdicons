@extends('layouts.app') <!-- Extende o layout principal -->

@section('content') <!-- Início da seção de conteúdo que será injetada no layout -->
    <h1 class="text-center mb-4">Ícones</h1>
    
    <!-- Lista de ícones com layout de 5 ícones por linha -->
    <div class="row g-4">
        @foreach($icons as $icon)
            <div class="col-6 col-md-4 col-lg-2">
                <div class="icon-item">
                    <img src="{{ asset('icons/' . basename($icon)) }}" alt="{{ basename($icon) }}">
                </div>
                <p class="icon-name">{{ basename($icon) }}</p> <!-- Nome do ícone fora do container -->
            </div>
        @endforeach
    </div>
    

    <!-- Paginação -->
    <div class="d-flex justify-content-center mt-4">
        {{ $icons->links('pagination::bootstrap-5') }}
    </div>
@endsection <!-- Fim da seção de conteúdo -->
