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

/* modules/contrib/cavalla/modules/cavalla_widgets/modules/cavalla_accordion/templates/paragraph--cavalla-accordion-field.html.twig */
class __TwigTemplate_42ff5f86d9e7c1ed501141dcd73836728eda6aa581aaba49b2bf08315a39b9ae extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = [];
        $filters = ["escape" => 4];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape'],
                []
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
        echo "  <div class=\"card\">
    <div class=\"card-header\" id=\"accordion_bundle\">
      <h5 class=\"mb-0 w-100 d-table\">
        <button class=\"btn btn-link p-0 w-100 text-left d-table-cell\" data-toggle=\"collapse\" data-target=\"#collapse_";
        // line 4
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["accordion_id"] ?? null)), "html", null, true);
        echo "\" aria-expanded=\"true\" aria-controls=\"collapseOne\">
          ";
        // line 5
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_cavalla_accordion_header", []), 0, [], "array")), "html", null, true);
        echo "
          <i aria-hidden=\"true\" class=\"fa fa-plus-circle float-right mt-1\"></i>
          <i class=\"fa fa-minus-circle invisible\" aria-hidden=\"true\"></i>
        </button>
      </h5>
    </div>

    <div id=\"collapse_";
        // line 12
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["accordion_id"] ?? null)), "html", null, true);
        echo "\" class=\"collapse\" aria-labelledby=\"accordion_bundle\" data-parent=\"#accordion\">
      <div class=\"card-body text-left\">
          ";
        // line 14
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_cavalla_accordion_text", []), 0, [], "array")), "html", null, true);
        echo "
      </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "modules/contrib/cavalla/modules/cavalla_widgets/modules/cavalla_accordion/templates/paragraph--cavalla-accordion-field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 14,  74 => 12,  64 => 5,  60 => 4,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("  <div class=\"card\">
    <div class=\"card-header\" id=\"accordion_bundle\">
      <h5 class=\"mb-0 w-100 d-table\">
        <button class=\"btn btn-link p-0 w-100 text-left d-table-cell\" data-toggle=\"collapse\" data-target=\"#collapse_{{ accordion_id }}\" aria-expanded=\"true\" aria-controls=\"collapseOne\">
          {{ content.field_cavalla_accordion_header[0] }}
          <i aria-hidden=\"true\" class=\"fa fa-plus-circle float-right mt-1\"></i>
          <i class=\"fa fa-minus-circle invisible\" aria-hidden=\"true\"></i>
        </button>
      </h5>
    </div>

    <div id=\"collapse_{{ accordion_id }}\" class=\"collapse\" aria-labelledby=\"accordion_bundle\" data-parent=\"#accordion\">
      <div class=\"card-body text-left\">
          {{ content.field_cavalla_accordion_text[0] }}
      </div>
  </div>
</div>
", "modules/contrib/cavalla/modules/cavalla_widgets/modules/cavalla_accordion/templates/paragraph--cavalla-accordion-field.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/maximumcommunity.com/modules/contrib/cavalla/modules/cavalla_widgets/modules/cavalla_accordion/templates/paragraph--cavalla-accordion-field.html.twig");
    }
}
