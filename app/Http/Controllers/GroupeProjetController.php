<?php

namespace App\Http\Controllers;

use App\Models\GroupeProjet;
use App\Models\Evaluation;
use App\Models\EnseignantEvaluationRole;
use App\Models\CritereTypeEvaluation;
use App\Models\Etudiant;
use App\Models\CritereEnseignantEvaluation;

use Illuminate\Http\Request;

use App\Http\Requests;

class GroupeProjetController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
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
    public function show($id,$idE)
    {
        //a modifier lors des sessions
        $enseignant = EnseignantEvaluationRole::where('enseignant_id', $idE)
                                                ->where('evaluation_id', $id)
                                                ->first();

        if ($enseignant->vote==1) {
            if ($enseignant->role_id==1) {
                return redirect()->action('RecapitulationController@show',$id);
            }
            return view('jury.voter');
        }
        
        $idEvaluation = Evaluation::join('type_evaluations','type_evaluations.id','=','evaluations.type_evaluation_id')
                                    ->join('groupe_projets','groupe_projets.id','=','evaluations.groupe_projet_id')
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
        $criteres = CritereTypeEvaluation::join('criteres','criteres.id','=','critere_type_evaluation.critere_id')
                                            ->where('type_evaluation_id',$idEvaluation->type_evaluation_id)
                                            ->get();
                                            
        return view('jury.grille', compact('id', 'idE', 'projets', 'etudiants', 'idEvaluation', 'roles', 'criteres'));
    }

    public function post($id, $idE, Request $request)
    {
        //a modifier lors de l'utilisation des sessions
        $enseignant = EnseignantEvaluationRole::join('enseignants','enseignants.id','=','enseignant_evaluation_role.enseignant_id')
                                                ->where('enseignant_id', $idE)
                                                ->where('evaluation_id', $id)
                                                ->first();
        if ($enseignant->role_id==1) {
            //test à faire pour voir si l'utilisateur maitre peut valider son formulaire ou pas en fonction de si l'esclave à voté ou non
            $esclaves = EnseignantEvaluationRole::where('evaluation_id',$id)
                                                   ->where('role_id',2)
                                                   ->where('vote',0)
                                                   ->count();
            if ($esclaves!=0) {
                return redirect()->action('GroupeProjetController@show',[$id, $idE]);
            }
        }

        $idEvaluation = Evaluation::join('type_evaluations','type_evaluations.id','=','evaluations.type_evaluation_id')
                                    ->where('evaluations.id',$id)
                                    ->first();
        $criteres = CritereTypeEvaluation::join('criteres','criteres.id','=','critere_type_evaluation.critere_id')
                                            ->where('type_evaluation_id',$idEvaluation->type_evaluation_id)
                                            ->get();

        $total = 0;
        
        foreach ($criteres as $key => $critere) {
            //enseignant_id dans le foreach à rajouter
            CritereEnseignantEvaluation::insert([
                ['noteCritere'=>$request->input('critere'.$critere->critere_id), 
                 'critere_id'=>$critere->critere_id, 
                 'enseignant_id'=>$enseignant->id, 
                 'evaluation_id'=>$id]
                ]);
            
            $total=$total+$request->input('critere'.$critere->critere_id);
        }
        
        if ($enseignant->role_id==1) {
            $total=($total+$idEvaluation->noteGroupe)/2;
        }
        
        Evaluation::where('evaluations.id',$id)
                    ->update(['noteGroupe'=>$total,
                        'remarqueGroupe'=>$idEvaluation->remarqueGroupe.' | '.$enseignant->nomEnseignant.' : '.$request->input('remarque')
                        ]);

        //mettre le jury en à voté
        EnseignantEvaluationRole::where('enseignant_id', $enseignant->id)
                                    ->where('evaluation_id', $id)
                                    ->update(['vote'=>1]);

        //retour selon maitre ou esclave
        if ($enseignant->role_id==1) {
            return redirect()->action('RecapitulationController@show',$id);
        }else{
            return view('jury.voter');
        }

        //return redirect()->action('RecapitulationController@show',$id);
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
