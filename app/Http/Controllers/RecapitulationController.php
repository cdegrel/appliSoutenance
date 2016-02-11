<?php

namespace App\Http\Controllers;

use App\Models\GroupeProjet;
use App\Models\Evaluation;
use App\Models\EnseignantEvaluationRole;
use App\Models\CritereTypeEvaluation;
use App\Models\Etudiant;
use App\Models\CritereEnseignantEvaluation;
use App\Models\EtudiantEvaluation;

use Illuminate\Http\Request;

use App\Http\Requests;

class RecapitulationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //test pour voir si l'esclave essaye de se co sur cette page et si c'est le cas le renvoyer
        //test pour voir si le maître essaye de se co sur cette page sans avoir voté et si c'est la cas le renvoyer
        
        $idEvaluation = Evaluation::join('type_evaluations','type_evaluations.id','=','evaluations.type_evaluation_id')
                                    ->where('evaluations.id',$id)
                                    ->first();
        $etudiants = Etudiant::where('groupe_projet_id',$idEvaluation->groupe_projet_id)
                                ->get();
        $projets = GroupeProjet::with('etudiant', 'enseignant')
                                  ->whereId($idEvaluation->groupe_projet_id)
                                  ->get();
        $roles = EnseignantEvaluationRole::join('roles','roles.id','=','enseignant_evaluation_role.role_id')
                                            ->join('enseignants','enseignants.id','=','enseignant_evaluation_role.enseignant_id')
                                            ->where('evaluation_id',$id)
                                            ->get();
        $notes = CritereEnseignantEvaluation::join('enseignants','enseignants.id','=','critere_enseignant_evaluation.enseignant_id')
                                               ->join('criteres','criteres.id','=','critere_enseignant_evaluation.critere_id')
                                               ->where('evaluation_id',$id)
                                               ->get();
        $criteres = CritereTypeEvaluation::join('criteres','criteres.id','=','critere_type_evaluation.critere_id')
                                            ->where('type_evaluation_id',$idEvaluation->type_evaluation_id)
                                            ->get();
        $nbEnseignant = $roles->count();

        return view('jury.recapitulation', compact('id', 'nbEnseignant', 'criteres', 'projets', 'etudiants', 'idEvaluation', 'roles', 'notes'));
    }

    public function post($id, Request $request)
    {
        $idEvaluation = Evaluation::join('type_evaluations','type_evaluations.id','=','evaluations.type_evaluation_id')
                                    ->where('evaluations.id',$id)
                                    ->first();
        $criteres = CritereTypeEvaluation::join('criteres','criteres.id','=','critere_type_evaluation.critere_id')
                                            ->where('type_evaluation_id',$idEvaluation->type_evaluation_id)
                                            ->get();
        $etudiants = Etudiant::where('groupe_projet_id',$idEvaluation->groupe_projet_id)
                                ->get();
        $roles = EnseignantEvaluationRole::join('roles','roles.id','=','enseignant_evaluation_role.role_id')
                                            ->join('enseignants','enseignants.id','=','enseignant_evaluation_role.enseignant_id')
                                            ->where('evaluation_id',$id)
                                            ->get();

        foreach ($etudiants as $key => $etudiant) {
            EtudiantEvaluation::insert([
                ['noteIndividuelle'=>$request->input('note'.$etudiant->id), 
                 'remarqueIndividuelle'=>$request->input('remarque'.$etudiant->id), 
                 'etudiant_id'=>$etudiant->id, 
                 'evaluation_id'=>$id]
            ]);
        }

        foreach ($criteres as $key => $critere) {
            foreach ($roles as $key => $role) {
                CritereEnseignantEvaluation::where('enseignant_id', $role->enseignant_id)
                                                ->where('evaluation_id', $id)
                                                ->where('critere_id', $critere->critere_id)
                                                ->update(['noteCritere'=>$request->input('critere'.$critere->critere_id.$role->enseignant_id)]);
            }
        }

        Evaluation::where('evaluations.id',$id)
                    ->update(['noteGroupe'=>$request->input('noteMoyGroupe'),
                        'remarqueGroupe'=>$request->input('remarque')
                        ]);

        return redirect()->action('GroupeProjetController@index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
