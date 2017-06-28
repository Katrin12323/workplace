<?php

/* supermarket/allproducts.twig */
class __TwigTemplate_ce18a09e544227d47b188ba7e167de5cc249434a47db447cb22bdf1ebf26d2b6 extends Twig_Template
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
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
    <script src=\"";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["baseUrl"]) ? $context["baseUrl"] : null), "html", null, true);
        echo "/application/assets/js/supermarket.js\"></script>
</head>
</head>
<body>
<ol>
    ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["dataProducts"]) {
            // line 11
            echo "    <li class= \"post-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["dataProducts"], "id", array()), "html", null, true);
            echo "\">
       Product name: ";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["dataProducts"], "productName", array()), "html", null, true);
            echo ";
        Price: ";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["dataProducts"], "price", array()), "html", null, true);
            echo ";
        Barcode: ";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["dataProducts"], "barcode", array()), "html", null, true);
            echo ";
        Quantity: ";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["dataProducts"], "quantity", array()), "html", null, true);
            echo ";<br/>


        <button class=\"post-delete\" post-id = \"";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["dataProducts"], "id", array()), "html", null, true);
            echo "\">Delete this product </button>
    </li><br>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dataProducts'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "</ol>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "supermarket/allproducts.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 21,  60 => 18,  54 => 15,  50 => 14,  46 => 13,  42 => 12,  37 => 11,  33 => 10,  25 => 5,  19 => 1,);
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
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
    <script src=\"{{ baseUrl }}/application/assets/js/supermarket.js\"></script>
</head>
</head>
<body>
<ol>
    {%  for dataProducts in products %}
    <li class= \"post-{{ dataProducts.id }}\">
       Product name: {{ dataProducts.productName }};
        Price: {{ dataProducts.price }};
        Barcode: {{ dataProducts.barcode }};
        Quantity: {{ dataProducts.quantity }};<br/>


        <button class=\"post-delete\" post-id = \"{{ dataProducts.id }}\">Delete this product </button>
    </li><br>
    {% endfor %}
</ol>
</body>
</html>", "supermarket/allproducts.twig", "/home/katrinees/PhpstormProjects/workplace/CodeIgniter/application/views/supermarket/allproducts.twig");
    }
}
