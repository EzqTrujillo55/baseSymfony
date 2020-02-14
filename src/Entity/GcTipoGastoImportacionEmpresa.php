<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcTipoGastoImportacionEmpresa
 *
 * @ORM\Table(name="gc_tipo_gasto_importacion_empresa")
 * @ORM\Entity
 */
class GcTipoGastoImportacionEmpresa
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
     * @ORM\Column(name="tgi_id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $tgiId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="tgie_nombre", type="string", length=250, nullable=false, options={"default"="'*'"})
     */
    private $tgieNombre = '\'*\'';

    public function getEmId(): ?string
    {
        return $this->emId;
    }

    public function getTgiId(): ?string
    {
        return $this->tgiId;
    }

    public function getTgieNombre(): ?string
    {
        return $this->tgieNombre;
    }

    public function setTgieNombre(string $tgieNombre): self
    {
        $this->tgieNombre = $tgieNombre;

        return $this;
    }


}
