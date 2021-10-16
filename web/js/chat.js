/**
 * @types/jquery
 */
function message(text) {
	jQuery('#chat-result').append(text);
}

// alert('Hello, Js Chat!!!');

jQuery(document).ready(function ($) {

	var socket = new WebSocket("ws://chat.learn:8090/server.php");

	socket.onopen = function () {
		// alert("Соединение установлено.");
		message('Соединение установлено.');
	};


	socket.onclose = function (event) {

	}

	socket.onerror = function (error) {
		// alert("Ошибка " + error.message);
		message("Ошибка при соединение!!! " + error.message);
	};

	socket.onclose = function (event) {
		if (event.wasClean) {
			message('<div>Соединение закрыто чисто</div>');
		} else {
			message('<div>Обрыв соединения</div>'); // например, "убит" процесс сервера
		}
		message('<div>Код: ' + event.code + ' причина: ' + event.reason + '</div>');
	};

	socket.onmessage = function (event) {
		var data = JSON.parse(event.data);
		message("<div>Получены данные " + data.type + ' - ' + data.message + '</div>');
	};
});