<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcSeguimiento
 *
 * @ORM\Table(name="gc_seguimiento", indexes={@ORM\Index(name="TipoCliente", columns={"em_id", "pe_tipo"})})
 * @ORM\Entity
 */
class GcSeguimiento
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
     * @ORM\Column(name="sg_id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $sgId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="sg_estado", type="string", length=1, nullable=false, options={"default"="'C'","fixed"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $sgEstado = '\'C\'';

    /**
     * @var int
     *
     * @ORM\Column(name="fa_id", type="bigint", nullable=false)
     */
    private $faId = '0';

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
     * @var int
     *
     * @ORM\Column(name="sg_secuencial", type="bigint", nullable=false)
     */
    private $sgSecuencial = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="sg_contacto", type="string", length=100, nullable=false, options={"default"="'*'"})
     */
    private $sgContacto = '\'*\'';

    /**
     * @var int
     *
     * @ORM\Column(name="mp_id", type="bigint", nullable=false)
     */
    private $mpId = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="sg_fecha", type="datetime", nullable=false, options={"default"="'1800-01-01 00:00:01'"})
     */
    private $sgFecha = '\'1800-01-01 00:00:01\'';

    /**
     * @var int
     *
     * @ORM\Column(name="sg_origen", type="bigint", nullable=false)
     */
    private $sgOrigen = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="sg_observacion", type="string", length=255, nullable=false, options={"default"="''"})
     */
    private $sgObservacion = '\'\'';

    /**
     * @var int
     *
     * @ORM\Column(name="se_id", type="bigint", nullable=false)
     */
    private $seId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="us_id", type="string", length=10, nullable=false, options={"default"="'*'"})
     */
    private $usId = '\'*\'';

    /**
     * @var int
     *
     * @ORM\Column(name="sa_id", type="bigint", nullable=false)
     */
    private $saId = '0';

    public function getEmId(): ?string
    {
        return $this->emId;
    }

    public function getSgId(): ?string
    {
        return $this->sgId;
    }

    public function getSgEstado(): ?string
    {
        return $this->sgEstado;
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

    public function getSgSecuencial(): ?string
    {
        return $this->sgSecuencial;
    }

    public function setSgSecuencial(string $sgSecuencial): self
    {
        $this->sgSecuencial = $sgSecuencial;

        return $this;
    }

    public function getSgContacto(): ?string
    {
        return $this->sgContacto;
    }

    public function setSgContacto(string $sgContacto): self
    {
        $this->sgContacto = $sgContacto;

        return $this;
    }

    public function getMpId(): ?string
    {
        return $this->mpId;
    }

    public function setMpId(string $mpId): self
    {
        $this->mpId = $mpId;

        return $this;
    }

    public function getSgFecha(): ?\DateTimeInterface
    {
        return $this->sgFecha;
    }

    public function setSgFecha(\DateTimeInterface $sgFecha): self
    {
        $this->sgFecha = $sgFecha;

        return $this;
    }

    public function getSgOrigen(): ?string
    {
        return $this->sgOrigen;
    }

    public function setSgOrigen(string $sgOrigen): self
    {
        $this->sgOrigen = $sgOrigen;

        return $this;
    }

    public function getSgObservacion(): ?string
    {
        return $this->sgObservacion;
    }

    public function setSgObservacion(string $sgObservacion): self
    {
        $this->sgObservacion = $sgObservacion;

        return $this;
    }

    public function getSeId(): ?string
    {
        return $this->seId;
    }

    public function setSeId(string $seId): self
    {
        $this->seId = $seId;

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

    public function getSaId(): ?string
    {
        return $this->saId;
    }

    public function setSaId(string $saId): self
    {
        $this->saId = $saId;

        return $this;
    }


}
