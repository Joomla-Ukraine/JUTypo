<?php

namespace JUTypo;

use RecursiveDirectoryIterator;
use RecursiveIteratorIterator;
use ReflectionClass;
use JUTypo\Rule\AbstractRule;

class RuleFinder
{
	/**
	 * @var string[]
	 */
	public static array $rules = [];

	/**
	 * @return string[]
	 *
	 * @throws \ReflectionException
	 */
	public static function getAllRule(): array
	{
		if(empty(static::$rules))
		{
			$baseClass = new ReflectionClass(AbstractRule::class);

			$files = new RecursiveIteratorIterator(new RecursiveDirectoryIterator(__DIR__ . DIRECTORY_SEPARATOR . 'Rule', RecursiveDirectoryIterator::SKIP_DOTS));

			foreach($files as $file)
			{
				$className = static::getClassNameByFilePath($file->getPathname());
				if(class_exists($className))
				{
					$reflectionClass = new ReflectionClass($className);
					if($reflectionClass->isSubclassOf($baseClass))
					{
						static::$rules[] = $className;
					}
				}
			}
		}

		return static::$rules;
	}

	protected static function getClassNameByFilePath(string $path): string
	{
		return str_replace([ __DIR__, '.php', '/' ], [
			'JUTypo',
			'',
			'\\'
		], $path);
	}
}
