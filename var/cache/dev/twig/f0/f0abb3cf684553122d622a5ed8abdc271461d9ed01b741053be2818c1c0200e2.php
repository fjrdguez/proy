<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_9099d2891fe5e743dc204c71816e6090b7bb1b60438a86d3dca559180f3aea48 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_11f2d040573ee647b6177998f26fb7d6754dbb5130d2e60b0de02bcd47479abe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11f2d040573ee647b6177998f26fb7d6754dbb5130d2e60b0de02bcd47479abe->enter($__internal_11f2d040573ee647b6177998f26fb7d6754dbb5130d2e60b0de02bcd47479abe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_e7aef54211ce4a7f9e61b60d48e6225bfb71dc3102a5b7a095f9a2d67950dd7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7aef54211ce4a7f9e61b60d48e6225bfb71dc3102a5b7a095f9a2d67950dd7d->enter($__internal_e7aef54211ce4a7f9e61b60d48e6225bfb71dc3102a5b7a095f9a2d67950dd7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_11f2d040573ee647b6177998f26fb7d6754dbb5130d2e60b0de02bcd47479abe->leave($__internal_11f2d040573ee647b6177998f26fb7d6754dbb5130d2e60b0de02bcd47479abe_prof);

        
        $__internal_e7aef54211ce4a7f9e61b60d48e6225bfb71dc3102a5b7a095f9a2d67950dd7d->leave($__internal_e7aef54211ce4a7f9e61b60d48e6225bfb71dc3102a5b7a095f9a2d67950dd7d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_1fa31409a41bdd381a17098cf5a1b7785245844b0d5d27c2865a8f835fd7c9ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1fa31409a41bdd381a17098cf5a1b7785245844b0d5d27c2865a8f835fd7c9ee->enter($__internal_1fa31409a41bdd381a17098cf5a1b7785245844b0d5d27c2865a8f835fd7c9ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f92d8ac45b0ca5ebe55b9a89d83943716deb415545c01dce35c9036f7bc4cb01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f92d8ac45b0ca5ebe55b9a89d83943716deb415545c01dce35c9036f7bc4cb01->enter($__internal_f92d8ac45b0ca5ebe55b9a89d83943716deb415545c01dce35c9036f7bc4cb01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_f92d8ac45b0ca5ebe55b9a89d83943716deb415545c01dce35c9036f7bc4cb01->leave($__internal_f92d8ac45b0ca5ebe55b9a89d83943716deb415545c01dce35c9036f7bc4cb01_prof);

        
        $__internal_1fa31409a41bdd381a17098cf5a1b7785245844b0d5d27c2865a8f835fd7c9ee->leave($__internal_1fa31409a41bdd381a17098cf5a1b7785245844b0d5d27c2865a8f835fd7c9ee_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_e93b79a861712a56aef1072cf46375a17254b1aecdbe4d44b0d61591da398d3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e93b79a861712a56aef1072cf46375a17254b1aecdbe4d44b0d61591da398d3b->enter($__internal_e93b79a861712a56aef1072cf46375a17254b1aecdbe4d44b0d61591da398d3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_c617568b1963d02d42ea54419b76ff3d59bbd8a6e2a1042aaa24a283fa50ccee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c617568b1963d02d42ea54419b76ff3d59bbd8a6e2a1042aaa24a283fa50ccee->enter($__internal_c617568b1963d02d42ea54419b76ff3d59bbd8a6e2a1042aaa24a283fa50ccee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_c617568b1963d02d42ea54419b76ff3d59bbd8a6e2a1042aaa24a283fa50ccee->leave($__internal_c617568b1963d02d42ea54419b76ff3d59bbd8a6e2a1042aaa24a283fa50ccee_prof);

        
        $__internal_e93b79a861712a56aef1072cf46375a17254b1aecdbe4d44b0d61591da398d3b->leave($__internal_e93b79a861712a56aef1072cf46375a17254b1aecdbe4d44b0d61591da398d3b_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_8d8e84d5540700c6eae677116339c6b14fe3f43f95e9956db00da1c209d5a956 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d8e84d5540700c6eae677116339c6b14fe3f43f95e9956db00da1c209d5a956->enter($__internal_8d8e84d5540700c6eae677116339c6b14fe3f43f95e9956db00da1c209d5a956_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2e5de0eee31ba2c0592e4726e3eeca9295302182b1393f77fb27d5d438e96b3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e5de0eee31ba2c0592e4726e3eeca9295302182b1393f77fb27d5d438e96b3c->enter($__internal_2e5de0eee31ba2c0592e4726e3eeca9295302182b1393f77fb27d5d438e96b3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_2e5de0eee31ba2c0592e4726e3eeca9295302182b1393f77fb27d5d438e96b3c->leave($__internal_2e5de0eee31ba2c0592e4726e3eeca9295302182b1393f77fb27d5d438e96b3c_prof);

        
        $__internal_8d8e84d5540700c6eae677116339c6b14fe3f43f95e9956db00da1c209d5a956->leave($__internal_8d8e84d5540700c6eae677116339c6b14fe3f43f95e9956db00da1c209d5a956_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "C:\\http\\proy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\layout.html.twig");
    }
}
