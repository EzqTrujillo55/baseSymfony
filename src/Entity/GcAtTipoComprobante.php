<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcAtTipoComprobante
 *
 * @ORM\Table(name="gc_at_tipo_comprobante")
 * @ORM\Entity
 */
class GcAtTipoComprobante
{
    /**
     * @var string
     *
     * @ORM\Column(name="at_tc_id", type="string", length=10, nullable=false, options={"default"="'0'"})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $atTcId = '\'0\'';

    /**
     * @var int
     *
     * @ORM\Column(name="em_id", type="bigint", nullable=false)
     */
    private $emId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="at_tc_descripcion", type="string", length=250, nullable=false, options={"default"="'*'"})
     */
    private $atTcDescripcion = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="at_tc_estado", type="string", length=1, nullable=false, options={"default"="'C'","fixed"=true})
     */
    private $atTcEstado = '\'C\'';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="at_tc_fechavigencia", type="date", nullable=false, options={"default"="'2006-01-01'"})
     */
    private $atTcFechavigencia = '\'2006-01-01\'';

    /**
     * @var string
     *
     * @ORM\Column(name="at_codigo_interno", type="string", length=5, nullable=false, options={"default"="''"})
     */
    private $atCodigoInterno = '\'\'';

    public function getAtTcId(): ?string
    {
        return $this->atTcId;
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

    public function getAtTcDescripcion(): ?string
    {
        return $this->atTcDescripcion;
    }

    public function setAtTcDescripcion(string $atTcDescripcion): self
    {
        $this->atTcDescripcion = $atTcDescripcion;

        return $this;
    }

    public function getAtTcEstado(): ?string
    {
        return $this->atTcEstado;
    }

    public function setAtTcEstado(string $atTcEstado): self
    {
        $this->atTcEstado = $atTcEstado;

        return $this;
    }

    public function getAtTcFechavigencia(): ?\DateTimeInterface
    {
        return $this->atTcFechavigencia;
    }

    public function setAtTcFechavigencia(\DateTimeInterface $atTcFechavigencia): self
    {
        $this->atTcFechavigencia = $atTcFechavigencia;

        return $this;
    }

    public function getAtCodigoInterno(): ?string
    {
        return $this->atCodigoInterno;
    }

    public function setAtCodigoInterno(string $atCodigoInterno): self
    {
        $this->atCodigoInterno = $atCodigoInterno;

        return $this;
    }


}
