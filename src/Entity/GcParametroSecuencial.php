<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcParametroSecuencial
 *
 * @ORM\Table(name="gc_parametro_secuencial")
 * @ORM\Entity
 */
class GcParametroSecuencial
{
    /**
     * @var int
     *
     * @ORM\Column(name="em_id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $emId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ps_cliente_codigo", type="string", length=2, nullable=false, options={"default"="'TE'","fixed"=true})
     */
    private $psClienteCodigo = '\'TE\'';

    /**
     * @var bool
     *
     * @ORM\Column(name="ps_cliente_longitud", type="boolean", nullable=false, options={"default"="6"})
     */
    private $psClienteLongitud = '6';

    /**
     * @var int
     *
     * @ORM\Column(name="ps_cliente_valor", type="bigint", nullable=false)
     */
    private $psClienteValor = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ps_proveedor_codigo", type="string", length=2, nullable=false, options={"default"="'TE'","fixed"=true})
     */
    private $psProveedorCodigo = '\'TE\'';

    /**
     * @var bool
     *
     * @ORM\Column(name="ps_proveedor_longitud", type="boolean", nullable=false, options={"default"="6"})
     */
    private $psProveedorLongitud = '6';

    /**
     * @var int
     *
     * @ORM\Column(name="ps_proveedor_valor", type="bigint", nullable=false)
     */
    private $psProveedorValor = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ps_empleado_codigo", type="string", length=2, nullable=false, options={"default"="'TE'","fixed"=true})
     */
    private $psEmpleadoCodigo = '\'TE\'';

    /**
     * @var bool
     *
     * @ORM\Column(name="ps_empleado_longitud", type="boolean", nullable=false, options={"default"="6"})
     */
    private $psEmpleadoLongitud = '6';

    /**
     * @var int
     *
     * @ORM\Column(name="ps_empleado_valor", type="bigint", nullable=false)
     */
    private $psEmpleadoValor = '0';

    public function getEmId(): ?string
    {
        return $this->emId;
    }

    public function getPsClienteCodigo(): ?string
    {
        return $this->psClienteCodigo;
    }

    public function setPsClienteCodigo(string $psClienteCodigo): self
    {
        $this->psClienteCodigo = $psClienteCodigo;

        return $this;
    }

    public function getPsClienteLongitud(): ?bool
    {
        return $this->psClienteLongitud;
    }

    public function setPsClienteLongitud(bool $psClienteLongitud): self
    {
        $this->psClienteLongitud = $psClienteLongitud;

        return $this;
    }

    public function getPsClienteValor(): ?string
    {
        return $this->psClienteValor;
    }

    public function setPsClienteValor(string $psClienteValor): self
    {
        $this->psClienteValor = $psClienteValor;

        return $this;
    }

    public function getPsProveedorCodigo(): ?string
    {
        return $this->psProveedorCodigo;
    }

    public function setPsProveedorCodigo(string $psProveedorCodigo): self
    {
        $this->psProveedorCodigo = $psProveedorCodigo;

        return $this;
    }

    public function getPsProveedorLongitud(): ?bool
    {
        return $this->psProveedorLongitud;
    }

    public function setPsProveedorLongitud(bool $psProveedorLongitud): self
    {
        $this->psProveedorLongitud = $psProveedorLongitud;

        return $this;
    }

    public function getPsProveedorValor(): ?string
    {
        return $this->psProveedorValor;
    }

    public function setPsProveedorValor(string $psProveedorValor): self
    {
        $this->psProveedorValor = $psProveedorValor;

        return $this;
    }

    public function getPsEmpleadoCodigo(): ?string
    {
        return $this->psEmpleadoCodigo;
    }

    public function setPsEmpleadoCodigo(string $psEmpleadoCodigo): self
    {
        $this->psEmpleadoCodigo = $psEmpleadoCodigo;

        return $this;
    }

    public function getPsEmpleadoLongitud(): ?bool
    {
        return $this->psEmpleadoLongitud;
    }

    public function setPsEmpleadoLongitud(bool $psEmpleadoLongitud): self
    {
        $this->psEmpleadoLongitud = $psEmpleadoLongitud;

        return $this;
    }

    public function getPsEmpleadoValor(): ?string
    {
        return $this->psEmpleadoValor;
    }

    public function setPsEmpleadoValor(string $psEmpleadoValor): self
    {
        $this->psEmpleadoValor = $psEmpleadoValor;

        return $this;
    }


}
