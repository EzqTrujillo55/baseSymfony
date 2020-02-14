<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcAtFormaPago
 *
 * @ORM\Table(name="gc_at_forma_pago")
 * @ORM\Entity
 */
class GcAtFormaPago
{
    /**
     * @var string
     *
     * @ORM\Column(name="at_fp_codigo", type="string", length=5, nullable=false, options={"default"="'0'"})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $atFpCodigo = '\'0\'';

    /**
     * @var int
     *
     * @ORM\Column(name="em_id", type="bigint", nullable=false)
     */
    private $emId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="at_fp_nombre", type="string", length=50, nullable=false, options={"default"="'*'"})
     */
    private $atFpNombre = '\'*\'';

    public function getAtFpCodigo(): ?string
    {
        return $this->atFpCodigo;
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

    public function getAtFpNombre(): ?string
    {
        return $this->atFpNombre;
    }

    public function setAtFpNombre(string $atFpNombre): self
    {
        $this->atFpNombre = $atFpNombre;

        return $this;
    }


}
