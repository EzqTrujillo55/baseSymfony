<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NotadebitoDetalle
 *
 * @ORM\Table(name="_notadebito_detalle")
 * @ORM\Entity
 */
class NotadebitoDetalle
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_notadebito_detalle", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idNotadebitoDetalle;

    /**
     * @var int|null
     *
     * @ORM\Column(name="em_id", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $emId = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="motivos_motivo_razon_", type="string", length=300, nullable=true, options={"default"="NULL"})
     */
    private $motivosMotivoRazon = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="motivos_motivo_valor_", type="decimal", precision=12, scale=2, nullable=true, options={"default"="NULL"})
     */
    private $motivosMotivoValor = 'NULL';

    public function getIdNotadebitoDetalle(): ?int
    {
        return $this->idNotadebitoDetalle;
    }

    public function getEmId(): ?int
    {
        return $this->emId;
    }

    public function setEmId(?int $emId): self
    {
        $this->emId = $emId;

        return $this;
    }

    public function getMotivosMotivoRazon(): ?string
    {
        return $this->motivosMotivoRazon;
    }

    public function setMotivosMotivoRazon(?string $motivosMotivoRazon): self
    {
        $this->motivosMotivoRazon = $motivosMotivoRazon;

        return $this;
    }

    public function getMotivosMotivoValor(): ?string
    {
        return $this->motivosMotivoValor;
    }

    public function setMotivosMotivoValor(?string $motivosMotivoValor): self
    {
        $this->motivosMotivoValor = $motivosMotivoValor;

        return $this;
    }


}
