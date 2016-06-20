<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_51510defccc7d5c83ea22a596c03d0f5bfd858a053c1b533a9ac86a90e10d9b3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_e947c83d64d994b94b82f43c83133fb712287386a674ff25641ba78ffa3d2bc8 = $this->env->getExtension("native_profiler");
        $__internal_e947c83d64d994b94b82f43c83133fb712287386a674ff25641ba78ffa3d2bc8->enter($__internal_e947c83d64d994b94b82f43c83133fb712287386a674ff25641ba78ffa3d2bc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e947c83d64d994b94b82f43c83133fb712287386a674ff25641ba78ffa3d2bc8->leave($__internal_e947c83d64d994b94b82f43c83133fb712287386a674ff25641ba78ffa3d2bc8_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_02c265f5f250c1c3dc08f9bc4270f0350c98a683678da5e8cb984761f9b19da5 = $this->env->getExtension("native_profiler");
        $__internal_02c265f5f250c1c3dc08f9bc4270f0350c98a683678da5e8cb984761f9b19da5->enter($__internal_02c265f5f250c1c3dc08f9bc4270f0350c98a683678da5e8cb984761f9b19da5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_02c265f5f250c1c3dc08f9bc4270f0350c98a683678da5e8cb984761f9b19da5->leave($__internal_02c265f5f250c1c3dc08f9bc4270f0350c98a683678da5e8cb984761f9b19da5_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
