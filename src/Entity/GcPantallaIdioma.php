<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcPantallaIdioma
 *
 * @ORM\Table(name="gc_pantalla_idioma")
 * @ORM\Entity
 */
class GcPantallaIdioma
{
    /**
     * @var int
     *
     * @ORM\Column(name="pa_idm_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $paIdmId;

    /**
     * @var string
     *
     * @ORM\Column(name="pa_idm_nombre_idioma", type="string", length=25, nullable=false)
     */
    private $paIdmNombreIdioma;

    public function getPaIdmId(): ?int
    {
        return $this->paIdmId;
    }

    public function getPaIdmNombreIdioma(): ?string
    {
        return $this->paIdmNombreIdioma;
    }

    public function setPaIdmNombreIdioma(string $paIdmNombreIdioma): self
    {
        $this->paIdmNombreIdioma = $paIdmNombreIdioma;

        return $this;
    }


}
