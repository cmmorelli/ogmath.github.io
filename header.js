<!--MathJax-->
	<script src="https://polyfill.io/v3/polyfill.min.js?features=es6"></script>
	<script id="MathJax-script" async src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js?"></script>

<!--JSXGraph MathJax Specifications-->
	<script>
		window.MathJax = {
		tex: {
		inlineMath: [ ['$','$'], ["\\(","\\)"] ],
		displayMath: [ ['$$','$$'], ["\\[","\\]"] ],
		packages: ['base', 'ams']
		},
		options: {
		ignoreHtmlClass: 'tex2jax_ignore',
		processHtmlClass: 'tex2jax_process'
		}
		};
	</script>
		
<!--JSXGraph-->
	<script type="text/javascript" charset="UTF-8"
	 src="//cdnjs.cloudflare.com/ajax/libs/jsxgraph/1.1.0/jsxgraphcore.js"></script>
	<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/jsxgraph/1.1.0/jsxgraph.css" />

<!--MathQuill-->
	<link rel="stylesheet" href="/path/to/mathquill.css"/>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="/path/to/mathquill.js"></script>

<!--CSS-->
	<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Ubuntu+Mono" />
	<link rel="stylesheet" href="https://ogmath.com/css/pandoc.css">
	<link rel="stylesheet" href="https://ogmath.com/css/jsxgraph.css">
