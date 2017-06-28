<?php

/* shoesShop/allShoes.twig */
class __TwigTemplate_f98d6ce2c8fc5bf7bc13bbbd5cdbe75e63739a62217c9aa2e09826efd52e0dfa extends Twig_Template
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
    <title> all shoes</title>
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
    <script src=\"";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["baseUrl"]) ? $context["baseUrl"] : null), "html", null, true);
        echo "/application/assets/js/shoesShop.js\"></script>
</head>

<body>
<form action=\"http://localhost/CodeIgniter/index.php/ShoesShop/searchShoes\" method=\"post\">

    <label for=\"type\"> Search by type </label>
    <input type=\"text\" name=\"type\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : null), "html", null, true);
        echo "\">
    <input type=\"submit\" value=\"Search\">
</form>

    <ol>
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["shoes"]) ? $context["shoes"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["allShoes"]) {
            // line 18
            echo "        <li class=\"shoesShop-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["allShoes"], "id", array()), "html", null, true);
            echo "\">
            ";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["allShoes"], "brand", array()), "html", null, true);
            echo ",
        type: ";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["allShoes"], "type", array()), "html", null, true);
            echo ",
        size: ";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["allShoes"], "size", array()), "html", null, true);
            echo ",
        color: ";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["allShoes"], "color", array()), "html", null, true);
            echo ",
        price: ";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["allShoes"], "price", array()), "html", null, true);
            echo " \$,
        quantity: ";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["allShoes"], "quantity", array()), "html", null, true);
            echo "
            ---><button class=\"delete-button\" shoesShop-id = \"";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["allShoes"], "id", array()), "html", null, true);
            echo "\">Delete this product </button>
            ---><a href=\"http://localhost/CodeIgniter/index.php/ShoesShop/updateForm/";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["allShoes"], "id", array()), "html", null, true);
            echo "\"> Update this product </a>
        </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['allShoes'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "    </ol>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "shoesShop/allShoes.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 29,  80 => 26,  76 => 25,  72 => 24,  68 => 23,  64 => 22,  60 => 21,  56 => 20,  52 => 19,  47 => 18,  43 => 17,  35 => 12,  25 => 5,  19 => 1,);
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
    <title> all shoes</title>
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
    <script src=\"{{ baseUrl }}/application/assets/js/shoesShop.js\"></script>
</head>

<body>
<form action=\"http://localhost/CodeIgniter/index.php/ShoesShop/searchShoes\" method=\"post\">

    <label for=\"type\"> Search by type </label>
    <input type=\"text\" name=\"type\" value=\"{{ type }}\">
    <input type=\"submit\" value=\"Search\">
</form>

    <ol>
        {% for allShoes in shoes %}
        <li class=\"shoesShop-{{ allShoes.id }}\">
            {{ allShoes.brand }},
        type: {{ allShoes.type }},
        size: {{ allShoes.size }},
        color: {{ allShoes.color }},
        price: {{ allShoes.price }} \$,
        quantity: {{ allShoes.quantity }}
            ---><button class=\"delete-button\" shoesShop-id = \"{{ allShoes.id }}\">Delete this product </button>
            ---><a href=\"http://localhost/CodeIgniter/index.php/ShoesShop/updateForm/{{ allShoes.id }}\"> Update this product </a>
        </li>
        {% endfor %}
    </ol>
</body>
</html>", "shoesShop/allShoes.twig", "/home/katrinees/PhpstormProjects/workplace/CodeIgniter/application/views/shoesShop/allShoes.twig");
    }
}
