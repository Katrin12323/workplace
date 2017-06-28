<?php

/* animalsView/showAllAnimals.twig */
class __TwigTemplate_19123ace6a9b76e3d2608ed1ad2c5b3224ea377956c16dbd89bb399229ebede1 extends Twig_Template
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
        echo "<html xmlns=\"http://www.w3.org/1999/html\">

<head>
    <title> </title>
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
    <script src=\"";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["baseUrl"]) ? $context["baseUrl"] : null), "html", null, true);
        echo "/application/assets/js/animal.js\"></script>
</head>
<body>

<form action=\"http://localhost/CodeIgniter/index.php/Animals/searchAnimal\" method=\"post\">

    <label for=\"nameOfTheType\"> Search by name:  </label> <br/><br>
    <input type=\"text\" name=\"nameOfTheType\"> <br/><br/>


    <label for=\"habitat\"> Search by habitat: </label> <br/><br>
    <input type=\"text\" name=\"habitat\"><br/> <br/>

    <input type=\"submit\" value=\"Search\">
</form>


    <ol>
            ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["zoo"]) ? $context["zoo"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["allAnimals"]) {
            // line 25
            echo "                <li class=\"post-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["allAnimals"], "id", array()), "html", null, true);
            echo "\">
            Type: ";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["allAnimals"], "nameOfTheType", array()), "html", null, true);
            echo ";
            Kind: ";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["allAnimals"], "kind", array()), "html", null, true);
            echo ";
           Name: ";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["allAnimals"], "nameOfTheAnimal", array()), "html", null, true);
            echo ";
            Age: ";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["allAnimals"], "age", array()), "html", null, true);
            echo "<br/>

                <button class=\"post-delete\" post-id=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["allAnimals"], "id", array()), "html", null, true);
            echo "\" > Delete this animal </button>
                ---><a href=\"http://localhost/CodeIgniter/index.php/Animals/updateForm/";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["allAnimals"], "id", array()), "html", null, true);
            echo "\" > Update this animal </a>
                </li><br/>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['allAnimals'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "
    </ol>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "animalsView/showAllAnimals.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 35,  77 => 32,  73 => 31,  68 => 29,  64 => 28,  60 => 27,  56 => 26,  51 => 25,  47 => 24,  26 => 6,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<html xmlns=\"http://www.w3.org/1999/html\">

<head>
    <title> </title>
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
    <script src=\"{{ baseUrl }}/application/assets/js/animal.js\"></script>
</head>
<body>

<form action=\"http://localhost/CodeIgniter/index.php/Animals/searchAnimal\" method=\"post\">

    <label for=\"nameOfTheType\"> Search by name:  </label> <br/><br>
    <input type=\"text\" name=\"nameOfTheType\"> <br/><br/>


    <label for=\"habitat\"> Search by habitat: </label> <br/><br>
    <input type=\"text\" name=\"habitat\"><br/> <br/>

    <input type=\"submit\" value=\"Search\">
</form>


    <ol>
            {% for allAnimals in zoo  %}
                <li class=\"post-{{ allAnimals.id }}\">
            Type: {{ allAnimals.nameOfTheType }};
            Kind: {{ allAnimals.kind }};
           Name: {{ allAnimals.nameOfTheAnimal }};
            Age: {{ allAnimals.age }}<br/>

                <button class=\"post-delete\" post-id=\"{{ allAnimals.id }}\" > Delete this animal </button>
                ---><a href=\"http://localhost/CodeIgniter/index.php/Animals/updateForm/{{ allAnimals.id }}\" > Update this animal </a>
                </li><br/>
            {% endfor %}

    </ol>
</body>
</html>
", "animalsView/showAllAnimals.twig", "/home/katrinees/PhpstormProjects/workplace/CodeIgniter/application/views/animalsView/showAllAnimals.twig");
    }
}
