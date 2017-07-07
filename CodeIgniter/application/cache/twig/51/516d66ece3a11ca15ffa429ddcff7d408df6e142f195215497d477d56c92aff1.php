<?php

/* beautyShop/infoAboutPurchase.twig */
class __TwigTemplate_93fe58aa576a67c3d443c1bc9cef2350bef55f3e14018ad8ac770bcb3db3da51 extends Twig_Template
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
        // line 6
        if (($this->getAttribute((isset($context["amountFromBasket"]) ? $context["amountFromBasket"] : null), "amount", array()) == false)) {
            // line 7
            echo "    You have no items added to your cart.

";
        } else {
            // line 10
            echo "    Your purchase is for:  ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["amountFromBasket"]) ? $context["amountFromBasket"] : null), "amount", array()), "html", null, true);
            echo "
";
        }
        // line 12
        echo "
</body>
</html>

";
    }

    public function getTemplateName()
    {
        return "beautyShop/infoAboutPurchase.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 12,  33 => 10,  28 => 7,  26 => 6,  19 => 1,);
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
{% if  amountFromBasket.amount  == FALSE %}
    You have no items added to your cart.

{% else %}
    Your purchase is for:  {{ amountFromBasket.amount }}
{% endif %}

</body>
</html>

", "beautyShop/infoAboutPurchase.twig", "/home/katrinees/PhpstormProjects/workplace/CodeIgniter/application/views/beautyShop/infoAboutPurchase.twig");
    }
}
