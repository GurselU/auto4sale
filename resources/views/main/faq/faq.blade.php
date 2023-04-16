@extends('main/layouts/app')
@section('content')
@include('main/partials/header')

<!--=================================
 inner-intro -->

 <section class="inner-intro bg-1 bg-overlay-black-70">
  <div class="container">
     <div class="row text-center intro-title">
           <div class="col-md-6 text-md-start d-inline-block">
             <h1 class="text-white">Faq</h1>
           </div>
           <div class="col-md-6 text-md-end float-end">
             <ul class="page-breadcrumb">
                <li><a href="#"><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-double-right"></i></li>
                <li><a href="#">pages</a> <i class="fa fa-angle-double-right"></i></li>
                <li><span>about us 1</span> </li>
             </ul>
           </div>
     </div>
  </div>
</section>

<!--=================================
 inner-intro -->


<!--=================================
 faq -->



<section class="privacy-policy page-section-ptb">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
         <div class="section-title">
           <span> Have a question? Please check our knowledgebase first.</span>
           <h2>Frequently Asked Questions </h2>
           <div class="separator"></div>
         </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
         <div id="tabs">
          <div class="tabs-header d-flex justify-content-center">
            <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
              <li class="nav-item" role="presentation">
                <button class="nav-link active" id="general-information-tab" data-bs-toggle="tab" data-bs-target="#general-information" type="button" role="tab" aria-controls="general-information" aria-selected="true">General Information</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link" id="features-options-tab" data-bs-toggle="tab" data-bs-target="#features-options" type="button" role="tab" aria-controls="features-options" aria-selected="false">Features & Options</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link" id="vehicle-overview-tab" data-bs-toggle="tab" data-bs-target="#vehicle-overview" type="button" role="tab" aria-controls="vehicle-overview" aria-selected="false">Vehicle Overview</button> 
              </li>
            </ul>
          </div>
          <div class="tab-content mb-0" id="myTabContent">

            <div class="tab-pane fade show active" id="general-information" role="tabpanel" aria-labelledby="general-information-tab">
              <div class="accordion" id="accordionExample01">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      What do I need to know before buying a car?
                    </button>
                  </h2>
                  <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample01">
                    <div class="accordion-body">
                      <h6>You will begin to realize why this exercise?</h6>
                      <p>Perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.</p>
                       <ul class="list-style-none">
                         <li>1. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum</li>
                         <li>2. Auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. </li>
                         <li>3. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit.</li>
                         <li>4. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit Class.</li>
                       </ul>
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      What is required if I sell my vehicle?
                    </button>
                  </h2>
                  <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample01">
                    <div class="accordion-body">
                      <h6>You will begin to realize why this exercise?</h6>
                      <p>Perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.</p>
                       <ul class="list-style-none">
                         <li>1. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum</li>
                         <li>2. Auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. </li>
                         <li>3. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit.</li>
                         <li>4. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit Class.</li>
                       </ul>
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                      Why am I receiving renewal notices for a car I sold?
                    </button>
                  </h2>
                  <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample01">
                    <div class="accordion-body">
                      <h6>You will begin to realize why this exercise?</h6>
                      <p>Perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.</p>
                       <ul class="list-style-none">
                         <li>1. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum</li>
                         <li>2. Auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. </li>
                         <li>3. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit.</li>
                         <li>4. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit Class.</li>
                       </ul>
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingfour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                      How many days do I have to transfer ownership?
                    </button>
                  </h2>
                  <div id="collapsefour" class="accordion-collapse collapse" aria-labelledby="headingfour" data-bs-parent="#accordionExample01">
                    <div class="accordion-body">
                      <h6>You will begin to realize why this exercise?</h6>
                      <p>Perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.</p>
                       <ul class="list-style-none">
                         <li>1. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum</li>
                         <li>2. Auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. </li>
                         <li>3. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit.</li>
                         <li>4. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit Class.</li>
                       </ul> 
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingFive">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                      Is the price you quote guaranteed?
                    </button>
                  </h2>
                  <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample01">
                    <div class="accordion-body">
                      <h6>You will begin to realize why this exercise?</h6>
                      <p>Perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.</p>
                       <ul class="list-style-none">
                         <li>1. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum</li>
                         <li>2. Auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. </li>
                         <li>3. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit.</li>
                         <li>4. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit Class.</li>
                       </ul> 
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingSix">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                      How much is the most you will pay for a car?
                    </button>
                  </h2>
                  <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample01">
                    <div class="accordion-body">
                      <h6>You will begin to realize why this exercise?</h6>
                      <p>Perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.</p>
                       <ul class="list-style-none">
                         <li>1. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum</li>
                         <li>2. Auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. </li>
                         <li>3. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit.</li>
                         <li>4. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit Class.</li>
                       </ul> 
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingSeven">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                      How much does a vehicle inspection cost?
                    </button>
                  </h2>
                  <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordionExample01">
                    <div class="accordion-body">
                      <h6>You will begin to realize why this exercise?</h6>
                      <p>Perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.</p>
                       <ul class="list-style-none">
                         <li>1. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum</li>
                         <li>2. Auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. </li>
                         <li>3. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit.</li>
                         <li>4. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit Class.</li>
                       </ul> 
                    </div>
                  </div>
                </div>
              </div>

            </div>

            <div class="tab-pane fade" id="features-options" role="tabpanel" aria-labelledby="features-options-tab">
              <div class="accordion" id="accordionExample02">

                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingEight">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="true" aria-controls="collapseEight">
                      How many days do I have to transfer ownership?
                    </button>
                  </h2>
                  <div id="collapseEight" class="accordion-collapse collapse show" aria-labelledby="headingEight" data-bs-parent="#accordionExample02">
                    <div class="accordion-body">
                      <h6>You will begin to realize why this exercise?</h6>
                      <p>Perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.</p>
                       <ul class="list-style-none">
                         <li>1. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum</li>
                         <li>2. Auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. </li>
                         <li>3. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit.</li>
                         <li>4. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit Class.</li>
                       </ul>
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingNine">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                     Is the price you quote guaranteed?
                    </button>
                  </h2>
                  <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine" data-bs-parent="#accordionExample02">
                    <div class="accordion-body">
                      <h6>You will begin to realize why this exercise?</h6>
                      <p>Perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.</p>
                       <ul class="list-style-none">
                         <li>1. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum</li>
                         <li>2. Auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. </li>
                         <li>3. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit.</li>
                         <li>4. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit Class.</li>
                       </ul>
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingTen">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                      How much is the most you will pay for a car?
                    </button>
                  </h2>
                  <div id="collapseTen" class="accordion-collapse collapse" aria-labelledby="headingTen" data-bs-parent="#accordionExample02">
                    <div class="accordion-body">
                      <h6>You will begin to realize why this exercise?</h6>
                      <p>Perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.</p>
                       <ul class="list-style-none">
                         <li>1. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum</li>
                         <li>2. Auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. </li>
                         <li>3. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit.</li>
                         <li>4. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit Class.</li>
                       </ul>
                    </div>
                  </div>
                </div>
              </div>


            </div>
             <div class="tab-pane fade" id="vehicle-overview" role="tabpanel" aria-labelledby="vehicle-overview-tab">

              <div class="accordion" id="accordionExample03">

                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingEleven">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEleven" aria-expanded="true" aria-controls="collapseEleven">
                      How many days do I have to transfer ownership?
                    </button>
                  </h2>
                  <div id="collapseEleven" class="accordion-collapse collapse show" aria-labelledby="headingEleven" data-bs-parent="#accordionExample03">
                    <div class="accordion-body">
                      <h6>You will begin to realize why this exercise?</h6>
                      <p>Perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.</p>
                       <ul class="list-style-none">
                         <li>1. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum</li>
                         <li>2. Auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. </li>
                         <li>3. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit.</li>
                         <li>4. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit Class.</li>
                       </ul>
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingTwelve">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwelve" aria-expanded="false" aria-controls="collapseTwelve">
                     Is the price you quote guaranteed?
                    </button>
                  </h2>
                  <div id="collapseTwelve" class="accordion-collapse collapse" aria-labelledby="headingTwelve" data-bs-parent="#accordionExample03">
                    <div class="accordion-body">
                      <h6>You will begin to realize why this exercise?</h6>
                      <p>Perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.</p>
                       <ul class="list-style-none">
                         <li>1. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum</li>
                         <li>2. Auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. </li>
                         <li>3. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit.</li>
                         <li>4. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit Class.</li>
                       </ul>
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingThirteen">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThirteen" aria-expanded="false" aria-controls="collapseThirteen">
                      How much is the most you will pay for a car?
                    </button>
                  </h2>
                  <div id="collapseThirteen" class="accordion-collapse collapse" aria-labelledby="headingThirteen" data-bs-parent="#accordionExample03">
                    <div class="accordion-body">
                      <h6>You will begin to realize why this exercise?</h6>
                      <p>Perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.</p>
                       <ul class="list-style-none">
                         <li>1. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum</li>
                         <li>2. Auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. </li>
                         <li>3. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit.</li>
                         <li>4. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit Class.</li>
                       </ul>
                    </div>
                  </div>
                </div>
              </div>

            </div>

          </div>
        </div>


       
      </div>
    </div>
   </div>
</section>

<!--=================================
faq -->



@endsection