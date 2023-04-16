<!--=================================
 Newsletter -->
<form method="post" action="{{ route('newsmail.store') }}">
  @csrf
  @method('POST')
  <section class="news-letter-main bg-1 bg-overlay-black-70">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h4 class="text-red">Abonnez-vous à notre newsletter</h4>
        </div>
        <div class="col-md-6">
          <form class="news-letter-form">
            <div class="row g-0">
              <div class="col-md-9 col-sm-8 col-7"><input name="email" type="email" placeholder="Entrez votre Email" class="form-control placeholder"></div>
              <div class="col-md-3 col-sm-4 col-5 d-grid">
                <button class="button red btn-block" type="submit">S'abonner</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
</form>

<!--=================================
 Newsletter -->