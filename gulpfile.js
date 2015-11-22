/* Common plugIns*/
var gulp      		=   require('gulp'),
	watch 			=	require('gulp-watch');

/* PlugIns for SVG sprite */
var	svgSprite     	=   require('gulp-svg-sprite'),
	modf          	=   require("gulp-attr-remover"),
	svgFiles      	=   ["common", "how-it-works", "about-us", "property"]; // Create folder with respect to your file name insite svgs folder


/* This is to remove the fill attribute */
function predicate(elem) {
	"use strict";
	if (!/^((ftp|rtsp|mms):)?\/\//.test(elem.attr('fill'))) {
		return true;
	}
	return false;
}

/* SVG sprite task */
gulp.task('sprite', function() {
	svgFiles.forEach(function(svgFiles){
		var tsk = gulp.src('./img/svg/'+svgFiles+'/*.svg')
					.pipe(svgSprite(
						config = {
								mode : {
									symbol : {
										dest : '.',
										sprite : svgFiles+'-icons.svg',
									}
								},
								shape : {
									id : {
										generator: 'icon-%s'
									}
								}
							}
						));
					if(svgFiles == "vehicles" || svgFiles == "regions"){
					} else {
						// tsk.pipe(modf('*', 'fill', predicate));
					}
					tsk.pipe(gulp.dest('./icons/'));
	})
});



gulp.task('default', ['sprite']);






