@component('layout')
    @slot('title')
        Truyen 1vs3
    @endslot

    <section class="hero is-primary">
      	<div class="hero-body">
	        <div class="container">
	        	@foreach ($data as $story)

        		{!! Form::open(['url' => ['stories', $story->id], 'method' => 'delete']) !!}
		        	<div class="control">
				  		<button class="button is-danger">Delete</button>
				  	</div>
			  	{!! Form::close() !!}


	          	<h1 class="title">
	          		{!! $story->title!!}
	          	</h1>
	          	<h2 class="subtitle">
	          		{!! $story->content !!}
	          	</h2>
	          	@endforeach
	        </div>
      	</div>
    </section>

@endcomponent