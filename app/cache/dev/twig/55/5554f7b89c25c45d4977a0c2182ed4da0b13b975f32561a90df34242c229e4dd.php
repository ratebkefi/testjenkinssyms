<?php

/* base.html.twig */
class __TwigTemplate_c5e8e73b707e10106fbf155538a28776530186e7af2b803122eb868c9ccaa289 extends Twig_Template
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
        $__internal_dc050c061097a6626312247e1cb0182eb11cedd9c4616ab2e6a267be180b05a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc050c061097a6626312247e1cb0182eb11cedd9c4616ab2e6a267be180b05a3->enter($__internal_dc050c061097a6626312247e1cb0182eb11cedd9c4616ab2e6a267be180b05a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
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
        
        $__internal_dc050c061097a6626312247e1cb0182eb11cedd9c4616ab2e6a267be180b05a3->leave($__internal_dc050c061097a6626312247e1cb0182eb11cedd9c4616ab2e6a267be180b05a3_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_7176c3c58b8bba72e657295c774f7d59bce8c1c6e74ef786f08bd99b41725ae7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7176c3c58b8bba72e657295c774f7d59bce8c1c6e74ef786f08bd99b41725ae7->enter($__internal_7176c3c58b8bba72e657295c774f7d59bce8c1c6e74ef786f08bd99b41725ae7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_7176c3c58b8bba72e657295c774f7d59bce8c1c6e74ef786f08bd99b41725ae7->leave($__internal_7176c3c58b8bba72e657295c774f7d59bce8c1c6e74ef786f08bd99b41725ae7_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3dcb2982c00ad8126b328e40d509b84a393f7ebd244040d64169b3b35fc31fe4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3dcb2982c00ad8126b328e40d509b84a393f7ebd244040d64169b3b35fc31fe4->enter($__internal_3dcb2982c00ad8126b328e40d509b84a393f7ebd244040d64169b3b35fc31fe4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_3dcb2982c00ad8126b328e40d509b84a393f7ebd244040d64169b3b35fc31fe4->leave($__internal_3dcb2982c00ad8126b328e40d509b84a393f7ebd244040d64169b3b35fc31fe4_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_49c68a3a7515cc8101a02a42c62c64963cd1472a4a5e315d7d85888d2217454d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49c68a3a7515cc8101a02a42c62c64963cd1472a4a5e315d7d85888d2217454d->enter($__internal_49c68a3a7515cc8101a02a42c62c64963cd1472a4a5e315d7d85888d2217454d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_49c68a3a7515cc8101a02a42c62c64963cd1472a4a5e315d7d85888d2217454d->leave($__internal_49c68a3a7515cc8101a02a42c62c64963cd1472a4a5e315d7d85888d2217454d_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3d1192ca6d51dfd34c4b41ffdde6d7e601dab6bd99e45f26c2d68962d2eb5a88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d1192ca6d51dfd34c4b41ffdde6d7e601dab6bd99e45f26c2d68962d2eb5a88->enter($__internal_3d1192ca6d51dfd34c4b41ffdde6d7e601dab6bd99e45f26c2d68962d2eb5a88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_3d1192ca6d51dfd34c4b41ffdde6d7e601dab6bd99e45f26c2d68962d2eb5a88->leave($__internal_3d1192ca6d51dfd34c4b41ffdde6d7e601dab6bd99e45f26c2d68962d2eb5a88_prof);

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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/var/www/html/symf.dev/app/Resources/views/base.html.twig");
    }
}
