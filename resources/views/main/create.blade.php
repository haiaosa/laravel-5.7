@component('layout')
    @slot('title')
        Truyen 1vs3
    @endslot
	<section class="section">
        <div class="container">
            <h1 class="title">This is create page.</h1>

            {!! Form::open(['url' => 'stories', 'method' => 'post']) !!}


			
            <div class="field">
            	{!! Form::label('input', 'Title', ['class' => 'label', 'name' => 'title']); !!}
	            <div class="control">
	            	{!! Form::text('title', null, ['class' => 'input', 'placeholder' => 'Text input']); !!}
	            </div>
	        </div>

	        
	        <div class="field">

	        	{!! Form::label('textarea', 'Content', ['class' => 'label', 'name' => 'textarea']); !!}
		        <div class="control">
		        	{!! Form::textarea('textarea', null, ['class' => 'textarea', 'placeholder' => 'Textarea']); !!}
		        </div>
	        </div>


	        <div class="field is-grouped">
	        	<div class="control">
	        		{!! Form::submit('Submit', ['class' => 'button is-primary'] ); !!}
	        	</div>
	          	<div class="control">
	          		<a class="button is-light" href="/stories">
				      	Cancel
				    </a>
	          	</div>
	        </div>

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