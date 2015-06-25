<?php

/* base.html.twig */
class __TwigTemplate_8aabd48be83ed63a582a78691d2c74c1faa892f68af8992a8ac85c65eb7dab17 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7c3db4b22bc4f5f114f575f2e03787ff9e1296402166e6f0a50d899a75922b52 = $this->env->getExtension("native_profiler");
        $__internal_7c3db4b22bc4f5f114f575f2e03787ff9e1296402166e6f0a50d899a75922b52->enter($__internal_7c3db4b22bc4f5f114f575f2e03787ff9e1296402166e6f0a50d899a75922b52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_7c3db4b22bc4f5f114f575f2e03787ff9e1296402166e6f0a50d899a75922b52->leave($__internal_7c3db4b22bc4f5f114f575f2e03787ff9e1296402166e6f0a50d899a75922b52_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c792ee5ff88540f9dea405e5deca95156699f9370fda1466525f3bea288a3e2f = $this->env->getExtension("native_profiler");
        $__internal_c792ee5ff88540f9dea405e5deca95156699f9370fda1466525f3bea288a3e2f->enter($__internal_c792ee5ff88540f9dea405e5deca95156699f9370fda1466525f3bea288a3e2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_c792ee5ff88540f9dea405e5deca95156699f9370fda1466525f3bea288a3e2f->leave($__internal_c792ee5ff88540f9dea405e5deca95156699f9370fda1466525f3bea288a3e2f_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7c106362e0d18c23c929338b89c354324d1049ecc79adfebf5d5da5fe9c59a15 = $this->env->getExtension("native_profiler");
        $__internal_7c106362e0d18c23c929338b89c354324d1049ecc79adfebf5d5da5fe9c59a15->enter($__internal_7c106362e0d18c23c929338b89c354324d1049ecc79adfebf5d5da5fe9c59a15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_7c106362e0d18c23c929338b89c354324d1049ecc79adfebf5d5da5fe9c59a15->leave($__internal_7c106362e0d18c23c929338b89c354324d1049ecc79adfebf5d5da5fe9c59a15_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_c126eb82231d161e1243953a2409e9d20f4d9b1d6a31205867a0ebf4434b930a = $this->env->getExtension("native_profiler");
        $__internal_c126eb82231d161e1243953a2409e9d20f4d9b1d6a31205867a0ebf4434b930a->enter($__internal_c126eb82231d161e1243953a2409e9d20f4d9b1d6a31205867a0ebf4434b930a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c126eb82231d161e1243953a2409e9d20f4d9b1d6a31205867a0ebf4434b930a->leave($__internal_c126eb82231d161e1243953a2409e9d20f4d9b1d6a31205867a0ebf4434b930a_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_eecb95d34fecc6d864da0cc564f4dd203e29641ee553c6f24b850a7eb9768b74 = $this->env->getExtension("native_profiler");
        $__internal_eecb95d34fecc6d864da0cc564f4dd203e29641ee553c6f24b850a7eb9768b74->enter($__internal_eecb95d34fecc6d864da0cc564f4dd203e29641ee553c6f24b850a7eb9768b74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_eecb95d34fecc6d864da0cc564f4dd203e29641ee553c6f24b850a7eb9768b74->leave($__internal_eecb95d34fecc6d864da0cc564f4dd203e29641ee553c6f24b850a7eb9768b74_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
