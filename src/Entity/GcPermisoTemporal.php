<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcPermisoTemporal
 *
 * @ORM\Table(name="gc_permiso_temporal")
 * @ORM\Entity
 */
class GcPermisoTemporal
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
     * @ORM\Column(name="pt_id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $ptId = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="pt_fecha_concede", type="datetime", nullable=false, options={"default"="'1800-01-01 00:00:01'"})
     */
    private $ptFechaConcede = '\'1800-01-01 00:00:01\'';

    /**
     * @var string
     *
     * @ORM\Column(name="pt_usuario_concede", type="string", length=10, nullable=false, options={"default"="''"})
     */
    private $ptUsuarioConcede = '\'\'';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="pt_fecha_utilizacion", type="datetime", nullable=false, options={"default"="'1800-01-01 00:00:01'"})
     */
    private $ptFechaUtilizacion = '\'1800-01-01 00:00:01\'';

    /**
     * @var string
     *
     * @ORM\Column(name="pt_usuario_beneficiario", type="string", length=10, nullable=false, options={"default"="''"})
     */
    private $ptUsuarioBeneficiario = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="pt_menu", type="string", length=50, nullable=false, options={"default"="''"})
     */
    private $ptMenu = '\'\'';

    /**
     * @var int
     *
     * @ORM\Column(name="pt_accion", type="bigint", nullable=false)
     */
    private $ptAccion = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="pt_estado", type="string", length=1, nullable=false, options={"default"="'0'","fixed"=true})
     */
    private $ptEstado = '\'0\'';

    /**
     * @var string
     *
     * @ORM\Column(name="pt_observacion", type="string", length=100, nullable=false, options={"default"="''"})
     */
    private $ptObservacion = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="pt_otros", type="string", length=100, nullable=false, options={"default"="''"})
     */
    private $ptOtros = '\'\'';

    public function getEmId(): ?string
    {
        return $this->emId;
    }

    public function getPtId(): ?string
    {
        return $this->ptId;
    }

    public function getPtFechaConcede(): ?\DateTimeInterface
    {
        return $this->ptFechaConcede;
    }

    public function setPtFechaConcede(\DateTimeInterface $ptFechaConcede): self
    {
        $this->ptFechaConcede = $ptFechaConcede;

        return $this;
    }

    public function getPtUsuarioConcede(): ?string
    {
        return $this->ptUsuarioConcede;
    }

    public function setPtUsuarioConcede(string $ptUsuarioConcede): self
    {
        $this->ptUsuarioConcede = $ptUsuarioConcede;

        return $this;
    }

    public function getPtFechaUtilizacion(): ?\DateTimeInterface
    {
        return $this->ptFechaUtilizacion;
    }

    public function setPtFechaUtilizacion(\DateTimeInterface $ptFechaUtilizacion): self
    {
        $this->ptFechaUtilizacion = $ptFechaUtilizacion;

        return $this;
    }

    public function getPtUsuarioBeneficiario(): ?string
    {
        return $this->ptUsuarioBeneficiario;
    }

    public function setPtUsuarioBeneficiario(string $ptUsuarioBeneficiario): self
    {
        $this->ptUsuarioBeneficiario = $ptUsuarioBeneficiario;

        return $this;
    }

    public function getPtMenu(): ?string
    {
        return $this->ptMenu;
    }

    public function setPtMenu(string $ptMenu): self
    {
        $this->ptMenu = $ptMenu;

        return $this;
    }

    public function getPtAccion(): ?string
    {
        return $this->ptAccion;
    }

    public function setPtAccion(string $ptAccion): self
    {
        $this->ptAccion = $ptAccion;

        return $this;
    }

    public function getPtEstado(): ?string
    {
        return $this->ptEstado;
    }

    public function setPtEstado(string $ptEstado): self
    {
        $this->ptEstado = $ptEstado;

        return $this;
    }

    public function getPtObservacion(): ?string
    {
        return $this->ptObservacion;
    }

    public function setPtObservacion(string $ptObservacion): self
    {
        $this->ptObservacion = $ptObservacion;

        return $this;
    }

    public function getPtOtros(): ?string
    {
        return $this->ptOtros;
    }

    public function setPtOtros(string $ptOtros): self
    {
        $this->ptOtros = $ptOtros;

        return $this;
    }


}
