<?php

/* default/index.html.twig */
class __TwigTemplate_008921f33a0ffdb6702530368e2207d2fc081fb354e2c23ac7b1384a7486afb1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_27450f47135b8f06784ddfe0b293ed634889fc5ebc0c0a64b5c3e55688c27abf = $this->env->getExtension("native_profiler");
        $__internal_27450f47135b8f06784ddfe0b293ed634889fc5ebc0c0a64b5c3e55688c27abf->enter($__internal_27450f47135b8f06784ddfe0b293ed634889fc5ebc0c0a64b5c3e55688c27abf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_27450f47135b8f06784ddfe0b293ed634889fc5ebc0c0a64b5c3e55688c27abf->leave($__internal_27450f47135b8f06784ddfe0b293ed634889fc5ebc0c0a64b5c3e55688c27abf_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_93538f25160f7f6b6dc113851dd97c30415e0cb3e132fc6e88c027dec6f86094 = $this->env->getExtension("native_profiler");
        $__internal_93538f25160f7f6b6dc113851dd97c30415e0cb3e132fc6e88c027dec6f86094->enter($__internal_93538f25160f7f6b6dc113851dd97c30415e0cb3e132fc6e88c027dec6f86094_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    Homepage.
";
        
        $__internal_93538f25160f7f6b6dc113851dd97c30415e0cb3e132fc6e88c027dec6f86094->leave($__internal_93538f25160f7f6b6dc113851dd97c30415e0cb3e132fc6e88c027dec6f86094_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
