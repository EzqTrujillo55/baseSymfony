<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GuiaremisionDetalle
 *
 * @ORM\Table(name="_guiaremision_detalle")
 * @ORM\Entity
 */
class GuiaremisionDetalle
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_guiaremision_detalle", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idGuiaremisionDetalle;

    /**
     * @var int|null
     *
     * @ORM\Column(name="em_id", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $emId = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="destinatarios_destinatario_detalles_detalle_cantidad_", type="decimal", precision=18, scale=6, nullable=true, options={"default"="NULL"})
     */
    private $destinatariosDestinatarioDetallesDetalleCantidad = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="destinatarios_destinatario_detalles_detalle_codigoAdicional_", type="string", length=300, nullable=true, options={"default"="NULL"})
     */
    private $destinatariosDestinatarioDetallesDetalleCodigoadicional = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="destinatarios_destinatario_detalles_detalle_codigoInterno_", type="string", length=300, nullable=true, options={"default"="NULL"})
     */
    private $destinatariosDestinatarioDetallesDetalleCodigointerno = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="destinatarios_destinatario_detalles_detalle_descripcion_", type="string", length=300, nullable=true, options={"default"="NULL"})
     */
    private $destinatariosDestinatarioDetallesDetalleDescripcion = 'NULL';

    public function getIdGuiaremisionDetalle(): ?int
    {
        return $this->idGuiaremisionDetalle;
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

    public function getDestinatariosDestinatarioDetallesDetalleCantidad(): ?string
    {
        return $this->destinatariosDestinatarioDetallesDetalleCantidad;
    }

    public function setDestinatariosDestinatarioDetallesDetalleCantidad(?string $destinatariosDestinatarioDetallesDetalleCantidad): self
    {
        $this->destinatariosDestinatarioDetallesDetalleCantidad = $destinatariosDestinatarioDetallesDetalleCantidad;

        return $this;
    }

    public function getDestinatariosDestinatarioDetallesDetalleCodigoadicional(): ?string
    {
        return $this->destinatariosDestinatarioDetallesDetalleCodigoadicional;
    }

    public function setDestinatariosDestinatarioDetallesDetalleCodigoadicional(?string $destinatariosDestinatarioDetallesDetalleCodigoadicional): self
    {
        $this->destinatariosDestinatarioDetallesDetalleCodigoadicional = $destinatariosDestinatarioDetallesDetalleCodigoadicional;

        return $this;
    }

    public function getDestinatariosDestinatarioDetallesDetalleCodigointerno(): ?string
    {
        return $this->destinatariosDestinatarioDetallesDetalleCodigointerno;
    }

    public function setDestinatariosDestinatarioDetallesDetalleCodigointerno(?string $destinatariosDestinatarioDetallesDetalleCodigointerno): self
    {
        $this->destinatariosDestinatarioDetallesDetalleCodigointerno = $destinatariosDestinatarioDetallesDetalleCodigointerno;

        return $this;
    }

    public function getDestinatariosDestinatarioDetallesDetalleDescripcion(): ?string
    {
        return $this->destinatariosDestinatarioDetallesDetalleDescripcion;
    }

    public function setDestinatariosDestinatarioDetallesDetalleDescripcion(?string $destinatariosDestinatarioDetallesDetalleDescripcion): self
    {
        $this->destinatariosDestinatarioDetallesDetalleDescripcion = $destinatariosDestinatarioDetallesDetalleDescripcion;

        return $this;
    }


}
