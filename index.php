<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đây là web của admin</title>
    <link type="text/css" rel="stylesheet" href="./stylescss_LMK/mycss.css" />

    <script src="./js_LMK/jquery-3.6.4.min.js"></script>
    <script>
        $(document).ready(function() {
            // alert('Hello')
            // Chọn tất cả thẻ p và áp dụng sự kiện
            $('p').mouseenter(function() {
                $(this).css('color', '#00FF00')
            })
            $('p').mouseleave(function() {
                $(this).css('color', '#000066')
            })
            // truy cập đối tượng bằng class
            $('.cls01').mouseenter(function() {
                $(this).css('color', '#FF0000')
            })
            $('.cls01').mouseleave(function() {
                $(this).css('color', '#0000FF')
            })
            // truy cập đối tượng bằng id
            $('#id01').mouseenter(function() {
                $(this).css('color', '#AA00BB')
                $(this).css('font-weight', 'bold')
            })
            $('#id01').mouseleave(function() {
                $(this).css('color', '#BB0000')
                $(this).css('font-weight', 'normal')

            })

            //menu
            $('.itemOrder').hide()
            $('.cateOrder').click(function() {
                $(this).next().slideDown()
            })
            $('.itemOrder').mouseleave(function() {
                $(this).slideUp()
            })

            // slide image
            $('.imgCls').mouseover(function() {
                var s = $(this).attr('src')
                $('#imgView').attr('src', s)
            })

            var s = $("#DivList").children()
            var l = s.length
            var i = 0
            setInterval(function() {
                if (i == 1) {
                    i = 0
                }
                var p = $(s[i].attr('src'))
                $("#imgView").attr('src', p)
                i++
            }, 3000)

            //jq ajax
            $('.linkmenu').click(function() {
                var v = $(this).attr('value');
                $('#getContent').load('./pageJS/' + v + '.php')
            })
            // form 
            $('#formreg').submit(function() {
                var username = $("input[name*='username']").val()
                if (username.length === 0 || username.length < 2) {
                    $("input[name*='username']").focus()
                    $("#noteForm").html("Username chưa hợp lệ!")
                    return false;
                }

                var password = $("input[name*='password']").val()
                if (password.length === 0 || password.length < 6) {
                    $("input[name*='password']").focus()
                    $("#noteForm").html("Password chưa hợp lệ!")
                    return false;
                }

                var hoten = $("input[name*='hoten']").val()
                if (hoten.length === 0 || hoten.length < 6) {
                    $("input[name*='hoten']").focus()
                    $("#noteForm").html("Họ tên chưa hợp lệ!")
                    return false;
                }

                var ngaysinh = $("input[name*='ngaysinh']").val()
                if (ngaysinh.length === 0) {
                    $("input[name*='username']").focus()
                    $("#noteForm").html("Ngày sinh chưa hợp lệ!")
                    return false;
                }

                var diachi = $("input[name*='diachi']").val()
                if (diachi.length === 0) {
                    $("input[name*='diachi']").focus()
                    $("#noteForm").html("Địa chỉ chưa hợp lệ!")
                    return false;
                }

                var dienthoai = $("input[name*='dienthoai']").val()
                if (dienthoai.length == 0 || dienthoai.length < 6) {
                    $("input[name*='dienthoai']").focus()
                    $("#noteForm").html("Điện thoại chưa hợp lệ!")
                    return false;
                }
                return true
            })
            // btn update
            $("temps").click(function() {
                var iduser = $(this).attr("value");
                $("#right_inner").load("./element_vmk/mUser/userUpdate.php?iduser=" + iduser);
            })
        })
    </script>
</head>

<body>
    <div id="top_div"></div>
    <div id="left_div">
        <?php require './elements_LMK/left.php'; ?>
    </div>
    <div id="center_div">
        <?php //require './pageJS./exjs.php';
        ?>
        <?php //require './pageJS/exjs02.php';
        ?>
        <?php //require './elements_LMK/mUser/userView.php';
        ?>
        <?php //require './pageJS/exjs03.php';
        ?>
        <?php require './elements_LMK/center.php'; ?>
        <div id="right_div"></div>
        <div id="bottom_div"></div>
</body>

</html>