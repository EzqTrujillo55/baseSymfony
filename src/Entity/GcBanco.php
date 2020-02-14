<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcBanco
 *
 * @ORM\Table(name="gc_banco", indexes={@ORM\Index(name="indice_banco", columns={"em_id", "ba_id"})})
 * @ORM\Entity
 */
class GcBanco
{
    /**
     * @var int
     *
     * @ORM\Column(name="ba_id", type="bigint", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $baId;

    /**
     * @var int
     *
     * @ORM\Column(name="em_id", type="bigint", nullable=false)
     */
    private $emId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ba_codigo", type="string", length=10, nullable=false, options={"default"="''"})
     */
    private $baCodigo = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="ba_nombre", type="string", length=50, nullable=false, options={"default"="''"})
     */
    private $baNombre = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="ba_observacion", type="string", length=100, nullable=false, options={"default"="''"})
     */
    private $baObservacion = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="ba_estado", type="string", length=1, nullable=false, options={"default"="'C'","fixed"=true})
     */
    private $baEstado = '\'C\'';

    /**
     * @var string
     *
     * @ORM\Column(name="ba_cuenta_corriente", type="string", length=25, nullable=false, options={"default"="'*'"})
     */
    private $baCuentaCorriente = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="ba_path_reporte", type="string", length=255, nullable=false, options={"default"="'*'"})
     */
    private $baPathReporte = '\'*\'';

    /**
     * @var int
     *
     * @ORM\Column(name="ba_secuencial", type="bigint", nullable=false)
     */
    private $baSecuencial = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="ba_tipo", type="string", length=5, nullable=true, options={"default"="'0'"})
     */
    private $baTipo = '\'0\'';

    /**
     * @var bool
     *
     * @ORM\Column(name="ba_banco_interno", type="boolean", nullable=false, options={"default"="1"})
     */
    private $baBancoInterno = '1';

    /**
     * @var string|null
     *
     * @ORM\Column(name="ba_motivo", type="string", length=5, nullable=true, options={"default"="'0'"})
     */
    private $baMotivo = '\'0\'';

    public function getBaId(): ?string
    {
        return $this->baId;
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

    public function getBaCodigo(): ?string
    {
        return $this->baCodigo;
    }

    public function setBaCodigo(string $baCodigo): self
    {
        $this->baCodigo = $baCodigo;

        return $this;
    }

    public function getBaNombre(): ?string
    {
        return $this->baNombre;
    }

    public function setBaNombre(string $baNombre): self
    {
        $this->baNombre = $baNombre;

        return $this;
    }

    public function getBaObservacion(): ?string
    {
        return $this->baObservacion;
    }

    public function setBaObservacion(string $baObservacion): self
    {
        $this->baObservacion = $baObservacion;

        return $this;
    }

    public function getBaEstado(): ?string
    {
        return $this->baEstado;
    }

    public function setBaEstado(string $baEstado): self
    {
        $this->baEstado = $baEstado;

        return $this;
    }

    public function getBaCuentaCorriente(): ?string
    {
        return $this->baCuentaCorriente;
    }

    public function setBaCuentaCorriente(string $baCuentaCorriente): self
    {
        $this->baCuentaCorriente = $baCuentaCorriente;

        return $this;
    }

    public function getBaPathReporte(): ?string
    {
        return $this->baPathReporte;
    }

    public function setBaPathReporte(string $baPathReporte): self
    {
        $this->baPathReporte = $baPathReporte;

        return $this;
    }

    public function getBaSecuencial(): ?string
    {
        return $this->baSecuencial;
    }

    public function setBaSecuencial(string $baSecuencial): self
    {
        $this->baSecuencial = $baSecuencial;

        return $this;
    }

    public function getBaTipo(): ?string
    {
        return $this->baTipo;
    }

    public function setBaTipo(?string $baTipo): self
    {
        $this->baTipo = $baTipo;

        return $this;
    }

    public function getBaBancoInterno(): ?bool
    {
        return $this->baBancoInterno;
    }

    public function setBaBancoInterno(bool $baBancoInterno): self
    {
        $this->baBancoInterno = $baBancoInterno;

        return $this;
    }

    public function getBaMotivo(): ?string
    {
        return $this->baMotivo;
    }

    public function setBaMotivo(?string $baMotivo): self
    {
        $this->baMotivo = $baMotivo;

        return $this;
    }


}
