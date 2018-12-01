/**
 * @description JS基础库<依赖jQuery>
 *
 */

var IMOOC = IMOOC || {};
IMOOC.GLOBAL = {};
IMOOC.APPS = {};

//查询手机号的对象
IMOOC.APPS.QUERYPHONE = {};
IMOOC.APPS.QUERYPHONE.showInfo = function(){
    $('#phoneInfo').show();
};
IMOOC.APPS.QUERYPHONE.hideInfo = function(){
    $('#phoneInfo').hide();
};
IMOOC.APPS.QUERYPHONE.dataCallback = function(data) {
    if (data.code == 200) {
        IMOOC.APPS.QUERYPHONE.showInfo();
        $('#phoneNumber').text(data.phone);
        $('#phoneProvince').text(data.province);
        $('#phoneCatName').text(data.catName);
        $('#phoneMsg').text(data.msg);
    } else {
        IMOOC.APPS.QUERYPHONE.hideInfo();
        alert(data.msg);
    }
};

//查询ip地址的对象
IMOOC.APPS.QUERYIP = {};
IMOOC.APPS.QUERYIP.showInfo = function(){
    $('#ipInfo').show();
};
IMOOC.APPS.QUERYIP.hideInfo = function(){
    $('#ipInfo').hide();
};
IMOOC.APPS.QUERYIP.dataCallback = function(data) {
    if (data.code == 200) {
        IMOOC.APPS.QUERYIP.showInfo();
        $('#ipNumber').text(data.ip);
        $('#ipCountry').text(data.country);
        $('#ipProvince').text(data.province);
        $('#ipCity').text(data.city);
        $('#ipCatName').text(data.catName);
        $('#ipMsg').text(data.msg);
    } else {
        IMOOC.APPS.QUERYIP.hideInfo();
        alert(data.msg);
    }
};

//查询百度关键字的对象
IMOOC.APPS.QUERYBAIDU = {};
IMOOC.APPS.QUERYBAIDU.dataCallback = function(data) {
    if (data.code == 200) {
        $('#baiduInfo').show();
        $('#key_word').text(data.key_word);
        $('#query_res').text(data.query_res);
        $('#phoneMsg').text(data.msg);
    } else {
        $('#baiduInfo').hide();
        alert(data.msg);
    }
};

IMOOC.GLOBAL.ajax = function(url, method, params, dataType, callback){
    $.ajax({
        url: url,
        type: method,
        data: params,
        dataType: dataType,
        success: callback,
        // error:function(){
        //     alert('请求异常');
        // }
    });
};