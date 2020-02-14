<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcUsuarioRequerimiento
 *
 * @ORM\Table(name="gc_usuario_requerimiento")
 * @ORM\Entity
 */
class GcUsuarioRequerimiento
{
    /**
     * @var int
     *
     * @ORM\Column(name="ur_id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $urId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="em_id", type="bigint", nullable=false)
     */
    private $emId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ur_tipo", type="string", length=1, nullable=false, options={"default"="'S'","fixed"=true})
     */
    private $urTipo = '\'S\'';

    /**
     * @var string|null
     *
     * @ORM\Column(name="ur_codigo", type="blob", length=65535, nullable=true, options={"default"="NULL"})
     */
    private $urCodigo = 'NULL';

    /**
     * @var string
     *
     * @ORM\Column(name="ur_descripcion", type="string", length=250, nullable=false, options={"default"="'*'"})
     */
    private $urDescripcion = '\'*\'';

    public function getUrId(): ?string
    {
        return $this->urId;
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

    public function getUrTipo(): ?string
    {
        return $this->urTipo;
    }

    public function setUrTipo(string $urTipo): self
    {
        $this->urTipo = $urTipo;

        return $this;
    }

    public function getUrCodigo()
    {
        return $this->urCodigo;
    }

    public function setUrCodigo($urCodigo): self
    {
        $this->urCodigo = $urCodigo;

        return $this;
    }

    public function getUrDescripcion(): ?string
    {
        return $this->urDescripcion;
    }

    public function setUrDescripcion(string $urDescripcion): self
    {
        $this->urDescripcion = $urDescripcion;

        return $this;
    }


}
