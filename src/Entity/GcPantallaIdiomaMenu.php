<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcPantallaIdiomaMenu
 *
 * @ORM\Table(name="gc_pantalla_idioma_menu")
 * @ORM\Entity
 */
class GcPantallaIdiomaMenu
{
    /**
     * @var int
     *
     * @ORM\Column(name="pa_idm_menu_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $paIdmMenuId;

    /**
     * @var string
     *
     * @ORM\Column(name="id_objeto", type="string", length=45, nullable=false, options={"comment"="Id del objeto al que se enviará la información "})
     */
    private $idObjeto;

    /**
     * @var string
     *
     * @ORM\Column(name="pa_idm_menu_rotulo", type="string", length=100, nullable=false, options={"comment"="Información en el elemento "})
     */
    private $paIdmMenuRotulo;

    /**
     * @var string
     *
     * @ORM\Column(name="pa_idm_menu_ayuda", type="string", length=800, nullable=false, options={"comment"="Información de ayuda, en caso de que el usuario no tenga clara la definición de un campo. "})
     */
    private $paIdmMenuAyuda;

    /**
     * @var int
     *
     * @ORM\Column(name="pm_id", type="integer", nullable=false, options={"comment"="Id de pantalla menú "})
     */
    private $pmId;

    /**
     * @var int
     *
     * @ORM\Column(name="pa_idm_id", type="integer", nullable=false, options={"comment"="Id del idioma"})
     */
    private $paIdmId;

    public function getPaIdmMenuId(): ?int
    {
        return $this->paIdmMenuId;
    }

    public function getIdObjeto(): ?string
    {
        return $this->idObjeto;
    }

    public function setIdObjeto(string $idObjeto): self
    {
        $this->idObjeto = $idObjeto;

        return $this;
    }

    public function getPaIdmMenuRotulo(): ?string
    {
        return $this->paIdmMenuRotulo;
    }

    public function setPaIdmMenuRotulo(string $paIdmMenuRotulo): self
    {
        $this->paIdmMenuRotulo = $paIdmMenuRotulo;

        return $this;
    }

    public function getPaIdmMenuAyuda(): ?string
    {
        return $this->paIdmMenuAyuda;
    }

    public function setPaIdmMenuAyuda(string $paIdmMenuAyuda): self
    {
        $this->paIdmMenuAyuda = $paIdmMenuAyuda;

        return $this;
    }

    public function getPmId(): ?int
    {
        return $this->pmId;
    }

    public function setPmId(int $pmId): self
    {
        $this->pmId = $pmId;

        return $this;
    }

    public function getPaIdmId(): ?int
    {
        return $this->paIdmId;
    }

    public function setPaIdmId(int $paIdmId): self
    {
        $this->paIdmId = $paIdmId;

        return $this;
    }


}
