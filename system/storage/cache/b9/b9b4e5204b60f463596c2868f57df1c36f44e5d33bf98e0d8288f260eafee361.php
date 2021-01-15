<?php

/* __string_template__22b4ed837304932cae380f6949301191f256be94d81f66319ed69602e7861533 */
class __TwigTemplate_de16e0f79bfe933e3f45153e0f579075f1829e841a5f5bf872d83774351526ec extends Twig_Template
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
        echo (isset($context["header"]) ? $context["header"] : null);
        echo "
<div id=\"product-category\" class=\"container\">
  <ul class=\"breadcrumb\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 5
            echo "    <li><a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "  </ul>
  <div class=\"row\">";
        // line 8
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
    ";
        // line 9
        if (((isset($context["column_left"]) ? $context["column_left"] : null) && (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 10
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 11
            echo "    ";
        } elseif (((isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 12
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 13
            echo "    ";
        } else {
            // line 14
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 15
            echo "    ";
        }
        // line 16
        echo "    <div id=\"content\" class=\"";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\">";
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo "
      <h2>12</h2>
      ";
        // line 18
        if (((isset($context["thumb"]) ? $context["thumb"] : null) || (isset($context["description"]) ? $context["description"] : null))) {
            // line 19
            echo "      <div class=\"row\"> ";
            if ((isset($context["thumb"]) ? $context["thumb"] : null)) {
                // line 20
                echo "        <div class=\"col-sm-2\"><img src=\"";
                echo (isset($context["thumb"]) ? $context["thumb"] : null);
                echo "\" alt=\"";
                echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                echo "\" title=\"";
                echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                echo "\" class=\"img-thumbnail\" /></div>
        ";
            }
            // line 22
            echo "        ";
            if ((isset($context["description"]) ? $context["description"] : null)) {
                // line 23
                echo "        <div class=\"col-sm-10\">";
                echo (isset($context["description"]) ? $context["description"] : null);
                echo "</div>
        ";
            }
            // line 24
            echo "</div>
      <hr>
      ";
        }
        // line 27
        echo "      ";
        if ((isset($context["categories"]) ? $context["categories"] : null)) {
            // line 28
            echo "      <h3>";
            echo (isset($context["text_refine"]) ? $context["text_refine"] : null);
            echo "</h3>
      ";
            // line 29
            if ((twig_length_filter($this->env, (isset($context["categories"]) ? $context["categories"] : null)) <= 5)) {
                // line 30
                echo "      <div class=\"row\">
        <div class=\"col-sm-3\">
          <ul>
            ";
                // line 33
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                    // line 34
                    echo "            <li><a href=\"";
                    echo $this->getAttribute($context["category"], "href", array());
                    echo "\">";
                    echo $this->getAttribute($context["category"], "name", array());
                    echo "</a></li>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 36
                echo "          </ul>
        </div>
      </div>
      ";
            } else {
                // line 40
                echo "      <div class=\"row\">";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_array_batch((isset($context["categories"]) ? $context["categories"] : null), twig_round((twig_length_filter($this->env, (isset($context["categories"]) ? $context["categories"] : null)) / 4), 1, "ceil")));
                foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                    // line 41
                    echo "        <div class=\"col-sm-3\">
          <ul>
            ";
                    // line 43
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["category"]);
                    foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                        // line 44
                        echo "            <li><a href=\"";
                        echo $this->getAttribute($context["child"], "href", array());
                        echo "\">";
                        echo $this->getAttribute($context["child"], "name", array());
                        echo "</a></li>
            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 46
                    echo "          </ul>
        </div>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 48
                echo "</div>
      <br />
      ";
            }
            // line 51
            echo "      ";
        }
        // line 52
        echo "      ";
        if ((isset($context["products"]) ? $context["products"] : null)) {
            // line 53
            echo "      <div class=\"row\">
        <div class=\"col-md-2 col-sm-6 hidden-xs\">
          <div class=\"btn-group btn-group-sm\">
            <button type=\"button\" id=\"list-view\" class=\"btn btn-default\" data-toggle=\"tooltip\" title=\"";
            // line 56
            echo (isset($context["button_list"]) ? $context["button_list"] : null);
            echo "\"><i class=\"fa fa-th-list\"></i></button>
            <button type=\"button\" id=\"grid-view\" class=\"btn btn-default\" data-toggle=\"tooltip\" title=\"";
            // line 57
            echo (isset($context["button_grid"]) ? $context["button_grid"] : null);
            echo "\"><i class=\"fa fa-th\"></i></button>
          </div>
        </div>
        <div class=\"col-md-3 col-sm-6\">
          ";
            // line 62
            echo "          <form action=\"\">
            <input type=\"text\" placeholder=\"Фильтр\" name=\"filter\">
            <button type=\"submit\">-></button>
          </form>
        </div>
        <div class=\"col-md-4 col-xs-6\">
          <div class=\"form-group input-group input-group-sm\">
            <label class=\"input-group-addon\" for=\"input-sort\">";
            // line 69
            echo (isset($context["text_sort"]) ? $context["text_sort"] : null);
            echo "</label>
            <select id=\"input-sort\" class=\"form-control\" onchange=\"location = this.value;\">
              
              
              
              ";
            // line 74
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["sorts"]);
            foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
                // line 75
                echo "              ";
                if (($this->getAttribute($context["sorts"], "value", array()) == sprintf("%s-%s", (isset($context["sort"]) ? $context["sort"] : null), (isset($context["order"]) ? $context["order"] : null)))) {
                    // line 76
                    echo "              
              
              
              <option value=\"";
                    // line 79
                    echo $this->getAttribute($context["sorts"], "href", array());
                    echo "\" selected=\"selected\">";
                    echo $this->getAttribute($context["sorts"], "text", array());
                    echo "</option>
              
              
              
              ";
                } else {
                    // line 84
                    echo "              
              
              
              <option value=\"";
                    // line 87
                    echo $this->getAttribute($context["sorts"], "href", array());
                    echo "\">";
                    echo $this->getAttribute($context["sorts"], "text", array());
                    echo "</option>
              
              
              
              ";
                }
                // line 92
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 93
            echo "            
            
            
            </select>
          </div>
        </div>
        <div class=\"col-md-3 col-xs-6\">
          <div class=\"form-group input-group input-group-sm\">
            <label class=\"input-group-addon\" for=\"input-limit\">";
            // line 101
            echo (isset($context["text_limit"]) ? $context["text_limit"] : null);
            echo "</label>
            <select id=\"input-limit\" class=\"form-control\" onchange=\"location = this.value;\">
              
              
              
              ";
            // line 106
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["limits"]);
            foreach ($context['_seq'] as $context["_key"] => $context["limits"]) {
                // line 107
                echo "              ";
                if (($this->getAttribute($context["limits"], "value", array()) == (isset($context["limit"]) ? $context["limit"] : null))) {
                    // line 108
                    echo "              
              
              
              <option value=\"";
                    // line 111
                    echo $this->getAttribute($context["limits"], "href", array());
                    echo "\" selected=\"selected\">";
                    echo $this->getAttribute($context["limits"], "text", array());
                    echo "</option>
              
              
              
              ";
                } else {
                    // line 116
                    echo "              
              
              
              <option value=\"";
                    // line 119
                    echo $this->getAttribute($context["limits"], "href", array());
                    echo "\">";
                    echo $this->getAttribute($context["limits"], "text", array());
                    echo "</option>
              
              
              
              ";
                }
                // line 124
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limits'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 125
            echo "            
            
            
            </select>
          </div>
        </div>
      </div>
      <div class=\"row\"> ";
            // line 132
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 133
                echo "        <div class=\"product-layout product-list col-xs-12\">
          <div class=\"product-thumb\">
            <div class=\"image\"><a href=\"";
                // line 135
                echo $this->getAttribute($context["product"], "href", array());
                echo "\"><img src=\"";
                echo $this->getAttribute($context["product"], "thumb", array());
                echo "\" alt=\"";
                echo $this->getAttribute($context["product"], "name", array());
                echo "\" title=\"";
                echo $this->getAttribute($context["product"], "name", array());
                echo "\" class=\"img-responsive\" /></a></div>
            <div>
              <div class=\"caption\">
                <h4><a href=\"";
                // line 138
                echo $this->getAttribute($context["product"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["product"], "name", array());
                echo "</a></h4>
                <p>";
                // line 139
                echo $this->getAttribute($context["product"], "description", array());
                echo "</p>
                ";
                // line 140
                if ($this->getAttribute($context["product"], "price", array())) {
                    // line 141
                    echo "                <p class=\"price\"> ";
                    if ( !$this->getAttribute($context["product"], "special", array())) {
                        // line 142
                        echo "                  ";
                        echo $this->getAttribute($context["product"], "price", array());
                        echo "
                  ";
                    } else {
                        // line 143
                        echo " <span class=\"price-new\">";
                        echo $this->getAttribute($context["product"], "special", array());
                        echo "</span> <span class=\"price-old\">";
                        echo $this->getAttribute($context["product"], "price", array());
                        echo "</span> ";
                    }
                    // line 144
                    echo "                  ";
                    if ($this->getAttribute($context["product"], "tax", array())) {
                        echo " <span class=\"price-tax\">";
                        echo (isset($context["text_tax"]) ? $context["text_tax"] : null);
                        echo " ";
                        echo $this->getAttribute($context["product"], "tax", array());
                        echo "</span> ";
                    }
                    echo " </p>
                ";
                }
                // line 146
                echo "                ";
                if ($this->getAttribute($context["product"], "rating", array())) {
                    // line 147
                    echo "                <div class=\"rating\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 148
                        echo "                  ";
                        if (($this->getAttribute($context["product"], "rating", array()) < $context["i"])) {
                            echo " <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span> ";
                        } else {
                            echo " <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>";
                        }
                        // line 149
                        echo "                  ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    echo " </div>
                ";
                }
                // line 150
                echo " </div>
              <div class=\"button-group\">
                <button type=\"button\" onclick=\"cart.add('";
                // line 152
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "', '";
                echo $this->getAttribute($context["product"], "minimum", array());
                echo "');\"><i class=\"fa fa-shopping-cart\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">";
                echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
                echo "</span></button>
                <button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 153
                echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                echo "\" onclick=\"wishlist.add('";
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "');\"><i class=\"fa fa-heart\"></i></button>
                <button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 154
                echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
                echo "\" onclick=\"compare.add('";
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "');\"><i class=\"fa fa-exchange\"></i></button>
              </div>
            </div>
          </div>
        </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 159
            echo " </div>
      <div class=\"row\">
        <div class=\"col-sm-6 text-left\">";
            // line 161
            echo (isset($context["pagination"]) ? $context["pagination"] : null);
            echo "</div>
        <div class=\"col-sm-6 text-right\">";
            // line 162
            echo (isset($context["results"]) ? $context["results"] : null);
            echo "</div>
      </div>
      ";
        }
        // line 165
        echo "      ";
        if (( !(isset($context["categories"]) ? $context["categories"] : null) &&  !(isset($context["products"]) ? $context["products"] : null))) {
            // line 166
            echo "      <p>";
            echo (isset($context["text_empty"]) ? $context["text_empty"] : null);
            echo "</p>
      <div class=\"buttons\">
        <div class=\"pull-right\"><a href=\"";
            // line 168
            echo (isset($context["continue"]) ? $context["continue"] : null);
            echo "\" class=\"btn btn-primary\">";
            echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
            echo "</a></div>
      </div>
      ";
        }
        // line 171
        echo "      ";
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "</div>
    ";
        // line 172
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "</div>
</div>
";
        // line 174
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo " 
";
    }

    public function getTemplateName()
    {
        return "__string_template__22b4ed837304932cae380f6949301191f256be94d81f66319ed69602e7861533";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  486 => 174,  481 => 172,  476 => 171,  468 => 168,  462 => 166,  459 => 165,  453 => 162,  449 => 161,  445 => 159,  431 => 154,  425 => 153,  417 => 152,  413 => 150,  404 => 149,  397 => 148,  392 => 147,  389 => 146,  377 => 144,  370 => 143,  364 => 142,  361 => 141,  359 => 140,  355 => 139,  349 => 138,  337 => 135,  333 => 133,  329 => 132,  320 => 125,  314 => 124,  304 => 119,  299 => 116,  289 => 111,  284 => 108,  281 => 107,  277 => 106,  269 => 101,  259 => 93,  253 => 92,  243 => 87,  238 => 84,  228 => 79,  223 => 76,  220 => 75,  216 => 74,  208 => 69,  199 => 62,  192 => 57,  188 => 56,  183 => 53,  180 => 52,  177 => 51,  172 => 48,  164 => 46,  153 => 44,  149 => 43,  145 => 41,  140 => 40,  134 => 36,  123 => 34,  119 => 33,  114 => 30,  112 => 29,  107 => 28,  104 => 27,  99 => 24,  93 => 23,  90 => 22,  80 => 20,  77 => 19,  75 => 18,  67 => 16,  64 => 15,  61 => 14,  58 => 13,  55 => 12,  52 => 11,  49 => 10,  47 => 9,  43 => 8,  40 => 7,  29 => 5,  25 => 4,  19 => 1,);
    }
}
/* {{ header }}*/
/* <div id="product-category" class="container">*/
/*   <ul class="breadcrumb">*/
/*     {% for breadcrumb in breadcrumbs %}*/
/*     <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*     {% endfor %}*/
/*   </ul>*/
/*   <div class="row">{{ column_left }}*/
/*     {% if column_left and column_right %}*/
/*     {% set class = 'col-sm-6' %}*/
/*     {% elseif column_left or column_right %}*/
/*     {% set class = 'col-sm-9' %}*/
/*     {% else %}*/
/*     {% set class = 'col-sm-12' %}*/
/*     {% endif %}*/
/*     <div id="content" class="{{ class }}">{{ content_top }}*/
/*       <h2>12</h2>*/
/*       {% if thumb or description %}*/
/*       <div class="row"> {% if thumb %}*/
/*         <div class="col-sm-2"><img src="{{ thumb }}" alt="{{ heading_title }}" title="{{ heading_title }}" class="img-thumbnail" /></div>*/
/*         {% endif %}*/
/*         {% if description %}*/
/*         <div class="col-sm-10">{{ description }}</div>*/
/*         {% endif %}</div>*/
/*       <hr>*/
/*       {% endif %}*/
/*       {% if categories %}*/
/*       <h3>{{ text_refine }}</h3>*/
/*       {% if categories|length <= 5 %}*/
/*       <div class="row">*/
/*         <div class="col-sm-3">*/
/*           <ul>*/
/*             {% for category in categories %}*/
/*             <li><a href="{{ category.href }}">{{ category.name }}</a></li>*/
/*             {% endfor %}*/
/*           </ul>*/
/*         </div>*/
/*       </div>*/
/*       {% else %}*/
/*       <div class="row">{% for category in categories|batch((categories|length / 4)|round(1, 'ceil')) %}*/
/*         <div class="col-sm-3">*/
/*           <ul>*/
/*             {% for child in category %}*/
/*             <li><a href="{{ child.href }}">{{ child.name }}</a></li>*/
/*             {% endfor %}*/
/*           </ul>*/
/*         </div>*/
/*         {% endfor %}</div>*/
/*       <br />*/
/*       {% endif %}*/
/*       {% endif %}*/
/*       {% if products %}*/
/*       <div class="row">*/
/*         <div class="col-md-2 col-sm-6 hidden-xs">*/
/*           <div class="btn-group btn-group-sm">*/
/*             <button type="button" id="list-view" class="btn btn-default" data-toggle="tooltip" title="{{ button_list }}"><i class="fa fa-th-list"></i></button>*/
/*             <button type="button" id="grid-view" class="btn btn-default" data-toggle="tooltip" title="{{ button_grid }}"><i class="fa fa-th"></i></button>*/
/*           </div>*/
/*         </div>*/
/*         <div class="col-md-3 col-sm-6">*/
/*           {# <div class="form-group"><a href="{{ compare }}" id="compare-total" class="btn btn-link">{{ text_compare }}</a></div> #}*/
/*           <form action="">*/
/*             <input type="text" placeholder="Фильтр" name="filter">*/
/*             <button type="submit">-></button>*/
/*           </form>*/
/*         </div>*/
/*         <div class="col-md-4 col-xs-6">*/
/*           <div class="form-group input-group input-group-sm">*/
/*             <label class="input-group-addon" for="input-sort">{{ text_sort }}</label>*/
/*             <select id="input-sort" class="form-control" onchange="location = this.value;">*/
/*               */
/*               */
/*               */
/*               {% for sorts in sorts %}*/
/*               {% if sorts.value == '%s-%s'|format(sort, order) %}*/
/*               */
/*               */
/*               */
/*               <option value="{{ sorts.href }}" selected="selected">{{ sorts.text }}</option>*/
/*               */
/*               */
/*               */
/*               {% else %}*/
/*               */
/*               */
/*               */
/*               <option value="{{ sorts.href }}">{{ sorts.text }}</option>*/
/*               */
/*               */
/*               */
/*               {% endif %}*/
/*               {% endfor %}*/
/*             */
/*             */
/*             */
/*             </select>*/
/*           </div>*/
/*         </div>*/
/*         <div class="col-md-3 col-xs-6">*/
/*           <div class="form-group input-group input-group-sm">*/
/*             <label class="input-group-addon" for="input-limit">{{ text_limit }}</label>*/
/*             <select id="input-limit" class="form-control" onchange="location = this.value;">*/
/*               */
/*               */
/*               */
/*               {% for limits in limits %}*/
/*               {% if limits.value == limit %}*/
/*               */
/*               */
/*               */
/*               <option value="{{ limits.href }}" selected="selected">{{ limits.text }}</option>*/
/*               */
/*               */
/*               */
/*               {% else %}*/
/*               */
/*               */
/*               */
/*               <option value="{{ limits.href }}">{{ limits.text }}</option>*/
/*               */
/*               */
/*               */
/*               {% endif %}*/
/*               {% endfor %}*/
/*             */
/*             */
/*             */
/*             </select>*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*       <div class="row"> {% for product in products %}*/
/*         <div class="product-layout product-list col-xs-12">*/
/*           <div class="product-thumb">*/
/*             <div class="image"><a href="{{ product.href }}"><img src="{{ product.thumb }}" alt="{{ product.name }}" title="{{ product.name }}" class="img-responsive" /></a></div>*/
/*             <div>*/
/*               <div class="caption">*/
/*                 <h4><a href="{{ product.href }}">{{ product.name }}</a></h4>*/
/*                 <p>{{ product.description }}</p>*/
/*                 {% if product.price %}*/
/*                 <p class="price"> {% if not product.special %}*/
/*                   {{ product.price }}*/
/*                   {% else %} <span class="price-new">{{ product.special }}</span> <span class="price-old">{{ product.price }}</span> {% endif %}*/
/*                   {% if product.tax %} <span class="price-tax">{{ text_tax }} {{ product.tax }}</span> {% endif %} </p>*/
/*                 {% endif %}*/
/*                 {% if product.rating %}*/
/*                 <div class="rating"> {% for i in 1..5 %}*/
/*                   {% if product.rating < i %} <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> {% else %} <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>{% endif %}*/
/*                   {% endfor %} </div>*/
/*                 {% endif %} </div>*/
/*               <div class="button-group">*/
/*                 <button type="button" onclick="cart.add('{{ product.product_id }}', '{{ product.minimum }}');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs hidden-sm hidden-md">{{ button_cart }}</span></button>*/
/*                 <button type="button" data-toggle="tooltip" title="{{ button_wishlist }}" onclick="wishlist.add('{{ product.product_id }}');"><i class="fa fa-heart"></i></button>*/
/*                 <button type="button" data-toggle="tooltip" title="{{ button_compare }}" onclick="compare.add('{{ product.product_id }}');"><i class="fa fa-exchange"></i></button>*/
/*               </div>*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*         {% endfor %} </div>*/
/*       <div class="row">*/
/*         <div class="col-sm-6 text-left">{{ pagination }}</div>*/
/*         <div class="col-sm-6 text-right">{{ results }}</div>*/
/*       </div>*/
/*       {% endif %}*/
/*       {% if not categories and not products %}*/
/*       <p>{{ text_empty }}</p>*/
/*       <div class="buttons">*/
/*         <div class="pull-right"><a href="{{ continue }}" class="btn btn-primary">{{ button_continue }}</a></div>*/
/*       </div>*/
/*       {% endif %}*/
/*       {{ content_bottom }}</div>*/
/*     {{ column_right }}</div>*/
/* </div>*/
/* {{ footer }} */
/* */
