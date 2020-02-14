<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Guiaremision
 *
 * @ORM\Table(name="_guiaremision")
 * @ORM\Entity
 */
class Guiaremision
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_guia_remision", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idGuiaRemision;

    /**
     * @var int|null
     *
     * @ORM\Column(name="em_id", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $emId = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="destinatarios_destinatario_codDocSustento_", type="string", length=300, nullable=true, options={"default"="NULL"})
     */
    private $destinatariosDestinatarioCoddocsustento = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="destinatarios_destinatario_codEstabDestino_", type="string", length=300, nullable=true, options={"default"="NULL"})
     */
    private $destinatariosDestinatarioCodestabdestino = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="destinatarios_destinatario_dirDestinatario_", type="string", length=300, nullable=true, options={"default"="NULL"})
     */
    private $destinatariosDestinatarioDirdestinatario = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="destinatarios_destinatario_docAduaneroUnico_", type="string", length=300, nullable=true, options={"default"="NULL"})
     */
    private $destinatariosDestinatarioDocaduanerounico = 'NULL';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="destinatarios_destinatario_fechaEmisionDocSustento_", type="date", nullable=true, options={"default"="NULL"})
     */
    private $destinatariosDestinatarioFechaemisiondocsustento = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="destinatarios_destinatario_identificacionDestinatario_", type="string", length=300, nullable=true, options={"default"="NULL"})
     */
    private $destinatariosDestinatarioIdentificaciondestinatario = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="destinatarios_destinatario_motivoTraslado_", type="string", length=300, nullable=true, options={"default"="NULL"})
     */
    private $destinatariosDestinatarioMotivotraslado = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="destinatarios_destinatario_numAutDocSustento_", type="string", length=300, nullable=true, options={"default"="NULL"})
     */
    private $destinatariosDestinatarioNumautdocsustento = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="destinatarios_destinatario_numDocSustento_", type="string", length=300, nullable=true, options={"default"="NULL"})
     */
    private $destinatariosDestinatarioNumdocsustento = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="destinatarios_destinatario_razonSocialDestinatario_", type="string", length=300, nullable=true, options={"default"="NULL"})
     */
    private $destinatariosDestinatarioRazonsocialdestinatario = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="destinatarios_destinatario_ruta_", type="string", length=300, nullable=true, options={"default"="NULL"})
     */
    private $destinatariosDestinatarioRuta = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="infoAdicional_campoAdicional_direccion_", type="string", length=300, nullable=true, options={"default"="NULL"})
     */
    private $infoadicionalCampoadicionalDireccion = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="infoAdicional_campoAdicional_email_", type="string", length=300, nullable=true, options={"default"="NULL"})
     */
    private $infoadicionalCampoadicionalEmail = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="infoAdicional_campoAdicional_telefono_", type="string", length=300, nullable=true, options={"default"="NULL"})
     */
    private $infoadicionalCampoadicionalTelefono = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="infoGuiaRemision_contribuyenteEspecial_", type="string", length=300, nullable=true, options={"default"="NULL"})
     */
    private $infoguiaremisionContribuyenteespecial = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="infoGuiaRemision_dirEstablecimiento_", type="string", length=300, nullable=true, options={"default"="NULL"})
     */
    private $infoguiaremisionDirestablecimiento = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="infoGuiaRemision_dirPartida_", type="string", length=300, nullable=true, options={"default"="NULL"})
     */
    private $infoguiaremisionDirpartida = 'NULL';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="infoGuiaRemision_fechaFinTransporte_", type="date", nullable=true, options={"default"="NULL"})
     */
    private $infoguiaremisionFechafintransporte = 'NULL';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="infoGuiaRemision_fechaIniTransporte_", type="date", nullable=true, options={"default"="NULL"})
     */
    private $infoguiaremisionFechainitransporte = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="infoGuiaRemision_obligadoContabilidad_", type="string", length=300, nullable=true, options={"default"="NULL"})
     */
    private $infoguiaremisionObligadocontabilidad = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="infoGuiaRemision_placa_", type="string", length=300, nullable=true, options={"default"="NULL"})
     */
    private $infoguiaremisionPlaca = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="infoGuiaRemision_razonSocialTransportista_", type="string", length=300, nullable=true, options={"default"="NULL"})
     */
    private $infoguiaremisionRazonsocialtransportista = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="infoGuiaRemision_rucTransportista_", type="string", length=300, nullable=true, options={"default"="NULL"})
     */
    private $infoguiaremisionRuctransportista = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="infoGuiaRemision_tipoIdentificacionTransportista_", type="string", length=300, nullable=true, options={"default"="NULL"})
     */
    private $infoguiaremisionTipoidentificaciontransportista = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="infoTributaria_ambiente_", type="decimal", precision=12, scale=2, nullable=true, options={"default"="NULL"})
     */
    private $infotributariaAmbiente = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="infoTributaria_claveAcceso_", type="string", length=300, nullable=true, options={"default"="NULL"})
     */
    private $infotributariaClaveacceso = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="infoTributaria_codDoc_", type="string", length=300, nullable=true, options={"default"="NULL"})
     */
    private $infotributariaCoddoc = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="infoTributaria_dirMatriz_", type="string", length=300, nullable=true, options={"default"="NULL"})
     */
    private $infotributariaDirmatriz = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="infoTributaria_estab_", type="string", length=300, nullable=true, options={"default"="NULL"})
     */
    private $infotributariaEstab = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="infoTributaria_nombreComercial_", type="string", length=300, nullable=true, options={"default"="NULL"})
     */
    private $infotributariaNombrecomercial = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="infoTributaria_ptoEmi_", type="string", length=300, nullable=true, options={"default"="NULL"})
     */
    private $infotributariaPtoemi = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="infoTributaria_razonSocial_", type="string", length=300, nullable=true, options={"default"="NULL"})
     */
    private $infotributariaRazonsocial = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="infoTributaria_ruc_", type="string", length=300, nullable=true, options={"default"="NULL"})
     */
    private $infotributariaRuc = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="infoTributaria_secuencial_", type="string", length=300, nullable=true, options={"default"="NULL"})
     */
    private $infotributariaSecuencial = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="infoTributaria_tipoEmision_", type="string", length=300, nullable=true, options={"default"="NULL"})
     */
    private $infotributariaTipoemision = 'NULL';

    public function getIdGuiaRemision(): ?int
    {
        return $this->idGuiaRemision;
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

    public function getDestinatariosDestinatarioCoddocsustento(): ?string
    {
        return $this->destinatariosDestinatarioCoddocsustento;
    }

    public function setDestinatariosDestinatarioCoddocsustento(?string $destinatariosDestinatarioCoddocsustento): self
    {
        $this->destinatariosDestinatarioCoddocsustento = $destinatariosDestinatarioCoddocsustento;

        return $this;
    }

    public function getDestinatariosDestinatarioCodestabdestino(): ?string
    {
        return $this->destinatariosDestinatarioCodestabdestino;
    }

    public function setDestinatariosDestinatarioCodestabdestino(?string $destinatariosDestinatarioCodestabdestino): self
    {
        $this->destinatariosDestinatarioCodestabdestino = $destinatariosDestinatarioCodestabdestino;

        return $this;
    }

    public function getDestinatariosDestinatarioDirdestinatario(): ?string
    {
        return $this->destinatariosDestinatarioDirdestinatario;
    }

    public function setDestinatariosDestinatarioDirdestinatario(?string $destinatariosDestinatarioDirdestinatario): self
    {
        $this->destinatariosDestinatarioDirdestinatario = $destinatariosDestinatarioDirdestinatario;

        return $this;
    }

    public function getDestinatariosDestinatarioDocaduanerounico(): ?string
    {
        return $this->destinatariosDestinatarioDocaduanerounico;
    }

    public function setDestinatariosDestinatarioDocaduanerounico(?string $destinatariosDestinatarioDocaduanerounico): self
    {
        $this->destinatariosDestinatarioDocaduanerounico = $destinatariosDestinatarioDocaduanerounico;

        return $this;
    }

    public function getDestinatariosDestinatarioFechaemisiondocsustento(): ?\DateTimeInterface
    {
        return $this->destinatariosDestinatarioFechaemisiondocsustento;
    }

    public function setDestinatariosDestinatarioFechaemisiondocsustento(?\DateTimeInterface $destinatariosDestinatarioFechaemisiondocsustento): self
    {
        $this->destinatariosDestinatarioFechaemisiondocsustento = $destinatariosDestinatarioFechaemisiondocsustento;

        return $this;
    }

    public function getDestinatariosDestinatarioIdentificaciondestinatario(): ?string
    {
        return $this->destinatariosDestinatarioIdentificaciondestinatario;
    }

    public function setDestinatariosDestinatarioIdentificaciondestinatario(?string $destinatariosDestinatarioIdentificaciondestinatario): self
    {
        $this->destinatariosDestinatarioIdentificaciondestinatario = $destinatariosDestinatarioIdentificaciondestinatario;

        return $this;
    }

    public function getDestinatariosDestinatarioMotivotraslado(): ?string
    {
        return $this->destinatariosDestinatarioMotivotraslado;
    }

    public function setDestinatariosDestinatarioMotivotraslado(?string $destinatariosDestinatarioMotivotraslado): self
    {
        $this->destinatariosDestinatarioMotivotraslado = $destinatariosDestinatarioMotivotraslado;

        return $this;
    }

    public function getDestinatariosDestinatarioNumautdocsustento(): ?string
    {
        return $this->destinatariosDestinatarioNumautdocsustento;
    }

    public function setDestinatariosDestinatarioNumautdocsustento(?string $destinatariosDestinatarioNumautdocsustento): self
    {
        $this->destinatariosDestinatarioNumautdocsustento = $destinatariosDestinatarioNumautdocsustento;

        return $this;
    }

    public function getDestinatariosDestinatarioNumdocsustento(): ?string
    {
        return $this->destinatariosDestinatarioNumdocsustento;
    }

    public function setDestinatariosDestinatarioNumdocsustento(?string $destinatariosDestinatarioNumdocsustento): self
    {
        $this->destinatariosDestinatarioNumdocsustento = $destinatariosDestinatarioNumdocsustento;

        return $this;
    }

    public function getDestinatariosDestinatarioRazonsocialdestinatario(): ?string
    {
        return $this->destinatariosDestinatarioRazonsocialdestinatario;
    }

    public function setDestinatariosDestinatarioRazonsocialdestinatario(?string $destinatariosDestinatarioRazonsocialdestinatario): self
    {
        $this->destinatariosDestinatarioRazonsocialdestinatario = $destinatariosDestinatarioRazonsocialdestinatario;

        return $this;
    }

    public function getDestinatariosDestinatarioRuta(): ?string
    {
        return $this->destinatariosDestinatarioRuta;
    }

    public function setDestinatariosDestinatarioRuta(?string $destinatariosDestinatarioRuta): self
    {
        $this->destinatariosDestinatarioRuta = $destinatariosDestinatarioRuta;

        return $this;
    }

    public function getInfoadicionalCampoadicionalDireccion(): ?string
    {
        return $this->infoadicionalCampoadicionalDireccion;
    }

    public function setInfoadicionalCampoadicionalDireccion(?string $infoadicionalCampoadicionalDireccion): self
    {
        $this->infoadicionalCampoadicionalDireccion = $infoadicionalCampoadicionalDireccion;

        return $this;
    }

    public function getInfoadicionalCampoadicionalEmail(): ?string
    {
        return $this->infoadicionalCampoadicionalEmail;
    }

    public function setInfoadicionalCampoadicionalEmail(?string $infoadicionalCampoadicionalEmail): self
    {
        $this->infoadicionalCampoadicionalEmail = $infoadicionalCampoadicionalEmail;

        return $this;
    }

    public function getInfoadicionalCampoadicionalTelefono(): ?string
    {
        return $this->infoadicionalCampoadicionalTelefono;
    }

    public function setInfoadicionalCampoadicionalTelefono(?string $infoadicionalCampoadicionalTelefono): self
    {
        $this->infoadicionalCampoadicionalTelefono = $infoadicionalCampoadicionalTelefono;

        return $this;
    }

    public function getInfoguiaremisionContribuyenteespecial(): ?string
    {
        return $this->infoguiaremisionContribuyenteespecial;
    }

    public function setInfoguiaremisionContribuyenteespecial(?string $infoguiaremisionContribuyenteespecial): self
    {
        $this->infoguiaremisionContribuyenteespecial = $infoguiaremisionContribuyenteespecial;

        return $this;
    }

    public function getInfoguiaremisionDirestablecimiento(): ?string
    {
        return $this->infoguiaremisionDirestablecimiento;
    }

    public function setInfoguiaremisionDirestablecimiento(?string $infoguiaremisionDirestablecimiento): self
    {
        $this->infoguiaremisionDirestablecimiento = $infoguiaremisionDirestablecimiento;

        return $this;
    }

    public function getInfoguiaremisionDirpartida(): ?string
    {
        return $this->infoguiaremisionDirpartida;
    }

    public function setInfoguiaremisionDirpartida(?string $infoguiaremisionDirpartida): self
    {
        $this->infoguiaremisionDirpartida = $infoguiaremisionDirpartida;

        return $this;
    }

    public function getInfoguiaremisionFechafintransporte(): ?\DateTimeInterface
    {
        return $this->infoguiaremisionFechafintransporte;
    }

    public function setInfoguiaremisionFechafintransporte(?\DateTimeInterface $infoguiaremisionFechafintransporte): self
    {
        $this->infoguiaremisionFechafintransporte = $infoguiaremisionFechafintransporte;

        return $this;
    }

    public function getInfoguiaremisionFechainitransporte(): ?\DateTimeInterface
    {
        return $this->infoguiaremisionFechainitransporte;
    }

    public function setInfoguiaremisionFechainitransporte(?\DateTimeInterface $infoguiaremisionFechainitransporte): self
    {
        $this->infoguiaremisionFechainitransporte = $infoguiaremisionFechainitransporte;

        return $this;
    }

    public function getInfoguiaremisionObligadocontabilidad(): ?string
    {
        return $this->infoguiaremisionObligadocontabilidad;
    }

    public function setInfoguiaremisionObligadocontabilidad(?string $infoguiaremisionObligadocontabilidad): self
    {
        $this->infoguiaremisionObligadocontabilidad = $infoguiaremisionObligadocontabilidad;

        return $this;
    }

    public function getInfoguiaremisionPlaca(): ?string
    {
        return $this->infoguiaremisionPlaca;
    }

    public function setInfoguiaremisionPlaca(?string $infoguiaremisionPlaca): self
    {
        $this->infoguiaremisionPlaca = $infoguiaremisionPlaca;

        return $this;
    }

    public function getInfoguiaremisionRazonsocialtransportista(): ?string
    {
        return $this->infoguiaremisionRazonsocialtransportista;
    }

    public function setInfoguiaremisionRazonsocialtransportista(?string $infoguiaremisionRazonsocialtransportista): self
    {
        $this->infoguiaremisionRazonsocialtransportista = $infoguiaremisionRazonsocialtransportista;

        return $this;
    }

    public function getInfoguiaremisionRuctransportista(): ?string
    {
        return $this->infoguiaremisionRuctransportista;
    }

    public function setInfoguiaremisionRuctransportista(?string $infoguiaremisionRuctransportista): self
    {
        $this->infoguiaremisionRuctransportista = $infoguiaremisionRuctransportista;

        return $this;
    }

    public function getInfoguiaremisionTipoidentificaciontransportista(): ?string
    {
        return $this->infoguiaremisionTipoidentificaciontransportista;
    }

    public function setInfoguiaremisionTipoidentificaciontransportista(?string $infoguiaremisionTipoidentificaciontransportista): self
    {
        $this->infoguiaremisionTipoidentificaciontransportista = $infoguiaremisionTipoidentificaciontransportista;

        return $this;
    }

    public function getInfotributariaAmbiente(): ?string
    {
        return $this->infotributariaAmbiente;
    }

    public function setInfotributariaAmbiente(?string $infotributariaAmbiente): self
    {
        $this->infotributariaAmbiente = $infotributariaAmbiente;

        return $this;
    }

    public function getInfotributariaClaveacceso(): ?string
    {
        return $this->infotributariaClaveacceso;
    }

    public function setInfotributariaClaveacceso(?string $infotributariaClaveacceso): self
    {
        $this->infotributariaClaveacceso = $infotributariaClaveacceso;

        return $this;
    }

    public function getInfotributariaCoddoc(): ?string
    {
        return $this->infotributariaCoddoc;
    }

    public function setInfotributariaCoddoc(?string $infotributariaCoddoc): self
    {
        $this->infotributariaCoddoc = $infotributariaCoddoc;

        return $this;
    }

    public function getInfotributariaDirmatriz(): ?string
    {
        return $this->infotributariaDirmatriz;
    }

    public function setInfotributariaDirmatriz(?string $infotributariaDirmatriz): self
    {
        $this->infotributariaDirmatriz = $infotributariaDirmatriz;

        return $this;
    }

    public function getInfotributariaEstab(): ?string
    {
        return $this->infotributariaEstab;
    }

    public function setInfotributariaEstab(?string $infotributariaEstab): self
    {
        $this->infotributariaEstab = $infotributariaEstab;

        return $this;
    }

    public function getInfotributariaNombrecomercial(): ?string
    {
        return $this->infotributariaNombrecomercial;
    }

    public function setInfotributariaNombrecomercial(?string $infotributariaNombrecomercial): self
    {
        $this->infotributariaNombrecomercial = $infotributariaNombrecomercial;

        return $this;
    }

    public function getInfotributariaPtoemi(): ?string
    {
        return $this->infotributariaPtoemi;
    }

    public function setInfotributariaPtoemi(?string $infotributariaPtoemi): self
    {
        $this->infotributariaPtoemi = $infotributariaPtoemi;

        return $this;
    }

    public function getInfotributariaRazonsocial(): ?string
    {
        return $this->infotributariaRazonsocial;
    }

    public function setInfotributariaRazonsocial(?string $infotributariaRazonsocial): self
    {
        $this->infotributariaRazonsocial = $infotributariaRazonsocial;

        return $this;
    }

    public function getInfotributariaRuc(): ?string
    {
        return $this->infotributariaRuc;
    }

    public function setInfotributariaRuc(?string $infotributariaRuc): self
    {
        $this->infotributariaRuc = $infotributariaRuc;

        return $this;
    }

    public function getInfotributariaSecuencial(): ?string
    {
        return $this->infotributariaSecuencial;
    }

    public function setInfotributariaSecuencial(?string $infotributariaSecuencial): self
    {
        $this->infotributariaSecuencial = $infotributariaSecuencial;

        return $this;
    }

    public function getInfotributariaTipoemision(): ?string
    {
        return $this->infotributariaTipoemision;
    }

    public function setInfotributariaTipoemision(?string $infotributariaTipoemision): self
    {
        $this->infotributariaTipoemision = $infotributariaTipoemision;

        return $this;
    }


}
