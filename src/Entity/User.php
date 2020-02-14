<?php

namespace App\Entity;
use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 * @ApiResource
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    protected $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\GcEmpresa", inversedBy="users")
     * @ORM\JoinColumn(name="empresa", referencedColumnName="em_id")
     */
    private $empresa;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\GcPerfil", inversedBy="users")
     * @ORM\JoinColumn(name="perfil", referencedColumnName="pr_id")
     */
    private $perfil;

    /**
     * @ORM\Column(type="string", length=1)
     */
    private $usCaducarIntento;

    /**
     * @ORM\Column(type="string", length=1)
     */
    private $usConsultaOtrosDatosPv;

    /**
     * @ORM\Column(type="string", length=1)
     */
    private $usCierreCajaPv;

    /**
     * @ORM\Column(type="boolean")
     */
    private $usDocumentosElectronicosManejo;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $usTransacciona;


    public function __construct()
    {
        parent::__construct();
        // your own logic
    }

    public function getEmpresa(): ?GcEmpresa
    {
        return $this->empresa;
    }

    public function setEmpresa(?GcEmpresa $empresa): self
    {
        $this->empresa = $empresa;

        return $this;
    }

    public function getPerfil(): ?GcPerfil
    {
        return $this->perfil;
    }

    public function setPerfil(?GcPerfil $perfil): self
    {
        $this->perfil = $perfil;

        return $this;
    }

    public function getUsCaducarIntento(): ?string
    {
        return $this->usCaducarIntento;
    }

    public function setUsCaducarIntento(string $usCaducarIntento): self
    {
        $this->usCaducarIntento = $usCaducarIntento;

        return $this;
    }

    public function getUsConsultaOtrosDatosPv(): ?string
    {
        return $this->usConsultaOtrosDatosPv;
    }

    public function setUsConsultaOtrosDatosPv(string $usConsultaOtrosDatosPv): self
    {
        $this->usConsultaOtrosDatosPv = $usConsultaOtrosDatosPv;

        return $this;
    }

    public function getUsCierreCajaPv(): ?string
    {
        return $this->usCierreCajaPv;
    }

    public function setUsCierreCajaPv(string $usCierreCajaPv): self
    {
        $this->usCierreCajaPv = $usCierreCajaPv;

        return $this;
    }

    public function getUsDocumentosElectronicosManejo(): ?bool
    {
        return $this->usDocumentosElectronicosManejo;
    }

    public function setUsDocumentosElectronicosManejo(bool $usDocumentosElectronicosManejo): self
    {
        $this->usDocumentosElectronicosManejo = $usDocumentosElectronicosManejo;

        return $this;
    }

    public function getUsTransacciona(): ?string
    {
        return $this->usTransacciona;
    }

    public function setUsTransacciona(?string $usTransacciona): self
    {
        $this->usTransacciona = $usTransacciona;

        return $this;
    }

}
