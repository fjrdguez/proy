<?php

/* entrenador/show.html.twig */
class __TwigTemplate_b1cf4107d15d6c2d10d5877e4720a54832340748253a2862e1f5f0a7a7a926f1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "entrenador/show.html.twig", 1);
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
        $__internal_90c86508c573e48a537b95493845931763ab6609688998fdcafd0566d8c8cc4f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90c86508c573e48a537b95493845931763ab6609688998fdcafd0566d8c8cc4f->enter($__internal_90c86508c573e48a537b95493845931763ab6609688998fdcafd0566d8c8cc4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "entrenador/show.html.twig"));

        $__internal_3c5d6ae61fd2794554538ff966fb8c4d6426dd02463aefa33702ca9c75d7ded6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c5d6ae61fd2794554538ff966fb8c4d6426dd02463aefa33702ca9c75d7ded6->enter($__internal_3c5d6ae61fd2794554538ff966fb8c4d6426dd02463aefa33702ca9c75d7ded6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "entrenador/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_90c86508c573e48a537b95493845931763ab6609688998fdcafd0566d8c8cc4f->leave($__internal_90c86508c573e48a537b95493845931763ab6609688998fdcafd0566d8c8cc4f_prof);

        
        $__internal_3c5d6ae61fd2794554538ff966fb8c4d6426dd02463aefa33702ca9c75d7ded6->leave($__internal_3c5d6ae61fd2794554538ff966fb8c4d6426dd02463aefa33702ca9c75d7ded6_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e3bd0a697bf010e613431eafd28771d735b5b09fe8c8e3d3e7642facc15d9a1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3bd0a697bf010e613431eafd28771d735b5b09fe8c8e3d3e7642facc15d9a1c->enter($__internal_e3bd0a697bf010e613431eafd28771d735b5b09fe8c8e3d3e7642facc15d9a1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_612296d61b32f0ed26969d0c96f97d1eab0bb5db48c9396d9d274455781cddcd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_612296d61b32f0ed26969d0c96f97d1eab0bb5db48c9396d9d274455781cddcd->enter($__internal_612296d61b32f0ed26969d0c96f97d1eab0bb5db48c9396d9d274455781cddcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Entrenador</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["entrenador"]) || array_key_exists("entrenador", $context) ? $context["entrenador"] : (function () { throw new Twig_Error_Runtime('Variable "entrenador" does not exist.', 10, $this->getSourceContext()); })()), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nombre</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["entrenador"]) || array_key_exists("entrenador", $context) ? $context["entrenador"] : (function () { throw new Twig_Error_Runtime('Variable "entrenador" does not exist.', 14, $this->getSourceContext()); })()), "nombre", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Apellidos</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["entrenador"]) || array_key_exists("entrenador", $context) ? $context["entrenador"] : (function () { throw new Twig_Error_Runtime('Variable "entrenador" does not exist.', 18, $this->getSourceContext()); })()), "apellidos", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("entrenador_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("entrenador_edit", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["entrenador"]) || array_key_exists("entrenador", $context) ? $context["entrenador"] : (function () { throw new Twig_Error_Runtime('Variable "entrenador" does not exist.', 28, $this->getSourceContext()); })()), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 31
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 31, $this->getSourceContext()); })()), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 33
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 33, $this->getSourceContext()); })()), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_612296d61b32f0ed26969d0c96f97d1eab0bb5db48c9396d9d274455781cddcd->leave($__internal_612296d61b32f0ed26969d0c96f97d1eab0bb5db48c9396d9d274455781cddcd_prof);

        
        $__internal_e3bd0a697bf010e613431eafd28771d735b5b09fe8c8e3d3e7642facc15d9a1c->leave($__internal_e3bd0a697bf010e613431eafd28771d735b5b09fe8c8e3d3e7642facc15d9a1c_prof);

    }

    public function getTemplateName()
    {
        return "entrenador/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 33,  93 => 31,  87 => 28,  81 => 25,  71 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Entrenador</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ entrenador.id }}</td>
            </tr>
            <tr>
                <th>Nombre</th>
                <td>{{ entrenador.nombre }}</td>
            </tr>
            <tr>
                <th>Apellidos</th>
                <td>{{ entrenador.apellidos }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('entrenador_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('entrenador_edit', { 'id': entrenador.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "entrenador/show.html.twig", "C:\\http\\php\\proy\\app\\Resources\\views\\entrenador\\show.html.twig");
    }
}
