<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcTipoComprobante
 *
 * @ORM\Table(name="gc_tipo_comprobante", indexes={@ORM\Index(name="indice_tipocomprobante", columns={"em_id", "tc_id"})})
 * @ORM\Entity
 */
class GcTipoComprobante
{
    /**
     * @var int
     *
     * @ORM\Column(name="tc_id", type="bigint", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tcId;

    /**
     * @var int
     *
     * @ORM\Column(name="em_id", type="bigint", nullable=false)
     */
    private $emId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="tc_codigo", type="string", length=10, nullable=false, options={"default"="'*'"})
     */
    private $tcCodigo = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="tc_clase", type="string", length=1, nullable=false, options={"default"="'1'","fixed"=true})
     */
    private $tcClase = '\'1\'';

    /**
     * @var string
     *
     * @ORM\Column(name="tc_nombre", type="string", length=50, nullable=false, options={"default"="'*'"})
     */
    private $tcNombre = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="tc_observacion", type="string", length=100, nullable=false, options={"default"="'*'"})
     */
    private $tcObservacion = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="tc_estado", type="string", length=1, nullable=false, options={"default"="'C'","fixed"=true})
     */
    private $tcEstado = '\'C\'';

    /**
     * @var int
     *
     * @ORM\Column(name="tc_secuencial", type="bigint", nullable=false)
     */
    private $tcSecuencial = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="tc_path_reporte", type="string", length=255, nullable=false, options={"default"="'*'"})
     */
    private $tcPathReporte = '\'*\'';

    /**
     * @var bool
     *
     * @ORM\Column(name="tc_ajuste_niif", type="boolean", nullable=false)
     */
    private $tcAjusteNiif = '0';

    public function getTcId(): ?string
    {
        return $this->tcId;
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

    public function getTcCodigo(): ?string
    {
        return $this->tcCodigo;
    }

    public function setTcCodigo(string $tcCodigo): self
    {
        $this->tcCodigo = $tcCodigo;

        return $this;
    }

    public function getTcClase(): ?string
    {
        return $this->tcClase;
    }

    public function setTcClase(string $tcClase): self
    {
        $this->tcClase = $tcClase;

        return $this;
    }

    public function getTcNombre(): ?string
    {
        return $this->tcNombre;
    }

    public function setTcNombre(string $tcNombre): self
    {
        $this->tcNombre = $tcNombre;

        return $this;
    }

    public function getTcObservacion(): ?string
    {
        return $this->tcObservacion;
    }

    public function setTcObservacion(string $tcObservacion): self
    {
        $this->tcObservacion = $tcObservacion;

        return $this;
    }

    public function getTcEstado(): ?string
    {
        return $this->tcEstado;
    }

    public function setTcEstado(string $tcEstado): self
    {
        $this->tcEstado = $tcEstado;

        return $this;
    }

    public function getTcSecuencial(): ?string
    {
        return $this->tcSecuencial;
    }

    public function setTcSecuencial(string $tcSecuencial): self
    {
        $this->tcSecuencial = $tcSecuencial;

        return $this;
    }

    public function getTcPathReporte(): ?string
    {
        return $this->tcPathReporte;
    }

    public function setTcPathReporte(string $tcPathReporte): self
    {
        $this->tcPathReporte = $tcPathReporte;

        return $this;
    }

    public function getTcAjusteNiif(): ?bool
    {
        return $this->tcAjusteNiif;
    }

    public function setTcAjusteNiif(bool $tcAjusteNiif): self
    {
        $this->tcAjusteNiif = $tcAjusteNiif;

        return $this;
    }


}
