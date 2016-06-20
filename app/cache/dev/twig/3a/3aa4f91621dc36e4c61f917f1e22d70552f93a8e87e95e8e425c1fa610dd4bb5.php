<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_093a81b40ab30538c4d6fd1e0aae14858dc58b523edc8497a3fcfc1d3b4af78d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_675311172c24791dfaf85e5b8a2d147959628bad5a393f768eb645bc632623ad = $this->env->getExtension("native_profiler");
        $__internal_675311172c24791dfaf85e5b8a2d147959628bad5a393f768eb645bc632623ad->enter($__internal_675311172c24791dfaf85e5b8a2d147959628bad5a393f768eb645bc632623ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_675311172c24791dfaf85e5b8a2d147959628bad5a393f768eb645bc632623ad->leave($__internal_675311172c24791dfaf85e5b8a2d147959628bad5a393f768eb645bc632623ad_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ace8221cb872619fd85e385a6ea9dc6103b6db310793f863cf97337ddd6a3117 = $this->env->getExtension("native_profiler");
        $__internal_ace8221cb872619fd85e385a6ea9dc6103b6db310793f863cf97337ddd6a3117->enter($__internal_ace8221cb872619fd85e385a6ea9dc6103b6db310793f863cf97337ddd6a3117_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_ace8221cb872619fd85e385a6ea9dc6103b6db310793f863cf97337ddd6a3117->leave($__internal_ace8221cb872619fd85e385a6ea9dc6103b6db310793f863cf97337ddd6a3117_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 8,  45 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>*/
/*     {% if targetUrl %}*/
/*     <p><a href="{{ targetUrl }}">{{ 'registration.back'|trans }}</a></p>*/
/*     {% endif %}*/
/* {% endblock fos_user_content %}*/
/* */
