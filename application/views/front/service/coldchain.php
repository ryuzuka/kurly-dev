  <!-- s : contents -->
  <div class="contents service">
    <div class="visual service">
      <h2>풀콜드체인</h2>
      <p class="text">신선한 제품을 집 앞까지 그대로</p>
    </div>
    <div class="inner-section title noline">
      <h3 class="kurly-text-02">풀콜드체인 이란?</h3>
      <p class="kurly-text-05">산지에서 고객 집 앞까지의 <span>전 유통과정</span>에서 식품이 <span>가장 신선하게 배송</span>될 수 있도록<br>적정 온도를 유지하는 <span>냉장 배송 시스템</span>입니다.</p>
    </div>
    <div class="section">
      <div class="inner-section">
        <h4 class="kurly-text-03">컬리넥스트마일은 차별화된 풀콜드체인을 운영합니다.</h4>
        <ul class="list-cold">
          <li class="wow fadeInUp">
            <div class="icon">
              <img src="/pc/image/service/cold01.png">
            </div>
            <div class="cont">
              <em class="kurly-text-04"><span>100% 냉탑 차량 운영</span></em>
              <p class="kurly-text-05">픽업지부터 배송지까지 모든 과정에서 냉탑 차량을 이용합니다.</p>
            </div>
          </li>
          <li class="wow fadeInUp">
            <div class="icon">
              <img src="/pc/image/service/cold02.png">
            </div>
            <div class="cont">
              <em class="kurly-text-04"><span>터미널센터(TC) 저온 설비 구축</span></em>
              <p class="kurly-text-05">상품이 입고되는 터미널센터 내에도 저온 설비 구축을 완료하였습니다.</p>
            </div>
          </li>
          <li class="wow fadeInUp">
            <div class="icon">
              <img src="/pc/image/service/cold03.png">
            </div>
            <div class="cont">
              <em class="kurly-text-04"><span>철저한 온도 관리</span>(전 차량 자동온도기록기 장착)</em>
              <p class="kurly-text-05">운송차량에 자동온도기록기를 장착하여 철저한 온도 관리를 진행합니다.</p>
            </div>
          </li>
          <li class="wow fadeInUp">
            <div class="icon">
              <img src="/pc/image/service/cold04.png">
            </div>
            <div class="cont">
              <em class="kurly-text-04"><span>분류 HUB에서도 저온 유지</span></em>
              <p class="kurly-text-05">모든 분류 HUB에서도 저온을 유지하여, 배송 직전까지 신선함을 유지합니다.</p>
            </div>
          </li>
        </ul>
      </div>
    </div>
    <div class="inner-section">
      <h4 class="kurly-text-03">완벽한 서비스 제공을 위해 노력합니다.</h4>
      <ul class="list">
        <li>
          <div class="img-wrap">
            <img src="/pc/image/service/cold_foot01.png">
          </div>
          <span class="kurly-text-04">약 <span>1500대</span>의 <span>냉탑 차량</span> 운영</span>
        </li>
        <li>
          <div class="img-wrap">
            <img src="/pc/image/service/cold_foot02.png">
          </div>
          <span class="kurly-text-04"><span>19개</span>의 터미널센터(TC)에 <span>저온 설비 구축</span></span>
        </li>
      </ul>
    </div>
    <div class="inquiry-section">
      <ul class="text-service">
        <li>견적조회/예약 쉽고 빠르게</li>
        <li>실시간 모니터링으로 안전하게</li>
        <li>투명한 정산으로 믿을 수 있게</li>
      </ul>
      <p class="kurly-text-02">컬리넥스트마일의 간편하고 새로운 물류 서비스,<br>지금 시작해보세요!</p>
      <div class="btn-wrap">
            <?php if($this->session->userdata('MID')) { ?>
            <a href="/" class="btn btn-primary-round">회원가입</a>
            <?php } else { ?>
            <a href="/member/login" class="btn btn-primary-round">회원가입</a>
            <?php } ?>
            <a href="/information/estimate" class="btn-inquiry">견적문의</a>
      </div>
    </div>
  </div>
  <!-- e : contents -->
  
<script>
	;($ => {
		$.depth1Index = 1
		$.depth2Index = 1
		
		// WOW
		$(() => new WOW().init())
	})(window.jQuery)
</script>  