<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_2f8d8aeec56cae47837405f3beed6396bf0684bd77d1930b2ab71afc38025dfa extends Twig_Template
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
        $__internal_189135e0e30f4be039d4fd7c5a592c8bee06fbcd024c22e306c89dc50c1309dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_189135e0e30f4be039d4fd7c5a592c8bee06fbcd024c22e306c89dc50c1309dc->enter($__internal_189135e0e30f4be039d4fd7c5a592c8bee06fbcd024c22e306c89dc50c1309dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_189135e0e30f4be039d4fd7c5a592c8bee06fbcd024c22e306c89dc50c1309dc->leave($__internal_189135e0e30f4be039d4fd7c5a592c8bee06fbcd024c22e306c89dc50c1309dc_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_02e9931a26229b91322a061ee33ff98adf8d6936c731d490549c61b622fc3cb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02e9931a26229b91322a061ee33ff98adf8d6936c731d490549c61b622fc3cb9->enter($__internal_02e9931a26229b91322a061ee33ff98adf8d6936c731d490549c61b622fc3cb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_02e9931a26229b91322a061ee33ff98adf8d6936c731d490549c61b622fc3cb9->leave($__internal_02e9931a26229b91322a061ee33ff98adf8d6936c731d490549c61b622fc3cb9_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5da88d31ff8d4bb5fab41b78e900516921868dc66b6d0d6721c8e992bce8a4f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5da88d31ff8d4bb5fab41b78e900516921868dc66b6d0d6721c8e992bce8a4f9->enter($__internal_5da88d31ff8d4bb5fab41b78e900516921868dc66b6d0d6721c8e992bce8a4f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_5da88d31ff8d4bb5fab41b78e900516921868dc66b6d0d6721c8e992bce8a4f9->leave($__internal_5da88d31ff8d4bb5fab41b78e900516921868dc66b6d0d6721c8e992bce8a4f9_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e2d4c76620169b285d8ac19e8d8ba4456680ad90ad8e42bba1f05945c0b86095 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2d4c76620169b285d8ac19e8d8ba4456680ad90ad8e42bba1f05945c0b86095->enter($__internal_e2d4c76620169b285d8ac19e8d8ba4456680ad90ad8e42bba1f05945c0b86095_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_e2d4c76620169b285d8ac19e8d8ba4456680ad90ad8e42bba1f05945c0b86095->leave($__internal_e2d4c76620169b285d8ac19e8d8ba4456680ad90ad8e42bba1f05945c0b86095_prof);

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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/symf.dev/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
