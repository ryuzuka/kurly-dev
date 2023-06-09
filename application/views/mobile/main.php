    <!--: Start #contents -->

    <div class="main_banner">
      <div class="textare">
        <p class=" wow fadeInUp">새벽배송 시장의 독보적 리더</p>
        <h2 class="wow fadeInUp" data-wow-delay="0.5s"><span class="mainlogo"><img src="/pc/image/main/mainlogo.svg"></span>Nextmile</h2>
        <button type="button" class="btn wow fadeInUp"data-wow-delay="0.5s" onclick="javascript:location.href='/service/delivery';">더 알아보기</button>

      </div>
      <div class="truck">
        <img src="/mo/image/truck.png">
      </div>
    </div>

    <div class="main_history">
      <div class="main_title">
        <p>국가대표 물류 플랫폼</p>
        <h2>컬리넥스트마일의 기록</h2>
        <p class="date"><?=date('Y.m.d', strtotime($dashboard->base_date))?> 기준</p>
      </div>

      <div class="history_four ani">
        <ul>
          <!--
          <li>
            <h2><b class="count-num xsamil" data-count="9"></b><span>개</span></h2>
            <p>누적 고객사</p>
          </li>
          <li>
            <div class="number">
              (단위:백만)
             </div>
          -->
          <li style="width: 33.33%">
            <h2>
              <b class="count-num" data-count="<?=$dashboard->release_count?>"><?=number_format($dashboard->release_count)?></b><span>건</span>
            </h2>
            <p>누적 출고량 (BOX)</p>
          </li>
          <li style="width: 33.33%">
            <h2>
              <b class="count-num" data-count="<?=$dashboard->member_count?>"><?=number_format($dashboard->member_count)?></b><span>명</span>
            </h2>
            <p>배송 매니저</p>
          </li>
          <li style="width: 33.33%">
            <h2>
              <b class="count-num" data-count="<?=$dashboard->center_count?>"><?=number_format($dashboard->center_count)?></b><span>센터</span>
            </h2>
            <p>운영 터미널 센터</p>
          </li>
        </ul>
      </div>

      <div class="bg">
        <img src="/pc/image/main/mainbg.svg">
        <h2>Nextmile</h2>
      </div>
    </div>

    <div class="main_service">
      <div class="main_title">
        <p>최고의 비지니스 파트너</p>
        <h2>컬리넥스트마일의 서비스</h2>
      </div>

      <div class="main_slide slider wow fadeIn"><!-- wow fadeInUp -->
        <div>
          <div class="slide_box" onclick="javascript:location.href='/service/delivery';">
            <div class="icon"><img src="/pc/image/main/main_icon01.png"></div>
                <h2>새벽배송 택배</h2>
                <p>국내 최대 규모의 <br>
                  콜드체인 전문 운송 서비스</p>
                  <a href="/service/delivery" class="flex_btn"></a>
          </div>
        </div>
        <div>
          <div class="slide_box" onclick="javascript:location.href='/service/coldchain';">
            <div class="icon"><img src="/pc/image/main/main_icon02.png"></div>
                <h2>풀 콜드체인</h2>
                <p>배송까지 모든 유통과정<br>
                  냉장 배송 서비스
                </p>
                  <a href="/service/coldchain" class="flex_btn"></a>
          </div>
        </div>
        <div>
          <div class="slide_box" onclick="javascript:location.href='/service/system';">
            <div class="icon"><img src="/pc/image/main/main_icon03.png"></div>
                <h2>시스템</h2>
                <p>파트너사 TOMS 시스템을 통한<br>
                  자동화 물류 서비스
                </p>
                  <a href="/service/system" class="flex_btn"></a>
          </div>
        </div>
    </div>

    </div>

    <div class="main_why">
      <div class="main_title wow fadeInUp">
        <p>차별화된 서비스 제공</p>
        <h2>Why 컬리넥스트마일</h2>
      </div>

      <div class="step5">
        <ul>
          <li>
            <p class="wow fadeInUp">
              <span>01</span>
              약 <b>1,700대</b> 냉탑 차량 보유
            </p>
          </li>
          <li>
            <p class="wow fadeInUp">
              <span>02</span>
              직고용 배송 매니저 <b>샛별크루</b> 운영
            </p>
          </li>
          <li>
            <p class="wow fadeInUp">
              <span>03</span>
              <b>15개</b> 이상의 <b>터미널 센터</b> 운영
            </p>
          </li>
          <li>
            <p class="wow fadeInUp">
              <span>04</span>
              일 물동량 <b>유연한 대처</b> 가능
            </p>
          </li>
          <li>
            <p class="wow fadeInUp">
              <span>05</span>
              <b>전국권 확장</b> 역량
            </p>
          </li>
        </ul>
      </div>

    </div>

    <div class="main_graf">
      <div class="main_title">
        <p>컬리만의 문제해결 역량, 노하우</p>
        <h2>전국 최초 새벽배송 도입을<br>
          기반으로 운영 노하우 확보</h2>
      </div>
      <div class="graph ani">
        <ul>
          <div class="line"></div>
          <li>
            <span class="year wow fadeInUp">2011</span>
            <span class="dot"></span>
            <span class="img wow fadeInUp">
              <em>식품 시장 <br>
                온라인 침투율</em>
              <img src="/mo/image/graph/01.png" class="icon01">
            </span>
          </li>
          <li>
            <span class="year wow fadeInUp" data-wow-delay="0.2s">2015</span>
            <span class="dot"></span>
            <span class="img wow fadeInUp" data-wow-delay="0.2s">
              <img src="/mo/image/graph/02.png" class="icon02">
            </span>
          </li>
          <li>
            <span class="year wow fadeInUp" data-wow-delay="0.5s">2021</span>
            <span class="dot"></span>
            <span class="img wow fadeInUp" data-wow-delay="0.5s">
              <img src="/mo/image/graph/03.png" class="icon03">
            </span>
          </li>
          <li>
            <span class="year wow fadeInUp" data-wow-delay="0.8s">2025</span>
            <span class="dot"></span>
            <span class="img wow fadeInUp" data-wow-delay="0.8s">
              <img src="/mo/image/graph/04.png" class="icon04">
            </span>
          </li>
        </ul>

      </div>
    </div>


    <div class="main_guide">
      <div class="box wow fadeInUp">
        <img src="/pc/image/main/icon01.png" class="icon">
        <a href='/customer/guide'>
        <div class="text">
          <h2>이용가이드</h2>
          <p>컬리넥스트마일 서비스 이용방법을 확인해보세요.</p>
        </div>
        </a>
      </div>
      <div class="box wow fadeInUp">
        <img src="/pc/image/main/icon02.png" class="icon">
        <a href='/customer/inquiry_write'>
        <div class="text">
          <h2>1:1 문의</h2>
          <p>신속하고 상세하게 궁금증을 해결해보세요.</p>
        </div>
        </a>
      </div>
      <div class="box wow fadeInUp">
        <img src="/pc/image/main/icon03.png" class="icon">
        <div class="text">
          <h2>카카오톡 문의</h2>
          <p>카카오톡으로 빠르고 간편하게 문의해보세요.</p>
        </div>
      </div>
    </div>


    <div class="inquiry">
      <p class="m14">견적조회/예약<i class="dot"></i>실시간 모니터링<i class="dot"></i>투명한 정산</p>
      <h1><b>컬리넥스트마일의 <br>
        간편하고 새로운 물류 서비스,<br>
        지금 시작해보세요!</b></h1>
      <div class="btn_are">
            <?php if($this->session->userdata('MID')) { ?>
            <button class="btn btn-primary" onclick="javascript:location.href='/';">회원가입</button>
            <?php } else { ?>
            <button class="btn btn-primary" onclick="javascript:location.href='/member/login';">회원가입</button>
            <?php } ?>
            <button class="btn btn-secondary2" onclick="javascript:location.href='/information/estimate';">견적문의</button>
      </div>
  </div>

    <!--: End #contents -->
