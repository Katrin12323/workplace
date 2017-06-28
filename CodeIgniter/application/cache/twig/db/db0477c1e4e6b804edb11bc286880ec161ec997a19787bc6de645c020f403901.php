<?php

/* deedRegisterView/showDeeds.twig */
class __TwigTemplate_060573e8fb508d22cc17188ca1b7b16817e5cb9ad402c745235d1ebb6675ceb2 extends Twig_Template
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
        echo "/application/assets/js/deeds.js\"></script>
</head>

<body>
<form action=\"http://localhost/CodeIgniter/index.php/Deeds/searchDeeds\" method=\"POST\">

    <label for=\"personalNumber\">Personal Number: </label><br/>
    <input type=\"text\" name=\"personalNumber\"> <br/><br/>

    <input type=\"submit\" value=\"Search\">
</form>
    <ol>

        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["deeds"]) ? $context["deeds"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["deed"]) {
            // line 19
            echo "        <li class=\"post-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["deed"], "id", array()), "html", null, true);
            echo "\">
            Deed Number: ";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["deed"], "deedNumber", array()), "html", null, true);
            echo ";
           Deed act number: ";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["deed"], "actNumber", array()), "html", null, true);
            echo "

            ---> <button class=\"post-delete\" post-id=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["deed"], "id", array()), "html", null, true);
            echo "\"> Delete this Deed </button>
            ---> <a href=\"http://localhost/CodeIgniter/index.php/Deeds/editForm/";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["deed"], "id", array()), "html", null, true);
            echo "\"> Edit the info for Deed </a>
            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['deed'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "    </ol>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "deedRegisterView/showDeeds.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 27,  63 => 24,  59 => 23,  54 => 21,  50 => 20,  45 => 19,  41 => 18,  25 => 5,  19 => 1,);
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
    <script src=\"{{ baseUrl }}/application/assets/js/deeds.js\"></script>
</head>

<body>
<form action=\"http://localhost/CodeIgniter/index.php/Deeds/searchDeeds\" method=\"POST\">

    <label for=\"personalNumber\">Personal Number: </label><br/>
    <input type=\"text\" name=\"personalNumber\"> <br/><br/>

    <input type=\"submit\" value=\"Search\">
</form>
    <ol>

        {% for deed in deeds %}
        <li class=\"post-{{ deed.id }}\">
            Deed Number: {{ deed.deedNumber }};
           Deed act number: {{ deed.actNumber }}

            ---> <button class=\"post-delete\" post-id=\"{{ deed.id }}\"> Delete this Deed </button>
            ---> <a href=\"http://localhost/CodeIgniter/index.php/Deeds/editForm/{{ deed.id }}\"> Edit the info for Deed </a>
            </li>
        {% endfor %}
    </ol>
</body>
</html>
", "deedRegisterView/showDeeds.twig", "/home/katrinees/PhpstormProjects/workplace/CodeIgniter/application/views/deedRegisterView/showDeeds.twig");
    }
}
