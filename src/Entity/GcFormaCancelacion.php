<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcFormaCancelacion
 *
 * @ORM\Table(name="gc_forma_cancelacion", indexes={@ORM\Index(name="indice_formacancelacion", columns={"em_id", "fc_id"})})
 * @ORM\Entity
 */
class GcFormaCancelacion
{
    /**
     * @var int
     *
     * @ORM\Column(name="fc_id", type="bigint", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $fcId;

    /**
     * @var int
     *
     * @ORM\Column(name="em_id", type="bigint", nullable=false)
     */
    private $emId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="fc_codigo", type="string", length=10, nullable=false, options={"default"="'0'"})
     */
    private $fcCodigo = '\'0\'';

    /**
     * @var string
     *
     * @ORM\Column(name="fc_nombre", type="string", length=50, nullable=false, options={"default"="'*'"})
     */
    private $fcNombre = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="fc_observacion", type="string", length=100, nullable=false, options={"default"="'*'"})
     */
    private $fcObservacion = '\'*\'';

    /**
     * @var int
     *
     * @ORM\Column(name="cu_id", type="bigint", nullable=false)
     */
    private $cuId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="cu_id_comision", type="bigint", nullable=false)
     */
    private $cuIdComision = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="fc_estado", type="string", length=1, nullable=false, options={"default"="'C'","fixed"=true})
     */
    private $fcEstado = '\'C\'';

    /**
     * @var int
     *
     * @ORM\Column(name="ba_id", type="bigint", nullable=false)
     */
    private $baId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="fc_manejo_puntoventa", type="string", length=1, nullable=false, options={"default"="'0'","fixed"=true})
     */
    private $fcManejoPuntoventa = '\'0\'';

    /**
     * @var string
     *
     * @ORM\Column(name="fc_manejo_puntoventa_cierre", type="string", length=1, nullable=false, options={"default"="'0'","fixed"=true})
     */
    private $fcManejoPuntoventaCierre = '\'0\'';

    public function getFcId(): ?string
    {
        return $this->fcId;
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

    public function getFcCodigo(): ?string
    {
        return $this->fcCodigo;
    }

    public function setFcCodigo(string $fcCodigo): self
    {
        $this->fcCodigo = $fcCodigo;

        return $this;
    }

    public function getFcNombre(): ?string
    {
        return $this->fcNombre;
    }

    public function setFcNombre(string $fcNombre): self
    {
        $this->fcNombre = $fcNombre;

        return $this;
    }

    public function getFcObservacion(): ?string
    {
        return $this->fcObservacion;
    }

    public function setFcObservacion(string $fcObservacion): self
    {
        $this->fcObservacion = $fcObservacion;

        return $this;
    }

    public function getCuId(): ?string
    {
        return $this->cuId;
    }

    public function setCuId(string $cuId): self
    {
        $this->cuId = $cuId;

        return $this;
    }

    public function getCuIdComision(): ?string
    {
        return $this->cuIdComision;
    }

    public function setCuIdComision(string $cuIdComision): self
    {
        $this->cuIdComision = $cuIdComision;

        return $this;
    }

    public function getFcEstado(): ?string
    {
        return $this->fcEstado;
    }

    public function setFcEstado(string $fcEstado): self
    {
        $this->fcEstado = $fcEstado;

        return $this;
    }

    public function getBaId(): ?string
    {
        return $this->baId;
    }

    public function setBaId(string $baId): self
    {
        $this->baId = $baId;

        return $this;
    }

    public function getFcManejoPuntoventa(): ?string
    {
        return $this->fcManejoPuntoventa;
    }

    public function setFcManejoPuntoventa(string $fcManejoPuntoventa): self
    {
        $this->fcManejoPuntoventa = $fcManejoPuntoventa;

        return $this;
    }

    public function getFcManejoPuntoventaCierre(): ?string
    {
        return $this->fcManejoPuntoventaCierre;
    }

    public function setFcManejoPuntoventaCierre(string $fcManejoPuntoventaCierre): self
    {
        $this->fcManejoPuntoventaCierre = $fcManejoPuntoventaCierre;

        return $this;
    }


}
