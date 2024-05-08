/*
    Авторизация
 */

$('#login-btn').click(function (e) {
    e.preventDefault();

    $('input').removeClass('error');

    let login = $('input[name="loginn"]').val(),
        password = $('input[name="password"]').val();

    $.ajax({
        url: '/user/authorization/',
        type: 'POST',
        dataType: 'json',
        data: {
            login: login,
            password: password
        },
        success(data) {
            if (data.status) {
                $('.msg').removeClass('none').text(data.message);
                document.location.href = '/';
            } else {

                if (data.type === 1) {
                    data.fields.forEach(function (field) {
                        $(`input[name="${field}"]`).addClass('error');
                    });
                }

                $('.msg').removeClass('none').text(data.message);
            }

        }
    });

});

/*
    Регистрация
 */
$('#register-btn').click(function (e) {
    e.preventDefault();

    $(`input`).removeClass('error');

    let login = $('input[name="login"]').val(),
        pwd1 = $('input[name="pwd1"]').val(),
        name = $('input[name="name"]').val(),
        email = $('input[name="email"]').val(),
        pwd2 = $('input[name="pwd2"]').val();

    let formData = new FormData();
    formData.append('login', login);
    formData.append('pwd1', pwd1);
    formData.append('pwd2', pwd2);
    formData.append('name', name);
    formData.append('email', email);
    $.ajax({
        url: '/user/register/',
        type: 'POST',
        dataType: 'json',
        processData: false,
        contentType: false,
        cache: false,
        data: formData,
        success(data) {
            if (data.status) {
                $('.msg').removeClass('none').text(data.message);
                show('auth', 'block');
            } else {

                if (data.type === 1) {
                    data.fields.forEach(function (field) {
                        $(`input[name="${field}"]`).addClass('error');
                    });
                }

                $('.msg').removeClass('none').text(data.message);

            }

        }
    });
});

/*
 Добавление товара в корзину
 */
function addToCart(itemId) {
    console.log("js - addToCart", itemId);
    $.ajax({
        type: 'POST',
        url: "/cart/addtocart/" + itemId + '/',
        dataType: 'json',
        success: function (data) {
            if (data['success']) {
                $('#cartCntItems').html(data['cntItems']);

                $('#addCart_' + itemId).hide();
                $('#removeCart_' + itemId).show();
            }
        }
    });
}

/**
 * Удаление товара из корзины
 * @param {*} itemId id товара
 */
function removeFromCart(itemId) {
    console.log("js - removeFromCart", itemId);
    $.ajax({
        type: 'POST',
        url: "/cart/removefromcart/" + itemId + '/',
        dataType: 'json',
        success: function (data) {
            if (data['success']) {
                $('#cartCntItems').html(data['cntItems']);

                $('#addCart_' + itemId).hide();
                $('#removeCart_' + itemId).show();
            }
        }
    });

}
/**
 * Цена n-количества товара
 * @param {*} itemId 
 */
function conversionPrice(itemId) {
    var newCnt = $('#itemCnt_' + itemId).val();
    var itemPrice = $('#itemPrice_' + itemId).attr('value');
    var itemRealPrice = newCnt * itemPrice;
    if (newCnt > 1) $('#itemRealPrice_' + itemId).html(itemRealPrice + ' ₽');
    else $('#itemRealPrice_' + itemId).html('');
}

function counter(itemId) {
    $('#BtnPlus_' + itemId).unbind("click").click(function () {
        let num = parseInt($('#itemCnt_' + itemId).val());
        if (num < 5) num++;
        $('#itemCnt_' + itemId).val(num).trigger('onchange');
    });
    $('#BtnMinus_' + itemId).unbind("click").click(() => {
        let num = parseInt($('#itemCnt_' + itemId).val());
        if (num > 1) num--;
        $('#itemCnt_' + itemId).val(num).trigger('onchange');
    });

}

/**
 * Отображение блоков регистрации и авторизации
 * @param {*} div id
 * @param {*} state параметр display
 */
function show(div, state) {
    if (div == '0') {
        document.getElementById('reg').style.display = state;
        document.getElementById('gray').style.display = state;
        document.getElementById('auth').style.display = state;
    } else {
        document.getElementById('reg').style.display = 'none';
        document.getElementById('auth').style.display = 'none';
        document.getElementById(div).style.display = state;
        document.getElementById('gray').style.display = state;
    }
}



