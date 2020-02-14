<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcTarjetaCredito
 *
 * @ORM\Table(name="gc_tarjeta_credito")
 * @ORM\Entity
 */
class GcTarjetaCredito
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_gc_tarjeta_credito", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idGcTarjetaCredito;

    /**
     * @var int
     *
     * @ORM\Column(name="tt_id", type="bigint", nullable=false)
     */
    private $ttId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="tt_codigo", type="string", length=10, nullable=false, options={"default"="'*'"})
     */
    private $ttCodigo = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="tt_nombre", type="string", length=50, nullable=false, options={"default"="'*'"})
     */
    private $ttNombre = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="tt_telefono", type="string", length=25, nullable=false, options={"default"="'*'"})
     */
    private $ttTelefono = '\'*\'';

    /**
     * @var float
     *
     * @ORM\Column(name="tt_comision_corriente", type="float", precision=10, scale=0, nullable=false)
     */
    private $ttComisionCorriente = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="tt_comision_pagos", type="float", precision=10, scale=0, nullable=false)
     */
    private $ttComisionPagos = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="tt_observacion", type="string", length=100, nullable=false, options={"default"="'*'"})
     */
    private $ttObservacion = '\'*\'';

    /**
     * @var int
     *
     * @ORM\Column(name="em_id", type="bigint", nullable=false)
     */
    private $emId = '0';

    public function getIdGcTarjetaCredito(): ?int
    {
        return $this->idGcTarjetaCredito;
    }

    public function getTtId(): ?string
    {
        return $this->ttId;
    }

    public function setTtId(string $ttId): self
    {
        $this->ttId = $ttId;

        return $this;
    }

    public function getTtCodigo(): ?string
    {
        return $this->ttCodigo;
    }

    public function setTtCodigo(string $ttCodigo): self
    {
        $this->ttCodigo = $ttCodigo;

        return $this;
    }

    public function getTtNombre(): ?string
    {
        return $this->ttNombre;
    }

    public function setTtNombre(string $ttNombre): self
    {
        $this->ttNombre = $ttNombre;

        return $this;
    }

    public function getTtTelefono(): ?string
    {
        return $this->ttTelefono;
    }

    public function setTtTelefono(string $ttTelefono): self
    {
        $this->ttTelefono = $ttTelefono;

        return $this;
    }

    public function getTtComisionCorriente(): ?float
    {
        return $this->ttComisionCorriente;
    }

    public function setTtComisionCorriente(float $ttComisionCorriente): self
    {
        $this->ttComisionCorriente = $ttComisionCorriente;

        return $this;
    }

    public function getTtComisionPagos(): ?float
    {
        return $this->ttComisionPagos;
    }

    public function setTtComisionPagos(float $ttComisionPagos): self
    {
        $this->ttComisionPagos = $ttComisionPagos;

        return $this;
    }

    public function getTtObservacion(): ?string
    {
        return $this->ttObservacion;
    }

    public function setTtObservacion(string $ttObservacion): self
    {
        $this->ttObservacion = $ttObservacion;

        return $this;
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


}
