<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="icon" href="./assets/images/favicon.png" type="image/png">
	<title><?= $site ?></title>
	<link rel="stylesheet" href="./assets/css/main.css?v=0.1">

	<!-- Recaptcha Here -->
	<script src="https://www.google.com/recaptcha/api.js?render=<?= $recaptcha_client_secret ?>"></script>
	<script>
		grecaptcha.ready(function() {
			grecaptcha.execute('<?= $recaptcha_client_secret ?>', {
				action: 'contact'
			}).then(function(token) {
				document.getElementById('recaptchaResponse1').value = token;
				document.getElementById('recaptchaResponse2').value = token;
				document.getElementById('recaptchaResponse3').value = token;
			});
		});
	</script>

	<!-- Google Tag Manager -->
	<script>
		(function(w, d, s, l, i) {
			w[l] = w[l] || [];
			w[l].push({
				'gtm.start': new Date().getTime(),
				event: 'gtm.js'
			});
			var f = d.getElementsByTagName(s)[0],
				j = d.createElement(s),
				dl = l != 'dataLayer' ? '&l=' + l : '';
			j.async = true;
			j.src = 'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
			f.parentNode.insertBefore(j, f);
		})(window, document, 'script', 'dataLayer', <?= $gtm_id ?>);
	</script>
	<!-- End Google Tag Manager -->
</head>

<body>
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=<?= $gtm_id ?>" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->

	<header>
		<div class="header-top-bar py-3">
			<div class="container-fluid pe-xxl-5">
				<div class="row justify-content-center justify-content-xxl-end">
					<div class="col-xxl-11">
						<div class="row justify-content-center justify-content-lg-between align-items-center">
							<div class="col-12 d-md-none">
								<div class="row gx-1 mobile-btn-row">
								<div class="col-6">
										<a href="#form" class="btn btn-extra-dark rounded-4 text-white text-uppercase p-2 font-helvetica-condensed">
											Book Online
										</a>
									</div>
									<div class="col-6">
										<a href="tel:<?= $phone_number ?>" class="btn btn-tertiary rounded-4 text-white p-2 font-helvetica-condensed d-flex align-items-center justify-content-center">
											<?= $phone_number ?>
										</a>
									</div>
								</div>
							</div>
							<div class="col-auto mb-n5 mb-md-n6 position-relative">
								<a href="./">
									<?= renderImg("logo.png", "logo", "w-100") ?>
								</a>
							</div>
							<div class="col d-none d-xl-block">
								<form action="./src/form-callback" method="POST">
									<input type="hidden" name="token" id="recaptchaResponse1" class="recaptchaResponse">
									<div class="row gx-2 align-items-center">
										<div class="col-auto font-helvetica-condensed text-uppercase h12 line-height-1 pe-xxl-4">
											<div class="text-tertiary">Busy Right now?</div>
											<div class="text-extra-dark">We can call you later!</div>
										</div>
										<div class="col">
											<div class="form-input-wrapper">
												<input class="form-control" name="name" placeholder="name" required>
												<div class="icon">
													<svg width="16" height="18" viewBox="0 0 16 18" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M8 9C10.4853 9 12.5 6.98528 12.5 4.5C12.5 2.01472 10.4853 0 8 0C5.51472 0 3.5 2.01472 3.5 4.5C3.5 6.98528 5.51472 9 8 9Z" fill="#212121" />
														<path d="M8 10.5C2.9375 10.5 0.5 13.659 0.5 15.4995V16.5C0.5 16.8978 0.658035 17.2794 0.93934 17.5607C1.22064 17.842 1.60218 18 2 18H14C14.3978 18 14.7794 17.842 15.0607 17.5607C15.342 17.2794 15.5 16.8978 15.5 16.5V15.4995C15.5 13.659 13.0625 10.5 8 10.5Z" fill="#212121" />
													</svg>
												</div>
											</div>
										</div>
										<div class="col">
											<div class="form-input-wrapper">
												<input class="form-control" name="phone" placeholder="number" required>
												<div class="icon">
													<svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M13.167 11.021L10.45 9.81401C10.1677 9.68776 9.85153 9.65853 9.55087 9.73089C9.2502 9.80326 8.98195 9.97314 8.78801 10.214L8.00501 11.193C6.72131 10.3693 5.62855 9.28061 4.80001 8.00001L5.77901 7.21701C6.01966 7.02312 6.18939 6.75505 6.26175 6.4546C6.3341 6.15415 6.30501 5.8382 6.17901 5.55601L4.98101 2.83201C4.84638 2.52869 4.60839 2.28305 4.30948 2.13891C4.01057 1.99476 3.67017 1.96149 3.34901 2.04501L1.04901 2.64501C0.715328 2.73135 0.425225 2.93774 0.234252 3.22466C0.0432786 3.51158 -0.0351428 3.85887 0.0140054 4.20001C0.442451 7.17478 1.82286 9.93078 3.94859 12.0554C6.07432 14.1801 8.83101 15.5591 11.806 15.986C12.147 16.0343 12.4937 15.9552 12.78 15.7639C13.0664 15.5726 13.2721 15.2825 13.358 14.949L13.958 12.649C14.0415 12.3279 14.0076 11.9876 13.8627 11.6892C13.7177 11.3908 13.471 11.1539 13.167 11.021Z" fill="#212121" />
														<path d="M12 7.99489e-06C11.3262 -0.00121822 10.663 0.168102 10.0722 0.4922C9.48144 0.816297 8.98229 1.28463 8.62125 1.85358C8.26022 2.42254 8.04904 3.0736 8.00738 3.74615C7.96572 4.4187 8.09494 5.09085 8.38301 5.70001L8.00001 8.00001L10.3 7.61701C10.8425 7.8732 11.4357 8.00406 12.0357 7.9999C12.6357 7.99575 13.227 7.85669 13.7659 7.59301C14.3048 7.32933 14.7776 6.9478 15.149 6.47667C15.5205 6.00554 15.7813 5.45687 15.912 4.8713C16.0426 4.28574 16.0399 3.67827 15.904 3.0939C15.7681 2.50952 15.5025 1.9632 15.1268 1.4954C14.7511 1.0276 14.2751 0.650303 13.7338 0.391447C13.1925 0.132591 12.6 -0.00119147 12 7.99489e-06Z" fill="#212121" />
													</svg>
												</div>
											</div>
										</div>
										<div class="col">
											<button type="submit" class="btn w-100 btn-tertiary rounded-4 text-white px-3 py-3 h17 font-helvetica-condensed d-flex align-items-center justify-content-center text-uppercase">
												Request Call back
											</button>
										</div>
									</div>
								</form>
							</div>
							<div class="col-auto d-none d-xl-block">
								<div class="vertical-divider"></div>
							</div>
							<div class="col col-lg-5 col-xl-3 d-none d-md-block">
								<div class="row gx-2 align-items-center">
									<div class="col-6">
										<a href="#form" class="btn btn-extra-dark rounded-4 text-white text-uppercase px-3 py-3 h17 font-helvetica-condensed d-flex align-items-center justify-content-center">
											<div class="pe-2">
												<svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M4.375 4.375H5" stroke="white" stroke-miterlimit="10" stroke-linecap="square" />
													<path d="M7.5 4.375H10.625" stroke="white" stroke-miterlimit="10" stroke-linecap="square" />
													<path d="M4.375 7.5H5" stroke="white" stroke-miterlimit="10" stroke-linecap="square" />
													<path d="M7.5 7.5H10.625" stroke="white" stroke-miterlimit="10" stroke-linecap="square" />
													<path d="M4.375 10.625H7.5" stroke="white" stroke-miterlimit="10" stroke-linecap="square" />
													<path d="M10 14.375V10.625H13.75L10 14.375Z" fill="white" />
													<path d="M10 14.375V10.625H13.75" stroke="white" stroke-miterlimit="10" />
													<path d="M10 14.375H1.25V0.625H13.75V10.625L10 14.375Z" stroke="white" stroke-miterlimit="10" stroke-linecap="square" />
												</svg>
											</div>
											<div>Book Online</div>
										</a>
									</div>
									<div class="col-6">
										<a href="tel:<?= $phone_number ?>" class="btn btn-tertiary rounded-4 text-white px-3 py-3 h17 font-helvetica-condensed d-flex align-items-center justify-content-center">
											<div class="pe-2">
												<svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M11.5212 9.64338L9.14378 8.58725C8.89676 8.47678 8.62011 8.45121 8.35703 8.51453C8.09395 8.57784 7.85923 8.72649 7.68953 8.93725L7.0044 9.79388C5.88117 9.07311 4.925 8.12053 4.20003 7L5.05665 6.31488C5.26722 6.14522 5.41574 5.91066 5.47905 5.64777C5.54236 5.38487 5.51691 5.10842 5.40665 4.8615L4.3584 2.478C4.24061 2.2126 4.03237 1.99766 3.77082 1.87154C3.50927 1.74541 3.21143 1.71629 2.9304 1.78938L0.917903 2.31438C0.625935 2.38992 0.372095 2.57051 0.204993 2.82157C0.0378917 3.07263 -0.0307271 3.3765 0.0122776 3.675C0.387167 6.27793 1.59502 8.68942 3.45504 10.5485C5.31505 12.4076 7.72716 13.6142 10.3303 13.9878C10.6286 14.03 10.932 13.9608 11.1826 13.7934C11.4331 13.626 11.6131 13.3722 11.6883 13.0804L12.2133 11.0679C12.2863 10.7869 12.2567 10.4891 12.1299 10.228C12.003 9.96692 11.7872 9.75962 11.5212 9.64338Z" fill="white" />
													<path d="M10.5 6.99553e-06C9.91038 -0.00106595 9.3301 0.147089 8.81317 0.430675C8.29624 0.71426 7.85949 1.12405 7.54358 1.62189C7.22767 2.11972 7.04289 2.6894 7.00644 3.27788C6.96999 3.86636 7.08306 4.45449 7.33512 4.98751L6.99999 7.00001L9.01249 6.66488C9.4872 6.88905 10.0063 7.00355 10.5312 6.99992C11.0562 6.99628 11.5736 6.8746 12.0452 6.64388C12.5167 6.41317 12.9303 6.07933 13.2554 5.66709C13.5804 5.25484 13.8086 4.77476 13.9229 4.26239C14.0373 3.75002 14.0349 3.21849 13.916 2.70716C13.7971 2.19583 13.5647 1.7178 13.2359 1.30848C12.9072 0.899152 12.4907 0.569015 12.0171 0.342516C11.5435 0.116017 11.025 -0.00104254 10.5 6.99553e-06Z" fill="white" />
												</svg>
											</div>
											<div><?= $phone_number ?></div>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="banner">
			<div class="container-fluid px-0">
				<div class="row g-0">
					<div class="col-xl-10 mainbar">
						<div class="row gx-0 justify-content-center">
							<div class="col-11 col-xxl-10">
								<div class="row pt-5 pt-md-6 pb-5 pb-md-8 pb-xl-5 ps-xxl-4 justify-content-between align-items-end">
									<div class="col-lg-9 col-xl-7 pe-xxl-7">
										<div class="text-white text-uppercase h3 line-height-1 text-center text-md-start">Your Local<br><?= $location ?></div>
										<div class="text-tertiary text-uppercase h3 line-height-1 text-center text-md-start">Plumber Hero</div>
										<div class="row gx-1 gx-md-3 py-3">
											<div class="col-6 col-md-5">
												<div class="row gx-2 gx-md-3 align-items-center">
													<div class="col-3 col-md-auto"><?= renderImg("trophy.png", "icons") ?></div>
													<div class="col text-white text-uppercase line-height-1 h12">Our work is <span class="text-tertiary">100% Guaranteed</span></div>
												</div>
											</div>
											<div class="col-6">
												<div class="row gx-2 gx-md-3 align-items-center">
													<div class="col-3 col-md-auto"><?= renderImg("badge.png", "icons") ?></div>
													<div class="col text-white text-uppercase line-height-1 h12"><span class="text-tertiary">Licensed</span> And Professional Plumber</div>
												</div>
											</div>
										</div>
										<div class="text-white font-articulat h16 letter-spacing-n02 d-none d-md-block">Our Expert team of plumbers will provide you with the highest standard of work</div>
										<div class="cta cta-1 my-2 my-md-3">
											<div class="row g-0 justify-content-end">
												<div class="col-8 col-md-7">
													<div class="h6 line-height-1">Blocked Drains</div>
													<div class="h2 line-height-1 d-flex align-items-start"><span class="h9 pt-2">FR</span>$99.00</div>
												</div>
											</div>
										</div>
										<div class="cta cta-2">
											<div class="row g-0 justify-content-end">
												<div class="col-8 col-md-7">
													<div class="h6 line-height-1 letter-spacing-n05">General Plumbing</div>
													<div class="h2 line-height-1 d-flex align-items-start"><span class="h9 pt-2">FR</span>$79.00</div>
												</div>
											</div>
										</div>
										<div class="row justify-content-center mt-n3 mt-md-n4">
											<div class="col-7 col-md-12 text-center">
												<?= renderImg("0-call-out-fee.png", "lib") ?>
											</div>
										</div>
									</div>
									<div class="col-12 col-md-auto">
										<div class="row justify-content-end">
											<div class="col-4 col-md-8 col-lg-auto pt-4 pb-14 pb-lg-15 py-xl-0">
												<?= renderImg("24-hrs.png", "lib") ?>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-2 sidebar">
						<div class="sidebar-heading">
							Plumbing Specialists In
						</div>
						<div class="row gx-2 gy-4 pt-4 w-100">
							<div class="col-3 col-xl-12 d-flex flex-column align-items-center">
								<?= renderImg("installations.png", "lib") ?>
								<div class="text-white text-uppercase h19 text-center line-height-1 pt-2">Hot water repairs<br>and installations</div>
							</div>
							<div class="col-3 col-xl-12 d-flex flex-column align-items-center">
								<?= renderImg("blocked-drains.png", "lib") ?>
								<div class="text-white text-uppercase h19 text-center line-height-1 pt-2">Blocked Drains</div>
							</div>
							<div class="col-3 col-xl-12 d-flex flex-column align-items-center">
								<?= renderImg("pipe-relining.png", "lib") ?>
								<div class="text-white text-uppercase h19 text-center line-height-1 pt-2">Pipe Relining</div>
							</div>
							<div class="col-3 col-xl-12 d-flex flex-column align-items-center">
								<?= renderImg("gas-fitting.png", "lib") ?>
								<div class="text-white text-uppercase h19 text-center line-height-1 pt-2">Gas Fitting</div>
							</div>
						</div>
						<div class="sidebar-heading d-md-none pt-4">
							And Much Much More!
						</div>
						<div class="pt-4 d-none d-md-block">
							<?= renderImg("much-more.png", "lib") ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>