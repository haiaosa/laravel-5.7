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

	<!-- section: https://bulma.io/documentation/layout/section/ -->
	<section class="section has-background-light">
		<div class="container">
			<!-- ... -->
			<!-- columns: https://bulma.io/documentation/columns/basics/ -->
			<div class="columns">
				<div class="column">
					<!-- ... -->
					<article class="media notification is-info">
						<!-- media: https://bulma.io/documentation/layout/media-object/ -->
						<figure class="media-left">
							<!-- ... -->
							<!-- icon: https://bulma.io/documentation/elements/icon/ -->
							<span class="icon is-medium">
								<i class="fab fa-2x fa-css3-alt"></i>
							</span>
						</figure>
						<div class="media-content">
							<div class="content">
								<!-- ... -->
								<h1 class="title is-size-4">Bulma?</h1>
								<p>
									Bulma is a modern CSS framework from @jgthms, based on Flexbox.
									Using Bulma, we can describe our website's design using just classes. <span class="emoticon">ᕕ( ᐛ )ᕗ</span>
								</p>
							</div>
						</div>

					</article>
				</div>

				<div class="column">
					<article class="media notification is-primary">
						<figure class="media-left">
							<span class="icon is-medium">
								<i class="fas fa-2x fa-align-justify"></i>
							</span>
						</figure>
						<div class="media-content">
							<div class="content">
								<h1 class="title is-size-4">…Flexbox?</h1>
								<p class="is-size-5">
									Flexbox is a CSS spec that makes sectioning and aligning more natural.
									We don't need to know Flexbox but it's how Bulma works behind-the-scenes. <span class="emoticon">⦤(^ー^)⦥</span>
								</p>
							</div>
						</div>
					</article>
				</div>

				<div class="column">
					<article class="media notification is-warning">
						<figure class="media-left">
							<span class="icon is-medium">
								<i class="fas fa-2x fa-shield-alt"></i>
							</span>
						</figure>
						<div class="media-content">
							<div class="content">
								<h1 class="title is-size-4">…Classes?</h1>
								<p class="is-size-5">
									Instead of writing our CSS per-element, we can use predefined classes.
									With enough classes, we can describe our website design using semantics. <span class="emoticon">٩(^ᴗ^)۶</span>
								</p>
							</div>
						</div>
					</article>
				</div>
				
			</div>

			

		</div>
	</section>

	<!-- .small logo footer -->
	<section class="section">
		<div class="container">
			<div class="columns is-multiline">
				<div class="column is-one-third">
					<article class="media notification has-background-white">
						<figure class="media-left">
							<span class="icon">
								<i class="fas fa-lg fa-columns has-text-warning"></i>
							</span>
						</figure>
						<div class="media-content">
							<div class="content">
								<h1 class="title is-size-4">Columns</h1>
								<p class="subtitle is-size-5">
									The power of <strong>Flexbox</strong> in a simple interface
								</p>
							</div>
						</div>
					</article>
				</div>
				<div class="column is-one-third">
					<article class="media notification has-background-white">
						<figure class="media-left">
							<span class="icon has-text-info">
								<i class="fab fa-lg fa-wpforms"></i>
							</span>
						</figure>
						<div class="media-content">
							<div class="content">
								<h1 class="title is-size-4">Form</h1>
								<p class="subtitle is-size-5">
									The indispensable <strong>form controls</strong>, designed for maximum clarity
								</p>
							</div>
						</div>
					</article>
				</div>
				<div class="column is-one-third">
					<article class="media notification has-background-white">
						<figure class="media-left">
							<span class="icon has-text-danger">
								<i class="fas fa-lg fa-cubes"></i>
							</span>
						</figure>
						<div class="media-content">
							<div class="content">
								<h1 class="title is-size-4">Components</h1>
								<p class="subtitle is-size-5">
									Advanced multi-part components with lots of possibilities
								</p>
							</div>
						</div>
					</article>
				</div>
				<div class="column is-one-third">
					<article class="media notification has-background-white">
						<figure class="media-left">
							<span class="icon has-text-grey">
								<i class="fas fa-lg fa-cogs"></i>
							</span>
						</figure>
						<div class="media-content">
							<div class="content">
								<h1 class="title is-size-4">Modifiers</h1>
								<p class="subtitle is-size-5">
									An <strong>easy-to-read</strong> naming system designed for humans
								</p>
							</div>
						</div>
					</article>
				</div>
				<div class="column is-one-third">
					<article class="media notification has-background-white">
						<figure class="media-left">
							<span class="icon has-text-primary">
								<i class="fas fa-lg fa-warehouse"></i>
							</span>
						</figure>
						<div class="media-content">
							<div class="content">
								<h1 class="title is-size-4">Layout</h1>
								<p class="subtitle is-size-5">
									Design the <strong>structure</strong> of your webpage with these CSS classes
								</p>
							</div>
						</div>
					</article>
				</div>
				<div class="column is-one-third">
					<article class="media notification has-background-white">
						<figure class="media-left">
							<span class="icon has-text-danger">
								<i class="fas fa-lg fa-cube"></i>
							</span>
						</figure>
						<div class="media-content">
							<div class="content">
								<h1 class="title is-size-4">Elements</h1>
								<p class="subtitle is-size-5">
									Essential interface elements that only require a <strong>single CSS class</strong>
								</p>
							</div>
						</div>
					</article>
				</div>
			</div>
		</div>
	</section>
	<!-- /.small logo footer -->

@endcomponent