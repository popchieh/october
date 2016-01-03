<?php

/* /var/www/html/movier.co/october/themes/demo/partials/explain/plugins.htm */
class __TwigTemplate_9719e4a014e0f2ea51401153947a774dc86f73a6e6bc5697792e8614e4725dce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '__internal_7656c9b09c5dd6b31be693db514aef77a46c52dceb4b4a1f73da3aa65f01fcc2' => array($this, 'block___internal_7656c9b09c5dd6b31be693db514aef77a46c52dceb4b4a1f73da3aa65f01fcc2'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<hr />

<p class=\"lead\">
    <i class=\"icon-copy\"></i> &nbsp; The HTML markup for this example:
</p>
<pre>
";
        // line 7
        echo twig_escape_filter($this->env, (string) $this->renderBlock("__internal_7656c9b09c5dd6b31be693db514aef77a46c52dceb4b4a1f73da3aa65f01fcc2", $context, $blocks));
        // line 9
        echo "</pre>

<hr />

<p class=\"lead\">
    <i class=\"icon-question\"></i> &nbsp; Wait, only one line is needed?
</p>
<p><em>Yes!</em> unlike the <a href=\"";
        // line 16
        echo $this->env->getExtension('CMS')->pageFilter("ajax");
        echo "\">AJAX example</a>, components are simple building blocks that can be used with a small amount of code.</p>
<p>The <code>demoTodo</code> component used here is provided by the plugin called <strong>October\\Demo</strong>, you can find it in the <code>plugins/october/demo</code> folder.</p>";
    }

    // line 7
    public function block___internal_7656c9b09c5dd6b31be693db514aef77a46c52dceb4b4a1f73da3aa65f01fcc2($context, array $blocks = array())
    {
        // line 8
        echo "{% component 'demoTodo' %}";
        echo "
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/movier.co/october/themes/demo/partials/explain/plugins.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 8,  45 => 7,  39 => 16,  30 => 9,  28 => 7,  20 => 1,);
    }
}
/* <hr />*/
/* */
/* <p class="lead">*/
/*     <i class="icon-copy"></i> &nbsp; The HTML markup for this example:*/
/* </p>*/
/* <pre>*/
/* {% filter escape %}*/
/* {{ "{% component 'demoTodo' %}" }}*/
/* {% endfilter %}</pre>*/
/* */
/* <hr />*/
/* */
/* <p class="lead">*/
/*     <i class="icon-question"></i> &nbsp; Wait, only one line is needed?*/
/* </p>*/
/* <p><em>Yes!</em> unlike the <a href="{{ 'ajax'|page }}">AJAX example</a>, components are simple building blocks that can be used with a small amount of code.</p>*/
/* <p>The <code>demoTodo</code> component used here is provided by the plugin called <strong>October\Demo</strong>, you can find it in the <code>plugins/october/demo</code> folder.</p>*/
