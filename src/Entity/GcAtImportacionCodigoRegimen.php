<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcAtImportacionCodigoRegimen
 *
 * @ORM\Table(name="gc_at_importacion_codigo_regimen")
 * @ORM\Entity
 */
class GcAtImportacionCodigoRegimen
{
    /**
     * @var int
     *
     * @ORM\Column(name="at_cr_id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $atCrId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="em_id", type="bigint", nullable=false)
     */
    private $emId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="at_cr_codigo", type="string", length=250, nullable=false, options={"default"="'*'"})
     */
    private $atCrCodigo = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="at_cr_descripcion", type="string", length=250, nullable=false, options={"default"="'*'"})
     */
    private $atCrDescripcion = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="at_cr_estado", type="string", length=1, nullable=false, options={"default"="'C'","fixed"=true})
     */
    private $atCrEstado = '\'C\'';

    public function getAtCrId(): ?string
    {
        return $this->atCrId;
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

    public function getAtCrCodigo(): ?string
    {
        return $this->atCrCodigo;
    }

    public function setAtCrCodigo(string $atCrCodigo): self
    {
        $this->atCrCodigo = $atCrCodigo;

        return $this;
    }

    public function getAtCrDescripcion(): ?string
    {
        return $this->atCrDescripcion;
    }

    public function setAtCrDescripcion(string $atCrDescripcion): self
    {
        $this->atCrDescripcion = $atCrDescripcion;

        return $this;
    }

    public function getAtCrEstado(): ?string
    {
        return $this->atCrEstado;
    }

    public function setAtCrEstado(string $atCrEstado): self
    {
        $this->atCrEstado = $atCrEstado;

        return $this;
    }


}
