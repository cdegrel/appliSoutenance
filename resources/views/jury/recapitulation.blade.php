@extends('layout')

@section('title')
    Recap
@stop

@section('contenu')

    @include('jury.nav')
    <div id="containerTotal">
        <div class="fullcontent">
            <section class="sct-grd bg-marg-bt">
                <div class="title-top">

                    <div class="title-bg-ctnt">
                        <h1 class="title-Bg">Recap {{ $idEvaluation->libelleTypeEvaluation }}</h1>
                    </div>
                    <div class="title-bg-ctnt">
                        <h1 class="title-mid">@foreach($projets as $projet){{ $projet->libelleSujet }} @endforeach</h1>
                    </div>

                </div>

                <div class="img_ctnt">

                    <div class="title-bg-ctnt ltl-marg-bt">
                        <div class="title-crd-wht crd">
                            <p>Etudiants</p>
                        </div>
                    </div>



                    <div class="cnt-auto mdl-marg-bt">
                        <div class="auto-ctr">

                            @foreach($etudiants as $etudiant)

                                <div class="item-user">
                                    <div class="crcl-wht  crd"></div>

                                    <div class="title-bg-ctnt ttl-btm">
                                        <div class="title-crd-wht crd wdt-max">
                                            <p class="llt-ft">{{ $etudiant->nomEtudiant }} {{ $etudiant->prenomEtudiant }}</p>
                                        </div>
                                    </div>
                                </div>

                            @endforeach

                        </div>
                    </div>

                    <div class="title-bg-ctnt ltl-marg-bt">
                        <div class="title-crd-wht crd">
                            <p>Membres du jury :</p>
                        </div>
                    </div>

                    <div class="cnt-auto mdl-marg-bt">
                        <div class="auto-ctr">

                            @foreach($roles as $role)
                                <div class="item-user">
                                    <div class="crcl-wht crd"></div>

                                    <div class="title-bg-ctnt ttl-btm">
                                        <div class="title-crd-wht crd wdt-max">
                                            <p class="llt-ft"@if($role->libelleRole == 'maitre') style="color:red;" @endif >{{ $role->nomEnseignant }} {{ $role->prenomEnseignant }} {{ $role->vote }}</p>
                                        </div>
                                    </div>
                                </div>

                            @endforeach


                        </div>
                    </div>

                    <div class="cnt-auto">
                        <div class="crd-dbl crd auto-ctr">

                            <div class="title-bg-ctnt ttl-tp">
                                <div class="title-crd-wht crd">
                                    <p class="mdl-ft">Tuteur</p>
                                </div>
                            </div>

                            @foreach($projets as $projet)
                                <p>{{ $projet->enseignant->prenomEnseignant }} {{ $projet->enseignant->nomEnseignant }}</p>
                            @endforeach

                        </div>
                    </div>
                </div>

            </section>

            <section class="sct-grd">

                <div class="title-bg-ctnt mdl-marg-bt">
                    <h1 class="title-mid">Notes pour le groupe :</h1>
                </div>

                <form method="POST" action="{!! url('recapitulation/'.$id) !!}" accept-charset="UTF-8" class="mdl-marg-bt">
                    {!! csrf_field() !!}

                    <div class="crd tbl-crd tbl1-crd bg-marg-bt">

                        <table class="wdt-max">
                            <tbody class="wdt-max">

                            <tr class="tbl-head">
                                <th></th>
                                <?php $i=0;?>
                                @foreach($notes as $note)
                                    <?php if ($i<$nbEnseignant):?>
                                        <th>{{ $note->nomEnseignant }}</th>
                                        <?php $i++;?>
                                    <?php endif;?>
                                @endforeach
                            </tr>

                            <?php $idCritere=0;?>
                            @foreach($notes as $note)
                                @foreach($criteres as $critere)
                                    <?php if ($critere->critere_id==$note->critere_id) {
                                    if ($idCritere!=$note->critere_id) {
                                    $idCritere=$note->critere_id;?>
                                    <tr>
                                        <td>{{ $note->libelleCritere }}</td>
                                        <td><input type="number" min="<?php if (($note->noteCritere)-2<0) {echo 0;} else{ echo ($note->noteCritere)-2;} ?>" max="<?php if (($note->noteCritere)+2>$critere->poids) {echo $critere->poids;} else{ echo ($note->noteCritere)+2;} ?>" name="critere<?= $note->critere_id; ?><?= $note->enseignant_id; ?>" id="input-critere<?= $note->critere_id; ?><?= $note->enseignant_id; ?>" class="validate crd nbr-crd" value="<?= $note->noteCritere; ?>"></td>
                                        <?php }else{?>
                                        <td><input type="number" min="<?php if (($note->noteCritere)-2<0) {echo 0;} else{ echo ($note->noteCritere)-2;} ?>" max="<?php if (($note->noteCritere)+2>$critere->poids) {echo $critere->poids;} else{ echo ($note->noteCritere)+2;} ?>" name="critere<?= $note->critere_id; ?><?= $note->enseignant_id; ?>" id="input-critere<?= $note->critere_id; ?><?= $note->enseignant_id; ?>" class="validate crd nbr-crd" value="<?= $note->noteCritere; ?>"></td>
                                    <?php }
                                    } ?>
                                @endforeach
                            @endforeach
                            <tr>
                                <td>Note Groupe</td>
                                <td  style="text-align: center; padding: 0px"><input type="number" min="<?php if (($idEvaluation->noteGroupe)-2<0) {echo 0;} else{ echo ($idEvaluation->noteGroupe)-2;} ?>" max="<?php if (($idEvaluation->noteGroupe)+2>20) {echo 20;} else{ echo ($idEvaluation->noteGroupe)+2;} ?>" name="noteMoyGroupe" id="input-noteMoyGroupe" class="validate crd nbr-crd" value="<?= $idEvaluation->noteGroupe; ?>"></td>
                            </tr>

                            </tbody>
                        </table>
                    </div>

                    <div class="title-bg-ctnt mdl-marg-bt">
                        <h1 class="title-mid">Notes individuelles :</h1>
                    </div>

                    <div class="crd tbl-crd bg-marg-bt">

                        <table class="wdt-max">
                            <tbody class="wdt-max">

                            <tr class="tbl-head">
                                <th></th>
                                <th>Note de l'etudiant</th>
                                <th>Remarque pour l'etudiant</th>
                            </tr>
                            @foreach($etudiants as $etudiant)
                                <tr>
                                    <td>{{ $etudiant->nomEtudiant }} {{ $etudiant->prenomEtudiant }}</td>
                                    <td><input type="number" min="<?php if (($idEvaluation->noteGroupe)-2<0) {echo 0;} else{ echo ($idEvaluation->noteGroupe)-2;} ?>" max="<?php if (($idEvaluation->noteGroupe)+2>20) {echo 20;} else{ echo ($idEvaluation->noteGroupe)+2;} ?>" name="note<?=$etudiant->id;?>" id="input-note<?=$etudiant->id;?>" class="validate crd nbr-crd" value="<?= $idEvaluation->noteGroupe; ?>"></td>
                                    <td><textarea class="crd crd-txtarea-tbl" name="remarque{{ $etudiant->id }}" id="remarque{{ $etudiant->id }}"></textarea></td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>

                    </div>

                    <div class="wdt-max-nln-blc">
                        <input type="submit" value="Valider" class="crd title-crd-wht">
                    </div>

                </form>

                <div class="defileParent">
                    <span class="defile" data-text="Cédric DEGRELLE | Gaëtan CRETIN | Valentin BONNAL | Thomas LEHMANN | Thibaud PERRIN |">
                            Cédric DEGRELLE | Gaëtan CRETIN | Valentin BONNAL | Thomas LEHMANN | Thibaud PERRIN |
                    </span>
                </div>

            </section>
        </div>
    </div>


    <script>
        $(document).ready(function(){
            var i = 0;
            $('.tbl1-crd table tbody tr:nth-child(2) td').each(function () {
                i++;
            });
            $(".tbl1-crd table .tbl-head th").css("width", (100/i)+"%");

        });

    </script>
@stop
