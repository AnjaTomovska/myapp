<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_785acbb335b72b735029c4a60e5455a40fe1ac9257505a48209a1f5837828a0c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8af97e2467520879885f5c667b450605232ed706908056855d3041460e148a32 = $this->env->getExtension("native_profiler");
        $__internal_8af97e2467520879885f5c667b450605232ed706908056855d3041460e148a32->enter($__internal_8af97e2467520879885f5c667b450605232ed706908056855d3041460e148a32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8af97e2467520879885f5c667b450605232ed706908056855d3041460e148a32->leave($__internal_8af97e2467520879885f5c667b450605232ed706908056855d3041460e148a32_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c3be463029ef0af13d96d7e92b3895caadc0b4bc5c2dac72e1f8ba712062a57e = $this->env->getExtension("native_profiler");
        $__internal_c3be463029ef0af13d96d7e92b3895caadc0b4bc5c2dac72e1f8ba712062a57e->enter($__internal_c3be463029ef0af13d96d7e92b3895caadc0b4bc5c2dac72e1f8ba712062a57e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_c3be463029ef0af13d96d7e92b3895caadc0b4bc5c2dac72e1f8ba712062a57e->leave($__internal_c3be463029ef0af13d96d7e92b3895caadc0b4bc5c2dac72e1f8ba712062a57e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_658a153d58aad032d2620af932134c4f08c14d846ecce578bcc9dd729ec9d99b = $this->env->getExtension("native_profiler");
        $__internal_658a153d58aad032d2620af932134c4f08c14d846ecce578bcc9dd729ec9d99b->enter($__internal_658a153d58aad032d2620af932134c4f08c14d846ecce578bcc9dd729ec9d99b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_658a153d58aad032d2620af932134c4f08c14d846ecce578bcc9dd729ec9d99b->leave($__internal_658a153d58aad032d2620af932134c4f08c14d846ecce578bcc9dd729ec9d99b_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_e3402bd8ca2123b92cd002494852e80af7dc05b41c85ebdb76516f4780e96538 = $this->env->getExtension("native_profiler");
        $__internal_e3402bd8ca2123b92cd002494852e80af7dc05b41c85ebdb76516f4780e96538->enter($__internal_e3402bd8ca2123b92cd002494852e80af7dc05b41c85ebdb76516f4780e96538_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_e3402bd8ca2123b92cd002494852e80af7dc05b41c85ebdb76516f4780e96538->leave($__internal_e3402bd8ca2123b92cd002494852e80af7dc05b41c85ebdb76516f4780e96538_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
