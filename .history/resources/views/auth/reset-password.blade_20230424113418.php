@extends('main/layouts/app')

@section('content')
@include('main/partials/smallheader')
<!--=================================
 login-form  -->

<section class="login-form page-section-ptb">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title">
                    <h2>Changer votre mot de passe</h2>
                    <div class="separator"></div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-12">
                <form method="POST" action="{{ route('password.store') }}">
                    @csrf
                    <!-- Password Reset Token -->
                    <input type="hidden" name="token" value="{{ $request->route('token') }}">
                    <div class="gray-form clearfix">
                        <div class="mb-3">
                            <label class="form-label" for="email">Email* </label>
                            <input id="email" class="form-control" type="email" placeholder="Email" name="email" required autofocus>
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
                        <div class="d-grid">
                            <button type="submit" class="button red btn-block"> Changer mot de passe </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<!--=================================
 login-form  -->

 <script>
    function pswdCheck() {
        var pw1 = document.getElementById("password").value;
        var pw2 = document.getElementById("password_confirmation").value;
        var pswdlabel = document.getElementById("pswdlabel");
        if (pw1 != pw2) {
            console.log(pw1);
            console.log(pw2);
            pswdlabel.classList.remove('text-success');
            pswdlabel.classList.add('text-danger');
            document.getElementById('pswdlabel').innerHTML = '(Les mots de passe que vous avez entrés ne sont pas identiques.)';
        } else {
            pswdlabel.classList.remove('text-danger');
            pswdlabel.classList.add('text-success');
            document.getElementById('pswdlabel').innerHTML = '(Confirmation bon)';
        }
    }
</script>
@endsection