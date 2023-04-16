@extends('main/layouts/app')
@section('content')
@include('main/partials/header')

<section class="coming-soon page-section-ptb">
  <div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="section-title">
         <h2>coming soon </h2>
         <div class="separator"></div>
      </div>
    </div>
   </div>
    <div class="row">
     <div class="col-md-12">
        <div class="countdown">
          <p>We are working very hard on the new version of our site. It will bring a lot of new features. Stay tuned!</p>
          </div>
       </div>
     </div>
   </div>
</section>


@include('main/partials/footer')
@endsection