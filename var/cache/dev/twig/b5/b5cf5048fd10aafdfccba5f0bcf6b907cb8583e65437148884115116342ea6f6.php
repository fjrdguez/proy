<?php

/* equipo/show.html.twig */
class __TwigTemplate_9a4b00d50521e7326ed46c9097b1d8e43580fc4a9a9522bd7602b6b6a9b0c196 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "equipo/show.html.twig", 1);
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
        $__internal_0b2df414130b761204b5daa76ff955558aff519602b49d2a3625abca0561757f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b2df414130b761204b5daa76ff955558aff519602b49d2a3625abca0561757f->enter($__internal_0b2df414130b761204b5daa76ff955558aff519602b49d2a3625abca0561757f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "equipo/show.html.twig"));

        $__internal_e8f689c776da056b60ff72375174e240fdb6869e1990d8e295c4e3879ad5a72b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8f689c776da056b60ff72375174e240fdb6869e1990d8e295c4e3879ad5a72b->enter($__internal_e8f689c776da056b60ff72375174e240fdb6869e1990d8e295c4e3879ad5a72b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "equipo/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0b2df414130b761204b5daa76ff955558aff519602b49d2a3625abca0561757f->leave($__internal_0b2df414130b761204b5daa76ff955558aff519602b49d2a3625abca0561757f_prof);

        
        $__internal_e8f689c776da056b60ff72375174e240fdb6869e1990d8e295c4e3879ad5a72b->leave($__internal_e8f689c776da056b60ff72375174e240fdb6869e1990d8e295c4e3879ad5a72b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6582e98804b9cf0452c99c145dccb594f465006d77058a71ffbde4b0c944f78f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6582e98804b9cf0452c99c145dccb594f465006d77058a71ffbde4b0c944f78f->enter($__internal_6582e98804b9cf0452c99c145dccb594f465006d77058a71ffbde4b0c944f78f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_63a986543ff744e17c82b466862a8cda6c2f3b6dbb699a8b4e973f4216a88423 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63a986543ff744e17c82b466862a8cda6c2f3b6dbb699a8b4e973f4216a88423->enter($__internal_63a986543ff744e17c82b466862a8cda6c2f3b6dbb699a8b4e973f4216a88423_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Equipo</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["equipo"]) || array_key_exists("equipo", $context) ? $context["equipo"] : (function () { throw new Twig_Error_Runtime('Variable "equipo" does not exist.', 10, $this->getSourceContext()); })()), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nombre</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["equipo"]) || array_key_exists("equipo", $context) ? $context["equipo"] : (function () { throw new Twig_Error_Runtime('Variable "equipo" does not exist.', 14, $this->getSourceContext()); })()), "nombre", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Categoria</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["equipo"]) || array_key_exists("equipo", $context) ? $context["equipo"] : (function () { throw new Twig_Error_Runtime('Variable "equipo" does not exist.', 18, $this->getSourceContext()); })()), "categoria", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("equipo_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("equipo_edit", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["equipo"]) || array_key_exists("equipo", $context) ? $context["equipo"] : (function () { throw new Twig_Error_Runtime('Variable "equipo" does not exist.', 28, $this->getSourceContext()); })()), "id", array()))), "html", null, true);
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
        
        $__internal_63a986543ff744e17c82b466862a8cda6c2f3b6dbb699a8b4e973f4216a88423->leave($__internal_63a986543ff744e17c82b466862a8cda6c2f3b6dbb699a8b4e973f4216a88423_prof);

        
        $__internal_6582e98804b9cf0452c99c145dccb594f465006d77058a71ffbde4b0c944f78f->leave($__internal_6582e98804b9cf0452c99c145dccb594f465006d77058a71ffbde4b0c944f78f_prof);

    }

    public function getTemplateName()
    {
        return "equipo/show.html.twig";
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
    <h1>Equipo</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ equipo.id }}</td>
            </tr>
            <tr>
                <th>Nombre</th>
                <td>{{ equipo.nombre }}</td>
            </tr>
            <tr>
                <th>Categoria</th>
                <td>{{ equipo.categoria }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('equipo_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('equipo_edit', { 'id': equipo.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "equipo/show.html.twig", "C:\\http\\php\\proy\\app\\Resources\\views\\equipo\\show.html.twig");
    }
}
