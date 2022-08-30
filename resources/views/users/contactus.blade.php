<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="https://www.wongchhupeakpromotion.com/img/faviconn.png" href="https://www.wongchhupeakpromotion.com/img/faviconn.png"/>
    <link rel="icon" type="https://www.wongchhupeakpromotion.com/img/faviconn.png" href="https://www.wongchhupeakpromotion.com/img/faviconn.png"/>
    
    <link rel="stylesheet" href="https://www.wongchhupeakpromotion.com/css/fontawesome5pro/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <link rel="stylesheet" type="text/css"
          href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link rel="stylesheet" type="text/css"
          href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/themes/base/jquery-ui.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css"
          href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.2/css/intlTelInput.css">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/jquery.mb.YTPlayer/3.3.4/css/jquery.mb.YTPlayer.min.css">
    <link rel="stylesheet" href="https://www.wongchhupeakpromotion.com/css/style.css">
    <!-- for share -->
    <script type="text/javascript"
            src="https://platform-api.sharethis.com/js/sharethis.js#property=5f22b205535aae0012227ebf&product=inline-share-buttons"
            async="async"></script>
    <!-- for share -->
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-177293861-1"></script>
    <title>Contact Us</title>
</head>
<body>
<div class="col-md-7 col-sm-12 col-lg-7 col-xl-7 bg-white contact-form position-relative mx-auto mt-8">
                         <div class="inside bg-white text-center">
                             <h5>Enquiry Form</h5>
                             <p>Please fill out the quick form and we will be in touch with lightening speed.</p>



                             <form id="contact-form" method="post" action="{{ route('contact-us') }}" novalidate="novalidate" class="mt-5" style="opacity: 1;">
                             {{csrf_field()}}
                                 <div class="row">
                                     <div class="col-md-6 form-group position-relative">
                                         <i class="fas fa-user"></i>
                                         <input type="text" name="fullname" class="form-control" placeholder="Full Name" required="">
                                     </div>
                                     <div class="col-md-6 form-group position-relative">
                                         <i class="fas fa-envelope"></i>
                                         <input type="email" name="email" class="form-control" placeholder="Email Address" required="">
                                     </div>
                                     <input type="hidden" name="subject" value="Contact Us">
                                     <div class="col-md-12 form-group position-relative">
                                         <textarea rows="5" name="message" class="form-control" placeholder="Your Message" required=""></textarea>
                                     </div>
                                     <div class="col-md-12 mt-5">
                                         <button type="submit" class="btn btn-primary d-block mt-4 mx-auto w-100">
                                             <i class="fas fa-paper-plane"></i>&nbsp;&nbsp;&nbsp;Send Message
                                             <span class="spinner-border spinner-border-md" id="ajaxLoader" style="display: none;"></span>
                                         </button>
                                     </div>
                                     <div class="mt-4 text-center w-100">
                                         <p class="text-success mb-0" id="quotemsg"></p>
                                     </div>
                                 </div>
                             </form>
                         </div>
                     </div>
</body>
</html>