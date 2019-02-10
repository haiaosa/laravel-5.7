@component('master')

@slot('title')
Truyen - 1vs3
@endslot

<div class="tile is-ancestor notification is-paddingless is-marginless">

  <div class="tile is-parent is-vertical is-9">
    @include('truyen.trang-chu.truyen-de-cu')
    @include('truyen.trang-chu.truyen-moi-cap-nhat')
  </div>

  <div class="tile is-parent is-vertical">
    @include('truyen.trang-chu.ngay-tuan-thang')
    @include('truyen.trang-chu.lich-ra-truyen')
    @include('truyen.trang-chu.truyen-dang-theo-doi')
    @include('truyen.trang-chu.truyen-moi')
    @include('truyen.trang-chu.truyen-hoan-thanh')
  </div>

</div>

@endcomponent