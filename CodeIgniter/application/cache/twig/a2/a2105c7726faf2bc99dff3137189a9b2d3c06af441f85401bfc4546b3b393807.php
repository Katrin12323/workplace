<?php

/* megazines/allMagazines.twig */
class __TwigTemplate_6b1e32e4d1f75e87e5c1aa009d391e7bc4e6fc999c2ee503911cd018f2e1b28a extends Twig_Template
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
<h2>Search</h2>
<form action=\"http://localhost/CodeIgniter/index.php/Magazines/searchMagazines\" method=\"post\">

    <label for=\"name\">Search by name  </label><br/>
    <input type=\"text\" name=\"name\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
        echo "\"> <br/><br/>

    <input type=\"submit\" value=\"search\">
</form>
        <ol>
            ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["magazine"]) ? $context["magazine"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["allMagazines"]) {
            // line 17
            echo "                <li> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["allMagazines"], "name", array()), "html", null, true);
            echo " </li>
                     ";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["allMagazines"], "price", array()), "html", null, true);
            echo " \$
              kind:  ";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["allMagazines"], "kind", array()), "html", null, true);
            echo "
          quantity:  ";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["allMagazines"], "quantity", array()), "html", null, true);
            echo "
            --- <a href=\"http://localhost/CodeIgniter/index.php/Magazines/deleteMagazine/";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["allMagazines"], "id", array()), "html", null, true);
            echo "\"> DELETE </a>
            --- <a href=\"http://localhost/CodeIgniter/index.php/Magazines/updateForm/";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["allMagazines"], "id", array()), "html", null, true);
            echo "\"> UPDATE </a>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['allMagazines'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "            </ol>
</body>

</html>";
    }

    public function getTemplateName()
    {
        return "megazines/allMagazines.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 24,  64 => 22,  60 => 21,  56 => 20,  52 => 19,  48 => 18,  43 => 17,  39 => 16,  31 => 11,  19 => 1,);
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
<h2>Search</h2>
<form action=\"http://localhost/CodeIgniter/index.php/Magazines/searchMagazines\" method=\"post\">

    <label for=\"name\">Search by name  </label><br/>
    <input type=\"text\" name=\"name\" value=\"{{ name }}\"> <br/><br/>

    <input type=\"submit\" value=\"search\">
</form>
        <ol>
            {% for allMagazines in magazine %}
                <li> {{ allMagazines.name }} </li>
                     {{ allMagazines.price }} \$
              kind:  {{ allMagazines.kind }}
          quantity:  {{allMagazines.quantity }}
            --- <a href=\"http://localhost/CodeIgniter/index.php/Magazines/deleteMagazine/{{ allMagazines.id }}\"> DELETE </a>
            --- <a href=\"http://localhost/CodeIgniter/index.php/Magazines/updateForm/{{ allMagazines.id }}\"> UPDATE </a>
            {% endfor %}
            </ol>
</body>

</html>", "megazines/allMagazines.twig", "/home/katrinees/PhpstormProjects/workplace/CodeIgniter/application/views/megazines/allMagazines.twig");
    }
}
