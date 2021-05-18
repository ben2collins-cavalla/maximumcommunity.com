<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* modules/contrib/cavalla/modules/cavalla_widgets/modules/cavalla_accordion/templates/paragraph--cavalla-accordion.html.twig */
class __TwigTemplate_e8f841266b3713ad7001fa2cf451a375e959259a5d817feeb2fdae4b9dce38f1 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 3, "for" => 11];
        $filters = ["escape" => 4, "length" => 11];
        $functions = ["range" => 11];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['escape', 'length'],
                ['range']
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<div class=\"container my-5 accordion\">
  <section class=\"text-center\">
   ";
        // line 3
        if (twig_in_filter(true, $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_cavalla_accordion_title", []), 0, [], "array"))) {
            // line 4
            echo "      <h1>";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_cavalla_accordion_title", []), 0, [], "array")), "html", null, true);
            echo "</h1>
    ";
        }
        // line 6
        echo "
    ";
        // line 7
        if (twig_in_filter(true, $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_cavalla_accordion_subtext", []), 0, [], "array"))) {
            // line 8
            echo "      <p>";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_cavalla_accordion_subtext", []), 0, [], "array")), "html", null, true);
            echo "</p>
    ";
        }
        // line 10
        echo "  </section>
  ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, twig_length_filter($this->env, $this->getAttribute(($context["content"] ?? null), "field_cavalla_accordion_field", []))));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 12
            echo "    ";
            if ( !(null === $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_cavalla_accordion_field", []), $context["i"], [], "array"))) {
                // line 13
                echo "      ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_cavalla_accordion_field", []), $context["i"], [], "array")), "html", null, true);
                echo "
    ";
            }
            // line 15
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "modules/contrib/cavalla/modules/cavalla_widgets/modules/cavalla_accordion/templates/paragraph--cavalla-accordion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 16,  94 => 15,  88 => 13,  85 => 12,  81 => 11,  78 => 10,  72 => 8,  70 => 7,  67 => 6,  61 => 4,  59 => 3,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container my-5 accordion\">
  <section class=\"text-center\">
   {%  if true in content.field_cavalla_accordion_title[0] %}
      <h1>{{ content.field_cavalla_accordion_title[0] }}</h1>
    {% endif %}

    {%  if true in content.field_cavalla_accordion_subtext[0] %}
      <p>{{ content.field_cavalla_accordion_subtext[0] }}</p>
    {% endif %}
  </section>
  {% for i in 0..content.field_cavalla_accordion_field|length %}
    {% if content.field_cavalla_accordion_field[i] is not null %}
      {{ content.field_cavalla_accordion_field[i] }}
    {% endif %}
  {% endfor %}
</div>
", "modules/contrib/cavalla/modules/cavalla_widgets/modules/cavalla_accordion/templates/paragraph--cavalla-accordion.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/maximumcommunity.com/modules/contrib/cavalla/modules/cavalla_widgets/modules/cavalla_accordion/templates/paragraph--cavalla-accordion.html.twig");
    }
}
