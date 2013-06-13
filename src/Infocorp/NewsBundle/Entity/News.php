<?php

namespace Infocorp\NewsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * News
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class News
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="titulo", type="string", length=255)
     * @Assert\NotBlank(message="Campo Título não pode estar vazio!")
     */
    private $titulo;

    /**
     * @var string
     *
     * @ORM\Column(name="imagem_feed", type="string", length=255)
     */
    private $imagemFeed;

    /**
     * @var string
     *
     * @ORM\Column(name="imagem_capa", type="string", length=255)
     */
    private $imagemCapa;

    /**
     * @var string
     *
     * @ORM\Column(name="release", type="string", length=255)
     * @Assert\NotBlank(message="Campo Release não pode ser vazio!")
     */
    private $release;

    /**
     * @var string
     *
     * @ORM\Column(name="conteudo", type="text")
     * @Assert\NotBlank(message="Campo Conteúdo não pode ser vazio!")
     */
    private $conteudo;

    /**
     * @var boolean
     *
     * @ORM\Column(name="destaque", type="boolean")
     */
    private $destaque;

    /**
     * @var boolean
     *
     * @ORM\Column(name="status", type="boolean")
     */
    private $status;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set titulo
     *
     * @param string $titulo
     * @return News
     */
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;
    
        return $this;
    }

    /**
     * Get titulo
     *
     * @return string 
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Set imagemFeed
     *
     * @param string $imagemFeed
     * @return News
     */
    public function setImagemFeed($imagemFeed)
    {
        $this->imagemFeed = $imagemFeed;
    
        return $this;
    }

    /**
     * Get imagemFeed
     *
     * @return string 
     */
    public function getImagemFeed()
    {
        return $this->imagemFeed;
    }

    /**
     * Set imagemCapa
     *
     * @param string $imagemCapa
     * @return News
     */
    public function setImagemCapa($imagemCapa)
    {
        $this->imagemCapa = $imagemCapa;
    
        return $this;
    }

    /**
     * Get imagemCapa
     *
     * @return string 
     */
    public function getImagemCapa()
    {
        return $this->imagemCapa;
    }

    /**
     * Set release
     *
     * @param string $release
     * @return News
     */
    public function setRelease($release)
    {
        $this->release = $release;
    
        return $this;
    }

    /**
     * Get release
     *
     * @return string 
     */
    public function getRelease()
    {
        return $this->release;
    }

    /**
     * Set conteudo
     *
     * @param string $conteudo
     * @return News
     */
    public function setConteudo($conteudo)
    {
        $this->conteudo = $conteudo;
    
        return $this;
    }

    /**
     * Get conteudo
     *
     * @return string 
     */
    public function getConteudo()
    {
        return $this->conteudo;
    }

    /**
     * Set destaque
     *
     * @param boolean $destaque
     * @return News
     */
    public function setDestaque($destaque)
    {
        $this->destaque = $destaque;
    
        return $this;
    }

    /**
     * Get destaque
     *
     * @return boolean 
     */
    public function getDestaque()
    {
        return $this->destaque;
    }

    /**
     * Set status
     *
     * @param boolean $status
     * @return News
     */
    public function setStatus($status)
    {
        $this->status = $status;
    
        return $this;
    }

    /**
     * Get status
     *
     * @return boolean 
     */
    public function getStatus()
    {
        return $this->status;
    }
}
