@component('layout')
    @slot('title')
        Truyen 1vs3
    @endslot
	<section class="section">
        <div class="container">
            <h1 class="title">This is EDIT page.</h1>

			{!! Form::model($story, ['method' => 'patch', 'url' => ['stories', $story->id]]) !!}

            @include('main/partials/form', [
            	'bnText'	=>	'Edit'
            	])

	        {!! Form::close() !!}

        </div>
    </section>

	@if ($errors->any())
		<div class="notification is-danger">
		  	@foreach ($errors->all() as $error)
            	{{ $error }}
        	@endforeach
		</div>
	@endif
@endcomponent