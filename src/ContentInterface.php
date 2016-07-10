<?php
/**
 * Contains the ContentInterface.php class.
 *
 * @copyright   Copyright (c) 2016 Attila Fulop
 * @author      Attila Fulop
 * @license     Proprietary
 * @since       2016-05-21
 *
 */


namespace Konekt\Kontent;


interface ContentInterface
{
    /**
     * Returns the name of the content element
     *
     * @return string
     */
    public function getName();

    /**
     * Returns the (raw) content
     *
     * @return string
     */
    public function getContent();

    /**
     * Returns the rendered content
     *
     * @return string
     */
    public function render();

    /**
     * Returns the rank (order/priority) of the content
     *
     * @return int
     */
    public function getRank();

    /**
     * Returns the date the element should be published at (after)
     *
     * @return \DateTime
     */
    public function getPublishAt();

    /**
     * Returns the date the element should be hidden/unpublished at (after)
     *
     * @return \DateTime
     */
    public function getHideAt();

}