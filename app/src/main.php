<?php
include __DIR__ . '/../functions.php';
include __DIR__ . '/header.php';
?>

<section class="mobile-callback-form d-xl-none">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-auto text-center">
                <div class="hero">Busy Right Now?</div>
                <div class="sub">We Can Call You Later!</div>
            </div>
            <div class="col-12 col-lg pt-4 pt-lg-0">
                <form action="./src/form-callback" method="POST">
                    <input type="hidden" name="token" id="recaptchaResponse2" class="recaptchaResponse">
                    <div class="row g-2">
                        <div class="col-6">
                            <div class="form-input-wrapper">
                                <input class="form-control" name="name" placeholder="name" required>
                                <div class="icon">
                                    <svg width="16" height="18" viewBox="0 0 16 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8 9C10.4853 9 12.5 6.98528 12.5 4.5C12.5 2.01472 10.4853 0 8 0C5.51472 0 3.5 2.01472 3.5 4.5C3.5 6.98528 5.51472 9 8 9Z" fill="#fff" />
                                        <path d="M8 10.5C2.9375 10.5 0.5 13.659 0.5 15.4995V16.5C0.5 16.8978 0.658035 17.2794 0.93934 17.5607C1.22064 17.842 1.60218 18 2 18H14C14.3978 18 14.7794 17.842 15.0607 17.5607C15.342 17.2794 15.5 16.8978 15.5 16.5V15.4995C15.5 13.659 13.0625 10.5 8 10.5Z" fill="#fff" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-input-wrapper">
                                <input class="form-control" name="phone" placeholder="number" required>
                                <div class="icon">
                                    <svg width="17" height="16" viewBox="0 0 17 16" fill="#fff" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M13.167 11.021L10.45 9.81401C10.1677 9.68776 9.85153 9.65853 9.55087 9.73089C9.2502 9.80326 8.98195 9.97314 8.78801 10.214L8.00501 11.193C6.72131 10.3693 5.62855 9.28061 4.80001 8.00001L5.77901 7.21701C6.01966 7.02312 6.18939 6.75505 6.26175 6.4546C6.3341 6.15415 6.30501 5.8382 6.17901 5.55601L4.98101 2.83201C4.84638 2.52869 4.60839 2.28305 4.30948 2.13891C4.01057 1.99476 3.67017 1.96149 3.34901 2.04501L1.04901 2.64501C0.715328 2.73135 0.425225 2.93774 0.234252 3.22466C0.0432786 3.51158 -0.0351428 3.85887 0.0140054 4.20001C0.442451 7.17478 1.82286 9.93078 3.94859 12.0554C6.07432 14.1801 8.83101 15.5591 11.806 15.986C12.147 16.0343 12.4937 15.9552 12.78 15.7639C13.0664 15.5726 13.2721 15.2825 13.358 14.949L13.958 12.649C14.0415 12.3279 14.0076 11.9876 13.8627 11.6892C13.7177 11.3908 13.471 11.1539 13.167 11.021Z" fill="#fff" />
                                        <path d="M12 7.99489e-06C11.3262 -0.00121822 10.663 0.168102 10.0722 0.4922C9.48144 0.816297 8.98229 1.28463 8.62125 1.85358C8.26022 2.42254 8.04904 3.0736 8.00738 3.74615C7.96572 4.4187 8.09494 5.09085 8.38301 5.70001L8.00001 8.00001L10.3 7.61701C10.8425 7.8732 11.4357 8.00406 12.0357 7.9999C12.6357 7.99575 13.227 7.85669 13.7659 7.59301C14.3048 7.32933 14.7776 6.9478 15.149 6.47667C15.5205 6.00554 15.7813 5.45687 15.912 4.8713C16.0426 4.28574 16.0399 3.67827 15.904 3.0939C15.7681 2.50952 15.5025 1.9632 15.1268 1.4954C14.7511 1.0276 14.2751 0.650303 13.7338 0.391447C13.1925 0.132591 12.6 -0.00119147 12 7.99489e-06Z" fill="#fff" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-white form-control">
                                Request Call Back
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<section class="form" id="form">
    <div class="container">
        <div class="row gx-0 h-100 position-relative">
            <div class="col-md h-inherit">
                <div class="form-main">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-auto col-md col-lg-auto">
                            <div class="hero-heading">Book Online</div>
                            <div class="letter-spacing-n02 h14">Complete the form below &amp; we’ll get back to you asap!</div>
                        </div>
                        <div class="col-auto d-none d-md-block">
                            <a href="tel:<?= $phone_number ?>" class="btn btn-extra-dark rounded-4 text-uppercase line-height-1 font-helvetica-condensed py-3 px-5 px-xl-7 h12"><?= $phone_number ?></a>
                        </div>
                    </div>
                    <form action="./src/form" method="POST" class="pt-4 pt-md-5">
                        <input type="hidden" name="token" id="recaptchaResponse3" class="recaptchaResponse2">
                        <div class="row gy-3 gy-md-4">
                            <div class="col-12 col-md-6">
                                <label for="firstName">First Name</label>
                                <input id="firstName" class="form-control" type="text" placeholder="Eg: John" name="firstName" required>
                            </div>
                            <div class="col-12 col-md-6">
                                <label for="lastName">Last Name</label>
                                <input id="lastName" class="form-control" type="text" placeholder="Eg: Doe" name="lastName" required>
                            </div>
                            <div class="col-12 col-md-6">
                                <label for="phone">Contact Number</label>
                                <input id="phone" class="form-control" type="tel" placeholder="Enter a Contact Number" name="phone" required>
                            </div>
                            <div class="col-12 col-md-6">
                                <label for="email">Email Address</label>
                                <input id="email" class="form-control" type="email" placeholder="Enter Email Address" name="email" required>
                            </div>
                            <div class="col-12 pt-2">
                                <button type="submit" class="btn btn-quartinary form-control">
                                    Submit
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-xl-4 col-xxl-3 h-inherit emergency-service-ad">
                <div class="h4 font-helvetica-condensed text-uppercase line-height-3 text-center text-white">
                    Emergency Service
                </div>
                <div class="h13 text-white text-uppercase line-height-1 text-center py-4 font-helvetica-condensed letter-spacing-n02"><span class="text-extra-dark">We’re on call, all day and night</span> for your emergency needs.</div>
                <div class="d-flex justify-content-end"><?= renderImg("emergency-service.png", "lib", "emergency-service-vehicle") ?></div>
            </div>
        </div>
    </div>
</section>

<section class="reviews">
    <div class="container">
        <div class="row gy-2 gy-xl-0 gx-md-2 gx-xxl-3">
            <div class="col-md-6 col-xl-3">
                <div class="review-card bg-facebook">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-auto rating">
                            5.0
                        </div>
                        <div class="col-auto">
                            <div class="pb-1"><?= renderImg("facebook.png", "logo") ?></div>
                            47 Client Reviews
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-3">
                <div class="review-card bg-google">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-auto rating">
                            4.8
                        </div>
                        <div class="col-auto">
                            <div class="pb-1"><?= renderImg("google.png", "logo") ?></div>
                            218 Client Reviews
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-3">
                <div class="review-card bg-trustpilot">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-auto rating">
                            4.6
                        </div>
                        <div class="col-auto">
                            <div class="pb-1"><?= renderImg("trustpilot.png", "logo") ?></div>
                            156 Client Reviews
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-3">
                <div class="review-card bg-indeed">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-auto rating">
                            5.0
                        </div>
                        <div class="col-auto">
                            <div class="pb-1"><?= renderImg("indeed.png", "logo") ?></div>
                            3 Client Reviews
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="help">
    <div class="container">
        <div class="hero-heading">We’re here <span class="text-quartinary">to help you</span></div>
        <div class="h16 text-center pt-2 text-dark-grey">We have a team of highly experienced and qualified tradespeople who work together to provide the best outcomes for our customers.</div>

        <div class="row pt-4 pt-md-6 gy-3 gy-lg-0 gx-lg-1 gx-xl-3">
            <div class="col-md-6 col-lg-4">
                <div class="help-card">
                    <div class="help-img"><?= renderImg("help-1.jpg", "lib") ?></div>
                    <div class="caption">
                        <div class="icon">
                            <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M21.45 8.45L17.55 4.55L21.45 0.65C20.6375 0.1625 19.6625 0 18.6875 0C14.625 0 11.375 3.25 11.375 7.3125C11.375 8.125 11.5375 8.775 11.7 9.5875L0.97501 17.55C-0.32499 18.525 -0.32499 20.3125 0.65001 21.45L4.38751 25.35C5.52501 26.4875 7.31251 26.325 8.28751 25.025L16.25 14.3C17.0625 14.4625 17.875 14.625 18.6875 14.625C22.75 14.625 26 11.375 26 7.3125C26 6.3375 25.8375 5.3625 25.5125 4.55L21.45 8.45Z" fill="#FFB800" />
                            </svg>
                        </div>
                        Team Of Professional Tradespeople
                    </div>
                    <div class="contact-btn"><a href="#form" class="btn btn-primary h15 rounded-4 text-uppercase line-height-1 font-helvetica-condensed py-3 py-md-4 px-5 px-xl-7">Book Online</a></div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="help-card">
                    <div class="help-img"><?= renderImg("help-2.jpg", "lib") ?></div>
                    <div class="caption">
                        <div class="icon">
                            <svg width="33" height="36" viewBox="0 0 33 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M29.4012 20.3407L14.5303 5.46975C14.3896 5.32909 14.1989 5.25004 14 5.25H1.25C1.05109 5.25 0.860322 5.32902 0.71967 5.46967C0.579018 5.61032 0.5 5.80109 0.5 6V18.75C0.500042 18.9489 0.579088 19.1396 0.71975 19.2803L15.5907 34.1512C16.2946 34.8534 17.2482 35.2477 18.2424 35.2477C19.2366 35.2477 20.1902 34.8534 20.894 34.1512L29.4012 25.644C30.1034 24.9402 30.4977 23.9866 30.4977 22.9924C30.4977 21.9982 30.1034 21.0446 29.4012 20.3407ZM8.75 16.5C8.15666 16.5 7.57664 16.3241 7.08329 15.9944C6.58994 15.6648 6.20542 15.1962 5.97836 14.6481C5.7513 14.0999 5.69189 13.4967 5.80764 12.9147C5.9234 12.3328 6.20912 11.7982 6.62868 11.3787C7.04824 10.9591 7.58279 10.6734 8.16473 10.5576C8.74667 10.4419 9.34987 10.5013 9.89805 10.7284C10.4462 10.9554 10.9148 11.3399 11.2444 11.8333C11.5741 12.3266 11.75 12.9067 11.75 13.5C11.75 14.2956 11.4339 15.0587 10.8713 15.6213C10.3087 16.1839 9.54565 16.5 8.75 16.5Z" fill="#FFB800" />
                                <path d="M14 3.75C14.2956 3.74916 14.5884 3.807 14.8615 3.92016C15.1345 4.03333 15.3824 4.19957 15.5907 4.40925L29.9315 18.75L32.1815 16.5L17.0907 1.4085C16.6688 0.986789 16.0966 0.749929 15.5 0.75H4.25C4.05109 0.75 3.86032 0.829018 3.71967 0.96967C3.57902 1.11032 3.5 1.30109 3.5 1.5V3.75H14Z" fill="#FFB800" />
                            </svg>
                        </div>
                        Transparent<br> Pricing
                    </div>
                    <div class="contact-btn"><a href="#form" class="btn btn-primary h15 rounded-4 text-uppercase line-height-1 font-helvetica-condensed py-3 py-md-4 px-5 px-xl-7">Book Online</a></div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="help-card">
                    <div class="help-img"><?= renderImg("help-3.jpg", "lib") ?></div>
                    <div class="caption">
                        <div class="icon">
                            <svg width="35" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M27.7083 33.5416H19.6875V32.0833H27.7083C28.6749 32.0821 29.6016 31.6976 30.285 31.0141C30.9685 30.3307 31.353 29.404 31.3542 28.4374V23.3333H32.8125V28.4374C32.811 29.7907 32.2727 31.088 31.3158 32.0449C30.3589 33.0018 29.0616 33.54 27.7083 33.5416Z" fill="#FFB800" />
                                <path d="M16.9094 0.740116C8.62313 1.05366 2.1875 8.12512 2.1875 16.4179V24.7917C2.1875 25.7586 2.57161 26.6859 3.25534 27.3697C3.93907 28.0534 4.8664 28.4375 5.83333 28.4375H8.02083C8.60099 28.4375 9.15739 28.207 9.56763 27.7968C9.97787 27.3866 10.2083 26.8302 10.2083 26.25V18.9583C10.2083 18.3782 9.97787 17.8218 9.56763 17.4115C9.15739 17.0013 8.60099 16.7708 8.02083 16.7708H4.375V16.364C4.375 9.25605 9.89115 3.19449 16.994 2.92616C18.7584 2.86001 20.518 3.15018 22.1678 3.77933C23.8176 4.40847 25.3236 5.36368 26.596 6.58791C27.8683 7.81213 28.8808 9.28024 29.5731 10.9045C30.2653 12.5288 30.6231 14.276 30.625 16.0417V16.7708H26.25C25.6698 16.7708 25.1134 17.0013 24.7032 17.4115C24.293 17.8218 24.0625 18.3782 24.0625 18.9583V26.25C24.0625 26.8302 24.293 27.3866 24.7032 27.7968C25.1134 28.207 25.6698 28.4375 26.25 28.4375H29.1667C30.1336 28.4375 31.0609 28.0534 31.7447 27.3697C32.4284 26.6859 32.8125 25.7586 32.8125 24.7917V16.0417C32.8102 13.9817 32.3928 11.9434 31.5851 10.0484C30.7775 8.15335 29.5961 6.44056 28.1117 5.0123C26.6273 3.58404 24.8703 2.46962 22.9455 1.73559C21.0208 1.00157 18.9679 0.663 16.9094 0.740116Z" fill="#FFB800" />
                                <path d="M8.75 16.7708C9.33016 16.7708 9.88656 17.0012 10.2968 17.4115C10.707 17.8217 10.9375 18.3781 10.9375 18.9583V26.2499C10.9375 26.8301 10.707 27.3865 10.2968 27.7967C9.88656 28.207 9.33016 28.4374 8.75 28.4374H5.83333C4.8664 28.4374 3.93907 28.0533 3.25534 27.3696C2.57161 26.6859 2.1875 25.7585 2.1875 24.7916V16.7708H8.75Z" fill="#FFB800" />
                                <path d="M8.75002 16.7708H7.29169V28.4374H8.75002C9.33018 28.4374 9.88658 28.207 10.2968 27.7967C10.7071 27.3865 10.9375 26.8301 10.9375 26.2499V18.9583C10.9375 18.3781 10.7071 17.8217 10.2968 17.4115C9.88658 17.0012 9.33018 16.7708 8.75002 16.7708Z" fill="#FFB800" />
                                <path d="M26.25 16.7708C25.6698 16.7708 25.1134 17.0012 24.7032 17.4115C24.293 17.8217 24.0625 18.3781 24.0625 18.9583V26.2499C24.0625 26.8301 24.293 27.3865 24.7032 27.7967C25.1134 28.207 25.6698 28.4374 26.25 28.4374H29.1667C30.1336 28.4374 31.0609 28.0533 31.7447 27.3696C32.4284 26.6859 32.8125 25.7585 32.8125 24.7916V16.7708H26.25Z" fill="#FFB800" />
                                <path d="M26.25 16.7708H27.7083V28.4374H26.25C25.6698 28.4374 25.1134 28.207 24.7032 27.7967C24.293 27.3865 24.0625 26.8301 24.0625 26.2499V18.9583C24.0625 18.3781 24.293 17.8217 24.7032 17.4115C25.1134 17.0012 25.6698 16.7708 26.25 16.7708Z" fill="#FFB800" />
                                <path d="M24.7165 30.6162H17.5C17.0973 30.6162 16.7708 30.9427 16.7708 31.3454V33.5511C16.7708 33.9538 17.0973 34.2803 17.5 34.2803H24.7165C25.1192 34.2803 25.4457 33.9538 25.4457 33.5511V31.3454C25.4457 30.9427 25.1192 30.6162 24.7165 30.6162Z" fill="#FFB800" />
                            </svg>
                        </div>
                        Dedicated<br> Service
                    </div>
                    <div class="contact-btn"><a href="#form" class="btn btn-primary h15 rounded-4 text-uppercase line-height-1 font-helvetica-condensed py-3 py-md-4 px-5 px-xl-7">Book Online</a></div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="services">
    <div class="heading">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-12 col-md-auto text-white h3 font-helvetica-condensed text-center">Our Services</div>
                <div class="col-md col-lg-5 col-xl-4 pt-3 pt-md-0">
                    <div class="row gx-1 gx-md-3">
                        <div class="col-6"><a href="#form" class="btn d-block btn-primary h15 rounded-4 text-uppercase line-height-1 font-helvetica-condensed py-3 py-md-4">Book Online</a></div>
                        <div class="col-6"><a href="tel:<?= $phone_number ?>" class="btn d-block btn-primary h15 rounded-4 text-uppercase line-height-1 font-helvetica-condensed py-3 py-md-4"><?= $phone_number ?></a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="services-main">
        <div class="container">
            <div class="row justify-content-between align-items-center py-4">
                <div class="col-auto font-helvetica-condensed text-white letter-spacing-n02 line-height-1 h11 d-none d-lg-block">
                    <span class="text-primary">Browse</span> Our Services
                </div>
                <div class="col-lg-7 col-xl-6 col-xl-5">
                    <div class="row justify-content-between align-items-center service-nav-btns">
                        <div class="col-3 col-md-auto">
                            <div class="category-nav active" d-service-catergory-nav="all"><span class="d-none d-md-inline">Show</span> All</div>
                        </div>
                        <div class="col-3 col-md-auto">
                            <div class="category-nav" d-service-catergory-nav="d-plumbing">Plumbing</div>
                        </div>
                        <div class="col-3 col-md-auto">
                            <div class="category-nav" d-service-catergory-nav="d-drains">Drains</div>
                        </div>
                        <div class="col-3 col-md-auto">
                            <div class="category-nav" d-service-catergory-nav="d-sewer">Sewer</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-4 pb-5 pb-md-7">
                <div class="col-md-6 col-xl-4 service-category-wrapper d-plumbing">
                    <div class="service-card">
                        <div class="title-img"><?= renderImg("service-1.jpg", "lib") ?></div>
                        <div class="caption">Roof &amp; Gutter Leak Repairs</div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4 service-category-wrapper d-plumbing">
                    <div class="service-card">
                        <div class="title-img"><?= renderImg("service-2.jpg", "lib") ?></div>
                        <div class="caption">Water<br>Filter</div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4 service-category-wrapper d-plumbing">
                    <div class="service-card">
                        <div class="title-img"><?= renderImg("service-3.jpg", "lib") ?></div>
                        <div class="caption">Rainwater<br>Tanks</div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4 service-category-wrapper d-plumbing">
                    <div class="service-card">
                        <div class="title-img"><?= renderImg("service-4.jpg", "lib") ?></div>
                        <div class="caption">Bathroom<br>Renovations</div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4 service-category-wrapper d-drains d-sewer">
                    <div class="service-card">
                        <div class="title-img"><?= renderImg("service-5.jpg", "lib") ?></div>
                        <div class="caption">Pipe<br>Relining</div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4 service-category-wrapper d-drains">
                    <div class="service-card">
                        <div class="title-img"><?= renderImg("service-6.jpg", "lib") ?></div>
                        <div class="caption">Burst &amp; Leaking Pipe Repairs</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="about">
    <div class="top">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-xl-7">
                    <div class="hero-heading">Your Local Reliable <?= $location ?> Plumbers</div>
                    <div class="row">
                        <div class="col-xxl-11 pe-md-5">
                            <div class="text-white h16 py-3">We have a team of highly experienced and qualified tradespeople who work together to provide the best outcomes for our customers. We are based in <?= $location ?> and can provide service to anywhere in <?= $location ?>, anytime. Just call us on 1800 229 142 for immediate assistance.</div>
                            <div class="contact-card mt-1">
                                <div class="row align-items-center">
                                    <div class="col-12 col-md">
                                        <div class="text-tertiary text-uppercase font-helvetica-condensed h7">Need A service Hero?</div>
                                        <div class="h20">Call our specialist customer service team now for immediate assistance</div>
                                    </div>
                                    <div class="col-12 col-md-auto pt-2 pt-md-0">
                                        <a href="tel: <?= $phone_number ?>" class="btn btn-secondary d-block rounded-3 font-helvetica-condensed py-2 py-md-3 px-md-6 line-height-1 h15"><?= $phone_number ?></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="d-xl-none px-3 pb-15 text-center"><a href="tel:<?= $phone_number ?>" class="book_online"><?= renderImg("book-online.png", "lib") ?></a></div>
    <div class="bottom mt-10 mt-md-5 mt-lg-15 mt-xl-0">
        <div class="container">
            <div class="row justify-content-center justify-content-lg-start align-items-center">
                <div class="col-lg col-xl-4 col-xxl-3 text-uppercase font-helvetica-condensed h8 line-height-1 text-center text-lg-start">Interest Free Finance Options Available</div>
                <div class="col-auto px-5 pt-4 pt-lg-0"><?= renderImg("payment.png", "lib") ?></div>
            </div>
        </div>
    </div>

    <a href="tel:<?= $phone_number ?>" class="book_online d-none d-xl-block"><?= renderImg("book-online.png", "lib") ?></a>
    <?= renderImg("hero-footer.png", "background", "superhero_footer") ?>
</section>

<?php include __DIR__ . '/footer.php'; ?>