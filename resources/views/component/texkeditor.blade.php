
	<div class="w-100" style="margin:auto;padding:12px 6px 0px; ">

	<div class="hs-docs-content-divider" style="overflow:auto;">

		<link rel="stylesheet" href="{{ asset('assets/richtexteditor/rte_theme_default.css') }}" />
		<script type="text/javascript" src="{{asset('assets/richtexteditor/rte.js')  }}"></script>
<script>RTE_DefaultConfig.url_base='richtexteditor'</script>
		<script type="text/javascript" src=''>{{ asset('assets/richtexteditor/plugins/all_plugins.js') }}</script>
		<div id="div_editor1" style="height: 100px;overflow-x: hidden; height:300px; font-family:'Nunito';" >
           
		</div>
		<script>
			var editor1cfg = {}
			editor1cfg.toolbar = editor1cfg.toolbarMobile = "mytoolbar";
			editor1cfg.toolbar_mytoolbar = "{bold,italic,fontsize,forecolor,code}"		+ "#{undo,redo,fullscreenenter,fullscreenexit,togglemore}";;
			var editor1 = new RichTextEditor("#div_editor1", editor1cfg);


		</script>


	</div>
	</div>
