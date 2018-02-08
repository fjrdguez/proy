<?php

/* @Usuarios/Default/login.html.twig */
class __TwigTemplate_001acde79dc25ed1506b9d5e545db436ffa4cd1813a259a1df82f463b8edfd5e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b9674df01cfb937ded6a2bdb60cdd9fb48cc34b30bdd60313e96abb6c6e472f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9674df01cfb937ded6a2bdb60cdd9fb48cc34b30bdd60313e96abb6c6e472f9->enter($__internal_b9674df01cfb937ded6a2bdb60cdd9fb48cc34b30bdd60313e96abb6c6e472f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Usuarios/Default/login.html.twig"));

        $__internal_6b777cbe56b1bb05eb6a5f21334ae56f79df7737a4946505688bdb7a1764f7bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b777cbe56b1bb05eb6a5f21334ae56f79df7737a4946505688bdb7a1764f7bd->enter($__internal_6b777cbe56b1bb05eb6a5f21334ae56f79df7737a4946505688bdb7a1764f7bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Usuarios/Default/login.html.twig"));

        // line 1
        echo "<body>
";
        // line 2
        echo " ";
        // line 4
        echo " ";
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 4, $this->getSourceContext()); })())) {
            // line 5
            echo "<div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 5, $this->getSourceContext()); })()), "messageKey", array()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 5, $this->getSourceContext()); })()), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 7
        echo "
<form action=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
        echo "\" method=\"post\">
    <label for=\"username\">Username:</label>
    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new Twig_Error_Runtime('Variable "last_username" does not exist.', 10, $this->getSourceContext()); })()), "html", null, true);
        echo "\" />

    <label for=\"password\">Password:</label>
    <input type=\"password\" id=\"password\" name=\"_password\" /> ";
        // line 15
        echo "
    <button type=\"submit\">login</button>
</form>
</body>";
        
        $__internal_b9674df01cfb937ded6a2bdb60cdd9fb48cc34b30bdd60313e96abb6c6e472f9->leave($__internal_b9674df01cfb937ded6a2bdb60cdd9fb48cc34b30bdd60313e96abb6c6e472f9_prof);

        
        $__internal_6b777cbe56b1bb05eb6a5f21334ae56f79df7737a4946505688bdb7a1764f7bd->leave($__internal_6b777cbe56b1bb05eb6a5f21334ae56f79df7737a4946505688bdb7a1764f7bd_prof);

    }

    public function getTemplateName()
    {
        return "@Usuarios/Default/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 15,  47 => 10,  42 => 8,  39 => 7,  33 => 5,  30 => 4,  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<body>
{# app/Resources/views/security/login.html.twig #} {# ... you will probably extend your base template, like base.html.twig
#}
 {% if error %}
<div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
{% endif %}

<form action=\"{{ path('login') }}\" method=\"post\">
    <label for=\"username\">Username:</label>
    <input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" />

    <label for=\"password\">Password:</label>
    <input type=\"password\" id=\"password\" name=\"_password\" /> {# If you want to control the URL the user is redirected to on success (more details below)
    <input type=\"hidden\" name=\"_target_path\" value=\"/account\" /> #}

    <button type=\"submit\">login</button>
</form>
</body>", "@Usuarios/Default/login.html.twig", "C:\\http\\php\\proy\\src\\UsuariosBundle\\Resources\\views\\Default\\login.html.twig");
    }
}
