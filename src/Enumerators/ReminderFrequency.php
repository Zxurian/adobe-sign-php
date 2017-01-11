<?php

namespace Zxurian\AdobeSign\Enumerators;

/**
 * Optional parameter that sets how often you want to send reminders to the recipients.
 *  
 * @author Zxurian <zxurian@gmail.com>
 *
 */
class ReminderFrequency extends AbstractEnumerator
{
    const DAILY_UNTIL_SIGNED = 'DAILY_UNTIL_SIGNED';
    const WEEKLY_UNTIL_SIGNED = 'WEEKLY_UNTIL_SIGNED';
}