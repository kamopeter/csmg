@extends('welcome')
@section('content')
<section class="main-pic container">
    <div class="imagefent"><img src="{{ url('images/building/haz1-big.png') }}"  style="width: 100%; height: auto;"/>
        <div class="hero">
            <h1>Ház</h1>
            <p>Valami megnevezés</p>
        </div>
                </div>
  </section>
           </header>
<section class="content reference">
    <div class="ref-text">
        <h2 class="szoveg">ház</h2>
        <p class="szoveg">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam quis sapien bibendum, pulvinar dolor eget, consectetur velit. Donec velit nisl, interdum nec imperdiet in, iaculis id elit. Donec fermentum magna at purus congue convallis. Praesent ac ex a velit scelerisque molestie ultrices at nisi. Etiam sit amet arcu quis magna hendrerit dignissim. Donec nec fermentum dui, eget fringilla nunc. Pellentesque pulvinar ornare augue, id efficitur lorem dictum in. Pellentesque in orci eget elit ornare sodales. Fusce leo metus, pharetra a elementum facilisis, consequat non tortor. Maecenas faucibus porta quam nec molestie. Donec vitae volutpat libero, id pulvinar nisl. Etiam lobortis erat mi, id dapibus purus ornare et. Nullam lobortis purus vel erat sodales venenatis sit amet quis odio. Nunc ac ultrices tellus. In euismod lectus at lectus pretium pharetra non eget sem.

            Vestibulum congue elit eros, sit amet dignissim ligula egestas venenatis. Sed lacus massa, varius vitae mauris eget, volutpat posuere est. Sed nec condimentum nibh, sed euismod velit. Ut gravida lectus libero, ac pulvinar magna rhoncus non. Phasellus lobortis luctus erat dignissim tempor. Phasellus lacinia ante non aliquam sagittis. Quisque sodales erat id tempor mattis. Suspendisse potenti. Aliquam venenatis molestie sapien quis vestibulum. In hac habitasse platea dictumst. Maecenas semper vitae dui vitae placerat. Phasellus dictum, ipsum at lacinia laoreet, mi dui vehicula massa, luctus finibus erat neque non est. Fusce id laoreet dolor, sit amet efficitur sem.
        </p>
    <div class="ref-box">
        <h3 class="corner-border">{{ __('messages.category') }}</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam quis sapien bibendum</p>
    </div>
    <div class="ref-box">
        <h3 class="corner-border">{{ __('messages.yearBuild') }}</h3>
        <p>2020</p>
    </div>
    <div class="ref-box">
        <h3 class="corner-border">{{ __('messages.locali') }}</h3>
        <p>Pécs</p>
    </div>
    <div class="ref-share">
        <p>{{ __('messages.share') }}</p>
        <a href="#"><i class="lab la-facebook-square"></i></a> <a href="#"><i class="lab la-linkedin"></i></a>
    </div>
    </div>
    <div class="ref-img">
        <img src="{{ url('images/building/haz1-big.png') }}" >
        <img src="{{ url('images/building/haz1-big.png') }}">
    </div>

</section>
@endsection
