$(".filtro_avancado").hide();

function copia_texto(elemento, url) {
  /* Get the text field */
  var copyText = document.getElementById(elemento);
  /* Select the text field */
  copyText.select();
  copyText.setSelectionRange(0, 99999); /* For mobile devices */
   /* Copy the text inside the text field */
    navigator.clipboard.writeText( url + copyText.value);
  /* Alert the copied text */
  alert("Texto copiado: " + url + copyText.value);
}

$(document).on("click", "#x", function() {
    $("#graficos_rodape").height(0); 
    $("#x").html('<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-chevron-up" viewBox="0 0 16 16">  <path fill-rule="evenodd" d="M7.646 4.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 5.707l-5.646 5.647a.5.5 0 0 1-.708-.708l6-6z"/></svg>');
    $("#x").addClass("fecha_btn");
})

$(document).on("click", ".fecha_btn", function() {
    $("#graficos_rodape").height(180); 
    $("#x").html('<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/></svg>');
    $("#x").removeClass("fecha_btn");
})

function initMap(filtro_status, filtro_grupo, filtro_nome , tipo_filtro) {
    // console.log(filtro_nome);
    let playerStatus = 0;
    let group = 0;
    let negativo_status = 0;
    let negativo_grupo = 0;

    if( tipo_filtro == "avancado" && typeof filtro_nome !== 'undefined' && filtro_nome.toString().length > 3 ) {

        let myArray;

        if (filtro_nome.indexOf("&") !== -1) {
            myArray = filtro_nome.split("&");
            palavra = myArray[0];
            palavra2 = myArray[1];

            palavra = palavra.split("=");
            palavra2 = palavra2.split("=");

            palavra1_a =  palavra[0];
            palavra1_b =  palavra[1];

            palavra2_a = palavra2[0];
            palavra2_b = palavra2[1];
        }else{
            myArray = filtro_nome.split("=");
            palavra1_a =  myArray[0];
            palavra1_b =  myArray[1];
        }

        
        // console.log(palavra1_a, palavra2_a);
        // console.log(palavra1_b, palavra2_b);


        if( typeof palavra1_a !== 'undefined' ){
            palavra1_b = palavra1_b.toUpperCase();
            palavra1_b = palavra1_b.trim();

            if( palavra1_b.startsWith("-") && palavra1_a.trim() == "playerStatus"){
                palavra1_b = palavra1_b.substring(1);
                negativo_status = 1;
            }
            if( palavra1_b.startsWith("-") && palavra1_a.trim() == "group"){
                palavra1_b = palavra1_b.substring(1);
                negativo_grupo = 1;
            }

            if( palavra1_a.trim() == "playerStatus" ){
                playerStatus = palavra1_b;
            }
            if( palavra1_a.trim() == "group" ){
                group = palavra1_b;
            }
        }
        if( typeof palavra2_a !== 'undefined' ){
            palavra2_b = palavra2_b.toUpperCase();
            palavra2_b = palavra2_b.trim();

            if( palavra2_b.startsWith("-") && palavra2_a.trim() == "playerStatus"){
                palavra2_b = palavra2_b.substring(1);
                negativo_status = 1;
            }
            if( palavra2_b.startsWith("-") && palavra2_a.trim() == "group"){
                palavra2_b = palavra2_b.substring(1);
                negativo_grupo = 1;
            }

            if( palavra2_b.startsWith("-") ){
                palavra2_b = palavra2_b.substring(1);
                negativo = 1;
            }

            if( palavra2_a.trim() == "playerStatus" ){
                playerStatus = palavra2_b;
            }
            if( palavra2_a.trim() == "group" ){
                group = palavra2_b;
            }
        }

   

    


    }



    const myLatLng = { lat: -15.3479564, lng: -51.7857964 };
    const map = new google.maps.Map(document.getElementById("map"), {
      zoom: 5,
      minZoom: 1,
      maxZoom: 12,
      center: myLatLng,
    });



    json = "";
    var datastring  = [];
        datastring.push({name: "teste", value: 1 });
            $.ajax({
                type: 'post',
                url: 'dados.php',					
                data: datastring,
                        
                success: function(html,data,response) {
                    json = JSON.parse(html);
                    const markers = []; 
                    let status1 = 0;
                    let status2 = 0;
                    let status3 = 0;
                    let status4 = 0;
                    let status5 = 0;
                    let status6 = 0;

                    let total_download = 0;
                    let baixados = 0;

                    k = 0;   
                    let resultados = 0;
                    let select2_status = false;
                    let select2_grupo = false;

                    if(Array.isArray(filtro_status) && filtro_status.length > 0){
                        select2_status = true;
                        filtro_status = String(filtro_status)
                        json = json.filter(function(event) {
                            return filtro_status.indexOf(  String(event.playerStatus.id) ) > -1
                        })
                    }

                    if(Array.isArray(filtro_grupo) && filtro_grupo.length > 0){
                        select2_grupo = true;
                        filtro_grupo = String(filtro_grupo)
                        json = json.filter(function(event) {
                            return filtro_grupo.indexOf(  String(event.group.id) ) > -1
                        })
                    }
                    // console.log(filtro_status, filtro_grupo, select2_status, select2_grupo)

                    for (var key in json) {
                        let cond_status
                        let cond_grupo
                        let cond_nome
                        cond_nome = true
                        if(tipo_filtro == "avancado"){
                            cond_status = json[key].playerStatus.name == playerStatus
                            cond_grupo = json[key].group.name == group
                            if(negativo_status == 1){
                                cond_status = json[key].playerStatus.name != playerStatus 
                            }
                            if(negativo_grupo == 1){
                                cond_grupo = json[key].group.name != group 
                            }
                        }else{
                            if(select2_status == true){
                                cond_status = true
                            }else{
                                cond_status = json[key].playerStatus.id == parseInt(filtro_status) || filtro_status == 0 || filtro_status === undefined || filtro_status == ""
                            }


                            if(select2_grupo == true){
                                cond_grupo = true
                            }else{
                                cond_grupo =  json[key].group.id == parseInt(filtro_grupo) || filtro_grupo == 0 || filtro_grupo === undefined || filtro_status == ""
                            }

                            if( typeof filtro_nome !== 'undefined' && filtro_nome.toString().length > 0 ){
                                cond_nome =  json[key].name ==  String(filtro_nome) || json[key].id ==  parseInt(filtro_nome)
                            }else{
                                cond_nome = true
                            }
                            // console.log( json[key].name , json[key].playerStatus.id, parseInt(filtro_nome))
                                                  
                        }
                    
                      
                        if( ( cond_status ) 
                            && 
                            (  cond_grupo  ) 
                            &&
                            (  cond_nome  ) 
                            ){
                                resultados++; 
                        let icone = "";
                        let cor = "";
                        total_download = total_download + json[key].contents.total;
                        baixados = baixados + json[key].contents.downloaded;

                        if (json.hasOwnProperty(key)) {
                        //    alert(json[key].id);
                        }
                        if(json[key].playerStatus.name == "NUNCA" ){
                            icone = "img/status_nunca.png"
                            status1++;
                            cor = "#78478f";
                        }else if(json[key].playerStatus.name == "ONLINE"){
                            icone = "img/status_online.png"
                            status2++;
                            cor = "#27CF48";
                        }else if(json[key].playerStatus.name == "ALERTA"){
                            icone = "img/status_alerta.png"
                            status3++;
                            cor = "#ffc107";
                        }else if(json[key].playerStatus.name == "OFFLINE"){
                            icone = "img/status_off.png"
                            status4++;
                            cor = "#020202";
                        }else if(json[key].playerStatus.name == "ASSISTENCIA"){
                            icone = "img/status_assistencia.png"
                            status5++;
                            cor = "#007bff";
                        }else if(json[key].playerStatus.name == "VISITA"){
                            icone = "img/status_visita.png"
                            status6++;
                            cor = "#c11b19";
                        }else{
                            icone = "img/status_nunca.png"
                            cor = "#78478f";
                        }
                        let myLatLng2 = { lat: json[key].geocode.lat, lng: json[key].geocode.lng };
                        percent_download = (json[key].contents.downloaded/json[key].contents.total)*100;
                        
                        marker = new google.maps.Marker({
                            position: myLatLng2,
                            map,
                            title: json[key].name,
                            icon: { url: icone },
                            conteudo: '<div><b>ID:</b> '+json[key].id+'</div>'+
                                '<div><b>NOME:</b> '+json[key].name+'</div>'+
                                '<div><b>END:</b> '+json[key].address.street+'</div>'+
                                '<div><b>Nº:</b> '+json[key].address.number+'</div>'+
                                '<div><b>CIDADE:</b> '+json[key].address.city+'</div>'+
                                '<div><b>ESTADO:</b> '+json[key].address.state+'</div>'+
                                '<div><b>CEP:</b> '+json[key].address.postalCode+'</div>'+
                                '<div><b>PAIS:</b> '+json[key].address.country+'</div>'+
                                '<div><b>COMPLEMENTO:</b> '+json[key].address.complement+'</div>' +
                                '<hr>' +
                                '<div><b>GRUPO:</b> '+json[key].group.name+'</div>' +
                                '<hr>' +
                                '<div><b>STATUS:</b> <span style="background-color:'+cor+';color: #ffffff;top: -2px;position: relative;" class="badge badge-lg">'+json[key].playerStatus.name+'</span></div>' +
                                '<hr>' +
                                '<div><b>DOWNLOADS</b> ['+json[key].contents.downloaded+'/'+json[key].contents.total+']</div><div class="progress"><div class="progress-bar" role="progressbar bg-info" style="width: '+percent_download+'%" aria-valuenow="'+percent_download+'" aria-valuemin="0" aria-valuemax="100"></div></div>' +
                        
                                '<BR><div class="form-row"><div class="col-9"><input class="input-sm filter-main-input" style="max-height: 22px !important;width: 100%" id="texto_coordenadas" type="text" value="https://maps.google.com?q='+json[key].geocode.lat+','+json[key].geocode.lng +'" ></div>' + 
                                '<div class="pl-4 col"><button class="btn-default btn-sm btn_copia_coordenadas" ><svg width="22"  height="24" viewBox="0 0 1792 1792" fill="#000000" xmlns="http://www.w3.org/2000/svg"><path d="M1664 1632v-1088q0-13-9.5-22.5t-22.5-9.5h-1088q-13 0-22.5 9.5t-9.5 22.5v1088q0 13 9.5 22.5t22.5 9.5h1088q13 0 22.5-9.5t9.5-22.5zm128-1088v1088q0 66-47 113t-113 47h-1088q-66 0-113-47t-47-113v-1088q0-66 47-113t113-47h1088q66 0 113 47t47 113zm-384-384v160h-128v-160q0-13-9.5-22.5t-22.5-9.5h-1088q-13 0-22.5 9.5t-9.5 22.5v1088q0 13 9.5 22.5t22.5 9.5h160v128h-160q-66 0-113-47t-47-113v-1088q0-66 47-113t113-47h1088q66 0 113 47t47 113z"/></svg></button></div>'
                        });
            
                        markers.push(marker);

                        marker.addListener('click', function() {
                            $("#modal2").show();
                            $("#modal2").modal();
                            $(".conteudo2_superadm").html(this.conteudo);
                        });
                        }
                    k++;    
             
                    }

                    if(resultados == 0){
                        alert("Verifique seus critérios de busca, pois não há resultado encontrado");
                        $('#valor_busca_simples').val('');
                        initMap(0,0,$('#valor_busca_simples').val() , "basico" )
                        // return false
                    }
                    
                    var markerCluster = new MarkerClusterer(map, markers, {
                        imagePath: 'https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/m',
                        // gridSize: 30,
                        minimumClusterSize: 6
                    });

                    // google.maps.event.addListener(markerCluster, 'clusterclick', function(cluster) {
                    //     // console.log(cluster.getCenter());
                    //     // cosnsole.log(cluster.getSize());
                    //     console.log(cluster.getMarkers());
                    //     var markers = cluster.getMarkers();

                    //     var content = '';
                    //     for (var i = 0; i < markers.length; i++) {
                    //     var marker = cluster[i];
                    //     // content += marker.conteudo;
                    //     // content += ("<br>");
                    //     }
                        
                    //     $("#modal2").show();
                    //     $("#modal2").modal();
                    //     $(".conteudo2_superadm").html(content);
                    

                    // });


                    grafico("nenhum", status1,status2, status3, status4, status5, status6);
                    grafico2("container2", "#baixados", "#nao_baixados", baixados,total_download);
                    // grafico2("container3", "", "", 0,0);
                    // grafico2("container4", "", "", 0,0);

                }
    }); 
}



function grafico(elemento, status1,status2, status3, status4, status5, status6){

    // console.log(status1, status2, status3);
    data_values = [];
    color_values = [];

    $("#div_status_nunca").html(status1);
    $("#div_status_online").html(status2);
    $("#div_status_alerta").html(status3);
    $("#div_status_off").html(status4);
    $("#div_status_assistencia").html(status5);
    $("#div_status_visita").html(status6);

    if ( status1 > 0) { data_values.push({ name: 'Nunca',  y: status1}); color_values.push('#dddddd') };
    if ( status2 > 0) {data_values.push({ name: 'Online',  y: status2}); color_values.push('#00ff00')};
    if ( status3 > 0) {data_values.push({ name: 'Alerta',  y: status3}); color_values.push('#FFA500')};
    if ( status4 > 0) {data_values.push({ name: 'Offline',  y: status4}); color_values.push('#141414')};
    if ( status5 > 0) {data_values.push({ name: 'Assistência',  y: status5}); color_values.push('#0000ff')};
    if ( status6 > 0) {data_values.push({ name: 'Visita',  y: status6}); color_values.push('#ff0000')};

    if(elemento != "nenhum" ) {

            Highcharts.setOptions({
                colors: color_values
            });

            Highcharts.chart(elemento, {
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false,
                type: 'pie',

            },
            title: {
                text: 'Conetividade'
            },
            credits: {
                enabled: false
            },
            exporting: {
                enabled: false
            },
            tooltip: {
                pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
            },
            accessibility: {
                point: {
                    valueSuffix: '%'
                }
            },
            plotOptions: {
                pie: {
                innerSize: '70%',
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    format: '{point.percentage:.1f} %',
                    // format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                }
            }
            },
            series: [{
                name: 'Conectividade',
                data: data_values,
            }]
        });
    }
}

function grafico2(elemento, el_grafico1, el_grafico2, baixados,total_download){

// console.log(status1, status2, status3);
data_values = [];
color_values = [];

data_values.push({ name: 'Não Baixados',  y: total_download - baixados});
data_values.push({ name: 'Baixados',  y: baixados});

$(el_grafico1).html( ((baixados/total_download)*100).toFixed(0) + "%" );
$(el_grafico2).html( (((total_download - baixados)/total_download)*100).toFixed(0) + "%" );

color_values.push('#ea5e5e');
color_values.push('#1dc5ff');

// color_values.push('#dddddd');
// color_values.push('#00ff00');
// color_values.push('#FFA500');
// color_values.push('#141414');
// color_values.push('#0000ff');
// color_values.push('#ff0000');

Highcharts.setOptions({
    colors: color_values
});

Highcharts.chart(elemento, {
chart: {
    plotBackgroundColor: null,
    plotBorderWidth: null,
    plotShadow: false,
    type: 'pie',
    height: 150,
},
title: {
    text: ''
},
credits: {
    enabled: false
},
exporting: {
     enabled: false
},
tooltip: {
    pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
},
accessibility: {
    point: {
        valueSuffix: '%'
    }
},
plotOptions: {
    pie: {
        innerSize: '70%',
        allowPointSelect: true,
        cursor: 'pointer',
        dataLabels: {
            enabled: false,
            format: '{point.percentage:.1f} %',
            // format: '<b>{point.name}</b>: {point.percentage:.1f} %',
        }
    }
},
series: [{
    name: 'Conteúdo',
    data: data_values
}]
});
}




$(document).ready(function() {


    initMap(0,0,$('#valor_busca_simples').val() , "basico" )
    $('#nome_tipo_filtro').html("Avançado");




    $('.select3').on('select2:select', function (e) {
        mantem_one(this)
    });
    $('.select3').on('select2:unselect', function (e) {
        mantem_one(this)
    });

    $('.select2').on('select2:select', function (e) {
        mantem_one(this)
    });
    $('.select2').on('select2:unselect', function (e) {
        mantem_one(this)
    });

    $('.select3').on('select2:opening select2:closing', function( event ) {
        var $searchfield = $(this).parent().find('.select2-search__field');
        $searchfield.prop('disabled', true);
    });

    function mantem_one(el){
        let i = 1;
       
        let elemento =  $(el).next('.select2-container').find('li.select2-selection__choice')
        // let elemento = $(".select2-selection__choice")
        var total = $('option', $(el)).length;
        var selected = ($(el).val() || []).length;
        
        elemento.each(function(index, item){ 
            // console.log(total , selected, index, i );
            if( selected == i ){
                $(this).show();
                $(this).height(20);
            }else{
                $(this).hide();
                $(this).height(0);
            }
            
            i++
        })
    }

    $(".select2").select2({
        placeholder: "Escolha Grupo",
        closeOnSelect: false,
        tags: false,
        allowClear: true,
        minimumResultsForSearch: Infinity,
        templateSelection: function (data) {
            var selected = ($(".select2").val() || []).length;
            var total = $('option', $(".select2")).length;
            // return "Filtro " + selected + " de " + total;
            return "Filtrados:" + selected;
        }
    });


    $(".select3").select2({
        placeholder: "Escolha Status",
        closeOnSelect: false,
        tags: false,
        allowClear: true,
        minimumResultsForSearch: Infinity,
        templateSelection: function (data) {
            var selected = ($(".select3").val() || []).length;
            var total = $('option', $(".select3")).length;
            // return "Filtro " + selected + " de " + total;
            return "Filtrados:" + selected;
        }
    });
   
});

$(document).on("change","#grupo", function() {
    // let base = "https://demonstracao.4yousee.com.br/apps/geomaps?playerStatus=online&group=sãopaulo";
    // $("#url").html( "playerStatus=" + $('#grupo option').filter(':selected').text() );
})


$(document).on("click",".btn_limpa_filtro_basico", function() {
    $("#valor_busca_simples").val('');
    $('.select2').val(null).trigger('change');
    $('.select3').val(null).trigger('change');
    initMap(0,0,$('#valor_busca_simples').val() , "basico" )
})

$(document).on("click",".btn_filtro_avancado", function() {
    $(".filtro_avancado").show();
    $(".filtro_simples").hide();
    $(".btn_filtro_avancado").addClass("btn_filtro_simples");
    $('#nome_tipo_filtro').html("Básico");
})

$(document).on("click",".btn_filtro_simples", function() {
    $(".filtro_avancado").hide();
    $(".filtro_simples").show();
    $(".btn_filtro_avancado").removeClass("btn_filtro_simples");
    $('#nome_tipo_filtro').html("Avançado");
})

$(document).on("click",".btn_busca_avancada", function() {
    initMap( 0, 0 ,  $('#valor_busca').val() , "avancado")
})

$(document).on("click",".btn_busca_simples", function() {
    initMap( $('#status_simples').val(), $('#grupo_simples').val() ,  $('#valor_busca_simples').val() ,"basico" )
})

$(document).on("click",".btn_copia", function() {
    copia_texto("valor_busca","https://demonstracao.4yousee.com.br/apps/geomaps?");
})

$(document).on("click",".btn_copia_coordenadas", function() {
    copia_texto("texto_coordenadas","");
})



$('.owl-carousel').owlCarousel({
    loop:false,
    margin:0,
    nav:true,
    center: false,
    items:4,
    responsive: true,
    responsive:{
        0:{
            items:1
        },
        400:{
            items:2
        },
        800:{
            items:3
        },
        1200:{
            items:4
        }
    }
})
    
    
        $('.owl').owlCarousel({
          center: false,
          loop: false,
          autoplayTimeout: 1000,
          autoplaySpeed: 1000,
          nav: false,
          autoplay: false,
          autoplayHoverPause: false,
          slideTransition: 'linear',
          dots: false,
          autoWidth: true,
          margin: 5,
          responsive: {
            0: {
              items: 1
            },
            300: {
              items: 4
            },
            500: {
              items: 4
            }
          }
        });
    
    
        $(document).ready(function () {
          $(".courses").owlCarousel();
          $(".yourCourses").owlCarousel();
        });