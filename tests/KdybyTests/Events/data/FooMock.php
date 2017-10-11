<?php

namespace KdybyTests\Events;

/**
 * @method onBar($lorem)
 * @method onMagic(FooMock $foo, $int)
 * @method onStartup(FooMock $foo, $int)
 */
class FooMock
{
	use \Nette\SmartObject;

	/**
	 * @var array|callable[]|\Kdyby\Events\Event
	 */
	public $onBar = [];

	/**
	 * @var array|callable[]|\Kdyby\Events\Event
	 */
	public $onMagic = [];

	/**
	 * @var array|callable[]|\Kdyby\Events\Event
	 */
	public $onStartup = [];

}
