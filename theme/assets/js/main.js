var addServices = function(data){
	var container = $('#modal-container ul');

	container.html(data.map(function(h){
		return '<li>'+h.name+' '+h.price+'</li>';
	}));
}

$(document).ready(function() {
	var services = [];

	// при открытии модалки загружаем данные из сервера
	$('#open_basic_modal').click(function(){
		$.ajax({
			type: 'GET',
			async: false,
			url: "/api/services.php",
			dataType: 'json',
			success: function(data){
				if (data.success) {
					services = data.result;
					addServices(services);
				}else{
					alert(data.message);
				}
			}
		});
	});

	// отправка данных из формы
	$('#first-form, #second-form').submit(function(event){
		// список данных которые будем отправлять на сервер
		var data = ['email', 'name'],
			$form = $(this),
			postData = {};

		$.each(data, function(i, field){
			postData[field] = $form.find('input[name=user_'+field+']').val(); // принимаем данные из формы
			$form.find('#error_user_'+field).addClass('hidden'); // скрываем старые ошибки
		});
		$.ajax({
			type: 'POST',
			async: false,
			url: "/api/subscribe.php",
			dataType: 'json',
			data: postData,
			success: function(data){
				if(data.isValid){
					alert('Спасибо за подписку!');
					window.location.reload();
				}else{
					if (data.errors){
						$.each(data.errors, function(i, val){
							$form.find('#error_user_'+i).removeClass('hidden').html(i+':'+val);
						});
					};
				}
			}
		});
		event.preventDefault();
	});
});