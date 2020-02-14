<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcCuentaSri
 *
 * @ORM\Table(name="gc_cuenta_sri")
 * @ORM\Entity
 */
class GcCuentaSri
{
    /**
     * @var int
     *
     * @ORM\Column(name="cu_sri_id", type="bigint", nullable=false)
     * @ORM\Id

     */
    private $cuSriId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="cu_sri_periodo", type="string", length=10, nullable=false, options={"default"="''"})
     */
    private $cuSriPeriodo = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="cu_sri_codigo", type="string", length=25, nullable=false, options={"default"="''"})
     */
    private $cuSriCodigo = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="cu_sri_nombre", type="string", length=255, nullable=false, options={"default"="''"})
     */
    private $cuSriNombre = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="cu_sri_estado", type="string", length=1, nullable=false, options={"default"="'C'","fixed"=true})
     */
    private $cuSriEstado = '\'C\'';

    /**
     * @var string
     *
     * @ORM\Column(name="cu_sri_observacion", type="string", length=255, nullable=false, options={"default"="''"})
     */
    private $cuSriObservacion = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="cu_sri_tipo_tercero", type="string", length=10, nullable=false, options={"default"="'*'"})
     */
    private $cuSriTipoTercero = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="cu_sri_tipo_cartera", type="string", length=10, nullable=false, options={"default"="'*'"})
     */
    private $cuSriTipoCartera = '\'*\'';

    /**
     * @var int
     *
     * @ORM\Column(name="em_id", type="bigint", nullable=false)
     */
    private $emId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="cu_sri_codigoanterior", type="string", length=25, nullable=false, options={"default"="''"})
     */
    private $cuSriCodigoanterior = '\'\'';

    public function getCuSriId(): ?string
    {
        return $this->cuSriId;
    }

    public function getCuSriPeriodo(): ?string
    {
        return $this->cuSriPeriodo;
    }

    public function setCuSriPeriodo(string $cuSriPeriodo): self
    {
        $this->cuSriPeriodo = $cuSriPeriodo;

        return $this;
    }

    public function getCuSriCodigo(): ?string
    {
        return $this->cuSriCodigo;
    }

    public function setCuSriCodigo(string $cuSriCodigo): self
    {
        $this->cuSriCodigo = $cuSriCodigo;

        return $this;
    }

    public function getCuSriNombre(): ?string
    {
        return $this->cuSriNombre;
    }

    public function setCuSriNombre(string $cuSriNombre): self
    {
        $this->cuSriNombre = $cuSriNombre;

        return $this;
    }

    public function getCuSriEstado(): ?string
    {
        return $this->cuSriEstado;
    }

    public function setCuSriEstado(string $cuSriEstado): self
    {
        $this->cuSriEstado = $cuSriEstado;

        return $this;
    }

    public function getCuSriObservacion(): ?string
    {
        return $this->cuSriObservacion;
    }

    public function setCuSriObservacion(string $cuSriObservacion): self
    {
        $this->cuSriObservacion = $cuSriObservacion;

        return $this;
    }

    public function getCuSriTipoTercero(): ?string
    {
        return $this->cuSriTipoTercero;
    }

    public function setCuSriTipoTercero(string $cuSriTipoTercero): self
    {
        $this->cuSriTipoTercero = $cuSriTipoTercero;

        return $this;
    }

    public function getCuSriTipoCartera(): ?string
    {
        return $this->cuSriTipoCartera;
    }

    public function setCuSriTipoCartera(string $cuSriTipoCartera): self
    {
        $this->cuSriTipoCartera = $cuSriTipoCartera;

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

    public function getCuSriCodigoanterior(): ?string
    {
        return $this->cuSriCodigoanterior;
    }

    public function setCuSriCodigoanterior(string $cuSriCodigoanterior): self
    {
        $this->cuSriCodigoanterior = $cuSriCodigoanterior;

        return $this;
    }


}
