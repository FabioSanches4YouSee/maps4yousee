<html>
	<head>
		<title>4youSee</title>
        <meta http-equiv="Content-type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1,minimum-scale=1,maximum-scale=1">
		<script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>

		<link rel="stylesheet" type="text/css" href="./style.css" />
		<link rel="stylesheet" type="text/css" href="css/elevar-custom.css" />

        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
                <!-- jQuery Modal -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<!-- <link href="js/font-awesome.css" rel="stylesheet" /> -->
<!-- <link href="js/select2.min.css" rel="stylesheet" /> -->
<!-- <script src="js/select2.min.js"></script> -->
<!-- <script src="js/select2.multi-checkboxes.js"></script> -->
<!--  -->
<style>
    .modal {
        height: 100% !important;
    }
    .fixed-top {
        z-index: 1;
    }
    .blocker {
        position: initial !important;
        width: 0 !important; 
    }
    #x {
    position: absolute;
    background: #ffffff;
    color: white;
    /* padding: 0px 0px 0px 4px; */ 
    margin-bottom: 4px;
    top: -10px;
    left: 11px;
    z-index: 1;
    cursor: pointer;
}
.modal a.close-modal {
    top: 3.5px !important;
    right: 5.5px !important;
}
.modal{
    z-index: 1 !important;
}
.download-info {
    height: 150px;
    font-size: 0.7rem !important;
    line-height: 1.4;
    font-weight: 500;
    text-transform: uppercase;
    padding: 0 0 0 0 !important;
    margin: 0 0 0 0 !important;
    display: flex;
    flex-direction: column;
    align-content: center;
    justify-content: center;
    align-items: center;
    text-align: center;
}
.players-baixados {
    color: #1dc5ff;
}
.players-nao-baixados {
    color: #ea5e5e;
}
.icone svg{
    width: 2rem;
    bottom: -15px;
}
.select2-container {
    margin-right: 6px !important;
}
.input_menor {
    width: 200px;
    min-width: 200px;
    max-width: 200px;
    height: 20px !important;
    max-height: 20px !important;
   
}
.input_maior {
    width: 200px;
    min-width: 200px;
    max-width: 200px;
    height: 20px !important;
    max-height: 20px !important;
}
.input_fitro_avancado {
    width: 60%;
    min-width: 60%;
    max-width: 60%;
    height: 20px !important;
    max-height: 20px !important;
}
select {
    width: 120px;
    height: 14px !important;
    max-height: 14px !important;
}
.form-group{
    margin-bottom: 0px !important;
    padding-bottom: 0px !important;

}
label{
    margin-bottom: 0px !important;
    padding-bottom: 0px !important;

}
.blocker{
    height: 0px !important;
    padding: 0px !important;
}
.select2-container--default .select2-selection--multiple .select2-selection__choice__display{
    margin-left: 13px !important;
}
.select2-container .select2-search--inline{
    float: none !important;
}
.btn svg{
    margin-left: 7px !important;
}

.off_row{
    margin-right: 0px !important;
    margin-left: 0px !important;
}
.well{
    z-index: 1 !important;
}
.barra_divisoria {
    border-left: 2px solid #dddddd;
    height: 100px;
    position: absolute;
    right: -7px;
    /* margin-left: -19px; */
    top: 30px;
}
.status-rede-info span {
    font-size: 175% !important;
}
.img_vazia{
    width: 45% !important;
    margin-left: 82px !important;
    margin-top: 18px !important;
}






.select2-results__options[aria-multiselectable="true"] li {
    padding-left: 30px;
    position: relative
}

.select2-results__options[aria-multiselectable="true"] li:before {
    position: absolute;
    left: 8px;
    opacity: .6;
    top: 6px;
    font-family: "FontAwesome";
    /* content: "\f00c"; */
}

.select2-results__options[aria-multiselectable="true"] li[aria-selected="true"]:before {
    font-family: "FontAwesome";
    /* content: "\f00c"; */
}
.select2-container--default .select2-results__option--selected:before {
    background-color: #ffffff !important;
    font-family: "FontAwesome";
    content: "\f00c";
}

.select2-container--default .select2-results__option--selected {
    content: "\f00c";
}

.select2-container--default .select2-results__option--highlighted[aria-selected]  {
    background-color: transparent !important;
}
.select2-container--default .select2-results__option--highlighted[aria-selected]:before  {
    background-color: transparent !important;
}
.select2-container--default .select2-results__option[aria-selected=true] {
    background-color: transparent !important;
}
.select2-container--default .select2-results__option--highlighted .select2-results__option--selectable {
    background-color: transparent !important;
}
.select2-container--default .select2-results__option--highlighted[aria-selected] {
    background-color: transparent !important;
    color: #000000 !important;
}
.select2-container--default .select2-results__option--highlighted[aria-selected] {
    background-color: transparent !important;
    color: #000000 !important;
}
.select2-container--default .select2-results__option--selected {
    background-color: transparent !important;
    color: #000000 !important;
}
.select2-selection--multiple{
    max-height: 20px !important;
}
.select2-selection--multiple:before{
    max-height: 20px !important;
}


/* .select2-selection__choice{
    height: 0px !important;
    width: 0px !important;
    border: none !important;
}
.select2-container--default .select2-selection--multiple .select2-selection__choice {
    border: none !important;
    } */


</style>

	</head>
	<body>

    <div class="well filtro_simples">  
        <div style="display: flex" class="form-inline form-filter">  

        
                    <!-- <label class="form-inline" for="valor_busca_simples">ID ou Nome</label> -->
                    <input class="input_maior input-sm filter-main-input valor_busca_simples mx-2 my-1" id="valor_busca_simples" type="text" placeholder="Digite um ID ou Nome">
 
                    <!-- <label for="grupo">Grupo</label> -->
                    <span class="mx-2 my-1">
                    <select multiple="multiple" class="select2 input_menor form-control form-control-sm  input-sm filter-main-input" name="grupo_simples" id="grupo_simples">
                        <!-- <option value="0">Todos os Grupos</option> -->
                        <option value="1">AREZZO</option>
                        <option value="2">PETROBRAS</option>
                        <option value="3">TELA_VERTICAL</option>
                        <option value="4">TELA_HORIZONTAL</option>
                        <option value="5">PAINEIS_LED</option>
                        <option value="6">PAINEIS_LED_VERTICAL</option>
                        <option value="7">PAINEIS_LED_HORIZONTAL</option>
                    </select>
                    </span>

                    <!-- <label for="status">Status</label> -->
                    <span class="mx-2 my-1">
                    <select multiple="multiple" class="select3 input_menor form-control form-control-sm input-sm filter-main-input" name="status_simples" id="status_simples">
                        <!-- <optsion value="0">Todos os Status</option> -->
                        <option value="1">NUNCA</option>
                        <option value="2">ONLINE</option>
                        <option value="3">ALERTA</option>
                        <option value="4">OFFLINE</option>
                        <option value="5">ASSISTÊNCIA</option>
                        <option value="6">VISITA</option>
                    </select>
                    </span>

                <button style="min-height: 24px;" class="mx-2 my-1 btn-default btn-sm btn_busca_simples" >
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="18" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"></path>
                    </svg><span style="font-size: 110%" > &nbsp;Pesquisar</span>
                </button>


                
                <button style="min-height: 24px;" class="mx-2 my-1 btn-default btn-sm btn_limpa_filtro_basico" >
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z"/>
                </svg>
                <span style="font-size: 110%" > &nbsp;Limpar</span>
                </button>

        <span class="mr-2" style="margin-left: auto;order: 2;margin-top: 16px" id="show-hide-advanced-filter">
            <span id="adjust-badge-in-filter" class="btn_filtro_avancado newDesign page-title-qtd" data-toggle="tooltip" ata-placement="top" title="" data-original-title="Mostrar filtro avançado">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#ffffff" class="bi bi-funnel-fill" viewBox="0 0 16 16"><path d="M1.5 1.5A.5.5 0 0 1 2 1h12a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.128.334L10 8.692V13.5a.5.5 0 0 1-.342.474l-3 1A.5.5 0 0 1 6 14.5V8.692L1.628 3.834A.5.5 0 0 1 1.5 3.5v-2z"/></svg><span id="nome_tipo_filtro">&nbsp;Avançado</span>
        </span>

      
            </div>
        </div>



</span>

        <div style="display: none" class="well filtro_avancado">  
        <div style="display: flex" class="last_item form-inline form-filter">  
                
     
                    <!-- <label for="valor_busca">Avançado</label> -->
                    <input class="input_fitro_avancado mx-2 my-1 input-sm filter-main-input valor_busca" id="valor_busca" type="text" placeholder="Digite uma query avançada">
    


                    <button style="min-height: 24px;" class="mx-2 my-1 btn-default btn-sm btn_busca_avancada" >
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="18" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"></path>
                    </svg><span style="font-size: 110%" > &nbsp;Pesquisar</span>
                    
                </button>
                
  
                    <button class="ml-2 btn-default btn-sm btn_copia" >
                        <svg width="18"  height="22" viewBox="0 0 1792 1792" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path d="M1664 1632v-1088q0-13-9.5-22.5t-22.5-9.5h-1088q-13 0-22.5 9.5t-9.5 22.5v1088q0 13 9.5 22.5t22.5 9.5h1088q13 0 22.5-9.5t9.5-22.5zm128-1088v1088q0 66-47 113t-113 47h-1088q-66 0-113-47t-47-113v-1088q0-66 47-113t113-47h1088q66 0 113 47t47 113zm-384-384v160h-128v-160q0-13-9.5-22.5t-22.5-9.5h-1088q-13 0-22.5 9.5t-9.5 22.5v1088q0 13 9.5 22.5t22.5 9.5h160v128h-160q-66 0-113-47t-47-113v-1088q0-66 47-113t113-47h1088q66 0 113 47t47 113z"/>
                        </svg>
                    </button>

                    <span class="mr-2" style="margin-left: auto;order: 2;margin-top: 16px" id="show-hide-advanced-filter">
                        <span id="adjust-badge-in-filter" class="btn_filtro_avancado newDesign page-title-qtd" data-toggle="tooltip" ata-placement="top" title="" data-original-title="Mostrar filtro avançado">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#ffffff" class="bi bi-funnel-fill" viewBox="0 0 16 16"><path d="M1.5 1.5A.5.5 0 0 1 2 1h12a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.128.334L10 8.692V13.5a.5.5 0 0 1-.342.474l-3 1A.5.5 0 0 1 6 14.5V8.692L1.628 3.834A.5.5 0 0 1 1.5 3.5v-2z"/></svg><span id="nome_tipo_filtro">&nbsp;Básico</span>
                    </span>

            </div>
        </div>
          
		<div id="map"></div>

        <div id="modal2">
            <div class="conteudo2_superadm"></div>
        </div>


		<script
			src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBwztbLj9rwMfKWw-AbRrtLA70vp8gkN8I&callback=initMap&v=weekly"
			defer
		></script>

<script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"></script>

<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>

<script src="js/owl/owl.carousel.js"></script>
<link rel="stylesheet" href="js/owl/owl.carousel.min.css" crossorigin="anonymous" />
<link rel="stylesheet" href="js/owl/owl.theme.default.min.css" crossorigin="anonymous" />

<link rel="stylesheet" href="css/4yousee.css" crossorigin="anonymous" />


<nav id="graficos_rodape" style="height: 180px;border-top: 1px solid #dddddd" class="navbar fixed-bottom navbar-light bg-white shadow-sm p-3 bg-white rounded">
    <span id="x" style="z-index: 2 !important" class="btn">
    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/></svg>
</span>

    <div class="owl-carousel">
        <div class="item" >
            <div class="d-flex" style="flex-direction: row;justify-content: space-around;">
            <div class="status-rede-info status-online" style="min-width:45px;color: rgb(80, 50, 83);"><div class="icone"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="32" viewBox="0 0 45 37"><path fill="#503253" d="M37.537 36H7.463c-3.528 0-6.399-2.87-6.399-6.399V7.398C1.064 3.87 3.935 1 7.463 1h30.074c3.529 0 6.399 2.87 6.399 6.398v22.203c0 3.529-2.87 6.399-6.399 6.399zm3.798-28.602c0-2.093-1.704-3.798-3.798-3.798H7.463c-2.094 0-3.797 1.705-3.797 3.798v22.203c0 2.094 1.703 3.799 3.797 3.799h30.074c2.094 0 3.798-1.705 3.798-3.799V7.398zM34.55 29.06H19.364c.147-.408.241-.842.241-1.3 0-.459-.094-.893-.242-1.301H34.55c.718 0 1.301.582 1.301 1.3 0 .719-.584 1.301-1.301 1.301zm-2.59-12.192c-.698-1.085-1.571-2.01-2.552-2.779-.056 3.762-3.131 6.807-6.907 6.807-.184 0-.363-.013-.542-.028l1.322-2.652c2.006-.369 3.531-2.123 3.531-4.234 0-.536-.098-1.053-.287-1.544-.103-.04-.209-.068-.313-.104l1.171-2.348c2.739 1.033 5.121 2.918 6.764 5.474.388.604.214 1.409-.389 1.797-.605.391-1.41.215-1.798-.389zm-11.871 5.615c-.228.457-.687.721-1.165.721-.195 0-.393-.044-.579-.137-.642-.321-.904-1.101-.584-1.745l.826-1.655c-1.779-1.229-2.958-3.266-2.993-5.579-.981.77-1.854 1.694-2.552 2.78-.249.386-.668.598-1.095.598-.241 0-.484-.066-.703-.207-.604-.387-.779-1.193-.391-1.797 2.566-3.991 6.92-6.373 11.647-6.373.445 0 .883.033 1.318.081l1.122-2.25c.32-.643 1.1-.905 1.745-.584.642.321.904 1.102.584 1.745l-7.18 14.402zm2.412-10.794c-1.401 0-2.759.264-4.024.749-.189.49-.287 1.008-.287 1.545 0 1.337.623 2.516 1.582 3.304l2.789-5.595c-.021 0-.04-.003-.06-.003zM11.895 27.76c0 .458.094.892.242 1.3h-1.685c-.718 0-1.3-.582-1.3-1.301 0-.718.582-1.3 1.3-1.3h1.685c-.148.408-.242.842-.242 1.301zm3.856-2.41c1.331 0 2.409 1.079 2.409 2.409 0 1.332-1.079 2.41-2.409 2.41s-2.41-1.079-2.41-2.41c-.001-1.33 1.079-2.409 2.41-2.409z"></path></svg>
            </div> 
            <span id="div_status_nunca">0</span>
            <div style="font-size: 70%"> Nunca <BR>acessado       </div>                         
            </div>
              
            <div class="status-rede-info status-online" style="min-width:45px;color: rgb(39, 207, 72);"><div class="icone"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="32" viewBox="0 0 45 37"><path fill="#27CF48" d="M37.537 1H7.464C3.935 1 1.065 3.871 1.065 7.399v22.202c0 3.528 2.87 6.399 6.399 6.399h30.073c3.528 0 6.398-2.871 6.398-6.399V7.399c0-3.528-2.87-6.399-6.398-6.399zm3.798 28.601c0 2.094-1.704 3.798-3.798 3.798H7.464c-2.094 0-3.798-1.704-3.798-3.798V7.399c0-2.094 1.704-3.798 3.798-3.798h30.073c2.094 0 3.798 1.704 3.798 3.798v22.202zm-30.883-3.142c-.719 0-1.301.582-1.301 1.301 0 .718.582 1.3 1.301 1.3h1.684c-.147-.408-.241-.842-.241-1.3 0-.459.094-.892.241-1.301h-1.684zm24.097 0H19.364c.147.409.242.842.242 1.301 0 .458-.095.892-.242 1.3h15.185c.719 0 1.301-.582 1.301-1.3 0-.719-.582-1.301-1.301-1.301zM15.75 25.35c-1.331 0-2.409 1.079-2.409 2.409 0 1.331 1.079 2.409 2.409 2.409 1.331 0 2.41-1.079 2.41-2.409.001-1.33-1.079-2.409-2.41-2.409zm10.652-7.369c.36.623 1.156.836 1.777.475.622-.36.835-1.155.475-1.777-1.267-2.19-3.626-3.551-6.154-3.551-2.53 0-4.887 1.361-6.153 3.553-.36.622-.148 1.417.475 1.777.205.118.428.174.648.174.45 0 .887-.232 1.128-.651.803-1.39 2.299-2.253 3.902-2.253 1.603 0 3.099.864 3.902 2.253zM14.51 13.542c.332 0 .666-.127.92-.381 1.888-1.888 4.4-2.928 7.07-2.928 2.663 0 5.169 1.035 7.057 2.914.509.508 1.332.506 1.839-.003.507-.51.505-1.333-.004-1.839-2.378-2.369-5.535-3.673-8.892-3.673-3.366 0-6.53 1.31-8.909 3.691-.508.508-.508 1.331 0 1.838.254.254.586.381.919.381zm5.815 7.381c0 1.201.974 2.175 2.175 2.175 1.202 0 2.176-.974 2.176-2.175 0-1.202-.974-2.176-2.176-2.176-1.201 0-2.175.974-2.175 2.176z"></path></svg>
            </div> 
            <span id="div_status_online">0</span> 
            <div style="font-size: 60%"> Online </div> 
                                            
            </div>
                   
            <div class="status-rede-info status-online" style="min-width:35px;color: rgb(255, 162, 0);"><div class="icone"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="32" viewBox="0 0 45 37"><path fill="#FFA200" d="M37.537 1H7.464C3.935 1 1.065 3.871 1.065 7.399v22.202c0 3.528 2.87 6.399 6.399 6.399h30.073c3.528 0 6.398-2.871 6.398-6.399V7.399c0-3.528-2.87-6.399-6.398-6.399zm3.798 28.601c0 2.094-1.704 3.798-3.798 3.798H7.464c-2.094 0-3.798-1.704-3.798-3.798V7.399c0-2.094 1.704-3.798 3.798-3.798h30.073c2.094 0 3.798 1.704 3.798 3.798v22.202zm-30.883-3.142c-.719 0-1.301.582-1.301 1.301 0 .718.582 1.3 1.301 1.3h1.684c-.147-.408-.241-.842-.241-1.3 0-.459.094-.892.241-1.301h-1.684zm24.097 0H19.364c.147.409.242.842.242 1.301 0 .458-.095.892-.242 1.3h15.185c.719 0 1.301-.582 1.301-1.3 0-.719-.582-1.301-1.301-1.301zM15.75 25.35c-1.331 0-2.409 1.079-2.409 2.409 0 1.331 1.079 2.409 2.409 2.409 1.331 0 2.41-1.079 2.41-2.409.001-1.33-1.079-2.409-2.41-2.409zm10.652-7.369c.36.623 1.156.836 1.777.475.622-.36.835-1.155.475-1.777-1.267-2.19-3.626-3.551-6.154-3.551-2.53 0-4.887 1.361-6.153 3.553-.36.622-.148 1.417.475 1.777.205.118.428.174.648.174.45 0 .887-.232 1.128-.651.803-1.39 2.299-2.253 3.902-2.253 1.603 0 3.099.864 3.902 2.253zM14.51 13.542c.332 0 .666-.127.92-.381 1.888-1.888 4.4-2.928 7.07-2.928 2.663 0 5.169 1.035 7.057 2.914.509.508 1.332.506 1.839-.003.507-.51.505-1.333-.004-1.839-2.378-2.369-5.535-3.673-8.892-3.673-3.366 0-6.53 1.31-8.909 3.691-.508.508-.508 1.331 0 1.838.254.254.586.381.919.381zm5.815 7.381c0 1.201.974 2.175 2.175 2.175 1.202 0 2.176-.974 2.176-2.175 0-1.202-.974-2.176-2.176-2.176-1.201 0-2.175.974-2.175 2.176z"></path></svg></div> 
            <span id="div_status_alerta">0</span> 
            <div style="font-size: 60%"> Alerta </div> 
                      
            </div>

            <div class="status-rede-info status-online" style="min-width:35px;color: rgb(129, 152, 165);"><div class="icone"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="32" viewBox="0 0 45 37"><path fill="#8198A5" d="M37.538 36H7.462c-3.528 0-6.398-2.87-6.398-6.399V7.398C1.064 3.87 3.934 1 7.462 1h30.075c3.528 0 6.398 2.87 6.398 6.398v22.203C43.936 33.13 41.066 36 37.538 36zm3.797-28.602c0-2.093-1.704-3.798-3.797-3.798H7.462c-2.093 0-3.797 1.705-3.797 3.798v22.203c0 2.094 1.704 3.798 3.797 3.798h30.075c2.093 0 3.797-1.704 3.797-3.798V7.398zM34.549 29.06H19.364c.147-.408.241-.842.241-1.3 0-.459-.094-.893-.241-1.302h15.185c.718 0 1.3.583 1.3 1.301 0 .719-.582 1.301-1.3 1.301zm-6.581-10.825c.508.508.508 1.332-.001 1.839-.254.254-.586.381-.919.381-.333 0-.667-.127-.921-.381l-3.151-3.151c-.264-.264-.691-.264-.954 0l-3.152 3.151c-.254.254-.586.381-.92.381-.332 0-.666-.127-.92-.381-.508-.508-.508-1.332 0-1.839l3.152-3.152c.263-.263.263-.69 0-.954l-3.152-3.151c-.508-.508-.508-1.332 0-1.839.508-.508 1.332-.508 1.839 0l3.152 3.151c.263.264.69.264.954 0l3.151-3.151c.509-.508 1.332-.508 1.839 0 .509.508.509 1.332.001 1.839l-3.152 3.151c-.264.264-.264.691 0 .954l3.154 3.152zm-9.809 9.524c0 1.332-1.079 2.41-2.409 2.41-1.332 0-2.41-1.079-2.41-2.41 0-1.331 1.079-2.409 2.41-2.409 1.331 0 2.409 1.079 2.409 2.409zm-7.708 1.301c-.718 0-1.3-.582-1.3-1.301 0-.718.582-1.301 1.3-1.301h1.685c-.148.409-.242.843-.242 1.302 0 .458.094.892.242 1.3h-1.685z"></path></svg></div> 
            <span id="div_status_off">0</span> 
            <div style="font-size: 60%"> Offline </div>                                 
            </div>

            <div class="status-rede-info status-online" style="min-width:35px;color: rgb(27, 171, 254);"><div class="icone"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="32" viewBox="0 0 45 37"><path fill="#1BABFE" d="M37.538 36H7.462c-3.528 0-6.398-2.87-6.398-6.399V7.398C1.064 3.87 3.934 1 7.462 1h30.075c3.528 0 6.398 2.87 6.398 6.398v22.203C43.936 33.13 41.066 36 37.538 36zm3.797-28.602c0-2.093-1.704-3.798-3.797-3.798H7.462c-2.093 0-3.797 1.705-3.797 3.798v22.203c0 2.094 1.704 3.798 3.797 3.798h30.075c2.093 0 3.797-1.704 3.797-3.798V7.398zM34.549 29.06H19.364c.147-.408.241-.842.241-1.3 0-.459-.094-.893-.241-1.302h15.185c.718 0 1.3.583 1.3 1.301 0 .719-.582 1.301-1.3 1.301zm-6.581-10.825c.508.508.508 1.332-.001 1.839-.254.254-.586.381-.919.381-.333 0-.667-.127-.921-.381l-3.151-3.151c-.264-.264-.691-.264-.954 0l-3.152 3.151c-.254.254-.586.381-.92.381-.332 0-.666-.127-.92-.381-.508-.508-.508-1.332 0-1.839l3.152-3.152c.263-.263.263-.69 0-.954l-3.152-3.151c-.508-.508-.508-1.332 0-1.839.508-.508 1.332-.508 1.839 0l3.152 3.151c.263.264.69.264.954 0l3.151-3.151c.509-.508 1.332-.508 1.839 0 .509.508.509 1.332.001 1.839l-3.152 3.151c-.264.264-.264.691 0 .954l3.154 3.152zm-9.809 9.524c0 1.332-1.079 2.41-2.409 2.41-1.332 0-2.41-1.079-2.41-2.41 0-1.331 1.079-2.409 2.41-2.409 1.331 0 2.409 1.079 2.409 2.409zm-7.708 1.301c-.718 0-1.3-.582-1.3-1.301 0-.718.582-1.301 1.3-1.301h1.685c-.148.409-.242.843-.242 1.302 0 .458.094.892.242 1.3h-1.685z"></path></svg></div> 
            <span id="div_status_assistencia">0</span> 
            <div style="font-size: 60%">  Demanda <BR> assistência </div>                                  
            </div>

            <div class="status-rede-info status-online" style="min-width:35px;color: rgb(223, 59, 59);"><div class="icone"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="32" viewBox="0 0 45 37"><path fill="#DF3B3B" d="M37.538 36H7.462c-3.528 0-6.398-2.87-6.398-6.399V7.398C1.064 3.87 3.934 1 7.462 1h30.075c3.528 0 6.398 2.87 6.398 6.398v22.203C43.936 33.13 41.066 36 37.538 36zm3.797-28.602c0-2.093-1.704-3.798-3.797-3.798H7.462c-2.093 0-3.797 1.705-3.797 3.798v22.203c0 2.094 1.704 3.798 3.797 3.798h30.075c2.093 0 3.797-1.704 3.797-3.798V7.398zM34.549 29.06H19.364c.147-.408.241-.842.241-1.3 0-.459-.094-.893-.241-1.302h15.185c.718 0 1.3.583 1.3 1.301 0 .719-.582 1.301-1.3 1.301zm-6.581-10.825c.508.508.508 1.332-.001 1.839-.254.254-.586.381-.919.381-.333 0-.667-.127-.921-.381l-3.151-3.151c-.264-.264-.691-.264-.954 0l-3.152 3.151c-.254.254-.586.381-.92.381-.332 0-.666-.127-.92-.381-.508-.508-.508-1.332 0-1.839l3.152-3.152c.263-.263.263-.69 0-.954l-3.152-3.151c-.508-.508-.508-1.332 0-1.839.508-.508 1.332-.508 1.839 0l3.152 3.151c.263.264.69.264.954 0l3.151-3.151c.509-.508 1.332-.508 1.839 0 .509.508.509 1.332.001 1.839l-3.152 3.151c-.264.264-.264.691 0 .954l3.154 3.152zm-9.809 9.524c0 1.332-1.079 2.41-2.409 2.41-1.332 0-2.41-1.079-2.41-2.41 0-1.331 1.079-2.409 2.41-2.409 1.331 0 2.409 1.079 2.409 2.409zm-7.708 1.301c-.718 0-1.3-.582-1.3-1.301 0-.718.582-1.301 1.3-1.301h1.685c-.148.409-.242.843-.242 1.302 0 .458.094.892.242 1.3h-1.685z"></path></svg></div> 
            <span id="div_status_visita">0</span> 
                                           
            <div style="font-size: 60%">  Demanda <BR> visita </div> 
           
            </div>
            
            </div>
            <div class="barra_divisoria"></div>
        </div>

        <div class="item">
            <div class="row off_row">
                <span style="left: 24px !important;" class="col text-center download-info players-baixados">
                    <div id="baixados" style="font-size: 270%"></div>
                    <div style="margin-top: -10px;font-size: 90%">conteúdos <BR>baixados</div>
                </span>

                <span class="col-6" id="container2"></span>

                <span style="right: 24px !important;" class="col text-center download-info players-nao-baixados">
                    <div id="nao_baixados" style="font-size: 270%"></div>
                    <div style="margin-top: -10px;font-size: 90%">conteúdos <BR>não baixados</div>
                </span>
            </div>
            <div class="barra_divisoria"></div>
        </div>

        <div class="item">
            <div class="row off_row img_vazia">
                <img src="img/grafico.jpeg">
            </div>
            <div class="barra_divisoria"></div>
        </div>

        <div class="item">
            <div class="row off_row img_vazia">
                <img class="" src="img/grafico.jpeg">
            </div>
            <div class="barra_divisoria"></div>
        </div>


    </div>
            
</nav>

<script>
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
    
    </script>
<style>


</style>
	</body>
</html>
