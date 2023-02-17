<?php

namespace App\Models;

class UsersModel extends Model
{
    protected $id;
    protected $id_ecole;
    protected $prenom;
    protected $nom;
    protected $genre;
    protected $date_naisse;
    protected $profilpic;
    protected $statuonline;
    protected $email;
    protected $pass;
    protected $roles;
    protected $phone;
    protected $update_at;

    public function __construct()
    {
        $class = str_replace(__NAMESPACE__.'\\', '', __CLASS__);
        $this->table = strtolower(str_replace('Model', '', $class));
    }

    /**
     * Récupérer un user à partir de son e-mail
     * @param string $email 
     * @return mixed 
     */
    public function findOneByEmail(string $email)
    {
        return $this->requete("SELECT * FROM {$this->table} WHERE email = ?", [$email])->fetch();
    }

    /**
     * Crée la session de l'utilisateur
     * @return void 
     */
    public function setSession()
    {
        $_SESSION['user'] = [
            'id' => $this->id,
            'email' => $this->email,
            'roles' => $this->roles,
            'online'=>$this->statuonline,
        ];
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of pass
     */ 
    public function getpass()
    {
        return $this->pass;
    }

    /**
     * Set the value of pass
     *
     * @return  self
     */ 
    public function setpass($pass)
    {
        $this->pass = $pass;

        return $this;
    }


    /**
     * Get the value of roles
     */ 
    public function getRoles():array
    {
        $roles = $this->roles;

        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    /**
     * Set the value of roles
     *
     * @return  self
     */ 
    public function setRoles($roles)
    {
        $this->roles =$roles;

        return $this;
    }

    /**
     * Get the value of statuonline
     */
    public function getStatuonline()
    {
        return $this->statuonline;
    }

    /**
     * Set the value of statuonline
     */
    public function setStatuonline($statuonline): self
    {
        $this->statuonline = $statuonline;

        return $this;
    }

    /**
     * Get the value of fonction
     */
    public function getFonction()
    {
        return $this->fonction;
    }

    /**
     * Set the value of fonction
     */
    public function setFonction($fonction): self
    {
        $this->fonction = $fonction;

        return $this;
    }

    /**
     * Get the value of profilpic
     */
    public function getProfilpic()
    {
        return $this->profilpic;
    }

    /**
     * Set the value of profilpic
     */
    public function setProfilpic($profilpic): self
    {
        $this->profilpic = $profilpic;

        return $this;
    }

    /**
     * Get the value of date_naisse
     */
    public function getDateNaisse()
    {
        return $this->date_naisse;
    }

    /**
     * Set the value of date_naisse
     */
    public function setDateNaisse($date_naisse): self
    {
        $this->date_naisse = $date_naisse;

        return $this;
    }

    /**
     * Get the value of genre
     */
    public function getGenre()
    {
        return $this->genre;
    }

    /**
     * Set the value of genre
     */
    public function setGenre($genre): self
    {
        $this->genre = $genre;

        return $this;
    }

    /**
     * Get the value of prenom
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set the value of prenom
     */
    public function setPrenom($prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get the value of nom
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     */
    public function setNom($nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of update_at
     */
    public function getUpdateAt()
    {
        return $this->update_at;
    }

    /**
     * Set the value of update_at
     */
    public function setUpdateAt($update_at): self
    {
        $this->update_at = $update_at;

        return $this;
    }



    /**
     * Get the value of id_ecole
     */
    public function getIdEcole()
    {
        return $this->id_ecole;
    }

    /**
     * Set the value of id_ecole
     */
    public function setIdEcole($id_ecole): self
    {
        $this->id_ecole = $id_ecole;

        return $this;
    }

    /**
     * Get the value of phone
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set the value of phone
     */
    public function setPhone($phone): self
    {
        $this->phone = $phone;

        return $this;
    }
}