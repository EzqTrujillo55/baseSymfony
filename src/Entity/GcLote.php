<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcLote
 *
 * @ORM\Table(name="gc_lote", uniqueConstraints={@ORM\UniqueConstraint(name="indiceLotexItemLotenumero", columns={"it_id", "lt_numero"})})
 * @ORM\Entity
 */
class GcLote
{
    /**
     * @var int
     *
     * @ORM\Column(name="lt_id", type="bigint", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $ltId;

    /**
     * @var int
     *
     * @ORM\Column(name="em_id", type="bigint", nullable=false)
     */
    private $emId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="it_id", type="bigint", nullable=false)
     */
    private $itId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="lt_numero", type="string", length=25, nullable=false, options={"default"="'0'"})
     */
    private $ltNumero = '\'0\'';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="lt_fecha_registro", type="date", nullable=false, options={"default"="'1900-01-01'"})
     */
    private $ltFechaRegistro = '\'1900-01-01\'';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="lt_fecha_modificacion", type="date", nullable=false, options={"default"="'1900-01-01'"})
     */
    private $ltFechaModificacion = '\'1900-01-01\'';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="lt_fecha_revision", type="date", nullable=false, options={"default"="'1900-01-01'"})
     */
    private $ltFechaRevision = '\'1900-01-01\'';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="lt_fecha_caducidad", type="date", nullable=false, options={"default"="'1900-01-01'"})
     */
    private $ltFechaCaducidad = '\'1900-01-01\'';

    /**
     * @var string
     *
     * @ORM\Column(name="lt_observacion", type="string", length=255, nullable=false, options={"default"="''"})
     */
    private $ltObservacion = '\'\'';

    /**
     * @var int
     *
     * @ORM\Column(name="pa_id", type="bigint", nullable=false)
     */
    private $paId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="lt_estado", type="string", length=1, nullable=false, options={"default"="'C'","fixed"=true})
     */
    private $ltEstado = '\'C\'';

    public function getLtId(): ?string
    {
        return $this->ltId;
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

    public function getItId(): ?string
    {
        return $this->itId;
    }

    public function setItId(string $itId): self
    {
        $this->itId = $itId;

        return $this;
    }

    public function getLtNumero(): ?string
    {
        return $this->ltNumero;
    }

    public function setLtNumero(string $ltNumero): self
    {
        $this->ltNumero = $ltNumero;

        return $this;
    }

    public function getLtFechaRegistro(): ?\DateTimeInterface
    {
        return $this->ltFechaRegistro;
    }

    public function setLtFechaRegistro(\DateTimeInterface $ltFechaRegistro): self
    {
        $this->ltFechaRegistro = $ltFechaRegistro;

        return $this;
    }

    public function getLtFechaModificacion(): ?\DateTimeInterface
    {
        return $this->ltFechaModificacion;
    }

    public function setLtFechaModificacion(\DateTimeInterface $ltFechaModificacion): self
    {
        $this->ltFechaModificacion = $ltFechaModificacion;

        return $this;
    }

    public function getLtFechaRevision(): ?\DateTimeInterface
    {
        return $this->ltFechaRevision;
    }

    public function setLtFechaRevision(\DateTimeInterface $ltFechaRevision): self
    {
        $this->ltFechaRevision = $ltFechaRevision;

        return $this;
    }

    public function getLtFechaCaducidad(): ?\DateTimeInterface
    {
        return $this->ltFechaCaducidad;
    }

    public function setLtFechaCaducidad(\DateTimeInterface $ltFechaCaducidad): self
    {
        $this->ltFechaCaducidad = $ltFechaCaducidad;

        return $this;
    }

    public function getLtObservacion(): ?string
    {
        return $this->ltObservacion;
    }

    public function setLtObservacion(string $ltObservacion): self
    {
        $this->ltObservacion = $ltObservacion;

        return $this;
    }

    public function getPaId(): ?string
    {
        return $this->paId;
    }

    public function setPaId(string $paId): self
    {
        $this->paId = $paId;

        return $this;
    }

    public function getLtEstado(): ?string
    {
        return $this->ltEstado;
    }

    public function setLtEstado(string $ltEstado): self
    {
        $this->ltEstado = $ltEstado;

        return $this;
    }


}
