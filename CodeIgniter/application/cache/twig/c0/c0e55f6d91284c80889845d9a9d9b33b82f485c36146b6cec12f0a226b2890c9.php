<?php

/* seachedMagazines.twig */
class __TwigTemplate_b68bafe4e40619bb350c516d964fc2f0a8aa76cf9f4f279790ca235cb2d484d5 extends Twig_Template
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
        echo "<html>
<head>
    <title> </title>
</head>

<body>
";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["magazine"]) ? $context["magazine"] : null), "name", array()), "html", null, true);
        echo " </br>
";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["magazine"]) ? $context["magazine"] : null), "price", array()), "html", null, true);
        echo " </br>
";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["magazine"]) ? $context["magazine"] : null), "kind", array()), "html", null, true);
        echo " </br>
";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["magazine"]) ? $context["magazine"] : null), "quantity", array()), "html", null, true);
        echo " </br>

</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "seachedMagazines.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 10,  35 => 9,  31 => 8,  27 => 7,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<html>
<head>
    <title> </title>
</head>

<body>
{{ magazine.name }} </br>
{{ magazine.price }} </br>
{{ magazine.kind }} </br>
{{ magazine.quantity }} </br>

</body>
</html>
", "seachedMagazines.twig", "/home/katrinees/PhpstormProjects/workplace/CodeIgniter/application/views/seachedMagazines.twig");
    }
}
