<?php

/* /var/www/html/movier.co/october/themes/demo/partials/calcresult.htm */
class __TwigTemplate_791c876b6e2aabdaad73a82b2de5ec93f4a40cfa3e7914d093e25783e0035ce2 extends Twig_Template
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
        if ((isset($context["result"]) ? $context["result"] : null)) {
            // line 2
            echo "    <span class=\"lead\">
        The result is <span class=\"label label-success\">";
            // line 3
            echo twig_escape_filter($this->env, (isset($context["result"]) ? $context["result"] : null), "html", null, true);
            echo "</span>
    </span>
";
        } else {
            // line 6
            echo "    <span class=\"text-muted\">
        Click the <em>Calculate</em> button to find the answer.
    </span>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/html/movier.co/october/themes/demo/partials/calcresult.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 6,  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% if result %}*/
/*     <span class="lead">*/
/*         The result is <span class="label label-success">{{ result }}</span>*/
/*     </span>*/
/* {% else %}*/
/*     <span class="text-muted">*/
/*         Click the <em>Calculate</em> button to find the answer.*/
/*     </span>*/
/* {% endif %}*/
