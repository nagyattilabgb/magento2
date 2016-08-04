<?php
/**
 * Copyright © 2016 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\Framework\Exception\TemporaryState;

use Magento\Framework\Exception\TemporaryStateException;
use Magento\Framework\Phrase;

/**
 * CouldNotSaveException caused by recoverable error
 */
class CouldNotSaveException
    extends \Magento\Framework\Exception\CouldNotSaveException
    implements TemporaryStateException
{
    /**
     * Class constructor
     *
     * @param Phrase $phrase The Exception message to throw.
     * @param int $code [optional] The Exception code.
     * @param \Exception $previous [optional] The previous exception used for the exception chaining.
     */
    public function __construct(Phrase $phrase, $code = 0, \Exception $previous = null)
    {
        parent::__construct($phrase, $previous);
        $this->code = $code;
    }
}
