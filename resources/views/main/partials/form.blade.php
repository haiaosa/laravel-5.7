
<div class="field">
	{!! Form::label('input', 'Title', ['class' => 'label', 'name' => 'title']); !!}
    <div class="control has-icons-left has-icons-right">
    	{!! Form::text('title', null, ['class' => $errors->has('title')? 'input is-danger' : 'input is-primary', 'placeholder' => 'Title']); !!}
      <span class="icon is-small is-left">
        <i class="fas fa-user"></i>
      </span>
      <span class="icon is-small is-right">
        <i class="{!! $errors->has('title')? 'fas fa-exclamation-triangle' : 'fas fa-check' !!}"></i>
      </span>
    </div>
    @if ($errors->has('title'))
      <p class="help is-danger">{{ $errors->first('title') }}</p>
    @endif
</div>


<div class="field">
	{!! Form::label('textarea', 'Content', ['class' => 'label', 'name' => 'textarea']); !!}
    <div class="control">
    	{!! Form::textarea('content', null, ['class' => $errors->has('content')? 'textarea is-danger' : 'textarea is-primary', 'placeholder' => 'Primary textarea']); !!}
    </div>
    @if ($errors->has('content'))
      <p class="help is-danger">{{ $errors->first('content') }}</p>
    @endif
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