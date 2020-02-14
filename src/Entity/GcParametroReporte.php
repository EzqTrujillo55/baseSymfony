<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcParametroReporte
 *
 * @ORM\Table(name="gc_parametro_reporte")
 * @ORM\Entity
 */
class GcParametroReporte
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
     * @ORM\Column(name="pr_comprobante_diario", type="string", length=255, nullable=false, options={"default"="'*'"})
     */
    private $prComprobanteDiario = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="pr_comprobante_ingreso", type="string", length=255, nullable=false, options={"default"="'*'"})
     */
    private $prComprobanteIngreso = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="pr_comprobante_egreso", type="string", length=255, nullable=false, options={"default"="'*'"})
     */
    private $prComprobanteEgreso = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="pr_comprobante_retencion", type="string", length=255, nullable=false, options={"default"="'*'"})
     */
    private $prComprobanteRetencion = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="pr_inventario_ingreso", type="string", length=255, nullable=false, options={"default"="'*'"})
     */
    private $prInventarioIngreso = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="pr_inventario_egreso", type="string", length=255, nullable=false, options={"default"="'*'"})
     */
    private $prInventarioEgreso = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="pr_cartera_recibo_caja", type="string", length=255, nullable=false, options={"default"="'*'"})
     */
    private $prCarteraReciboCaja = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="pr_inventario_traslado", type="string", length=255, nullable=false, options={"default"="'*'"})
     */
    private $prInventarioTraslado = '\'*\'';

    public function getEmId(): ?string
    {
        return $this->emId;
    }

    public function getPrComprobanteDiario(): ?string
    {
        return $this->prComprobanteDiario;
    }

    public function setPrComprobanteDiario(string $prComprobanteDiario): self
    {
        $this->prComprobanteDiario = $prComprobanteDiario;

        return $this;
    }

    public function getPrComprobanteIngreso(): ?string
    {
        return $this->prComprobanteIngreso;
    }

    public function setPrComprobanteIngreso(string $prComprobanteIngreso): self
    {
        $this->prComprobanteIngreso = $prComprobanteIngreso;

        return $this;
    }

    public function getPrComprobanteEgreso(): ?string
    {
        return $this->prComprobanteEgreso;
    }

    public function setPrComprobanteEgreso(string $prComprobanteEgreso): self
    {
        $this->prComprobanteEgreso = $prComprobanteEgreso;

        return $this;
    }

    public function getPrComprobanteRetencion(): ?string
    {
        return $this->prComprobanteRetencion;
    }

    public function setPrComprobanteRetencion(string $prComprobanteRetencion): self
    {
        $this->prComprobanteRetencion = $prComprobanteRetencion;

        return $this;
    }

    public function getPrInventarioIngreso(): ?string
    {
        return $this->prInventarioIngreso;
    }

    public function setPrInventarioIngreso(string $prInventarioIngreso): self
    {
        $this->prInventarioIngreso = $prInventarioIngreso;

        return $this;
    }

    public function getPrInventarioEgreso(): ?string
    {
        return $this->prInventarioEgreso;
    }

    public function setPrInventarioEgreso(string $prInventarioEgreso): self
    {
        $this->prInventarioEgreso = $prInventarioEgreso;

        return $this;
    }

    public function getPrCarteraReciboCaja(): ?string
    {
        return $this->prCarteraReciboCaja;
    }

    public function setPrCarteraReciboCaja(string $prCarteraReciboCaja): self
    {
        $this->prCarteraReciboCaja = $prCarteraReciboCaja;

        return $this;
    }

    public function getPrInventarioTraslado(): ?string
    {
        return $this->prInventarioTraslado;
    }

    public function setPrInventarioTraslado(string $prInventarioTraslado): self
    {
        $this->prInventarioTraslado = $prInventarioTraslado;

        return $this;
    }


}
