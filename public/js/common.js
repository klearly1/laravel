$().ready(function() {
   

});




function CheckEmail(str)
{                                                 
     var reg_email = /^([0-9a-zA-Z_\.-]+)@([0-9a-zA-Z_-]+)(\.[0-9a-zA-Z_-]+){1,2}$/;
     if(!reg_email.test(str)) {                            
          return false;         
     }                            
     else {                       
          return true;         
     }                            
}
function email_check(email) { //이메일 형식 
    var regex=/([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
	var portal = /([a-z|A-Z|0-9]+@(naver|daum|hanmail|nate|hotmail|yahoo|gmail|hitel|paran|dreamwiz|lycos).(com|net|co.kr))/;
    return (email != '' && email != 'undefined' && regex.test(email) && portal.test(email));
}

function logout() {
    $.ajax({
        url: '/ajax/logoutproc',
        type: 'POST',
        success: function(response) {
            location.href='/';
        },
        error: function(xhr, status, error) {
            alert('에러가 발생했습니다.');
        }
    });
}
function chkPW(pw)
{
    var num = pw.search(/[0-9]/g);
    var eng = pw.search(/[a-z]/ig);
    var spe = pw.search(/[`~!@@#$%^&*|₩₩₩'₩";:₩/?]/gi);
   
    if(pw.length < 6 || pw.length > 15){
     //alert("8자리 ~ 15자리 이내로 입력해주세요.");
     return false;
    }
    else if(pw.search(/\s/) != -1){
     //alert("비밀번호는 공백 없이 입력해주세요.");
     return false;
    }
    else if(num < 0 || eng < 0 || spe < 0 ){
     //alert("영문,숫자, 특수문자를 혼합하여 입력해주세요.");
     return false;
    }
    else {
       //console.log("통과"); 
       return true;
    }
}
