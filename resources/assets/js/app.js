
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

$(function() {
    $('.scrollbar-design').scrollbar();
    var $chat = $('.scrollbar-design.chat-message');
    $chat.scrollTop($chat[0].scrollHeight*100);

    $(document).on('click', '.open-modal', function(e) {
        e.preventDefault();
        e.stopImmediatePropagation;

        var $this = $(this),
            modal = $($this).data("modal");

        $("body").addClass("modal-open");
        $(".modal-dialog").scrollTop(0);
        $(modal).parents(".modal-dialog").addClass("open");
        setTimeout( function(){
            $(modal).addClass("open");
        }, 350);

        $(document).on('click', function(e) {
            var target = $(e.target);
            if ($(target).hasClass("modal-dialog")) {
                $(target).find(".modal-body").each( function(){
                    $(this).removeClass("open");
                });
                setTimeout( function(){
                    $(target).removeClass("open");
                    $("body").removeClass("modal-open");
                }, 350);
            }
        });
    });

    $(document).on('click', '.close-modal', function(e) {
        e.preventDefault();
        e.stopImmediatePropagation;

        var $this = $(this),
            modal = $($this).data("modal");

        $(modal).removeClass("open");
        setTimeout( function(){
            $(modal).parents(".modal-dialog").removeClass("open");
            $("body").removeClass("modal-open");
        }, 350);
    });

    $(document).on('click', '.chat-body .pin-icon', function() {
        $(this).toggleClass('pinned');
    });

    $(document).on('click', '.btn-file-upload', function() {
        $("#chat-file").click();
    });

    $(document).on('click', '.btn-toggle', function() {
        var toggleID = $(this).data('toggle');
        $('.toggle-review').toggle();
        animateToLeft(toggleID);
    });

    $(document).on('click', '.toggle-project', function(e) {
        $('.toggletag.open').removeClass('open');
        var toggleID = $(this).data('toggle');
        $(toggleID).toggleClass('open');
        e.stopPropagation();
    });

    $(document).on('click', '.btn-smiley', function(e) {
        $('.emoji-container').toggleClass('open');
        e.stopPropagation();
    });

    $(document).on('focus', '.new-chat-info .input-container input', function(e) {
        $('.search-list').toggleClass('open');
        e.stopPropagation();
    });

    $(document).on('focus', '.right-content input', function(e) {
        $('.search-user-list').toggleClass('open');
        e.stopPropagation();
    });

    $(document).click(function(e) {
        if(!$(e.target).closest('.toggletag').length) {
            $('.project-menu ul > li').removeClass('active');
            $('.toggletag').removeClass('open');
        }
        if(!$(e.target).closest('.btn-smiley').length) {
            $('.emoji-container').removeClass('open');
        }
        if(!$(e.target).closest('.new-chat-info .input-container input').length) {
            $('.search-list').removeClass('open');
        }
        if(!$(e.target).closest('.right-content input').length) {
            $('.search-user-list').removeClass('open');
        }
    });

    $(document).on('click', 'ul.list-container > li ul li', function() {
        $('ul.list-container > li ul li').removeClass('selected');
        $(this).addClass('selected');
        var noti = $(this).find('.notibadge-msg');
        var user_delete = $(this).find('.user-delete');
        noti.addClass('empty');
        if ($('.user-delete:not(.empty)')) {
            $('.user-delete:not(.empty)').addClass('empty');
            user_delete.removeClass('empty');
        }
    });

    $(document).on('click', 'ul.list-container > li ul li .user-delete', function(e) {
        e.stopPropagation();
    });

    $(document).on('click', '.project-menu ul li', function() {
        $('.project-menu ul li').removeClass('active');
        $(this).addClass('active');
    });

    $alert = $('.alert-frame');
    $alert_btn = $('.alert-body .btn-primary');
    $alert.bind('webkitAnimationEnd oanimationend msAnimationEnd animationend', function(e) {
        if($alert.hasClass('state-leave')) {
            $alert.removeClass('state-leave');
        }
    });

    $(document).on('click', '.alert-frame', function() {
        $('.alert-frame .alert').toggleClass('alertShake');
    });

    $(document).on('click', '.alert-frame .alert', function(e) {
        e.stopPropagation();
    });

    $(document).on('click', '.alert-close', function() {
        $alert.removeClass('state-appear').addClass('state-leave');
        setTimeout(function() {
            $alert_btn.removeClass().addClass('btn btn-primary');
        }, 300);
        if ($('.btn-primary').hasClass('warning')) {
            setTimeout(function() {
                $('.alert-body .btn-primary-outline').remove();
            }, 350);
        }
    });

    $(document).on('click', '.alert-open', function() {
        $title = "Are You sure?";
        $content = "This will delete permanently into your account!";
        $btn = "warning"; //success,warning
        $btn_name = "Delete";
        $btn_event_name = "alert-event-sample";

        alertDetails($title,$content,$btn,$btn_name,$btn_event_name);
        $alert.removeClass('state-leave').addClass('state-appear');
    });

    $(document).on('click', '.alert-event-sample', function() {
        $title = "Success!";
        $content = "Your data has been deleted.";
        $btn = "success";
        $btn_name = "Alright";
        $btn_event_name = "";

        alertDetails($title,$content,$btn,$btn_name,$btn_event_name);
        $alert.removeClass('state-leave').addClass('state-appear');
    });

    function alertDetails(title,content,btn,btn_name,btn_event_name) {
        $title = $('.alert-body span');
        $content = $('.alert-body p');
        $btn = $('.alert-body .btn-primary');
        $img = $('.alert-body img');

        $title.text(title);
        $content.text(content);
        $btn.addClass(btn+' '+btn_event_name);
        $btn.text(btn_name);

        if (btn == "success") {
            $img.attr('src','img/alert_success.png');
            $alert_btn.removeClass().addClass('btn btn-primary success alert-close');
            $('.alert-body .btn-primary-outline').remove();
        }
        else if (btn == "warning") {
            $img.attr('src','img/alert_warning.png');
            $('.alert-body').append('<button type="button" class="btn btn-primary-outline alert-close">Cancel</button>');
        }
    }

    function animateToLeft(data) {
        $('#'+data).css({
            left: -50,
            opacity: 0,
            display: 'block',
        }).delay(500).animate({
            left: 0,
            opacity: 1,
            queue: false
        }, 'fast');
    }

    // For Demo
    $(document).on('click', 'ul.list-container > li > .scrollbar-design ul li', function() {
        $('.chat-container ul').fadeOut();
        $('.chat-container .loading-container').fadeIn();
        setTimeout(function() {
            $('.chat-container .loading-container').fadeOut();
            $('.chat-container ul').fadeIn();
        }, 300);

        if($(this).hasClass('demo-user1')) {
            $('.center-panel .header').removeClass('offline').addClass('online');
            $('.center-panel .header .chat-info .status').text('Active now');
            $('.new-chat-info').hide();
            $('.project-info').hide();
            $('.chat-info').show();
            var name = $(this).find('span').text();
            $('.center-panel .header .chat-info .name').text(name);
            $('.chat-form form').show();
            $('.chat-accept-options').hide();
            $('.demo-message-right,.message-right').delay(500).show(0);
            $('.chat-new-description').hide();
        }
        else if ($(this).hasClass('demo-user2')) {
            $('.center-panel .header').removeClass('offline').addClass('online');
            $('.center-panel .header .chat-info .status').text('Active now');
            $('.new-chat-info').hide();
            $('.project-info').hide();
            $('.chat-info').show();
            var name = $(this).find('span').text();
            $('.center-panel .header .chat-info .name').text(name);
            $('.chat-form form').hide();
            $('.chat-accept-options').show();
            $('.message-right').hide();
            $('.chat-new-description').hide();
            $('.chat-accept-options > span').text('They won’t know you’ve seen it until you accept it');
        }
        else if ($(this).hasClass('demo-user3')) {
            $('.center-panel .header').removeClass('online').addClass('offline');
            $('.center-panel .header .chat-info .status').text('Offline');
            $('.new-chat-info').hide();
            $('.project-info').hide();
            $('.chat-info').show();
            var name = $(this).find('span').text();
            $('.center-panel .header .chat-info .name').text(name);
            $('.chat-form form').show();
            $('.chat-accept-options').hide();
            $('.demo-message-right,.message-right').delay(500).show(0);
            $('.chat-new-description').hide();
        }
        else if ($(this).hasClass('demo-project1')) {
            $('.center-panel .header').removeClass('offline').addClass('online');
            $('.new-chat-info').hide();
            $('.chat-info').hide();
            $('.project-info').show();
            $('.chat-form form').show();
            $('.chat-accept-options').hide();
            $('.demo-message-right,.message-right').delay(500).show(0);
            $('.chat-new-description').hide();
        }
        else if ($(this).hasClass('demo-project2')) {
            $('.center-panel .header').removeClass('offline').addClass('online');
            $('.new-chat-info').hide();
            $('.chat-info').hide();
            $('.project-info').show();
            $('.chat-form form').hide();
            $('.chat-accept-options').show();
            $('.chat-new-description').hide();
            $('.message-right').hide();
            $('.chat-accept-options > span').text('(Inviter name) inivited you in this project, do you accept it');
        }
    });

    $(document).on('click', '.pin-body a', function() {
        $(this).parent().remove();
    });

    $(document).on('click', '.chat-body .pin-icon', function() {
        var data =  '<div class="pin-body">'+
                        '<span>New Pinned</span>'+
                        '<div>When be draw drew ye. Defective in do recommend suffering. House it seven in spoil tiled court.</div>'+
                        '<a href="javascript:;">x</a>'+
                    '</div>';
        $('.panel.pin-notes .pin-container .pin-data').prepend(data);
    });

    $(document).on('click', '.chat-accept-options .btn-primary', function() {
        $('.chat-form form').show();
        $('.chat-accept-options').hide();
    });

    $(document).on('click', '.search-section .btn-new-msg', function() {
        $('.center-panel .header').removeClass('offline').removeClass('online');
        $('.chat-info').hide();
        $('.project-info').hide();
        $('.new-chat-info').show();
        $('.chat-container ul').fadeOut();
    });

    $(document).on('click', '.search-list ul > li', function() {
        $('.center-panel .header').removeClass('offline').addClass('online');
        $('.center-panel .header .chat-info .status').text('Active now');
        $('.new-chat-info').hide();
        $('.project-info').hide();
        $('.chat-info').show();
        $('.chat-new-description').show();
    });

    var $rows_search = $('.search-list ul > li');
    $('.new-chat-info .search-section input').keyup(function() {
        var val = $.trim($(this).val()).replace(/ +/g, ' ').toLowerCase();
        $rows_search.show().filter(function() {
            var text = $(this).text().replace(/\s+/g, ' ').toLowerCase();
            return !~text.indexOf(val);
        }).hide();
    });

    var $rows_user_list = $('.search-user-list ul > li');
    $('.right-content input').keyup(function() {
        var val = $.trim($(this).val()).replace(/ +/g, ' ').toLowerCase();
        $rows_user_list.show().filter(function() {
            var text = $(this).text().replace(/\s+/g, ' ').toLowerCase();
            return !~text.indexOf(val);
        }).hide();
    });

    $(document).on('click', '.chat-form .btn-primary', function() {
        $('.chat-container ul > li.message-right .multiple').find('span').remove();
        var text = $('.chat-form textarea').val();
        var data = '<div class="chat-body multiple">'+
                        '<div>'+text+'<i class="pin-icon chat"></i>'+
                            '<span>Read</span>'+
                        '</div>'+
                    '</div>';
        $('.chat-container ul > li.message-right').append(data);
        $('.chat-form textarea').val('')
    });

    $(document).on('click', '.right-content div ul > li button', function() {
        $(this).parent().remove();
    });

    $(document).on('click', '.right-content .search-user-list ul > li', function() {
        var length = $('.list-participants ul > li').length;
        var name = $(this).find('span').text();
        var data =  '<li>'+
                        '<img src="img/profile-avatar.png" style="margin-right:10px;">'+
                        '<span>'+name+'</span>'+
                        '<button type="button" name="" class="btn btn-close"></button>'+
                    '</li>';
        if (length <= 5) {
            $('.list-participants ul').prepend(data)
        }
    });
});

//  ANGELO JS

$(document).on('keyup','.chat-input',function(){
    var length = $(this).val().length;
    if (length > 0){
        $(".chat-typing").addClass('active');
    }
    else{
        $(".chat-typing").removeClass('active');   
    }
});

//  END OF ANGELO JS

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// Vue.component('example', require('./components/Example.vue'));
//
// const app = new Vue({
//     el: '#app'
// });
