<?php

/* MyAppUserBundle:User:show.html.twig */
class __TwigTemplate_7f7905c2a1a15b62c9dd93df35aefa1c198b5af78401027c8215c7f4839388fd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MyAppUserBundle:User:dashboard.html.twig", "MyAppUserBundle:User:show.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MyAppUserBundle:User:dashboard.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <center>
    <h1>User</h1>

    <table class=\"record_properties\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nom", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Prenom</th>
                <td>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "prenom", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Specialite</th>
                <td>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "specialite", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Note</th>
                <td>";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "note", array()), "html", null, true);
        echo "</td>
            </tr>
           ";
        // line 37
        echo "        </tbody>
    </table>

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 42
        echo $this->env->getExtension('routing')->getPath("user");
        echo "\">
            Back to the list
        </a>
    </li>
   ";
        // line 51
        echo "    <li>";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
</ul>
    </center>
";
    }

    public function getTemplateName()
    {
        return "MyAppUserBundle:User:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 51,  80 => 42,  73 => 37,  68 => 27,  61 => 23,  54 => 19,  47 => 15,  40 => 11,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends "MyAppUserBundle:User:dashboard.html.twig" %}*/
/* */
/* {% block body %}*/
/*     <center>*/
/*     <h1>User</h1>*/
/* */
/*     <table class="record_properties">*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ entity.id }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Nom</th>*/
/*                 <td>{{ entity.nom }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Prenom</th>*/
/*                 <td>{{ entity.prenom }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Specialite</th>*/
/*                 <td>{{ entity.specialite }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Note</th>*/
/*                 <td>{{ entity.note }}</td>*/
/*             </tr>*/
/*            {# <tr>*/
/*                 <th>Imagename</th>*/
/*                 <td>{{ entity.imageName }}</td>*/
/*             </tr> */
/*             <tr>*/
/*                 <th>Updatedat</th>*/
/*                 <td>{{ entity.updatedAt|date('Y-m-d H:i:s') }}</td>*/
/*             </tr> #}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*         <ul class="record_actions">*/
/*     <li>*/
/*         <a href="{{ path('user') }}">*/
/*             Back to the list*/
/*         </a>*/
/*     </li>*/
/*    {# <li>*/
/*         <a href="{{ path('user_edit', { 'id': entity.id }) }}">*/
/*             Edit*/
/*         </a>*/
/*     </li> #}*/
/*     <li>{{ form(delete_form) }}</li>*/
/* </ul>*/
/*     </center>*/
/* {% endblock %}*/
/* */
