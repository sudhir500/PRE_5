<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_d5da0fb80ec30de6495d93a3fd016373103236372f3fef13b4c51437d335d8ec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_04941001c3c4d632759b1eacf09652f9aadc38d6dc48d43b1baa7f17aa810990 = $this->env->getExtension("native_profiler");
        $__internal_04941001c3c4d632759b1eacf09652f9aadc38d6dc48d43b1baa7f17aa810990->enter($__internal_04941001c3c4d632759b1eacf09652f9aadc38d6dc48d43b1baa7f17aa810990_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_04941001c3c4d632759b1eacf09652f9aadc38d6dc48d43b1baa7f17aa810990->leave($__internal_04941001c3c4d632759b1eacf09652f9aadc38d6dc48d43b1baa7f17aa810990_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e8363ce7be2383f33d85f9757c2f3d2d0eff4199bccea30244747b641dbc8164 = $this->env->getExtension("native_profiler");
        $__internal_e8363ce7be2383f33d85f9757c2f3d2d0eff4199bccea30244747b641dbc8164->enter($__internal_e8363ce7be2383f33d85f9757c2f3d2d0eff4199bccea30244747b641dbc8164_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_e8363ce7be2383f33d85f9757c2f3d2d0eff4199bccea30244747b641dbc8164->leave($__internal_e8363ce7be2383f33d85f9757c2f3d2d0eff4199bccea30244747b641dbc8164_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
