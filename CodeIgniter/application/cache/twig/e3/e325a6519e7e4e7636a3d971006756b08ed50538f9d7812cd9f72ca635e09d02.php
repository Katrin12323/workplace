<?php

/* studentsView/allStudents.twig */
class __TwigTemplate_8927ee76f3c989b121cd6278c37d9daf447b7a9af02f92a75f63474ef1279fc2 extends Twig_Template
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
        echo "/application/assets/js/students.js\"></script>
</head>

<body>
<ol>
    ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["student"]) ? $context["student"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["allStudents"]) {
            // line 11
            echo "        <li class=\"student-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["allStudents"], "id", array()), "html", null, true);
            echo "\">
            First name: ";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["allStudents"], "firstName", array()), "html", null, true);
            echo ";
            Last name: ";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["allStudents"], "lastName", array()), "html", null, true);
            echo ";
            Class: ";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["allStudents"], "class", array()), "html", null, true);
            echo ";
            Success: ";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["allStudents"], "success", array()), "html", null, true);
            echo ";<br>

            <button class=\"delete-button\" student-id=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["allStudents"], "id", array()), "html", null, true);
            echo "\"> Delete the information for student </button>
    </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['allStudents'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "
</ol>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "studentsView/allStudents.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 20,  59 => 17,  54 => 15,  50 => 14,  46 => 13,  42 => 12,  37 => 11,  33 => 10,  25 => 5,  19 => 1,);
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
    <script src=\"{{ baseUrl }}/application/assets/js/students.js\"></script>
</head>

<body>
<ol>
    {% for allStudents in student %}
        <li class=\"student-{{ allStudents.id }}\">
            First name: {{ allStudents.firstName }};
            Last name: {{ allStudents.lastName }};
            Class: {{ allStudents.class }};
            Success: {{ allStudents.success }};<br>

            <button class=\"delete-button\" student-id=\"{{ allStudents.id }}\"> Delete the information for student </button>
    </li>
    {% endfor %}

</ol>
</body>
</html>", "studentsView/allStudents.twig", "/home/katrinees/PhpstormProjects/workplace/CodeIgniter/application/views/studentsView/allStudents.twig");
    }
}
