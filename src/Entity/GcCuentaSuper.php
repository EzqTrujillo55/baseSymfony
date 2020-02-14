<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcCuentaSuper
 *
 * @ORM\Table(name="gc_cuenta_super")
 * @ORM\Entity
 */
class GcCuentaSuper
{
    /**
     * @var int
     *
     * @ORM\Column(name="cs_id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $csId;

    /**
     * @var int
     *
     * @ORM\Column(name="em_id", type="bigint", nullable=false)
     */
    private $emId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="cs_codigo", type="string", length=20, nullable=false, options={"default"="'*'"})
     */
    private $csCodigo = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="cs_nombre", type="string", length=250, nullable=false, options={"default"="'*'"})
     */
    private $csNombre = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="cs_codigo_supercias", type="string", length=20, nullable=false, options={"default"="'*'"})
     */
    private $csCodigoSupercias = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="cs_naturaleza", type="string", length=1, nullable=false, options={"default"="'0'","fixed"=true})
     */
    private $csNaturaleza = '\'0\'';

    /**
     * @var string
     *
     * @ORM\Column(name="cs_movimiento", type="string", length=1, nullable=false, options={"default"="'0'","fixed"=true})
     */
    private $csMovimiento = '\'0\'';

    /**
     * @var string
     *
     * @ORM\Column(name="cs_estado", type="string", length=1, nullable=false, options={"default"="'C'","fixed"=true})
     */
    private $csEstado = '\'C\'';

    /**
     * @var string
     *
     * @ORM\Column(name="cs_nivel_uno", type="string", length=250, nullable=false, options={"default"="'*'"})
     */
    private $csNivelUno = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="cs_nivel_dos", type="string", length=250, nullable=false, options={"default"="'*'"})
     */
    private $csNivelDos = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="cs_nivel_tres", type="string", length=250, nullable=false, options={"default"="'*'"})
     */
    private $csNivelTres = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="cs_nivel_cuatro", type="string", length=250, nullable=false, options={"default"="'*'"})
     */
    private $csNivelCuatro = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="cs_nivel_cinco", type="string", length=250, nullable=false, options={"default"="'*'"})
     */
    private $csNivelCinco = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="cs_actividad", type="string", length=1, nullable=false, options={"default"="'2'","fixed"=true})
     */
    private $csActividad = '\'2\'';

    public function getCsId(): ?string
    {
        return $this->csId;
    }

    public function getEmId(): ?string
    {
        return $this->emId;
    }

    public function setEmId(string $emId): self
    {
        $this->emId = $emId;

        return $this;
    }

    public function getCsCodigo(): ?string
    {
        return $this->csCodigo;
    }

    public function setCsCodigo(string $csCodigo): self
    {
        $this->csCodigo = $csCodigo;

        return $this;
    }

    public function getCsNombre(): ?string
    {
        return $this->csNombre;
    }

    public function setCsNombre(string $csNombre): self
    {
        $this->csNombre = $csNombre;

        return $this;
    }

    public function getCsCodigoSupercias(): ?string
    {
        return $this->csCodigoSupercias;
    }

    public function setCsCodigoSupercias(string $csCodigoSupercias): self
    {
        $this->csCodigoSupercias = $csCodigoSupercias;

        return $this;
    }

    public function getCsNaturaleza(): ?string
    {
        return $this->csNaturaleza;
    }

    public function setCsNaturaleza(string $csNaturaleza): self
    {
        $this->csNaturaleza = $csNaturaleza;

        return $this;
    }

    public function getCsMovimiento(): ?string
    {
        return $this->csMovimiento;
    }

    public function setCsMovimiento(string $csMovimiento): self
    {
        $this->csMovimiento = $csMovimiento;

        return $this;
    }

    public function getCsEstado(): ?string
    {
        return $this->csEstado;
    }

    public function setCsEstado(string $csEstado): self
    {
        $this->csEstado = $csEstado;

        return $this;
    }

    public function getCsNivelUno(): ?string
    {
        return $this->csNivelUno;
    }

    public function setCsNivelUno(string $csNivelUno): self
    {
        $this->csNivelUno = $csNivelUno;

        return $this;
    }

    public function getCsNivelDos(): ?string
    {
        return $this->csNivelDos;
    }

    public function setCsNivelDos(string $csNivelDos): self
    {
        $this->csNivelDos = $csNivelDos;

        return $this;
    }

    public function getCsNivelTres(): ?string
    {
        return $this->csNivelTres;
    }

    public function setCsNivelTres(string $csNivelTres): self
    {
        $this->csNivelTres = $csNivelTres;

        return $this;
    }

    public function getCsNivelCuatro(): ?string
    {
        return $this->csNivelCuatro;
    }

    public function setCsNivelCuatro(string $csNivelCuatro): self
    {
        $this->csNivelCuatro = $csNivelCuatro;

        return $this;
    }

    public function getCsNivelCinco(): ?string
    {
        return $this->csNivelCinco;
    }

    public function setCsNivelCinco(string $csNivelCinco): self
    {
        $this->csNivelCinco = $csNivelCinco;

        return $this;
    }

    public function getCsActividad(): ?string
    {
        return $this->csActividad;
    }

    public function setCsActividad(string $csActividad): self
    {
        $this->csActividad = $csActividad;

        return $this;
    }


}
