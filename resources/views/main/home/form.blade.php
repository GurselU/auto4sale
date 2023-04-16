<div class="page-section-ptb">
  <div class="container">
    <div class="row">
      <div class="row">
        <div class="col-md-12">
          <div class="section-title">
            <h2 id="redirectionFormulaire">Formulaire </h2>
            <div class="separator"></div>
          </div>
        </div>
      </div>
      <div class="col-lg-12 col-sm-12">
        <div class="gray-form">
          <div id="formmessage" class="form-notice" style="display:none;">
            @foreach ($errors->all() as $error)
            <div class="flex items-start">
              <div class="flex-shrink-0">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="red" class="w-6 h-6">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
              </div>
              <div class="ml-3 w-0 flex-1 pt-0.5">
                <p class="text-sm font-medium text-gray-900">{{ $error }}</p>
              </div>
            </div>
            @endforeach
          </div>
          <form class="form-horizontal" id="formcontact" role="form" method="post" action="{{ route('form.store') }}">
            @csrf
            @method('POST')
            <div class="contact-form row">
              <div class="col-lg-4 col-sm-12">
                <div class="mb-3">
                  <input id="formcontact_name" type="text" placeholder="Nom Prénom*" class="form-control" name="name" required>
                </div>
              </div>
              <div class="col-lg-4 col-sm-12">
                <div class="mb-3">
                  <input id="formcontact_phone" type="text" placeholder="GSM*" class="form-control" name="phone" required>
                </div>
              </div>
              <div class="col-lg-4 col-sm-12">
                <div class="mb-3">
                  <input id="formcontact_mark" type="text" placeholder="Marque et Modèle*" class="form-control" name="mark" required>
                </div>
              </div>
              <div class="col-lg-4 col-sm-12">
                <div class="mb-3">
                  <input id="formcontact_mileage" type="text" placeholder="Kilométrage*" class="form-control" name="mileage" required>
                </div>
              </div>
              <div class="col-lg-4 col-sm-12">
                <div class="mb-3">
                  <input id="formcontact_year" type="text" placeholder="Année*" class="form-control" name="year" required>
                </div>
              </div>
              <div class="col-lg-4 col-sm-12">
                <div class="mb-3">
                  <input id="formcontact_zipcode" type="text" placeholder="Code Postale*" class="form-control" name="zipCode" required>
                </div>
              </div>
              <div class="col-lg-4 col-sm-12">
                <div class="mb-3">
                  <select id="fuel" name="fuel">
                    <option value='Diesel'>Diesel</option>
                    <option value='Essence'>Essence</option>
                    <option value='Plug-in Hybrid Diesel'>Plug-in Hybrid Diesel</option>
                    <option value='Plug-in Hybrid Essence'>Plug-in Hybrid Essence</option>
                    <option value='Mild Hybrid'>Mild Hybrid</option>
                    <option value='Electric'>Electric</option>
                  </select>
                </div>
              </div>

              <div class="col-lg-4 col-sm-12">
                <div class="mb-3">
                  <input id="formcontact_email" type="email" placeholder="Email" class="form-control" name="email">
                </div>
              </div>

              <fieldset class="col-lg-4 pb-3" id="availableCheck">
                <div>Disponible Immédiatement ?</div>
                <div>
                  <div class="d-flex justify-content-start">
                    <input style="width: 15px" type="radio" id="yes" name="available" value="yes" onclick="showDate()" checked>
                    <label class="px-3" for="yes">Oui</label>
                  </div>

                  <div class="d-flex justify-content-start">
                    <input style="width: 15px" type="radio" id="checker" name="available" onclick="showDate()">
                    <label class="px-3" for="checker">Non</label>
                  </div>
                  <input class="w-auto h-" type="date" id="availabledate" name="availabledate" hidden>
                </div>
              </fieldset>


              <div class="col-md-12">
                <div class="mb-3">
                  <textarea id="formcontact_message" class="form-control input-message" placeholder="Description" rows="7" name="message"></textarea>
                </div>
              </div>
              <div class="col-md-12">
                <button id="contactFormButton" name="submit" type="submit" value="Send" class="button red">Envoyez le formulaire <i class="fa fa-spinner fa-spin fa-fw btn-loader" style="display: none;"></i></button>
              </div>
            </div>
          </form>
          @if (session()->has('success'))
          <div class="rounded bg-success p-3 mt-3 text-white fw-bold text-center">
            {{ session()->get('success') }}
          </div>
          @endif
        </div>
      </div>
    </div>
  </div>
</div>