<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcAtExportacionTipoIngreso
 *
 * @ORM\Table(name="gc_at_exportacion_tipo_ingreso")
 * @ORM\Entity
 */
class GcAtExportacionTipoIngreso
{
    /**
     * @var string
     *
     * @ORM\Column(name="at_et_codigo", type="string", length=5, nullable=false, options={"default"="''"})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $atEtCodigo = '\'\'';

    /**
     * @var int
     *
     * @ORM\Column(name="em_id", type="bigint", nullable=false)
     */
    private $emId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="at_et_nombre", type="string", length=255, nullable=false, options={"default"="''"})
     */
    private $atEtNombre = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="at_et_estado", type="string", length=1, nullable=false, options={"default"="'C'","fixed"=true})
     */
    private $atEtEstado = '\'C\'';

    public function getAtEtCodigo(): ?string
    {
        return $this->atEtCodigo;
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

    public function getAtEtNombre(): ?string
    {
        return $this->atEtNombre;
    }

    public function setAtEtNombre(string $atEtNombre): self
    {
        $this->atEtNombre = $atEtNombre;

        return $this;
    }

    public function getAtEtEstado(): ?string
    {
        return $this->atEtEstado;
    }

    public function setAtEtEstado(string $atEtEstado): self
    {
        $this->atEtEstado = $atEtEstado;

        return $this;
    }


}
