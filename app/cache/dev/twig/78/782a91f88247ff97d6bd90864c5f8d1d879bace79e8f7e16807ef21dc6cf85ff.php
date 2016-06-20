<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_76e0025708d131c9218e416a299f6f82465613d84f3b37a37abc90b8a0f97e74 extends Twig_Template
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
        $__internal_ed9b7351e55e0c5d282e4272dbb1d6aa608fe0221c9d3c4d33cba55f379ad844 = $this->env->getExtension("native_profiler");
        $__internal_ed9b7351e55e0c5d282e4272dbb1d6aa608fe0221c9d3c4d33cba55f379ad844->enter($__internal_ed9b7351e55e0c5d282e4272dbb1d6aa608fe0221c9d3c4d33cba55f379ad844_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ed9b7351e55e0c5d282e4272dbb1d6aa608fe0221c9d3c4d33cba55f379ad844->leave($__internal_ed9b7351e55e0c5d282e4272dbb1d6aa608fe0221c9d3c4d33cba55f379ad844_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_484d5bae33cd8bc38224e8a5e3eb3e7670e126b4009f5e67c796d2e4465361f3 = $this->env->getExtension("native_profiler");
        $__internal_484d5bae33cd8bc38224e8a5e3eb3e7670e126b4009f5e67c796d2e4465361f3->enter($__internal_484d5bae33cd8bc38224e8a5e3eb3e7670e126b4009f5e67c796d2e4465361f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_484d5bae33cd8bc38224e8a5e3eb3e7670e126b4009f5e67c796d2e4465361f3->leave($__internal_484d5bae33cd8bc38224e8a5e3eb3e7670e126b4009f5e67c796d2e4465361f3_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4828abb04125e7782201cd9baeee49da8e0f48cd9289f9a3a142b76f7960adc5 = $this->env->getExtension("native_profiler");
        $__internal_4828abb04125e7782201cd9baeee49da8e0f48cd9289f9a3a142b76f7960adc5->enter($__internal_4828abb04125e7782201cd9baeee49da8e0f48cd9289f9a3a142b76f7960adc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_4828abb04125e7782201cd9baeee49da8e0f48cd9289f9a3a142b76f7960adc5->leave($__internal_4828abb04125e7782201cd9baeee49da8e0f48cd9289f9a3a142b76f7960adc5_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0876fc8fdd826ace5c4e5fd4d6a41e50558a621e8d3a46efb7f869fd077a3513 = $this->env->getExtension("native_profiler");
        $__internal_0876fc8fdd826ace5c4e5fd4d6a41e50558a621e8d3a46efb7f869fd077a3513->enter($__internal_0876fc8fdd826ace5c4e5fd4d6a41e50558a621e8d3a46efb7f869fd077a3513_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_0876fc8fdd826ace5c4e5fd4d6a41e50558a621e8d3a46efb7f869fd077a3513->leave($__internal_0876fc8fdd826ace5c4e5fd4d6a41e50558a621e8d3a46efb7f869fd077a3513_prof);

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
