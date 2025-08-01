// 密码可见操作
var __password_eye = {
	show: '<svg class="svg" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" width="28"><path d="M512 256c-168 0-329.6 106.4-384 256 54.4 149.6 216 256 384 256 167.2 0 330.4-106.4 384.8-256-55.2-149.6-217.6-256-384.8-256z m0 416c-88 0-160-72-160-160s72-160 160-160 160 72 160 160-72 160-160 160z m96-160c0 52.8-43.2 96-96 96s-96-43.2-96-96 43.2-96 96-96 96 43.2 96 96z" p-id="5252"></path></svg>',
	hide: '<svg class="svg hide" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" width="28"><path d="M930.024 339.358c8.607-12.84 5.644-29.914-5.644-39.933-12.84-10.018-29.915-7.196-39.933 5.644-1.411 1.411-159.731 188.235-347.965 188.235-182.59 0-347.966-188.235-349.377-189.646-10.018-11.43-28.503-12.84-39.932-2.822-11.43 10.019-12.84 28.503-2.822 39.933 2.822 4.233 37.11 42.755 91.295 85.51l-72.81 75.632c-11.43 11.43-10.02 29.914 1.41 39.933 2.822 5.644 10.019 8.607 17.074 8.607 7.196 0 14.252-2.822 20.037-8.607l78.454-81.277c37.111 25.681 81.277 49.951 129.817 67.025l-29.914 101.314c-4.233 15.662 4.233 31.325 20.037 35.7h8.607c12.84 0 24.27-8.608 27.092-21.449l29.915-101.313c22.859 4.233 47.129 7.196 71.258 7.196 24.27 0 48.54-2.822 71.258-7.196l29.914 99.902c2.822 12.84 15.663 21.448 27.092 21.448 2.823 0 5.645 0 7.197-1.41 15.662-4.234 24.27-20.038 20.037-35.7l-30.338-99.903c48.54-17.074 92.706-41.344 129.817-67.025l77.043 79.866c5.644 5.644 12.84 8.607 20.037 8.607s14.252-2.822 20.037-8.607c11.43-11.43 11.43-28.504 1.411-39.933l-72.669-75.632c58.276-42.755 92.565-84.1 92.565-84.1z m0 0" p-id="2409"></path></svg>',
};
$.task.push(function () {
	_('[password-eye]').each(function () {
		var thi = $(this);
		thi.append('<div class="el-password-eye m-pic notcopy pointer">' + __password_eye.show + __password_eye.hide + '</div>');
	});
});
$(document).on('click', '.el-password-eye', function () {
	var thi = $(this),
		inp = thi.prev();
		thi.toggleClass('cur');
	if (thi.is('.cur')) {
		inp[0].setAttribute('type', 'text');
	} else {
		inp[0].setAttribute('type', 'password');
	}
	inp.focus();
});