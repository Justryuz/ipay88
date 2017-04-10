<?php
namespace Dfe\IPay88;
// 2017-04-10
final class Method extends \Df\PaypalClone\Method {
	/**
	 * 2017-04-10
	 * «Payment amount with two decimals and thousand symbols. Example: 1,278.99»
	 * @override
	 * @see \Df\Payment\Method::amountFormat()
	 * @used-by \Df\Payment\Operation::amountFormat()
	 * @param float|int $a
	 * @return string
	 */
	function amountFormat($a) {return number_format($a, 2, '.', ',');}

	/**
	 * 2017-04-10
	 * @override
	 * @see \Df\Payment\Method::amountFactor()
	 * @used-by \Df\Payment\Method::amountFormat()
	 * @used-by \Df\Payment\Method::amountParse()
	 * @return int
	 */
	protected function amountFactor() {return 1;}

	/**
	 * 2017-04-10
	 * @override
	 * @see \Df\Payment\Method::amountLimits()
	 * @used-by \Df\Payment\Method::isAvailable()
	 * @return null
	 */
	protected function amountLimits() {return null;}

	/**
	 * 2017-04-10
	 * @used-by https://github.com/mage2pro/ipay88/blob/0.0.2/etc/di.xml#L9
	 * @used-by \Df\Payment\Method::codeS()
	 * @see \Df\Payment\Settings::prefix()
	 */
	const CODE = 'dfe_ipay88';
}