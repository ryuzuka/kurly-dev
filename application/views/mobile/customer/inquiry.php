    <div class="visual">
      <div class="text">
          <h2>1:1 문의</h2>
          <p>친절하고 신속하게 답변드리겠습니다.</p>
      </div>
  </div>

    <!-- s : contents -->
    <div class="">


      <div class="customer_section inner">

        <div class="tab js-tab">
            <div class="tab-list" role="tablist">
              <button type="button" id="tab1" role="tab" aria-controls="tab-content1" aria-selected="false">문의하기</button>
              <button type="button" id="tab2" role="tab" aria-controls="tab-content2" aria-selected="false">나의 문의내역</button>

            </div>
            <div class="tab-content">
              <div id="tab-content1" class="content" role="tabpanel" aria-labelledby="tab1" tabindex="0" hidden>
                <div class="personal_inquiry">
                    <h2>
                        기본정보
                   
                    </h2>
                    <div class="box">
                        <ul>
                            <li>
                                <label>성함<span>*</span></label>
                                <input type="text" placeholder="고객님의 성함을 입력해주세요.">
                            </li>
                            <li>
                                <label>메일주소<span>*</span></label>
                                <input type="text" placeholder="메일주소를 입력해주세요.">
                            </li>
                            <li>
                                <label>연락처<span>*</span></label>
                                <input type="number" placeholder="‘-’를 제외한 숫자만 입력해주세요.">
                            </li>
                            <li class="end">
                                <label>비밀번호<span>*</span></label>
                                <input type="password" placeholder="숫자/영문 포함 8자리 이상">
                            </li>
                            <li>
                              <span class="box_info">메일주소 및 비밀번호는 문의내역 조회시 이용됩니다.</span>
                            </li>
                        </ul>
                    </div>
                    <h2>
                        문의내용
                    </h2>
                    <div class="box">
                        <ul>
                            <li class="w100">
                                <label>제목<span>*</span></label>
                                <input type="text" placeholder="">
                            </li>
                            <li class="w100">
                                <label>내용<span>*</span></label>
                               <textarea placeholder="내용을 입력해주세요."></textarea>
                            </li>
                            <li class="w100">
                                <div class="file">
                                    <div class="btn_are">
                                        <button class="btn btn secondary w100">파일첨부</button>
                                        <p>JPG, PNG, GIF 형식의 파일만 첨부 가능합니다.</p>
                                          <p>   최대 3개까지 첨부 가능합니다.</p>
                                    </div>
                                    <div class="file_info">
                                        <span>
                                            문의사항1.jpg
                                        </span><br>
                                        <span>
                                            문의사항2.jpg
                                        </span><br>
                                        <span>
                                            문의사항3.jpg
                                        </span>
                                    </div>

                                </div>
                            </li>
                        </ul>
                    </div>

                    <h2>개인정보 수집·이용 동의</h2>
        <div class="textarea-type js-textarea">
          <textarea id="txt-field2" name="txt-field" cols="30" rows="10">- 이용자가 제공한 모든 정보는 다음의 목적을 위해 활용하며, 하기 목적 이외의 용도로는 사용되지 않습니다.
① 개인정보 수집 항목 및 수집·이용 목적
 가) 수집 항목 (필수항목)
- 성명(국문), 주민등록번호, 주소, 전화번호(자택, 휴대전화), 사진, 이메일, 나이, 재학정보, 병역사항, 외국어 점수, 가족관계, 재산정도, 수상
   내역, 사회활동, 타 장학금 수혜현황, 요식업 종사 현황 등 지원 신청서에 기재된 정보 또는 신청자가 제공한 정보
- 이용자가 제공한 모든 정보는 다음의 목적을 위해 활용하며, 하기 목적 이외의 용도로는 사용되지 않습니다.
          </textarea>
        </div>
        <div class="pre_agree">
          <span>개인정보 수집 및 이용에 대해 동의를 거부하실 수 있으나 거부하시는 경우 견적 문의가 불가합니다.</span>
          <div class="pre_agree_are">
            <div class="input_are">
            <input type="checkbox" id="pre_agree" name="pre_agree"><label for="pre_agree"></label>
            </div>
            <p>동의합니다.</p>
          </div>
        </div>

                     <div class="btn-wrap">
                          <button type="button" class="btn btn-primary w100">문의하기</button>
                     </div>

                </div>
              </div>



              <div id="tab-content2" class="content" role="tabpanel" aria-labelledby="tab2" tabindex="0" hidden>
                <div class="personal_inquiry">
                    <div class="box">
                        <h3>1:1문의 접수 시 등록하신<br>
                          이메일/비밀번호를 입력해주세요.</h3>
                        <ul>
                            <li>
                                <label>이메일</label>
                                <input type="text" placeholder="">
                            </li>
                            <li>
                                <label>비밀번호</label>
                                <input type="password" placeholder="">
                            </li>
                        </ul>
                        <div class="notice">
                            이메일 및 비밀번호를 분실하셨을 경우 고객센터로 문의해주세요. <br>(고객센터 : 1833-3165)
                        </div>
                    </div>
                    <div class="btn-wrap">
                        <button type="button" class="btn btn-primary w100">조회하기</button>
                   </div>
                </div>
              </div>

            </div>
          </div>
        
      </div>
  
    </div>
    <!-- e : contents -->
    
  <script>
	  ;($ => {
		  $.depth1Index = 4
		  $.depth2Index = 2
		
		  $(function () {
		  })
	  })(window.jQuery)
  </script>    