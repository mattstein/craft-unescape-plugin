<?php
namespace Craft;

class UnescapeTwigExtension extends \Twig_Extension
{
	protected $env;
	
	public function getName()
	{
		return 'Unescape Twig Extension';
	}
	
	public function getFilters()
	{
		return array('unescape' => new \Twig_Filter_Method($this, 'unescape'));
	}
	
	public function getFunctions()
	{
		return array('unescape' => new \Twig_Function_Method($this, 'unescape'));
	}
	
	public function initRuntime(\Twig_Environment $env)
	{
		$this->env = $env;
	}
	
	public function unescape($value)
	{
		return html_entity_decode($value);
	}
}