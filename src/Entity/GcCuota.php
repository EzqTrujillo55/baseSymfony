<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcCuota
 *
 * @ORM\Table(name="gc_cuota", indexes={@ORM\Index(name="indice_cuota_empresa_factura", columns={"em_id", "fa_id"})})
 * @ORM\Entity
 */
class GcCuota
{
    /**
     * @var int
     *
     * @ORM\Column(name="ct_id", type="bigint", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $ctId;

    /**
     * @var int
     *
     * @ORM\Column(name="em_id", type="bigint", nullable=false)
     */
    private $emId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="fa_id", type="bigint", nullable=false)
     */
    private $faId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="fa_tipo", type="string", length=5, nullable=false, options={"default"="'**'","fixed"=true})
     */
    private $faTipo = '\'**\'';

    /**
     * @var string
     *
     * @ORM\Column(name="fa_numero", type="string", length=25, nullable=false, options={"default"="'*'"})
     */
    private $faNumero = '\'*\'';

    /**
     * @var float
     *
     * @ORM\Column(name="ct_cuota", type="float", precision=10, scale=0, nullable=false)
     */
    private $ctCuota = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ct_fecha", type="datetime", nullable=false, options={"default"="'1800-01-01 00:00:01'"})
     */
    private $ctFecha = '\'1800-01-01 00:00:01\'';

    /**
     * @var string
     *
     * @ORM\Column(name="ct_estado", type="string", length=1, nullable=false, options={"default"="'*'","fixed"=true})
     */
    private $ctEstado = '\'*\'';

    /**
     * @var float
     *
     * @ORM\Column(name="ct_cuota_saldo", type="float", precision=10, scale=0, nullable=false)
     */
    private $ctCuotaSaldo = '0';

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
     * @ORM\Column(name="ct_numero", type="string", length=10, nullable=false, options={"default"="'*'"})
     */
    private $ctNumero = '\'*\'';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ct_fecha_abono", type="datetime", nullable=false, options={"default"="'1800-01-01 00:00:01'"})
     */
    private $ctFechaAbono = '\'1800-01-01 00:00:01\'';

    /**
     * @var float
     *
     * @ORM\Column(name="ct_cuota_abono_custodia", type="float", precision=10, scale=0, nullable=false)
     */
    private $ctCuotaAbonoCustodia = '0';

    public function getCtId(): ?string
    {
        return $this->ctId;
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

    public function getFaId(): ?string
    {
        return $this->faId;
    }

    public function setFaId(string $faId): self
    {
        $this->faId = $faId;

        return $this;
    }

    public function getFaTipo(): ?string
    {
        return $this->faTipo;
    }

    public function setFaTipo(string $faTipo): self
    {
        $this->faTipo = $faTipo;

        return $this;
    }

    public function getFaNumero(): ?string
    {
        return $this->faNumero;
    }

    public function setFaNumero(string $faNumero): self
    {
        $this->faNumero = $faNumero;

        return $this;
    }

    public function getCtCuota(): ?float
    {
        return $this->ctCuota;
    }

    public function setCtCuota(float $ctCuota): self
    {
        $this->ctCuota = $ctCuota;

        return $this;
    }

    public function getCtFecha(): ?\DateTimeInterface
    {
        return $this->ctFecha;
    }

    public function setCtFecha(\DateTimeInterface $ctFecha): self
    {
        $this->ctFecha = $ctFecha;

        return $this;
    }

    public function getCtEstado(): ?string
    {
        return $this->ctEstado;
    }

    public function setCtEstado(string $ctEstado): self
    {
        $this->ctEstado = $ctEstado;

        return $this;
    }

    public function getCtCuotaSaldo(): ?float
    {
        return $this->ctCuotaSaldo;
    }

    public function setCtCuotaSaldo(float $ctCuotaSaldo): self
    {
        $this->ctCuotaSaldo = $ctCuotaSaldo;

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

    public function getCtNumero(): ?string
    {
        return $this->ctNumero;
    }

    public function setCtNumero(string $ctNumero): self
    {
        $this->ctNumero = $ctNumero;

        return $this;
    }

    public function getCtFechaAbono(): ?\DateTimeInterface
    {
        return $this->ctFechaAbono;
    }

    public function setCtFechaAbono(\DateTimeInterface $ctFechaAbono): self
    {
        $this->ctFechaAbono = $ctFechaAbono;

        return $this;
    }

    public function getCtCuotaAbonoCustodia(): ?float
    {
        return $this->ctCuotaAbonoCustodia;
    }

    public function setCtCuotaAbonoCustodia(float $ctCuotaAbonoCustodia): self
    {
        $this->ctCuotaAbonoCustodia = $ctCuotaAbonoCustodia;

        return $this;
    }


}
