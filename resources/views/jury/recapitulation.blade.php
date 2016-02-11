@extends('layout')

@section('title')
    Recap
@stop

@section('contenu')

    @include('jury.nav')

    <div class="row">
        <h2 class="titre center blue-text"><u>Recap {{ $idEvaluation->libelleTypeEvaluation }}</u></h2>
    </div>

    <div class="section">

        <div class="row">

            <div class="card-panel">
                
                <h5 class="titre blue-text">Equipe de projet :</h5>
                <table>
                    <tr>
                        @foreach($etudiants as $etudiant)
                            <td>
                                <div id="cercle"></div>
                                {{ $etudiant->nomEtudiant }}
                                {{ $etudiant->prenomEtudiant }}
                            </td>
                        @endforeach
                    </tr>
                </table>

                <h5 class="titre blue-text">Membre du jury :</h5>
                <table>
                    <tr>
                        @foreach($roles as $role)
                            <td>
                                <div id="cercle"></div>
                                {{ $role->nomEnseignant }}
                                {{ $role->prenomEnseignant }}
                                {{ $role->libelleRole }}
                                {{ $role->vote }}
                            </td>
                        @endforeach
                    </tr>
                </table>

            </div>
        </div>

    </div>



    <form method="POST" action="{!! url('recapitulation/'.$id) !!}" accept-charset="UTF-8">
        {!! csrf_field() !!}
        <div class="section">

            <div class="row">
                <div class="card-panel">
                    <h5 class="titre blue-text">Notes pour le groupe :</h5>

                        <table>
                            <tr>
                                <th></th>
                                <?php $i=0;?>
                                @foreach($notes as $note)
                                    <?php if ($i<$nbEnseignant) {?>
                                        <td>{{ $note->nomEnseignant }}</td>
                                    <?php $i++;}?>
                                @endforeach
                            </tr>
                            <?php $idCritere=0;?>
                            @foreach($notes as $note)
                                @foreach($criteres as $critere)
                                    <?php if ($critere->critere_id==$note->critere_id) {
                                        if ($idCritere!=$note->critere_id) {
                                            $idCritere=$note->critere_id;?>
                                            <tr>
                                            <td><h class="titre green-text">{{ $note->libelleCritere }}</h></td>
                                            <td><input type="number" min="<?php if (($note->noteCritere)-2<0) {echo 0;} else{ echo ($note->noteCritere)-2;} ?>" max="<?php if (($note->noteCritere)+2>$critere->poids) {echo $critere->poids;} else{ echo ($note->noteCritere)+2;} ?>" name="critere<?= $note->critere_id; ?><?= $note->enseignant_id; ?>" id="input-critere<?= $note->critere_id; ?><?= $note->enseignant_id; ?>" class="validate" value="<?= $note->noteCritere; ?>" style="width: 80px; text-align: center"></td>
                                        <?php }else{?>
                                            <td><input type="number" min="<?php if (($note->noteCritere)-2<0) {echo 0;} else{ echo ($note->noteCritere)-2;} ?>" max="<?php if (($note->noteCritere)+2>$critere->poids) {echo $critere->poids;} else{ echo ($note->noteCritere)+2;} ?>" name="critere<?= $note->critere_id; ?><?= $note->enseignant_id; ?>" id="input-critere<?= $note->critere_id; ?><?= $note->enseignant_id; ?>" class="validate" value="<?= $note->noteCritere; ?>" style="width: 80px; text-align: center"></td>
                                        <?php }
                                    } ?>
                                @endforeach
                            @endforeach
                            <tr>
                                <td><h class="titre green-text">Note Groupe</h></td>     
                                <td><input type="number" min="<?php if (($idEvaluation->noteGroupe)-2<0) {echo 0;} else{ echo ($idEvaluation->noteGroupe)-2;} ?>" max="<?php if (($idEvaluation->noteGroupe)+2>20) {echo 20;} else{ echo ($idEvaluation->noteGroupe)+2;} ?>" name="noteMoyGroupe" id="input-noteMoyGroupe" class="validate" value="<?= $idEvaluation->noteGroupe; ?>" style="width: 80px; text-align: center"></td>
                            </tr>
                        </table>

                    </div>

            </div>
        </div>

        <div class="section">

            <div class="row">
                <div class="card-panel">
                    <h5 class="titre blue-text">Notes pour les etudiants :</h5>

                        <table>
                            <tr>
                                <th></th>
                                <td><h class="titre green-text">Note de l'etudiant</h></td>
                                <td><h class="titre green-text">Remarque de l'etudiant</h></td>
                            </tr>
                            @foreach($etudiants as $etudiant)
                                <tr>
                                    <td>{{ $etudiant->nomEtudiant }} {{ $etudiant->prenomEtudiant }}</td>
                                    <td><input type="number" min="<?php if (($idEvaluation->noteGroupe)-2<0) {echo 0;} else{ echo ($idEvaluation->noteGroupe)-2;} ?>" max="<?php if (($idEvaluation->noteGroupe)+2>20) {echo 20;} else{ echo ($idEvaluation->noteGroupe)+2;} ?>" name="note<?=$etudiant->id;?>" id="input-note<?=$etudiant->id;?>" class="validate" value="<?= $idEvaluation->noteGroupe; ?>" style="width: 80px; text-align: center"></td>
                                    <td><textarea name="remarque{{ $etudiant->id }}" id="remarque{{ $etudiant->id }}"></textarea></td>
                                </tr>
                            @endforeach 
                        </table>

                    </div>

            </div>
        </div>

        <div class="section">

            <div class="row">
                <div class="center">
                    <input type="submit" value="Valider">
                </div>
            </div>

        </div>
    </form>

    <div class="section">

        <div class="row">
            <hr class="spinner-blue">
            <p class="center">Application d'aide à l'évaluation de prestations orales développé par</p>
            <div class="defileParent">
                <span class="defile"
                      data-text="Cédric DEGRELLE | Gaëtan CRETIN | Valentin BONNAL | Thomas LEHMANN | Thibaud PERRIN |">
                        Cédric DEGRELLE | Gaëtan CRETIN | Valentin BONNAL | Thomas LEHMANN | Thibaud PERRIN |
            </span>
            </div>
        </div>

    </div>
@stop
