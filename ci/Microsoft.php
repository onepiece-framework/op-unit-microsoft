<?php
/** op-unit-microsoft:/ci/Microsoft.php
 *
 * @created     2024-03-20
 * @version     1.0
 * @package     op-unit-microsoft
 * @author      Tomoaki Nagahara <tomoaki.nagahara@gmail.com>
 * @copyright   Tomoaki Nagahara All right reserved.
 */

/** Declare strict
 *
 */
declare(strict_types=1);

/** namespace
 *
 */
namespace OP\UNIT\Microsoft;

/* @var $ci \OP\UNIT\CI\CI_Config */
$ci = OP()->Unit('CI')->Config();

//	Template
$arg1   = 'foo';
$arg2   = 'bar';
$args   = ['ci.phtml',['arg1'=>$arg1, 'arg2'=>$arg2]];
$result = $arg1 . $arg2;
$ci->Set('Template', $result, $args);

//	Translate
$args   = null;
$result = 'OP\UNIT\Microsoft_Translate';
$ci->Set('Translate', $result, $args);

//	...
return $ci->Get();
