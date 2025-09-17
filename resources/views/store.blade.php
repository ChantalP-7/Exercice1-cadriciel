@extends('master')
@section('title', 'Notre boutique')
@section('content')
<section class="page-section cta">
            <div class="container">
                <div class="row">
                    <div class="col-xl-9 mx-auto">
                        <div class="cta-inner bg-faded text-center rounded">
                            <h2 class="section-heading mb-5">
                                <span class="section-heading-upper">Entrez</span>
                                <span class="section-heading-lower">Nous sommes ouverts</span>
                            </h2>
                            <ul class="list-unstyled list-hours mb-5 text-left mx-auto">
                                <li class="list-unstyled-item list-hours-item d-flex">
                                    Dimanche
                                    <span class="ms-auto">Fermé</span>
                                </li>
                                <li class="list-unstyled-item list-hours-item d-flex">
                                    Lundi
                                    <span class="ms-auto">7:00 AM à 8:00 PM</span>
                                </li>
                                <li class="list-unstyled-item list-hours-item simple d-flex">
                                    Mardi
                                    <span class="ms-auto simple">1:00 PM à 8:00 PM</span>
                                </li>
                                <li class="list-unstyled-item list-hours-item d-flex">
                                    Mercredi
                                    <span class="ms-auto">7:00 AM à 8:00 PM</span>
                                </li>
                                <li class="list-unstyled-item list-hours-item d-flex">
                                    Jeudi
                                    <span class="ms-auto">7:00 AM à 8:00 PM</span>
                                </li>
                                <li class="list-unstyled-item list-hours-item d-flex">
                                    Vendredi
                                    <span class="ms-auto">7:00 AM à 8:00 PM</span>
                                </li>
                                <li class="list-unstyled-item list-hours-item d-flex">
                                    Samedi
                                    <span class="ms-auto">9:00 AM à 5:00 PM</span>
                                </li>
                            </ul>
                            <p class="address mb-5">
                                <em>
                                    <strong>1116 Chemin des Oliviers</strong>
                                    <br />
                                    Paris, France
                                </em>
                            </p>
                            <p class="mb-0">
                                <small><em>Appelez en tout temps</em></small>
                                <br />
                                +33 1 43 48 55
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="page-section about-heading">
    <div class="container">
        <img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" src="assets/img/pexels-amina-filkins-5410119.jpg" alt="..." />
        <div class="about-heading-content">
            <div class="row">
                <div class="col-xl-9 col-lg-10 mx-auto">
                    <div class="bg-faded rounded p-5">
                        <h2 class="section-heading mb-4">
                            <span class="section-heading-upper mb-4">Délicates, élégantes ou sauvages</span>
                            <span class="section-heading-lower">L'histoire de nos fleurs</span>
                        </h2>
                        <p>Située au cœur de Paris, notre boutique de fleurs est un véritable écrin de nature en plein centre-ville. Passionné.e.s par l’art floral, nous sélectionnons chaque jour des fleurs fraîches et de saison pour créer des compositions uniques, élégantes et pleines de vie.</p>
                        <p class="mb-0">Chez nous, chaque bouquet raconte une histoire, qu’elle soit <em>d’amour</em>, d’amitié ou de célébration. Que vous cherchiez un petit geste attentionné ou une création sur-mesure, notre équipe vous accueille avec le sourire et le souci du détail. Entrez, respirez, laissez-vous inspirer.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
        
@endsection('content')