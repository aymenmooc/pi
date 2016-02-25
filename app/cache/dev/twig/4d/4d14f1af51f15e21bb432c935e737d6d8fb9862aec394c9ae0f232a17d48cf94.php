<?php

/* MyAppUserBundle:User:afficherFormateur.html.twig */
class __TwigTemplate_d1739a9090313e2059b152d3cfc403b8ad481cba496d5e17af95068a1b316d61 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MyAppUserBundle:User:dashboard.html.twig", "MyAppUserBundle:User:afficherFormateur.html.twig", 1);
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
    <h1>Promote role </h1>
           
    <table class=\"records_list\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Specialite</th>
                <th>Note</th>
                <th>Imagename</th>
                <th>Updatedat</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 22
            echo "            <tr>
                <td><a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "prenom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "specialite", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "note", array()), "html", null, true);
            echo "</td>
                <td><a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("cvpdf/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "imageName", array()), "html", null, true);
            echo "\" download >";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "imageName", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 29
            if ($this->getAttribute($context["entity"], "updatedAt", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "updatedAt", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>
                <ul>
                    <li>
                        
                        <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">show</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                    </li>
                    
                     <li>
                        <a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("promoteFormateurEnComite", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">promote role</a>
                    </li>
                      <li>
                        <a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ValiderFormateurComite", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">Valider Formateur</a>
                    </li>
                </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "        </tbody>
    </table>

        <ul>
        <li>
            <a href=\"";
        // line 55
        echo $this->env->getExtension('routing')->getPath("user_new");
        echo "\">
                Create a new entry
            </a>
        </li>
    </ul>
    </center>
    ";
    }

    public function getTemplateName()
    {
        return "MyAppUserBundle:User:afficherFormateur.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 55,  127 => 50,  115 => 44,  109 => 41,  102 => 37,  96 => 34,  86 => 29,  79 => 28,  75 => 27,  71 => 26,  67 => 25,  63 => 24,  57 => 23,  54 => 22,  50 => 21,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends "MyAppUserBundle:User:dashboard.html.twig" %}*/
/* */
/* {% block body %}*/
/*     <center>*/
/*     <h1>Promote role </h1>*/
/*            */
/*     <table class="records_list">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Nom</th>*/
/*                 <th>Prenom</th>*/
/*                 <th>Specialite</th>*/
/*                 <th>Note</th>*/
/*                 <th>Imagename</th>*/
/*                 <th>Updatedat</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for entity in entities %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('user_show', { 'id': entity.id }) }}">{{ entity.id }}</a></td>*/
/*                 <td>{{ entity.nom }}</td>*/
/*                 <td>{{ entity.prenom }}</td>*/
/*                 <td>{{ entity.specialite }}</td>*/
/*                 <td>{{ entity.note }}</td>*/
/*                 <td><a href="{{asset('cvpdf/')}}{{entity.imageName }}" download >{{entity.imageName }}</a></td>*/
/*                 <td>{% if entity.updatedAt %}{{ entity.updatedAt|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                 <td>*/
/*                 <ul>*/
/*                     <li>*/
/*                         */
/*                         <a href="{{ path('user_show', { 'id': entity.id }) }}">show</a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="{{ path('user_edit', { 'id': entity.id }) }}">edit</a>*/
/*                     </li>*/
/*                     */
/*                      <li>*/
/*                         <a href="{{ path('promoteFormateurEnComite',{ 'id': entity.id }) }}">promote role</a>*/
/*                     </li>*/
/*                       <li>*/
/*                         <a href="{{ path('ValiderFormateurComite', { 'id': entity.id }) }}">Valider Formateur</a>*/
/*                     </li>*/
/*                 </ul>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*         <ul>*/
/*         <li>*/
/*             <a href="{{ path('user_new') }}">*/
/*                 Create a new entry*/
/*             </a>*/
/*         </li>*/
/*     </ul>*/
/*     </center>*/
/*     {% endblock %}*/
/* */
