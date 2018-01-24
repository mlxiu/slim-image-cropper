NProgress.configure({ showSpinner: false });
NProgress.start();

$(window).on("load", function(){
	NProgress.done();
});
