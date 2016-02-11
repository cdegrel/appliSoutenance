@extends('layout')

@section('title')
    Grille notation
@stop

@section('contenu')

    <div id="containerTotal">

        <div class="fullcontent">
            <section class="sct-grd bg-marg-bt">

                <div class="title-top">

                    <div class="title-bg-ctnt">
                        <h1 class="title-Bg">{{ $idEvaluation->libelleTypeEvaluation }}</h1>
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
                            <p>Professeurs</p>
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
                    <h1 class="title-mid">Critères de notation</h1>
                </div>

                <form method="POST" action="{!! url('grille/'.$id.'/'.$idE) !!}" accept-charset="UTF-8" class="mdl-marg-bt">
                    {!! csrf_field() !!}

                    <div class="crd tbl-crd bg-marg-bt">

                        <table class="wdt-max">
                            <tbody class="wdt-max">

                            <tr class="tbl-head">
                                <th>Nom critère</th>
                                <th>Votre note</th>
                                <th>Note maximal</th>
                            </tr>
                            @foreach($criteres as $critere)
                                <tr>
                                    <td>{{ $critere->libelleCritere }}</td>
                                    <td><input type="number" value="0" min="0" max="<?= $critere->poids; ?>" name="critere<?= $critere->critere_id; ?>" class="crd nbr-crd note" id="input-critere<?= $critere->critere_id; ?>" onclick="calculNoteFunction();"></td>
                                    <td><input type="number" value="<?= $critere->poids; ?>" class="crd nbr-crd note-mx" readonly></td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>

                        <div class="crd nbr-crd crd-ttl-nt">
                            <p class="resultatNote">0</p>
                            <p>0</p>
                        </div>
                    </div>

                    <div class="title-bg-ctnt mdl-marg-bt">
                        <h1 class="title-mid">Question(s) récurrentes</h1>
                    </div>

                    <div class="wdt-max-nln-blc bg-marg-bt">
                        <div class="ctnt-txt-area wdth-md">
                            <div class="crd crd-Q title-crd-wht">
                                <p>Question 1</p>
                            </div>
                            <textarea name="Question1" class="crd crd-txtarea" placeholder="Réponse ..."></textarea>
                        </div>
                        <div class="ctnt-txt-area wdth-md">
                            <div class="crd crd-Q title-crd-wht ">
                                <p>Question 2</p>
                            </div>
                            <textarea name="Question2" class="crd crd-txtarea" placeholder="Réponse ..."></textarea>
                        </div>
                    </div>

                    <div class="title-bg-ctnt mdl-marg-bt">
                        <h1 class="title-mid">Remarques / Note</h1>
                    </div>

                    <div class="wdt-max-nln-blc mdl-marg-bt">
                        <div class="ctnt-txt-area wdt-max">
                            <div class="crd crd-Q title-crd-wht ">
                                <p>Remaque(s)</p>
                            </div>
                            <textarea name="Question1" class="crd crd-txtarea" placeholder="Remarque(s) ..."></textarea>
                        </div>
                    </div>

                    <div class="cnt-auto mdl-marg-bt">
                        <div class="crd-dbl crd auto-ctr">

                            <div class="title-bg-ctnt ttl-tp">
                                <div class="title-crd-wht crd">
                                    <p class="llt-ft">Note Final</p>
                                </div>
                            </div>

                            <input type="number" value="0" class="resultatNote" readonly>
                        </div>
                    </div>

                    <div class="approv mdl-marg-bt">
                        <input type="checkbox" id="approv-chck">
                        <label for="approv-chck">Lu et approuvé le .... à ...</label>
                    </div>

                    <div class="wdt-max-nln-blc">
                        <input type="submit" value="Valider" class="crd title-crd-wht">
                    </div>

                </form>
            </section>
        </div>

    </div>

    <!--script calcul de la note (obligatoirement dans le html)-->
    <script>
        $(document).ready(function(){
            calculNoteFunction();
        });

        function calculNoteFunction() {
            var totalNoteMax = 0;
            $('.note-mx').each(function(){
                totalNoteMax = totalNoteMax+parseInt($(this).val());
                $('.crd-ttl-nt p:nth-child(2)').text(totalNoteMax);
            });

            totalNoteMax = 0;
            $("input.note").keyup(function () {
                totalNoteMax =0;
                $('input.note').each(function () {
                    totalNoteMax = totalNoteMax + parseInt($(this).val());
                    $('.resultatNote').text(totalNoteMax);
                    $('.resultatNote').val(totalNoteMax);
                });
            }).keyup();
        }
    </script>
    <!--script calcul de la note (obligatoirement dans le html)-->



@stop
