<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=2">
	<title>Manager FILE</title>
	<?=
	script_tag('elfinder/js/jquery-ui-1.12.1/jquery-ui.min.css'),
	link_tag('elfinder/css/elfinder.min.css'),
	link_tag('elfinder/css/windows-10/css/theme.css'),
	script_tag('elfinder/js/jquery-3.4.1.min.js'),
	script_tag('elfinder/js/jquery-ui-1.12.1/jquery-ui.min.js'),
	script_tag('elfinder/js/elfinder.min.js'),
	script_tag('elfinder/js/extras/editors.default.min.js'); ?>
	<script>
		$(document).ready(function () {
			$('#elfinder').elfinder(
				// 1st Arg - options
				{
					cssAutoLoad: false,               // Disable CSS auto loading
					baseUrl: '',                    // Base URL to css/*, js/*
					url: '<?= route_to('filemanager/backend') ?>'  // connector URL (REQUIRED)
					// , lang: 'ru'                    // language (OPTIONAL)
				},
				// 2nd Arg - before boot up function
				function (fm, extraObj) {
					// `init` event callback function
					fm.bind('init', function () {
						// Optional for Japanese decoder "encoding-japanese.js"
						if (fm.lang === 'ja') {
							fm.loadScript(
								['https://cdn.rawgit.com/polygonplanet/encoding.js/1.0.26/encoding.min.js'],
								function () {
									if (window.Encoding && Encoding.convert) {
										fm.registRawStringDecoder(function (s) {
											return Encoding.convert(s, { to: 'UNICODE', type: 'string' });
										});
									}
								},
								{ loadType: 'tag' }
							);
						}
					});
					// Optional for set document.title dynamically.
					var title = document.title;
					fm.bind('open', function () {
						var path = '',
							cwd = fm.cwd();
						if (cwd) {
							path = fm.path(cwd.hash) || null;
						}
						document.title = path ? path + ':' + title : title;
					}).bind('destroy', function () {
						document.title = title;
					});
				}
			);
		});
	</script>
</head>

<body>

	<!-- Element where elFinder will be created (REQUIRED) -->
	<div id="elfinder"></div>
</body>

</html>