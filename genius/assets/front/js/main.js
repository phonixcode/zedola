(function ($) {
	"user strict";
	$("body").addClass("overflow-hidden");
	$(window).on("load", function () {
		$(".loader").fadeOut(500);
		$("body").removeClass("overflow-hidden");
		var img = $(".bg_img");
		img.css("background-image", function () {
			var bg = `url(${$(this).data("img")})`;
			return bg;
		});
	});
	$(document).ready(function () {
		$(".accordion-title").on("click", function (e) {
			var element = $(this).parent(".accordion-item");
			if (element.hasClass("open")) {
				element.removeClass("open");
				element.find(".accordion-content").removeClass("open");
				element.find(".accordion-content").slideUp(200, "swing");
			} else {
				element.addClass("open");
				element.children(".accordion-content").slideDown(200, "swing");
				element
					.siblings(".accordion-item")
					.children(".accordion-content")
					.slideUp(200, "swing");
				element.siblings(".accordion-item").removeClass("open");
				element
					.siblings(".accordion-item")
					.find(".accordion-title")
					.removeClass("open");
				element
					.siblings(".accordion-item")
					.find(".accordion-content")
					.slideUp(200, "swing");
			}
		});

		$(".counter-item").each(function () {
			$(this).isInViewport(function (e) {
				if ("entered" === e)
					for (
						var i = 0;
						i < document.querySelectorAll(".odometer").length;
						i++
					) {
						var n = document.querySelectorAll(".odometer")[i];
						n.innerHTML = n.getAttribute("data-odometer-final");
					}
			});
		});
		$("ul>li>.sub-nav").parent("li").addClass("parent-menu");
		$("ul")
			.parent("li")
			.hover(function () {
				var menu = $(this).find("ul");
				var menupos = $(menu).offset();
				if (menupos.left + menu.width() > $(window).width()) {
					var newpos = -$(menu).width();
					menu.css({
						left: newpos,
					});
				}
			});
		$(".nav-menu li a").on("click", function (e) {
			var element = $(this).parent("li");
			if (element.hasClass("open")) {
				element.removeClass("open");
				element.find("li").removeClass("open");
				element.find("ul").slideUp(300, "swing");
			} else {
				element.addClass("open");
				element.children("ul").slideDown(300, "swing");
				element.siblings("li").children("ul").slideUp(300, "swing");
				element.siblings("li").removeClass("open");
				element.siblings("li").find("li").removeClass("open");
				element.siblings("li").find("ul").slideUp(300, "swing");
			}
		});

		var scrollTop = $(".toTopBtn");
		$(window).on("scroll", function () {
			if ($(this).scrollTop() < 500) {
				scrollTop.removeClass("active");
			} else {
				scrollTop.addClass("active");
			}
		});

		$(".toTopBtn").on("click", function () {
			$("html, body").animate(
				{
					scrollTop: 0,
				},
				500
			);
			return false;
		});

		$(".nav-toggle").on("click", function () {
			$(this).toggleClass("active");
			$(".overlayer").toggleClass("active");
			$(".nav-menu-area, .dashboard-sidebar").toggleClass("active");
		});

		$(".overlayer, .menu-close, .close-crypto-sidebar, .sidebar-close").on(
			"click",
			function () {
				$(
					".nav-menu-area, .dashboard-sidebar, .nav-toggle, .overlayer, .menu-close"
				).removeClass("active");
			}
		);

		var header = $("header");
		var fixed_top = $(".navbar-bottom");
		$(window).on("scroll", function () {
			if ($(this).scrollTop() > 200) {
				fixed_top.addClass("active");
			} else {
				fixed_top.removeClass("active");
			}
		});

		$(".dashboard-header-profile").on("click", function () {
			$(this).siblings(".user-toggle-menu").toggleClass("active");
		});
		$(".partner-slider").owlCarousel({
			items: 2,
			autoplay: true,
			margin: 14,
			responsive: {
				576: {
					items: 3,
				},
				768: {
					items: 4,
				},
				992: {
					items: 5,
				},
				1200: {
					items: 6,
				},
			},
		});
		$(".owl-prev").html('<i class="fas fa-angle-left">');
		$(".owl-next").html('<i class="fas fa-angle-right">');

		// Elements Animation
		if ($(".wow").length) {
			var wow = new WOW({
				boxClass: "wow",
				animateClass: "animated",
				offset: 0,
				mobile: true,
				live: true,
			});
			wow.init();
		}

		$(".countdown").each(function () {
			var date_value = $(this).data("date");
			$(this).countdown(
				{
					date: date_value,
					offset: +6,
					day: "Day",
					days: "Days",
				},
				function () {
					alert("Done!");
				}
			);
		});

		if ($(".ctas-section").prev().hasClass("bg--section")) {
			$("footer").addClass("bg--body");
			$(".ctas-section").addClass("bg--section");
			$(".footer-input-group .form-control").addClass("bg--section");
			$(".footer-input-group .input-group-text").addClass("bg--body");
			$(".footer-input-group .input-group-text").removeClass("bg--white");
		}

		const footerHeight = () => {
			var ctasHeight = $(".ctas-wrapper").height() / 2;
			$("footer").css("padding-top", ctasHeight);
			$(".ctas-section").css("height", ctasHeight);
			return true;
		};

		const userPanelHeight = () => {
			$(".dashborad--content").css("min-height", () => {
				var userBreadcrumb = $(".dashboard-header").height();
				return `calc(100vh - ${userBreadcrumb}px)`;
			});
		};
		footerHeight();
		userPanelHeight();
		$(window).on("resize", footerHeight, userPanelHeight);

		$(".dashboard-refer .input--group").on("click", () => {
			var textInput = $(this).find(".form-control");
			textInput.select();
			document.execCommand("copy");
		});
	});
})(jQuery);
