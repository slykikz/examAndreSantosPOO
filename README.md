# examAndreSantosPOO

Exam Partie Théorique
SANTOS André

1-	 interface loginInterface {
    public function login($user, $password);
} 

Class maClasse implements loginInterface{ 

    public function login($user, $password){
        $this->user = $user;
        $this->password = $password;
}




2-	__construct() – à chaque création de nouvelle instance d’objet elle se déclenche.
__destruct() – se déclenche a la fin du script, des qu’il n’y a plus de référence sur un objet
__get() – se déclenche quand on doit lire des données inaccessibles (privées ou inexistantes)
__set() – pour écrire des données dans des propriétés inaccessibles 
__isset() – se déclenche quand elle est appelée ailleurs
__unset() - se déclenche quand elle est appelée ailleurs


3-	Destructeur

4-	class Abstract

5-	public, private et protected
private: accessibles directement que depuis l'intérieur même de la classe; 
public: si on veut aucune visibilité;  
protected: Accessible au sein de la classe et des classe qui en héritent

6-	ça permet de gérer les erreurs et donc celles-ci sont en fait des erreurs lancées par PHP lorsque quelque chose qui ne va pas est survenu. ( throw, try, catch)

7-	faire le routing vers les différentes pages qu’on aura besoin, il route les requêtes et il appellera le bon controller. 

8-	Séparation des tâches (code) en 3 parties, facile à prendre en main par d’autres développeurs, surtout si plusieurs personnes bossent sur le même projet en parallèle. Si on doit modifier quelque chose le développeur saura où aller chercher les informations plus rapidement (gain de temps).

9-	MVC signifie Model View Controller. 
Le model - Gère la base de données
La view - Gère l’affichage (visible par l’utilisateur)

Le controller - Gère tous les traitements envoyés par le Model a la View.

