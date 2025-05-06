@extends('layouts.app')

@section('content')
    <section class="contact">
        <div class="container contact__container">
            <div class="contact__img">
                <img class="fit-img" src="{{ asset('assets/images/contact/label.png') }}" alt="">
            </div>
            <div class="contact__cloud">
                <img class="fit-img" src="{{ asset('assets/images/hero/cloud.png') }}" alt="">
            </div>
            <div class="contact__shark">
                <img class="fit-img" src="{{ asset('assets/images/faq/shark.png') }}" alt="">
            </div>
            <form action="" class="contact__form">
                <div class="contact__field">
                    <p class="contact__field-label">Name</p>
                    <input type="text" name="name" id="">
                </div>
                <div class="contact__field">
                    <p class="contact__field-label">Email</p>
                    <input type="text" name="email" id="">
                </div>
                <div class="contact__field">
                    <p class="contact__field-label">Address</p>
                    <textarea name="" id="" cols="30"></textarea>
                </div>
            </form>
        </div>
    </section>
@endsection