<?php
/**
 * Contains the Translatable.php class.
 *
 * @copyright   Copyright (c) 2016 Attila Fulop
 * @author      Attila Fulop
 * @license     Proprietary
 * @since       2016-07-10
 *
 */


namespace Konekt\Kontent;


interface TranslatableInterface
{

    /**
     * Returns the language of the element
     *
     * @return string
     */
    public function getLanguage();

    /**
     * Sets the language of the element
     *
     * @param string $language
     */
    public function setLanguage($language);


    /**
     * Returns whether the element has (at least one) translation
     *
     * @return boolean
     */
    public function hasTranslation();

    /**
     * Returns an array/collection of translations
     *
     * @return array|\Traversable
     */
    public function translations();

    /**
     * @return Translatable
     */
    public function getTranslationOf();

    /**
     * @param Translatable $translationOf
     */
    public function setTranslationOf($translationOf);

}