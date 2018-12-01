<?php

/* baiduIndex.html */
class __TwigTemplate_058d82c4bd36174a7948464da7a038ea64ebd7024fbc55f3428ae3cebbecdf2f extends Twig_Template
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
        #baiduInfo {
            display: none;
        }
        .textarea-inherit {
            width: 100%; /*自动适应父布局宽度*/
            overflow: auto;
            word-break: break-all;
            /*在ie中解决断行问题(防止自动变为在一行显示，主要解决ie兼容问题，ie8中当设宽度为100%时，文本域类容超过一行时，
        当我们双击文本内容就会自动变为一行显示，所以只能用ie的专有断行属性“word-break或word-wrap”控制其断行)*/
        }
    </style>
</head>
<body>
    <div class=\"container\">
        <div class=\"form-group\">
            <label for=\"\">请输入要查询的关键字</label>
            <div class=\"input-group\">
                <input type=\"text\" id=\"phoneText\" class=\"form-control\" required/>
                <span class=\"input-group-btn\">
                    <button class=\"btn btn-default\" id=\"subPhone\">查询</button>
                </span>
            </div>
        </div>
        <table class=\"table\" id=\"baiduInfo\">
            <tr>
                <td>关键字</td>
                <td id=\"key_word\"></td>
            </tr>
            <tr>
                <td>百度查询提示</td>
                <td><textarea id=\"query_res\" class=\"textarea-inherit\" rows=\"3\"></textarea></td>
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
            var keyWord = \$('#phoneText').val();
            IMOOC.GLOBAL.ajax('/queryBaidu/query', 'post', {keyWord: keyWord}, 'json', IMOOC.APPS.QUERYBAIDU.dataCallback);
        });
    });
</script>
</html>";
    }

    public function getTemplateName()
    {
        return "baiduIndex.html";
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
        #baiduInfo {
            display: none;
        }
        .textarea-inherit {
            width: 100%; /*自动适应父布局宽度*/
            overflow: auto;
            word-break: break-all;
            /*在ie中解决断行问题(防止自动变为在一行显示，主要解决ie兼容问题，ie8中当设宽度为100%时，文本域类容超过一行时，
        当我们双击文本内容就会自动变为一行显示，所以只能用ie的专有断行属性“word-break或word-wrap”控制其断行)*/
        }
    </style>
</head>
<body>
    <div class=\"container\">
        <div class=\"form-group\">
            <label for=\"\">请输入要查询的关键字</label>
            <div class=\"input-group\">
                <input type=\"text\" id=\"phoneText\" class=\"form-control\" required/>
                <span class=\"input-group-btn\">
                    <button class=\"btn btn-default\" id=\"subPhone\">查询</button>
                </span>
            </div>
        </div>
        <table class=\"table\" id=\"baiduInfo\">
            <tr>
                <td>关键字</td>
                <td id=\"key_word\"></td>
            </tr>
            <tr>
                <td>百度查询提示</td>
                <td><textarea id=\"query_res\" class=\"textarea-inherit\" rows=\"3\"></textarea></td>
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
            var keyWord = \$('#phoneText').val();
            IMOOC.GLOBAL.ajax('/queryBaidu/query', 'post', {keyWord: keyWord}, 'json', IMOOC.APPS.QUERYBAIDU.dataCallback);
        });
    });
</script>
</html>", "baiduIndex.html", "E:\\phpStudy\\WWW\\imos\\app\\views\\baiduIndex.html");
    }
}
