@extends('main.layouts.app')
@section('content')


<!--=================================
 error -->

<section class="error-page page-section-ptb">
  <div class="container">
    <div class="row">
     <div class="col-md-12">
        <div class="error-content text-center">
          <img class="img-fluid center-block" src="images/car/23.png" alt="">
          <h3 class="text-red">Compte en analyse </h3>
          <strong class="text-black"> Nous somme entrain de vérifier votre compte</strong>
          <p>Vous serez bientôt contacter par un de nos conseiller pour vérifier votre compte</p>
          <a href="{{ url('') }}"> Page d'acceuil </a>
        </div>
      </div>
     </div>
   </div>
</section>

<!--=================================
 error -->

@endsection