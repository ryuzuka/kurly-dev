<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!doctype html>
<html lang="ko">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="google-site-verification" content="HZF7o0mS0lBAuD-oULDNf1L_zgoZq1ZoY4LfZDi0cdE" />
    <title><?=$pageTitle?></title>

    <link rel="apple-touch-icon" sizes="180x180" href="/images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/images/favicon-16x16.png">
    <link id="favicon" rel="icon" type="image/x-icon" href="/images/favicon.ico">
        
    <link rel="stylesheet" href="/mo/css/common.css">
    <link rel="stylesheet" href="/mo/css/datepicker.css">
    <link rel="stylesheet" type="text/css" href="/common/styles/slick.css">
    <link rel="stylesheet" type="text/css" href="/common/styles/slick-theme.css">
    <link rel="stylesheet" type="text/css" href="/common/styles/swiper.min.css">

    <script src="//t1.daumcdn.net/mapjsapi/bundle/postcode/prod/postcode.v2.js"></script>
    <script type="text/javascript" src="/common/libs/jquery-1.12.4.min.js"></script>
    <script type="text/javascript" src="/common/libs/datepicker.min.js"></script>
    <script type="text/javascript" src="/common/libs/lodash.min.js"></script>
    <script type="text/javascript" src="/common/libs/moment.min.js"></script>
    <script type="text/javascript" src="/common/libs/swiper.min.js"></script>
    <script type="text/javascript" src="/common/libs/slick.min.js"></script>
    <script type="text/javascript" src="/common/libs/gsap.min.js"></script>
    <script type="text/javascript" src="/common/libs/lottie.min.js"></script>

    <?php if ($this->session->flashdata('message')) { ?>
    <script type="text/javascript"> alert('<?=$this->session->flashdata('message')?>'); </script>
    <?php } ?>
  </head>
  
  <body>
    <div class="wrap <?=$sub?>">

        <!-- Header -->
        <?php $this->load->view('mobile/include/header_sub'); ?>

        <!-- Main -->
        <?php $this->load->view($pageName); ?>

        <!-- Footer -->
        <?php $this->load->view('mobile/include/footer'); ?>
      
    </div>

  <!-- KurlyNextmile, plugins, common -->
  <script type="text/javascript" src="/common/KurlyNextmile.js"></script>
  <script type="text/javascript" src="/common/plugins.js"></script>
  <script type="text/javascript" src="/mo/js/common.js"></script>

  <!-- components -->
  <script>
  </script>
</body>
</html>      
