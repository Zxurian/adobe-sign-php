<?php

namespace Zxurian\AdobeSign\Enumerators;

/**
 * Specifies the type of signature you would like to request - written or e-signature.
 * 
 * @author Zxurian <zxurian@gmail.com>
 *
 */
class SignatureType extends AbstractEnumerator
{
    const ESIGN = 'ESIGN';
    const WRITTEN = 'WRITTEN';
}