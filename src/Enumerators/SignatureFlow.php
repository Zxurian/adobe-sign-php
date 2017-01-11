<?php

namespace Zxurian\AdobeSign\Enumerators;

/**
 *  Selects the workflow you would like to use - whether the sender needs to sign only, before the recipient, after the recipient, or not at all. Note: leave unspecified for hybrid routing
 *  
 * @author Zxurian <zxurian@gmail.com>
 *
 */
class SignatureFlow extends AbstractEnumerator
{
    const SENDER_SIGNATURE_NOT_REQUIRED = 'SENDER_SIGNATURE_NOT_REQUIRED';
    const SENDER_SIGNS_LAST = 'SENDER_SIGNS_LAST';
    const SENDER_SIGNS_FIRST = 'SENDER_SIGNS_FIRST';
    const SEQUENTIAL = 'SEQUENTIAL';
    const PARALLEL = 'PARALLEL';
    const SENDER_SIGNS_ONLY = 'SENDER_SIGNS_ONLY';
}