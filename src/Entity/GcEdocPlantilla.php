<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcEdocPlantilla
 *
 * @ORM\Table(name="_gc_edoc_plantilla", indexes={@ORM\Index(name="tipo_doc", columns={"tipo_doc"})})
 * @ORM\Entity
 */
class GcEdocPlantilla
{
    /**
     * @var int
     *
     * @ORM\Column(name="em_id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $emId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="tipo_doc", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $tipoDoc;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_doc", type="string", length=40, nullable=false)
     */
    private $nombreDoc;

    /**
     * @var string|null
     *
     * @ORM\Column(name="template", type="blob", length=0, nullable=true, options={"default"="NULL"})
     */
    private $template = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="SQLCabecera", type="string", length=2000, nullable=true, options={"default"="NULL"})
     */
    private $sqlcabecera = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="SQLDetalle", type="string", length=2000, nullable=true, options={"default"="NULL"})
     */
    private $sqldetalle = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="Script", type="text", length=65535, nullable=true, options={"default"="NULL"})
     */
    private $script = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="mensaje_email", type="text", length=65535, nullable=true, options={"default"="NULL"})
     */
    private $mensajeEmail = 'NULL';

    public function getEmId(): ?string
    {
        return $this->emId;
    }

    public function getTipoDoc(): ?int
    {
        return $this->tipoDoc;
    }

    public function getNombreDoc(): ?string
    {
        return $this->nombreDoc;
    }

    public function setNombreDoc(string $nombreDoc): self
    {
        $this->nombreDoc = $nombreDoc;

        return $this;
    }

    public function getTemplate()
    {
        return $this->template;
    }

    public function setTemplate($template): self
    {
        $this->template = $template;

        return $this;
    }

    public function getSqlcabecera(): ?string
    {
        return $this->sqlcabecera;
    }

    public function setSqlcabecera(?string $sqlcabecera): self
    {
        $this->sqlcabecera = $sqlcabecera;

        return $this;
    }

    public function getSqldetalle(): ?string
    {
        return $this->sqldetalle;
    }

    public function setSqldetalle(?string $sqldetalle): self
    {
        $this->sqldetalle = $sqldetalle;

        return $this;
    }

    public function getScript(): ?string
    {
        return $this->script;
    }

    public function setScript(?string $script): self
    {
        $this->script = $script;

        return $this;
    }

    public function getMensajeEmail(): ?string
    {
        return $this->mensajeEmail;
    }

    public function setMensajeEmail(?string $mensajeEmail): self
    {
        $this->mensajeEmail = $mensajeEmail;

        return $this;
    }


}
