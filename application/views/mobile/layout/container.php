<!DOCTYPE html>
<html lang="id-ID">
<head>
	<meta charset="UTF-8">
	<title>JOB Accentuates(<?=$this->global_server_no?>)</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
	<meta name="format-detection" content="telephone=no, address=no, email=no">

        <link rel="apple-touch-icon" sizes="180x180" href="/images/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/images/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/images/favicon-16x16.png">
        <link id="favicon" rel="icon" type="image/x-icon" href="/images/favicon.ico">

	<link href="/static/css/MyFontsWebfontsKit.css" rel="stylesheet">
	<!-- lightSlider -->
	<link href="/static/plugins/lightslider/lightslider.css" rel="stylesheet">
	<!-- CS Select -->
	<link href="/static/plugins/csSelect/cs-select.css" rel="stylesheet">
	<!-- iCheck -->
	<link rel="stylesheet" href="/static/plugins/iCheck/all.css">
	<!-- DatePicker -->
	<link rel="stylesheet" href="/static/plugins/datepicker/datepicker3.css">
	<!-- Modal -->
	<link rel="stylesheet" href="/static/plugins/modal/modal.css">

	<script type="text/javascript" src="/static/plugins/jQuery/jQuery-2.1.4.min.js"></script>
	<!-- lightSlider -->
	<script type="text/javascript" src="/static/plugins/lightslider/lightslider.js"></script>
	<!-- dotdotdot -->
	<script type="text/javascript" src="/static/plugins/dotdotdot/jquery.dotdotdot.min.js"></script>
	<!-- CBP Scroller Motion -->
	<script type="text/javascript" src="/static/plugins/cbpScroller/modernizr.custom.js"></script>
	<script type="text/javascript" src="/static/plugins/cbpScroller/classie.js"></script>
	<script type="text/javascript" src="/static/plugins/cbpScroller/cbpScroller.js"></script>
	<!-- CS Select -->
	<script type="text/javascript" src="/static/plugins/csSelect/selectFx.js"></script>
	<!-- iCheck -->
	<script src="/static/plugins/iCheck/icheck.min.js"></script>
	<!-- DatePicker -->
	<script src="/static/plugins/datepicker/bootstrap-datepicker.js"></script>
	<!-- Modal -->
	<script src="/static/plugins/modal/modal.js"></script>

	<link rel="stylesheet" href="/static/css/common.css">
	<link rel="stylesheet" href="/static/css/form.css">

    <?php if ($this->session->flashdata('message')) { ?>
    <script type="text/javascript"> alert('<?=$this->session->flashdata('message')?>'); </script>
    <?php } ?>

    <script type="text/javascript">
    var enUserid = "<?=$enUserID?>";

    $(document).ready(function(){
        $(".login a").click(function() {
            Login("");
        });

        $(".change_pw a").click(function(){
            changePW();
        });
    });

    $(document).on("click", "#findPW", function(){
         var height = $(window).height();
         var url = "/password";

         $.get(url,function(data,status){
              if (status == "success") {
                   modalWindow.windowId = 'layerPopup';
                   modalWindow.width = 660;
                   modalWindow.height = 530;
                   modalWindow.content = data;
                   modalWindow.open();
             } else {
                   alert("Error occured!");
             }
         });
    });

    $(document).on("click", "#btn-changepw", function(){
        var f = document.passForm;
        var obj;

        obj = $('#passwd');
        if (obj.val() == "") {
            alert("Kata sandi wajib diisi");
            obj.focus();
            return;
        }

        obj = $('#new_passwd');
        if (obj.val() == "") {
            alert("Kata sandi wajib diisi");
            obj.focus();
            return;
        }
        if (obj.val().length < 4) {
            alert("Kata sandi harus lebih dari 4 karakter");
            obj.focus();
            return;
        }
        if (checkSpace(obj.val())) {
            alert("Kata sandi Anda salah");
            obj.focus();
            return;
        }

        obj = $('#new_repasswd');
        if (obj.val() == "") {
            alert("Diperlukan konfirmasi kata sandi");
            obj.focus();
            return;
        }

        if ($('#new_passwd').val() != $('#new_repasswd').val()) {
            alert("Konfirmasi kata sandi salah");
            $('#new_passwd').focus();
            return;
        }

        f.submit();
    });

    function Login(url) {
        var height = $(window).height();
        var url = "/login?returnURL="+url;

        $.get(url,function(data,status){
             if (status == "success") {
                  modalWindow.windowId = 'layerPopup';
                  modalWindow.width = 660;
                  modalWindow.height = 530;
                  modalWindow.content = data;
                  modalWindow.open();
            } else {
                  alert("Error occured!");
            }
        });
    }

    function changePW() {
        var height = $(window).height();
        var url = "/mypage/changepw";

        $.get(url,function(data,status){
             if (status == "success") {
                  modalWindow.windowId = 'layerPopup';
                  modalWindow.width = 660;
                  modalWindow.height = 530;
                  modalWindow.content = data;
                  modalWindow.open();
            } else {
                  alert("Error occured!");
            }
        });
    }

    function checkSpace(str) {
        if (str.search(/\s/) != -1) {
            return true;
        } else {
            return false;
        }
    }

    function previewCV() {
        if (enUserid) {
            window.open("/resume/preview", "CV", "width=900,height=600,scrollbars=yes");
        } else {
            Login("");
        }
    }

    function returnMypage() {
        if (enUserid) {
            location.href = "/mypage";
        } else {
            Login("/mypage");
        }
    }

    function returnResume() {
        if (enUserid) {
            location.href = "/resume";
        } else {
            Login("/resume");
        }
    }
    </script>
</head>
<body>
<!--
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-80588217-2', 'auto');
  ga('send', 'pageview');

</script>
-->
<!-- Google Analytics Javascript Code START -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-96841253-1', 'auto');
  ga('send', 'pageview');

</script>
<!-- Google Analytics Javascript Code END -->
	<header>
		<div class="hd_inner">
            <h1><a href="/"><img src="/images/logo_main.png" alt="logo"></a></h1>
<!--			<p>lowongan kerja:<br>field force opeational</p>-->
			<div class="gnb">
                <?php if($this->session->userdata('UID')) { ?>
                <span class=""><a href="/mypage"><img src="/images/mypage_icon.png" alt="mypage">MYPAGE</a></span><em>|</em>
                <span class=""><a href="/login/logout"><img src="/images/logout_icon.png" alt="logout">LOGOUT</a></span>
                <?php } else { ?>
                <span class="login"><a href="javascript:void(0);"><img src="/images/login_icon.png" alt="login">LOGIN</a></span><em>|</em>
                <span class="join"><a href="/register"><img src="/images/join_icon.png" alt="join">DAFTAR</a></span>
                <?php } ?>
			</div>
		</div>
	</header>
    <div class="container">

    <!-- Contents // -->
    <?php $this->load->view($pageName); ?>
	<!-- // Contents -->

    </div>
</body>
</html>