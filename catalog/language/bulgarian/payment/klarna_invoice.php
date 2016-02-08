<?php
/*
 * OpenCart Bulgarian translation
 * Author: Veselin Totev (veselin.totev@gmail.com)
 * License: Free to use
 * Donate:
 *      PayPal: veskoto@gmail.com
 *      Bitcoin: 1QG2f8mGtbYiHc6k8ZzV4WhfcmVHs79QiK
 */
// Text
$_['text_title']				= 'Klarna фактура - заплатете в 14 дневен срок';
$_['text_terms_fee']			= '<span id="klarna_invoice_toc"></span> (+%s)<script type="text/javascript">var terms = new Klarna.Terms.Invoice({el: \'klarna_invoice_toc\', eid: \'%s\', country: \'%s\', charge: %s});</script>';
$_['text_terms_no_fee']			= '<span id="klarna_invoice_toc"></span><script type="text/javascript">var terms = new Klarna.Terms.Invoice({el: \'klarna_invoice_toc\', eid: \'%s\', country: \'%s\'});</script>';
$_['text_additional']			= 'Klarna изисква допълнителна инфорамция преди да обработи поръчката.';
$_['text_male']					= 'Мъжки';
$_['text_female']				= 'Женски';
$_['text_year']					= 'Година';
$_['text_month']				= 'Месец';
$_['text_day']					= 'Ден';
$_['text_comment']				= 'Klarna\'s фактура номер: %s. ' . "\n" . '%s/%s: %.4f';

// Entry
$_['entry_gender']				= 'Пол';
$_['entry_pno']					= 'Личен номер';
$_['entry_dob']					= 'Дата на раждане';
$_['entry_phone_no']			= 'Телефонен номер';
$_['entry_street']				= 'Улица';
$_['entry_house_no']			= 'Къща номер.';
$_['entry_house_ext']			= 'Къща индекс.';
$_['entry_company']				= 'Регистрационнен номер';

// Help
$_['help_pno']					= 'Моля, въведете вашия номер за социално осигуряване тук.';
$_['help_phone_no']				= 'Моля, въведете вашия телефонен номер.';
$_['help_street']				= 'Моля, обърнете внимание, че доставката може да се извърши само до адреса при плащане с Klarna.';
$_['help_house_no']				= 'Моля, въведете вашия номера на къщата.';
$_['help_house_ext']			= 'Моля, въведете вашия индекс на къщата. E.g. A, B, C, Red, Blue ect.';
$_['help_company']				= 'Моля, въведете вашия регистрационен номер.';

// Error
$_['error_deu_terms']			= 'Трябва да приемете декларация за поверителност - Klarna (Datenschutz)';
$_['error_address_match']		= 'Адрес за плащане и адрес за доставка трябва да съвпадат, ако искате да използвате Klarna Invoice';
$_['error_network']				= 'Възника грешка при свързване с Klarna. Моля, опитайте отново по-късно.';