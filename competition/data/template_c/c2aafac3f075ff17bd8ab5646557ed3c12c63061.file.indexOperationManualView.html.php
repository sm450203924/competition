<?php /* Smarty version Smarty-3.1.16, created on 2019-05-22 22:15:57
         compiled from "assets\html\index\course_center\indexOperationManualView.html" */ ?>
<?php /*%%SmartyHeaderCode:25445ce5599d2f36a0-82728540%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c2aafac3f075ff17bd8ab5646557ed3c12c63061' => 
    array (
      0 => 'assets\\html\\index\\course_center\\indexOperationManualView.html',
      1 => 1558097630,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25445ce5599d2f36a0-82728540',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5ce5599d3d4af4_41021468',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ce5599d3d4af4_41021468')) {function content_5ce5599d3d4af4_41021468($_smarty_tpl) {?><!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="UTF-8">
    <title> </title>
    <meta name="viewport"
          content="width=device-width,initial-scale=1.0, minimum-scale=0.5, maximum-scale=1.5, user-scalable=yes"/>
    <?php echo $_smarty_tpl->getSubTemplate ('index/part_views/common/all_css.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</head>
<body>
<?php if (isset($_SESSION['userId'])) {?>
<?php echo $_smarty_tpl->getSubTemplate ('index/part_views/common/popupForm_part.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php } else { ?>
<?php echo $_smarty_tpl->getSubTemplate ('index/part_views/common/loginForm_part.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }?>
<?php echo $_smarty_tpl->getSubTemplate ('index/part_views/common/top_part.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<article class="container hp-content">
<div class="hp-container">
    <article class="course-center">
        <?php echo $_smarty_tpl->getSubTemplate ('index/part_views/course_center/indexLeftMenuView_part.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <div class="col-xs-9 right-content">
            <div class="right-container">
                <section class="course-center-content">
                    <div class="operation-manual">
                        <ol>1.登录注册</ol>
                        <ol>1.1.新用户注册</ol>
                        点击进入手机银行客户端，按住“自助注册请往上拖”部分向上滑动，即可进入新用户自助签约注册页面。
                        <img src="assets/images/login-view.jpg" alt="">
                        第一步：在注册界面选择证件类型，填写对应的证件号码、银行账号、户名、交易密码和手机密码，并勾选“请阅读并遵守电子银行 章程、服务”后，点击下一步按钮。<br>
                        第二步：在确认界面点击获取短信验证码并填入，在下方设置网银登录密码并确认，点击右上角“√”符号确认提交。<br>
                        注册成功，返回登录界面。<br>
                        <ol>1.2登录</ol>
                        在登录界面输入银行账号（手机号、用户名或身份证号也可），填写正确的密码及验证码，点击登录按键即可登录。<br>
                        若验证码难以看清， 可点击验证码图片更换验证码。<br>
                        <ol>1.3密码重置</ol>
                        在登录界面点击“忘记登录密码”，进入密码重置界面。<br>
                        第一步：身份验证。选择注册时使用的身份证件类型，输入正确的证件号码、银行账号、交易密码，点击下一步按钮，进入重置界面。<br>
                        第二步：密码重置。在确认界面点击获取短信验证码并填入，在下方设置网银新登录密码并确认新密码，点击页面下方“提交”按钮确认提交。<br>
                        密码重置成功，返回登录界面。<br>
                        <img src="assets/images/newspictwo.png" alt="">
                        <ol>2.消息与联系人</ol>
                        <ol>2.1二维码扫描</ol>
                        在消息界面点击左上角按钮可进入二维码扫描界面，可扫描二维码形式的联系人信息，快捷添加好友。<br>
                        进入扫描界面后点击右下角返回键可返回。<br>
                        点击中间本地键可选取相册内的二维码，点击开灯键可打开手电筒辅助扫描目标二维码。<br>
                        <ol>2.2我的联系人</ol>
                        点击屏幕右上方人型按钮，进入我的联系人界面，可对我行电子银行联系人进行添加、索引、查找、修改、删除等操作。<br>
                        在“新的朋友”栏可查看他人的好友申请并同意或忽略添加好友；点击右上角加号可通过通讯录手机号码自动申请添加好友；按住某联系人左滑可编辑昵称或删除联系人。<br>
                        已经添加的好友会在手机联系人下方显示，点击进入即可开始对话，已经建立的对话会保留在消息主页面可随时查看。<br>
                        在建立的对话中点击右下角加号键，输入金额，即可进行好友间快捷转账。<br>
                        <ol>2.3客服小秘书</ol>
                        客服小秘书提供信息咨询服务。用户可点击客服小秘书并在聊天界面中输入咨询信息的关键词查询相关内容。<br>
                        <ol>2.4财富小管家</ol>
                        财富小管家是我行手机银行的信息推送界面。客户可点击财富小管家，查看我行发布的最新公告及优惠讯息。<br>
                        页面以时间倒序的方式显示优惠快讯和银行公告的概况页，点击可查看详情。<br>
                        <ol>2.5消息中心</ol>
                        服务器发给用户的消息可在消息中心查询。<br>
                        划屏下拉，查询客户端数据库，获取消息。如果客户端数据库没有数据，从服务器获取历史信息。<br>
                    </div>
                </section>
                <?php echo $_smarty_tpl->getSubTemplate ('index/part_views/common/signup_button_part.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

            </div>
            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
    </article>
</div>
</article>

<?php echo $_smarty_tpl->getSubTemplate ('index/part_views/common/footer_part.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<!--<script sassetsd/js/jquery-1.9.1.js"></script>
<script sassetsssetsmatiologin-and-register.jsript>
<script>
/*
    $(document).load(function() {
        $num = $('.scheme-item').length;
        $even = $num / 2;
        $odd = ($num + 1) / 2;

        if ($num % 2 === 0) {
            $('.scheme-item:nth-child(' + $even + ')').addClass('active');
            $('.scheme-item:nth-child(' + $even + ')').prev().addClass('prev');
            $('.scheme-item:nth-child(' + $even + ')').next().addClass('next');
        } else {
            $('.scheme-item:nth-child(' + $odd + ')').addClass('active');
            $('.scheme-item:nth-child(' + $odd + ')').prev().addClass('prev');
            $('.scheme-item:nth-child(' + $odd + ')').next().addClass('next');
        }
        $('.scheme-item').click(function() {
            if ($(this).hasClass('active')){

            }else{
                $(this).removeClass('prev next');
                $(this).siblings().removeClass('prev active next');
                $(this).addClass('active');
                $(this).prev().addClass('prev');
                $(this).next().addClass('next');
            }
        });

    });
*/

</script>
<script sassets_end/js/bootstrap.min.js"></script>
&lt;!&ndash;<script src="js/jquery-3.3.1.min.js"></script>&ndash;&gt;
<script src="assets/js/jquery.validate.min.js"></script>
<script src="assets/js/login_and_register.js"></script>
<script>
    $(document).ready(function () {
        $('.menu ul li a').on('click', function (e) {
            e.preventDefault();  // 阻止链接跳转
            let url = this.href;  // 保存点击的地址
            $('.menu ul li.active').removeClass('active');
            $(this).parent('li').addClass('active');
            $('.hp-container').remove();
            $('.hp-content').load(url+' .hp-container').fadeIn('slow'); // 加载新内容
            // $('#content').load(url+' #container ').fadeIn('slow'); // 加载新内容,url地址与该地址下的选择器之间要有空格,表示该url下的#container
        });
        /*        $('.left-menu div a').on('click', function (e) {
         e.preventDefault();  // 阻止链接跳转
         $('.left-menu div a.current').removeClass('current');
         $(this).addClass('current');
         $('.right-container').remove();
         let url = this.href;  // 保存点击的地址
         $('.right-content').load(url + ' .right-container ').fadeIn('slow'); // 加载新内容,url地址与该地址下的选择器之间要有空格,表示该url下的#container
         });*/
    });

    $(document).on("click",".left-menu nav a",function (e) {
        e.preventDefault();  // 阻止链接跳转
        $('.left-menu nav a.current').removeClass('current');
        $(this).addClass('current');
        $('.right-container').remove();
        let url = this.href;  // 保存点击的地址
        $('.right-content').load(url + ' .right-container ').fadeIn('slow'); // 加载新内容,url地址与该地址下的选择器之间要有空格,表示该url下的#container
    })
    /*    $(document).on("click",".menu ul li a",function (e) {
     e.preventDefault();  // 阻止链接跳转
     let url = this.href;  // 保存点击的地址
     $('.menu ul li.active').removeClass('active');
     $(this).parent('li').addClass('active');
     $('.hp-container').remove();
     $('.hp-content').load(url).fadeIn('slow'); // 加载新内容
     });*/
</script>
<script>
    /*    function prompt(prompt,url) {
     $('.prompt-form p').html(prompt);
     $('.mask').fadeToggle();
     $('.popup-form').fadeToggle();
     $('.confirm-button').click(function () {
     //            window.location.href=url;
     return 1;
     });
     }*/


    function prompt(prompt, yesFn) {
        $('.prompt-form p').html(prompt);
        $('.mask').fadeToggle();
        $('.popup-form').fadeToggle();
        $('.confirm-button').click(yesFn);
    }

    $(document).on("click", ".logout-btn a", function (e) {
        e.preventDefault();
        let url = this.href;
        prompt('是否确认退出？', function yes() {
            window.location.href = url;
        });
    });

    $(document).on("click", ".confirm", function (e) {
        e.preventDefault();
        prompt('是否确认提交？', function yes() {
            $(".confirm").parent().submit();
        });
    });

    $(document).on("click", ".join-in-submit", function (e) {
        e.preventDefault();
        prompt('是否确认加入队伍？', function yes() {
            $(".join-in-submit").parent().submit();
        });
    });
    $(document).on("click", ".addTeam", function (e) {
        e.preventDefault();
        prompt('是否确认加入队伍？', function yes() {
            $(".addTeam").parent().submit();
        });
    });
    $(document).on("click", ".sign-up-button a", function (e) {
        e.preventDefault();
        let url = this.href;
        if ($("input[type='checkbox']").is(':checked')) {
            prompt('是否确认报名？一旦报名成功，将无法撤销报名并更改队伍资料。', function yes() {
                window.location.href = url;
            });
        } else {
            prompt('请先仔细报名规则，并勾选选框。', function yes() {
                $('.mask').fadeToggle();
                $('.popup-form').fadeToggle();
            });
        }
    });
    promptFromFadeToggle('.close');
    promptFromFadeToggle('.mask');

    function promptFromFadeToggle(className) {
        $(className).click(function () {
                $('.mask').fadeToggle();
                $('.popup-form').fadeToggle();
            }
        );
    }

    // data input
    function editFadeToggle() {
        $(".form-horizontal .update").toggle();
        $(".form-horizontal .return").toggle();
        $(".form-horizontal .confirm").toggle();
    }
    $(document).on("click", ".update", function () {
        $(".form-horizontal input").removeAttr("disabled").css("background", "rgba(255,255,255,.95)");
        editFadeToggle();
    });

    $(document).on("click", ".return a", function () {
        let url = this.href;  // 保存点击的地址
        $('.right-container').remove();
        $('.right-content').load(url + ' .right-container ').fadeIn('slow');
    });

    $(document).on("click", ".join-or-create-team input[class='operate-radio']:radio", function () {
        let num = $(this).val();
        $(".team-form").hide();
        $(".team-form").eq(num).show();
    });

    $(document).ready(function () {
        $('.menu ul li a').removeClass('active');
        $('.menu ul li a').eq(6).addClass('active');

        /*        $(".join-or-create-team input[class='operate-radio']:radio").on("click", function () {
         let num = $(this).val();
         $(".team-form").hide();
         $(".team-form").eq(num).show();
         });*/

        $('.left-menu nav a').on('click', function (e) {
            e.preventDefault();  // 阻止链接跳转
            $('.left-menu nav a.current').removeClass('current');
            $(this).addClass('current');
            $('.right-container').remove();
            let url = this.href;  // 保存点击的地址
            $('.right-content').load(url + ' .right-container ').fadeIn('slow'); // 加载新内容,url地址与该地址下的选择器之间要有空格,表示该url下的#container
            /*            let url = 'index.php?controller=User&method=index'+ this.href;  // 保存点击的地址
             $.ajax({
             type: 'GET',
             url: url,
             dataType: 'html',
             success(response) {
             $('.right-content').load(url).fadeIn('slow');
             }, error(jqXHR, status, errorThrown) {
             console.log(jqXHR);
             }
             });*/
//
////            $('.right-content').load(url).fadeIn('slow'); // 加载新内容,url地址与该地址下的选择器之间要有空格,表示该url下的#container
//            // $('#content').load(url+' #container ').fadeIn('slow'); // 加载新内容,url地址与该地址下的选择器之间要有空格,表示该url下的#container
///*            const urlToExpand = url +
//                '?key=' + apiKey +
//                '&shortUrl=' + $inputField.val();
//            $.ajax({
//                url: urlToExpand,
//                type: 'GET',
//                dataType: 'json',
//                success(response) {
//                    $responseField.append('<p>Your expanded url is: </p><p>' + response.longUrl + '</p>');
//                }, error(jqXHR, status, errorThrown) {
//                    console.log(jqXHR);
//                }
//            });
//        });*/
        });
    });
</script>-->
</body>
<?php echo $_smarty_tpl->getSubTemplate ('index/part_views/common/all_script.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


</html><?php }} ?>
