<?php

namespace KdybyTests\Events;

/**
 * @method onCreate(string | NULL $arg)
 */
class ParentClass
{
	use \Nette\SmartObject;	

	/**
	 * @var array|callable[]|\Kdyby\Events\Event
	 */
	public $onCreate = [];

	public function create($arg = NULL)
	{
		$this->onCreate($arg);
	}

}
