<?php

/* equipo/index.html.twig */
class __TwigTemplate_067f5480de12fa211affdb3a6c0a019ad5504dc4f6719512dd78869498cf6151 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "equipo/index.html.twig", 1);
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
        $__internal_715579e8bd58db44baa0692570a1c09035fa4a0202bc0508feed216470ca9556 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_715579e8bd58db44baa0692570a1c09035fa4a0202bc0508feed216470ca9556->enter($__internal_715579e8bd58db44baa0692570a1c09035fa4a0202bc0508feed216470ca9556_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "equipo/index.html.twig"));

        $__internal_6cf369a903682f96a9bc704874de0ae83c3c2e2720e2f74d13cd256e857f15cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cf369a903682f96a9bc704874de0ae83c3c2e2720e2f74d13cd256e857f15cd->enter($__internal_6cf369a903682f96a9bc704874de0ae83c3c2e2720e2f74d13cd256e857f15cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "equipo/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_715579e8bd58db44baa0692570a1c09035fa4a0202bc0508feed216470ca9556->leave($__internal_715579e8bd58db44baa0692570a1c09035fa4a0202bc0508feed216470ca9556_prof);

        
        $__internal_6cf369a903682f96a9bc704874de0ae83c3c2e2720e2f74d13cd256e857f15cd->leave($__internal_6cf369a903682f96a9bc704874de0ae83c3c2e2720e2f74d13cd256e857f15cd_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5cc05d396a06b66e62388b86816e10723b9261932e8678e9b6aa9129f6753211 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5cc05d396a06b66e62388b86816e10723b9261932e8678e9b6aa9129f6753211->enter($__internal_5cc05d396a06b66e62388b86816e10723b9261932e8678e9b6aa9129f6753211_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f9d2992e140ba370d4695a79c6550c8ece7987cafcf94a4fa69708b5346340eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9d2992e140ba370d4695a79c6550c8ece7987cafcf94a4fa69708b5346340eb->enter($__internal_f9d2992e140ba370d4695a79c6550c8ece7987cafcf94a4fa69708b5346340eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Equipos list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Categoria</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["equipos"]) || array_key_exists("equipos", $context) ? $context["equipos"] : (function () { throw new Twig_Error_Runtime('Variable "equipos" does not exist.', 16, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["equipo"]) {
            // line 17
            echo "            <tr>
                <td><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("equipo_show", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["equipo"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["equipo"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["equipo"], "nombre", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["equipo"], "categoria", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("equipo_show", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["equipo"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("equipo_edit", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["equipo"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['equipo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("equipo_new");
        echo "\">Create a new equipo</a>
        </li>
    </ul>
";
        
        $__internal_f9d2992e140ba370d4695a79c6550c8ece7987cafcf94a4fa69708b5346340eb->leave($__internal_f9d2992e140ba370d4695a79c6550c8ece7987cafcf94a4fa69708b5346340eb_prof);

        
        $__internal_5cc05d396a06b66e62388b86816e10723b9261932e8678e9b6aa9129f6753211->leave($__internal_5cc05d396a06b66e62388b86816e10723b9261932e8678e9b6aa9129f6753211_prof);

    }

    public function getTemplateName()
    {
        return "equipo/index.html.twig";
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
    <h1>Equipos list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Categoria</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for equipo in equipos %}
            <tr>
                <td><a href=\"{{ path('equipo_show', { 'id': equipo.id }) }}\">{{ equipo.id }}</a></td>
                <td>{{ equipo.nombre }}</td>
                <td>{{ equipo.categoria }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('equipo_show', { 'id': equipo.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('equipo_edit', { 'id': equipo.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('equipo_new') }}\">Create a new equipo</a>
        </li>
    </ul>
{% endblock %}
", "equipo/index.html.twig", "C:\\http\\php\\proy\\app\\Resources\\views\\equipo\\index.html.twig");
    }
}
