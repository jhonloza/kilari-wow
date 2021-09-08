@extends('layouts.main')
@section('title', 'Inicio')

@section('content')
    <script src="/src/js/vars.js"></script>

    <section class="banner">

        <video muted autoplay loop class="video-section">
            <source src="https://imgur.com/h70nk3O.mp4" type="video/mp4" media="">
        </video>

        <div class="banner-section">
            <div class="banner-content">
                <h1>Bienvenidos a Kilari-wow</h1>
                <p style="font-size: 28px;">Adentrate al mundo de World of Warcraft - The Burning Crusade en su modo PVP.</p>
                <a href="/about" class="primary-btn">Informate</a>

            </div>
        </div>
    </section>
    <p style="font-size: 28px;">set realmlist kilariwow.ddns.net</p>


@endsection

