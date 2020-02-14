<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcPersonaContacto
 *
 * @ORM\Table(name="gc_persona_contacto", indexes={@ORM\Index(name="IndicePersonaContacto", columns={"em_id", "pe_id"})})
 * @ORM\Entity
 */
class GcPersonaContacto
{
    /**
     * @var int
     *
     * @ORM\Column(name="pc_id", type="bigint", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $pcId;

    /**
     * @var int
     *
     * @ORM\Column(name="em_id", type="bigint", nullable=false)
     */
    private $emId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="pe_id", type="bigint", nullable=false)
     */
    private $peId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="pc_nombre", type="string", length=250, nullable=false, options={"default"="''"})
     */
    private $pcNombre = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="pc_grado", type="string", length=250, nullable=false, options={"default"="''"})
     */
    private $pcGrado = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="pc_estado", type="string", length=1, nullable=false, options={"default"="'C'","fixed"=true})
     */
    private $pcEstado = '\'C\'';

    /**
     * @var string
     *
     * @ORM\Column(name="pc_telefono", type="string", length=250, nullable=false, options={"default"="''"})
     */
    private $pcTelefono = '\'\'';

    public function getPcId(): ?string
    {
        return $this->pcId;
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

    public function getPeId(): ?string
    {
        return $this->peId;
    }

    public function setPeId(string $peId): self
    {
        $this->peId = $peId;

        return $this;
    }

    public function getPcNombre(): ?string
    {
        return $this->pcNombre;
    }

    public function setPcNombre(string $pcNombre): self
    {
        $this->pcNombre = $pcNombre;

        return $this;
    }

    public function getPcGrado(): ?string
    {
        return $this->pcGrado;
    }

    public function setPcGrado(string $pcGrado): self
    {
        $this->pcGrado = $pcGrado;

        return $this;
    }

    public function getPcEstado(): ?string
    {
        return $this->pcEstado;
    }

    public function setPcEstado(string $pcEstado): self
    {
        $this->pcEstado = $pcEstado;

        return $this;
    }

    public function getPcTelefono(): ?string
    {
        return $this->pcTelefono;
    }

    public function setPcTelefono(string $pcTelefono): self
    {
        $this->pcTelefono = $pcTelefono;

        return $this;
    }


}
