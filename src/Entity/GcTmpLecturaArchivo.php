<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcTmpLecturaArchivo
 *
 * @ORM\Table(name="gc_tmp_lectura_archivo")
 * @ORM\Entity
 */
class GcTmpLecturaArchivo
{
    /**
     * @var int
     *
     * @ORM\Column(name="la_id", type="bigint", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $laId;

    /**
     * @var int
     *
     * @ORM\Column(name="em_id", type="bigint", nullable=false)
     */
    private $emId = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="la_fecha", type="date", nullable=false, options={"default"="'1800-01-01'"})
     */
    private $laFecha = '\'1800-01-01\'';

    /**
     * @var string
     *
     * @ORM\Column(name="la_tipo_origen", type="string", length=25, nullable=false, options={"default"="''"})
     */
    private $laTipoOrigen = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="la_tipo_documento", type="string", length=5, nullable=false, options={"default"="''"})
     */
    private $laTipoDocumento = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="la_estado", type="string", length=1, nullable=false, options={"default"="'C'","fixed"=true})
     */
    private $laEstado = '\'C\'';

    /**
     * @var string
     *
     * @ORM\Column(name="la_archivo", type="blob", length=0, nullable=false)
     */
    private $laArchivo;

    public function getLaId(): ?string
    {
        return $this->laId;
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

    public function getLaFecha(): ?\DateTimeInterface
    {
        return $this->laFecha;
    }

    public function setLaFecha(\DateTimeInterface $laFecha): self
    {
        $this->laFecha = $laFecha;

        return $this;
    }

    public function getLaTipoOrigen(): ?string
    {
        return $this->laTipoOrigen;
    }

    public function setLaTipoOrigen(string $laTipoOrigen): self
    {
        $this->laTipoOrigen = $laTipoOrigen;

        return $this;
    }

    public function getLaTipoDocumento(): ?string
    {
        return $this->laTipoDocumento;
    }

    public function setLaTipoDocumento(string $laTipoDocumento): self
    {
        $this->laTipoDocumento = $laTipoDocumento;

        return $this;
    }

    public function getLaEstado(): ?string
    {
        return $this->laEstado;
    }

    public function setLaEstado(string $laEstado): self
    {
        $this->laEstado = $laEstado;

        return $this;
    }

    public function getLaArchivo()
    {
        return $this->laArchivo;
    }

    public function setLaArchivo($laArchivo): self
    {
        $this->laArchivo = $laArchivo;

        return $this;
    }


}
