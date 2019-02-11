@component('master')

@slot('title')
Truyen - 1vs3 - Lịch sử
@endslot
<div class="tile is-ancestor">
	<div class="tile is-parent is-vertical">
		<div class="tile is-child">
			@include('truyen.dung-chung.breadcrumbs', ['linkHienTai' => 'http', 'nameLink' => 'Lịch sử'])
		</div>
		<div class="tile is-child">
			<div class="columns is-multiline is-centered">

				<div class="column is-2">
					<div class="card">
						<header class="card-header">
							<p class="card-header-title is-centered has-background-grey-dark">
								<a href="#" class="has-text-white-ter has-text-weight-normal">
									Naruto
								</a>
							</p>
						</header>
						<div class="card-image">
							<figure class="image is-4by3">
								<img src="https://bulma.io/images/placeholders/1280x960.png" alt="Placeholder image">
							</figure>
						</div>
						<div class="card-content">
							<div class="content">
								Đọc <strong>Chương: 3</strong>
								<br>
								 lúc: <time datetime="2016-1-1">11:09 PM - 1 Jan 2016</time>
							</div>
						</div>
						<footer class="card-footer has-background-black">
							<a href="#" class="card-footer-item button is-danger is-outlined is-radiusless is-uppercase has-text-weight-semibold">Đọc tiếp</a>
						</footer>
					</div>
				</div>
				<div class="column is-2">
					<div class="card">
						<header class="card-header">
							<p class="card-header-title is-centered has-background-grey-dark">
								<a href="#" class="has-text-white-ter has-text-weight-normal">
									Tạ Trang
								</a>
							</p>
						</header>
						<div class="card-image">
							<figure class="image is-4by3">
								<img src="https://bulma.io/images/placeholders/1280x960.png" alt="Placeholder image">
							</figure>
						</div>
						<div class="card-content">
							<div class="content">
								Đọc <strong>Chương: 3</strong>
								<br>
								 lúc: <time datetime="2016-1-1">11:09 PM - 1 Jan 2016</time>
							</div>
						</div>
						<footer class="card-footer has-background-black">
							<a href="#" class="card-footer-item button is-danger is-outlined is-radiusless is-uppercase has-text-weight-semibold">Đọc tiếp</a>
						</footer>
					</div>
				</div>
				<div class="column is-2">
					<div class="card">
						<header class="card-header">
							<p class="card-header-title is-centered has-background-grey-dark">
								<a href="#" class="has-text-white-ter has-text-weight-normal">
									Minh Phong
								</a>
							</p>
						</header>
						<div class="card-image">
							<figure class="image is-4by3">
								<img src="https://bulma.io/images/placeholders/1280x960.png" alt="Placeholder image">
							</figure>
						</div>
						<div class="card-content">
							<div class="content">
								Đọc <strong>Chương: 3</strong>
								<br>
								 lúc: <time datetime="2016-1-1">11:09 PM - 1 Jan 2016</time>
							</div>
						</div>
						<footer class="card-footer has-background-black">
							<a href="#" class="card-footer-item button is-danger is-outlined is-radiusless is-uppercase has-text-weight-semibold">Đọc tiếp</a>
						</footer>
					</div>
				</div>
				<div class="column is-2">
					<div class="card">
						<header class="card-header">
							<p class="card-header-title is-centered has-background-grey-dark">
								<a href="#" class="has-text-white-ter has-text-weight-normal">
									Lan My
								</a>
							</p>
						</header>
						<div class="card-image">
							<figure class="image is-4by3">
								<img src="https://bulma.io/images/placeholders/1280x960.png" alt="Placeholder image">
							</figure>
						</div>
						<div class="card-content">
							<div class="content">
								Đọc <strong>Chương: 3</strong>
								<br>
								 lúc: <time datetime="2016-1-1">11:09 PM - 1 Jan 2016</time>
							</div>
						</div>
						<footer class="card-footer has-background-black">
							<a href="#" class="card-footer-item button is-danger is-outlined is-radiusless is-uppercase has-text-weight-semibold">Đọc tiếp</a>
						</footer>
					</div>
				</div>
				<div class="column is-2">
					<div class="card">
						<header class="card-header">
							<p class="card-header-title is-centered has-background-grey-dark">
								<a href="#" class="has-text-white-ter has-text-weight-normal">
									Gì nữa nào
								</a>
							</p>
						</header>
						<div class="card-image">
							<figure class="image is-4by3">
								<img src="https://bulma.io/images/placeholders/1280x960.png" alt="Placeholder image">
							</figure>
						</div>
						<div class="card-content">
							<div class="content">
								Đọc <strong>Chương: 3</strong>
								<br>
								 lúc: <time datetime="2016-1-1">11:09 PM - 1 Jan 2016</time>
							</div>
						</div>
						<footer class="card-footer has-background-black">
							<a href="#" class="card-footer-item button is-danger is-outlined is-radiusless is-uppercase has-text-weight-semibold">Đọc tiếp</a>
						</footer>
					</div>
				</div>
				
			</div>

		</div>

	</div>
</div>


@endcomponent