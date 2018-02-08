<?php

namespace EmpresaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TipoEmpresa
 *
 * @ORM\Table(name="tipo_empresa")
 * @ORM\Entity(repositoryClass="EmpresaBundle\Repository\TipoEmpresaRepository")
 */
class TipoEmpresa
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=255)
     */
    private $nombre;

    /**
     * @ORM\OneToMany(targetEntity="empresa", mappedBy="tipo")
     */
    private $empresas;
    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nombre.
     *
     * @param string $nombre
     *
     * @return TipoEmpresa
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre.
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->empresas = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add empresa.
     *
     * @param \EmpresaBundle\Entity\empresa $empresa
     *
     * @return TipoEmpresa
     */
    public function addEmpresa(\EmpresaBundle\Entity\empresa $empresa)
    {
        $this->empresas[] = $empresa;

        return $this;
    }

    /**
     * Remove empresa.
     *
     * @param \EmpresaBundle\Entity\empresa $empresa
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeEmpresa(\EmpresaBundle\Entity\empresa $empresa)
    {
        return $this->empresas->removeElement($empresa);
    }

    /**
     * Get empresas.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getEmpresas()
    {
        return $this->empresas;
    }
        public function __toString(){
        return (string) $this->getNombre();
    }
}
