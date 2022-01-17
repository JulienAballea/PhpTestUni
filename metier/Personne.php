<?php
/**
 * Personne class file
 *
 * PHP Version 7.1
 *
 * @category Personne
 * @package  Personne
 * @author   Julien Aballea <julien.aballea@free.fr>
 * @license  None
 * @link     None
 */
require_once 'Adresse.php';
/**
 * Adresse class
 *
 * The class holding the Adresse definition
 *
 * @category Personne
 * @package  Personne
 * @author   Julien Aballea <julien.aballea@free.fr>
 * @license  None
 * @link     None
 */
class Personne
{

    /**
     * Id de la personne
     */
    private  int $id;
    /**
     * Nom de la personne
     */
    private ?string $nom;
    /**
     * Prenom de la personne
     */
    private  ?string $prenom;
    /**
     * Date de naissance
     */
    private DateTime $datenaiss;
    /**
     * Téléphone de la personne
     */
    private int $telephone;
    /**
     * Email de la personne
     **/
    private string $email;
     /**
      * Login de la personne
      **/
    private string $login;
    /**
     * Password de la personne
     **/
    private string $pwd;
    /**
     * Adresse
     **/
    private Adresse $adresse;

    /**
     * Constructor
     *
     * @param string   $n  Nom of personne
     * @param string   $p  Prenom of personne
     * @param Datetime $d  Datetime of personne
     * @param string   $t  Telephone of personne
     * @param string   $e  Email of personne
     * @param string   $l  Login of personne
     * @param string   $pw Passeword of personne
     *
     * @return void
     */
    public function __construct(string $n, string $p, DateTime $d, $t, $e, $l, $pw)
    {

        $this->nom = $n;
        $this->prenom = $p;
        $this->datenaiss = $d;
        $this->telephone = $t;
        $this->email = $e;
        $this->login = $l;
        $this->pwd = $pw;
    }
    /**
     * Get the id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * Get the nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }
    /**
     * Get the prenom
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }
    /**
     * Get the datedenaissance
     *
     * @return Datetime
     */
    public function getDatenaissance()
    {
        return $this->datenaiss;
    }
    /**
     * Get the telephone
     *
     * @return string
     */
    public function getTelephone()
    {
        return $this->telephone;
    }
    /**
     * Get the Email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }
    /**
     * Get the login
     *
     * @return string
     */
    public function getLogin()
    {
        return $this->login;
    }
    /**
     * Get the password
     *
     * @return string
     */
    public function getPwd()
    {
        return $this->pwd;
    }
    /**
     * Get the adresse
     *
     * @return Adresse
     */
    public function getAdresse()
    {
        return $this->adresse;
    }


    /**
     * Set the id
     *
     * @param int $id Id of Personne
     *
     * @return void
     */
    public function setId(int $id)
    {
        if($id!=null) {
            $this->id=$id;
        }
    }
    /**
     * Set the nom
     *
     * @param string $n Prenom of Personne
     *
     * @return void
     */
    public function setNom(string $n)
    {
        if($n!=null && is_string($n)) {
            $this->nom=$n;
        }
    }
    /**
     * Set the prenom
     *
     * @param string $pre Prenom of Personne
     *
     * @return void
     */
    public function setPrenom(string$pre)
    {
        if($pre!=null && is_string($pre)) {
            $this->prenom=$pre;
        }
    }
    /**
     * Set the Date de naissance
     *
     * @param DateTime $dateNaisDatedenaissance of Personne
     *
     * @return void
     */
    public function setDateNaissance(DateTime $dateNais)
    {
        if($dateNais!=null) {
            $this->datenaiss=$dateNais;
        }
    }
    /**
     * Set the telephone
     *
     * @param string $tel Telephone of Personne
     *
     * @return void
     */
    public function setTelephone(string $tel)
    {
        if($tel!=null && is_string($tel)) {
            $this->telephone=$tel;
        }
    }
    /**
     * Set the Email
     *
     * @param string $mail Email of Personne
     *
     * @return void
     */
    public function setEmail(string $mail)
    {
        if($mail!=null && is_string($mail)) {
            $this->email=$mail;
        }
    }
    /**
     * Set the login
     *
     * @param string $logi Login of Personne
     *
     * @return void
     */
    public function setLogin(string $logi)
    {
        if($logi!=null && is_string($logi)) {
            $this->login=$logi;
        }
    }
    /**
     * Set the password
     *
     * @param string $pwd Passeword of Personne
     *
     * @return void
     */
    public function setPwd(string $pw)
    {
        if($pw!=null && is_string($pw)) {
            $this->pwd = md5($pw);
        }
    }
    /**
     * Set the adresse
     *
     * @param Adresse $adresse Adresse of Personne
     *
     * @return void
     */
    public function setAdresse(Adresse $adresse)
    {
        if ($adresse != null && $adresse) {
            $this->adresse = $adresse;
        }
    }

    /**
     * Return an array of character
     *
     * @return array
     */
    public function __toString()
    {
        return '[' .$this->getNom().','
        .$this->getPrenom().','
        .$this->getDatenaissance()->format('Y-m-d').','
        .$this->getTelephone().','
        .$this->getEmail().','
        .$this->getLogin().','
        .$this->getPwd().']';

    }
}
