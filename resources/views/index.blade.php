@extends("layouts.master")

@section('content')
    <div class="">
        <div class="center">
            <h4>TROUVER VOTRE EMPLACEMENT AVEC NOTRE APPLICATION</h4>
            <p><h5>Chercher des Studios, Villas, Bureaux, Maison, appartement sans bouger de chez vous</h5></p>
            <p><a href="{{ route('goods.show') }}" class="waves-effect waves-light btn-large">Plus de détails</a></p>
        </div>

        <div class="row blue darken-3">
            <div class="container">
                <form class="col s12">
                    <div class="row">
                        <div class="col s12 m3 l3">
                            <div class="input-field">
                                <input placeholder="Rue" name="street" type="search" required>
                            </div>
                        </div>
                        <div class="col s12 m3 l3">
                            <div class="input-field">
                                <input placeholder="Ville" name="town" type="search" required>
                            </div>
                        </div>
                        <div class="col s12 m3 l3">
                            <div class="input-field">
                                <input placeholder="Région" name="sector" type="search" required>
                            </div>
                        </div>
                        <div class="col s12 m3 l3">
                            <button class="btn waves-effect waves-light align-middle" type="submit" name="action">Chercher
                                <i class="material-icons right">send</i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="row">
            <div class="col s12 m4 l4">
                <h4 class="center-align">Plus rapide</h4>
                <p>
                    Avec un mode de recherche et de mise en relation simple et intuitif,
                    la prise de rendez-vous évite les « pas sérieux » et est intégrée à
                    l'agenda de l'application.
                </p>
            </div>
            <div class="col s12 m4 l4">
                <h4 class="center-align">Plus simple</h4>
                <p>
                    Pinql enregistre un dossier unique pour chaque locataire, qu'il suffit
                    d'envoyer en un clic une fois le marché conclu, sans justificatifs à
                    n'en plus finir.
                </p>
            </div>
            <div class="col s12 m4 l4">
                <h4 class="center-align">Moins cher</h4>
                <p>Pinql, vous épargne tous frais d'agences, pour le même service rendu.</p>
            </div>
        </div>

        <div class="row">
            <div class="col s12 m4 l4">
                <h4 class="center-align">Location appartement</h4>
            </div>
            <div class="col s12 m4 l4">
                <h4 class="center-align">Location Bureau</h4>
            </div>
            <div class="col s12 m4 l4">
                <h4 class="center-align">Colocation</h4>
            </div>
        </div>
    </div>
@stop