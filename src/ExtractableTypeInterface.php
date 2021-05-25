<?php

declare(strict_types = 1);

namespace SmartEmailing\Types;

interface ExtractableTypeInterface
{

	/**
	 * @param mixed $value
	 * @return mixed
	 */
	public static function from(
		$value
	);

	/**
	 * @param mixed $value
	 * @param bool $nullIfInvalid
	 * @return mixed
	 */
	public static function fromOrNull(
		$value,
		bool $nullIfInvalid
	);

	/**
	 * @param array<mixed> $data
	 * @param string $key
	 * @return mixed
	 */
	public static function extract(
		array $data,
		string $key
	);

	/**
	 * @param array<mixed> $data
	 * @param string $key
	 * @param bool $nullIfInvalid
	 * @return mixed
	 */
	public static function extractOrNull(
		array $data,
		string $key,
		bool $nullIfInvalid
	);

}
