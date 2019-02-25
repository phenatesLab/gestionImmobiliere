@extends("layouts.master")

@section('content')
    <div class="row">
        <div class="col s12 m6 l6"></div>
        <div class="col s12 m6 l6">
            <h4>Contactez-nous</h4>
            <p>Cherher des maisons en vente ou en location dans votre secteur</p>
            <div class="row">
                <form class="col s12">
                    <div class="row">
                        <div class="input-field col s6">
                            <input id="name" type="text" class="validate">
                            <label for="name">Name</label>
                        </div>
                        <div class="input-field col s6">
                            <input id="email" type="email" class="validate">
                            <label for="email">Email</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <textarea id="message" class="materialize-textarea"></textarea>
                            <label for="message">Message</label>
                        </div>
                    </div>
                    <button class="btn waves-effect waves-light" type="submit" name="action">Soumettre
                        <i class="material-icons right">send</i>
                    </button>

                </form>
            </div>
        </div>
    </div>
@stop