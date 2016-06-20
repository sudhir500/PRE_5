<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_042f1f43ed14356c2c405e35acd38902da8ab42087f6872a8221a249540b162a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6f4357ebcdf128b0453dffecb08e0eb1585900de956cc0e7eb5b5586b646741b = $this->env->getExtension("native_profiler");
        $__internal_6f4357ebcdf128b0453dffecb08e0eb1585900de956cc0e7eb5b5586b646741b->enter($__internal_6f4357ebcdf128b0453dffecb08e0eb1585900de956cc0e7eb5b5586b646741b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f4357ebcdf128b0453dffecb08e0eb1585900de956cc0e7eb5b5586b646741b->leave($__internal_6f4357ebcdf128b0453dffecb08e0eb1585900de956cc0e7eb5b5586b646741b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a6f3ac20db1319d871cd14b2ec5d0e8c96abb69fa2933efb05f85d27acd3d93f = $this->env->getExtension("native_profiler");
        $__internal_a6f3ac20db1319d871cd14b2ec5d0e8c96abb69fa2933efb05f85d27acd3d93f->enter($__internal_a6f3ac20db1319d871cd14b2ec5d0e8c96abb69fa2933efb05f85d27acd3d93f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_a6f3ac20db1319d871cd14b2ec5d0e8c96abb69fa2933efb05f85d27acd3d93f->leave($__internal_a6f3ac20db1319d871cd14b2ec5d0e8c96abb69fa2933efb05f85d27acd3d93f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_250fcfd2cefeac01a13bdba17c818b9130513f77c481f16f4e1b3cf0804ff3da = $this->env->getExtension("native_profiler");
        $__internal_250fcfd2cefeac01a13bdba17c818b9130513f77c481f16f4e1b3cf0804ff3da->enter($__internal_250fcfd2cefeac01a13bdba17c818b9130513f77c481f16f4e1b3cf0804ff3da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_250fcfd2cefeac01a13bdba17c818b9130513f77c481f16f4e1b3cf0804ff3da->leave($__internal_250fcfd2cefeac01a13bdba17c818b9130513f77c481f16f4e1b3cf0804ff3da_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4a4fdad1b029a753d9be175b64256f2585c7faf331d36b1d8b8808ee17887dec = $this->env->getExtension("native_profiler");
        $__internal_4a4fdad1b029a753d9be175b64256f2585c7faf331d36b1d8b8808ee17887dec->enter($__internal_4a4fdad1b029a753d9be175b64256f2585c7faf331d36b1d8b8808ee17887dec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_4a4fdad1b029a753d9be175b64256f2585c7faf331d36b1d8b8808ee17887dec->leave($__internal_4a4fdad1b029a753d9be175b64256f2585c7faf331d36b1d8b8808ee17887dec_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
