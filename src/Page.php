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

    /**
     * {@inheritdoc}
     */
    public function render()
    {
        return $this->getContent();
    }

}