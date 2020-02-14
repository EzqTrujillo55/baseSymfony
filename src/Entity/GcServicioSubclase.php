<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcServicioSubclase
 *
 * @ORM\Table(name="gc_servicio_subclase")
 * @ORM\Entity
 */
class GcServicioSubclase
{
    /**
     * @var int
     *
     * @ORM\Column(name="ss_id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $ssId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="em_id", type="bigint", nullable=false)
     */
    private $emId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="sc_id", type="bigint", nullable=false)
     */
    private $scId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="cu_sri_id", type="bigint", nullable=false)
     */
    private $cuSriId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ss_codigo", type="string", length=10, nullable=false, options={"default"="''"})
     */
    private $ssCodigo = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="ss_nombre", type="string", length=100, nullable=false, options={"default"="'*'"})
     */
    private $ssNombre = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="ss_observacion", type="string", length=100, nullable=false, options={"default"="''"})
     */
    private $ssObservacion = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="ss_estado", type="string", length=1, nullable=false, options={"default"="'C'","fixed"=true})
     */
    private $ssEstado = '\'C\'';

    /**
     * @var string
     *
     * @ORM\Column(name="ss_tipo", type="string", length=1, nullable=false, options={"default"="'1'","fixed"=true})
     */
    private $ssTipo = '\'1\'';

    /**
     * @var int
     *
     * @ORM\Column(name="cu_sri_id_inventario_inicial", type="bigint", nullable=false)
     */
    private $cuSriIdInventarioInicial = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="cu_sri_id_compras", type="bigint", nullable=false)
     */
    private $cuSriIdCompras = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="cu_sri_id_importaciones", type="bigint", nullable=false)
     */
    private $cuSriIdImportaciones = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="cu_sri_id_inventario_final", type="bigint", nullable=false)
     */
    private $cuSriIdInventarioFinal = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="cu_sri_id_temporal_costo_ventas", type="bigint", nullable=false)
     */
    private $cuSriIdTemporalCostoVentas = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="cu_sri_id_temporal_inventario_egresado", type="bigint", nullable=false)
     */
    private $cuSriIdTemporalInventarioEgresado = '0';

    public function getSsId(): ?string
    {
        return $this->ssId;
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

    public function getScId(): ?string
    {
        return $this->scId;
    }

    public function setScId(string $scId): self
    {
        $this->scId = $scId;

        return $this;
    }

    public function getCuSriId(): ?string
    {
        return $this->cuSriId;
    }

    public function setCuSriId(string $cuSriId): self
    {
        $this->cuSriId = $cuSriId;

        return $this;
    }

    public function getSsCodigo(): ?string
    {
        return $this->ssCodigo;
    }

    public function setSsCodigo(string $ssCodigo): self
    {
        $this->ssCodigo = $ssCodigo;

        return $this;
    }

    public function getSsNombre(): ?string
    {
        return $this->ssNombre;
    }

    public function setSsNombre(string $ssNombre): self
    {
        $this->ssNombre = $ssNombre;

        return $this;
    }

    public function getSsObservacion(): ?string
    {
        return $this->ssObservacion;
    }

    public function setSsObservacion(string $ssObservacion): self
    {
        $this->ssObservacion = $ssObservacion;

        return $this;
    }

    public function getSsEstado(): ?string
    {
        return $this->ssEstado;
    }

    public function setSsEstado(string $ssEstado): self
    {
        $this->ssEstado = $ssEstado;

        return $this;
    }

    public function getSsTipo(): ?string
    {
        return $this->ssTipo;
    }

    public function setSsTipo(string $ssTipo): self
    {
        $this->ssTipo = $ssTipo;

        return $this;
    }

    public function getCuSriIdInventarioInicial(): ?string
    {
        return $this->cuSriIdInventarioInicial;
    }

    public function setCuSriIdInventarioInicial(string $cuSriIdInventarioInicial): self
    {
        $this->cuSriIdInventarioInicial = $cuSriIdInventarioInicial;

        return $this;
    }

    public function getCuSriIdCompras(): ?string
    {
        return $this->cuSriIdCompras;
    }

    public function setCuSriIdCompras(string $cuSriIdCompras): self
    {
        $this->cuSriIdCompras = $cuSriIdCompras;

        return $this;
    }

    public function getCuSriIdImportaciones(): ?string
    {
        return $this->cuSriIdImportaciones;
    }

    public function setCuSriIdImportaciones(string $cuSriIdImportaciones): self
    {
        $this->cuSriIdImportaciones = $cuSriIdImportaciones;

        return $this;
    }

    public function getCuSriIdInventarioFinal(): ?string
    {
        return $this->cuSriIdInventarioFinal;
    }

    public function setCuSriIdInventarioFinal(string $cuSriIdInventarioFinal): self
    {
        $this->cuSriIdInventarioFinal = $cuSriIdInventarioFinal;

        return $this;
    }

    public function getCuSriIdTemporalCostoVentas(): ?string
    {
        return $this->cuSriIdTemporalCostoVentas;
    }

    public function setCuSriIdTemporalCostoVentas(string $cuSriIdTemporalCostoVentas): self
    {
        $this->cuSriIdTemporalCostoVentas = $cuSriIdTemporalCostoVentas;

        return $this;
    }

    public function getCuSriIdTemporalInventarioEgresado(): ?string
    {
        return $this->cuSriIdTemporalInventarioEgresado;
    }

    public function setCuSriIdTemporalInventarioEgresado(string $cuSriIdTemporalInventarioEgresado): self
    {
        $this->cuSriIdTemporalInventarioEgresado = $cuSriIdTemporalInventarioEgresado;

        return $this;
    }


}
