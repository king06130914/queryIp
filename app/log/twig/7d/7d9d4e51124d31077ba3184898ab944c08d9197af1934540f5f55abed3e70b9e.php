<?php

/* index.html */
class __TwigTemplate_1a568a56ffe6d31dccbc9e9791c4ad412134eba6abdeb77c9f780bb2a956032c extends Twig_Template
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
        echo "<!DOCTYPE html>
<html>
<head lang=\"en\">
    <meta charset=\"UTF-8\">
    <title>手机归属地查询</title>
    <link rel=\"stylesheet\" href=\"./static/css/bootstrap.min.css\"/>
    <script src=\"./static/js/jquery.min.js\"></script>
    <script src=\"./static/js/base.js\"></script>
    <style>
        .container {
            width: 300px;
        }
        #phoneInfo {
            display: none;
        }
    </style>
</head>
<body>
    <div class=\"container\">
        <div class=\"form-group\">
            <label for=\"\">请输入手机号码</label>
            <div class=\"input-group\">
                <input type=\"text\" id=\"phoneText\" class=\"form-control\" required/>
                <span class=\"input-group-btn\">
                    <button class=\"btn btn-default\" id=\"subPhone\">查询</button>
                </span>
            </div>
        </div>
        <table class=\"table\" id=\"phoneInfo\">
            <tr>
                <td>手机号码</td>
                <td id=\"phoneNumber\"></td>
            </tr>
            <tr>
                <td>归属地</td>
                <td id=\"phoneProvince\"></td>
            </tr>
            <tr>
                <td>运营商</td>
                <td id=\"phoneCatName\"></td>
            </tr>
            <tr>
                <td>其他</td>
                <td id=\"phoneMsg\"></td>
            </tr>
        </table>
    </div>
</body>
<script>
    \$(document).ready(function(){
        \$('#subPhone').click(function(){
            var phone = \$('#phoneText').val();
            IMOOC.GLOBAL.ajax('/queryPhone/query', 'post', {phone: phone}, 'json', IMOOC.APPS.QUERYPHONE.dataCallback);
        });
    });
</script>
</html>";
    }

    public function getTemplateName()
    {
        return "index.html";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head lang=\"en\">
    <meta charset=\"UTF-8\">
    <title>手机归属地查询</title>
    <link rel=\"stylesheet\" href=\"./static/css/bootstrap.min.css\"/>
    <script src=\"./static/js/jquery.min.js\"></script>
    <script src=\"./static/js/base.js\"></script>
    <style>
        .container {
            width: 300px;
        }
        #phoneInfo {
            display: none;
        }
    </style>
</head>
<body>
    <div class=\"container\">
        <div class=\"form-group\">
            <label for=\"\">请输入手机号码</label>
            <div class=\"input-group\">
                <input type=\"text\" id=\"phoneText\" class=\"form-control\" required/>
                <span class=\"input-group-btn\">
                    <button class=\"btn btn-default\" id=\"subPhone\">查询</button>
                </span>
            </div>
        </div>
        <table class=\"table\" id=\"phoneInfo\">
            <tr>
                <td>手机号码</td>
                <td id=\"phoneNumber\"></td>
            </tr>
            <tr>
                <td>归属地</td>
                <td id=\"phoneProvince\"></td>
            </tr>
            <tr>
                <td>运营商</td>
                <td id=\"phoneCatName\"></td>
            </tr>
            <tr>
                <td>其他</td>
                <td id=\"phoneMsg\"></td>
            </tr>
        </table>
    </div>
</body>
<script>
    \$(document).ready(function(){
        \$('#subPhone').click(function(){
            var phone = \$('#phoneText').val();
            IMOOC.GLOBAL.ajax('/queryPhone/query', 'post', {phone: phone}, 'json', IMOOC.APPS.QUERYPHONE.dataCallback);
        });
    });
</script>
</html>", "index.html", "E:\\phpStudy\\WWW\\imos\\app\\views\\index.html");
    }
}
