<?php

/* entrenador/index.html.twig */
class __TwigTemplate_e20ed419583e566e3cc8cfc5222582ecf7fa58e35ecd11cd48fcd76d364350b2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "entrenador/index.html.twig", 1);
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
        $__internal_c99cbefe8b37e86a0ee7c7ac2e94e06321c4931287a5cae8d538c5610adc99f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c99cbefe8b37e86a0ee7c7ac2e94e06321c4931287a5cae8d538c5610adc99f7->enter($__internal_c99cbefe8b37e86a0ee7c7ac2e94e06321c4931287a5cae8d538c5610adc99f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "entrenador/index.html.twig"));

        $__internal_8f658bc34c60a21702523d27d4eea09fe876f2833af1b17b930172532ecf3f3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f658bc34c60a21702523d27d4eea09fe876f2833af1b17b930172532ecf3f3f->enter($__internal_8f658bc34c60a21702523d27d4eea09fe876f2833af1b17b930172532ecf3f3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "entrenador/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c99cbefe8b37e86a0ee7c7ac2e94e06321c4931287a5cae8d538c5610adc99f7->leave($__internal_c99cbefe8b37e86a0ee7c7ac2e94e06321c4931287a5cae8d538c5610adc99f7_prof);

        
        $__internal_8f658bc34c60a21702523d27d4eea09fe876f2833af1b17b930172532ecf3f3f->leave($__internal_8f658bc34c60a21702523d27d4eea09fe876f2833af1b17b930172532ecf3f3f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_13affefdcc03ec74bc1356ecea9c5e1d75d9dbb63933a68449173fc7fe5fb201 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13affefdcc03ec74bc1356ecea9c5e1d75d9dbb63933a68449173fc7fe5fb201->enter($__internal_13affefdcc03ec74bc1356ecea9c5e1d75d9dbb63933a68449173fc7fe5fb201_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_43d3e944dbed526b97cd2d56507e83f6a7f55aac07896e46141bd2554e88369b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43d3e944dbed526b97cd2d56507e83f6a7f55aac07896e46141bd2554e88369b->enter($__internal_43d3e944dbed526b97cd2d56507e83f6a7f55aac07896e46141bd2554e88369b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Entrenadors list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entrenadors"]) || array_key_exists("entrenadors", $context) ? $context["entrenadors"] : (function () { throw new Twig_Error_Runtime('Variable "entrenadors" does not exist.', 16, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["entrenador"]) {
            // line 17
            echo "            <tr>
                <td><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("entrenador_show", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["entrenador"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["entrenador"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["entrenador"], "nombre", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["entrenador"], "apellidos", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("entrenador_show", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["entrenador"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("entrenador_edit", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["entrenador"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entrenador'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("entrenador_new");
        echo "\">Create a new entrenador</a>
        </li>
    </ul>
";
        
        $__internal_43d3e944dbed526b97cd2d56507e83f6a7f55aac07896e46141bd2554e88369b->leave($__internal_43d3e944dbed526b97cd2d56507e83f6a7f55aac07896e46141bd2554e88369b_prof);

        
        $__internal_13affefdcc03ec74bc1356ecea9c5e1d75d9dbb63933a68449173fc7fe5fb201->leave($__internal_13affefdcc03ec74bc1356ecea9c5e1d75d9dbb63933a68449173fc7fe5fb201_prof);

    }

    public function getTemplateName()
    {
        return "entrenador/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 38,  105 => 33,  93 => 27,  87 => 24,  80 => 20,  76 => 19,  70 => 18,  67 => 17,  63 => 16,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Entrenadors list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for entrenador in entrenadors %}
            <tr>
                <td><a href=\"{{ path('entrenador_show', { 'id': entrenador.id }) }}\">{{ entrenador.id }}</a></td>
                <td>{{ entrenador.nombre }}</td>
                <td>{{ entrenador.apellidos }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('entrenador_show', { 'id': entrenador.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('entrenador_edit', { 'id': entrenador.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('entrenador_new') }}\">Create a new entrenador</a>
        </li>
    </ul>
{% endblock %}
", "entrenador/index.html.twig", "C:\\http\\php\\proy\\app\\Resources\\views\\entrenador\\index.html.twig");
    }
}
