/* $Id : region.js 4865 2007-01-31 14:04:10Z paulgao $ */

var region = new Object();

region.isAdmin = false;

region.loadRegions = function(parent, type, target)
{
  Ajax.call(region.getFileName(), 'type=' + type + '&target=' + target + "&parent=" + parent , region.response, "GET", "JSON");
}

/* *
 * 载入指定的国家下所有的省份
 *
 * @country integer     国家的编号
 * @selName string      列表框的名称
 */
region.loadProvinces = function(country, selName)
{
  var objName = (typeof selName == "undefined") ? "selProvinces" : selName;

  region.loadRegions(country, 1, objName);
}

/* *
 * 载入指定的省份下所有的城市
 *
 * @province    integer 省份的编号
 * @selName     string  列表框的名称
 */
region.loadCities = function(province, selName)
{
  var objName = (typeof selName == "undefined") ? "selCities" : selName;

  region.loadRegions(province, 2, objName);
}



//修改地址
function updataAddress(id){
	var name = $("#address_name"+id).text();
	var address = $("#address_address"+id).text();
	var tel = $("#address_tel"+id).text();
	var country_id = $("#country_id"+id).val();
	var province_id = $("#province_id"+id).val();
	var city_id = $("#city_id"+id).val();
	var district_id = $("#district_id"+id).val();
	
	
	
	
	$("#address_id").val(id);
	$("#address_name").val(name);
	$("#address_address").val(address);
	$("#address_tel").val(tel);
	
	$("#selCountries").val(country_id);

	$("#selProvinces").val(province_id);

	$("#selCities").val(city_id);

	$("#selDistricts").val(district_id);
}

//设为默认地址
function morenAddress(id){
$.ajax({
	type:"POST",
	dataType: "json",
	url:'../ajaxphp/flow.php?action=moren&'+Math.random(),
	data:{"id":id},
	success: function(json){
	if(json.success==1){
		var radio = document.getElementsByName('dx');
		var length = radio.length;
		for(var i=0;i<length;i++){
			if(radio[i].checked){
				var radioValue = radio[i].value;
				break;
			}
		}
		$("input[name=dx][value='"+ radioValue+"']").attr("checked",false);
		$("input[name=dx][value='"+ id+"']").attr("checked",true);
		
		var a = "<a id='a_"+ radioValue+"' href='javascript:morenAddress("+radioValue+ ")'>设为默认&nbsp;|</a>";
		$("#caozuo_"+radioValue).prepend(a);
		var div = 	document.getElementById('a_'+id);
		document.getElementById("caozuo_"+id).removeChild(div);
	}
	else 
		alert(json.msg);
	}
});

}
//保存地址
function saveAddress(){
	
}

//删除地址
function deleteAddress(id){
	var msg = "确定删除此地址么？";
	if(confirm(msg)==true){
			$.ajax({
	type:"POST",
	dataType: "json",
	url:'../ajaxphp/flow.php?action=delete&'+Math.random(),
	data:{"id":id},
	success: function(json){
	if(json.success==1){
		alert(json.msg);
	var div = 	document.getElementById('div'+id);
	document.getElementById('address').removeChild(div);
	}
	else 
		alert(json.msg);
	}
	});
	}
}

/* *
 * 载入指定的城市下的区 / 县
 *
 * @city    integer     城市的编号
 * @selName string      列表框的名称
 */
region.loadDistricts = function(city, selName)
{
  var objName = (typeof selName == "undefined") ? "selDistricts" : selName;

  region.loadRegions(city, 3, objName);
}

/* *
 * 处理下拉列表改变的函数
 *
 * @obj     object  下拉列表
 * @type    integer 类型
 * @selName string  目标列表框的名称
 */
region.changed = function(obj, type, selName)
{
  var parent = obj.options[obj.selectedIndex].value;

  region.loadRegions(parent, type, selName);
}

region.response = function(result, text_result)
{
  var sel = document.getElementById(result.target);

  sel.length = 1;
  sel.selectedIndex = 0;
  sel.style.display = (result.regions.length == 0 && ! region.isAdmin && result.type + 0 == 3) ? "none" : '';

  if (document.all)
  {
    sel.fireEvent("onchange");
  }
  else
  {
    var evt = document.createEvent("HTMLEvents");
    evt.initEvent('change', true, true);
    sel.dispatchEvent(evt);
  }

  if (result.regions)
  {
    for (i = 0; i < result.regions.length; i ++ )
    {
      var opt = document.createElement("OPTION");
      opt.value = result.regions[i].region_id;
      opt.text  = result.regions[i].region_name;

      sel.options.add(opt);
    }
  }
}

region.getFileName = function()
{
  if (region.isAdmin)
  {
    return "../region.php";
  }
  else
  {
    return "region.php";
  }
}
