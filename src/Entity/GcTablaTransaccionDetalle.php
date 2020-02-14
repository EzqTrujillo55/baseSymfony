<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcTablaTransaccionDetalle
 *
 * @ORM\Table(name="gc_tabla_transaccion_detalle")
 * @ORM\Entity
 */
class GcTablaTransaccionDetalle
{
    /**
     * @var int
     *
     * @ORM\Column(name="tb_tr_de_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tbTrDeId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="tb_tr_id", type="integer", nullable=false)
     */
    private $tbTrId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="tb_tr_de_codigo", type="string", length=10, nullable=false, options={"default"="''"})
     */
    private $tbTrDeCodigo = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="tb_tr_de_descripcion", type="string", length=100, nullable=false, options={"default"="''"})
     */
    private $tbTrDeDescripcion = '\'\'';

    /**
     * @var bool
     *
     * @ORM\Column(name="tb_tr_de_mueve_inventario", type="boolean", nullable=false)
     */
    private $tbTrDeMueveInventario = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="tb_tr_de_maneja_retencion", type="boolean", nullable=false)
     */
    private $tbTrDeManejaRetencion = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="em_id", type="bigint", nullable=false, options={"default"="1"})
     */
    private $emId = '1';

    public function getTbTrDeId(): ?int
    {
        return $this->tbTrDeId;
    }

    public function getTbTrId(): ?int
    {
        return $this->tbTrId;
    }

    public function setTbTrId(int $tbTrId): self
    {
        $this->tbTrId = $tbTrId;

        return $this;
    }

    public function getTbTrDeCodigo(): ?string
    {
        return $this->tbTrDeCodigo;
    }

    public function setTbTrDeCodigo(string $tbTrDeCodigo): self
    {
        $this->tbTrDeCodigo = $tbTrDeCodigo;

        return $this;
    }

    public function getTbTrDeDescripcion(): ?string
    {
        return $this->tbTrDeDescripcion;
    }

    public function setTbTrDeDescripcion(string $tbTrDeDescripcion): self
    {
        $this->tbTrDeDescripcion = $tbTrDeDescripcion;

        return $this;
    }

    public function getTbTrDeMueveInventario(): ?bool
    {
        return $this->tbTrDeMueveInventario;
    }

    public function setTbTrDeMueveInventario(bool $tbTrDeMueveInventario): self
    {
        $this->tbTrDeMueveInventario = $tbTrDeMueveInventario;

        return $this;
    }

    public function getTbTrDeManejaRetencion(): ?bool
    {
        return $this->tbTrDeManejaRetencion;
    }

    public function setTbTrDeManejaRetencion(bool $tbTrDeManejaRetencion): self
    {
        $this->tbTrDeManejaRetencion = $tbTrDeManejaRetencion;

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
