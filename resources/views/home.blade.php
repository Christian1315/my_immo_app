<x-home>
    <div class="row">
        <div class="col-md-4">
            <!-- <marquee direction="down" width="250" height="200" behavior="alternate">
                <marquee behavior="alternate" style="font-size: 20px;font-weight: bold;text-shadow: 2px 3px #fff;">EDOU-SERVICES</marquee>
            </marquee> -->
        </div>

        <div class="col-md-4">
            <!-- Card Container avec effet d'angle amélioré -->
            <div class="position-relative login-card-wrapper">
                <!-- Fond décoratif incliné avec animation -->
                <div class="position-absolute top-0 start-0 w-100 h-100 bg-red decorative-bg"
                    style="transform: rotate(-3deg); z-index: 0; border-radius: 15px;"></div>

                <!-- Carte principale -->
                <div class="card shadow-lg border-0 position-relative main-card" style="z-index: 1;">
                    <div class="card-body p-md-5">

                        <form action="{{route('user.login')}}" method="POST" class="animate__animated animate__bounce" id="form-login">
                            @csrf

                            <!-- Logo  -->
                            <div class="text-center mb-4 logo-container">
                                <img src="{{ asset('logo.png')}}"
                                    alt="ADJIV Logo"
                                    class="img-fluid mb-3 logo-image"
                                    style="max-width: 70px; height: auto;">
                            </div>

                            <h3 class="text-center text-dark">Connectez-vous ici! </h3>
                            <div class="input-group">
                                <span class="input-group-text p-2" id="basic-addon1"><i class="bi bi-person-lock"></i></span>
                                <input type="text" value="{{old('account')}}" autofocus name="account" class="form-control" placeholder="Votre identifiant ....">
                                @error("account")
                                <span class="text-danger"> {{$message}} </span>
                                @enderror
                            </div>
                            <br>
                            <div class="input-group">
                                <span class="input-group-text p-2" id="basic-addon1"><i class="bi bi-person-lock"></i></span>
                                <input type="password" value="{{old('password')}}" name="password" class="form-control" placeholder="Password">
                                @error("account")
                                <span class="text-danger"> {{$message}} </span>
                                @enderror
                            </div>

                            <br>
                            <button type="submit" class="btn bg-red text-white w-100"><i class="bi bi-check2-circle"></i> SE CONNECTER</button>
                            <br>
                            <br>
                            <div class="text-center">
                                <a href="/demande-reinitialisation" class="text-red" style="text-decoration: none;"> Réinitialisez votre compte <i class="bi bi-person-check"></i> !</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4"></div>
    </div>
</x-home>