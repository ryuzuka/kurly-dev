    <div class="visual service">
        <div class="text">
            <h2>새벽배송</h2>
            <p>365일 언제나 더 빠르게</p>
        </div>
    </div>

    <!--: Start #contents -->
    <div class="contents service__info">
        <div class="service_headline">
            <h1>오늘 입고된 상품의<br>
                새벽배송이 곧 시작됩니다.</h1>
            <h3>더 빠르게 받아보고 싶은 고객의 니즈를 위해,<br>
                차별화된 새벽배송 서비스를 이용해보세요.</h3>
        </div>

        <div class="convenient">
            <h1>새벽배송의 편리함을<br>
                경험해 보세요.</h1>
            <div class="box">
                <img src="/mo/image/convenient/convenient01.png" class="icon">
                <h2>주 7일제로 <b>주말까지,</b><br>
                    다년간의 노하우로 <b>안전하게</b></h2>
                <p>더 빠르게 받아보고 싶은 고객의 니즈를 위해,<br>
                    차별화된 새벽배송 서비스를 이용해보세요.</p>
            </div>
            <div class="box">
                <img src="/mo/image/convenient/convenient02.png" class="icon">
                <h2>독보적인 <b>풀 콜드체인,</b><br>
                    산지부터 목적지까지 <b>신선하게</b></h2>
                <p>주말 상관없이 고객이 원하는 날짜에,<br>
                    보다 안전하고 신속하게 배송합니다.</p>
            </div>
            <div class="box">
                <img src="/mo/image/convenient/convenient03.png" class="icon">
                <h2><b>수도권</b> 지역에,<br>
                    <b>매일 오전 7시까지</b> 배송 완료</h2>
                <p>새벽배송을 이용하여 서울, 경기, 수도권 전지역에<br>
                    매일 오전 7시 전까지 배송을 완료합니다.</p>
            </div>
            <div class="box">
                <img src="/mo/image/convenient/convenient04.png" class="icon">
                <h2><b>비수도권</b>도 문제없이,<br>
                    접수 후 <b>하루만에</b> 배송 완료</h2>
                <p>세종, 대전, 대구 등 지방권도 전날 접수 시<br>
                    익일배송을 완료합니다.
                <span class="block">
                    *  새벽배송 서비스 제공 지역 확대 예정
                </span>
                </p>
            </div>
            <div class="box">
                <img src="/mo/image/convenient/convenient05.png" class="icon">
                <h2>배송중인 상품의<br>
                    <b>실시간 배송현황</b> 조회 가능</h2>
                <p>송장조회 페이지를 통하여 배송중인 상품의<br>
                    배송 현황을 확인할 수 있습니다.</p>
            </div>
            <div class="box last">
                <img src="/mo/image/convenient/convenient06.png" class="icon">
                <h2><b>고객대응 전담팀</b> 운영,<br>
                    월등한 <b>사후처리</b> 서비스 제공</h2>
                <p>물품접수, 배송과정, 배송완료시 까지 일어나는<br>
                    문제에 대해 고객대응 전담팀을 운영하여<br>
                    체계적인 대응을 진행합니다.
                    <span class="block">
                        *  주말에도 걱정없이, 고객센터 운영<br>
                        (운영시간 : 08:00~17:00, 월-일)
                    </span>
                </p>
            </div>

            <h1>입고에서 배송까지<br>
                이렇게 진행되요.</h1>

            <div class="box_step">
                <ul>
                    <li>
                        <img src="/mo/image/convenient/step01.svg" class="icon">
                    </li>
                    <li>
                        <span class="step_number">Step  1</span>
                        <h3>고객사</h3>
                        <p>픽업 서비스</p>
                    </li>
                </ul>
                <ul>
                    <li>
                        <img src="/mo/image/convenient/step02.svg" class="icon">
                    </li>
                    <li>
                        <span class="step_number">Step  2</span>
                        <h3>HUB</h3>
                        <p>입고 마감 오후 4시~오후 11시<br>
                            입고 허브 선택 (김포/송파)</p>
                    </li>
                </ul>
                <ul>
                    <li>
                        <img src="/mo/image/convenient/step03.svg" class="icon">
                    </li>
                    <li>
                        <span class="step_number">Step  3</span>
                        <h3>터미널센터</h3>
                        <p>배송 출발 오후 9시~오전 3시<br>
                            담당 기사 인계 및 배송 진행</p>
                    </li>
                </ul>
                <ul>
                    <li>
                        <img src="/mo/image/convenient/step04.svg" class="icon">
                    </li>
                    <li>
                        <span class="step_number">Step  4</span>
                        <h3>배송지 도착</h3>
                        <p>배송 도착 오전 7시</p>
                    </li>
                </ul>
                <span class="allday">
                    * 상시 문의대응
                </span>
            </div>

        </div>

    </div>

    <div class="inquiry">
        <h2 class="nomargin">컬리넥스트마일만의<br>
            간편하고 새로운 물류 서비스,<br>
            지금 시작해보세요!</h2>
        <div class="btn_are">
            <?php if($this->session->userdata('MID')) { ?>
            <button class="btn btn-primary" onclick='javascript:location.href="/"'>회원가입</button>
            <?php } else { ?>
            <button class="btn btn-primary" onclick='javascript:location.href="/member/login"'>회원가입</button>
            <?php } ?>
            <button class="btn btn-primary" onclick='javascript:location.href="/information/estimate"'>견적문의</button>
        </div>
    </div>
    
  <script>
	  ;($ => {
		  $.depth1Index = 1
		  $.depth2Index = 0
		
		  $(function () {
			
		  })
	  })(window.jQuery)
  </script>    