                <!-- Js main -->
<script type="text/javascript">
(function($)
{
	$(document).ready(function()
	{
		var main = $('#form');
		
		// Tabs
		main.contentTabs();
		
		// Toggle maintenance
		toggle_status_content('maintenance', 'maintenance_notice');
                
		// Toggle deposit
		toggle_status_content('deposit_status', 'deposit_setting');
		
                // Toggle maintenance
		toggle_status_content('affiliate_status', 'affiliate_main');
                
		// Smtp_type change
		main.find('select[name=smtp_type]').nstUI({
			method:	'toggleTab',
			toggleTab: {
				field: 'smtp_type'
			}
		});
                
		/**
		 * Hien thi content theo param value
		 */
		function toggle_status_content(param, content)
		{
			toggle_status_content_handle(param, content);
			
			main.find('input[name='+param+']').change(function()
			{
				toggle_status_content_handle(param, content);
			});
		}

		function toggle_status_content_handle(param, content)
		{
			var status = (main.find('input[name='+param+']:checked').val() == '1') ? true : false;
			var content = main.find('#'+content);
				
			if (status)
			{
				content.slideDown(function(){ $(this).show(); });
			}
			else
			{
				content.slideUp(function(){ $(this).hide(); });
			}
		}
                
                // Thay doi tien te
		main.find('select[name=currency_id]').change(function() 
                {
                        var option = $('select[name=currency_id] option:selected');
                        
                        $.each(['symbol_left', 'symbol_right', 'decimal'], function( index, value ) 
                        {
                               $('input[name=currency_'+value+']').attr('value', option.attr('_'+value));
                        });
                });
                
                                        toggle_status_content_handle('transfer', 'payment_type_transfer_note');
                                        toggle_status_content_handle('cod', 'payment_type_cod_note');
                                        toggle_status_content_handle('nganluong', 'payment_type_nganluong_note');
                                    
                // Payment type change
                main.find('#tab_payment input[type=radio]').change(function()
                {
                        toggle_status_content_handle($(this).attr('name'), 'payment_type_' + $(this).attr('name') + '_note');
                });
	});
})(jQuery);
</script>
<!-- Common -->
<header id="topbar" class="affix">
        <div class="topbar-left">
                <!-- Breadcrumbs -->
                <ol class="breadcrumb">
        <li class="crumb-icon">
                <a href="http://demothu.web5s.com.vn/admin.html" title="">
                        <span class="glyphicon glyphicon-home"></span>
                </a>
        </li>
        
                                <li >
                        <a href="">Cấu hình</a>
                </li>
                        <li class="current">
                        <a href="http://demothu.web5s.com.vn/admin/setting.html">Cấu hình chung</a>
                </li>
        </ol>        </div>
</header>
<!-- Message -->









<section id="content">
    <form action="http://demothu.web5s.com.vn/admin/setting.html" class="form" id="form" method="post">
        <div class="panel">
            <div class="panel-heading"> 
                <ul class="tabs nav panel-tabs-border panel-tabs panel-tabs-left">
                    <li><a href="#tab_general">Hệ thống</a></li>
                    <li><a href="#tab_image">Logo & Favicon</a></li>
                    
                                            <li><a href="#tab_payment">Thanh toán</a></li>
                        <li><a href="#tab_affiliate">Cộng tác viên</a></li>
                                        
                    <li><a href="#tab_social">Mạng xã hội</a></li>
                    <li><a href="#tab_plugin">Mã nhúng</a></li>
                </ul>
            </div>

            <div class="panel-body p25">
                <fieldset>
                    <div class="tab-content pn br-n admin-form theme-info">
                        <div id="tab_general" class="tab_content pd0">
                            <div class="row mb10">
    <div class="col-md-2">
        <label class="pt10" for="name">
            Tên site(<span class="text-danger">*</span>):
        </label>
    </div>
    <div class="col-md-6">
        <label class="field mb5">
            <input name="name" id="name" class="form-control" 
                _autocheck="true" type="text" value="Ferris Sport - Multipurpose Resposive Web5s Theme" />
        </label>
        
        <span name="name_autocheck" class="autocheck append-icon right"></span>
        <div name="name_error" class="text-danger"></div>
    </div>
</div>

<div class="row mb10">
    <div class="col-md-2">
        <label class="field mb5" for="email">
            Email site(<span class="text-danger">*</span>):
        </label>
    </div>
    
    <div class="col-md-6">    
        <label class="field mb5">
            <input name="email" id="email" class="form-control" _autocheck="true" 
                   type="text" value="tieudv89@gmail.com" />
        </label>
        <span name="email_autocheck" class="autocheck append-icon right"></span>
        <div name="email_error" class="text-danger"></div>
    </div>
</div>

<div class="row mb10">
    <div class="col-md-2">
        <label class="field mb5" for="meta_desc">Meta description:</label>
    </div>
    <div class="col-md-6">
        <label class="field prepend-icon">
            <textarea name="meta_desc" id="meta_desc" _autocheck="true" class="gui-textarea p10"
                      >Ferris Sport - Multipurpose Resposive Web5s Theme</textarea>
        </label>
        <span name="meta_desc_autocheck" class="autocheck append-icon right"></span>
        <div name="meta_desc_error" class="text-danger"></div>
    </div>
</div>

<div class="row mb10">
    <div class="col-md-2">
        <label class="field mb5" for="meta_key">Meta keywords:</label>
    </div>
    <div class="col-md-6">
        <label class="field prepend-icon">
            <textarea name="meta_key" id="meta_key"_autocheck="true" class="gui-textarea p10"
            >Ferris Sport - Multipurpose Resposive Web5s Theme</textarea></label>
        <span name="meta_key_autocheck" class="autocheck append-icon right"></span>
        <div name="meta_key_error" class="text-danger"></div>
    </div>
</div>

<hr />
<div class="row mb10">
    <div class="col-md-2">
        <label class="field mb5">
            Tiêu chuẩn và hệ thống(<span class="text-danger">*</span>):
        </label>
    </div>
    <div class="col-md-10">
        <div class="row">
            <div class="col-sm-6">
                <div class="row">
                    <div class="col-md-12">
                        <label class="field mb5" for="param_time_zone">Múi giờ:</label>
                    </div>
                    <div class="col-md-12">
                        <label class="field select" for="param_time_zone">
                            <select name="time_zone" _autocheck="true" id="param_time_zone">
                                                                    <option value="Etc/GMT+12" 
                                        selected="selected">
                                        (GMT-12:00) International Date Line West                                    </option>
                                                                    <option value="Pacific/Apia" 
                                        >
                                        (GMT-11:00) Midway Island, Samoa                                    </option>
                                                                    <option value="Pacific/Honolulu" 
                                        >
                                        (GMT-10:00) Hawaii                                    </option>
                                                                    <option value="America/Anchorage" 
                                        >
                                        (GMT-09:00) Alaska                                    </option>
                                                                    <option value="America/Los_Angeles" 
                                        >
                                        (GMT-08:00) Pacific Time (US & Canada); Tijuana                                    </option>
                                                                    <option value="America/Phoenix" 
                                        >
                                        (GMT-07:00) Arizona                                    </option>
                                                                    <option value="America/Denver" 
                                        >
                                        (GMT-07:00) Mountain Time (US & Canada)                                    </option>
                                                                    <option value="America/Chihuahua" 
                                        >
                                        (GMT-07:00) Chihuahua, La Paz, Mazatlan                                    </option>
                                                                    <option value="America/Managua" 
                                        >
                                        (GMT-06:00) Central America                                    </option>
                                                                    <option value="America/Regina" 
                                        >
                                        (GMT-06:00) Saskatchewan                                    </option>
                                                                    <option value="America/Mexico_City" 
                                        >
                                        (GMT-06:00) Guadalajara, Mexico City, Monterrey                                    </option>
                                                                    <option value="America/Chicago" 
                                        >
                                        (GMT-06:00) Central Time (US & Canada)                                    </option>
                                                                    <option value="America/Indianapolis" 
                                        >
                                        (GMT-05:00) Indiana (East)                                    </option>
                                                                    <option value="America/Bogota" 
                                        >
                                        (GMT-05:00) Bogota, Lima, Quito                                    </option>
                                                                    <option value="America/New_York" 
                                        >
                                        (GMT-05:00) Eastern Time (US & Canada)                                    </option>
                                                                    <option value="America/Caracas" 
                                        >
                                        (GMT-04:00) Caracas, La Paz                                    </option>
                                                                    <option value="America/Santiago" 
                                        >
                                        (GMT-04:00) Santiago                                    </option>
                                                                    <option value="America/Halifax" 
                                        >
                                        (GMT-04:00) Atlantic Time (Canada)                                    </option>
                                                                    <option value="America/St_Johns" 
                                        >
                                        (GMT-03:30) Newfoundland                                    </option>
                                                                    <option value="America/Buenos_Aires" 
                                        >
                                        (GMT-03:00) Buenos Aires, Georgetown                                    </option>
                                                                    <option value="America/Godthab" 
                                        >
                                        (GMT-03:00) Greenland                                    </option>
                                                                    <option value="America/Sao_Paulo" 
                                        >
                                        (GMT-03:00) Brasilia                                    </option>
                                                                    <option value="America/Noronha" 
                                        >
                                        (GMT-02:00) Mid-Atlantic                                    </option>
                                                                    <option value="Atlantic/Cape_Verde" 
                                        >
                                        (GMT-01:00) Cape Verde Is.                                    </option>
                                                                    <option value="Atlantic/Azores" 
                                        >
                                        (GMT-01:00) Azores                                    </option>
                                                                    <option value="Africa/Casablanca" 
                                        >
                                        (GMT) Casablanca, Monrovia                                    </option>
                                                                    <option value="Europe/London" 
                                        >
                                        (GMT) Greenwich Mean Time : Dublin, Edinburgh, Lisbon, London                                    </option>
                                                                    <option value="Africa/Lagos" 
                                        >
                                        (GMT+01:00) West Central Africa                                    </option>
                                                                    <option value="Europe/Berlin" 
                                        >
                                        (GMT+01:00) Amsterdam, Berlin, Bern, Rome, Stockholm, Vienna                                    </option>
                                                                    <option value="Europe/Paris" 
                                        >
                                        (GMT+01:00) Brussels, Copenhagen, Madrid, Paris                                    </option>
                                                                    <option value="Europe/Sarajevo" 
                                        >
                                        (GMT+01:00) Sarajevo, Skopje, Warsaw, Zagreb                                    </option>
                                                                    <option value="Europe/Belgrade" 
                                        >
                                        (GMT+01:00) Belgrade, Bratislava, Budapest, Ljubljana, Prague                                    </option>
                                                                    <option value="Africa/Johannesburg" 
                                        >
                                        (GMT+02:00) Harare, Pretoria                                    </option>
                                                                    <option value="Asia/Jerusalem" 
                                        >
                                        (GMT+02:00) Jerusalem                                    </option>
                                                                    <option value="Europe/Istanbul" 
                                        >
                                        (GMT+02:00) Athens, Istanbul, Minsk                                    </option>
                                                                    <option value="Europe/Helsinki" 
                                        >
                                        (GMT+02:00) Helsinki, Kyiv, Riga, Sofia, Tallinn, Vilnius                                    </option>
                                                                    <option value="Africa/Cairo" 
                                        >
                                        (GMT+02:00) Cairo                                    </option>
                                                                    <option value="Europe/Bucharest" 
                                        >
                                        (GMT+02:00) Bucharest                                    </option>
                                                                    <option value="Africa/Nairobi" 
                                        >
                                        (GMT+03:00) Nairobi                                    </option>
                                                                    <option value="Asia/Riyadh" 
                                        >
                                        (GMT+03:00) Kuwait, Riyadh                                    </option>
                                                                    <option value="Europe/Moscow" 
                                        >
                                        (GMT+03:00) Moscow, St. Petersburg, Volgograd                                    </option>
                                                                    <option value="Asia/Baghdad" 
                                        >
                                        (GMT+03:00) Baghdad                                    </option>
                                                                    <option value="Asia/Tehran" 
                                        >
                                        (GMT+03:30) Tehran                                    </option>
                                                                    <option value="Asia/Muscat" 
                                        >
                                        (GMT+04:00) Abu Dhabi, Muscat                                    </option>
                                                                    <option value="Asia/Tbilisi" 
                                        >
                                        (GMT+04:00) Baku, Tbilisi, Yerevan                                    </option>
                                                                    <option value="Asia/Kabul" 
                                        >
                                        (GMT+04:30) Kabul                                    </option>
                                                                    <option value="Asia/Karachi" 
                                        >
                                        (GMT+05:00) Islamabad, Karachi, Tashkent                                    </option>
                                                                    <option value="Asia/Yekaterinburg" 
                                        >
                                        (GMT+05:00) Ekaterinburg                                    </option>
                                                                    <option value="Asia/Calcutta" 
                                        >
                                        (GMT+05:30) Chennai, Kolkata, Mumbai, New Delhi                                    </option>
                                                                    <option value="Asia/Katmandu" 
                                        >
                                        (GMT+05:45) Kathmandu                                    </option>
                                                                    <option value="Asia/Colombo" 
                                        >
                                        (GMT+06:00) Sri Jayawardenepura                                    </option>
                                                                    <option value="Asia/Dhaka" 
                                        >
                                        (GMT+06:00) Astana, Dhaka                                    </option>
                                                                    <option value="Asia/Novosibirsk" 
                                        >
                                        (GMT+06:00) Almaty, Novosibirsk                                    </option>
                                                                    <option value="Asia/Rangoon" 
                                        >
                                        (GMT+06:30) Rangoon                                    </option>
                                                                    <option value="Asia/Bangkok" 
                                        >
                                        (GMT+07:00) Bangkok, Hanoi, Jakarta                                    </option>
                                                                    <option value="Asia/Krasnoyarsk" 
                                        >
                                        (GMT+07:00) Krasnoyarsk                                    </option>
                                                                    <option value="Australia/Perth" 
                                        >
                                        (GMT+08:00) Perth                                    </option>
                                                                    <option value="Asia/Taipei" 
                                        >
                                        (GMT+08:00) Taipei                                    </option>
                                                                    <option value="Asia/Singapore" 
                                        >
                                        (GMT+08:00) Kuala Lumpur, Singapore                                    </option>
                                                                    <option value="Asia/Hong_Kong" 
                                        >
                                        (GMT+08:00) Beijing, Chongqing, Hong Kong, Urumqi                                    </option>
                                                                    <option value="Asia/Irkutsk" 
                                        >
                                        (GMT+08:00) Irkutsk, Ulaan Bataar                                    </option>
                                                                    <option value="Asia/Tokyo" 
                                        >
                                        (GMT+09:00) Osaka, Sapporo, Tokyo                                    </option>
                                                                    <option value="Asia/Seoul" 
                                        >
                                        (GMT+09:00) Seoul                                    </option>
                                                                    <option value="Asia/Yakutsk" 
                                        >
                                        (GMT+09:00) Yakutsk                                    </option>
                                                                    <option value="Australia/Darwin" 
                                        >
                                        (GMT+09:30) Darwin                                    </option>
                                                                    <option value="Australia/Adelaide" 
                                        >
                                        (GMT+09:30) Adelaide                                    </option>
                                                                    <option value="Pacific/Guam" 
                                        >
                                        (GMT+10:00) Guam, Port Moresby                                    </option>
                                                                    <option value="Australia/Brisbane" 
                                        >
                                        (GMT+10:00) Brisbane                                    </option>
                                                                    <option value="Asia/Vladivostok" 
                                        >
                                        (GMT+10:00) Vladivostok                                    </option>
                                                                    <option value="Australia/Hobart" 
                                        >
                                        (GMT+10:00) Hobart                                    </option>
                                                                    <option value="Australia/Sydney" 
                                        >
                                        (GMT+10:00) Canberra, Melbourne, Sydney                                    </option>
                                                                    <option value="Asia/Magadan" 
                                        >
                                        (GMT+11:00) Magadan, Solomon Is., New Caledonia                                    </option>
                                                                    <option value="Pacific/Fiji" 
                                        >
                                        (GMT+12:00) Fiji, Kamchatka, Marshall Is.                                    </option>
                                                                    <option value="Pacific/Auckland" 
                                        >
                                        (GMT+12:00) Auckland, Wellington                                    </option>
                                                                    <option value="Pacific/Tongatapu" 
                                        >
                                        (GMT+13:00) Nuku\'alofa                                    </option>
                                                            </select>
                            <i class="arrow"></i>
                        </label>
                        <span name="time_zone_autocheck" class="autocheck append-icon right"></span>
                        <div name="time_zone_error" class="text-danger"></div>
                    </div>
                </div>
            </div>

            <div class="col-sm-6">
                <div class="row">
                    <div class="col-md-12">
                        <label class="field mb5" for="param_country">Quốc gia:</label>
                    </div>
                    <div class="col-md-8">
                        <label class="field select" for="param_country">
                            <select name="country" _autocheck="true" id="param_country">
                                                                    <option value="AD" 
                                        >
                                       Andorra                                    </option>
                                                                    <option value="AE" 
                                        >
                                       United Arab Emirates                                    </option>
                                                                    <option value="AF" 
                                        >
                                       Afghanistan                                    </option>
                                                                    <option value="AG" 
                                        >
                                       Antigua and Barbuda                                    </option>
                                                                    <option value="AI" 
                                        >
                                       Anguilla                                    </option>
                                                                    <option value="AL" 
                                        >
                                       Albania                                    </option>
                                                                    <option value="AM" 
                                        >
                                       Armenia                                    </option>
                                                                    <option value="AN" 
                                        >
                                       Netherlands Antilles                                    </option>
                                                                    <option value="AO" 
                                        >
                                       Angola                                    </option>
                                                                    <option value="AQ" 
                                        >
                                       Antarctica                                    </option>
                                                                    <option value="AR" 
                                        >
                                       Argentina                                    </option>
                                                                    <option value="AS" 
                                        >
                                       American Samoa                                    </option>
                                                                    <option value="AT" 
                                        >
                                       Austria                                    </option>
                                                                    <option value="AU" 
                                        >
                                       Australia                                    </option>
                                                                    <option value="AW" 
                                        >
                                       Aruba                                    </option>
                                                                    <option value="AX" 
                                        >
                                       Aland Islands                                    </option>
                                                                    <option value="AZ" 
                                        >
                                       Azerbaijan                                    </option>
                                                                    <option value="BA" 
                                        >
                                       Bosnia and Herzegovina                                    </option>
                                                                    <option value="BB" 
                                        >
                                       Barbados                                    </option>
                                                                    <option value="BD" 
                                        >
                                       Bangladesh                                    </option>
                                                                    <option value="BE" 
                                        >
                                       Belgium                                    </option>
                                                                    <option value="BF" 
                                        >
                                       Burkina Faso                                    </option>
                                                                    <option value="BG" 
                                        >
                                       Bulgaria                                    </option>
                                                                    <option value="BH" 
                                        >
                                       Bahrain                                    </option>
                                                                    <option value="BI" 
                                        >
                                       Burundi                                    </option>
                                                                    <option value="BJ" 
                                        >
                                       Benin                                    </option>
                                                                    <option value="BL" 
                                        >
                                       Saint Barthélemy                                    </option>
                                                                    <option value="BM" 
                                        >
                                       Bermuda                                    </option>
                                                                    <option value="BN" 
                                        >
                                       Brunei                                    </option>
                                                                    <option value="BO" 
                                        >
                                       Bolivia                                    </option>
                                                                    <option value="BQ" 
                                        >
                                       Bonaire, Saint Eustatius and Saba                                     </option>
                                                                    <option value="BR" 
                                        >
                                       Brazil                                    </option>
                                                                    <option value="BS" 
                                        >
                                       Bahamas                                    </option>
                                                                    <option value="BT" 
                                        >
                                       Bhutan                                    </option>
                                                                    <option value="BV" 
                                        >
                                       Bouvet Island                                    </option>
                                                                    <option value="BW" 
                                        >
                                       Botswana                                    </option>
                                                                    <option value="BY" 
                                        >
                                       Belarus                                    </option>
                                                                    <option value="BZ" 
                                        >
                                       Belize                                    </option>
                                                                    <option value="CA" 
                                        >
                                       Canada                                    </option>
                                                                    <option value="CC" 
                                        >
                                       Cocos Islands                                    </option>
                                                                    <option value="CD" 
                                        >
                                       Democratic Republic of the Congo                                    </option>
                                                                    <option value="CF" 
                                        >
                                       Central African Republic                                    </option>
                                                                    <option value="CG" 
                                        >
                                       Republic of the Congo                                    </option>
                                                                    <option value="CH" 
                                        >
                                       Switzerland                                    </option>
                                                                    <option value="CI" 
                                        >
                                       Ivory Coast                                    </option>
                                                                    <option value="CK" 
                                        >
                                       Cook Islands                                    </option>
                                                                    <option value="CL" 
                                        >
                                       Chile                                    </option>
                                                                    <option value="CM" 
                                        >
                                       Cameroon                                    </option>
                                                                    <option value="CN" 
                                        >
                                       China                                    </option>
                                                                    <option value="CO" 
                                        >
                                       Colombia                                    </option>
                                                                    <option value="CR" 
                                        >
                                       Costa Rica                                    </option>
                                                                    <option value="CS" 
                                        >
                                       Serbia and Montenegro                                    </option>
                                                                    <option value="CU" 
                                        >
                                       Cuba                                    </option>
                                                                    <option value="CV" 
                                        >
                                       Cape Verde                                    </option>
                                                                    <option value="CW" 
                                        >
                                       Curaçao                                    </option>
                                                                    <option value="CX" 
                                        >
                                       Christmas Island                                    </option>
                                                                    <option value="CY" 
                                        >
                                       Cyprus                                    </option>
                                                                    <option value="CZ" 
                                        >
                                       Czech Republic                                    </option>
                                                                    <option value="DE" 
                                        >
                                       Germany                                    </option>
                                                                    <option value="DJ" 
                                        >
                                       Djibouti                                    </option>
                                                                    <option value="DK" 
                                        >
                                       Denmark                                    </option>
                                                                    <option value="DM" 
                                        >
                                       Dominica                                    </option>
                                                                    <option value="DO" 
                                        >
                                       Dominican Republic                                    </option>
                                                                    <option value="DZ" 
                                        >
                                       Algeria                                    </option>
                                                                    <option value="EC" 
                                        >
                                       Ecuador                                    </option>
                                                                    <option value="EE" 
                                        >
                                       Estonia                                    </option>
                                                                    <option value="EG" 
                                        >
                                       Egypt                                    </option>
                                                                    <option value="EH" 
                                        >
                                       Western Sahara                                    </option>
                                                                    <option value="ER" 
                                        >
                                       Eritrea                                    </option>
                                                                    <option value="ES" 
                                        >
                                       Spain                                    </option>
                                                                    <option value="ET" 
                                        >
                                       Ethiopia                                    </option>
                                                                    <option value="FI" 
                                        >
                                       Finland                                    </option>
                                                                    <option value="FJ" 
                                        >
                                       Fiji                                    </option>
                                                                    <option value="FK" 
                                        >
                                       Falkland Islands                                    </option>
                                                                    <option value="FM" 
                                        >
                                       Micronesia                                    </option>
                                                                    <option value="FO" 
                                        >
                                       Faroe Islands                                    </option>
                                                                    <option value="FR" 
                                        >
                                       France                                    </option>
                                                                    <option value="GA" 
                                        >
                                       Gabon                                    </option>
                                                                    <option value="GB" 
                                        >
                                       United Kingdom                                    </option>
                                                                    <option value="GD" 
                                        >
                                       Grenada                                    </option>
                                                                    <option value="GE" 
                                        >
                                       Georgia                                    </option>
                                                                    <option value="GF" 
                                        >
                                       French Guiana                                    </option>
                                                                    <option value="GG" 
                                        >
                                       Guernsey                                    </option>
                                                                    <option value="GH" 
                                        >
                                       Ghana                                    </option>
                                                                    <option value="GI" 
                                        >
                                       Gibraltar                                    </option>
                                                                    <option value="GL" 
                                        >
                                       Greenland                                    </option>
                                                                    <option value="GM" 
                                        >
                                       Gambia                                    </option>
                                                                    <option value="GN" 
                                        >
                                       Guinea                                    </option>
                                                                    <option value="GP" 
                                        >
                                       Guadeloupe                                    </option>
                                                                    <option value="GQ" 
                                        >
                                       Equatorial Guinea                                    </option>
                                                                    <option value="GR" 
                                        >
                                       Greece                                    </option>
                                                                    <option value="GS" 
                                        >
                                       South Georgia and the South Sandwich Islands                                    </option>
                                                                    <option value="GT" 
                                        >
                                       Guatemala                                    </option>
                                                                    <option value="GU" 
                                        >
                                       Guam                                    </option>
                                                                    <option value="GW" 
                                        >
                                       Guinea-Bissau                                    </option>
                                                                    <option value="GY" 
                                        >
                                       Guyana                                    </option>
                                                                    <option value="HK" 
                                        >
                                       Hong Kong                                    </option>
                                                                    <option value="HM" 
                                        >
                                       Heard Island and McDonald Islands                                    </option>
                                                                    <option value="HN" 
                                        >
                                       Honduras                                    </option>
                                                                    <option value="HR" 
                                        >
                                       Croatia                                    </option>
                                                                    <option value="HT" 
                                        >
                                       Haiti                                    </option>
                                                                    <option value="HU" 
                                        >
                                       Hungary                                    </option>
                                                                    <option value="ID" 
                                        >
                                       Indonesia                                    </option>
                                                                    <option value="IE" 
                                        >
                                       Ireland                                    </option>
                                                                    <option value="IL" 
                                        >
                                       Israel                                    </option>
                                                                    <option value="IM" 
                                        >
                                       Isle of Man                                    </option>
                                                                    <option value="IN" 
                                        >
                                       India                                    </option>
                                                                    <option value="IO" 
                                        >
                                       British Indian Ocean Territory                                    </option>
                                                                    <option value="IQ" 
                                        >
                                       Iraq                                    </option>
                                                                    <option value="IR" 
                                        >
                                       Iran                                    </option>
                                                                    <option value="IS" 
                                        >
                                       Iceland                                    </option>
                                                                    <option value="IT" 
                                        >
                                       Italy                                    </option>
                                                                    <option value="JE" 
                                        >
                                       Jersey                                    </option>
                                                                    <option value="JM" 
                                        >
                                       Jamaica                                    </option>
                                                                    <option value="JO" 
                                        >
                                       Jordan                                    </option>
                                                                    <option value="JP" 
                                        >
                                       Japan                                    </option>
                                                                    <option value="KE" 
                                        >
                                       Kenya                                    </option>
                                                                    <option value="KG" 
                                        >
                                       Kyrgyzstan                                    </option>
                                                                    <option value="KH" 
                                        >
                                       Cambodia                                    </option>
                                                                    <option value="KI" 
                                        >
                                       Kiribati                                    </option>
                                                                    <option value="KM" 
                                        >
                                       Comoros                                    </option>
                                                                    <option value="KN" 
                                        >
                                       Saint Kitts and Nevis                                    </option>
                                                                    <option value="KP" 
                                        >
                                       North Korea                                    </option>
                                                                    <option value="KR" 
                                        >
                                       South Korea                                    </option>
                                                                    <option value="KW" 
                                        >
                                       Kuwait                                    </option>
                                                                    <option value="KY" 
                                        >
                                       Cayman Islands                                    </option>
                                                                    <option value="KZ" 
                                        >
                                       Kazakhstan                                    </option>
                                                                    <option value="LA" 
                                        >
                                       Laos                                    </option>
                                                                    <option value="LB" 
                                        >
                                       Lebanon                                    </option>
                                                                    <option value="LC" 
                                        >
                                       Saint Lucia                                    </option>
                                                                    <option value="LI" 
                                        >
                                       Liechtenstein                                    </option>
                                                                    <option value="LK" 
                                        >
                                       Sri Lanka                                    </option>
                                                                    <option value="LR" 
                                        >
                                       Liberia                                    </option>
                                                                    <option value="LS" 
                                        >
                                       Lesotho                                    </option>
                                                                    <option value="LT" 
                                        >
                                       Lithuania                                    </option>
                                                                    <option value="LU" 
                                        >
                                       Luxembourg                                    </option>
                                                                    <option value="LV" 
                                        >
                                       Latvia                                    </option>
                                                                    <option value="LY" 
                                        >
                                       Libya                                    </option>
                                                                    <option value="MA" 
                                        >
                                       Morocco                                    </option>
                                                                    <option value="MC" 
                                        >
                                       Monaco                                    </option>
                                                                    <option value="MD" 
                                        >
                                       Moldova                                    </option>
                                                                    <option value="ME" 
                                        >
                                       Montenegro                                    </option>
                                                                    <option value="MF" 
                                        >
                                       Saint Martin                                    </option>
                                                                    <option value="MG" 
                                        >
                                       Madagascar                                    </option>
                                                                    <option value="MH" 
                                        >
                                       Marshall Islands                                    </option>
                                                                    <option value="MK" 
                                        >
                                       Macedonia                                    </option>
                                                                    <option value="ML" 
                                        >
                                       Mali                                    </option>
                                                                    <option value="MM" 
                                        >
                                       Myanmar                                    </option>
                                                                    <option value="MN" 
                                        >
                                       Mongolia                                    </option>
                                                                    <option value="MO" 
                                        >
                                       Macao                                    </option>
                                                                    <option value="MP" 
                                        >
                                       Northern Mariana Islands                                    </option>
                                                                    <option value="MQ" 
                                        >
                                       Martinique                                    </option>
                                                                    <option value="MR" 
                                        >
                                       Mauritania                                    </option>
                                                                    <option value="MS" 
                                        >
                                       Montserrat                                    </option>
                                                                    <option value="MT" 
                                        >
                                       Malta                                    </option>
                                                                    <option value="MU" 
                                        >
                                       Mauritius                                    </option>
                                                                    <option value="MV" 
                                        >
                                       Maldives                                    </option>
                                                                    <option value="MW" 
                                        >
                                       Malawi                                    </option>
                                                                    <option value="MX" 
                                        >
                                       Mexico                                    </option>
                                                                    <option value="MY" 
                                        >
                                       Malaysia                                    </option>
                                                                    <option value="MZ" 
                                        >
                                       Mozambique                                    </option>
                                                                    <option value="NA" 
                                        >
                                       Namibia                                    </option>
                                                                    <option value="NC" 
                                        >
                                       New Caledonia                                    </option>
                                                                    <option value="NE" 
                                        >
                                       Niger                                    </option>
                                                                    <option value="NF" 
                                        >
                                       Norfolk Island                                    </option>
                                                                    <option value="NG" 
                                        >
                                       Nigeria                                    </option>
                                                                    <option value="NI" 
                                        >
                                       Nicaragua                                    </option>
                                                                    <option value="NL" 
                                        >
                                       Netherlands                                    </option>
                                                                    <option value="NO" 
                                        >
                                       Norway                                    </option>
                                                                    <option value="NP" 
                                        >
                                       Nepal                                    </option>
                                                                    <option value="NR" 
                                        >
                                       Nauru                                    </option>
                                                                    <option value="NU" 
                                        >
                                       Niue                                    </option>
                                                                    <option value="NZ" 
                                        >
                                       New Zealand                                    </option>
                                                                    <option value="OM" 
                                        >
                                       Oman                                    </option>
                                                                    <option value="PA" 
                                        >
                                       Panama                                    </option>
                                                                    <option value="PE" 
                                        >
                                       Peru                                    </option>
                                                                    <option value="PF" 
                                        >
                                       French Polynesia                                    </option>
                                                                    <option value="PG" 
                                        >
                                       Papua New Guinea                                    </option>
                                                                    <option value="PH" 
                                        >
                                       Philippines                                    </option>
                                                                    <option value="PK" 
                                        >
                                       Pakistan                                    </option>
                                                                    <option value="PL" 
                                        >
                                       Poland                                    </option>
                                                                    <option value="PM" 
                                        >
                                       Saint Pierre and Miquelon                                    </option>
                                                                    <option value="PN" 
                                        >
                                       Pitcairn                                    </option>
                                                                    <option value="PR" 
                                        >
                                       Puerto Rico                                    </option>
                                                                    <option value="PS" 
                                        >
                                       Palestinian Territory                                    </option>
                                                                    <option value="PT" 
                                        >
                                       Portugal                                    </option>
                                                                    <option value="PW" 
                                        >
                                       Palau                                    </option>
                                                                    <option value="PY" 
                                        >
                                       Paraguay                                    </option>
                                                                    <option value="QA" 
                                        >
                                       Qatar                                    </option>
                                                                    <option value="RE" 
                                        >
                                       Reunion                                    </option>
                                                                    <option value="RO" 
                                        >
                                       Romania                                    </option>
                                                                    <option value="RS" 
                                        >
                                       Serbia                                    </option>
                                                                    <option value="RU" 
                                        >
                                       Russia                                    </option>
                                                                    <option value="RW" 
                                        >
                                       Rwanda                                    </option>
                                                                    <option value="SA" 
                                        >
                                       Saudi Arabia                                    </option>
                                                                    <option value="SB" 
                                        >
                                       Solomon Islands                                    </option>
                                                                    <option value="SC" 
                                        >
                                       Seychelles                                    </option>
                                                                    <option value="SD" 
                                        >
                                       Sudan                                    </option>
                                                                    <option value="SE" 
                                        >
                                       Sweden                                    </option>
                                                                    <option value="SG" 
                                        >
                                       Singapore                                    </option>
                                                                    <option value="SH" 
                                        >
                                       Saint Helena                                    </option>
                                                                    <option value="SI" 
                                        >
                                       Slovenia                                    </option>
                                                                    <option value="SJ" 
                                        >
                                       Svalbard and Jan Mayen                                    </option>
                                                                    <option value="SK" 
                                        >
                                       Slovakia                                    </option>
                                                                    <option value="SL" 
                                        >
                                       Sierra Leone                                    </option>
                                                                    <option value="SM" 
                                        >
                                       San Marino                                    </option>
                                                                    <option value="SN" 
                                        >
                                       Senegal                                    </option>
                                                                    <option value="SO" 
                                        >
                                       Somalia                                    </option>
                                                                    <option value="SR" 
                                        >
                                       Suriname                                    </option>
                                                                    <option value="SS" 
                                        >
                                       South Sudan                                    </option>
                                                                    <option value="ST" 
                                        >
                                       Sao Tome and Principe                                    </option>
                                                                    <option value="SV" 
                                        >
                                       El Salvador                                    </option>
                                                                    <option value="SX" 
                                        >
                                       Sint Maarten                                    </option>
                                                                    <option value="SY" 
                                        >
                                       Syria                                    </option>
                                                                    <option value="SZ" 
                                        >
                                       Swaziland                                    </option>
                                                                    <option value="TC" 
                                        >
                                       Turks and Caicos Islands                                    </option>
                                                                    <option value="TD" 
                                        >
                                       Chad                                    </option>
                                                                    <option value="TF" 
                                        >
                                       French Southern Territories                                    </option>
                                                                    <option value="TG" 
                                        >
                                       Togo                                    </option>
                                                                    <option value="TH" 
                                        >
                                       Thailand                                    </option>
                                                                    <option value="TJ" 
                                        >
                                       Tajikistan                                    </option>
                                                                    <option value="TK" 
                                        >
                                       Tokelau                                    </option>
                                                                    <option value="TL" 
                                        >
                                       East Timor                                    </option>
                                                                    <option value="TM" 
                                        >
                                       Turkmenistan                                    </option>
                                                                    <option value="TN" 
                                        >
                                       Tunisia                                    </option>
                                                                    <option value="TO" 
                                        >
                                       Tonga                                    </option>
                                                                    <option value="TR" 
                                        >
                                       Turkey                                    </option>
                                                                    <option value="TT" 
                                        >
                                       Trinidad and Tobago                                    </option>
                                                                    <option value="TV" 
                                        >
                                       Tuvalu                                    </option>
                                                                    <option value="TW" 
                                        >
                                       Taiwan                                    </option>
                                                                    <option value="TZ" 
                                        >
                                       Tanzania                                    </option>
                                                                    <option value="UA" 
                                        >
                                       Ukraine                                    </option>
                                                                    <option value="UG" 
                                        >
                                       Uganda                                    </option>
                                                                    <option value="UM" 
                                        >
                                       United States Minor Outlying Islands                                    </option>
                                                                    <option value="US" 
                                        >
                                       United States                                    </option>
                                                                    <option value="UY" 
                                        >
                                       Uruguay                                    </option>
                                                                    <option value="UZ" 
                                        >
                                       Uzbekistan                                    </option>
                                                                    <option value="VA" 
                                        >
                                       Vatican                                    </option>
                                                                    <option value="VC" 
                                        >
                                       Saint Vincent and the Grenadines                                    </option>
                                                                    <option value="VE" 
                                        >
                                       Venezuela                                    </option>
                                                                    <option value="VG" 
                                        >
                                       British Virgin Islands                                    </option>
                                                                    <option value="VI" 
                                        >
                                       U.S. Virgin Islands                                    </option>
                                                                    <option value="VN" 
                                        selected="selected">
                                       Vietnam                                    </option>
                                                                    <option value="VU" 
                                        >
                                       Vanuatu                                    </option>
                                                                    <option value="WF" 
                                        >
                                       Wallis and Futuna                                    </option>
                                                                    <option value="WS" 
                                        >
                                       Samoa                                    </option>
                                                                    <option value="XK" 
                                        >
                                       Kosovo                                    </option>
                                                                    <option value="YE" 
                                        >
                                       Yemen                                    </option>
                                                                    <option value="YT" 
                                        >
                                       Mayotte                                    </option>
                                                                    <option value="ZA" 
                                        >
                                       South Africa                                    </option>
                                                                    <option value="ZM" 
                                        >
                                       Zambia                                    </option>
                                                                    <option value="ZW" 
                                        >
                                       Zimbabwe                                    </option>
                                                            </select>
                            <i class="arrow"></i>
                        </label>
                        
                        <span name="country_autocheck" class="autocheck append-icon right"></span>
                        <div name="country_error" class="text-danger"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Currency config -->
<div class="row mb10">
    <div class="col-md-2">
        <label class="field mb5">
            Tiền tệ(<span class="text-danger">*</span>):
        </label>
    </div>
    
    <div class="col-md-10">
        <div class="row">
                            <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-12">
                            <label class="field mb5" for="param_currency_id">
                                Tiền tệ sử dụng:
                            </label>
                        </div>
                        
                        <div class="col-md-12">
                            <div class="row">
                                                                    <div class="col-md-12">
                                        <label class="field select" for="param_currency_id">
                                            <select name="currency_id" _autocheck="true" id="param_currency_id">
                                                                                                <option 
                                                    _symbol_left=""
                                                    _symbol_right="₫"
                                                    _decimal="0"
                                                    value="1" 
                                                    selected="selected">
                                                        Việt Nam đồng                                                </option>
                                                                                                <option 
                                                    _symbol_left=""
                                                    _symbol_right="$"
                                                    _decimal="0"
                                                    value="2" 
                                                    >
                                                        United States Dollars                                                </option>
                                                                                                <option 
                                                    _symbol_left="£"
                                                    _symbol_right=""
                                                    _decimal="0"
                                                    value="3" 
                                                    >
                                                        United Kingdom Pounds                                                </option>
                                                                                                <option 
                                                    _symbol_left=""
                                                    _symbol_right="¥"
                                                    _decimal="0"
                                                    value="4" 
                                                    >
                                                        Japanese Yen                                                </option>
                                                                                                <option 
                                                    _symbol_left=""
                                                    _symbol_right="$"
                                                    _decimal="0"
                                                    value="5" 
                                                    >
                                                        Singapore Dollars                                                </option>
                                                                                                <option 
                                                    _symbol_left=""
                                                    _symbol_right="₩"
                                                    _decimal="0"
                                                    value="6" 
                                                    >
                                                        South Korean Won                                                </option>
                                                                                                <option 
                                                    _symbol_left=""
                                                    _symbol_right="฿"
                                                    _decimal="0"
                                                    value="7" 
                                                    >
                                                        Thai baht                                                </option>
                                                                                                <option 
                                                    _symbol_left=""
                                                    _symbol_right="¥"
                                                    _decimal="0"
                                                    value="8" 
                                                    >
                                                        Chinese (Simplified, China)                                                </option>
                                                                                            </select>
                                            <i class="arrow"></i>
                                        </label>
                                                                        
                                        <span name="id_autocheck" class="autocheck append-icon right"></span>
                                        <div name="id_error" class="text-danger"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                                            <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-12">
                            <label class="field mb5" for="param_currency_symbol_left">
                                Tiền tố:
                            </label>
                        </div>
                        
                        <div class="col-md-12">
                            <div class="row">
                                                                    <div class="col-md-8">
                                        <label class="field mb5">
                                            <input name="currency_symbol_left" id="currency_symbol_left" class="form-control" 
                                                _autocheck="true" type="text" value="" />
                                        </label>
                                        <i class="arrow"></i>
                                                                        
                                        <span name="symbol_left_autocheck" class="autocheck append-icon right"></span>
                                        <div name="symbol_left_error" class="text-danger"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                </div><div class="row">                            <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-12">
                            <label class="field mb5" for="param_currency_symbol_right">
                                Hậu tố:
                            </label>
                        </div>
                        
                        <div class="col-md-12">
                            <div class="row">
                                                                    <div class="col-md-8">
                                        <label class="field mb5">
                                            <input name="currency_symbol_right" id="currency_symbol_right" class="form-control" 
                                                _autocheck="true" type="text" value="₫" />
                                        </label>
                                        <i class="arrow"></i>
                                                                        
                                        <span name="symbol_right_autocheck" class="autocheck append-icon right"></span>
                                        <div name="symbol_right_error" class="text-danger"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                                            <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-12">
                            <label class="field mb5" for="param_currency_decimal">
                                Số thập phân:
                            </label>
                        </div>
                        
                        <div class="col-md-12">
                            <div class="row">
                                                                    <div class="col-md-8">
                                        <label class="field mb5">
                                            <input name="currency_decimal" id="currency_decimal" class="form-control" 
                                                _autocheck="true" type="text" value="0" />
                                        </label>
                                        <i class="arrow"></i>
                                                                        
                                        <span name="decimal_autocheck" class="autocheck append-icon right"></span>
                                        <div name="decimal_error" class="text-danger"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                </div><div class="row">                    </div>
    </div>
</div>

<!-- Maintenance -->
<div class="row mb10">
    <div class="col-md-2">
        <label class="field mb5" for="maintenance">Chế độ bảo trì:</label>
    </div>
    <div class="col-md-6">
        <div class="radio-custom radio-info pull-left mv10">
            <input type="radio" name="maintenance" value="0" id="maintenance_0" 
                checked="checked" />
            <label for="maintenance_0">Không</label>
        </div>
        <div class="radio-custom radio-info pull-left mv10">
            <input type="radio" name="maintenance" value="1" id="maintenance_1" 
                 />
            <label for="maintenance_1">Có</label>
        </div>
    </div>
</div>

<hr />
<div class="row mb10" id="maintenance_notice">
    <div class="col-md-2">
        <label class="field mb5">
            Thông báo(<span class="text-danger">*</span>):
        </label>
    </div>
    
    <div class="col-md-10">
        <textarea name="maintenance_notice" id="maintenance_notice_content" 
            class="editor"></textarea>
        <div name="maintenance_notice_error" class="text-danger"></div>
    </div>
</div>
<!-- end Maintenance -->

<!-- SMTP Type -->
<div class="row mb10">
    <div class="col-md-2">
        <label class="field mb5" for="smtp_type">
            Máy chủ SMTP:(<span class="text-danger">*</span>)
        </label>
    </div>
    
    <div class="col-md-6">
        <select name="smtp_type" _autocheck="true">
                            <option value="default" 
                     >
                        Sử dụng máy chủ SMTP mặc định của Web5s                </option>
                            <option value="custom" 
                     >
                        Chỉ định thông tin máy chủ SMTP riêng                </option>
                    </select>
        
        <span name="smtp_type_autocheck" class="autocheck append-icon right"></span>
        <label name="smtp_type_error" class="text-danger"></label>
    </div>
</div>

<div id="smtp_type">
    <div _smtp_type="custom">
                    <div class="row mb10">
                <div class="col-md-2">
                    <label class="field mb5" for="smtp_host">
                        Server Address:(<span class="text-danger">*</span>)
                    </label>
                </div>
                
                <div class="col-md-5">
                    <input name="smtp_host" id="mail_smtp_host" 
                           _autocheck="true" type="text" 
                           class="form-control" value="" />
                    
                    <span name="smtp_host_autocheck" class="autocheck append-icon right"></span>
                    <div name="smtp_host_error" class="text-danger"></div>
                </div>
            </div>
                    <div class="row mb10">
                <div class="col-md-2">
                    <label class="field mb5" for="smtp_user">
                        Username:(<span class="text-danger">*</span>)
                    </label>
                </div>
                
                <div class="col-md-5">
                    <input name="smtp_user" id="mail_smtp_user" 
                           _autocheck="true" type="text" 
                           class="form-control" value="" />
                    
                    <span name="smtp_user_autocheck" class="autocheck append-icon right"></span>
                    <div name="smtp_user_error" class="text-danger"></div>
                </div>
            </div>
                    <div class="row mb10">
                <div class="col-md-2">
                    <label class="field mb5" for="smtp_pass">
                        Password:(<span class="text-danger">*</span>)
                    </label>
                </div>
                
                <div class="col-md-5">
                    <input name="smtp_pass" id="mail_smtp_pass" 
                           _autocheck="true" type="password" 
                           class="form-control" value="" />
                    
                    <span name="smtp_pass_autocheck" class="autocheck append-icon right"></span>
                    <div name="smtp_pass_error" class="text-danger"></div>
                </div>
            </div>
                    <div class="row mb10">
                <div class="col-md-2">
                    <label class="field mb5" for="smtp_port">
                        Port:(<span class="text-danger">*</span>)
                    </label>
                </div>
                
                <div class="col-md-5">
                    <input name="smtp_port" id="mail_smtp_port" 
                           _autocheck="true" type="text" 
                           class="form-control" value="25" />
                    
                    <span name="smtp_port_autocheck" class="autocheck append-icon right"></span>
                    <div name="smtp_port_error" class="text-danger"></div>
                </div>
            </div>
                    <div class="row mb10">
                <div class="col-md-2">
                    <label class="field mb5" for="smtp_timeout">
                        Timeout (seconds):(<span class="text-danger">*</span>)
                    </label>
                </div>
                
                <div class="col-md-5">
                    <input name="smtp_timeout" id="mail_smtp_timeout" 
                           _autocheck="true" type="text" 
                           class="form-control" value="5" />
                    
                    <span name="smtp_timeout_autocheck" class="autocheck append-icon right"></span>
                    <div name="smtp_timeout_error" class="text-danger"></div>
                </div>
            </div>
            </div>
</div>
<!-- SMTP Type -->                        </div>

                        <div id="tab_image" class="tab_content pd0">
                            <div class="row mb10">
    <div class="col-md-2">
        <label class="formLeft" for="param_logo">
            Logo:</label>
    </div>
    <div class="col-md-6">
        <label class="field mb5" id="widget_upload_image">
                <input name="logo" id="param_logo" _autocheck="true" type="text" class="form-control img-input" value="/logo/logo.png" />
                    
        <a title="Hình ảnh" href="public/js/tinymce/plugins/filemanager/dialog.php?type=1&subfolder=&editor=mce_0&lang=eng&fldr=&field_id=param_logo" 
            class="btn btn-success fw600 pull-right pv5 hidden-xs fancybox"><span>Chọn</span>
        </a> 
</label>

<div name="logo_error" class="text-danger"></div>
<div class="upload_single_image mt10"><div id="upload_complete"></div></div>

<script type="text/javascript">
        $( document ).ready(function() 
        {
                $("input[name=image_name").blur(function() 
                {
                        loadFile();
                });
        });
        
        // Tu dong load file sau 2s
        setTimeout("loadFile", 2000);
                
        function loadFile()
        {
                var file = $('input[name=image_name]').val();
                $.ajax({
                        url: admin_url + 'home/getfile',
                        type:'GET',
                        data: 'file='+file,
                        error: function()
                        {
                                // false
                        },
                        success: function(html)
                        {

                                $('#upload_complete').html(html);
                        }
                });
        }
</script>    </div>
</div>

<div class="row mb10">
    <div class="col-md-2">
        <label class="formLeft"></label>
    </div>
    
            <div class="col-md-1">
            <label class="pt10" for="param_logo_width">Rộng:</label>
        </div>
        <div class="col-md-2">
            <div class="fl input-group">
                <input name="logo_width" id="param_logo_width" _autocheck="true"
                       type="text" class="form-control" value="0" />
                <span name="logo_width_autocheck" class="autocheck append-icon right"></span>
                <span class="input-group-addon unit">px</span>
                <div name="logo_width_error" class="text-danger"></div>
            </div>
        </div>
            <div class="col-md-1">
            <label class="pt10" for="param_logo_height">Cao:</label>
        </div>
        <div class="col-md-2">
            <div class="fl input-group">
                <input name="logo_height" id="param_logo_height" _autocheck="true"
                       type="text" class="form-control" value="0" />
                <span name="logo_height_autocheck" class="autocheck append-icon right"></span>
                <span class="input-group-addon unit">px</span>
                <div name="logo_height_error" class="text-danger"></div>
            </div>
        </div>
    </div>

<div class="row">
    <div class="col-md-2">
        <label class="formLeft"></label>
    </div>
    <div class="col-md-10">
        <p class="note"><i>Để giá trị 0, ảnh tự động co giãn</i></p>
    </div>
</div>

<div class="row mb10">
    <div class="col-md-2">
        <label class="formLeft" for="param_favicon">
            Favicon:
        </label>
    </div>
    <div class="col-md-6">
        <label class="field mb5" id="widget_upload_image">
                    <input name="favicon" id="param_favicon" _autocheck="true" type="text" class="form-control img-input" />
                    
        <a title="Hình ảnh" href="public/js/tinymce/plugins/filemanager/dialog.php?type=1&subfolder=&editor=mce_0&lang=eng&fldr=&field_id=param_favicon" 
            class="btn btn-success fw600 pull-right pv5 hidden-xs fancybox"><span>Chọn</span>
        </a> 
</label>

<div name="favicon_error" class="text-danger"></div>
<div class="upload_single_image mt10"><div id="upload_complete"></div></div>

<script type="text/javascript">
        $( document ).ready(function() 
        {
                $("input[name=image_name").blur(function() 
                {
                        loadFile();
                });
        });
        
        // Tu dong load file sau 2s
        setTimeout("loadFile", 2000);
                
        function loadFile()
        {
                var file = $('input[name=image_name]').val();
                $.ajax({
                        url: admin_url + 'home/getfile',
                        type:'GET',
                        data: 'file='+file,
                        error: function()
                        {
                                // false
                        },
                        success: function(html)
                        {

                                $('#upload_complete').html(html);
                        }
                });
        }
</script>    </div>
</div>                        </div>

                        <div id="tab_payment" class="tab_content pd0">
                                <div class="row mb10">
        <div class="col-md-2">
            <label class="">Chuyển khoản:</label>
        </div>
        
        <div class="col-md-6">
            <div class="radio-custom radio-info pull-left mv10">
                <input type="radio" name="transfer" value="0" 
                       id="transfer_0" checked="checked" />
                <label for="transfer_0">Không</label>
            </div>
            
            <div class="radio-custom radio-info pull-left mv10">
                <input type="radio" name="transfer" value="1" 
                       id="transfer_1"  />
                <label for="transfer_1">Có</label>
            </div>
        </div>
    </div>

        <div class="row mb10" id="payment_type_transfer_note">
                
        <div class="col-md-2">
            <label class="payment_type_transfer_note">
                <i>Hướng dẫn</i>:</label>
        </div>
        
        <div class="col-md-10">
            <textarea name="payment_type_transfer_note"
                      id="param_payment_type_transfer_note" class="editor">transfer</textarea>
            <div name="payment_type_transfer_note_error"
                 class="text-danger"></div>
        </div>
    </div>
    <div class="row mb10">
        <div class="col-md-2">
            <label class="">Thanh toán khi nhận hàng(COD):</label>
        </div>
        
        <div class="col-md-6">
            <div class="radio-custom radio-info pull-left mv10">
                <input type="radio" name="cod" value="0" 
                       id="cod_0" checked="checked" />
                <label for="cod_0">Không</label>
            </div>
            
            <div class="radio-custom radio-info pull-left mv10">
                <input type="radio" name="cod" value="1" 
                       id="cod_1"  />
                <label for="cod_1">Có</label>
            </div>
        </div>
    </div>

        <div class="row mb10" id="payment_type_cod_note">
                
        <div class="col-md-2">
            <label class="payment_type_cod_note">
                <i>Hướng dẫn</i>:</label>
        </div>
        
        <div class="col-md-10">
            <textarea name="payment_type_cod_note"
                      id="param_payment_type_cod_note" class="editor">cod</textarea>
            <div name="payment_type_cod_note_error"
                 class="text-danger"></div>
        </div>
    </div>
    <div class="row mb10">
        <div class="col-md-2">
            <label class="">Thanh toán qua Ngân Lượng:</label>
        </div>
        
        <div class="col-md-6">
            <div class="radio-custom radio-info pull-left mv10">
                <input type="radio" name="nganluong" value="0" 
                       id="nganluong_0" checked="checked" />
                <label for="nganluong_0">Không</label>
            </div>
            
            <div class="radio-custom radio-info pull-left mv10">
                <input type="radio" name="nganluong" value="1" 
                       id="nganluong_1"  />
                <label for="nganluong_1">Có</label>
            </div>
        </div>
    </div>

        <div class="row mb10" id="payment_type_nganluong_note">
                    <div class="col-md-12 mt10">
                <div class="row mb10">
                    <div class="col-md-2">
                        <label class="formLeft" for="param_receiver">
                            Email:(<span class="text-danger">*</span>)</label>
                    </div>

                    <div class="col-md-6">
                        <input name="receiver" id="param_receiver" _autocheck="true" class="form-control" 
                               type="text" value="" />
                        <span name="receiver_autocheck_autocheck" class="autocheck append-icon right"></span>
                        <div name="receiver_error" class="text-danger"></div>
                    </div>
                </div>

                <div class="row mb10">
                    <div class="col-md-2">
                        <label class="formLeft" for="param_merchant_site_code">
                            ID kết nối:(<span class="text-danger">*</span>)
                        </label>
                    </div>

                    <div class="col-md-6">
                        <input name="merchant_site_code" id="param_merchant_site_code" 
                               _autocheck="true" class="form-control" type="text" value=""/>
                        <span name="merchant_site_code_autocheck_autocheck" 
                              class="autocheck append-icon right"></span>
                        <div name="merchant_site_code_error" class="text-danger"></div>
                    </div>
                </div>

                <div class="row mb10">
                    <div class="col-md-2">
                        <label class="formLeft" for="secure_secure_pass">
                            Mật khẩu kết nối:(<span class="text-danger">*</span>)</label>
                    </div>

                    <div class="col-md-6">
                        <input name="secure_pass" id="param_secure_pass" _autocheck="true" 
                            class="form-control" type="password" value="" />
                        <span name="secure_pass_autocheck_autocheck" class="autocheck append-icon right"></span>
                        <div name="secure_pass_error" class="text-danger"></div>
                    </div>
                </div>
            </div>
                
        <div class="col-md-2">
            <label class="payment_type_nganluong_note">
                <i>Hướng dẫn</i>:</label>
        </div>
        
        <div class="col-md-10">
            <textarea name="payment_type_nganluong_note"
                      id="param_payment_type_nganluong_note" class="editor">nganluong</textarea>
            <div name="payment_type_nganluong_note_error"
                 class="text-danger"></div>
        </div>
    </div>




                        </div>

                        <div id="tab_affiliate" class="tab_content pd0">
                            <!-- Affiliate -->
<div class="row mb10">
    <div class="col-md-2">
        <label class="field mb5" for="affiliate_status">Sử dụng:</label>
    </div>
    <div class="col-md-6">
        <div class="radio-custom radio-info pull-left mv10">
            <input type="radio" name="affiliate_status" value="0" id="affiliate_status_0"  />
            <label for="affiliate_status_0">Không</label>
        </div>
        <div class="radio-custom radio-info pull-left mv10">
            <input type="radio" name="affiliate_status" value="1" id="affiliate_status_1" checked="checked" />
            <label for="affiliate_status_1">Có</label>
        </div>
    </div>
    
</div>

<div id="affiliate_main">
    <div class="row mb10">
        <div class="col-md-2">
            <label class="field mb5" for="affiliate_title">
                Tên hiển thị:
            </label>
        </div>
        <div class="col-md-6">    
            <label class="field mb5">
                <input name="affiliate_title" id="affiliate_title" class="form-control" _autocheck="true" 
                       type="text" value="Cộng tác viên" />
            </label>
            <span name="affiliate_title_autocheck" class="autocheck append-icon right"></span>
            <div name="affiliate_title_error" class="text-danger"></div>
        </div>
        
    </div>

    <div class="row mb10">
        <div class="col-md-2">
            <label class="field mb5" for="affiliate_percent">
                Chiết khấu chi trả(<span class="text-danger">*</span>):
            </label>
        </div>
        <div class="col-md-2">    
            <label class="field mb5">
                <div class="fl input-group">
                    <input name="affiliate_percent" id="affiliate_title" class="form-control" _autocheck="true" 
                           type="text" value="10" />
                    <span class="input-group-addon unit">%</span>
                </div>
            </label>
            <span name="affiliate_percent_autocheck" class="autocheck append-icon right"></span>
            <div name="affiliate_percent_error" class="text-danger"></div>
        </div>
        
    </div>

    <div class="row mb10">
        <div class="col-md-2">
            <label class="field mb5" for="affiliate_min_amount_cashout">
                Số tiền rút tối thiểu(<span class="text-danger">*</span>):
            </label>
        </div>
        <div class="col-md-2">    
            <label class="field mb5">
                <div class="fl input-group">
                    <input name="affiliate_min_amount_cashout" id="affiliate_min_amount_cashout" class="format_number form-control" _autocheck="true" 
                           type="text" value="200000" />
                    <span class="input-group-addon unit">₫</span>
                </div>
            </label>
            <span name="affiliate_min_amount_cashout_autocheck" class="autocheck append-icon right"></span>
            <div name="affiliate_min_amount_cashout_error" class="text-danger"></div>
        </div>
        
    </div>

    <div class="row mb10" id="affiliate_desc">
        <div class="col-md-2">
            <label class="field mb5">Mô tả:</label>
        </div>
        
        <div class="col-md-10">
            <textarea name="affiliate_desc" id="affiliate_desc_content" 
                      class="editor"><p>M&ocirc; tả về chương tr&igrave;nh cộng t&aacute;c vi&ecirc;n...</p></textarea>
            <div name="affiliate_desc_error" class="text-danger"></div>
        </div>
        
    </div>
</div>                        </div>

                        <div id="tab_social" class="tab_content pd0">
                                    <div class="row mb10">
                <div class="col-md-2"><label class="pt10" for="param_facebook">Page Facebook:</label></div>
                <div class="col-md-6">
                    <label class="field mb5">
                        <input placeholder="Ví dụ: https://www.facebook.com/inet.vn" name="facebook" id="param_facebook" 
                                _autocheck="true" type="text" class="form-control" value="" />
                    </label>
                    <span name="facebook_autocheck" class="autocheck append-icon right"></span>
                    <div name="facebook_error" class="text-danger"></div>
                </div>
                <div class="clear"></div>
        </div>
        <div class="row mb10">
                <div class="col-md-2"><label class="pt10" for="param_google-plus">page Google +:</label></div>
                <div class="col-md-6">
                    <label class="field mb5">
                        <input placeholder="Ví dụ: https://plus.google.com/" name="google-plus" id="param_google-plus" 
                                _autocheck="true" type="text" class="form-control" value="" />
                    </label>
                    <span name="google-plus_autocheck" class="autocheck append-icon right"></span>
                    <div name="google-plus_error" class="text-danger"></div>
                </div>
                <div class="clear"></div>
        </div>
        <div class="row mb10">
                <div class="col-md-2"><label class="pt10" for="param_twitter">Page Twitter:</label></div>
                <div class="col-md-6">
                    <label class="field mb5">
                        <input placeholder="Ví dụ: https://twitter.com/inetvn" name="twitter" id="param_twitter" 
                                _autocheck="true" type="text" class="form-control" value="" />
                    </label>
                    <span name="twitter_autocheck" class="autocheck append-icon right"></span>
                    <div name="twitter_error" class="text-danger"></div>
                </div>
                <div class="clear"></div>
        </div>
        <div class="row mb10">
                <div class="col-md-2"><label class="pt10" for="param_youtube">Youtube chanel:</label></div>
                <div class="col-md-6">
                    <label class="field mb5">
                        <input placeholder="Ví dụ: https://www.youtube.com/user/inetvn" name="youtube" id="param_youtube" 
                                _autocheck="true" type="text" class="form-control" value="" />
                    </label>
                    <span name="youtube_autocheck" class="autocheck append-icon right"></span>
                    <div name="youtube_error" class="text-danger"></div>
                </div>
                <div class="clear"></div>
        </div>
                        </div>

                        <div id="tab_plugin" class="tab_content pd0">
                            <div class="row mb10">
    <div class="col-md-12">
        <label class="pt10">Tọa độ dành cho trang bản đồ:</label>
    </div>
            <div class="col-md-6">
            <div class="row">
                <div class="col-md-2">
                    <label class="pt10" for="param_map_long">Kinh độ:</label>
                </div>
                <div class="col-md-8">
                        <input name="map_long" _autocheck="true" id="param_map_long"
                               type="text" class="form-control" value="21.033918" />
                        <span name="map_long_autocheck" class="autocheck append-icon right"></span>
                        <div name="map_long_error" class="text-danger"></div>
                </div>
            </div>
        </div>
            <div class="col-md-6">
            <div class="row">
                <div class="col-md-2">
                    <label class="pt10" for="param_map_lati">Vĩ độ:</label>
                </div>
                <div class="col-md-8">
                        <input name="map_lati" _autocheck="true" id="param_map_lati"
                               type="text" class="form-control" value="105.796999" />
                        <span name="map_lati_autocheck" class="autocheck append-icon right"></span>
                        <div name="map_lati_error" class="text-danger"></div>
                </div>
            </div>
        </div>
    </div>

<div class="row mb10">
    <div class="col-md-12">
        <label class="pt10" for="fb_id">ID ứng dụng facebook:</label>
    </div>
            <div class="col-md-6">
            <div class="row">
                <div class="col-md-2">
                    <label class="pt10" for="param_fb_appId">Facebook App ID:</label>
                </div>
                <div class="col-md-8">
                    <input name="fb_appId" id="param_fb_appId" _autocheck="true" 
                           type="text" class="form-control" value="635938693173611" />
                    <span name="fb_appId_autocheck" class="autocheck append-icon right"></span>
                    <div name="fb_appId_error" class="text-danger"></div>
                </div>
            </div>
        </div>
            <div class="col-md-6">
            <div class="row">
                <div class="col-md-2">
                    <label class="pt10" for="param_fb_admins">Facebook admin ID:</label>
                </div>
                <div class="col-md-8">
                    <input name="fb_admins" id="param_fb_admins" _autocheck="true" 
                           type="text" class="form-control" value="" />
                    <span name="fb_admins_autocheck" class="autocheck append-icon right"></span>
                    <div name="fb_admins_error" class="text-danger"></div>
                </div>
            </div>
        </div>
        <div class="clear"></div>
</div>

    <div class="row mb10">
        <div class="col-md-3">
            <label class="field mb5" for="google_webmaster_tools">Google Webmaster Tools:</label>
        </div>
        <div class="col-md-12">
                                        <label class="field mb5">
                    <input name="google_webmaster_tools" id="google_webmaster_tools" class="form-control" 
                        _autocheck="true" type="text" value='' />
                </label>
                        
            <span name="google_webmaster_tools_autocheck" class="autocheck append-icon right"></span>
            <div name="google_webmaster_tools_error" class="text-danger"></div>
        </div>
    </div>
    <div class="row mb10">
        <div class="col-md-3">
            <label class="field mb5" for="google_analytics">Mã Google Analytics:</label>
        </div>
        <div class="col-md-12">
                                        <label class="field prepend-icon">
                    <textarea name="google_analytics" id="meta_desc" _autocheck="true" 
                              class="gui-textarea p10" 
                    placeholder="Nhập mã Mã Google Analytics nguyên bản"
                    ></textarea>
                </label>
                        
            <span name="google_analytics_autocheck" class="autocheck append-icon right"></span>
            <div name="google_analytics_error" class="text-danger"></div>
        </div>
    </div>
    <div class="row mb10">
        <div class="col-md-3">
            <label class="field mb5" for="widget_chat">Widget Chat:</label>
        </div>
        <div class="col-md-12">
                                        <label class="field prepend-icon">
                    <textarea name="widget_chat" id="meta_desc" _autocheck="true" 
                              class="gui-textarea p10" 
                    placeholder="Nhập mã Widget Chat nguyên bản"
                    ></textarea>
                </label>
                        
            <span name="widget_chat_autocheck" class="autocheck append-icon right"></span>
            <div name="widget_chat_error" class="text-danger"></div>
        </div>
    </div>
    <div class="row mb10">
        <div class="col-md-3">
            <label class="field mb5" for="facebook_ads_pixel">Facebooke Ads Pixcel:</label>
        </div>
        <div class="col-md-12">
                                        <label class="field prepend-icon">
                    <textarea name="facebook_ads_pixel" id="meta_desc" _autocheck="true" 
                              class="gui-textarea p10" 
                    placeholder="Nhập mã Facebooke Ads Pixcel nguyên bản"
                    ></textarea>
                </label>
                        
            <span name="facebook_ads_pixel_autocheck" class="autocheck append-icon right"></span>
            <div name="facebook_ads_pixel_error" class="text-danger"></div>
        </div>
    </div>
                        </div>
                    </div>
                </fieldset>

                <div class="box-Submit text-right">
                    <input type="submit" value="Cập nhật" class="btn btn-success" />
                </div>
            </div>
        </div>
    </form>
</section>



                <!-- Modal -->
                <div class="modal fade" id="modal" tabindex="-1" role="dialog">
                    <div class="modal-dialog" role="document">
                        <div class="modal_click_content"></div>
                    </div>
                </div>

