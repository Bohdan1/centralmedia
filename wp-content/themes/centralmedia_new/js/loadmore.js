jQuery(function($) {
	$('#news_loadmore').click(function() {
		$(this).text('Завантаження...'); // изменяем текст кнопки, вы также можете добавить прелоадер
		var data = {
			'action': 'loadmore',
			'query': news_true_posts,
			'page' : news_current_page
		};
		$.ajax({
			url:news_ajaxurl, // обработчик
			data:data, // данные
			type:'POST', // тип запроса
			success:function(data){
				if( data ) { 
					$('#news_loadmore').text('Більше новин').before(data); // вставляем новые посты
					news_current_page++; // увеличиваем номер страницы на единицу
					if (news_current_page == news_max_pages) $("#news_loadmore").remove(); // если последняя страница, удаляем кнопку
				} else {
					$('#news_loadmore').remove(); // если мы дошли до последней страницы постов, скроем кнопку
				}
			}
		});
	});

	$('#video_loadmore').click(function() {
		$(this).text('Завантаження...'); // изменяем текст кнопки, вы также можете добавить прелоадер
		var data = {
			'action': 'loadmore',
			'query': true_posts,
			'page' : current_page
		};
		$.ajax({
			url:ajaxurl, // обработчик
			data:data, // данные
			type:'POST', // тип запроса
			success:function(data){
				if( data ) { 
					$('#video_loadmore').text('Більше відео').before(data); // вставляем новые посты
					current_page++; // увеличиваем номер страницы на единицу
					if (current_page == max_pages) $("#video_loadmore").remove(); // если последняя страница, удаляем кнопку
				} else {
					$('#video_loadmore').remove(); // если мы дошли до последней страницы постов, скроем кнопку
				}
			}
		});
	});

	$('#articles_loadmore').click(function() {
		$(this).text('Завантаження...'); // изменяем текст кнопки, вы также можете добавить прелоадер
		var data = {
			'action': 'loadmore',
			'query': true_posts,
			'page' : current_page
		};
		$.ajax({
			url:ajaxurl, // обработчик
			data:data, // данные
			type:'POST', // тип запроса
			success:function(data){
				if( data ) { 
					$('#articles_loadmore').text('Більше статтей').before(data); // вставляем новые посты
					current_page++; // увеличиваем номер страницы на единицу
					if (current_page == max_pages) $("#articles_loadmore").remove(); // если последняя страница, удаляем кнопку
				} else {
					$('#articles_loadmore').remove(); // если мы дошли до последней страницы постов, скроем кнопку
				}
			}
		});
	});

	$('#blogs_loadmore').click(function() {
		$(this).text('Завантаження...'); // изменяем текст кнопки, вы также можете добавить прелоадер
		var data = {
			'action': 'loadmore',
			'query': true_posts,
			'page' : current_page
		};
		$.ajax({
			url:ajaxurl, // обработчик
			data:data, // данные
			type:'POST', // тип запроса
			success:function(data){
				if( data ) { 
					$('#blogs_loadmore').text('Більше блогів').before(data); // вставляем новые посты
					current_page++; // увеличиваем номер страницы на единицу
					if (current_page == max_pages) $("#blogs_loadmore").remove(); // если последняя страница, удаляем кнопку
				} else {
					$('#blogs_loadmore').remove(); // если мы дошли до последней страницы постов, скроем кнопку
				}
			}
		});
	});

});