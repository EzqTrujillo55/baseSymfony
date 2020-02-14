<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcEmpleadoEstudios
 *
 * @ORM\Table(name="gc_empleado_estudios")
 * @ORM\Entity
 */
class GcEmpleadoEstudios
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
     * @ORM\Column(name="ms_id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $msId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="mp_id", type="bigint", nullable=false)
     */
    private $mpId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ms_predio_academico", type="string", length=50, nullable=false, options={"default"="'*'"})
     */
    private $msPredioAcademico = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="ms_estudio_realizado", type="string", length=50, nullable=false, options={"default"="'*'"})
     */
    private $msEstudioRealizado = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="ms_titulo", type="string", length=50, nullable=false, options={"default"="'*'"})
     */
    private $msTitulo = '\'*\'';

    /**
     * @var int
     *
     * @ORM\Column(name="pa_id", type="bigint", nullable=false)
     */
    private $paId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="ci_id", type="bigint", nullable=false)
     */
    private $ciId = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ms_fecha_inicio", type="datetime", nullable=false, options={"default"="'1800-01-01 00:00:01'"})
     */
    private $msFechaInicio = '\'1800-01-01 00:00:01\'';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ms_fecha_fin", type="datetime", nullable=false, options={"default"="'1800-01-01 00:00:01'"})
     */
    private $msFechaFin = '\'1800-01-01 00:00:01\'';

    /**
     * @var string
     *
     * @ORM\Column(name="ms_observacion", type="string", length=100, nullable=false, options={"default"="'*'"})
     */
    private $msObservacion = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="ms_otros", type="string", length=100, nullable=false, options={"default"="'*'"})
     */
    private $msOtros = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="ms_estado", type="string", length=1, nullable=false, options={"default"="'*'","fixed"=true})
     */
    private $msEstado = '\'*\'';

    public function getEmId(): ?string
    {
        return $this->emId;
    }

    public function getMsId(): ?string
    {
        return $this->msId;
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

    public function getMsPredioAcademico(): ?string
    {
        return $this->msPredioAcademico;
    }

    public function setMsPredioAcademico(string $msPredioAcademico): self
    {
        $this->msPredioAcademico = $msPredioAcademico;

        return $this;
    }

    public function getMsEstudioRealizado(): ?string
    {
        return $this->msEstudioRealizado;
    }

    public function setMsEstudioRealizado(string $msEstudioRealizado): self
    {
        $this->msEstudioRealizado = $msEstudioRealizado;

        return $this;
    }

    public function getMsTitulo(): ?string
    {
        return $this->msTitulo;
    }

    public function setMsTitulo(string $msTitulo): self
    {
        $this->msTitulo = $msTitulo;

        return $this;
    }

    public function getPaId(): ?string
    {
        return $this->paId;
    }

    public function setPaId(string $paId): self
    {
        $this->paId = $paId;

        return $this;
    }

    public function getCiId(): ?string
    {
        return $this->ciId;
    }

    public function setCiId(string $ciId): self
    {
        $this->ciId = $ciId;

        return $this;
    }

    public function getMsFechaInicio(): ?\DateTimeInterface
    {
        return $this->msFechaInicio;
    }

    public function setMsFechaInicio(\DateTimeInterface $msFechaInicio): self
    {
        $this->msFechaInicio = $msFechaInicio;

        return $this;
    }

    public function getMsFechaFin(): ?\DateTimeInterface
    {
        return $this->msFechaFin;
    }

    public function setMsFechaFin(\DateTimeInterface $msFechaFin): self
    {
        $this->msFechaFin = $msFechaFin;

        return $this;
    }

    public function getMsObservacion(): ?string
    {
        return $this->msObservacion;
    }

    public function setMsObservacion(string $msObservacion): self
    {
        $this->msObservacion = $msObservacion;

        return $this;
    }

    public function getMsOtros(): ?string
    {
        return $this->msOtros;
    }

    public function setMsOtros(string $msOtros): self
    {
        $this->msOtros = $msOtros;

        return $this;
    }

    public function getMsEstado(): ?string
    {
        return $this->msEstado;
    }

    public function setMsEstado(string $msEstado): self
    {
        $this->msEstado = $msEstado;

        return $this;
    }


}
