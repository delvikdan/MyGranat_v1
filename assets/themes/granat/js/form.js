jQuery(document).ready(function($){

	//в этой функции отслеживается изменение чекбокса "я не робот"
	$(document).on('change', '.fofm input:checkbox', function() {
		if($(this).is(':checked')){
			$(".fofm input[type=submit]").removeAttr('disabled');
			$('.fofm input[type=hidden].valTrFal').val('valTrFal_true');
		}
		else {
			$(".fofm input[type=submit]").attr('disabled','disabled');
			$('.fofm input[type=hidden].valTrFal').val('valTrFal_disabled');
		}
	});

	//закрытие модального окна
	$('.close_modal, .overlay').click(function (){
		$('.confirm, .overlay').css({'opacity':'0', 'visibility':'hidden'});
		$('.balviform > .fofm textarea').val('');
		//сброс всех полей формы обраной связи
		$(':input','.fofm').not(':button, :submit, :reset, :hidden').val('').removeAttr('checked').removeAttr('selected');
		$(".fofm input[type=submit]").attr('disabled','disabled');
	});



	//аякс форма обратной связи
	//проверяет какой ответ был получен
	//и в зависимости от ответа
	//выводит информацию о статусе
	//отправки письма
	$(".fofm").submit(function() {
		var str = $(this).serialize();
		$.ajax({
			type: "POST",
			url: "/assets/themes/granat/send_form.php",
			data: str,
			success: function(msg) {
				if(msg == 'ok') {
					$('.confirm, .overlay').css('opacity','1');
					$('.confirm, .overlay').css('visibility','visible');
				}
				else {
					$('.confirm .window').html('<h5>Ошибка</h5><p>Сообщение не отправлено, убедитесь в правильности заполнение полей</p>');
					$('.confirm, .overlay').css('opacity','1');
					$('.confirm, .overlay').css('visibility','visible');
				}
			}
		});
		return false;
	});

});