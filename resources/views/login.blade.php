<div class="container py-5 my-5">
    <div class="row justify-content-center my-5">
      <div class="col-md-4">
            <h2 class="text-center">로그인</h2>
            <div class="form-group">
                <label for="email" class="form-label">이메일</label>
                <input type="text" class="form-control" id="email" name="mem_email" placeholder="이메일을 입력하세요">
            </div>
            <div class="form-group">
                <label for="password" class="form-label">비밀번호</label>
                <input type="password" class="form-control" name="mem_pass" id="password" placeholder="비밀번호를 입력하세요">
            </div>
            <div class="form-group my-5">
                <button class="btn btn-primary btn-block my-3" id="loginBtn">로그인</button>
                <a href="/member/join" class="btn btn-light btn-block my-3 border">회원가입</a>
            </div>
        </div>
    </div>
</div>


<script>
$().ready(function() {

    $('button#loginBtn').off().on('click', function() {
        if($('input[name=mem_email]').val() == '') {
            alert('이메일 아이디를 입력해주세요.');
            return false;
        }
        else if(!CheckEmail($('input[name=mem_email]').val())) {
            alert('올바른 이메일주소를 입력해주세요.');
            return false;
        }
        else if($('input[name=mem_pass]').val() == '') {
            alert('비밀번호를 입력해주세요.');
            return false;
        }
        else {
            var data = {
                mem_email: $('input[name=mem_email]').val(),
                mem_pass: $('input[name=mem_pass]').val(),
            };            
            // console.log(data);
            $.ajax({type: "POST",url: "/ajax/loginproc",data: data,datatype: 'JSON',success:function(data){
                // console.log(data);
                if(data.res.code == "success") {
                    location.href = '/';
                }
                else {
                    alert(data.res.msg)
                }
            }});
        }    
    });
});

</script>