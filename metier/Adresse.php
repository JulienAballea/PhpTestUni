
<?php

/**
 * Adresse class file
 *
 * PHP Version 7.1
 *
 * @category Adresse
 * @package  Adresse
 * @author   Julien Aballea <julien.aballea@free.fr>
 * @license  None
 * @link     None
 */

/**
 * Adresse class
 *
 * The class holding the Adresse definition
 *
 * @category Adresse
 * @package  Adresse
 * @author   Julien Aballea <julien.aballea@free.fr>
 * @license  None
 * @link     None
 */
class Adresse
{
    private int $id;
    private int $numero;
    private ?string $rue;
    private ?int $codePostal;
    private ?string $ville;

    /**
     * Constructor
     *
     * @param int    $num Numero of adresse
     * @param string $r   Rue of adresse
     * @param int    $cp  Codepostal of adresse
     * @param string $v   Ville of adresse
     *
     * @return void
     */
    function __construct(int $num, string $r, int $cp, string $v)
    {
        $this->numero = $num;
        $this->rue = $r;
        $this->codePostal = $cp;
        $this->ville = $v;
    }
    /**
     * Get the id
     *
     * @return int
     */
    function getId()
    {
        return $this->id;
    }
    /**
     * Get the numero
     *
     * @return int
     */
    function getNumero()
    {
        return $this->numero;
    }
    /**
     * Get the rue
     *
     * @return string
     */
    function getRue()
    {
        return $this->rue;
    }
    /**
     * Get the codepostal
     *
     * @return int
     */
    function getCodePostal()
    {
        return $this->codePostal;
    }
    /**
     * Get the ville
     *
     * @return string
     */
    function getVille()
    {
        return $this->ville;
    }
    /**
     * Set the id
     *
     * @param int $id Id of adresse
     *
     * @return void
     */
    function setId($id)
    {
        $this->id = $id;
    }
    /**
     * Set the numero
     *
     * @param int $numero Numero of adresse
     *
     * @return void
     */
    function setNumero($numero)
    {
        $this->numero = $numero;
    }
    /**
     * Set the rue
     *
     * @param string $rue Rue of adresse
     *
     * @return void
     */
    function setRue($rue)
    {
        $this->rue = $rue;
    }
    /**
     * Set the codePostal
     *
     * @param int $codePostal Codepostal of adresse
     *
     * @return void
     */
    function setCodePostal($codePostal)
    {
        $this->codePostal = $codePostal;
    }
    /**
     * Set the ville
     *
     * @param string $ville Ville of adresse
     *
     * @return void
     */
    function setVille($ville)
    {
        $this->ville = $ville;
    }

    /**
     * Return an array of character
     *
     * @return array
     */
    public function __toString()
    {
        return '[' .$this->getId().','
        .$this->getNumero().','
        .$this->getRue().','
        .$this->getCodePostal().','
         .$this->getVille().']';

    }
}
