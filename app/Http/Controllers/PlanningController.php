<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Models\DateEvaluationHeureDebut;
use App\Models\Etudiant;
use Illuminate\Http\Request;

class PlanningController extends Controller {

	public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('planning');
    }

	/**
	 * Show the application dashboard.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function ShowSoutenance() {
		return view('planning');
	}

	public function api() {
		$events = DateEvaluationHeureDebut::join('evaluations', 'evaluations.id', '=', 'date_evaluations_heure_debut.evaluation_id')
			->join('type_evaluations', 'type_evaluations.id', '=', 'evaluations.type_evaluation_id')
			->join('groupe_projets', 'groupe_projets.id', '=', 'evaluations.groupe_projet_id')
			->join('enseignants', 'groupe_projets.enseignant_id', '=', 'enseignants.id')
			->select('date_evaluations_heure_debut.evaluation_id', 'type_evaluations.libelleTypeEvaluation', 'date_evaluations_heure_debut.date_id',
				'date_evaluations_heure_debut.heure_debut_id', 'type_evaluations.dureeTypeEvaluation', 'groupe_projets.id', 'groupe_projets.libelleSujet', 'enseignants.nomEnseignant', 'enseignants.prenomEnseignant')
			->get();

		foreach ($events as $event) {
			$etudiants = Etudiant::where('groupe_projet_id', '=', $event->id)->get();
			$noms      = "";
			foreach ($etudiants as $etudiant) {
				if ($noms == "") {
					$noms = $etudiant->prenomEtudiant . " " . $etudiant->nomEtudiant;
				} else {
					$noms = $noms . ", " . $etudiant->prenomEtudiant . " " . $etudiant->nomEtudiant;
				}
			}
			$event->etudiant = $noms;
			$event->tuteur   = $event->prenomEnseignant . " " . $event->nomEnseignant;

			$event->id    = $event->evaluation_id;
			$event->title = /*$event->libelleTypeEvaluation . "\n" . */
				$event->libelleSujet;
			/*$event->url   = "LienVersDescriptifOuGrilleOuAutre";*/        // Infobulle au clic en JS, donc ne pas activer cette option
			/*$event->color = "#FF0000";*/            // Il faudrait ajouter une couleur dans la BDD pour chaque type d'évaluation (table : type_evaluations)

			$dateTimeDebut = $event->date_id . " " . $event->heure_debut_id;
			$duree         = explode(":", $event->dureeTypeEvaluation);

			$event->start = $dateTimeDebut;
			$event->end   = date('Y-m-d H:i:s', strtotime("+{$duree[0]} hour +{$duree[1]} minutes +{$duree[2]} seconds", strtotime($dateTimeDebut)));

			$event->tooltipDebut = date('H:i:s', strtotime($dateTimeDebut));
			$event->tooltipFin   = date('H:i:s', strtotime("+{$duree[0]} hour +{$duree[1]} minutes +{$duree[2]} seconds", strtotime($dateTimeDebut)));
			$event->urlTooltip   = "LienVersDescriptifOuGrilleOuAutre";
		}

		/*echo "<pre>";
		print_r($events);
		echo "</pre>";*/
		return $events;
	}
}
