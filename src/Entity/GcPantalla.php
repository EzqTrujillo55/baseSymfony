<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcPantalla
 *
 * @ORM\Table(name="gc_pantalla", uniqueConstraints={@ORM\UniqueConstraint(name="pn_id", columns={"pn_id"})}, indexes={@ORM\Index(name="pn_id_2", columns={"pn_id"})})
 * @ORM\Entity
 */
class GcPantalla
{
    /**
     * @var int
     *
     * @ORM\Column(name="pn_id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $pnId;

    /**
     * @var string
     *
     * @ORM\Column(name="pn_nombre", type="string", length=50, nullable=false, options={"default"="'*'"})
     */
    private $pnNombre = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="pn_descripcion", type="string", length=50, nullable=false, options={"default"="'*'"})
     */
    private $pnDescripcion = '\'*\'';

    /**
     * @var int
     *
     * @ORM\Column(name="pn_orden", type="bigint", nullable=false)
     */
    private $pnOrden = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="pn_imagen", type="integer", nullable=false)
     */
    private $pnImagen = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="pn_imagen_activado", type="integer", nullable=false)
     */
    private $pnImagenActivado = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="em_id", type="bigint", nullable=false)
     */
    private $emId = '0';

    public function getPnId(): ?string
    {
        return $this->pnId;
    }

    public function getPnNombre(): ?string
    {
        return $this->pnNombre;
    }

    public function setPnNombre(string $pnNombre): self
    {
        $this->pnNombre = $pnNombre;

        return $this;
    }

    public function getPnDescripcion(): ?string
    {
        return $this->pnDescripcion;
    }

    public function setPnDescripcion(string $pnDescripcion): self
    {
        $this->pnDescripcion = $pnDescripcion;

        return $this;
    }

    public function getPnOrden(): ?string
    {
        return $this->pnOrden;
    }

    public function setPnOrden(string $pnOrden): self
    {
        $this->pnOrden = $pnOrden;

        return $this;
    }

    public function getPnImagen(): ?int
    {
        return $this->pnImagen;
    }

    public function setPnImagen(int $pnImagen): self
    {
        $this->pnImagen = $pnImagen;

        return $this;
    }

    public function getPnImagenActivado(): ?int
    {
        return $this->pnImagenActivado;
    }

    public function setPnImagenActivado(int $pnImagenActivado): self
    {
        $this->pnImagenActivado = $pnImagenActivado;

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
