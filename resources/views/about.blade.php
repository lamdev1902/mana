@extends('layouts.app')

@section('content')
    <section class="about">
        <div class="container">
            <div class="about__label">
                <img class="fit-img" src="{{ asset('assets/images/about/label.png') }}" alt="">
            </div>
            <div class="about__beach">
                <img class="fit-img" src="{{ asset('assets/images/mana/beach.png') }}" alt="">
            </div>
            <div class="about__list">
                <div class="about__item">
                    <p class="about__item-label">Our Story</p>
                    <p>In a world that often rushes past the quiet wonders, we dreamed of a place where stillness could
                        bloom.
                        Mana was born from simple moments — the colors of a sunset, the hush of a midnight breeze, the
                        feeling of being small under endless skies.
                        We are artists, wanderers, and quiet believers in magic — crafting a realm where mana flows freely,
                        and every heart can find its spark again.</p>
                </div>
                <div class="about__item">
                    <p class="about__item-label">Our Mission</p>
                    <p style="margin-bottom: 20px;">To create more than a game — to create a gentle universe.
                        We aim to build worlds where healing comes naturally, where exploration feels like breathing, and
                        where every player is reminded that wonder never truly leaves us.</p>
                    <p>Mana is an invitation: to slow down, to dream again, and to step lightly into magic.</p>
                </div>
            </div>
        </div>
    </section>
@endsection