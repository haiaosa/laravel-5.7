@component('layout')
    @slot('title')
        Truyen 1vs3
    @endslot
	<section class="section">
        <div class="container">
            <h1 class="title">This is create page.</h1>

            {!! Form::open(['url' => 'stories', 'method' => 'post']) !!}

            @include('/main/partials/form', [

            	'bnText'	=>	'Create'

            	])

	        {!! Form::close() !!}

        </div>
    </section>
@endcomponent