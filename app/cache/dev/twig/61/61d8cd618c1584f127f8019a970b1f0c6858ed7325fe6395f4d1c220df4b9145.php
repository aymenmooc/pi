<?php

/* MyAppUserBundle:User:edit.html.twig */
class __TwigTemplate_01f64daf92ec121ced53226057c59e6e46e08336469070ac2352e902416d3c48 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MyAppUserBundle:User:dashboard.html.twig", "MyAppUserBundle:User:edit.html.twig", 1);
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
        echo "    
    <center>
  <h1>User edit</h1>
    ";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form');
        echo "

        
    
        <a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("user");
        echo "\">
            Back to the list
        </a>
   
  ";
        // line 15
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "

    
    </center>
";
    }

    public function getTemplateName()
    {
        return "MyAppUserBundle:User:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 15,  43 => 11,  36 => 7,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends "MyAppUserBundle:User:dashboard.html.twig" %}*/
/* */
/* {% block body %}*/
/*     */
/*     <center>*/
/*   <h1>User edit</h1>*/
/*     {{ form(edit_form) }}*/
/* */
/*         */
/*     */
/*         <a href="{{ path('user') }}">*/
/*             Back to the list*/
/*         </a>*/
/*    */
/*   {{ form(delete_form) }}*/
/* */
/*     */
/*     </center>*/
/* {% endblock %}*/
/* */
