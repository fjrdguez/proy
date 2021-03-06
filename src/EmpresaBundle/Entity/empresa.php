<?php

namespace EmpresaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * empresa
 *
 * @ORM\Table(name="empresa")
 * @ORM\Entity(repositoryClass="EmpresaBundle\Repository\empresaRepository")
 */
class empresa
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
     * @ORM\Column(name="nombre", type="string", length=128, unique=true)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="ciudad", type="string", length=128)
     */
    private $ciudad;

    /**
     * @var int
     *
     * @ORM\Column(name="numEmpleados", type="integer")
     */
    private $numEmpleados;
    /**
     * @ORM\ManyToOne(targetEntity="TipoEmpresa", inversedBy="empresas")
     * @ORM\JoinColumn(name="tipo_id", referencedColumnName="id")
     */

     private $tipo;
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
     * @return empresa
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
     * Set ciudad.
     *
     * @param string $ciudad
     *
     * @return empresa
     */
    public function setCiudad($ciudad)
    {
        $this->ciudad = $ciudad;

        return $this;
    }

    /**
     * Get ciudad.
     *
     * @return string
     */
    public function getCiudad()
    {
        return $this->ciudad;
    }

    /**
     * Set numEmpleados.
     *
     * @param int $numEmpleados
     *
     * @return empresa
     */
    public function setNumEmpleados($numEmpleados)
    {
        $this->numEmpleados = $numEmpleados;

        return $this;
    }

    /**
     * Get numEmpleados.
     *
     * @return int
     */
    public function getNumEmpleados()
    {
        return $this->numEmpleados;
    }

    /**
     * Set tipo.
     *
     * @param \EmpresaBundle\Entity\TipoEmpresa|null $tipo
     *
     * @return empresa
     */
    public function setTipo(\EmpresaBundle\Entity\TipoEmpresa $tipo = null)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get tipo.
     *
     * @return \EmpresaBundle\Entity\TipoEmpresa|null
     */
    public function getTipo()
    {
        return $this->tipo;
    }
        public function __toString(){
        return (string) $this->getNombre();
    }
}
