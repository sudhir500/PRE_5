<?php

/* base.html.twig */
class __TwigTemplate_eb4de0a3dc762bfd113e4ac708f38853d61bfc89a7da07c76a9fd1f5dbabd0c3 extends Twig_Template
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
        $__internal_cde71b023af7b3a05baa43812b8fb1be129e571d0804e382b2a2ffaa0057bd4b = $this->env->getExtension("native_profiler");
        $__internal_cde71b023af7b3a05baa43812b8fb1be129e571d0804e382b2a2ffaa0057bd4b->enter($__internal_cde71b023af7b3a05baa43812b8fb1be129e571d0804e382b2a2ffaa0057bd4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_cde71b023af7b3a05baa43812b8fb1be129e571d0804e382b2a2ffaa0057bd4b->leave($__internal_cde71b023af7b3a05baa43812b8fb1be129e571d0804e382b2a2ffaa0057bd4b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_4148ccf7c5ba577087b16e4a18468dbfc39b153e39978e83707e0b47fdc47b88 = $this->env->getExtension("native_profiler");
        $__internal_4148ccf7c5ba577087b16e4a18468dbfc39b153e39978e83707e0b47fdc47b88->enter($__internal_4148ccf7c5ba577087b16e4a18468dbfc39b153e39978e83707e0b47fdc47b88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_4148ccf7c5ba577087b16e4a18468dbfc39b153e39978e83707e0b47fdc47b88->leave($__internal_4148ccf7c5ba577087b16e4a18468dbfc39b153e39978e83707e0b47fdc47b88_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_63f3bcbe28d54158cc5854607c08cf354ea158da8ff0ab339a0a557d9b7dbec2 = $this->env->getExtension("native_profiler");
        $__internal_63f3bcbe28d54158cc5854607c08cf354ea158da8ff0ab339a0a557d9b7dbec2->enter($__internal_63f3bcbe28d54158cc5854607c08cf354ea158da8ff0ab339a0a557d9b7dbec2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_63f3bcbe28d54158cc5854607c08cf354ea158da8ff0ab339a0a557d9b7dbec2->leave($__internal_63f3bcbe28d54158cc5854607c08cf354ea158da8ff0ab339a0a557d9b7dbec2_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_297833c9ab650bb5404555783fc906738745a06680ccc87637ee455c26305d74 = $this->env->getExtension("native_profiler");
        $__internal_297833c9ab650bb5404555783fc906738745a06680ccc87637ee455c26305d74->enter($__internal_297833c9ab650bb5404555783fc906738745a06680ccc87637ee455c26305d74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_297833c9ab650bb5404555783fc906738745a06680ccc87637ee455c26305d74->leave($__internal_297833c9ab650bb5404555783fc906738745a06680ccc87637ee455c26305d74_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_63f06cc458e1d2f974d052b965c5ff643da294966e3b2de571a93c36e9bcda5c = $this->env->getExtension("native_profiler");
        $__internal_63f06cc458e1d2f974d052b965c5ff643da294966e3b2de571a93c36e9bcda5c->enter($__internal_63f06cc458e1d2f974d052b965c5ff643da294966e3b2de571a93c36e9bcda5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_63f06cc458e1d2f974d052b965c5ff643da294966e3b2de571a93c36e9bcda5c->leave($__internal_63f06cc458e1d2f974d052b965c5ff643da294966e3b2de571a93c36e9bcda5c_prof);

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
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
