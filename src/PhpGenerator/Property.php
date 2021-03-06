<?php

/**
 * This file is part of the Nette Framework (https://nette.org)
 * Copyright (c) 2004 David Grudl (https://davidgrudl.com)
 */

declare(strict_types=1);

namespace Nette\PhpGenerator;

use Nette;


/**
 * Class property description.
 *
 * @property mixed $value
 */
class Property extends Member
{
	/** @var mixed */
	private $value;

	/** @var bool */
	private $static = FALSE;


	/**
	 * @deprecated
	 * @return static
	 */
	public static function from(\ReflectionProperty $from)
	{
		trigger_error(__METHOD__ . '() is deprecated, use Nette\PhpGenerator\Factory.', E_USER_DEPRECATED);
		return (new Factory)->fromPropertyReflection($from);
	}


	/**
	 * @return static
	 */
	public function setValue($val)
	{
		$this->value = $val;
		return $this;
	}


	/**
	 * @return mixed
	 */
	public function &getValue()
	{
		return $this->value;
	}


	/**
	 * @param  bool
	 * @return static
	 */
	public function setStatic($state = TRUE)
	{
		$this->static = (bool) $state;
		return $this;
	}


	/**
	 * @return bool
	 */
	public function isStatic()
	{
		return $this->static;
	}

}
