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

/* modules/contrib/cavalla/modules/cavalla_widgets/modules/cavalla_featurette/templates/paragraph--cavalla-featurette.html.twig */
class __TwigTemplate_6ac987aee72dba93b6c13346c79563ca1c33e0298492338e71b22feaa915e0a9 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 5, "for" => 18];
        $filters = ["escape" => 1, "length" => 18];
        $functions = ["range" => 18];

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
        echo "<section class=\"w-100 d-md-table featurette_bundle\" aria-label=\"Featurettes\" data-animate-featurette=\"";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_featurettes_animation", []), 0, [], "array")), "html", null, true);
        echo "\">
\t<section class=\"featurettes d-md-table-cell align-middle\">
\t\t<section class=\"container\">
\t\t\t<div class=\"row h-100 \">
\t\t\t";
        // line 5
        if ((($context["float_left"] ?? null) == 1)) {
            // line 6
            echo "\t\t   \t\t<div class=\"col-lg-6 col-md-6 featurettes_text my-auto d-md-table-cell align-middle\">
\t\t\t  \t\t<aside class=\"featurette text-center text-md-left\">
\t\t\t\t\t  ";
            // line 8
            if (twig_in_filter(true, $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_featurette_header", []), 0, [], "array"))) {
                // line 9
                echo "\t\t\t\t\t  <h1 class=\"featurette-heading\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_featurette_header", []), 0, [], "array")), "html", null, true);
                echo "</h1>
\t\t\t\t\t  ";
            }
            // line 11
            echo "
\t\t\t\t\t  ";
            // line 12
            if (twig_in_filter(true, $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_featurette_subtext", []), 0, [], "array"))) {
                // line 13
                echo "\t\t\t\t\t  <p class=\"lead\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_featurette_subtext", []), 0, [], "array")), "html", null, true);
                echo "</p>
\t\t\t\t\t  ";
            }
            // line 15
            echo "
\t\t\t\t\t";
            // line 16
            if (twig_in_filter(true, $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_featurette_hyperlink", []), 0, [], "array"))) {
                // line 17
                echo "\t\t\t\t\t\t<section class=\"hyperlinks\">
\t\t\t\t\t  \t";
                // line 18
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(0, twig_length_filter($this->env, $this->getAttribute(($context["content"] ?? null), "field_featurette_hyperlink", []))));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 19
                    echo "            \t\t\t\t";
                    if ( !(null === $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_featurette_hyperlink", []), $context["i"], [], "array"))) {
                        // line 20
                        echo "\t\t\t\t\t\t\t\t<a class=\"btn btn-dark\" href=\"";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_featurette_hyperlink", []), $context["i"], [], "array"), "#url", [], "array")), "html", null, true);
                        echo "\">";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_featurette_hyperlink", []), $context["i"], [], "array"), "#title", [], "array")), "html", null, true);
                        echo "&nbsp;<i class=\"fa fa-arrow-circle-right\"></i></a>
\t\t\t\t\t\t\t";
                    }
                    // line 22
                    echo "\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 23
                echo "\t\t\t\t\t\t</section>
\t\t\t\t\t";
            }
            // line 25
            echo "
\t\t\t\t\t</aside>
\t\t\t\t</div>
\t\t   \t\t<div class=\"col-lg-6 col-md-6 featurettes_image p-3 d-md-table-cell align-middle ";
            // line 28
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["circular_image"] ?? null)), "html", null, true);
            echo "\">
\t\t\t\t   ";
            // line 29
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_featurette_media", [])), "html", null, true);
            echo "
\t\t\t\t</div>
\t\t   ";
        }
        // line 32
        echo "
\t\t\t";
        // line 33
        if ((($context["float_left"] ?? null) == 0)) {
            // line 34
            echo "\t\t\t<div class=\"col-lg-6 col-md-6 featurettes_image p-3 ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["circular_image"] ?? null)), "html", null, true);
            echo "\">
\t\t\t\t";
            // line 35
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_featurette_media", [])), "html", null, true);
            echo "
\t\t\t</div>
\t\t\t <div class=\"col-lg-6 col-md-6 featurettes_text my-auto \">
\t\t\t \t<aside class=\"featurette text-center text-md-left\">
\t\t\t\t\t";
            // line 39
            if (twig_in_filter(true, $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_featurette_header", []), 0, [], "array"))) {
                // line 40
                echo "\t\t\t\t\t<h1 class=\"featurette-heading\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_featurette_header", []), 0, [], "array")), "html", null, true);
                echo "</h1>
\t\t\t\t\t";
            }
            // line 42
            echo "
\t\t\t\t\t";
            // line 43
            if (twig_in_filter(true, $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_featurette_subtext", []), 0, [], "array"))) {
                // line 44
                echo "\t\t\t\t\t<p class=\"lead\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_featurette_subtext", []), 0, [], "array")), "html", null, true);
                echo "</p>
\t\t\t\t\t";
            }
            // line 46
            echo "
\t\t\t\t\t";
            // line 47
            if (twig_in_filter(true, $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_featurette_hyperlink", []), 0, [], "array"))) {
                // line 48
                echo "\t\t\t\t\t\t<section class=\"hyperlinks\">
\t\t\t\t\t  \t";
                // line 49
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(0, twig_length_filter($this->env, $this->getAttribute(($context["content"] ?? null), "field_featurette_hyperlink", []))));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 50
                    echo "            \t\t\t\t";
                    if ( !(null === $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_featurette_hyperlink", []), $context["i"], [], "array"))) {
                        // line 51
                        echo "\t\t\t\t\t\t\t\t<a class=\"btn btn-dark\" href=\"";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_featurette_hyperlink", []), $context["i"], [], "array"), "#url", [], "array")), "html", null, true);
                        echo "\">";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_featurette_hyperlink", []), $context["i"], [], "array"), "#title", [], "array")), "html", null, true);
                        echo "&nbsp;<i class=\"fa fa-arrow-circle-right\"></i></a>
\t\t\t\t\t\t\t";
                    }
                    // line 53
                    echo "\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 54
                echo "\t\t\t\t\t\t</section>
\t\t\t\t\t";
            }
            // line 56
            echo "\t\t\t\t</aside>
\t\t\t </div>
\t\t   ";
        }
        // line 59
        echo "\t\t  </div>
\t\t</section>
\t</section>
</section>
";
    }

    public function getTemplateName()
    {
        return "modules/contrib/cavalla/modules/cavalla_widgets/modules/cavalla_featurette/templates/paragraph--cavalla-featurette.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  210 => 59,  205 => 56,  201 => 54,  195 => 53,  187 => 51,  184 => 50,  180 => 49,  177 => 48,  175 => 47,  172 => 46,  166 => 44,  164 => 43,  161 => 42,  155 => 40,  153 => 39,  146 => 35,  141 => 34,  139 => 33,  136 => 32,  130 => 29,  126 => 28,  121 => 25,  117 => 23,  111 => 22,  103 => 20,  100 => 19,  96 => 18,  93 => 17,  91 => 16,  88 => 15,  82 => 13,  80 => 12,  77 => 11,  71 => 9,  69 => 8,  65 => 6,  63 => 5,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"w-100 d-md-table featurette_bundle\" aria-label=\"Featurettes\" data-animate-featurette=\"{{ content.field_featurettes_animation[0] }}\">
\t<section class=\"featurettes d-md-table-cell align-middle\">
\t\t<section class=\"container\">
\t\t\t<div class=\"row h-100 \">
\t\t\t{%  if float_left == 1 %}
\t\t   \t\t<div class=\"col-lg-6 col-md-6 featurettes_text my-auto d-md-table-cell align-middle\">
\t\t\t  \t\t<aside class=\"featurette text-center text-md-left\">
\t\t\t\t\t  {%  if true in content.field_featurette_header[0] %}
\t\t\t\t\t  <h1 class=\"featurette-heading\">{{ content.field_featurette_header[0] }}</h1>
\t\t\t\t\t  {% endif %}

\t\t\t\t\t  {%  if true in content.field_featurette_subtext[0] %}
\t\t\t\t\t  <p class=\"lead\">{{ content.field_featurette_subtext[0] }}</p>
\t\t\t\t\t  {% endif %}

\t\t\t\t\t{%  if true in content.field_featurette_hyperlink[0] %}
\t\t\t\t\t\t<section class=\"hyperlinks\">
\t\t\t\t\t  \t{% for i in 0..content.field_featurette_hyperlink|length %}
            \t\t\t\t{% if content.field_featurette_hyperlink[i] is not null %}
\t\t\t\t\t\t\t\t<a class=\"btn btn-dark\" href=\"{{ content.field_featurette_hyperlink[i]['#url'] }}\">{{ content.field_featurette_hyperlink[i]['#title'] }}&nbsp;<i class=\"fa fa-arrow-circle-right\"></i></a>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t</section>
\t\t\t\t\t{% endif %}

\t\t\t\t\t</aside>
\t\t\t\t</div>
\t\t   \t\t<div class=\"col-lg-6 col-md-6 featurettes_image p-3 d-md-table-cell align-middle {{ circular_image}}\">
\t\t\t\t   {{ content.field_featurette_media }}
\t\t\t\t</div>
\t\t   {% endif %}

\t\t\t{%  if float_left == 0 %}
\t\t\t<div class=\"col-lg-6 col-md-6 featurettes_image p-3 {{ circular_image}}\">
\t\t\t\t{{ content.field_featurette_media }}
\t\t\t</div>
\t\t\t <div class=\"col-lg-6 col-md-6 featurettes_text my-auto \">
\t\t\t \t<aside class=\"featurette text-center text-md-left\">
\t\t\t\t\t{%  if true in content.field_featurette_header[0] %}
\t\t\t\t\t<h1 class=\"featurette-heading\">{{ content.field_featurette_header[0] }}</h1>
\t\t\t\t\t{% endif %}

\t\t\t\t\t{%  if true in content.field_featurette_subtext[0] %}
\t\t\t\t\t<p class=\"lead\">{{ content.field_featurette_subtext[0] }}</p>
\t\t\t\t\t{% endif %}

\t\t\t\t\t{%  if true in content.field_featurette_hyperlink[0] %}
\t\t\t\t\t\t<section class=\"hyperlinks\">
\t\t\t\t\t  \t{% for i in 0..content.field_featurette_hyperlink|length %}
            \t\t\t\t{% if content.field_featurette_hyperlink[i] is not null %}
\t\t\t\t\t\t\t\t<a class=\"btn btn-dark\" href=\"{{ content.field_featurette_hyperlink[i]['#url'] }}\">{{ content.field_featurette_hyperlink[i]['#title'] }}&nbsp;<i class=\"fa fa-arrow-circle-right\"></i></a>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t</section>
\t\t\t\t\t{% endif %}
\t\t\t\t</aside>
\t\t\t </div>
\t\t   {% endif %}
\t\t  </div>
\t\t</section>
\t</section>
</section>
", "modules/contrib/cavalla/modules/cavalla_widgets/modules/cavalla_featurette/templates/paragraph--cavalla-featurette.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/maximumcommunity.com/modules/contrib/cavalla/modules/cavalla_widgets/modules/cavalla_featurette/templates/paragraph--cavalla-featurette.html.twig");
    }
}
