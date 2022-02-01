@extends('layouts.dashboard')
@section('content')
    <div class="carrusel">
        <img src="/img/carrusel.png" class="carrusel_img">
        <div class="carrusel_title">
            <span>SUEIRO E HIJOS</span>
        </div>
        <div class="carrusel_subtitle">
            <span>Somos una empresa dedicada a proporcionar las mejores soluciones de filtración con 30 años de experiencia en el rubro.</span>
        </div>
        <div class="carousel-indicators">
            <button></button>
            <button></button>
            <button></button>
        </div>
    </div>
    @livewire('home')
@endsection