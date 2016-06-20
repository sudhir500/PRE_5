<?php

/* base.html.twig */
class __TwigTemplate_22a493e2a40f027d81bc5a212810a7ca502e1b93c09c25ede0f78456a11aec46 extends Twig_Template
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
        $__internal_fe96022489bd9d85fea8b01d81d1f56baa369d4a0ee17f0512d41ce34a4bb7f1 = $this->env->getExtension("native_profiler");
        $__internal_fe96022489bd9d85fea8b01d81d1f56baa369d4a0ee17f0512d41ce34a4bb7f1->enter($__internal_fe96022489bd9d85fea8b01d81d1f56baa369d4a0ee17f0512d41ce34a4bb7f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_fe96022489bd9d85fea8b01d81d1f56baa369d4a0ee17f0512d41ce34a4bb7f1->leave($__internal_fe96022489bd9d85fea8b01d81d1f56baa369d4a0ee17f0512d41ce34a4bb7f1_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_e6d366623ebb7bcdd93a011c25259a99622eee9d5652d07d202f0b65cab0a793 = $this->env->getExtension("native_profiler");
        $__internal_e6d366623ebb7bcdd93a011c25259a99622eee9d5652d07d202f0b65cab0a793->enter($__internal_e6d366623ebb7bcdd93a011c25259a99622eee9d5652d07d202f0b65cab0a793_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_e6d366623ebb7bcdd93a011c25259a99622eee9d5652d07d202f0b65cab0a793->leave($__internal_e6d366623ebb7bcdd93a011c25259a99622eee9d5652d07d202f0b65cab0a793_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ec707f8275c63003606a501aa97f2ac544cb276bdf216c4aed6185131212b161 = $this->env->getExtension("native_profiler");
        $__internal_ec707f8275c63003606a501aa97f2ac544cb276bdf216c4aed6185131212b161->enter($__internal_ec707f8275c63003606a501aa97f2ac544cb276bdf216c4aed6185131212b161_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_ec707f8275c63003606a501aa97f2ac544cb276bdf216c4aed6185131212b161->leave($__internal_ec707f8275c63003606a501aa97f2ac544cb276bdf216c4aed6185131212b161_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_ccce31584cf1c4229b71d1d520200a18559113d36007aa4e1081c3b688158f81 = $this->env->getExtension("native_profiler");
        $__internal_ccce31584cf1c4229b71d1d520200a18559113d36007aa4e1081c3b688158f81->enter($__internal_ccce31584cf1c4229b71d1d520200a18559113d36007aa4e1081c3b688158f81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ccce31584cf1c4229b71d1d520200a18559113d36007aa4e1081c3b688158f81->leave($__internal_ccce31584cf1c4229b71d1d520200a18559113d36007aa4e1081c3b688158f81_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_bfcbddf5ca4916bca047cab6d53ac4cfdad01a74e09db31f7ac07886d6367f1c = $this->env->getExtension("native_profiler");
        $__internal_bfcbddf5ca4916bca047cab6d53ac4cfdad01a74e09db31f7ac07886d6367f1c->enter($__internal_bfcbddf5ca4916bca047cab6d53ac4cfdad01a74e09db31f7ac07886d6367f1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_bfcbddf5ca4916bca047cab6d53ac4cfdad01a74e09db31f7ac07886d6367f1c->leave($__internal_bfcbddf5ca4916bca047cab6d53ac4cfdad01a74e09db31f7ac07886d6367f1c_prof);

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
