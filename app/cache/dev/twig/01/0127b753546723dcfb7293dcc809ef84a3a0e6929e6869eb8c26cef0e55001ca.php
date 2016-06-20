<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_d65a96dead33f1fc068c52e9cc8739b9312ae19d549880c8317d9f9986931a22 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_40d0477d51c55995e465c1fabd186baffde7753e150b9eea1efe40a2b8f3e2e4 = $this->env->getExtension("native_profiler");
        $__internal_40d0477d51c55995e465c1fabd186baffde7753e150b9eea1efe40a2b8f3e2e4->enter($__internal_40d0477d51c55995e465c1fabd186baffde7753e150b9eea1efe40a2b8f3e2e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_40d0477d51c55995e465c1fabd186baffde7753e150b9eea1efe40a2b8f3e2e4->leave($__internal_40d0477d51c55995e465c1fabd186baffde7753e150b9eea1efe40a2b8f3e2e4_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4ee66e7c3ed1e7554b0f7294d8e0aafc7a6527c3fbdb67494538e215fa18e930 = $this->env->getExtension("native_profiler");
        $__internal_4ee66e7c3ed1e7554b0f7294d8e0aafc7a6527c3fbdb67494538e215fa18e930->enter($__internal_4ee66e7c3ed1e7554b0f7294d8e0aafc7a6527c3fbdb67494538e215fa18e930_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_4ee66e7c3ed1e7554b0f7294d8e0aafc7a6527c3fbdb67494538e215fa18e930->leave($__internal_4ee66e7c3ed1e7554b0f7294d8e0aafc7a6527c3fbdb67494538e215fa18e930_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
