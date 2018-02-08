<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_d277f4cab5599514e84d48c4e75f52907c6f83bb13c9c25ff71ea47dbe539c72 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fc70745c6943e6c4d70345afb2ecd5e10580b454d186ca26ac3cc367cca9c1ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc70745c6943e6c4d70345afb2ecd5e10580b454d186ca26ac3cc367cca9c1ba->enter($__internal_fc70745c6943e6c4d70345afb2ecd5e10580b454d186ca26ac3cc367cca9c1ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_958da4cb253872ce536d981ca6d014dbe4e6ef7e2bb30c79e02af8783b8cf771 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_958da4cb253872ce536d981ca6d014dbe4e6ef7e2bb30c79e02af8783b8cf771->enter($__internal_958da4cb253872ce536d981ca6d014dbe4e6ef7e2bb30c79e02af8783b8cf771_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fc70745c6943e6c4d70345afb2ecd5e10580b454d186ca26ac3cc367cca9c1ba->leave($__internal_fc70745c6943e6c4d70345afb2ecd5e10580b454d186ca26ac3cc367cca9c1ba_prof);

        
        $__internal_958da4cb253872ce536d981ca6d014dbe4e6ef7e2bb30c79e02af8783b8cf771->leave($__internal_958da4cb253872ce536d981ca6d014dbe4e6ef7e2bb30c79e02af8783b8cf771_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_af077d97d9d336aa30ced6aeaf9fc35095e943b942a02dde310358d02480b1e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af077d97d9d336aa30ced6aeaf9fc35095e943b942a02dde310358d02480b1e6->enter($__internal_af077d97d9d336aa30ced6aeaf9fc35095e943b942a02dde310358d02480b1e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_723c43dec991d3769a1b50921c05b3fe0bee3d3a4e069c6d134fb622a3b27998 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_723c43dec991d3769a1b50921c05b3fe0bee3d3a4e069c6d134fb622a3b27998->enter($__internal_723c43dec991d3769a1b50921c05b3fe0bee3d3a4e069c6d134fb622a3b27998_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_723c43dec991d3769a1b50921c05b3fe0bee3d3a4e069c6d134fb622a3b27998->leave($__internal_723c43dec991d3769a1b50921c05b3fe0bee3d3a4e069c6d134fb622a3b27998_prof);

        
        $__internal_af077d97d9d336aa30ced6aeaf9fc35095e943b942a02dde310358d02480b1e6->leave($__internal_af077d97d9d336aa30ced6aeaf9fc35095e943b942a02dde310358d02480b1e6_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "C:\\http\\proy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
