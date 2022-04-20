@extends('layouts.standard')

@section('metaTitle', 'Home')

@section('main')
  <main class="comics">

    <div class="container">
      <div id="current-series" class="button">CURRENT SERIES</div>
      <div class="card-wrapper">
        @foreach ($comics as $comic)
          <div class="card">
            <a href="#">
              <div class="img-wrapper">
                <img src="{{ $comic['thumb'] }}" alt="comic cover">
              </div>
              <span class="title">{{ strtoupper($comic['series']) }}</span>
            </a>
          </div>
        @endforeach
      </div>
      <div id="load-more" class="button">LOAD MORE</div><!-- TODO centrare sto coso -->
    </div>
    <div class="wrapper">
      <div class="container">
        <div class="box">
          <div class="img-wrapper">
            <img src="./img/buy-comics-digital-comics.png" alt="buy comics">
          </div>
          <span>DIGITAL COMICS</span>
        </div>
        <div class="box">
          <div class="img-wrapper">
            <img src="./img/buy-comics-merchandise.png" alt="buy comics">
          </div>
          <span>DC MERCHANDISE</span>
        </div>
        <div class="box">
          <div class="img-wrapper">
            <img src="./img/buy-comics-subscriptions.png" alt="buy comics">
          </div>
          <span>SUBSCRIPTION</span>
        </div>
        <div class="box">
          <div class="img-wrapper">
            <img src="./img/buy-comics-shop-locator.png" alt="buy comics">
          </div>
          <span>SHOP LOCATOR</span>
        </div>
        <div class="box">
          <div class="img-wrapper">
            <img src="./img/buy-dc-power-visa.svg" alt="buy comics">
          </div>
          <span>DC POWER VISA</span>
        </div>
      </div>
    </div>
  </main>
@endsection