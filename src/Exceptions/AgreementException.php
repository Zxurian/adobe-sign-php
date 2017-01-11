<?php

namespace Zxurian\AdobeSign\Exceptions;

class AgreementException extends AdobeSignException
{
    const AUTH_ONLY_APPLICABLE_TO_EMAIL = 'Auth method can only be applied to email ids.';
    const AUTH_METHOD_PROVIDED_MORE_THAN_ONCE = 'Auth method has been provided more than once.';
    const BAD_REQUEST = 'The request provided is invalid.';
    const EMPTY_REDIRECT_URL = 'If PostSignOptions are specified, the redirectUrl must not be empty.';
    const EXTERNAL_AUTH_METHOD_PROVIDED_MORE_THAN_ONCE = 'External auth method has been provided more than once.';
    const INVALID_ARGUMENTS = 'One or more arguments to the method are invalid.';
    const INVALID_EMAIL = 'Email provided is invalid.';
    const INVALID_FILE_INFO = 'Invalid or no file info is provided.';
    const INVALID_JSON = 'An invalid JSON was specified.';
    const INVALID_REDIRECT_DELAY = 'The redirectDelay specified in PostSignOptions must be nonnegative integer.';
    const INVALID_REDIRECT_URL = 'The redirectUrl specified in PostSignOptions is not a valid URL.';
    const INVALID_SIGNING_ORDER = 'Signing order of recipient sets defines an invalid range.';
    const EXTRA_SIGNATURE_FLOW = 'Signature Flow cannot be specified in hybrid routing.';
    const INTERNAL_AUTH_METHOD_PROVIDED_MORE_THAN_ONCE = 'Internal auth method has been provided more than once.';
    const MISC_ERROR = 'Some miscellaneous error has occurred.';
    const MISSING_REQUIRED_PARAM = 'Required parameters are missing.';
    const AUTOLOGIN_DENIED = 'User settings do not permit autologin as requested.';
    const INVALID_ACCESS_TOKEN = 'Access token provided is invalid or has expired.';
    const INVALID_USER = 'Invalid user ID or email provided in x-user header.';
    const NO_ACCESS_TOKEN_HEADER = 'Access token header not provided.';
    const NOT_AUTHORIZED_FOR_TRANSIENT_RESOURCE = 'Not authorized for the transient resource referred in the request.';
    const UNAUTHORIZED = 'You cannot work on behalf of this user.';
    const UNVERIFIED_USER = 'The user has registered but has not verified their email address. The user must use the Adobe Sign web site to complete verification.';
    const API_TERMS_NOT_ACCEPTED = 'Your account is locked because an administrator has not agreed to Adobe Sign’s Terms of Use. Please contact your account administrator to activate your account.';
    const PERMISSION_DENIED = 'The API caller do not have the permission to execute this operation.';
    const SIGNER_AUTH_NOT_ALLOWED = 'User settings do not permit signer auth specification.';
    const INTERNAL_SIGNER_AUTH_NOT_ALLOWED = 'User settings do not permit internal signer auth.';
    const PER_SIGNER_AUTH_NOT_ALLOWED = 'User settings do not permit per signer auth.';
    const AUTH_METHOD_PROVIDED_IS_NOT_ALLOWED = 'Auth method provided is not allowed.';
    const INTERNAL_AUTH_METHOD_PROVIDED_IS_NOT_ALLOWED = 'Internal auth method provided is not allowed.';
    const EXTERNAL_AUTH_METHOD_PROVIDED_IS_NOT_ALLOWED = 'External auth method provided is not allowed.';
    const SIGNED_DOCUMENT_PASSWORD_PROTECTION_NOT_ALLOWED = 'Password protection for signed document is not allowed.';
    const HYBRID_ROUTING_NOT_ALLOWED = 'Hybrid routing is not enabled for this user.';
    const INVALID_LIBRARYDOCUMENT_ID = 'The Library Document ID specified is invalid.';
    const INVALID_LIBRARYDOCUMENT_NAME = 'The Library Document name specified is invalid.';
    const INVALID_TRANSIENTDOCUMENT_ID = 'The Transient Document ID specified is invalid.';
    const TRANSIENT_RESOURCE_DELETED = 'Transient Resource deleted from the server.';
    const PRIVATE_MESSAGES_NOT_ENABLED = 'Sending private messages to recipients is not enabled for this user.';
    const URL_INVALID = 'Provided document URL is invalid.';
    const SEND_LIMIT_EXCEEDED = 'Agreement creation quota of the user is exhausted.';
}