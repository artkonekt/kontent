<?php
/**
 * Contains the Page.php class.
 *
 * @copyright   Copyright (c) 2016 Attila Fulop
 * @author      Attila Fulop
 * @license     Proprietary
 * @since       2016-05-21
 *
 */


namespace Konekt\Kontent;


class Page implements ContentInterface, SingularInterface
{
    use SingularTrait;

    /** @var  \DateTime */
    protected $publishAt;

    /** @var  \DateTime */
    protected $hideAt;

    /**
     * {@inheritdoc}
     */
    public function render()
    {
        return $this->getContent();
    }

    /**
     * {@inheritdoc}
     */
    public function getPublishAt()
    {
        return $this->publishAt;
    }

    /**
     * Set the publish at date
     *
     * @param \DateTime $publishAt
     *
     * @return $this
     */
    public function setPublishAt(\DateTime $publishAt)
    {
        $this->publishAt = $publishAt;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getHideAt()
    {
        return $this->hideAt;
    }

    /**
     * Set the hide at date
     *
     * @param \DateTime $hideAt
     *
     * @return $this
     */
    public function setHideAt(\DateTime $hideAt)
    {
        $this->hideAt = $hideAt;

        return $this;
    }

}