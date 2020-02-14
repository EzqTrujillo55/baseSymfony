<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcMarca
 *
 * @ORM\Table(name="gc_marca")
 * @ORM\Entity
 */
class GcMarca
{
    /**
     * @var int
     *
     * @ORM\Column(name="ma_id", type="bigint", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $maId;

    /**
     * @var int
     *
     * @ORM\Column(name="em_id", type="bigint", nullable=false)
     */
    private $emId = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="ma_codigo", type="string", length=50, nullable=true, options={"default"="'*'"})
     */
    private $maCodigo = '\'*\'';

    /**
     * @var string|null
     *
     * @ORM\Column(name="ma_nombre", type="string", length=255, nullable=true, options={"default"="'*'"})
     */
    private $maNombre = '\'*\'';

    /**
     * @var string|null
     *
     * @ORM\Column(name="ma_observacion", type="string", length=255, nullable=true, options={"default"="'*'"})
     */
    private $maObservacion = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="ma_estado", type="string", length=1, nullable=false, options={"default"="'C'","fixed"=true})
     */
    private $maEstado = '\'C\'';

    public function getMaId(): ?string
    {
        return $this->maId;
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

    public function getMaCodigo(): ?string
    {
        return $this->maCodigo;
    }

    public function setMaCodigo(?string $maCodigo): self
    {
        $this->maCodigo = $maCodigo;

        return $this;
    }

    public function getMaNombre(): ?string
    {
        return $this->maNombre;
    }

    public function setMaNombre(?string $maNombre): self
    {
        $this->maNombre = $maNombre;

        return $this;
    }

    public function getMaObservacion(): ?string
    {
        return $this->maObservacion;
    }

    public function setMaObservacion(?string $maObservacion): self
    {
        $this->maObservacion = $maObservacion;

        return $this;
    }

    public function getMaEstado(): ?string
    {
        return $this->maEstado;
    }

    public function setMaEstado(string $maEstado): self
    {
        $this->maEstado = $maEstado;

        return $this;
    }


}
