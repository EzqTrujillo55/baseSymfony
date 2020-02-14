<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcImagen
 *
 * @ORM\Table(name="gc_imagen", indexes={@ORM\Index(name="indice_imagen_empresa", columns={"em_id", "im_origen", "id_origen"})})
 * @ORM\Entity
 */
class GcImagen
{
    /**
     * @var int
     *
     * @ORM\Column(name="im_id", type="bigint", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $imId;

    /**
     * @var int
     *
     * @ORM\Column(name="em_id", type="bigint", nullable=false)
     */
    private $emId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="im_origen", type="string", length=50, nullable=false, options={"default"="''"})
     */
    private $imOrigen = '\'\'';

    /**
     * @var int
     *
     * @ORM\Column(name="id_origen", type="bigint", nullable=false)
     */
    private $idOrigen = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="im_imagen", type="blob", length=0, nullable=true, options={"default"="NULL"})
     */
    private $imImagen = 'NULL';

    /**
     * @var string
     *
     * @ORM\Column(name="im_path", type="string", length=255, nullable=false, options={"default"="''"})
     */
    private $imPath = '\'\'';

    /**
     * @var bool
     *
     * @ORM\Column(name="im_principal", type="boolean", nullable=false)
     */
    private $imPrincipal = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="im_fecha", type="date", nullable=false, options={"default"="'2000-01-01'"})
     */
    private $imFecha = '\'2000-01-01\'';

    /**
     * @var string
     *
     * @ORM\Column(name="im_estado", type="string", length=1, nullable=false, options={"default"="'C'","fixed"=true})
     */
    private $imEstado = '\'C\'';

    public function getImId(): ?string
    {
        return $this->imId;
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

    public function getImOrigen(): ?string
    {
        return $this->imOrigen;
    }

    public function setImOrigen(string $imOrigen): self
    {
        $this->imOrigen = $imOrigen;

        return $this;
    }

    public function getIdOrigen(): ?string
    {
        return $this->idOrigen;
    }

    public function setIdOrigen(string $idOrigen): self
    {
        $this->idOrigen = $idOrigen;

        return $this;
    }

    public function getImImagen()
    {
        return $this->imImagen;
    }

    public function setImImagen($imImagen): self
    {
        $this->imImagen = $imImagen;

        return $this;
    }

    public function getImPath(): ?string
    {
        return $this->imPath;
    }

    public function setImPath(string $imPath): self
    {
        $this->imPath = $imPath;

        return $this;
    }

    public function getImPrincipal(): ?bool
    {
        return $this->imPrincipal;
    }

    public function setImPrincipal(bool $imPrincipal): self
    {
        $this->imPrincipal = $imPrincipal;

        return $this;
    }

    public function getImFecha(): ?\DateTimeInterface
    {
        return $this->imFecha;
    }

    public function setImFecha(\DateTimeInterface $imFecha): self
    {
        $this->imFecha = $imFecha;

        return $this;
    }

    public function getImEstado(): ?string
    {
        return $this->imEstado;
    }

    public function setImEstado(string $imEstado): self
    {
        $this->imEstado = $imEstado;

        return $this;
    }


}
