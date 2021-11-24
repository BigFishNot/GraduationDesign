function checkname() {
            var u = document.getElementById("regname");
            var t = document.getElementById("prompt1");
            var reg = /^[\w_-]{6,16}$/;
            if (u == null || u.value.length == 0) {
                t.innerHTML = "名字必填，不能为空";
            }
            else if (!reg.test(u.value)) {
                t.innerHTML = "任意6到16位字母数字下划线连接线";
            }
            else {
                t.innerHTML = "";
            }

        }

        function checkpsd1() {
            var u = document.getElementById("regpsd1");
            var t = document.getElementById("prompt2");
            var reg = /^[\w_-]{6,16}$/;
            if (u == null || u.value.length == 0) {
                t.innerHTML = "密码必填，不能为空";
            }
            else if (!reg.test(u.value)) {
                t.innerHTML = "密码为任意6到16位字母数字下划线连接线";
            }
            else {
                t.innerHTML = "";
            }
        }

        function checkpsd2() {
            var u = document.getElementById("regpsd2");
            var t = document.getElementById("prompt3");
            var reg = /^[\w_-]{6,16}$/;
            var u2 = document.getElementById("regpsd1");
            if (u == null || u.value.length == 0) {
                t.innerHTML = "密码必填，不能为空";
            }
            else if (!reg.test(u.value)) {
                t.innerHTML = "密码为任意6到16位字母数字下划线连接线";
            }
            else if(u.value!=u2.value){
                t.innerHTML = "密码不一致！";
            }
            else {
                t.innerHTML = "";
            }
        }

        function checkemail() {
            var u = document.getElementById("regmail");
            var t = document.getElementById("prompt4");
            var reg = /^(\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*?)/;
            if (u == null || u.value.length == 0) {
                t.innerHTML = "邮箱不能为空";
            }
            else if (!reg.test(u.value)) {
                t.innerHTML = "邮箱格式不对";
            }
            else {
                t.innerHTML = "";
            }

        }

        function checktel() {
            var u = document.getElementById("regtel");
            var t = document.getElementById("prompt5");
            var reg = /^1[3578]\d{9}$/;
            if (u == null || u.value.length == 0) {
                t.innerHTML = "电话号码不能为空";
            }
            else if (!reg.test(u.value)) {
                t.innerHTML = "电话格式不对，以13/15/17/18开头11位数";
            }
            else {
                t.innerHTML = "";
            }


        }
