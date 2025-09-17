@extends('master')
@section('title', 'About')
@section('content')
<section class="page-contact page-section cta">
    <div class="row gx-4 gx-lg-5 justify-content-center">
        <div class="col-md-10 col-lg-8 col-xl-7">
            @isset($data)
            <div class="text-contact">
                <p><strong>Nom: </strong>{{ $data->name}}</p>
                <p><strong>Courriel: </strong>{{ $data->email}}</p>
                <p><strong>Téléphone: </strong>{{ $data->phone}}</p>
                <p><strong>Message: </strong>{{ $data->message}}</p> 
            </div>
            @else
            <p class="text-contact">Tu veux rester en contact ? Remplis le formulaire ci-joint pour nous laisser un message et nous vous contacterons le plus tôt possible !</p>
            <div class="my-5">
                <!-- * * * * * * * * * * * * * * *-->
                <!-- * * SB Forms Contact Form * *-->
                <!-- * * * * * * * * * * * * * * *-->
                <!-- This form is pre-integrated with SB Forms.-->
                <!-- To make this form functional, sign up at-->
                <!-- https://startbootstrap.com/solution/contact-forms-->
                <!-- to get an API token!-->
                <form method="post">
                    @csrf
                    <div class="form-floating">
                        <input class="form-control" id="name" type="text" placeholder="Entre ton nom..." data-sb-validations="required" name="name" />
                        <label for="name">Nom</label>
                        <div class="invalid-feedback" data-sb-feedback="name:required">Un nom est requi.</div>
                    </div>
                    <div class="form-floating">
                        <input class="form-control" id="email" type="email" placeholder="Entre ton courriel..." data-sb-validations="required,email" name="email"/>
                        <label for="email">Courriel</label>
                        <div class="invalid-feedback" data-sb-feedback="email:required">Un courriel est requis.</div>
                        <div class="invalid-feedback" data-sb-feedback="email:email">Courriel invalide.</div>
                    </div>
                    <div class="form-floating">
                        <input class="form-control" id="phone" type="tel" placeholder="Entre ton téléphone..." data-sb-validations="required" name="phone"/>
                        <label for="phone">Téléphone</label>
                        <div class="invalid-feedback" data-sb-feedback="phone:required">Un numéro de téléphone est requis.</div>
                    </div>
                    <div class="form-floating">
                        <textarea class="form-control" id="message" placeholder="Entre ton message ici..." style="height: 12rem" data-sb-validations="required" name="message"></textarea>
                        <label for="message">Message</label>
                        <div class="invalid-feedback" data-sb-feedback="message:required">Un message est requis.</div>
                    </div>
                    <br />
                    <!-- Submit success message-->
                    <!---->
                    <!-- This is what your users will see when the form-->
                    <!-- has successfully submitted-->
                    <div class="d-none" id="submitSuccessMessage">
                        <div class="text-center mb-3">
                            <div class="fw-bolder">Le formulaire a été soumis avec succès!</div>
                            Pour activer ce formulaie, inscris-toi
                            <br />
                            <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                        </div>
                    </div>
                    <!-- Submit error message-->
                    <!---->
                    <!-- This is what your users will see when there is-->
                    <!-- an error submitting the form-->
                    <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Erreur de l'envoi !</div></div>
                    <!-- Submit Button-->
                    <button class="btn contact btn-primary text-uppercase" type="submit">Envoyer</button>
                </form>
            </div>
            @endisset
        </div>
    </div>
</section>
@endsection('content')