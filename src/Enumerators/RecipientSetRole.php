<?php

namespace Zxurian\AdobeSign\Enumerators;

/**
 * Specify the role of recipient set. The possible values are 
 * SIGNER (enum): Recipients marked as signers need to sign the document. They may be required to enter data into fields. 
 * APPROVER (enum): Recipients marked as approvers review and approve the document but they are not required to sign it. They may be required to enter data into fields.
 * ACCEPTOR (enum): Recipients marked as acceptors are required to accept the document. They may be required to enter data into fields.
 * FORM_FILLER (enum): Recipients marked as form fillers are required to enter data into the form fields and submit the document.
 * CERTIFIED_RECIPIENT (enum): Recipients marked as certified recipient are required to view and acknowledge the receipt of the document.
 * Delegators: Recipients marked as delegators may review the document but can’t sign, approve, accept or acknowledge it. They need to forward the document to another user who may take the appropriate action.
 * 
 * @author Zxurian <zxurian@gmail.com>
 *
 */
class RecipientSetRole extends AbstractEnumerator
{
    const SIGNER = 'SIGNER';
    const APPROVER = 'APPROVER';
    const ACCEPTOR = 'ACCEPTOR';
    const FORM_FILLER = 'FORM_FILLER';
    const CERTIFIED_RECIPIENT = 'CERTIFIED_RECIPIENT';
    const DELEGATE_TO_SIGNER = 'DELEGATE_TO_SIGNER';
    const DELEGATE_TO_APPROVER = 'DELEGATE_TO_APPROVER';
    const DELEGATE_TO_FORM_FILLER = 'DELEGATE_TO_FORM_FILLER';
    const DELEGATE_TO_CERTIFIED_RECIPIENT = 'DELEGATE_TO_CERTIFIED_RECIPIENT';
}