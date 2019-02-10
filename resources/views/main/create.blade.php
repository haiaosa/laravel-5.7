@component('layout')
@slot('title')
Truyen 1vs3
@endslot

<style type="text/css">
.center {
    display: flex;
    justify-content: center;
    align-items: center;
}
.emoticon { white-space: pre; }
</style>

<!-- hero: https://bulma.io/documentation/layout/hero/ -->
<section class="hero has-background-black">
    <div class="hero-body">
        <!-- ... -->
        <div class="container">
            <figure class="image center">
                <img src="/images/bulma-logo-white.png" style="max-width: 256px;">
            </figure>
        </div>

    </div>
</section>


<section class="section has-background-light">
    <div class="container">
        <h1 class="title is-1">This is create page.</h1>

        {!! Form::open(['url' => 'stories', 'method' => 'post']) !!}

        @include('/main/partials/form', [

           'bnText'	=>	'Create'

           ])

        {!! Form::close() !!}

    </div>
</section>
@endcomponent