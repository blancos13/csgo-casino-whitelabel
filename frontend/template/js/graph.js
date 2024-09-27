//GRAPH
var canvas, ctx;

var crash_settings = {
	start_time: new Date().getTime(),
	current_progress_time: 0,
	difference_time: 0,
	stage: 'starting'
}

var XTimeBeg, XTimeEnd, YPayoutBeg, YPayoutEnd, XScale, YScale;

var line_weight = 6;

$(window).resize(function(){
	crashGame_resize();
});

$(document).ready(function() {
	canvas = document.getElementById('crash_canvas');
	
	if(canvas !== null) {
		ctx = canvas.getContext('2d');

		setInterval(function(){
			var marks_size = 12;
			
			Object.assign(ctx, {
				fillStyle : '#bbbbd2',
				font: 'bold ' + marks_size + 'px Roboto,sans-serif',
				lineWidth: 2
			});
			
			var current_time = getTime();
			
			var currentGrowth = 100 * growthFunc(current_time);
			var currentPayout = 100 * calcPayout(current_time);
			
			var offset_bottom = 20;
			var offset_left = 50;
			
			XTimeBeg = 0;
			XTimeEnd = Math.max(10000, current_time);
			YPayoutBeg = 100;
			YPayoutEnd = Math.max(210, currentGrowth);
			XScale = (canvas.width - offset_left) / (XTimeEnd - XTimeBeg);
			YScale = (canvas.height - offset_bottom) / (YPayoutEnd - YPayoutBeg);
			
			ctx.beginPath();
			
			ctx.clearRect(0, 0, canvas.width, canvas.height);
			
			//DRAW AXES
			var payoutSeparation = tickSeparation(20 / YScale);
			var timeSeparation = tickSeparation(40 / XScale);

			for (var payout = 100; payout < YPayoutEnd; payout += payoutSeparation) {
				var y = calcY(payout) - offset_bottom;
				
				ctx.fillText((payout / 100).toFixed(2) + 'x', 0, canvas.height + y);
			}

			for (var time = 0; time < XTimeEnd; time += timeSeparation) {
				var x = calcX(time);
				
				ctx.fillText((time / 1000).toFixed(0) + 's', x + offset_left, canvas.height);
			}
			
			if(crash_settings.stage != 'crashed') $('#crash_crash').text(calcPayout(current_time).toFixed(2));
			
			if(crash_settings.stage == 'progress' || crash_settings.stage == 'crashed'){
				//DRAW LINE
				var colors = {
					progress: '#355e37',
					crashed: '#7d3232'
				}
				
				ctx.strokeStyle = colors[crash_settings.stage];
				ctx.lineWidth = line_weight;
				
				for (var t = XTimeBeg; t < current_time; t += parseInt(1 / XScale)) {
					var t1 = parseInt(t / 1000) * 1000;
					var x = calcX(t1) + offset_left;
					var y = calcY(100 * calcPayout(t1)) + canvas.height - offset_bottom;
					
					ctx.lineTo(x, y);
				};
				
				var x_begin = calcX(XTimeBeg) + offset_left;
				var y_begin = calcY(100 * calcPayout(XTimeBeg)) + canvas.height - offset_bottom;
				
				var x_current = calcX(current_time) + offset_left;
				var y_current = calcY(100 * calcPayout(current_time)) + canvas.height - offset_bottom;
				
				ctx.lineTo(x_current, y_current);
				ctx.stroke();
				
				if(current_time > 0){
					ctx.fillStyle = colors[crash_settings.stage];
					
					ctx.beginPath();
					ctx.arc(x_begin, y_begin, line_weight / 2 - 1, 0, 2 * Math.PI, false);
					ctx.arc(x_current, y_current, line_weight / 2 - 1, 0, 2 * Math.PI, false);
					ctx.fill();
				}
			}
			
			ctx.closePath();
		}, 1);
	}
});

function calcX(time) {
	return XScale * (time - XTimeBeg);
};

function calcY(payout) {
	return -(YScale * (payout - YPayoutBeg));
};

function getTime(){
	if(crash_settings.stage == 'progress') {
		var time = new Date().getTime() - crash_settings.start_time + crash_settings.difference_time;
		crash_settings.current_progress_time = time;
		
		return time;
	}
	
	if(crash_settings.stage == 'crashed') return crash_settings.current_progress_time;
	return 0;
}

function calcPayout(ms) {
	var gamePayout = Math.floor(100 * growthFunc(ms)) / 100;
	return gamePayout;
}

function growthFunc(ms) {
	var r = 0.00006;
	return Math.pow(Math.E, r * ms);
}

function tickSeparation(s) {
	var r = 1;
	while (true) {
		if (r > s) return r;
		r *= 2;
		
		if (r > s) return r;
		r *= 5
	}
}