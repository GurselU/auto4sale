<div class="row justify-content-center pb-5">
    <div class="col-lg-8 col-md-12">
        <div class="gray-form">
            <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
                @csrf
                @method('put')

                <div>
                    <x-input-label for="current_password" :value="__('Current Password')" />
                    <x-text-input id="current_password" name="current_password" type="password" class="mt-1 block w-full" autocomplete="current-password" />
                    <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
                </div>

                <!-- Password -->
                <div class="mb-3">
                    <label for="password" class="form-label">Mot de passe (minimum 8 caractères)*</label>
                    <input id="password" class="form-control" type="password" placeholder="Mot de passe" name="password" required>
                </div>
                <!-- Password -->
                <div class="mb-3">
                    <label for="password" class="form-label">Mot de passe (minimum 8 caractères)*</label>
                    <input id="password" class="form-control" type="password" placeholder="Mot de passe" name="password" required>
                </div>

                <!-- Confirm Password -->
                <div class="mb-3">
                    <div class="d-flex">
                        <label for="password_confirmation" class="form-label">Confirmez mot de passe*&nbsp;</label>
                        <div id="pswdlabel"></div>
                    </div>
                    <input id="password_confirmation" class="form-control" onblur="pswdCheck()" type="password" placeholder="Confirmez mot de passe" name="password_confirmation" required>
                </div>


                <div>
                    <x-input-label for="password" :value="__('New Password')" />
                    <x-text-input id="password" name="password" type="password" class="mt-1 block w-full" autocomplete="new-password" />
                    <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
                </div>

                <div>
                    <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
                    <x-text-input id="password_confirmation" name="password_confirmation" type="password" class="mt-1 block w-full" autocomplete="new-password" />
                    <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
                </div>

                <div class="flex items-center gap-4">
                    <x-primary-button>{{ __('Save') }}</x-primary-button>

                    @if (session('status') === 'password-updated')
                    <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)" class="text-sm text-gray-600 dark:text-gray-400">{{ __('Saved.') }}</p>
                    @endif
                </div>
            </form>
        </div>
    </div>
</div>