<?php

namespace Blog\NewsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints\DateTime;
use Doctrine\ORM\EntityRepository;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * @ORM\Entity(repositoryClass="Blog\NewsBundle\Repository\CommentRepository")
 * @ORM\Table(name="comment")
 */
class Comment
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="text")
     */
    protected $comment_message;

    /**
     * @Gedmo\Timestampable(on="create")
     * @ORM\Column(name="created", type="datetime")
     */
    private  $created;

    /**
     * @Gedmo\Timestampable(on="update")
     * @ORM\Column(name="updated", type="datetime")
     */
    private $updated;

    /**
     * @Gedmo\Slug(fields={"comment_message", "id"}, updatable=false)
     * @ORM\Column(name="slug", type="string", unique=true, length=255)
     */
    private $slug;

    /**
     * @ORM\ManyToOne(targetEntity="Advertisement", inversedBy="comments")
     * @ORM\JoinColumn(name="advertisement_id", referencedColumnName="id")
     */
    private $category;

    /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="comments")
     * @ORM\JoinColumn(name="author_id", referencedColumnName="id")
     */
    private $comment;

    public function __construct()
    {
        $this->createdDate = new DateTime();
    }

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
     * Set comment
     *
     * @param string $comment
     * @return Comment
     */
    public function setComment($comment)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Get comment
     *
     * @return string 
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Set createdDate
     *
     * @param \DateTime $createdDate
     * @return Comment
     */
    public function setCreatedDate($createdDate)
    {
        $this->createdDate = $createdDate;

        return $this;
    }

    /**
     * Get createdDate
     *
     * @return \DateTime 
     */
    public function getCreatedDate()
    {
        return $this->createdDate;
    }

    /**
     * Set category
     *
     * @param \Blog\NewsBundle\Entity\Advertisement $category
     * @return Comment
     */
    public function setCategory(\Blog\NewsBundle\Entity\Advertisement $category = null)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return \Blog\NewsBundle\Entity\Advertisement 
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set comment_message
     *
     * @param string $commentMessage
     * @return Comment
     */
    public function setCommentMessage($commentMessage)
    {
        $this->comment_message = $commentMessage;

        return $this;
    }

    /**
     * Get comment_message
     *
     * @return string 
     */
    public function getCommentMessage()
    {
        return $this->comment_message;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     * @return Comment
     */
    public function setCreated($created)
    {
        $this->created = $created;

        return $this;
    }

    /**
     * Get created
     *
     * @return \DateTime 
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set updated
     *
     * @param \DateTime $updated
     * @return Comment
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;

        return $this;
    }

    /**
     * Get updated
     *
     * @return \DateTime 
     */
    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * Set slug
     *
     * @param string $slug
     * @return Comment
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * Get slug
     *
     * @return string 
     */
    public function getSlug()
    {
        return $this->slug;
    }
}
