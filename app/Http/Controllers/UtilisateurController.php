<?php

namespace App\Http\Controllers;

use App\Models\Utilisateur;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Cours;
use App\Models\session;
use App\Models\Formation;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class UtilisateurController extends Controller
{
    public function index()
    {
        return view('Formateur.homeformateur');
    }
   
    protected function createf(Request $rqt)
    {

        $user = new User();
        $user->name = $rqt->name;
        $user->email = $rqt->email;
        $user->profil = $rqt->profil;
        $user->password = Hash::make($rqt->password);

        $user->save();
        $user->roles()->attach(3);
        return Redirect::route('listeformateur');
    }

    public function ajouterC()
    {
        $form = Utilisateur::where('email', Auth::user()->email)->first();
        $id_formateur = $form->id;
        $formateur = Utilisateur::where('id', $id_formateur)->get();
        $formations = Session::where('id_formateur', $id_formateur)->get();
        $data = Cours::where('id_formateur', $id_formateur)->get();

        return view('Formateur.ajouterCours', ['formateurs' => $formateur, 'formations' => $formations, 'data' => $data]);
    }


    public function storeC(Request $request)
    {

        $formation = Formation::where('id', $request->id_formation)->latest()->first();

        $data = new Cours();
        $data->titre = $request->titre;
        $data->description = $request->description;
        $file = $request->file;
        $filename = time() . '.' . $file->getClientOriginalExtension();
        $data->id_formation = $formation->id;
        $formateur = Utilisateur::where('email', Auth::user()->email)->first();

        $data->id_formateur = $formateur->id;
        $request->file->move('assets', $filename);
        $data->file = $filename;
        $data->save();

        return redirect()->back();
    }


    public function telechargerC($file)
    {

        return response()->download(public_path('assets/' . $file));
    }

    public function getEtudiant(){
        
        $form = Utilisateur::where('email',Auth::user()->email)->first();
        $id_formateur = $form->id;

        $listFormationEtudiants = array();

        $formationFormateur = session::where('id_formateur',$id_formateur)->get();

        foreach($formationFormateur as $formationFormateur ){

        $etudiants = Utilisateur::where('formation',$formationFormateur->formation)->get();       
        array_push($listFormationEtudiants,(object)["etudiants" => $etudiants,"formation" =>$formationFormateur->formation]);      
        }

        return view('Formateur.etudiants',compact('listFormationEtudiants'));
    }

    public function getAllFormations()
    {

        $formations = Formation::all();

        $listFormation = Formation::with('session', 'Administrateur')->get();

        return view('Etudiant.formations', ['formations' => $formations]);
    }

    public function getFormation(Formation $formation)
    {
        $sessionEtudiant = 0;
        $formation = Formation::where('id', $formation->id)->with('session.formateurs')->first();
        
        if (Auth::user() && Utilisateur::where('email',Auth::user()->email)->count() >0) {
            $etudiants = Utilisateur::where('email', Auth::user()->email)->get();
            $sessionEtudiant = $etudiants[0]->sessions;
        }
        $i = 1;
        return view('Etudiant.formation', ['formation' => $formation, 'sessionEtudiant' => $sessionEtudiant, 'i' => $i]);
    }

   

    public function inscriptionEtudiant(session $session)
    {
        

        return view('Etudiant.inscription', ['formation' => $session]);
    }



    public function addEtudiant(Request $request)
    {

       
        $nom = $request->nom;
        $prenom = $request->prenom;
        $email = $request->email;
        $age = $request->age;
        $cin = $request->cin;
        $formation = $request->formation;
        $tel = $request->tel;
        $niveau = $request->niveau;


        $etudiant = new Utilisateur();
        $etudiant->nom = $nom;
        $etudiant->prenom = $prenom;
        $etudiant->email = $email;
        $etudiant->age = $age;
        $etudiant->cin = $cin;
        $etudiant->formation = $formation;
        $etudiant->tel = $tel;
        $etudiant->niveau = $niveau;
        $etudiant->profil = "etudiant";

        $user = $etudiant->save();
        $etud = Utilisateur::where('email', Auth::user()->email)->first();
        $id_user = $etud->id;
        $user = Utilisateur::find($id_user);

        $user->sessions()->attach($request->session_id);

        return Redirect::route('user_listeformations');
    }

    public function listeFormation()
    {
        $etudiants = 0;
        if(Utilisateur::where('email',Auth::user()->email)->count() >0){
        $etudiants = Utilisateur::where('email', Auth::user()->email)->get();
        }
       
        return view('Etudiant.mesCours', ['formationInscrit' => $etudiants]);
    }

    public function CoursDeFormation($formation)
    {
        $etudiant = Utilisateur::where('email', Auth::user()->email)->where('formation', $formation)->latest()->first();
        if ($etudiant->is_payer == 'false' || $etudiant->is_payer == null) {

            return view('Etudiant.coursNonPaye', ['etudiant' => $etudiant]);
        } else {
            $fs = Formation::where('nom_formation', $formation)->latest()->first();
            $data = Cours::where('id_formation', $fs->id)->get();
            return view('Etudiant.mesCours2', ['Cours' => $data, 'formation' => $formation]); //mes vraies cours 
            
        }
    }
}
