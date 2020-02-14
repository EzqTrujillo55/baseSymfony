<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcUsuarioAuditoria
 *
 * @ORM\Table(name="gc_usuario_auditoria")
 * @ORM\Entity
 */
class GcUsuarioAuditoria
{
    /**
     * @var int
     *
     * @ORM\Column(name="ua_id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $uaId;

    /**
     * @var int
     *
     * @ORM\Column(name="em_id", type="bigint", nullable=false)
     */
    private $emId = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ua_fecha", type="datetime", nullable=false, options={"default"="'2000-01-01 00:00:01'"})
     */
    private $uaFecha = '\'2000-01-01 00:00:01\'';

    /**
     * @var int
     *
     * @ORM\Column(name="us_id", type="bigint", nullable=false)
     */
    private $usId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="pm_nombre", type="string", length=50, nullable=false, options={"default"="'*'"})
     */
    private $pmNombre = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="ac_nombre", type="string", length=50, nullable=false, options={"default"="'*'"})
     */
    private $acNombre = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="ua_tabla", type="string", length=50, nullable=false, options={"default"="'*'"})
     */
    private $uaTabla = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="ua_codigo_referencia_str", type="string", length=100, nullable=false, options={"default"="'*'"})
     */
    private $uaCodigoReferenciaStr = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="ua_codigo_referencia_str2", type="string", length=100, nullable=false, options={"default"="'*'"})
     */
    private $uaCodigoReferenciaStr2 = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="ua_codigo_referencia_str3", type="string", length=250, nullable=false, options={"default"="''"})
     */
    private $uaCodigoReferenciaStr3 = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="ua_cliente_pc", type="string", length=250, nullable=false, options={"default"="''"})
     */
    private $uaClientePc = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="ua_usuario_windows", type="string", length=250, nullable=false, options={"default"="''"})
     */
    private $uaUsuarioWindows = '\'\'';

    public function getUaId(): ?string
    {
        return $this->uaId;
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

    public function getUaFecha(): ?\DateTimeInterface
    {
        return $this->uaFecha;
    }

    public function setUaFecha(\DateTimeInterface $uaFecha): self
    {
        $this->uaFecha = $uaFecha;

        return $this;
    }

    public function getUsId(): ?string
    {
        return $this->usId;
    }

    public function setUsId(string $usId): self
    {
        $this->usId = $usId;

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

    public function getAcNombre(): ?string
    {
        return $this->acNombre;
    }

    public function setAcNombre(string $acNombre): self
    {
        $this->acNombre = $acNombre;

        return $this;
    }

    public function getUaTabla(): ?string
    {
        return $this->uaTabla;
    }

    public function setUaTabla(string $uaTabla): self
    {
        $this->uaTabla = $uaTabla;

        return $this;
    }

    public function getUaCodigoReferenciaStr(): ?string
    {
        return $this->uaCodigoReferenciaStr;
    }

    public function setUaCodigoReferenciaStr(string $uaCodigoReferenciaStr): self
    {
        $this->uaCodigoReferenciaStr = $uaCodigoReferenciaStr;

        return $this;
    }

    public function getUaCodigoReferenciaStr2(): ?string
    {
        return $this->uaCodigoReferenciaStr2;
    }

    public function setUaCodigoReferenciaStr2(string $uaCodigoReferenciaStr2): self
    {
        $this->uaCodigoReferenciaStr2 = $uaCodigoReferenciaStr2;

        return $this;
    }

    public function getUaCodigoReferenciaStr3(): ?string
    {
        return $this->uaCodigoReferenciaStr3;
    }

    public function setUaCodigoReferenciaStr3(string $uaCodigoReferenciaStr3): self
    {
        $this->uaCodigoReferenciaStr3 = $uaCodigoReferenciaStr3;

        return $this;
    }

    public function getUaClientePc(): ?string
    {
        return $this->uaClientePc;
    }

    public function setUaClientePc(string $uaClientePc): self
    {
        $this->uaClientePc = $uaClientePc;

        return $this;
    }

    public function getUaUsuarioWindows(): ?string
    {
        return $this->uaUsuarioWindows;
    }

    public function setUaUsuarioWindows(string $uaUsuarioWindows): self
    {
        $this->uaUsuarioWindows = $uaUsuarioWindows;

        return $this;
    }


}
