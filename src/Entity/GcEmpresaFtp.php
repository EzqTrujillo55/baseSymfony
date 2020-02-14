<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcEmpresaFtp
 *
 * @ORM\Table(name="_gc_empresa_ftp")
 * @ORM\Entity
 */
class GcEmpresaFtp
{
    /**
     * @var int
     *
     * @ORM\Column(name="em_id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $emId;

    /**
     * @var string
     *
     * @ORM\Column(name="em_ftp_host", type="string", length=40, nullable=false, options={"default"="''"})
     */
    private $emFtpHost = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="em_ftp_usr", type="string", length=20, nullable=false, options={"default"="''"})
     */
    private $emFtpUsr = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="em_ftp_pwd", type="string", length=20, nullable=false, options={"default"="''"})
     */
    private $emFtpPwd = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="em_ftp_dir", type="string", length=250, nullable=false, options={"default"="''"})
     */
    private $emFtpDir = '\'\'';

    public function getEmId(): ?string
    {
        return $this->emId;
    }

    public function getEmFtpHost(): ?string
    {
        return $this->emFtpHost;
    }

    public function setEmFtpHost(string $emFtpHost): self
    {
        $this->emFtpHost = $emFtpHost;

        return $this;
    }

    public function getEmFtpUsr(): ?string
    {
        return $this->emFtpUsr;
    }

    public function setEmFtpUsr(string $emFtpUsr): self
    {
        $this->emFtpUsr = $emFtpUsr;

        return $this;
    }

    public function getEmFtpPwd(): ?string
    {
        return $this->emFtpPwd;
    }

    public function setEmFtpPwd(string $emFtpPwd): self
    {
        $this->emFtpPwd = $emFtpPwd;

        return $this;
    }

    public function getEmFtpDir(): ?string
    {
        return $this->emFtpDir;
    }

    public function setEmFtpDir(string $emFtpDir): self
    {
        $this->emFtpDir = $emFtpDir;

        return $this;
    }


}
