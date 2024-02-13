$(document).ready (function () {
            $("Knopka").click (function () {
                $('#messageShow').hide ();
                var name = $("name").value ();
                var email = $("email").value ();
                var subject = $("subject").value ();
                var message = $("message").value ();
                var fail = "";
                if (name.length < 3) fail = "Имя меньше 3-х символов";
                else if (email.split ('@').length - 1 == 0 || email.split ('.').length - 1 == 0)
                    fail = "Вы ввели некорректный email";
                else if (subject.length < 5)
                    fail = "Тема сообщения менее 5 символов";
                else if (message.length < 20)
                    fail = "Сообщение менее 20-ти символов";
                if (fail != "") {
                    $('#messageShow').html (fail + "<div class ='clear'><br></div>");
                    $('#messageShow').show ();
                    return false;
                }
                
                });
            });