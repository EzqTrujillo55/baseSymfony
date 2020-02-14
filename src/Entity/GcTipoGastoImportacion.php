<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcTipoGastoImportacion
 *
 * @ORM\Table(name="gc_tipo_gasto_importacion")
 * @ORM\Entity
 */
class GcTipoGastoImportacion
{
    /**
     * @var int
     *
     * @ORM\Column(name="tgi_id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tgiId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="tgi_codigo", type="string", length=5, nullable=false, options={"default"="'*'"})
     */
    private $tgiCodigo = '\'*\'';

    /**
     * @var bool
     *
     * @ORM\Column(name="tgi_tipo", type="boolean", nullable=false)
     */
    private $tgiTipo = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="tgi_descripcion", type="string", length=250, nullable=false, options={"default"="'*'"})
     */
    private $tgiDescripcion = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="tgi_estado", type="string", length=1, nullable=false, options={"default"="'C'","fixed"=true})
     */
    private $tgiEstado = '\'C\'';

    /**
     * @var int
     *
     * @ORM\Column(name="em_id", type="bigint", nullable=false)
     */
    private $emId = '0';

    public function getTgiId(): ?string
    {
        return $this->tgiId;
    }

    public function getTgiCodigo(): ?string
    {
        return $this->tgiCodigo;
    }

    public function setTgiCodigo(string $tgiCodigo): self
    {
        $this->tgiCodigo = $tgiCodigo;

        return $this;
    }

    public function getTgiTipo(): ?bool
    {
        return $this->tgiTipo;
    }

    public function setTgiTipo(bool $tgiTipo): self
    {
        $this->tgiTipo = $tgiTipo;

        return $this;
    }

    public function getTgiDescripcion(): ?string
    {
        return $this->tgiDescripcion;
    }

    public function setTgiDescripcion(string $tgiDescripcion): self
    {
        $this->tgiDescripcion = $tgiDescripcion;

        return $this;
    }

    public function getTgiEstado(): ?string
    {
        return $this->tgiEstado;
    }

    public function setTgiEstado(string $tgiEstado): self
    {
        $this->tgiEstado = $tgiEstado;

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


}
