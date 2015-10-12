<?php //-->
/*
 * This file is part of the Model package of the Eden PHP Library.
 * (c) 2013-2014 Openovate Labs
 *
 * Copyright and license information can be found at LICENSE
 * distributed with this package.
 */

namespace Eden\Model;

/**
 * The base class for all classes wishing to integrate with Eden.
 * Extending this class will allow your methods to seemlessly be
 * overloaded and overrided as well as provide some basic class
 * loading patterns.
 *
 * @vendor   Eden
 * @package  model
 * @author   Christian Blanquera <cblanquera@openovate.com>
 * @standard PSR-2
 */
class Index extends Base
{
    /**
     * We are disallowing the PHP default functions
     * from being called
     *
     * @param string
     *
     * @return false
     */
    protected function getMethod($name)
    {
        return $name;
    }
}
