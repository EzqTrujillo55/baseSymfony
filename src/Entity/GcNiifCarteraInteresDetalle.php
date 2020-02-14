<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcNiifCarteraInteresDetalle
 *
 * @ORM\Table(name="gc_niif_cartera_interes_detalle")
 * @ORM\Entity
 */
class GcNiifCarteraInteresDetalle
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
     * @ORM\Column(name="ci_de_id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $ciDeId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="ci_id", type="bigint", nullable=false)
     */
    private $ciId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="pe_id", type="bigint", nullable=false)
     */
    private $peId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="fa_id", type="bigint", nullable=false)
     */
    private $faId = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="ci_de_documento_valor_inicial", type="float", precision=10, scale=0, nullable=false)
     */
    private $ciDeDocumentoValorInicial = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="ci_de_documento_valor_abono", type="float", precision=10, scale=0, nullable=false)
     */
    private $ciDeDocumentoValorAbono = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="ci_de_documento_valor_saldo", type="float", precision=10, scale=0, nullable=false)
     */
    private $ciDeDocumentoValorSaldo = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ci_de_fecha_emision", type="date", nullable=false, options={"default"="'1900-01-01'"})
     */
    private $ciDeFechaEmision = '\'1900-01-01\'';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ci_de_fecha_vencimiento", type="date", nullable=false, options={"default"="'1900-01-01'"})
     */
    private $ciDeFechaVencimiento = '\'1900-01-01\'';

    /**
     * @var int
     *
     * @ORM\Column(name="ci_de_dias_vencido", type="bigint", nullable=false)
     */
    private $ciDeDiasVencido = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="ci_de_dias_politica_adicional", type="bigint", nullable=false)
     */
    private $ciDeDiasPoliticaAdicional = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="ci_de_dias_calculo", type="bigint", nullable=false)
     */
    private $ciDeDiasCalculo = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="ci_de_valor_presente", type="float", precision=10, scale=0, nullable=false)
     */
    private $ciDeValorPresente = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="ci_de_interes", type="float", precision=10, scale=0, nullable=false)
     */
    private $ciDeInteres = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="ci_de_castigo", type="float", precision=10, scale=0, nullable=false)
     */
    private $ciDeCastigo = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="ci_de_saldo_deterioro", type="float", precision=10, scale=0, nullable=false)
     */
    private $ciDeSaldoDeterioro = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ci_de_primera_vez", type="string", length=1, nullable=false, options={"default"="'N'","fixed"=true})
     */
    private $ciDePrimeraVez = '\'N\'';

    /**
     * @var string
     *
     * @ORM\Column(name="ci_de_estado", type="string", length=1, nullable=false, options={"default"="'C'","fixed"=true})
     */
    private $ciDeEstado = '\'C\'';

    /**
     * @var string
     *
     * @ORM\Column(name="ci_de_estado_procesado", type="string", length=1, nullable=false, options={"default"="'C'","fixed"=true})
     */
    private $ciDeEstadoProcesado = '\'C\'';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ci_de_fecha_procesado", type="date", nullable=false, options={"default"="'1900-01-01'"})
     */
    private $ciDeFechaProcesado = '\'1900-01-01\'';

    public function getEmId(): ?string
    {
        return $this->emId;
    }

    public function getCiDeId(): ?string
    {
        return $this->ciDeId;
    }

    public function getCiId(): ?string
    {
        return $this->ciId;
    }

    public function setCiId(string $ciId): self
    {
        $this->ciId = $ciId;

        return $this;
    }

    public function getPeId(): ?string
    {
        return $this->peId;
    }

    public function setPeId(string $peId): self
    {
        $this->peId = $peId;

        return $this;
    }

    public function getFaId(): ?string
    {
        return $this->faId;
    }

    public function setFaId(string $faId): self
    {
        $this->faId = $faId;

        return $this;
    }

    public function getCiDeDocumentoValorInicial(): ?float
    {
        return $this->ciDeDocumentoValorInicial;
    }

    public function setCiDeDocumentoValorInicial(float $ciDeDocumentoValorInicial): self
    {
        $this->ciDeDocumentoValorInicial = $ciDeDocumentoValorInicial;

        return $this;
    }

    public function getCiDeDocumentoValorAbono(): ?float
    {
        return $this->ciDeDocumentoValorAbono;
    }

    public function setCiDeDocumentoValorAbono(float $ciDeDocumentoValorAbono): self
    {
        $this->ciDeDocumentoValorAbono = $ciDeDocumentoValorAbono;

        return $this;
    }

    public function getCiDeDocumentoValorSaldo(): ?float
    {
        return $this->ciDeDocumentoValorSaldo;
    }

    public function setCiDeDocumentoValorSaldo(float $ciDeDocumentoValorSaldo): self
    {
        $this->ciDeDocumentoValorSaldo = $ciDeDocumentoValorSaldo;

        return $this;
    }

    public function getCiDeFechaEmision(): ?\DateTimeInterface
    {
        return $this->ciDeFechaEmision;
    }

    public function setCiDeFechaEmision(\DateTimeInterface $ciDeFechaEmision): self
    {
        $this->ciDeFechaEmision = $ciDeFechaEmision;

        return $this;
    }

    public function getCiDeFechaVencimiento(): ?\DateTimeInterface
    {
        return $this->ciDeFechaVencimiento;
    }

    public function setCiDeFechaVencimiento(\DateTimeInterface $ciDeFechaVencimiento): self
    {
        $this->ciDeFechaVencimiento = $ciDeFechaVencimiento;

        return $this;
    }

    public function getCiDeDiasVencido(): ?string
    {
        return $this->ciDeDiasVencido;
    }

    public function setCiDeDiasVencido(string $ciDeDiasVencido): self
    {
        $this->ciDeDiasVencido = $ciDeDiasVencido;

        return $this;
    }

    public function getCiDeDiasPoliticaAdicional(): ?string
    {
        return $this->ciDeDiasPoliticaAdicional;
    }

    public function setCiDeDiasPoliticaAdicional(string $ciDeDiasPoliticaAdicional): self
    {
        $this->ciDeDiasPoliticaAdicional = $ciDeDiasPoliticaAdicional;

        return $this;
    }

    public function getCiDeDiasCalculo(): ?string
    {
        return $this->ciDeDiasCalculo;
    }

    public function setCiDeDiasCalculo(string $ciDeDiasCalculo): self
    {
        $this->ciDeDiasCalculo = $ciDeDiasCalculo;

        return $this;
    }

    public function getCiDeValorPresente(): ?float
    {
        return $this->ciDeValorPresente;
    }

    public function setCiDeValorPresente(float $ciDeValorPresente): self
    {
        $this->ciDeValorPresente = $ciDeValorPresente;

        return $this;
    }

    public function getCiDeInteres(): ?float
    {
        return $this->ciDeInteres;
    }

    public function setCiDeInteres(float $ciDeInteres): self
    {
        $this->ciDeInteres = $ciDeInteres;

        return $this;
    }

    public function getCiDeCastigo(): ?float
    {
        return $this->ciDeCastigo;
    }

    public function setCiDeCastigo(float $ciDeCastigo): self
    {
        $this->ciDeCastigo = $ciDeCastigo;

        return $this;
    }

    public function getCiDeSaldoDeterioro(): ?float
    {
        return $this->ciDeSaldoDeterioro;
    }

    public function setCiDeSaldoDeterioro(float $ciDeSaldoDeterioro): self
    {
        $this->ciDeSaldoDeterioro = $ciDeSaldoDeterioro;

        return $this;
    }

    public function getCiDePrimeraVez(): ?string
    {
        return $this->ciDePrimeraVez;
    }

    public function setCiDePrimeraVez(string $ciDePrimeraVez): self
    {
        $this->ciDePrimeraVez = $ciDePrimeraVez;

        return $this;
    }

    public function getCiDeEstado(): ?string
    {
        return $this->ciDeEstado;
    }

    public function setCiDeEstado(string $ciDeEstado): self
    {
        $this->ciDeEstado = $ciDeEstado;

        return $this;
    }

    public function getCiDeEstadoProcesado(): ?string
    {
        return $this->ciDeEstadoProcesado;
    }

    public function setCiDeEstadoProcesado(string $ciDeEstadoProcesado): self
    {
        $this->ciDeEstadoProcesado = $ciDeEstadoProcesado;

        return $this;
    }

    public function getCiDeFechaProcesado(): ?\DateTimeInterface
    {
        return $this->ciDeFechaProcesado;
    }

    public function setCiDeFechaProcesado(\DateTimeInterface $ciDeFechaProcesado): self
    {
        $this->ciDeFechaProcesado = $ciDeFechaProcesado;

        return $this;
    }


}
