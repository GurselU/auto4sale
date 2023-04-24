<div class="row justify-content-center pt-5">
    <div class="col-lg-8 col-md-12">
        <div class="gray-form">
            <form method="post" action="{{ route('profile.destroy') }}" class="p-6">
                @csrf
                @method('delete')

                <h4>Etes-vous sur de vouloir supprimer votre compte ?</h4>

                <p>Si vous supprimer votre compte, toutes les données liées à votre compte seront supprimer également.</p>

                <div class="mb-3">

                    <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Mot de passe*</label>
                    <input id="password" class="form-control" type="password" placeholder="Mot de passe" name="password">
                    <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2" />
                </div>

                <div class="d-grid">
                    <button type="submit" class="button red btn-block"> Supprimer compte </button>
                </div>
            </form>
        </div>
    </div>
</div>