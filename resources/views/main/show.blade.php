@component('layout')
    @slot('title')
        Truyen 1vs3
    @endslot

    <section class="hero is-primary">
      	<div class="hero-body">
	        <div class="container">
	          	<h1 class="title">
	          		{!! $story->title !!}
	          	</h1>
	          	<h2 class="subtitle">
	          		{!! $story->content !!}
	          	</h2>
	        </div>
      	</div>
    </section>
@endcomponent