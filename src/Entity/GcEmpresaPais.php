<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcEmpresaPais
 *
 * @ORM\Table(name="gc_empresa_pais")
 * @ORM\Entity
 */
class GcEmpresaPais
{
    /**
     * @var int
     *
     * @ORM\Column(name="em_pa_id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $emPaId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="em_pa_nombre", type="string", length=255, nullable=false, options={"default"="''"})
     */
    private $emPaNombre = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="em_pa_estado", type="string", length=1, nullable=false, options={"default"="'C'","fixed"=true})
     */
    private $emPaEstado = '\'C\'';

    /**
     * @var int
     *
     * @ORM\Column(name="em_id", type="bigint", nullable=false)
     */
    private $emId = '0';

    public function getEmPaId(): ?string
    {
        return $this->emPaId;
    }

    public function getEmPaNombre(): ?string
    {
        return $this->emPaNombre;
    }

    public function setEmPaNombre(string $emPaNombre): self
    {
        $this->emPaNombre = $emPaNombre;

        return $this;
    }

    public function getEmPaEstado(): ?string
    {
        return $this->emPaEstado;
    }

    public function setEmPaEstado(string $emPaEstado): self
    {
        $this->emPaEstado = $emPaEstado;

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
