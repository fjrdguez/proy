<?php

/* @Empresa/empresa/edit.html.twig */
class __TwigTemplate_481fe4c55663f22fc614f97e8b546045140824ae09f3b83cd4ff1698f71ee3c1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Empresa/empresa/edit.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4179cd7511aa5c85d3f82cb514d299da9e5cdb2cddf9bd00718edaca67a8d2be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4179cd7511aa5c85d3f82cb514d299da9e5cdb2cddf9bd00718edaca67a8d2be->enter($__internal_4179cd7511aa5c85d3f82cb514d299da9e5cdb2cddf9bd00718edaca67a8d2be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Empresa/empresa/edit.html.twig"));

        $__internal_ecf0501ed0a0121c9e3ee2227ae2d3e45d637e7dbf8913255df147f5a3a6cab5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecf0501ed0a0121c9e3ee2227ae2d3e45d637e7dbf8913255df147f5a3a6cab5->enter($__internal_ecf0501ed0a0121c9e3ee2227ae2d3e45d637e7dbf8913255df147f5a3a6cab5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Empresa/empresa/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4179cd7511aa5c85d3f82cb514d299da9e5cdb2cddf9bd00718edaca67a8d2be->leave($__internal_4179cd7511aa5c85d3f82cb514d299da9e5cdb2cddf9bd00718edaca67a8d2be_prof);

        
        $__internal_ecf0501ed0a0121c9e3ee2227ae2d3e45d637e7dbf8913255df147f5a3a6cab5->leave($__internal_ecf0501ed0a0121c9e3ee2227ae2d3e45d637e7dbf8913255df147f5a3a6cab5_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9969efe5f16418f91e2572f4671aa9320467686e2ef887aca2c50347a50eaf8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9969efe5f16418f91e2572f4671aa9320467686e2ef887aca2c50347a50eaf8c->enter($__internal_9969efe5f16418f91e2572f4671aa9320467686e2ef887aca2c50347a50eaf8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_80bcdf3b02807b5b5af3867ebaaafafa77867df4013a6138729905303e1cbb0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80bcdf3b02807b5b5af3867ebaaafafa77867df4013a6138729905303e1cbb0d->enter($__internal_80bcdf3b02807b5b5af3867ebaaafafa77867df4013a6138729905303e1cbb0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Empresa edit</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 6, $this->getSourceContext()); })()), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 7, $this->getSourceContext()); })()), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 9, $this->getSourceContext()); })()), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("empresa_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 16, $this->getSourceContext()); })()), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 18, $this->getSourceContext()); })()), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_80bcdf3b02807b5b5af3867ebaaafafa77867df4013a6138729905303e1cbb0d->leave($__internal_80bcdf3b02807b5b5af3867ebaaafafa77867df4013a6138729905303e1cbb0d_prof);

        
        $__internal_9969efe5f16418f91e2572f4671aa9320467686e2ef887aca2c50347a50eaf8c->leave($__internal_9969efe5f16418f91e2572f4671aa9320467686e2ef887aca2c50347a50eaf8c_prof);

    }

    public function getTemplateName()
    {
        return "@Empresa/empresa/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 18,  75 => 16,  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Empresa edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('empresa_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "@Empresa/empresa/edit.html.twig", "C:\\http\\php\\proy\\src\\EmpresaBundle\\Resources\\views\\empresa\\edit.html.twig");
    }
}
