@component('bulma.master')
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
			<h1 class="title is-1">Post Form</h1>
		    {!! Form::open(['url' => 'foo/bar', 'method' => 'get']) !!}
		    
		        <div class="field">
				  <label class="label">Name</label>
				  <div class="control">
				    <input class="input" type="text" placeholder="Text input">
				  </div>
				</div>

				<div class="field">
				  <label class="label">Username</label>
				  <div class="control has-icons-left has-icons-right">
				    <input class="input is-success" type="text" placeholder="Text input" value="bulma">
				    <span class="icon is-small is-left">
				      <i class="fas fa-user"></i>
				    </span>
				    <span class="icon is-small is-right">
				      <i class="fas fa-check"></i>
				    </span>
				  </div>
				  @if ($errors->has('firstname'))
				    <p class="help is-success">{{ $errors->first('firstname') }}</p>
				  @endif
				  <p class="help is-success">This username is available</p>
				</div>

				<div class="field">
				  <p class="control has-icons-left">
				    <input class="input" type="password" placeholder="Password">
				    <span class="icon is-small is-left">
				      <i class="fas fa-lock"></i>
				    </span>
				  </p>
				</div>

				<div class="field">
				  <label class="label">Email</label>
				  <div class="control has-icons-left has-icons-right">
				    <input class="input is-danger" type="email" placeholder="Email input" value="hello@">
				    <span class="icon is-small is-left">
				      <i class="fas fa-envelope"></i>
				    </span>
				    <span class="icon is-small is-right">
				      <i class="fas fa-exclamation-triangle"></i>
				    </span>
				  </div>
				  <p class="help is-danger">This email is invalid</p>
				</div>

				<div class="field">
				  <p class="control has-icons-left">
				    <span class="select">
				      <select>
				        <option selected>Country</option>
				        <option>Select dropdown</option>
				        <option>With options</option>
				      </select>
				    </span>
				    <span class="icon is-small is-left">
				      <i class="fas fa-globe"></i>
				    </span>
				  </p>
				</div>

				<div class="field is-grouped is-grouped-centered">
				  <p class="control">
				    <a class="button is-primary">
				      Submit
				    </a>
				  </p>
				  <p class="control">
				    <a class="button is-light">
				      Cancel
				    </a>
				  </p>
				</div>
		        
		    {!! Form::close() !!}
		</div>
	</section>

@endcomponent