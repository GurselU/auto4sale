@extends('main/layouts/app')

@section('content')
@include('admin.partials.smallheader')

<!--=================================
 register-form  -->

<section class="register-form page-section-ptb">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="section-title">
                    <h2>modifiez vos donnees</h2>
                    <div class="separator"></div>
                </div>
            </div>
        </div>
    @include()


    </div>
</section>

<!--=================================
 register-form  -->


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