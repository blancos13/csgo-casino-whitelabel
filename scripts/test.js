function addRakeback(bet_amount, game, userid) {
	const rb_amount = (bet_amount * 0.05) * 0.1;

	// updateBalance2(userid, rb_amount)
	pool.query('UPDATE `users` SET `rakeback` = `rakeback` + ' + rb_amount + ' WHERE `userid` = ' + pool.escape(userid), function(err2){
		if(err2) return;

		pool.query('SELECT `rakeback` FROM `users` WHERE `userid` = ' + pool.escape(userid), function(err1, row1) {
			if(err1) return;
			if(row1.length == 0) return;
			
			return io.sockets.in(userid).emit('rb_update', row1[0].rakeback);
		});
	});
}
