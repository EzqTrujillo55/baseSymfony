<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcNiifCarteraInteres
 *
 * @ORM\Table(name="gc_niif_cartera_interes")
 * @ORM\Entity
 */
class GcNiifCarteraInteres
{
    /**
     * @var int
     *
     * @ORM\Column(name="em_id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $emId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="ci_id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $ciId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ci_tipo", type="string", length=20, nullable=false, options={"default"="'*'"})
     */
    private $ciTipo = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="ci_numero", type="string", length=25, nullable=false, options={"default"="'*'"})
     */
    private $ciNumero = '\'*\'';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ci_fecha_reconocimiento", type="date", nullable=false, options={"default"="'1900-01-01'"})
     */
    private $ciFechaReconocimiento = '\'1900-01-01\'';

    /**
     * @var float
     *
     * @ORM\Column(name="ci_tasa_efectiva_anual", type="float", precision=10, scale=0, nullable=false)
     */
    private $ciTasaEfectivaAnual = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="ci_politica_adicional", type="float", precision=10, scale=0, nullable=false)
     */
    private $ciPoliticaAdicional = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="ci_total_interes", type="float", precision=10, scale=0, nullable=false)
     */
    private $ciTotalInteres = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="ci_total_castigo", type="float", precision=10, scale=0, nullable=false)
     */
    private $ciTotalCastigo = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="ci_metodo_calculo", type="boolean", nullable=false)
     */
    private $ciMetodoCalculo = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="ci_tipo_calculo", type="boolean", nullable=false)
     */
    private $ciTipoCalculo = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ci_observacion", type="string", length=250, nullable=false, options={"default"="'*'"})
     */
    private $ciObservacion = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="ci_estado", type="string", length=1, nullable=false, options={"default"="'C'","fixed"=true})
     */
    private $ciEstado = '\'C\'';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ci_fecha_tran", type="date", nullable=false, options={"default"="'1900-01-01'"})
     */
    private $ciFechaTran = '\'1900-01-01\'';

    /**
     * @var int
     *
     * @ORM\Column(name="us_id_reg", type="bigint", nullable=false)
     */
    private $usIdReg = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="us_id_mod", type="bigint", nullable=false)
     */
    private $usIdMod = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="co_id", type="bigint", nullable=false)
     */
    private $coId = '0';

    public function getEmId(): ?string
    {
        return $this->emId;
    }

    public function getCiId(): ?string
    {
        return $this->ciId;
    }

    public function getCiTipo(): ?string
    {
        return $this->ciTipo;
    }

    public function setCiTipo(string $ciTipo): self
    {
        $this->ciTipo = $ciTipo;

        return $this;
    }

    public function getCiNumero(): ?string
    {
        return $this->ciNumero;
    }

    public function setCiNumero(string $ciNumero): self
    {
        $this->ciNumero = $ciNumero;

        return $this;
    }

    public function getCiFechaReconocimiento(): ?\DateTimeInterface
    {
        return $this->ciFechaReconocimiento;
    }

    public function setCiFechaReconocimiento(\DateTimeInterface $ciFechaReconocimiento): self
    {
        $this->ciFechaReconocimiento = $ciFechaReconocimiento;

        return $this;
    }

    public function getCiTasaEfectivaAnual(): ?float
    {
        return $this->ciTasaEfectivaAnual;
    }

    public function setCiTasaEfectivaAnual(float $ciTasaEfectivaAnual): self
    {
        $this->ciTasaEfectivaAnual = $ciTasaEfectivaAnual;

        return $this;
    }

    public function getCiPoliticaAdicional(): ?float
    {
        return $this->ciPoliticaAdicional;
    }

    public function setCiPoliticaAdicional(float $ciPoliticaAdicional): self
    {
        $this->ciPoliticaAdicional = $ciPoliticaAdicional;

        return $this;
    }

    public function getCiTotalInteres(): ?float
    {
        return $this->ciTotalInteres;
    }

    public function setCiTotalInteres(float $ciTotalInteres): self
    {
        $this->ciTotalInteres = $ciTotalInteres;

        return $this;
    }

    public function getCiTotalCastigo(): ?float
    {
        return $this->ciTotalCastigo;
    }

    public function setCiTotalCastigo(float $ciTotalCastigo): self
    {
        $this->ciTotalCastigo = $ciTotalCastigo;

        return $this;
    }

    public function getCiMetodoCalculo(): ?bool
    {
        return $this->ciMetodoCalculo;
    }

    public function setCiMetodoCalculo(bool $ciMetodoCalculo): self
    {
        $this->ciMetodoCalculo = $ciMetodoCalculo;

        return $this;
    }

    public function getCiTipoCalculo(): ?bool
    {
        return $this->ciTipoCalculo;
    }

    public function setCiTipoCalculo(bool $ciTipoCalculo): self
    {
        $this->ciTipoCalculo = $ciTipoCalculo;

        return $this;
    }

    public function getCiObservacion(): ?string
    {
        return $this->ciObservacion;
    }

    public function setCiObservacion(string $ciObservacion): self
    {
        $this->ciObservacion = $ciObservacion;

        return $this;
    }

    public function getCiEstado(): ?string
    {
        return $this->ciEstado;
    }

    public function setCiEstado(string $ciEstado): self
    {
        $this->ciEstado = $ciEstado;

        return $this;
    }

    public function getCiFechaTran(): ?\DateTimeInterface
    {
        return $this->ciFechaTran;
    }

    public function setCiFechaTran(\DateTimeInterface $ciFechaTran): self
    {
        $this->ciFechaTran = $ciFechaTran;

        return $this;
    }

    public function getUsIdReg(): ?string
    {
        return $this->usIdReg;
    }

    public function setUsIdReg(string $usIdReg): self
    {
        $this->usIdReg = $usIdReg;

        return $this;
    }

    public function getUsIdMod(): ?string
    {
        return $this->usIdMod;
    }

    public function setUsIdMod(string $usIdMod): self
    {
        $this->usIdMod = $usIdMod;

        return $this;
    }

    public function getCoId(): ?string
    {
        return $this->coId;
    }

    public function setCoId(string $coId): self
    {
        $this->coId = $coId;

        return $this;
    }


}
