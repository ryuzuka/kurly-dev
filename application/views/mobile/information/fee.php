    <div class="visual information">
        <div class="text">
            <h2>요금안내</h2>
            <p>간단한 문의서 작성으로 합리적인 요금을 확인해보세요</p>
        </div>
    </div>

<!--: Start #contents -->
    <div class="contents information_info">

        <div class="subtitle">
            <h1>
                서비스 요금
            </h1>
        </div>

        <div class="box">
            <img src="/mo/image/information/info01.png" class="icon">
            <h2>입고</h2>
            <div class="text">
                <p>입고방법</p>
                <div class="tag">
                    <span>자체입고</span><span>픽업서비스</span>
                </div>
                <div class="text_info">
                    <h3>픽업서비스 이용시 <b>거리/물량(차량톤수)</b>에 따라 비용산정</h3>
                </div>
            </div>
        </div>

        <div class="box">
            <img src="/mo/image/information/info02.png" class="icon">
            <h2>출고</h2>
            <div class="text">
                <p>제공서비스</p>
                <div class="tag">
                    <span>송장출력기 무료대여</span><span>송장용지 무상제공</span><span>배송완료 MMS발송 (사진포함)</span>
                </div>
                <p class="second">배송비</p>
                <div class="text_info">
                    <h2 class="price">
                        ~<?php if($lowest) { echo number_format($lowest); } else { echo "0"; } ?><span>(VAT 별도)</span>
                    </h2>
                    <p>물동량에 따라 할인 적용</p>
                    <p>센터 입고 시간 20시 기준</p>
                </div>
            </div>
        </div>


    </div>

    <div class="contents information_info information_info-section">



        <div class="subtitle">
            <h1>
                실시간 요금 계산기
            </h1>
        </div>

        <div class="price_flex">
            <div class="price_calculator">
                <p>월 물동량<span>(건)</span></p>
                <input class="increase-number" type="text" id="delivery_count" name="delivery_count">
                <p class="top30">입고 방법</p>
                <div class="input-group receiving">
                  <div class="rdo-box">
                    <input type="radio" id="rdoWay1-1" name="rdoWay" value="rdoPickup"><label for="rdoWay1-1">픽업요청</label>
                  </div>
                  <div class="rdo-box">
                    <input type="radio" id="rdoWay1-2" name="rdoWay" value="rdoSelf" checked><label for="rdoWay1-2">자체입고</label>
                  </div>
                </div>
              <div class="pickup-details">
                    <span>자체입고시 입고비 무료 적용</span>
              </div>
              <div class="pickup-details_left">
                <button class="button"></button>
                   <p>
                    픽업요청시 거리 및 물량에 따라 비용이 산정됩니다.</br>
                    <a href="#none">상세견적</a> 문의 또는 <a href="#none">1:1문의</a>를 통하여 비용을 확인해보세요
                   </p>

              </div>
              
                <button type="button" class="btn btn-primary btn-calculate">계산하기</button>
            </div>

            <div class="price_right">
                <div class="price_black">
                    <p>
                        배송비<span>(건당)</span>
                    </p>
                    <div class="price_info rdoSelf fee_price">
                        <h2>0<span>원</span></h2>
                    </div>
                    <div class="price_info rdoPickup">
                        <h2>0<span>원</span></h2>
                    </div>
                </div>
                <button type="button" class="btn" onclick="javascript:location.href='/information/estimate';">견적문의 바로가기</button>
                <div class="price_how">
                    <span>상세견적 문의를 통해 정확한 비용을 확인해보세요.</span>
                </div>
            </div>
         </div> 


    </div>    


    <div class="contents information_info">
        <div class="subtitle">
            <h1>
                자주 묻는 질문
            </h1>
        </div>

          <div class="accordion js-accordion">
            <div class="accordion_box">
                <div class="accordion-head">
                    <button type="button" aria-controls="acco-content1" aria-expanded="false">
                <h2>
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
                   반품시 처리 비용은 어떻게 <br>산정하나요?
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
                   상품 입고를 위한 픽업서비스가 <br>가능한가요?
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

    <div class="inquiry">
        <p>편하신 경로로 문의주시면 신속하게 답변드리겠습니다.</p>
        <h2>궁금한점이 있으신가요?</h2>
        <h3>1833-3165</h3>
        <div class="btn_are">
            <button class="btn btn-primary" onclick="javascript:location.href='/customer/inquiry_write';">1:1 문의하기</button>
            <button class="btn btn-primary">카카오톡 문의</button>
        </div>
    </div>

  <script>
    $(function(){
      $('.rdo-box input[type="radio"]').on('change',function(e){
        if($(this).val() === 'rdoPickup') {
          $('.pickup-details').css('display','none');
          $('.pickup-details_left').css('display','flex');
          $('.rdoPickup').css('display','block');
          $('.rdoSelf').css('display','none');
        } else if ($(this).val() === 'rdoSelf') {
          $('.pickup-details').css('display','flex');
          $('.pickup-details_left').css('display','none');
          $('.rdoPickup').css('display','none');
          $('.rdoSelf').css('display','block');
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
            
            $(".rdoSelf").html("<h2>별도 협의 필요</h2>");
            $(".rdoPickup").html("<h2>별도 협의 필요</h2>");
            return false;
        }
        
        var url = "/information/fee_calculate?delivery_count=" + obj.val();
        
        $.get(url,function(data,status){
            if (status == "success") {
                if (data > 0) {
                    $('.rdoPickup').css('display','none');
                    $('.rdoSelf').css('display','block');
                    $(".rdoPickup").html("<h2>"+ data.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ',') +"<span>원</span></h2>");
                    $(".rdoSelf").html("<h2>"+ data.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ',') +"<span>원</span></h2>");
                } else {
                    $('.rdoPickup').css('display','block');
                    $('.rdoSelf').css('display','none');
                }
            } else {
                alert("실시간 요금 조회 중 오류가 발생했습니다.");
            }
        });   
      });
    });
    
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
		  })
	  })(window.jQuery)
  </script>
    <!--: End #contents -->