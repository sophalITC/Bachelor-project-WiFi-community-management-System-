var map; // ��˹������ map ����ҹ�͡�ѧ��ѹ �����������ö���¡��ҹ �ҡ��ǹ�����  
var GGM; // ��˹������ GGM ����� google.maps Object �������¡��ҹ����¢��  
var my_Marker;  // ��˹�������� marker ���˹觻Ѩ�غѹ ���ͷ���к�  
var mapCircle; // ��˹������ ����Ѻ �� circle 
function initialize() { // �ѧ��ѹ�ʴ�Ἱ���  
    GGM=new Object(google.maps); // �纵���� google.maps Object ���㹵���� GGM  
  
    // ���¡��س���ѵ� �кص��˹� �ͧ html 5 �����    
    if(navigator.geolocation){    
            
            // �ҵ��˹觻Ѩ�غѹ���� getCurrentPosition ���¡���˹觤����á��������������Դ��˹��Ἱ���
            navigator.geolocation.getCurrentPosition(function(position){    
                var myPosition_lat=position.coords.latitude; // �纤�ҵ��˹� latitude  �Ѩ�غѹ  
                var myPosition_lon=position.coords.longitude;  // �纤�ҵ��˹�  longitude �Ѩ�غѹ           
                
                // ���ҧ LatLng ���˹� ����Ѻ google map  
                var pos = new GGM.LatLng(myPosition_lat,myPosition_lon);
				
                
                // ��˹� DOM object �������Ἱ�����ʴ� ������� div id=map_canvas  
                var my_DivObj=$("#map_canvas")[0];   
                
                // ��˹� Option �ͧἹ���  
                var myOptions = {  
                    zoom: 16, // ��˹���Ҵ��� zoom  
                    center: pos , // ��˹��ش��觡�ҧ  �繨ش����������Ѩ�غѹ
                    mapTypeId:GGM.MapTypeId.ROADMAP, // ��˹��ٻẺἹ���  
                    mapTypeControlOptions:{ // ��èѴ�ٻẺ��ǹ�Ǻ���������Ἱ���  
                        position:GGM.ControlPosition.RIGHT, // �Ѵ���˹�  
                        style:GGM.MapTypeControlStyle.DROPDOWN_MENU // �Ѵ�ٻẺ style   
                    }  
                };  
         
                map = new GGM.Map(my_DivObj,myOptions);// ���ҧἹ�������纵�������㹪��� map                      
              
               my_Marker = new GGM.Marker({ // ���ҧ��� marker  
                    position: pos,  // ��˹���������ǡѺ�ش��觡�ҧ  
                    map: map, // ��˹���� marker �����ѺἹ������ instance ��� map  
                    icon:"http://image.ohozaa.com/i/96c/ZqyXht.png",  
                    draggable:true, // ��˹��������ö�ҡ��� marker �����  
                    //title:"��ԡ�ҡ�����ҵ��˹觨ش����ͧ���!" // �ʴ� title ��������������������˹��  
                });
			     
                
                // ��˹� event ���Ѻ���Ἱ��� ������ա������¹�ŧ��� zoom  
                GGM.event.addListener(map, "zoom_changed", function() {  
                    $("#zoom_value").val(map.getZoom()); // ��Ң�Ҵ zoom �ͧἹ����ʴ�� textbox id=zoom_value    
                });                  
                
            },function() {    
                // ����觷ӧҹ ��� �к��кص��˹� geolocation �Դ��Ҵ �������ӧҹ    
            });    
        
            // ����Ѿഷ���˹��Ἱ����ѵ��ѵ� ����ҹ watchPosition
            // ��ҵ��˹觨�����������ա���觤�ҵ��˹觷��١��ͧ��Ѻ��
            navigator.geolocation.watchPosition(function(position){    
 
                var myPosition_lat=position.coords.latitude; // �纤�ҵ��˹� latitude  �Ѩ�غѹ  
                var myPosition_lon=position.coords.longitude;  // �纤�ҵ��˹�  longitude �Ѩ�غѹ  
                               
                // ���ҧ LatLng ���˹觻Ѩ�غѹ watchPosition
                var pos = new GGM.LatLng(myPosition_lat,myPosition_lon);     
                
                // ��� marker ����͹�������˹觻Ѩ�غѹ �������Ѿഷ�ͧ���˹觨ҡ watchPosition
                my_Marker.setPosition(pos);
                                    
                var my_Point = my_Marker.getPosition();  // �֧���˹觵�� marker  ����㹵����
                $("#lat_value").val(my_Point.lat());  // ��Ҥ�� latitude ��� marker �ʴ�� textbox id=lat_value  
                $("#lon_value").val(my_Point.lng()); // ��Ҥ�� longitude ��� marker �ʴ�� textbox id=lon_value   
                $("#zoom_value").val(map.getZoom()); // ��Ң�Ҵ zoom �ͧἹ����ʴ�� textbox id=zoom_value           
                
                map.panTo(pos); // ����͹Ἱ���仵��˹觻Ѩ�غѹ  
                map.setCenter(pos);  // ��˹��ش��ҧ�ͧἹ����� ���˹觻Ѩ�غѹ                   
      

            },function() {    
                // ����觷ӧҹ ��� �к��кص��˹� geolocation �Դ��Ҵ �������ӧҹ    
            });    
          
    }else{    
         // ����觷ӧҹ ��� �������� ���ʹѺʹع �кص��˹�    
    }     


  
}

$(function(){  
    // ��Ŵ ʤ�Ի google map api ����������Ŵ���º��������  
    // ��ҵ���� ���������� google map api  
    // v=3.2&sensor=false&language=th&callback=initialize  
    //  v �����ѹ� 3.2  
    //  sensor ��˹��������ö�ʴ����˹觷��ԴἹ��������� ���������Ѻ��Ͷ�� ������ false  
    //  language ���� th ,en �繵�  
    //  callback ������¡��ѧ��ѹ�ʴ� Ἱ��� initialize  
    $("<script/>", {  
      "type": "text/javascript",  
      src: "http://maps.google.com/maps/api/js?v=3.2&sensor=false&language=th&callback=initialize"  
    }).appendTo("body");      
});  