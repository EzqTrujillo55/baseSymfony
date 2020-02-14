<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcAtPaisParaiso
 *
 * @ORM\Table(name="gc_at_pais_paraiso")
 * @ORM\Entity
 */
class GcAtPaisParaiso
{
    /**
     * @var string
     *
     * @ORM\Column(name="at_pa_pa_codigo", type="string", length=5, nullable=false, options={"default"="'0'"})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $atPaPaCodigo = '\'0\'';

    /**
     * @var int
     *
     * @ORM\Column(name="em_id", type="bigint", nullable=false)
     */
    private $emId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="at_pa_pa_nombre", type="string", length=255, nullable=false, options={"default"="''"})
     */
    private $atPaPaNombre = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="at_pa_codigo", type="string", length=5, nullable=false, options={"default"="'0'"})
     */
    private $atPaCodigo = '\'0\'';

    public function getAtPaPaCodigo(): ?string
    {
        return $this->atPaPaCodigo;
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

    public function getAtPaPaNombre(): ?string
    {
        return $this->atPaPaNombre;
    }

    public function setAtPaPaNombre(string $atPaPaNombre): self
    {
        $this->atPaPaNombre = $atPaPaNombre;

        return $this;
    }

    public function getAtPaCodigo(): ?string
    {
        return $this->atPaCodigo;
    }

    public function setAtPaCodigo(string $atPaCodigo): self
    {
        $this->atPaCodigo = $atPaCodigo;

        return $this;
    }


}
