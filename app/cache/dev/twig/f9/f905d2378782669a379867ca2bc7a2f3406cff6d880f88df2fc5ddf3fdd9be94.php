<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_95814958f602dfe75aea3ea66f0d2e9e9af4fc89f4170142ab2194b00b9d1394 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_4a16e7490d18edcae8e741f573e5c4d73243a9325e469ab74e58a325c9ec7b08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a16e7490d18edcae8e741f573e5c4d73243a9325e469ab74e58a325c9ec7b08->enter($__internal_4a16e7490d18edcae8e741f573e5c4d73243a9325e469ab74e58a325c9ec7b08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4a16e7490d18edcae8e741f573e5c4d73243a9325e469ab74e58a325c9ec7b08->leave($__internal_4a16e7490d18edcae8e741f573e5c4d73243a9325e469ab74e58a325c9ec7b08_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ad348fdc80b95526d5f7e473aea1e5987e4b8ea92e8a5d2ac94c64d5955b6f55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad348fdc80b95526d5f7e473aea1e5987e4b8ea92e8a5d2ac94c64d5955b6f55->enter($__internal_ad348fdc80b95526d5f7e473aea1e5987e4b8ea92e8a5d2ac94c64d5955b6f55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_ad348fdc80b95526d5f7e473aea1e5987e4b8ea92e8a5d2ac94c64d5955b6f55->leave($__internal_ad348fdc80b95526d5f7e473aea1e5987e4b8ea92e8a5d2ac94c64d5955b6f55_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1ba3b4525fa6e81be9d3c9c3b5d6f18738f81e51b99acf79a9a7cd5f2caee78d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ba3b4525fa6e81be9d3c9c3b5d6f18738f81e51b99acf79a9a7cd5f2caee78d->enter($__internal_1ba3b4525fa6e81be9d3c9c3b5d6f18738f81e51b99acf79a9a7cd5f2caee78d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_1ba3b4525fa6e81be9d3c9c3b5d6f18738f81e51b99acf79a9a7cd5f2caee78d->leave($__internal_1ba3b4525fa6e81be9d3c9c3b5d6f18738f81e51b99acf79a9a7cd5f2caee78d_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c1676caed38dab743f1d622c596486bf605e0f38d97c2e874043a0cabfa5d7f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1676caed38dab743f1d622c596486bf605e0f38d97c2e874043a0cabfa5d7f9->enter($__internal_c1676caed38dab743f1d622c596486bf605e0f38d97c2e874043a0cabfa5d7f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_c1676caed38dab743f1d622c596486bf605e0f38d97c2e874043a0cabfa5d7f9->leave($__internal_c1676caed38dab743f1d622c596486bf605e0f38d97c2e874043a0cabfa5d7f9_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/var/www/html/symf.dev/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
