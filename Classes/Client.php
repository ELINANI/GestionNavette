<?php 


class Client 
{
	private $nom;
	private $prenom;
	private $login;
	private $pwd;
	private $confirm_pwd;



	public function __construct($nom,$prenom,$login,$pwd,$confirm_pwd)
	{
        $this->nom=$nom;
        $this->prenom=$prenom;
        $this->login=$login;
        $this->pwd=$pwd;
        $this->confirm_pwd=$confirm_pwd;
	}


    public function GetNom()
    {
    	return $this->$nom;
    }  
     public function GetPrenom()
    {
    	return $this->$prenom;
    }


   public function SetNom($nom)
   {   
     $this->nom =$nom;
   }
   public function SetPrenom($prenom)
   {
    $this->prenom =$prenom;
   } 
 public function Ajouterclient($clt)
  {

  }


}