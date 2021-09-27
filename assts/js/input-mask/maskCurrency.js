
function maskCurrency() {
	$('.mask-currency').maskMoney({
		prefix          : 'Rp ',
		thousands       : '.',
		decimal         : ',',
		precision       : 0,
		allowNegative   : false,
		affixesStay     : false,
		allowEmpty      : true,
		bringCaretAtEndOnFocus: false
	});
}