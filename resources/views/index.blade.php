@extends('layouts.app')

@section('content')
    <section class="hero">
        <div class="hero__img-main">
            <img class="fit-img" src="{{ asset('assets/images/hero/tree.png') }}" alt="">
        </div>
        <div class="hero__img-cloud">
            <img class="fit-img" src="{{ asset('assets/images/hero/cloud.png') }}" alt="">
        </div>
        <div class="hero__img-wave">
            <img class="fit-img" src="{{ asset('assets/images/hero/wave.png') }}" alt="">
        </div>
        <div class="container hero__container">
            <img class="fit-img" src="{{ asset('assets/images/hero/text-hero.svg') }}" alt="">
            <p>Step into a world where dreams flow, magic breathes, and your soul finds its light.</p>
            <div class="hero__actions">
                <a href="#" class="hero__actions-item-1">Join Waitlist</a>
                <a href="#" class="hero__actions-item-2">Watch Trailer</a>
            </div>
        </div>
    </section>
    <section class="intro">
        <div class="container intro__container">
            <div class="intro__img-mountain">
                <img class="fit-img" src="{{ asset('assets/images/mana/mountain.png') }}" alt="">
            </div>

            <div class="intro__img-mountain-mb">
                <img class="fit-img" src="{{ asset('assets/images/mana/mnmb.png') }}" alt="">
            </div>

            <div class="intro__img-beach">
                <img class="fit-img" src="{{ asset('assets/images/mana/beach.png') }}" alt="">
            </div>
            <div class="intro__content">
                <div class="intro__block">
                    <div class="intro__block-text">
                        <p>Mana is the invisible thread that connects dreams and reality.</p>
                        <p>Here, it's not just energy — it's emotion, adventure, and rebirth.</p>
                        <p>Discover a realm where every breath you take fuels wonder and beauty.</p>
                    </div>
                    <div class="intro__block-img">
                        <img src="{{ asset('assets/images/logo.svg') }}" alt="" width="237" height="50">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="step">
        <div class="container step-container">
            <div class="step-img">
                <img class="fit-img" src="{{ asset('assets/images/beyond/mountright.png') }}" alt="">
            </div>
            <h2 class="special-text">Why Step Beyond?</h2>
            <div class="step__list">
                <div class="step__item step__item-1">
                    <div class="step__item-img"><img src="{{ asset('assets/images/beyond/step-1.png') }}" alt=""></div>
                    <div class="step__item-content">
                        <h3>Living Worlds</h3>
                        <p>Ever-changing lands shaped by your spirit and choices.</p>
                    </div>
                </div>
                <div class="step__item step__item-2">
                    <div class="step__item-img"><img src="{{ asset('assets/images/beyond/step-2.png') }}" alt=""></div>
                    <div class="step__item-content">
                        <h3>Colors of Dreams</h3>
                        <p>Immerse yourself in vibrant hues of pink, blue, and violet — colors of endless imagination.
                        </p>
                    </div>
                </div>
                <div class="step__item step__item-3">
                    <div class="step__item-img"><img src="{{ asset('assets/images/beyond/step-3.png') }}" alt=""></div>
                    <div class="step__item-content">
                        <h3>Gentle Power</h3>
                        <p>Mana doesn't fight — it flows, heals, and transforms.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="faq">
        <div class="container faq-container">
            <div class="faq-bubble">
                <img class="fit-img" src="{{ asset('assets/images/faq/bubble.png') }}" alt="">
            </div>
            <div class="faq-img">
                <img class="fit-img" src="{{ asset('assets/images/faq/faq.png') }}" alt="">
            </div>
            <div class="faq-ship">
                <img class="fit-img" src="{{ asset('assets/images/faq/ship.png') }}" alt="">
            </div>
            <h2 class="special-text">Attention! You have uncovered the Book of Answers</h2>
            <div class="faq__list">
                <div class="faq__list-item">
                    <h3>What is Mana in Beyond the Ordinary?</h3>
                    <p>Mana is the silent energy that breathes life into everything you see. In this world, it's the
                        heartbeat of magic, the whisper behind every breeze</p>
                </div>
                <div class="faq__list-item">
                    <h3>Is Mana a combat game?</h3>
                    <p>No. This is a journey of exploration, healing, and wonder. Here, you grow and transform the
                        world, not through battles, but through connection and discovery.</p>
                </div>
                <div class="faq__list-item">
                    <h3>Will there be new realms to explore?</h3>
                    <p>Yes! As your mana grows, hidden realms, floating gardens, and secret skies will reveal themselves
                        — all waiting for you to awaken them.</p>
                </div>
            </div>
        </div>
    </section>
@endsection