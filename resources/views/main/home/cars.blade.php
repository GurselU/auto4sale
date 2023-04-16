<!--=================================
 feature-car -->

 <section class="feature-car gray-bg page-section-ptb">
  <div class="container">
   <div class="row">
    <div class="col-md-12">
      <div class="section-title">
         <span>Check out our recent cars</span>
         <h2>Feature Car </h2>
         <div class="separator"></div>
      </div>
    </div>
   </div>
 <div class="row">
  <div class="col-md-12">
   <div class="owl-carousel owl-theme" data-nav-dots="true" data-items="3" data-md-items="3" data-sm-items="2" data-xs-items="1" data-space="15">
     @foreach($cars as $car)
     <div class="item">
       <div class="car-item-2 text-center">
         <div class="car-image">
           <img class="img-fluid" src="images/car/03.jpg" alt="">
           <div class="car-overlay-banner">
            <ul>
              <li><a href="#"><i class="fa fa-link"></i></a></li>
              <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
             </ul>
           </div>
         </div>
         <div class="car-content">
          <a href="#">{{$car->mark}} {{$car->model}}</a>
          <div class="car-list">
           <ul class="list-inline">
             <li> {{$car->registration}}</li>
             <li>  {{$car->mileage}}km </li>
             <li>  {{$car->gearbox}} </li>
             <li> {{$car->fuel}}</li>
           </ul>
           </div>
           <div class="info">
             <p>realize why this dickens with to ghost you will begin to exercise Pattern is called the.</p>
           </div>
           <div class="price">
            @if($car->oldPrice != null)
             <span class="old-price">${{$car->oldPrice}}</span>
             @endif
             @if($car->price != null)
             <span class="new-price">${{$car->price}} </span>
             @endif
           </div>
         </div>
       </div>
     </div>
     @endforeach
    </div>
   </div>
  </div>
  </div>
</section>

<!--=================================
 feature-car -->