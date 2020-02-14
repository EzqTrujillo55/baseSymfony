<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcPantallaMenu
 *
 * @ORM\Table(name="gc_pantalla_menu", uniqueConstraints={@ORM\UniqueConstraint(name="gc_pantalla_menu_unique", columns={"pm_nombre"})})
 * @ORM\Entity
 */
class GcPantallaMenu
{
    /**
     * @var int
     *
     * @ORM\Column(name="pm_id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $pmId;

    /**
     * @var int
     *
     * @ORM\Column(name="pm_pn_id", type="bigint", nullable=false)
     */
    private $pmPnId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="pm_nombre", type="string", length=50, nullable=false, options={"default"="'*'"})
     */
    private $pmNombre = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="pm_descripcion", type="string", length=50, nullable=false, options={"default"="'*'"})
     */
    private $pmDescripcion = '\'*\'';

    /**
     * @var int
     *
     * @ORM\Column(name="pm_id_padre", type="bigint", nullable=false)
     */
    private $pmIdPadre = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="pm_orden", type="bigint", nullable=false)
     */
    private $pmOrden = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="pm_imagen", type="integer", nullable=false)
     */
    private $pmImagen = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="pm_imagen_activado", type="integer", nullable=false)
     */
    private $pmImagenActivado = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="em_id", type="bigint", nullable=false)
     */
    private $emId = '0';

    public function getPmId(): ?string
    {
        return $this->pmId;
    }

    public function getPmPnId(): ?string
    {
        return $this->pmPnId;
    }

    public function setPmPnId(string $pmPnId): self
    {
        $this->pmPnId = $pmPnId;

        return $this;
    }

    public function getPmNombre(): ?string
    {
        return $this->pmNombre;
    }

    public function setPmNombre(string $pmNombre): self
    {
        $this->pmNombre = $pmNombre;

        return $this;
    }

    public function getPmDescripcion(): ?string
    {
        return $this->pmDescripcion;
    }

    public function setPmDescripcion(string $pmDescripcion): self
    {
        $this->pmDescripcion = $pmDescripcion;

        return $this;
    }

    public function getPmIdPadre(): ?string
    {
        return $this->pmIdPadre;
    }

    public function setPmIdPadre(string $pmIdPadre): self
    {
        $this->pmIdPadre = $pmIdPadre;

        return $this;
    }

    public function getPmOrden(): ?string
    {
        return $this->pmOrden;
    }

    public function setPmOrden(string $pmOrden): self
    {
        $this->pmOrden = $pmOrden;

        return $this;
    }

    public function getPmImagen(): ?int
    {
        return $this->pmImagen;
    }

    public function setPmImagen(int $pmImagen): self
    {
        $this->pmImagen = $pmImagen;

        return $this;
    }

    public function getPmImagenActivado(): ?int
    {
        return $this->pmImagenActivado;
    }

    public function setPmImagenActivado(int $pmImagenActivado): self
    {
        $this->pmImagenActivado = $pmImagenActivado;

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
