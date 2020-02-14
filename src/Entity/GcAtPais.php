<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcAtPais
 *
 * @ORM\Table(name="gc_at_pais")
 * @ORM\Entity
 */
class GcAtPais
{
    /**
     * @var string
     *
     * @ORM\Column(name="at_pa_codigo", type="string", length=5, nullable=false, options={"default"="'0'"})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $atPaCodigo = '\'0\'';

    /**
     * @var int
     *
     * @ORM\Column(name="em_id", type="bigint", nullable=false)
     */
    private $emId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="at_pa_nombre", type="string", length=50, nullable=false, options={"default"="'*'"})
     */
    private $atPaNombre = '\'*\'';

    public function getAtPaCodigo(): ?string
    {
        return $this->atPaCodigo;
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

    public function getAtPaNombre(): ?string
    {
        return $this->atPaNombre;
    }

    public function setAtPaNombre(string $atPaNombre): self
    {
        $this->atPaNombre = $atPaNombre;

        return $this;
    }


}
