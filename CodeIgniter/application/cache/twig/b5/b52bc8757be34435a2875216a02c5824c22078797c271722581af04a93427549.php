<?php

/* megazines/magazinForm.twig */
class __TwigTemplate_decf0be6915c8717dd16f95b0572ee19db365cf0ac0ef699c25381867a21e23a extends Twig_Template
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

<h2> Magazine </h2>
    <form action=\"http://localhost/CodeIgniter/index.php/Magazines/";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["action"]) ? $context["action"] : null), "html", null, true);
        echo "\" method=\"post\">

        <label for=\"name\"> Name of the magazine </label><br/>
            <input type=\"text\" name=\"name\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
        echo "\"> <br/><br/>

        <label for=\"price\"> Price of the magazine </label><br/>
            <input type=\"number\" name=\"price\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["price"]) ? $context["price"] : null), "html", null, true);
        echo "\"><br/><br/>

        <label for=\"kind\"> Kind of the magazine </label><br/>
            <input type=\"text\" name=\"kind\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["kind"]) ? $context["kind"] : null), "html", null, true);
        echo "\"><br/><br/>

        <label for=\"quantity\"> Quantity of the magazine </label><br/>
            <input type=\"text\" name=\"quantity\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["quantity"]) ? $context["quantity"] : null), "html", null, true);
        echo "\"><br/><br/>

        <input type=\"submit\" value=\"Save new magazine\">

    </form>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "megazines/magazinForm.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 21,  47 => 18,  41 => 15,  35 => 12,  29 => 9,  19 => 1,);
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

<h2> Magazine </h2>
    <form action=\"http://localhost/CodeIgniter/index.php/Magazines/{{ action }}\" method=\"post\">

        <label for=\"name\"> Name of the magazine </label><br/>
            <input type=\"text\" name=\"name\" value=\"{{ name }}\"> <br/><br/>

        <label for=\"price\"> Price of the magazine </label><br/>
            <input type=\"number\" name=\"price\" value=\"{{ price }}\"><br/><br/>

        <label for=\"kind\"> Kind of the magazine </label><br/>
            <input type=\"text\" name=\"kind\" value=\"{{ kind }}\"><br/><br/>

        <label for=\"quantity\"> Quantity of the magazine </label><br/>
            <input type=\"text\" name=\"quantity\" value=\"{{ quantity }}\"><br/><br/>

        <input type=\"submit\" value=\"Save new magazine\">

    </form>
</body>
</html>", "megazines/magazinForm.twig", "/home/katrinees/PhpstormProjects/workplace/CodeIgniter/application/views/megazines/magazinForm.twig");
    }
}
