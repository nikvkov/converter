
$( document ).ready(function()  {

    //отбработчик события нажатия на кнопку
    $("#bt_convert").on('click', function() {

        //отправка формы на обработку
        sendAjaxForm('./data/response.php');
        return false;

    });


});//document

//отправка запроса на промежуточный сервер(можно напрямую провайдеру, но тогда не будет кода PHP)
function sendAjaxForm(url) {
    try {
        $.ajax({
            url: url,                              //url страницы (action_ajax_form.php)
            type: "POST",                          //метод отправки
            dataType: "html",                      //формат данных
            data: $("#ajax_form").serialize(),     // Сеарилизуем объект
            success: function (response) {         //Данные отправлены успешно

                //получаем результат в формате JSON  парсим
                result = JSON.parse(response);

                console.log(result);

                //заполняем поля формы
                $('#result').val(result['result_summ']);
                $('#rate').val(result['rate']);

                if (result['rate'] != null) {
                    console.log(result['rate']);
                }
            },
            error: function (response) {             // Данные не отправлены

                console.log(response);

            }//try-catch
        });
    }catch(error) {
        //при исключении выводим собщение в консоль
        console.error(error);
    }
}
