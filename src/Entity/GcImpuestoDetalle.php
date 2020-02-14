<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcImpuestoDetalle
 *
 * @ORM\Table(name="gc_impuesto_detalle")
 * @ORM\Entity
 */
class GcImpuestoDetalle
{
    /**
     * @var int
     *
     * @ORM\Column(name="im_de_id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $imDeId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="im_id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $imId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="em_id", type="bigint", nullable=false)
     */
    private $emId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="im_de_codigo", type="string", length=10, nullable=false, options={"default"="'*'"})
     */
    private $imDeCodigo = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="im_de_porcentaje_o_valor", type="string", length=1, nullable=false, options={"default"="'0'","fixed"=true})
     */
    private $imDePorcentajeOValor = '\'0\'';

    /**
     * @var float
     *
     * @ORM\Column(name="im_de_valor", type="float", precision=10, scale=0, nullable=false)
     */
    private $imDeValor = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="im_de_descripcion", type="string", length=250, nullable=false, options={"default"="'*'"})
     */
    private $imDeDescripcion = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="im_de_estado", type="string", length=1, nullable=false, options={"default"="'C'","fixed"=true})
     */
    private $imDeEstado = '\'C\'';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="im_de_fecha_inicio", type="datetime", nullable=false, options={"default"="'1800-01-01 00:00:01'"})
     */
    private $imDeFechaInicio = '\'1800-01-01 00:00:01\'';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="im_de_fecha_fin", type="datetime", nullable=false, options={"default"="'1800-01-01 00:00:01'"})
     */
    private $imDeFechaFin = '\'1800-01-01 00:00:01\'';

    /**
     * @var string
     *
     * @ORM\Column(name="im_de_codigo_usuario", type="string", length=10, nullable=false, options={"default"="''"})
     */
    private $imDeCodigoUsuario = '\'\'';

    /**
     * @var int
     *
     * @ORM\Column(name="pa_id", type="bigint", nullable=false, options={"default"="1"})
     */
    private $paId = '1';

    public function getImDeId(): ?string
    {
        return $this->imDeId;
    }

    public function getImId(): ?string
    {
        return $this->imId;
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

    public function getImDeCodigo(): ?string
    {
        return $this->imDeCodigo;
    }

    public function setImDeCodigo(string $imDeCodigo): self
    {
        $this->imDeCodigo = $imDeCodigo;

        return $this;
    }

    public function getImDePorcentajeOValor(): ?string
    {
        return $this->imDePorcentajeOValor;
    }

    public function setImDePorcentajeOValor(string $imDePorcentajeOValor): self
    {
        $this->imDePorcentajeOValor = $imDePorcentajeOValor;

        return $this;
    }

    public function getImDeValor(): ?float
    {
        return $this->imDeValor;
    }

    public function setImDeValor(float $imDeValor): self
    {
        $this->imDeValor = $imDeValor;

        return $this;
    }

    public function getImDeDescripcion(): ?string
    {
        return $this->imDeDescripcion;
    }

    public function setImDeDescripcion(string $imDeDescripcion): self
    {
        $this->imDeDescripcion = $imDeDescripcion;

        return $this;
    }

    public function getImDeEstado(): ?string
    {
        return $this->imDeEstado;
    }

    public function setImDeEstado(string $imDeEstado): self
    {
        $this->imDeEstado = $imDeEstado;

        return $this;
    }

    public function getImDeFechaInicio(): ?\DateTimeInterface
    {
        return $this->imDeFechaInicio;
    }

    public function setImDeFechaInicio(\DateTimeInterface $imDeFechaInicio): self
    {
        $this->imDeFechaInicio = $imDeFechaInicio;

        return $this;
    }

    public function getImDeFechaFin(): ?\DateTimeInterface
    {
        return $this->imDeFechaFin;
    }

    public function setImDeFechaFin(\DateTimeInterface $imDeFechaFin): self
    {
        $this->imDeFechaFin = $imDeFechaFin;

        return $this;
    }

    public function getImDeCodigoUsuario(): ?string
    {
        return $this->imDeCodigoUsuario;
    }

    public function setImDeCodigoUsuario(string $imDeCodigoUsuario): self
    {
        $this->imDeCodigoUsuario = $imDeCodigoUsuario;

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


}
