//####################################################
// $uery Handle
//####################################################
(function($)
{
	$(document).ready(function()
	{
                $(".hideit").click(function()
                {
                        $(this).fadeOut();
                });
                
                //===== Datepickers =====//
	
                $( ".datepicker" ).datepicker({ 
                        defaultDate: +7,
                        autoSize: true,
                        dateFormat: 'dd-mm-yy',
                });	
                
                $( ".datepicker_full").datetimepicker({ 
                        defaultDate: "",
                        sideBySide: true
                });
                
                $( ".datepicker_full2").datetimepicker({ 
                        defaultDate: "",
                        sideBySide: true
                });
                
                // Number format
                $('.format_number, .number').number(true);
                  
                $( ".datepickerInline" ).datepicker({ 
                        defaultDate: +7,
                        autoSize: true,
                        dateFormat: 'dd-mm-yy',
                        numberOfMonths: 1
                });	
                
                $('.fancybox').fancybox({
                    'width': 900,
                    'height': 600,
                    'type': 'iframe',
                    'autoScale': false
                });
                
		// Lightbox
		$('.lightbox').nstUI({
			method:	'lightbox'
		});
		
                // Modal
		$('.modalClick').click(function(){
			
                        var url = $(this).attr('_url');
                        var content = $('.modal_click_content');
                        var _modal  = $('#modal');
                        var _th = $('.modalClick');
                        $.post(url, function(data)
                        {
                                content.html(data);
                                _modal.modal('show');
                        });
		});
                
		// Form handle
		$('#form, .form_action').each(function()
		{
			$(this).nstUI({
				method:	'formAction',
				formAction:	{
					field_load: $(this).attr('_field_load')
				}
			});
		});
		
		// Verify action
		$('.verify_action').nstUI({
			method:	'verifyAction'
		});
		
		// Toggle action
		$('.toggle_action').nstUI({
			method:	'toggleAction'
		});
		
		// Tooltip
		$('[_tooltip]').nstUI({
			method:	'tooltip'
		});
		
		// Placeholder
		$('input.placeholder').nstUI({
			method:	'placeholder'
		});
		
		// Accordion
		$('.accordion').nstUI({
			method:	'accordion'
		});

		// Auto check pages
		$('.auto_check_pages').each(function()
		{
			auto_check_pages($(this));
		});
                
                $('.fancybox').fancybox({
                    'width': 900,
                    'height': 600,
                    'type': 'iframe',
                    'autoScale': false
                });
                
                $('.iframe').fancybox({
                    'width': 900,
                    'height': 600,
                    'type': 'iframe',
                    'autoScale': false
                });
                
                // Ckeditor
		$('.editor').each(function()
		{
                    tinymce.init({
                        selector: '.editor',
                        invalid_elements: "div,script,abbr,acronym,address,applet,area,bdo,big,blockquote,button,caption,cite,code,col,colgroup,dd,del,dfn,input,ins,isindex,kbd,label,legend,map,menu,noscript,optgroup,option,param,textarea,var,ruby,samp,select,rtc,hr",
                        extended_valid_elements: "iframe[src|width|height|name|align|frameborder]",
                        height  : 300,
                        plugins : ["advlist autolink link image lists charmap print preview hr anchor pagebreak",
                                  "searchreplace wordcount visualblocks visualchars code insertdatetime media nonbreaking",
                                  "table contextmenu directionality emoticons paste textcolor filemanager"],
                        //content_css: "css/content.css",
                        image_advtab: true,
                        toolbar     : "undo redo | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | styleselect forecolor backcolor | link unlink | image media | preview code | fontselect |  fontsizeselect",
                        theme_advanced_font_sizes: "10px,12px,13px,14px,16px,18px,20px",
                        font_size_style_values: "12px,13px,14px,16px,18px,20px",
                        language: 'vi_VN',
                    });
                });
                
		// Ckeditor
		/*$('.editor').each(function()
		{
			var id = $(this).attr('id');
			
			var config = $(this).attr('_config');
			config = (config) ? JSON.parse(config) : {};
			
			CKEDITOR.replace(id, config).on("change", function()
			{
				CKEDITOR.instances[id].updateElement();
			});
		});*/
		
		// Number format
		//$('.format_number').number(true);
		
		// Autocomplete
		var cache = {}, lastXhr;
		$('.autocomplete').each(function()
		{
			var url_search = $(this).attr('_url');
			
			$(this).autocomplete(
			{
				minLength: 2,
				source: function(request, response)
				{
					var term = request.term;
					
					if (term in cache)
					{
						response(cache[term]);
						return;
					}
		
					lastXhr = $.getJSON(url_search, request, function(data, status, xhr)
					{
						cache[term] = data;
						if (xhr === lastXhr)
						{
							response(data);
						}
					});
				}
			});
		});
                
		//===== Tabs =====//
                $.fn.contentTabs = function(){ 
                        $(this).find(".tab_content").hide(); //Hide all content
                        $(this).find("ul.tabs li:first").addClass("active").show(); //Activate first tab
                        $(this).find(".tab_content:first").show(); //Show first tab content

                        $("ul.tabs li").click(function() {
                                $(this).parent().parent().find("ul.tabs li").removeClass("active"); //Remove any "active" class
                                $(this).addClass("active"); //Add "active" class to selected tab
                                $(this).parent().parent().parent().find(".tab_content").hide(); //Hide all tab content
                                var activeTab = $(this).find("a").attr("href"); //Find the rel attribute value to identify the active tab + content
                                $(activeTab).show(); //Fade in the active content
                                return false;
                        });
                };
                
		// Tags
		$('.tags').each(function()
		{
			var _t = $(this);
			
			var setting = {
			   'width': '100%',
			   'defaultText': _t.attr('_tags_text')
			};
			
			var ac_url = _t.attr('_tags_ac');
			if (ac_url)
			{
				setting.autocomplete_url = ac_url
			}
			
			_t.tagsInput(setting);
		});
		
		// Sort col table
		$('table td.sortCol').each(function()
		{
			var _t = $(this);
			var html = '<div>'+_t.html()+'<span></span></div>';
			_t.html(html);
		});
		

		// List handle
		var $list_filter	= $('.list_filter');
		var $list_item 		= $('.list_item');
		var $list_action 	= $('.list_action');
		
		$list_item.find('.view_of_field').click(function()
		{
			var param = $(this).attr('_param');
			var value = $(this).attr('_value');
			
			$list_filter.find('[name='+param+']').val(value);
			$list_filter.submit();
			
			return false;
		});
                
		$list_action.find('#submit').click(function()
		{
                        var action = $list_action.find('[name=action]').val();
                        if (!action) return false;

                        var ids = new Array();
                        $list_item.find('[name="id[]"]:checked').each(function()
                        {
                                ids.push($(this).val());
                        });

                        ids = $.unique(ids);
                        if (!ids.length) return false;

                        $(this).nstUI(
                        {
                                method: 'loadAjax',
                                loadAjax:
                                {
                                        url: action,
                                        data: {'id': ids},
                                        field: {load: '_', show: ''},
                                        event_complete: function()
                                        {
                                                window.location.reload();
                                        },
                                        event_error: function()
                                        {
                                                window.location.reload();
                                        }
                                }
                        });

                        return false;
		});
		
		// Form filter handle
		var form = $('form[name=filter]');
		
		form.find('.view_of_field').click(function()
		{
			var param = $(this).attr('_param');
			var value = $(this).attr('_value');
			
			form.find('[name='+param+']').val(value);
			form.submit();
			
			return false;
		});
		
		form.find('#submit_action').click(function()
		{
			var action = form.find('select[name=action]').val();
			if (!action)
			{
				return false;
			}
			form.nstUI(
			{
				method:	'formAction',
				formAction:
				{
					action: $(this).attr('_action'),
					submit: true,
					event_complete: function()
					{
						window.location.reload();
					}
				}
			});
			return false;
		});
		
		
		// Load uri
		var uri = window.location.href.split('#uri=');
		if (uri[1])
		{
			$.colorbox({
				href: admin_url+uri[1],
				opacity: 0.75
			});
		}
		
		$('.load_uri').click(function()
		{
			var uri = $(this).attr('_url');
			uri = (!uri) ? $(this).attr('href') : uri;
			uri = uri.replace(admin_url, '');
			
			window.location.href = '#uri='+uri;
		});
                
                var main     = $('#form');
                var title    = main.find('#param_title');
                var name     = main.find('#param_name');
                var name_uri = $('#param_name_uri');
                var key      = (title.val() != 'undefined' && title.val() != null) ? title : name;

                key.keyup(function ()
                {       
                        name_uri.val(conver_vi_to_en($(this).val()));
                });

                name_uri.blur(function (){
                    $(this).val(conver_vi_to_en($(this).val()));
                });
	});
        
})(jQuery);


//####################################################
// Main function
//####################################################
/**
 * Load ajax
 */
function load_ajax(_t)
{
	var field = jQuery(_t).attr('_field');
	var url = jQuery(_t).attr('_url');
	
	jQuery(_t).nstUI(
	{
		method:	"loadAjax",
		loadAjax:{
			url: url,
			field: {load: field+'_load', show: field+'_show'}
		}
	});
	return false;
}

/**
 * Xu ly acc list
 */
function handle_acc_list(main, list_cur)
{
	acc_list(list_cur);
	main.find('a.acc_list').click(function()
	{
		var list = jQuery(this).attr('_list');
		acc_list(list);
		
		return false;
	});
	
	function acc_list(list)
	{
		if (list == '')
		{
			return;
		}
		
		main.find('a.acc_list').each(function()
		{
			if (jQuery(this).attr('_list') == list)
			{
				jQuery(this).parent().toggleClass('taskActive');
			}
			else
			{
				jQuery(this).parent().removeClass('taskActive');
			}
		});
		
		main.find('tr[_list='+list+']').toggle('fade', 150);
		main.find('tr[_list][_list!='+list+']').hide();
	}
}

/**
 * Gan gia tri cua cac bien vao html
 */
function temp_set_value(html, params)
{
	jQuery.each(params, function(param, value)
	{
		var regex = new RegExp('{'+param+'}', "igm");
		html = html.replace(regex, value);
	});

	return html;
}

/**
 * Copy gia tri giua 2 field
 */
function copy_value(from, to)
{
	jQuery(this).nstUI({
		method:	'copyValue',
		copyValue: {
			from: from,
			to: to
		}
	});
}

/**
 * Hien thi lightbox
 */
function lightbox(t)
{
	jQuery(t).nstUI({
		method:	'lightbox'
	});
}

/**
 * An pages khi ko co chia trang
 */
function auto_check_pages(t)
{
	if (t.find('a')[0] == undefined)
	{
		t.remove();
	}
}

/**
 * Xu ly acc list
 */
function handle_sort_list(main, url_update)
{
	// Sap xep list item
	main.find('table.myTable').sortable(
	{
		placeholder: 'ui-state-highlight',
		items: 'tbody tr[_list]',
		handle: '.js-sortable-handle',
		forcePlaceholderSize: true,
		helper: function(e, ui) 
		{
			ui.children().each(function()
			{
				$(this).width($(this).width());
			});
			return ui;
		},
		start: function(event, ui) 
		{
			ui.placeholder.html('<td colspan="' + $(this).find('tbody tr:first td').size() + '">&nbsp;</td>');
		},
		stop: function(event, ui)
		{
			var list = ui.item.attr('_list');
			handle_sort_list_update_order(list);
		}
	});
	
	function handle_sort_list_update_order(list)
	{
		var items = new Array();
		main.find('tr[_list='+list+']').each(function()
		{
			var item = $(this).attr('_item');
			items.push(item);
		});
		
		$(this).nstUI(
		{
			method:	"loadAjax",
			loadAjax:
			{
				url: url_update,
				data: {items: items.join()},
				field: {load: '_', show: ''},
			}
		});
	}
        
        
}
/**
 * load image media_ftp
 * @param {type} id_name
 * @returns {undefined}
 */
function load_image(id_name, name)
{   
        var _val  = $('#'+id_name).val();
        if(_val != '')
        {
                var _html = '<a href="'+_val+'" onclick="lightbox(this); return false;"><img width="150" src="'+_val+'" class="img_border"></a>';
                $('#upload_complete_'+name).html(_html);
        }
}

/*
 * Conver URL
 */
function conver_vi_to_en(str)
{
        var title = String(str);
        var name_uri;
        
        // Doi chu hoa thanh chu thuong
        name_uri = title.toLowerCase();

        // Doi ky tu khong dau thanh co dau
        name_uri = name_uri.replace(/á|à|ả|ạ|ã|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ/gi, 'a');
        name_uri = name_uri.replace(/é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ/gi, 'e');
        name_uri = name_uri.replace(/i|í|ì|ỉ|ĩ|ị/gi, 'i');
        name_uri = name_uri.replace(/ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ/gi, 'o');
        name_uri = name_uri.replace(/ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự/gi, 'u');
        name_uri = name_uri.replace(/ý|ỳ|ỷ|ỹ|ỵ/gi, 'y');
        name_uri = name_uri.replace(/đ/gi, 'd');

        // Xoa cac ky tu dac biet
        name_uri = name_uri.replace(/\`|\~|\!|\@|\#|\||\$|\%|\^|\&|\*|\(|\)|\+|\=|\,|\.|\/|\?|\>|\<|\'|\"|\:|\;|_/gi, '');

        // Doi khoang trang thanh ky tu gach ngan
        name_uri = name_uri.replace(/ /gi, "-");

        //Đoi nhieu ky tu gach ngang lien tiep thanh 1 ky tu gach ngang
        //Phong truong hop ngưoi nhap vao qua nhieu ky tu trang
        name_uri = name_uri.replace(/\-\-\-\-\-/gi, '-');
        name_uri = name_uri.replace(/\-\-\-\-/gi, '-');
        name_uri = name_uri.replace(/\-\-\-/gi, '-');
        name_uri = name_uri.replace(/\-\-/gi, '-');

        //Xoa cac ky tu gach ngang o đau va cuoi
        name_uri = '@' + name_uri + '@';
        name_uri = name_uri.replace(/\@\-|\-\@|\@/gi, '');

        //In name_uri ra textbox 
        //document.getElementById('name_uri').value = name_uri;
        return name_uri;
}