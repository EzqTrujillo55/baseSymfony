<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcCobro
 *
 * @ORM\Table(name="gc_cobro", indexes={@ORM\Index(name="indice_cobro", columns={"em_id", "cb_id"}), @ORM\Index(name="IndicePersonaCobro", columns={"em_id", "pe_id"})})
 * @ORM\Entity
 */
class GcCobro
{
    /**
     * @var int
     *
     * @ORM\Column(name="cb_id", type="bigint", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $cbId;

    /**
     * @var int
     *
     * @ORM\Column(name="em_id", type="bigint", nullable=false)
     */
    private $emId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="pe_id", type="bigint", nullable=false)
     */
    private $peId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="pe_tipo", type="string", length=1, nullable=false, options={"default"="'*'","fixed"=true})
     */
    private $peTipo = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="cb_numero", type="string", length=25, nullable=false, options={"default"="'*'"})
     */
    private $cbNumero = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="cb_tipo", type="string", length=3, nullable=false, options={"default"="'*'","fixed"=true})
     */
    private $cbTipo = '\'*\'';

    /**
     * @var int
     *
     * @ORM\Column(name="cb_secuencial", type="bigint", nullable=false)
     */
    private $cbSecuencial = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="cb_fecha", type="datetime", nullable=false, options={"default"="'1800-01-01 00:00:01'"})
     */
    private $cbFecha = '\'1800-01-01 00:00:01\'';

    /**
     * @var string
     *
     * @ORM\Column(name="cb_observacion", type="string", length=255, nullable=false, options={"default"="''"})
     */
    private $cbObservacion = '\'\'';

    /**
     * @var float
     *
     * @ORM\Column(name="cb_total", type="float", precision=10, scale=0, nullable=false)
     */
    private $cbTotal = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="cb_total_texto", type="string", length=150, nullable=false, options={"default"="'*'"})
     */
    private $cbTotalTexto = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="cb_estado", type="string", length=1, nullable=false, options={"default"="'*'","fixed"=true})
     */
    private $cbEstado = '\'*\'';

    /**
     * @var int
     *
     * @ORM\Column(name="us_id", type="bigint", nullable=false)
     */
    private $usId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="co_id", type="bigint", nullable=false)
     */
    private $coId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="bc_id", type="bigint", nullable=false)
     */
    private $bcId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="bc_tipo", type="string", length=1, nullable=false, options={"default"="'*'","fixed"=true})
     */
    private $bcTipo = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="cb_numero_recibo", type="string", length=25, nullable=false, options={"default"="'0'"})
     */
    private $cbNumeroRecibo = '\'0\'';

    /**
     * @var float
     *
     * @ORM\Column(name="cb_comision", type="float", precision=10, scale=0, nullable=false)
     */
    private $cbComision = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="cb_retencion_numero", type="string", length=100, nullable=false, options={"default"="'0'"})
     */
    private $cbRetencionNumero = '\'0\'';

    /**
     * @var int
     *
     * @ORM\Column(name="cn_id", type="bigint", nullable=false)
     */
    private $cnId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="cb_observacion2", type="string", length=255, nullable=false, options={"default"="'*'"})
     */
    private $cbObservacion2 = '\'*\'';

    /**
     * @var int
     *
     * @ORM\Column(name="pv_tr_id", type="bigint", nullable=false)
     */
    private $pvTrId = '0';

    public function getCbId(): ?string
    {
        return $this->cbId;
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

    public function getPeId(): ?string
    {
        return $this->peId;
    }

    public function setPeId(string $peId): self
    {
        $this->peId = $peId;

        return $this;
    }

    public function getPeTipo(): ?string
    {
        return $this->peTipo;
    }

    public function setPeTipo(string $peTipo): self
    {
        $this->peTipo = $peTipo;

        return $this;
    }

    public function getCbNumero(): ?string
    {
        return $this->cbNumero;
    }

    public function setCbNumero(string $cbNumero): self
    {
        $this->cbNumero = $cbNumero;

        return $this;
    }

    public function getCbTipo(): ?string
    {
        return $this->cbTipo;
    }

    public function setCbTipo(string $cbTipo): self
    {
        $this->cbTipo = $cbTipo;

        return $this;
    }

    public function getCbSecuencial(): ?string
    {
        return $this->cbSecuencial;
    }

    public function setCbSecuencial(string $cbSecuencial): self
    {
        $this->cbSecuencial = $cbSecuencial;

        return $this;
    }

    public function getCbFecha(): ?\DateTimeInterface
    {
        return $this->cbFecha;
    }

    public function setCbFecha(\DateTimeInterface $cbFecha): self
    {
        $this->cbFecha = $cbFecha;

        return $this;
    }

    public function getCbObservacion(): ?string
    {
        return $this->cbObservacion;
    }

    public function setCbObservacion(string $cbObservacion): self
    {
        $this->cbObservacion = $cbObservacion;

        return $this;
    }

    public function getCbTotal(): ?float
    {
        return $this->cbTotal;
    }

    public function setCbTotal(float $cbTotal): self
    {
        $this->cbTotal = $cbTotal;

        return $this;
    }

    public function getCbTotalTexto(): ?string
    {
        return $this->cbTotalTexto;
    }

    public function setCbTotalTexto(string $cbTotalTexto): self
    {
        $this->cbTotalTexto = $cbTotalTexto;

        return $this;
    }

    public function getCbEstado(): ?string
    {
        return $this->cbEstado;
    }

    public function setCbEstado(string $cbEstado): self
    {
        $this->cbEstado = $cbEstado;

        return $this;
    }

    public function getUsId(): ?string
    {
        return $this->usId;
    }

    public function setUsId(string $usId): self
    {
        $this->usId = $usId;

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

    public function getBcId(): ?string
    {
        return $this->bcId;
    }

    public function setBcId(string $bcId): self
    {
        $this->bcId = $bcId;

        return $this;
    }

    public function getBcTipo(): ?string
    {
        return $this->bcTipo;
    }

    public function setBcTipo(string $bcTipo): self
    {
        $this->bcTipo = $bcTipo;

        return $this;
    }

    public function getCbNumeroRecibo(): ?string
    {
        return $this->cbNumeroRecibo;
    }

    public function setCbNumeroRecibo(string $cbNumeroRecibo): self
    {
        $this->cbNumeroRecibo = $cbNumeroRecibo;

        return $this;
    }

    public function getCbComision(): ?float
    {
        return $this->cbComision;
    }

    public function setCbComision(float $cbComision): self
    {
        $this->cbComision = $cbComision;

        return $this;
    }

    public function getCbRetencionNumero(): ?string
    {
        return $this->cbRetencionNumero;
    }

    public function setCbRetencionNumero(string $cbRetencionNumero): self
    {
        $this->cbRetencionNumero = $cbRetencionNumero;

        return $this;
    }

    public function getCnId(): ?string
    {
        return $this->cnId;
    }

    public function setCnId(string $cnId): self
    {
        $this->cnId = $cnId;

        return $this;
    }

    public function getCbObservacion2(): ?string
    {
        return $this->cbObservacion2;
    }

    public function setCbObservacion2(string $cbObservacion2): self
    {
        $this->cbObservacion2 = $cbObservacion2;

        return $this;
    }

    public function getPvTrId(): ?string
    {
        return $this->pvTrId;
    }

    public function setPvTrId(string $pvTrId): self
    {
        $this->pvTrId = $pvTrId;

        return $this;
    }


}
