
<div class="field">
	{!! Form::label('input', 'Title', ['class' => 'label', 'name' => 'title']); !!}
    <div class="control">
    	{!! Form::text('title', null, ['class' => 'input']); !!}
    </div>
</div>


<div class="field">

	{!! Form::label('textarea', 'Content', ['class' => 'label', 'name' => 'textarea']); !!}
    <div class="control">
    	{!! Form::textarea('content', null, ['class' => 'textarea']); !!}
    </div>
</div>


<div class="field is-grouped">
	<div class="control">
		{!! Form::submit($bnText, ['class' => 'button is-primary'] ); !!}
	</div>
  	<div class="control">
  		<a class="button is-light" href="/stories">
	      	Cancel
	    </a>
  	</div>
</div>