<?php

/* EasyAdminBundle:default:field_association.html.twig */
class __TwigTemplate_f8a38ccb8b54f403680a3d282005a751ba86eacb584f8aa4e618d2917d6b8290 extends Twig_Template
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
        // line 1
        if (twig_test_iterable((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 2
            echo "    <span class=\"badge\">";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), "html", null, true);
            echo "</span>
";
        } elseif (        // line 3
array_key_exists("link_parameters", $context)) {
            // line 4
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("easyadmin", twig_array_merge((isset($context["link_parameters"]) ? $context["link_parameters"] : $this->getContext($context, "link_parameters")), array("referer" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "requestUri", array())))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('easyadmin_extension')->truncateText($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), "html", null, true);
            echo "</a>
";
        } else {
            // line 6
            echo "    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('easyadmin_extension')->truncateText($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), "html", null, true);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_association.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 6,  28 => 4,  26 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% if value is iterable %}*/
/*     <span class="badge">{{ value|length }}</span>*/
/* {% elseif link_parameters is defined %}*/
/*     <a href="{{ path('easyadmin', link_parameters|merge({ referer: app.request.requestUri })) }}">{{ value|easyadmin_truncate }}</a>*/
/* {% else %}*/
/*     {{ value|easyadmin_truncate }}*/
/* {% endif %}*/
/* */
