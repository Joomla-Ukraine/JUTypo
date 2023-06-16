<?php

namespace JUTypo\Rule;

abstract class AbstractRule
{
	/**
	 * @var string
	 */
	public string $name = 'Name rule';

	/**
	 * @var array
	 */
	protected array $char = [
		'allQuote'     => '«‹»›„“‟”"\'',
		'allDash'      => '-|‒|–|—',
		'charEnd'      => '.,!?:;',
		'char'         => 'а-яёa-z',
		'charCase'     => 'а-яёa-zA-ЯЁA-Z',
		'nbsp'         => '&nbsp;',
		'dash'         => '&mdash;',
		'month'        => 'січень|лютий|березень|квітень|травень|май|червень|липень|серпень|вересень|жовтень|листопад|грудень',
		'monthShort'   => 'січ|лют|бер|кві|трав|черв|лип|серп|верес|жовт|лист|груд',
		'monthGenCase' => 'січеня|лютня|березня|квітня|травня|червня|липня|серпня|вересня|жовтра|листопада|грудня',
		'monthPreCase' => 'січені|лютні|березні|квітні|травні|червні|липні|серпні|вересні|жовтні|листопаді|грудні',
	];

	/**
	 * @var bool
	 */
	protected bool $active = true;

	/**
	 * @var int
	 */
	protected int $sort = 500;

	/**
	 * @var array
	 */
	protected array $settings = [];

	public function setSort(int $sort): void
	{
		$this->sort = $sort;
	}

	public function getSort(): int
	{
		return $this->sort;
	}

	public function setActive(bool $active): void
	{
		$this->active = $active;
	}

	public function getActive(): bool
	{
		return $this->active;
	}

	/**
	 * @param array $settings
	 */
	public function setSettings(array $settings): void
	{
		$this->settings = array_merge($this->settings, $settings);
	}

	/**
	 * @param mixed $value
	 */
	public function setSetting(string $key, $value): void
	{
		$this->settings[ $key ] = $value;
	}

	/**
	 * @return array
	 */
	public function getSettings(): array
	{
		return $this->settings;
	}

	abstract public function handler(string $text): string;
}
