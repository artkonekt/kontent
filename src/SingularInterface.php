<?php
/**
 * Contains the SingularInterface.php class.
 *
 * @copyright   Copyright (c) 2016 Attila Fulop
 * @author      Attila Fulop
 * @license     Proprietary
 * @since       2016-07-10
 *
 */


namespace Konekt\Kontent;


interface SingularInterface
{
    /**
     * Returns the title of the element
     *
     * @return string
     */
    public function getTitle();

    /**
     * Sets the title of the element
     *
     * @param string $title
     *
     * @return Singular
     */
    public function setTitle($title);

    /**
     * Get the slug of the element
     *
     * @return string
     */
    public function getSlug();

    /**
     * Sets the element's slug
     *
     * @param string $slug
     *
     * @return Singular
     */
    public function setSlug($slug);

    /**
     * Returns the elements subtitle
     *
     * @return string
     */
    public function getSubtitle();

    /**
     * Sets the element's subtitle
     *
     * @param string $subtitle
     *
     * @return Singular
     */
    public function setSubtitle($subtitle);

    /**
     * Returns the element's excerpt
     *
     * @return string
     */
    public function getExcerpt();

    /**
     * Sets the excerpt of the element
     *
     * @param string $excerpt
     *
     * @return Singular
     */
    public function setExcerpt($excerpt);

    /**
     * Returns the template of the element
     *
     * @return string
     */
    public function getTemplate();

    /**
     * Sets the element's template
     *
     * @param string $template
     *
     * @return Singular
     */
    public function setTemplate($template);
    

}