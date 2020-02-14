<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcComprobanteTipoMovimiento
 *
 * @ORM\Table(name="gc_comprobante_tipo_movimiento")
 * @ORM\Entity
 */
class GcComprobanteTipoMovimiento
{
    /**
     * @var int
     *
     * @ORM\Column(name="co_tm_id", type="bigint", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $coTmId;

    /**
     * @var string
     *
     * @ORM\Column(name="co_tm_codigo", type="string", length=2, nullable=false, options={"default"="''"})
     */
    private $coTmCodigo = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="co_tm_nombre", type="string", length=255, nullable=false, options={"default"="''"})
     */
    private $coTmNombre = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="co_tm_estado", type="string", length=1, nullable=false, options={"default"="'C'","fixed"=true})
     */
    private $coTmEstado = '\'C\'';

    /**
     * @var int
     *
     * @ORM\Column(name="em_id", type="bigint", nullable=false)
     */
    private $emId = '0';

    public function getCoTmId(): ?string
    {
        return $this->coTmId;
    }

    public function getCoTmCodigo(): ?string
    {
        return $this->coTmCodigo;
    }

    public function setCoTmCodigo(string $coTmCodigo): self
    {
        $this->coTmCodigo = $coTmCodigo;

        return $this;
    }

    public function getCoTmNombre(): ?string
    {
        return $this->coTmNombre;
    }

    public function setCoTmNombre(string $coTmNombre): self
    {
        $this->coTmNombre = $coTmNombre;

        return $this;
    }

    public function getCoTmEstado(): ?string
    {
        return $this->coTmEstado;
    }

    public function setCoTmEstado(string $coTmEstado): self
    {
        $this->coTmEstado = $coTmEstado;

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
