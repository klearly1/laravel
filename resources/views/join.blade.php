<div class="container my-5">
    <div class="row justify-content-center my-5">
      <div class="col-md-4">
            <h2 class="text-center my-4">회원가입</h2>
            <div class="form-group">
                <label for="username">이름</label>
                <input type="text" class="form-control" name="mem_name" id="username" placeholder="이름을 입력하세요" autocomplete="new-password">
            </div>
            <div class="form-group">
                <label for="email">이메일 주소</label>
                <input type="email" class="form-control" name="mem_email" id="email" aria-describedby="emailHelp" placeholder="이메일을 입력하세요" autocomplete="false">
                <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
            </div>
            <div class="form-group">
                <label for="password">비밀번호 확인</label>
                <input type="password" class="form-control" name="mem_pass" id="password" placeholder="비밀번호를 입력하세요" autocomplete="new-password">
            </div>
            <div class="form-group">
                <label for="confirm-password">비밀번호 확인</label>
                <input type="password" class="form-control" name="mem_pass2" id="confirm-password" placeholder="비밀번호 확인" autocomplete="false">
            </div>
            <div class="position-relative mx-auto mt-5" id="collapseExample" style="">
                <div class="input-group input-group-lg w-100 text-left" style="margin: 0 auto;">
                    <div class="custom-control custom-checkbox d-inline-block w-100">
                        <input type="checkbox" name="agreementTerms" id="agreementTerms1" class="custom-control-input agreementTerms1" data-success="N">
                        <label class="custom-control-label  font-size-17" for="agreementTerms1">
                            <span style="margin-left: 1em;line-height: 2;"><b>[필수]</b> 닛뽄가이드 이용에 동의합니다.</span>
                        </label>
                    </div>
                </div>
            </div>
            <div class="form-group my-5">
                <button class="btn btn-primary btn-block my-3" id="joinMember">회원가입</button>
            </div>
        </div>
    </div>
  </div>

<script>
$().ready(function() {

  $('button#joinMember').off().on("click", function() {
        if($('input[name=mem_name]').val() == '') {
            alert("이름을 입력해주세요");
			return false;
		} else if($('input[name=mem_email]').val() == '' ) {
            alert("이메일 아이디를 입력해주세요");
			return false;
		} else if($('input[name=mem_pass]').val() == '') {
            alert("비밀번호를 입력해주세요");
			return false;
		} else if(!chkPW($("input[name=mem_pass]").val())) {
			alert('숫자, 영문 특수문자 조합 8-15자만 사용 가능합니다');
			return false;
        } else if($('input[name=mem_email2]').val() == '') {
            alert("비밀번호 확인을 입력해주세요");
			return false;
		} else if($('input[name=mem_pass]').val() != $('input[name=mem_pass2]').val()) {
			alert('설정한 비밀번호와 일치하지 않습니다.');
			return false;
		} else if ($('input[name="agreementTerms"]').is(':checked') == false) {    
            alert("회원 이용에 동의해주세요");
			return false;
		} else {
            var data = {
				'mem_name' : $('input[name=mem_name]').val(),
				'mem_email' : $('input[name=mem_email]').val(),
				'mem_pass' : $('input[name=mem_pass]').val(),
			};
            console.log(data);
			$.ajax({url:'/ajax/joinproc',data: data, dataType: 'json',async:false,type: 'POST',success:function(data){
            console.log(data);
                if(data.code == 'success') {
                    alert(data.msg);
                    location.href='/';
                } else {
                    alert(data.msg);
                }
            }});
        }
    });

    $("input[name=mem_name]").off().on("focusout", function() {
    
        $(this).attr('data-success', 'N');
        $('#joinname_check').css("display","none");
        if($(this).val() == '') {
            alert("이름을 입력해주세요.");
            return false;
        } else {
            $(this).attr('data-success', 'Y');
        }
    });

    $("input[name=mem_email]").off().on("focusout", function() {

        if(!email_check($(this).val())) {
            alert("이메일 형식에 맞추어 입력해주세요."); 
            return false;
        } else {
            $('input[name=mem_email]').attr('data-success', 'Y');
        }

    });

});
</script>


  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>