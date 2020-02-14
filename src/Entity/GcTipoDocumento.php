<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcTipoDocumento
 *
 * @ORM\Table(name="gc_tipo_documento")
 * @ORM\Entity
 */
class GcTipoDocumento
{
    /**
     * @var bool
     *
     * @ORM\Column(name="td_id", type="boolean", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tdId = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="td_tipo", type="boolean", nullable=false)
     */
    private $tdTipo = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="td_descripcion", type="string", length=50, nullable=false, options={"default"="'*'"})
     */
    private $tdDescripcion = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="td_estado", type="string", length=1, nullable=false, options={"default"="'C'","fixed"=true})
     */
    private $tdEstado = '\'C\'';

    /**
     * @var int
     *
     * @ORM\Column(name="em_id", type="bigint", nullable=false)
     */
    private $emId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="td_codigo", type="string", length=5, nullable=false, options={"default"="'*'"})
     */
    private $tdCodigo = '\'*\'';

    /**
     * @var int
     *
     * @ORM\Column(name="td_longitud", type="smallint", nullable=false)
     */
    private $tdLongitud = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="td_observacion", type="string", length=255, nullable=false, options={"default"="''"})
     */
    private $tdObservacion = '\'\'';

    /**
     * @var int
     *
     * @ORM\Column(name="td_default", type="smallint", nullable=false)
     */
    private $tdDefault = '0';

    public function getTdId(): ?bool
    {
        return $this->tdId;
    }

    public function getTdTipo(): ?bool
    {
        return $this->tdTipo;
    }

    public function setTdTipo(bool $tdTipo): self
    {
        $this->tdTipo = $tdTipo;

        return $this;
    }

    public function getTdDescripcion(): ?string
    {
        return $this->tdDescripcion;
    }

    public function setTdDescripcion(string $tdDescripcion): self
    {
        $this->tdDescripcion = $tdDescripcion;

        return $this;
    }

    public function getTdEstado(): ?string
    {
        return $this->tdEstado;
    }

    public function setTdEstado(string $tdEstado): self
    {
        $this->tdEstado = $tdEstado;

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

    public function getTdCodigo(): ?string
    {
        return $this->tdCodigo;
    }

    public function setTdCodigo(string $tdCodigo): self
    {
        $this->tdCodigo = $tdCodigo;

        return $this;
    }

    public function getTdLongitud(): ?int
    {
        return $this->tdLongitud;
    }

    public function setTdLongitud(int $tdLongitud): self
    {
        $this->tdLongitud = $tdLongitud;

        return $this;
    }

    public function getTdObservacion(): ?string
    {
        return $this->tdObservacion;
    }

    public function setTdObservacion(string $tdObservacion): self
    {
        $this->tdObservacion = $tdObservacion;

        return $this;
    }

    public function getTdDefault(): ?int
    {
        return $this->tdDefault;
    }

    public function setTdDefault(int $tdDefault): self
    {
        $this->tdDefault = $tdDefault;

        return $this;
    }


}
