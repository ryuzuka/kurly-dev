    <!-- s : contents -->
    <div class="contents information">
      <div class="visual information">
        <h2>요금안내</h2>
        <p class="text">간단한 문의서 작성으로 합리적인 요금을 확인해보세요</p>
      </div>
      <div class="inner-section if-inquiry">
        <div class="head-cont">
          <h3 class="kurly-text-02">서비스 요금</h3>
        </div>
        <div class="service_cost_box">
            <div class="cost_box_info">
                <div class="left">
                    <i class="icon01"></i>
                    <h2 class="kurly-text-05">입고</h2>
                </div>
                <div class="right">
                    <ul>
                        <li>
                            <p>입고방법</p>
                        </li>
                        <li>
                            <div class="cost_tag">
                                <span>자체입고</span><span>픽업서비스</span>
                            </div>
                            <h3 class="kurly-text-06">픽업서비스 이용시 <b>거리/물량(차량톤수)</b>에 따라 비용산정</h3>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="service_cost_box_line"></div>
            <div class="cost_box_info">
                <div class="left">
                    <i class="icon02"></i>
                    <h2 class="kurly-text-05">출고</h2>
                </div>
                <div class="right">
                    <ul>
                        <li>
                            <p>제공서비스</p>
                        </li>
                        <li>
                            <div class="cost_tag">
                                <span>송장출력기 무료대여</span><span>송장용지 무상제공</span><span>배송완료 MMS발송 (사진포함)</span>
                            </div>
                        </li>
                    </ul>
                    <ul class="top10">
                        <li>
                            <p>배송비</p>
                        </li>
                        <li>
                            <div class="price">~<?php if($lowest) { echo number_format($lowest); } else { echo "0"; } ?><span>(VAT 별도)</span></div>
                            <div class="prcie_detail">
                                <span>물동량에 따라 할인 적용</span><span>센터 입고 시간 20시 기준</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>


      </div>

      <div class="section">
        <div class="inner-section">
            <div class="head-cont">
                <h3 class="kurly-text-02">실시간 요금 계산기</h3>
              </div>
             <div class="price_flex self"><!-- 자체입고 default -->
                <div class="price_calculator">
                    <em class="kurly-text-07">월 물동량<span>(건)</span></em>
                    <input class="increase-number" type="number" id="delivery_count" name="delivery_count">
                    <em class="kurly-text-07 m_top_24">입고 방법</em>
                    <div class="input-group receiving">
                      <div class="rdo-box">
                        <input type="radio" id="rdoWay1-1" name="rdoWay" value="rdoPickup"><label for="rdoWay1-1">픽업요청</label>
                      </div>
                      <div class="rdo-box">
                        <input type="radio" id="rdoWay1-2" name="rdoWay" value="rdoSelf"><label for="rdoWay1-2">자체입고</label>
                      </div>
                    </div>
                  <div class="pickup-details">
                        <span class="kurly-text-09">자체입고시 입고비 무료 적용</span>
                    </div>
                  <div class="pickup-details_left">
                    <button class="button"></button>
                       <p class="kurly-text-10">
                        픽업요청시 거리 및 물량에 따라 비용이 산정됩니다.</br>
                        <a href="#none">상세견적</a> 문의 또는 <a href="#none">1:1문의</a>를 통하여 비용을 확인해보세요
                       </p>

                  </div>
                    <button type="button" class="btn btn-primary btn-calculate">계산하기</button>
                </div>
                <div class="price_right">
                    <div class="price_black">
                        <p class="kurly-text-05">
                            배송비<span class="kurly-text-07">(건당)</span>
                        </p>
                        <div class="price_info rdoPickup">
                            <h2 class="kurly-text-02 fee_price">0<span class="kurly-text-05">원</span></h2>
                            <p class="kurly-text-10"></p>
                        </div>
                        <div class="price_info rdoSelf">
                            <h2 class="kurly-text-02">0<span class="kurly-text-05">원</span></h2>
                            <p class="kurly-text-10"></p>
                        </div>
                    </div>
                    <button type="button" class="btn" onclick="javascript:location.href='/information/estimate';">견적문의 바로가기</button>
                    <div class="price_how">
                        <span class="kurly-text-09">상세견적 문의를 통해 정확한 비용을 확인해보세요.</span>
                    </div>
                </div>
             </div>
        </div>
      </div>

      <div class="inner-section accordion_secction">
        <div class="head-cont">
            <h3 class="kurly-text-02">자주 묻는 질문</h3>
          </div>
          <div class="accordion js-accordion">
            <div class="accordion_box">
                <div class="accordion-head">
                    <button type="button" aria-controls="acco-content1" aria-expanded="false">
                <h2 class="kurly-text-06">
                   <i class="questions"></i>
                    배송비 산정은 어떻게 되나요?
                </h2>
                  <i class="arrow"></i>
                </button>
                 </div>
                 <div id="acco-content1" class="accordion-content">
                    <h2 class="kurly-text-06 ">
                        새벽배송의 배송비는 1건(1박스) 기준으로 월 출고량, 박스 크기 및 무게 등의 정보 내용에 따라 구간별 단가로 책정하고 있습니다.
                    </h2>
                 </div>
            </div>

            <div class="accordion_box">
                <div class="accordion-head">
                    <button type="button" aria-controls="acco-content2" aria-expanded="false">
                <h2 class="kurly-text-06">
                   <i class="questions"></i>
                   박스 크기 및 무게의 제한이 있나요?
                </h2>
                  <i class="arrow"></i>
                </button>
                 </div>
                 <div id="acco-content2" class="accordion-content">
                    <h2 class="kurly-text-06 ">
                        세변합(외측기준) 140cm이하, 15kg이하 박스에 대하여 배송이 진행됩니다.
                    </h2>
                 </div>
            </div>

            <div class="accordion_box">
                <div class="accordion-head">
                    <button type="button" aria-controls="acco-content3" aria-expanded="false">
                <h2 class="kurly-text-06">
                   <i class="questions"></i>
                   반품시 처리 비용은 어떻게 산정하나요?
                </h2>
                  <i class="arrow"></i>
                </button>
                 </div>
                 <div id="acco-content3" class="accordion-content">
                    <h2 class="kurly-text-06 ">
                        반품 요청된 주문건은 배송비에 더해 반품 처리비용으로 추가 300원이 발생됩니다.</br>
                        새벽 배송으로 진행되는 반품은 회수 후 해당지역 터미널을 거쳐 메인 센터로 입고 후 입고차량을 통하여 고객사로 반송이 진행되기 때문에 D+3~5일 정도 소요됩니다.
                    </h2>
                 </div>
            </div>

            <div class="accordion_box">
                <div class="accordion-head">
                    <button type="button" aria-controls="acco-content4" aria-expanded="false">
                <h2 class="kurly-text-06">
                   <i class="questions"></i>
                   상품 입고지가 어디인가요?
                </h2>
                  <i class="arrow"></i>
                </button>
                 </div>
                 <div id="acco-content4" class="accordion-content">
                    <h2 class="kurly-text-06 ">
                        수도권 기준 동/서부 2곳중 선택 입고가 가능합니다.</br>
                        * 		동부 : 서울시 송파구 송파대로 55 서울복합물류센터</br>
                        * 		서부 : 경기도 김포시 고촌읍 아라육로57번길 15
                    </h2>
                 </div>
            </div>

            <div class="accordion_box">
                <div class="accordion-head">
                    <button type="button" aria-controls="acco-content5" aria-expanded="false">
                <h2 class="kurly-text-06">
                   <i class="questions"></i>
                   상품 입고를 위한 픽업서비스가 가능한가요?
                </h2>
                  <i class="arrow"></i>
                </button>
                 </div>
                 <div id="acco-content5" class="accordion-content">
                    <h2 class="kurly-text-06 ">
                        가능합니다. 상품 출고지와의 거리 및 수량등을 고려하여 차등의 비용이 발생됩니다.
                    </h2>
                 </div>
            </div>

          </div>


      </div>

      <div class="inquiry-section">
        <p class="text">편하신 경로로 문의주시면 신속하게 답변드리겠습니다.</p>
        <p class="kurly-text-02">궁금한 점이 있으신가요?</p>
        <span class="text-number">1833-3165</span>
        <div class="btn-wrap">
          <a href="/customer/inquiry_write" class="btn btn-primary-round">1:1 문의하기</a>
          <a href="#" class="btn-inquiry">카카오톡 문의하기</a>
        </div>
      </div>


    </div>
    <!-- e : contents -->
    
  <script>
	  ;($ => {
		  $.depth1Index = 2
		  $.depth2Index = 0
		  
		  $(function () {
				/** 입고 방법 */
			  $('.input-group.receiving').on('change-input', e => {
					let isPickup = e.value === 'rdoPickup' ? true : false
				  $('.price_flex')[isPickup ? 'addClass' : 'removeClass']('pickup')
				  $('.price_flex')[isPickup ? 'removeClass' : 'addClass']('self')
			  })
        $('.input-group.receiving').on('change-input', e => {
					let isPickup = e.value === 'rdoSelf' ? true : false
				  $('.price_flex')[isPickup ? 'addClass' : 'removeClass']('self')
				  $('.price_flex')[isPickup ? 'removeClass' : 'addClass']('pickup')
			  })
		  })
	  })(window.jQuery)
      
    $(function(){
      $('.rdo-box input[type="radio"]').on('change',function(e){
        if($(this).val() === 'rdoPickup') {
          $('.pickup-details').css('display','none');
          $('.pickup-details_left').css('display','flex');
          //$('.rdoPickup').css('display','block');
          //$('.rdoSelf').css('display','none');
        } else if ($(this).val() === 'rdoSelf') {
          $('.pickup-details').css('display','flex');
          $('.pickup-details_left').css('display','none');
          //$('.rdoPickup').css('display','none');
          //$('.rdoSelf').css('display','block');
        }
      });
      
    $('.btn-calculate').on('click',function(e) {
        var obj;

        obj = $('#delivery_count');
        if (obj.val() == "") {
            alert("월 물동량을 입력해주세요.");
            obj.focus();
            return false;
        }
        
        if (obj.val() >= 10000) {
            $('.rdoPickup').css('display','block');
            $('.rdoSelf').css('display','none');
            $(".rdoPickup").html("<h2 class='kurly-text-05 fee_price'>별도 협의 필요</h2><p class='kurly-text-10'>*1만건 이상의 물량은 상세 문의를 통해 확인 가능합니다.</p>");
            return false;
        }
        
        var url = "/information/fee_calculate?delivery_count=" + obj.val();
        
        $.get(url,function(data,status){
            if (status == "success") {
                if (data > 0) {
                    $('.rdoPickup').css('display','block');
                    $('.rdoSelf').css('display','none');
                    $(".fee_price").html(data.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ',') + "<span class='kurly-text-05'>원</span>");
                } else {
                    $('.rdoPickup').css('display','none');
                    $('.rdoSelf').css('display','block');
                }
            } else {
                alert("실시간 요금 조회 중 오류가 발생했습니다.");
            }
        });   
      });
    });
    
    function priceToString(price) {
        return price.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ',');
    }
  </script>    