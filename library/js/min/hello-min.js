jQuery(document).ready(function($){function e(){$(".email-capture").animate({right:"+=420"},200,"swing")}function t(){$(".email-capture").animate({right:"-=420"},200,"swing")}$(".hello-submit, .modal_close").on("click",function(){t(),sessionStorage.setItem("emailcapture","captured")}),console.log(),$(window).width()>768&&!sessionStorage.getItem("emailcapture")&&e()});