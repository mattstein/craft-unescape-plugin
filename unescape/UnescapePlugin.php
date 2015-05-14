<?php
namespace Craft;

class UnescapePlugin extends BasePlugin
{
    public function getName()
    {
        return Craft::t('Unescape Twig Extension');
    }
    
    public function getVersion()
    {
        return '1.0';
    }
    
    public function getDeveloper()
    {
        return 'Matt Stein';
    }
    
    public function getDeveloperUrl()
    {
        return 'http://workingconcept.com';
    }
    
    public function addTwigExtension()
    {
        Craft::import('plugins.unescape.twigextensions.UnescapeTwigExtension');
        
        return new UnescapeTwigExtension();
    }
}