function runScript(e) {
    if (e.keyCode == 42) {
        return false;
    } else {
        return true;
    }
}

/* function kriteriaPwd() {
    re = "^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$";

    pwdList.forEach(function (pw) {
        document.write('<span style="color:'+ (re.test(pw) ? 'green':'red') + '">' + pw + '</span><br/>');
    });
} */