<?php

/* beautyShop/allProd.twig */
class __TwigTemplate_6c40f3d848ed12302c9f706e3974fdc15b2fe90163d4234841b7c65ba3f5ab01 extends Twig_Template
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
    <title> All Beauty Products </title>
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
    <script src=\"";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["baseUrl"]) ? $context["baseUrl"] : null), "html", null, true);
        echo "/application/assets/js/beautyShop.js\"></script>
</head>

<body>
<h2> All beauty products </h2>

<div>BASKET AMOUNT: ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["basket"]) ? $context["basket"] : null), "amount", array()), "html", null, true);
        echo "</div>
</div> <br/>
<form action=\"http://localhost/CodeIgniter/index.php/BeautyShop/searchProduct\" method=\"post\">

    <label for=\"brand\">Search product by brand:  </label><br/>
    <input type=\"text\" name=\"brand\">

    <input type=\"submit\" value=\"Search\">
</form> <br/>


<ol>


    ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["beautyProducts"]) ? $context["beautyProducts"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["allBeautyProducts"]) {
            // line 26
            echo "        <li class=\"post-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["allBeautyProducts"], "id", array()), "html", null, true);
            echo "\">
            ";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["allBeautyProducts"], "brand", array()), "html", null, true);
            echo "
            ";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["allBeautyProducts"], "kind", array()), "html", null, true);
            echo ",
            ";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["allBeautyProducts"], "name", array()), "html", null, true);
            echo "
            Collection: ";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["allBeautyProducts"], "collection", array()), "html", null, true);
            echo "
            Price: ";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["allBeautyProducts"], "price", array()), "html", null, true);
            echo "
            Quantity: ";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["allBeautyProducts"], "quantity", array()), "html", null, true);
            echo "

            <form action=\"http://localhost/CodeIgniter/index.php/BeautyShopBasket/addToBasket\" method=\"POST\">
                <input type= \"hidden\" name= \"productId\" value= \"";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["allBeautyProducts"], "id", array()), "html", null, true);
            echo "\"/>
                <input type= \"submit\" value= \"Buy\"> <br/>
             </form>
             <button class=\"post-delete\" post-id = \"";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["allBeautyProducts"], "id", array()), "html", null, true);
            echo "\"> Delete this product </button>
            <a href=\"http://localhost/CodeIgniter/index.php/BeautyShop/updateForm/";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["allBeautyProducts"], "id", array()), "html", null, true);
            echo "\"> Update this product </a>


        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['allBeautyProducts'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo " <br/> <br/>
</ol>

</body>

</html>";
    }

    public function getTemplateName()
    {
        return "beautyShop/allProd.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 43,  96 => 39,  92 => 38,  86 => 35,  80 => 32,  76 => 31,  72 => 30,  68 => 29,  64 => 28,  60 => 27,  55 => 26,  51 => 25,  34 => 11,  25 => 5,  19 => 1,);
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
    <title> All Beauty Products </title>
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
    <script src=\"{{ baseUrl }}/application/assets/js/beautyShop.js\"></script>
</head>

<body>
<h2> All beauty products </h2>

<div>BASKET AMOUNT: {{ basket.amount }}</div>
</div> <br/>
<form action=\"http://localhost/CodeIgniter/index.php/BeautyShop/searchProduct\" method=\"post\">

    <label for=\"brand\">Search product by brand:  </label><br/>
    <input type=\"text\" name=\"brand\">

    <input type=\"submit\" value=\"Search\">
</form> <br/>


<ol>


    {% for allBeautyProducts in beautyProducts %}
        <li class=\"post-{{ allBeautyProducts.id }}\">
            {{ allBeautyProducts.brand }}
            {{ allBeautyProducts.kind }},
            {{ allBeautyProducts.name }}
            Collection: {{ allBeautyProducts.collection }}
            Price: {{ allBeautyProducts.price }}
            Quantity: {{ allBeautyProducts.quantity }}

            <form action=\"http://localhost/CodeIgniter/index.php/BeautyShopBasket/addToBasket\" method=\"POST\">
                <input type= \"hidden\" name= \"productId\" value= \"{{ allBeautyProducts.id }}\"/>
                <input type= \"submit\" value= \"Buy\"> <br/>
             </form>
             <button class=\"post-delete\" post-id = \"{{ allBeautyProducts.id }}\"> Delete this product </button>
            <a href=\"http://localhost/CodeIgniter/index.php/BeautyShop/updateForm/{{ allBeautyProducts.id }}\"> Update this product </a>


        </li>
    {% endfor %} <br/> <br/>
</ol>

</body>

</html>", "beautyShop/allProd.twig", "/home/katrinees/PhpstormProjects/workplace/CodeIgniter/application/views/beautyShop/allProd.twig");
    }
}
