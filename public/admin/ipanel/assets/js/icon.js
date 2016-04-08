$(function () 
{
        $(".icon-picker").iconPicker();
});

(function ($) {

    $.fn.iconPicker = function (options) 
    {

        var mouseOver = false;
        var $popup = null;
        var icons = new Array(
                "adjust", "anchor", "archive", "area-chart", "arrows", "arrows-h", "arrows-v", "asterisk", "at", "automobile", "ban", "bank", "suitcase", "sun-o", "support", "tablet", "tachometer", "tag", "bar-chart", "bar-chart-o", "barcode", "bars",
                "bed", "beer", "bell", "bell-o", "bell-slash", "bell-slash-o", "bicycle", "binoculars", "birthday-cake", "bolt", "bomb", 
                "book", "bookmark", "bookmark-o", "briefcase", "bug", "building", "building-o", "bullhorn", "bullseye", "bus", "cab", "calculator", "calendar", "calendar-o", "camera", "camera-retro", "car", 
                "caret-square-o-down", "caret-square-o-left", "caret-square-o-right", "caret-square-o-up", "cart-arrow-down", "cart-plus", "cc", "certificate", "check", "check-circle", "check-circle-o", "check-square", "check-square-o", "child", "circle", "circle-o", "circle-o-notch", 
                "circle-thin", "clock-o", "clone", "close", "cloud", "cloud-download", "cloud-upload", "code", "code-fork", "coffee", "cog", "cogs", "comment", "comment-o", "comments", "comments-o", "compass", "copyright", "credit-card", 
                "crop", "crosshairs", "cube", "cubes", "cutlery", "dashboard", "database", "desktop", "diamond", "dot-circle-o", "download", "edit", "ellipsis-h", "ellipsis-v", "envelope", "envelope-o", "envelope-square", "eraser", "exchange", "exclamation", "exclamation-circle", 
                "exclamation-triangle", "external-link", "external-link-square", "eye", "eye-slash", "eyedropper", "fax", "feed", "female", "fighter-jet", "file-archive-o", "file-audio-o", "file-code-o", "file-excel-o", "file-image-o", "file-movie-o", "file-pdf-o", "file-photo-o", 
                "file-picture-o", "file-powerpoint-o", "file-sound-o", "file-video-o", "file-word-o", "file-zip-o", "film", "filter", "fire", "fire-extinguisher", "flag", "flag-checkered", "flag-o", "flash", "flask", "folder", "folder-o", "folder-open", "folder-open-o", "frown-o", 
                "futbol-o", "gamepad", "gavel", "gear", "gears", "gift", "glass", "globe", "graduation-cap", "group", "hand-grab-o", "hdd-o", "headphones", 
                "heart", "heart-o", "heartbeat", "history", "home", "hotel", "image", "inbox", "industry", "info", "info-circle", "institution", "key", 
                "keyboard-o", "language", "laptop", "leaf", "legal", "lemon-o", "level-down", "level-up", "life-bouy", "life-buoy", "life-ring", "life-saver", "lightbulb-o", "line-chart", "location-arrow", "lock", "magic", "magnet", "mail-forward", "mail-reply", "mail-reply-all", "male",
                "map", "map-marker", "map-o", "map-pin", "map-signs", "meh-o", "microphone", "microphone-slash", "minus", "minus-circle", "minus-square", "minus-square-o", "mobile", "mobile-phone", "money", "moon-o", "mortar-board", "motorcycle", "mouse-pointer", "music", "navicon",
                "newspaper-o", "object-group", "object-ungroup", "paint-brush", "paper-plane", "paper-plane-o", "paw", "pencil", "pencil-square", "pencil-square-o", "phone", "phone-square", "photo", "picture-o", "pie-chart", "plane", "plug", "plus", "plus-circle", "plus-square", "plus-square-o",
                "power-off", "print", "puzzle-piece", "qrcode", "question", "question-circle", "quote-left", "quote-right", "random", "recycle", "refresh", "registered", "remove", "reorder", "reply", "reply-all", "retweet", "road", "rocket", "rss", "rss-square", "search", "search-minus", "search-plus",
                "send", "send-o", "server", "share", "share-alt", "share-alt-square", "share-square", "share-square-o", "shield", "ship", "shopping-cart", "sign-in", "sign-out", "signal", "sitemap", "sliders", "smile-o", "soccer-ball-o", "sort", "sort-alpha-asc", "sort-alpha-desc", "sort-amount-asc",
                "sort-amount-desc", "sort-asc", "sort-desc", "sort-down", "sort-numeric-asc", "sort-numeric-desc", "sort-up", "space-shuttle", "spinner", "spoon", "square", "square-o", "star", "star-half", "star-half-empty", "star-half-full", "star-half-o", "star-o", "sticky-note", "sticky-note-o", "street-view",
                "tags", "tasks", "taxi", "television", "terminal", "thumb-tack", "thumbs-down", "thumbs-o-down", "thumbs-o-up", "thumbs-up", "ticket", "times", "times-circle", "times-circle-o", "tint", "toggle-down", "toggle-left", "toggle-off", "toggle-on", "toggle-right", "toggle-up", "trademark", "trash", 
                "trash-o", "tree", "trophy", "truck", "tty", "tv", "umbrella", "university", "unlock", "unlock-alt", "unsorted", "upload", "user", 
                "user-plus", "user-secret", "user-times", "users", "video-camera", "volume-down", "volume-off", "volume-up", "warning", "wheelchair","hand-grab-o", "hand-lizard-o", "hand-o-down", "hand-o-left", "hand-o-right", "hand-o-up", "hand-paper-o", "hand-peace-o", "hand-pointer-o", "hand-rock-o", "hand-scissors-o", 
                "hand-spock-o", "hand-stop-o", "thumbs-down", "thumbs-o-down", "thumbs-o-up", "thumbs-up", "ambulance", "automobile", "bicycle", "bus", "cab",
                "car", "fighter-jet", "motorcycle", "plane", "rocket", "ship", "space-shuttle", "subway", "taxi", "train", "truck", "wheelchair", 
                "genderless", "intersex", "mars", "mars-double", "mars-stroke", "mars-stroke-h", "mars-stroke-v", "mercury", "neuter", "transgender", 
                "transgender-alt", "venus", "venus-double", "venus-mars", " file", "file-archive-o", "file-audio-o", "file-code-o", "file-excel-o", 
                "file-image-o", "file-movie-o", "file-o", "file-pdf-o", "file-photo-o", "file-picture-o", "file-powerpoint-o", "file-sound-o", "file-text", 
                "file-text-o", "file-video-o", "file-word-o", "file-zip-o", " circle-o-notch", "cog", "gear", "refresh", "spinner", " check-square", 
                "check-square-o", "circle", "circle-o", "dot-circle-o", "minus-square", "minus-square-o", "plus-square", "plus-square-o", "square", 
                "square-o", " cc-amex", "cc-diners-club", "cc-discover", "cc-jcb", "cc-mastercard", "cc-paypal", "cc-stripe", "cc-visa", "credit-card", 
                "google-wallet", "paypal", " area-chart", "bar-chart", "bar-chart-o", "line-chart", "pie-chart", " bitcoin", "btc", "cny", "dollar", "eur", 
                "euro", "gbp", "gg", "gg-circle", "ils", "inr", "jpy", "krw", "money", "rmb", "rouble", "rub", "ruble", "rupee", "shekel", "sheqel", "try", 
                "turkish-lira", "usd", "won", "yen", " align-center", "align-justify", "align-left", "align-right", "bold", "chain", "chain-broken", 
                "clipboard", "columns", "copy", "cut", "dedent", "eraser", "file", "file-o", "file-text", "file-text-o", "files-o", "floppy-o", "font", 
                "header", "indent", "italic", "link", "list", "list-alt", "list-ol", "list-ul", "outdent", "paperclip", "paragraph", "paste", "repeat", 
                "rotate-left", "rotate-right", "save", "scissors", "strikethrough", "subscript", "superscript", "table", "text-height", "text-width",
                "th", "th-large", "th-list", "underline", "undo", "unlink", " angle-double-down", "angle-double-left", "angle-double-right", 
                "angle-double-up", "angle-down", "angle-left", "angle-right", "angle-up", "arrow-circle-down", "arrow-circle-left", 
                "arrow-circle-o-down", "arrow-circle-o-left", "arrow-circle-o-right", "arrow-circle-o-up", "arrow-circle-right", 
                "arrow-circle-up", "arrow-down", "arrow-left", "arrow-right", "arrow-up", "arrows", "arrows-alt", "arrows-h", "arrows-v", 
                "caret-down", "caret-left", "caret-right", "caret-square-o-down", "caret-square-o-left", "caret-square-o-right", "caret-square-o-up", 
                "caret-up", "chevron-circle-down", "chevron-circle-left", "chevron-circle-right", "chevron-circle-up", "chevron-down", "chevron-left", 
                "chevron-right", "chevron-up", "exchange", "hand-o-down", "hand-o-left", "hand-o-right", "hand-o-up", "long-arrow-down", "long-arrow-left", 
                "long-arrow-right", "long-arrow-up", "toggle-down", "toggle-left", "toggle-right", "toggle-up", " arrows-alt", "backward", "compress", 
                "eject", "expand", "fast-backward", "fast-forward", "forward", "pause", "play", "play-circle", "play-circle-o", "random", "step-backward", 
                "step-forward", "stop", "youtube-play", "wifi", "wrench"
            );
        var settings = $.extend({
        }, options);
        
        return this.each(function () 
        {
                element = this;
                if (!settings.buttonOnly && $(this).data("iconPicker") == undefined) 
                {
                        $this   = $(this).addClass("form-control");
                        $wraper = $("<div/>", {class: "input-group"});
                        $this.wrap($wraper);

                        $button = $("<span class=\"input-group-addon pointer\"><i class=\"glyphicon  glyphicon-picture\"></i></span>");
                        $this.after($button);
                        (function (ele) 
                        {
                                $button.click(function () 
                                {
                                        createUI(ele);
                                        showList(ele, icons);
                                });
                        })($this);

                        $(this).data("iconPicker", {attached: true});
                }

                function createUI($element) 
                {
                        $popup = $('<div/>', 
                        {
                                css: {
                                        'top': $element.offset().top + $element.outerHeight() + 6,
                                        'left': $element.offset().left
                                },
                                class: 'icon-popup'
                        })

                        $popup.html('<div class="ip-control"> \
                                    <ul> \
                                      <li><a href="javascript:;" class="btn" data-dir="-1"><span class="glyphicon  glyphicon-fast-backward"></span></a></li> \
                                      <li><input type="text" class="ip-search glyphicon  glyphicon-search" placeholder="Search" /></li> \
                                      <li><a href="javascript:;"  class="btn" data-dir="1"><span class="glyphicon  glyphicon-fast-forward"></span></a></li> \
                                    </ul> \
                                </div> \
                               <div class="icon-list"> </div> \
                           ').appendTo("body");
                    
                    $popup.addClass('dropdown-menu').show();
                    $popup.mouseenter(function () 
                    {
                            mouseOver = true;
                    }).mouseleave(function () 
                    {
                            mouseOver = false;
                    });

                    var lastVal = "", start_index = 0, per_page = 30, end_index = start_index + per_page;
                    
                    $(".ip-control .btn", $popup).click(function (e) 
                    {
                            e.stopPropagation();
                            var dir = $(this).attr("data-dir");
                            start_index = start_index + per_page * dir;
                            start_index = start_index < 0 ? 0 : start_index;
                            if (start_index + per_page <= 210) 
                            {
                                    $.each($(".icon-list>ul li"), function (i) 
                                    {
                                            if (i >= start_index && i < start_index + per_page) 
                                            {
                                                    $(this).show();
                                            } 
                                            else 
                                            {
                                                    $(this).hide();
                                            }
                                    });
                            } 
                            else 
                            {
                                    start_index = 180;
                            }
                    });

                    $('.ip-control .ip-search', $popup).on("keyup", function (e) 
                    {
                            if (lastVal != $(this).val()) 
                            {
                                    lastVal = $(this).val();
                                    if (lastVal == "") 
                                    {
                                            showList(icons);
                                    }
                                    else 
                                    {
                                        showList($element, $(icons).map(function (i, v) 
                                        {
                                                if (v.toLowerCase().indexOf(lastVal.toLowerCase()) != -1) 
                                                {
                                                        return v
                                                }
                                        }).get());
                                    }

                            }
                    });
                    
                    $(document).mouseup(function (e) 
                    {
                            if (!$popup.is(e.target) && $popup.has(e.target).length === 0) 
                            {
                                    removeInstance();
                            }
                    });

                }
            function removeInstance() 
            {
                    $(".icon-popup").remove();
            }
            
            function showList($element, arrLis) 
            {
                    $ul = $("<ul>");
                    for (var i in arrLis) 
                    {
                            $ul.append("<li><a href=\"#\" title=" + arrLis[i] + "><span class=\"fa fa-" + arrLis[i] + "\"></span></a></li>");
                    }
                    $(".icon-list", $popup).html($ul);
                    $(".icon-list li a", $popup).click(function (e) 
                    {
                            e.preventDefault();
                            var title = $(this).attr("title");
                            $element.val("fa fa-" + title);
                            removeInstance();
                    });
            }

        });
    }

}(jQuery));