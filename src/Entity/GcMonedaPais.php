<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcMonedaPais
 *
 * @ORM\Table(name="gc_moneda_pais")
 * @ORM\Entity
 */
class GcMonedaPais
{
    /**
     * @var int
     *
     * @ORM\Column(name="mp_id", type="bigint", nullable=false)
     * @ORM\Id

     */
    private $mpId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="em_pa_id", type="bigint", nullable=false)
     */
    private $emPaId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="mp_nombre_singular", type="string", length=255, nullable=false, options={"default"="''"})
     */
    private $mpNombreSingular = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="mp_nombre_plural", type="string", length=255, nullable=false, options={"default"="''"})
     */
    private $mpNombrePlural = '\'\'';

    /**
     * @var bool
     *
     * @ORM\Column(name="mp_prioridad", type="boolean", nullable=false)
     */
    private $mpPrioridad = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="mp_estado", type="string", length=1, nullable=false, options={"default"="'C'","fixed"=true})
     */
    private $mpEstado = '\'C\'';

    /**
     * @var int
     *
     * @ORM\Column(name="em_id", type="bigint", nullable=false)
     */
    private $emId = '0';

    public function getMpId(): ?string
    {
        return $this->mpId;
    }

    public function getEmPaId(): ?string
    {
        return $this->emPaId;
    }

    public function setEmPaId(string $emPaId): self
    {
        $this->emPaId = $emPaId;

        return $this;
    }

    public function getMpNombreSingular(): ?string
    {
        return $this->mpNombreSingular;
    }

    public function setMpNombreSingular(string $mpNombreSingular): self
    {
        $this->mpNombreSingular = $mpNombreSingular;

        return $this;
    }

    public function getMpNombrePlural(): ?string
    {
        return $this->mpNombrePlural;
    }

    public function setMpNombrePlural(string $mpNombrePlural): self
    {
        $this->mpNombrePlural = $mpNombrePlural;

        return $this;
    }

    public function getMpPrioridad(): ?bool
    {
        return $this->mpPrioridad;
    }

    public function setMpPrioridad(bool $mpPrioridad): self
    {
        $this->mpPrioridad = $mpPrioridad;

        return $this;
    }

    public function getMpEstado(): ?string
    {
        return $this->mpEstado;
    }

    public function setMpEstado(string $mpEstado): self
    {
        $this->mpEstado = $mpEstado;

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
