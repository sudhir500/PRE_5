<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_ab9d028bfc1381b0560060a187a93657d88c28895d2b52f8d4a476b786fd6d57 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bf7719e2326446b6d9d4ba147d8c720bd3ad45f167c9e0b74ee9275dc7673920 = $this->env->getExtension("native_profiler");
        $__internal_bf7719e2326446b6d9d4ba147d8c720bd3ad45f167c9e0b74ee9275dc7673920->enter($__internal_bf7719e2326446b6d9d4ba147d8c720bd3ad45f167c9e0b74ee9275dc7673920_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bf7719e2326446b6d9d4ba147d8c720bd3ad45f167c9e0b74ee9275dc7673920->leave($__internal_bf7719e2326446b6d9d4ba147d8c720bd3ad45f167c9e0b74ee9275dc7673920_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_fe216afd47dc582c8d8014512c03fe3743e82b3cd756d2ea5134eaed0ae9c6e2 = $this->env->getExtension("native_profiler");
        $__internal_fe216afd47dc582c8d8014512c03fe3743e82b3cd756d2ea5134eaed0ae9c6e2->enter($__internal_fe216afd47dc582c8d8014512c03fe3743e82b3cd756d2ea5134eaed0ae9c6e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_fe216afd47dc582c8d8014512c03fe3743e82b3cd756d2ea5134eaed0ae9c6e2->leave($__internal_fe216afd47dc582c8d8014512c03fe3743e82b3cd756d2ea5134eaed0ae9c6e2_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_86c7d64f57719df0ffeaf6d6dd76bed083e9af50ae747bae142c7cead1c6dcaa = $this->env->getExtension("native_profiler");
        $__internal_86c7d64f57719df0ffeaf6d6dd76bed083e9af50ae747bae142c7cead1c6dcaa->enter($__internal_86c7d64f57719df0ffeaf6d6dd76bed083e9af50ae747bae142c7cead1c6dcaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_86c7d64f57719df0ffeaf6d6dd76bed083e9af50ae747bae142c7cead1c6dcaa->leave($__internal_86c7d64f57719df0ffeaf6d6dd76bed083e9af50ae747bae142c7cead1c6dcaa_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_c6ab2b34bb22c359b587c9396c66a7facef66745c289fb471b85001cfefcf957 = $this->env->getExtension("native_profiler");
        $__internal_c6ab2b34bb22c359b587c9396c66a7facef66745c289fb471b85001cfefcf957->enter($__internal_c6ab2b34bb22c359b587c9396c66a7facef66745c289fb471b85001cfefcf957_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_c6ab2b34bb22c359b587c9396c66a7facef66745c289fb471b85001cfefcf957->leave($__internal_c6ab2b34bb22c359b587c9396c66a7facef66745c289fb471b85001cfefcf957_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
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
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
