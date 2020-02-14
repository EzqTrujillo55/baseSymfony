<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcAtExportacionCodigoRegimen
 *
 * @ORM\Table(name="gc_at_exportacion_codigo_regimen")
 * @ORM\Entity
 */
class GcAtExportacionCodigoRegimen
{
    /**
     * @var string
     *
     * @ORM\Column(name="at_cr_codigo", type="string", length=5, nullable=false, options={"default"="'0'"})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $atCrCodigo = '\'0\'';

    /**
     * @var int
     *
     * @ORM\Column(name="em_id", type="bigint", nullable=false)
     */
    private $emId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="at_cr_nombre", type="string", length=100, nullable=false, options={"default"="'*'"})
     */
    private $atCrNombre = '\'*\'';

    public function getAtCrCodigo(): ?string
    {
        return $this->atCrCodigo;
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

    public function getAtCrNombre(): ?string
    {
        return $this->atCrNombre;
    }

    public function setAtCrNombre(string $atCrNombre): self
    {
        $this->atCrNombre = $atCrNombre;

        return $this;
    }


}
