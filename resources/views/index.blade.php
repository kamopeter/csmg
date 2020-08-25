@extends('welcome')
@section('content')
<section class="slider container">
    <div><img src="images/backg.png"  style="width: 100%; height: auto;"/>
                </div>
    <div><img src="images/backg.png" style="width: 100%; height: auto;"/>
                </div>

  </section>
           </header>
<div class="content">
 <section  class="whatwedo">
    <div class="cards">
        <div class="card-text">
        <i class="las la-drafting-compass"></i>
        <h1><span>{{ __('messages.planning') }}</span></h1>
        <p>Megtervezzük a házát</p>
        </div>
    </div>
    <div class="cards">
        <div class="card-text">
        <i class="las la-hard-hat"></i>
        <h1><span>{{ __('messages.performance') }}</span></h1>
        <p>Felépítjük</p>
        </div>
    </div>
    <div class="cards">
        <div class="card-text">
        <i class="las la-bullhorn"></i>
        <h1><span>{{ __('messages.selling') }}</span></h1>
        <p>El is adjuk</p>
        </div>
    </div>
 </section>
 <section class="about" id="whatwe">
 <div class="main-text">
     <h1><span>{{ __('messages.about') }}</span></h1>
     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut auctor magna id quam malesuada, nec iaculis ante dictum. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Sed eu nibh urna. Cras aliquet turpis ultricies, sollicitudin ligula ac, molestie neque. Nullam facilisis faucibus magna, varius tempor ipsum consectetur vel. Nullam id nibh molestie nunc semper consequat. Quisque eget ipsum sit amet dolor pharetra faucibus vel vel diam.

         Sed dui lectus, elementum a tincidunt at, feugiat et risus. Donec luctus dignissim tellus sit amet efficitur. Fusce lacinia orci ut odio iaculis volutpat. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nullam bibendum non massa non pellentesque. Suspendisse vel magna vel nisl lobortis suscipit id bibendum ligula. Sed aliquet, dui molestie ultricies placerat, mi diam aliquam libero, id consequat ex risus vitae lectus. Ut in est sed nisl facilisis maximus. Curabitur eleifend semper bibendum.</p>
 </div>
 </section>
 <div></div>
 <section class="referencia">
    <h1 id="ref"><span>{{ __('messages.reference') }}</span></h1>
    <div class="boxes">
        <div class="cards-main">
            <figure class="c4-izmir c4-border-bottom-left c4-image-zoom-in" style="width:300px; height: auto; margin-right: 5px; --primary-color: rgba(0,0,0,0.8);">
                <img src="images/building/haz1.png" alt="Sample Image">
                <figcaption>
                    <div class="c4-reveal-down">
                        <h3>
                          Ház1
                        </h3><br>
                        <p>Ide meg jön valami szöveg</p><br>
                        <a href="{{ route('haz1') }}" class="button-ref">{{ __('messages.see') }}</a>
                      </div>
                    </figcaption>
              </figure>
              <figure class="c4-izmir c4-border-bottom-left c4-image-zoom-in" style="width: 300px; height: auto; margin-right: 5px; --primary-color: rgba(0,0,0,0.8);">
                <img src="images/paradohuta.png" alt="Sample Image">
                <figcaption>
                    <div class="c4-reveal-down">
                        <h3>
                          Ház2
                        </h3><br>
                        <p>Ide meg jön valami szöveg</p>
                      </div>
              </figure>
              <figure class="c4-izmir c4-border-bottom-left c4-image-zoom-in" style="width: 300px; height: auto; margin-right: 5px; --primary-color: rgba(0,0,0,0.8);">
                <img src="images/paradohuta.png" alt="Sample Image">
                <figcaption>
                    <div class="c4-reveal-down">
                        <h3>
                          Ház3
                        </h3><br>
                        <p>Ide meg jön valami szöveg</p>
                      </div>
              </figure>

        </div>
    </div>
 </section>
 <div style="clear: both"></div>
 <section class="contact">
    <h1 id="cont"><span>{{ __('messages.contact') }}</span></h1>
    <div class="flex">
    <div class="contact-box b-r">
        <h2>CSM GENERAL Kft.</h2>
        <p>
            H-9024 Győr, Babits Mihály utca 17. A épület<br>
            Pécs, Bajcsy-Zsilinszky utca 9. 3.em<br>
            E-mail:<a href="mailto:office@csmarchitect.hu">office@csmarchitect.hu</a><br>
            Tel:<a href="tel:06303636241">+36 30 36 36 241</a><br>
    </p>
        </div>
    <div class="contact-box"><img src="images/logo-big.png" /></div>
    </div>
</section>
 </div>

@endsection
