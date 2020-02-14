<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcFormaPago
 *
 * @ORM\Table(name="gc_forma_pago", indexes={@ORM\Index(name="indice_formapago", columns={"em_id", "fp_id"})})
 * @ORM\Entity
 */
class GcFormaPago
{
    /**
     * @var int
     *
     * @ORM\Column(name="fp_id", type="bigint", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $fpId;

    /**
     * @var int
     *
     * @ORM\Column(name="em_id", type="bigint", nullable=false)
     */
    private $emId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="fp_codigo", type="string", length=10, nullable=false, options={"default"="'0'"})
     */
    private $fpCodigo = '\'0\'';

    /**
     * @var string
     *
     * @ORM\Column(name="fp_nombre", type="string", length=50, nullable=false, options={"default"="'*'"})
     */
    private $fpNombre = '\'*\'';

    /**
     * @var float
     *
     * @ORM\Column(name="fp_numero", type="float", precision=10, scale=0, nullable=false)
     */
    private $fpNumero = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="fp_dias", type="float", precision=10, scale=0, nullable=false)
     */
    private $fpDias = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="fp_dias_inicio", type="float", precision=10, scale=0, nullable=false)
     */
    private $fpDiasInicio = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="fp_observacion", type="string", length=100, nullable=false, options={"default"="'*'"})
     */
    private $fpObservacion = '\'*\'';

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
     * @ORM\Column(name="fp_estado", type="string", length=1, nullable=false, options={"default"="'C'","fixed"=true})
     */
    private $fpEstado = '\'C\'';

    /**
     * @var string
     *
     * @ORM\Column(name="fp_compras", type="string", length=1, nullable=false, options={"default"="'S'","fixed"=true})
     */
    private $fpCompras = '\'S\'';

    /**
     * @var string
     *
     * @ORM\Column(name="fp_ventas", type="string", length=1, nullable=false, options={"default"="'S'","fixed"=true})
     */
    private $fpVentas = '\'S\'';

    /**
     * @var int
     *
     * @ORM\Column(name="fc_id", type="bigint", nullable=false)
     */
    private $fcId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="fp_rol_pagos", type="string", length=1, nullable=false, options={"default"="'N'","fixed"=true})
     */
    private $fpRolPagos = '\'N\'';

    /**
     * @var string
     *
     * @ORM\Column(name="fp_at_formapago", type="string", length=2, nullable=false, options={"default"="''"})
     */
    private $fpAtFormapago = '\'\'';

    public function getFpId(): ?string
    {
        return $this->fpId;
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

    public function getFpCodigo(): ?string
    {
        return $this->fpCodigo;
    }

    public function setFpCodigo(string $fpCodigo): self
    {
        $this->fpCodigo = $fpCodigo;

        return $this;
    }

    public function getFpNombre(): ?string
    {
        return $this->fpNombre;
    }

    public function setFpNombre(string $fpNombre): self
    {
        $this->fpNombre = $fpNombre;

        return $this;
    }

    public function getFpNumero(): ?float
    {
        return $this->fpNumero;
    }

    public function setFpNumero(float $fpNumero): self
    {
        $this->fpNumero = $fpNumero;

        return $this;
    }

    public function getFpDias(): ?float
    {
        return $this->fpDias;
    }

    public function setFpDias(float $fpDias): self
    {
        $this->fpDias = $fpDias;

        return $this;
    }

    public function getFpDiasInicio(): ?float
    {
        return $this->fpDiasInicio;
    }

    public function setFpDiasInicio(float $fpDiasInicio): self
    {
        $this->fpDiasInicio = $fpDiasInicio;

        return $this;
    }

    public function getFpObservacion(): ?string
    {
        return $this->fpObservacion;
    }

    public function setFpObservacion(string $fpObservacion): self
    {
        $this->fpObservacion = $fpObservacion;

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

    public function getFpEstado(): ?string
    {
        return $this->fpEstado;
    }

    public function setFpEstado(string $fpEstado): self
    {
        $this->fpEstado = $fpEstado;

        return $this;
    }

    public function getFpCompras(): ?string
    {
        return $this->fpCompras;
    }

    public function setFpCompras(string $fpCompras): self
    {
        $this->fpCompras = $fpCompras;

        return $this;
    }

    public function getFpVentas(): ?string
    {
        return $this->fpVentas;
    }

    public function setFpVentas(string $fpVentas): self
    {
        $this->fpVentas = $fpVentas;

        return $this;
    }

    public function getFcId(): ?string
    {
        return $this->fcId;
    }

    public function setFcId(string $fcId): self
    {
        $this->fcId = $fcId;

        return $this;
    }

    public function getFpRolPagos(): ?string
    {
        return $this->fpRolPagos;
    }

    public function setFpRolPagos(string $fpRolPagos): self
    {
        $this->fpRolPagos = $fpRolPagos;

        return $this;
    }

    public function getFpAtFormapago(): ?string
    {
        return $this->fpAtFormapago;
    }

    public function setFpAtFormapago(string $fpAtFormapago): self
    {
        $this->fpAtFormapago = $fpAtFormapago;

        return $this;
    }


}
